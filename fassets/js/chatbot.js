$(document).ready(function () {
	$("#close_chat").on("click", function (a) {
	  if ($("#close_chat i").hasClass("glyphicon-minus")) {
		$("#chat_board").hide(100);
		$("#close_chat i")
		  .removeClass("glyphicon-minus")
		  .addClass("glyphicon-plus");
	  } else {
		$("#chat_board").show(100);
		$("#close_chat i")
		  .removeClass("glyphicon-plus")
		  .addClass("glyphicon-minus");
	  }
	});
  });

  /**
   * validate function
   */



   const only_string = function (value) {
	return value.match(/^[A-Za-z ]+$/);
  }

  const only_number = function (value) {
	return value.match(/^[0-9]+$/);
  }

  const only_alphanumaric = function (value) {
	return value.match(/^[0-9a-zA-Z ]+$/);
   }

  const only_email = function (value) {
	return value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  }

  const not_blank = function (value) {
	return !(value === undefined || value.length === 0)
  }


  function validate_val(validate_type,value){
	if(validate_type === 'only_string'){
		  return only_string(value);
	}
	if(validate_type === 'only_number'){
		return only_number(value);
	}
	if(validate_type === 'only_alphanumaric'){
		return only_alphanumaric(value);
	}
	if(validate_type === 'only_email'){
		return only_email(value);
	}
	if(validate_type === 'not_blank'){
		return not_blank(value);
	}
	return true;
  }

  function getQuestion(level, qtype) {
	var url = chat_url + "/question/" + level + "/" + qtype;
	console.log("Question called:", url);
	return $.ajax({
	  dataType: "json",
	  url: url,
	  data: [],
	  async: false,
	  success: function (data) {
		return data;
	  },
	});
  }
  function getTagsByParent(parent, callback) {
	var url = chat_url + "/tags/" + parent;
	return $.ajax({
	  dataType: "json",
	  url: url,
	  data: [],
	  async: false,
	  success: function (data) {
		return data;
	  },
	});
	// return $.getJSON(url).done(function(data){return data;});
  }
  
  var question_with_ans = [
	{
	  q: "What kind of legal issue are you facing?",
	  a: [
		{ text: "COMMON LAW", value: "common", parent: "-" },
		{ text: "CRIMINAL LAW", value: "criminal", parent: "-" },
		{ text: "CIVIL LAW", value: "civil", parent: "-" },
		{ text: "STATUTORY LAW", value: "statutory", parent: "-" },
	  ],
	},
  ];
  var subcats = {
	common: [
	  {
		q: "What kind of common issue are you facing?",
		a: [
		  {
			text: "Indigenous Peoples Rrights",
			value: "rights",
			parent: "common",
		  },
		  {
			text: "Health Insurance",
			value: "consumer_protection",
			parent: "common",
		  },
		  { text: "Auto Policy", value: "consumer_protection", parent: "common" },
		  {
			text: "Life insurance",
			value: "consumer_protection",
			parent: "common",
		  },
		],
	  },
	],
	criminal: [
	  {
		q: "What kind of criminal issue are you facing?",
		a: [
		  {
			text: "Identify theft",
			value: "consumer_protection",
			parent: "criminal",
		  },
		  {
			text: "Credit card fraud",
			value: "consumer_protection",
			parent: "criminal",
		  },
		  {
			text: "Insurance Fraud",
			value: "consumer_protection",
			parent: "criminal",
		  },
		  {
			text: "Securities and Investment Fraud",
			value: "consumer_protection",
			parent: "criminal",
		  },
		],
	  },
	],
	civil: [
	  {
		q: "What kind of civil issue are you facing?",
		a: [
		  { text: "LAW OF TORT", value: "tort", parent: "civil" },
		  { text: "CONTRACT LAW", value: "commercial", parent: "civil" },
		  { text: "FAMILY LAW", value: "family", parent: "civil" },
		  { text: "PROPERTY LAW", value: "property", parent: "civil" },
		],
	  },
	],
	statutory: [
	  {
		q: "What kind of statutory issue are you facing?",
		a: [
		  { text: "Asylum", value: "immigration", parent: "statutory" },
		  { text: "Documentation", value: "rights", parent: "statutory" },
		  { text: "Constitutional", value: "rights", parent: "statutory" },
		  { text: "Data Protection", value: "rights", parent: "statutory" },
		],
	  },
	],
  };
  
  function getQuestionWithAns(level, parent,qtype) {
	var tags = [];
	if(qtype == undefined){
		qtype = 1;
	}
	var quest = getQuestion(level, qtype).responseJSON;
	if(quest.length === 0) {
		console.log("No question to display");
		return false;
	}
	if (quest[0].has_option) {
	  tags = getTagsByParent(parent).responseJSON;
	  var resp = {
		q: quest[0].question,
		a: [],
		o:true,
		validate_type: quest[0].validate_type
	  };

	  for (var i = 0; i < tags.length; i++) {
		resp.a.push({
		  text: tags[i].text,
		  value: tags[i].tag,
		  parent: tags[i].parent_tag,
		});
	  }
	} else {
	  var resp = {
		q: quest[0].question,
		a: [{
			text: "",
			value: "",
			parent: parent,
		  }],
		o:false,
		validate_type: quest[0].validate_type
	  };
	}
	return resp;
  }
  
  // if (parent == '-') {
  // 	return question_with_ans[0];
  // }
  
  // console.log('level : ', level, "parent : ", parent);
  // return (subcats[parent] === undefined) ? false : subcats[parent][0];
  var qus_ans = [];
  jQuery(function ($) {
	var count = 0;
	var level = 1;
	var convForm = $("#chat").convform({
	  eventList: {
		onInputSubmit: function (convState, ready) {
		  console.log("input is being submitted...");
		  //here you send the response to your API, get the results and build the next question
		  //when ready, call 'ready' callback (passed as the second parameter)
		  console.log(
			"convState.current.answer.value:",
			convState.current.answer
		  );
		  if (convState.current.answer.value === "end") {
			convState.current.next = false;
			//emulating random response time (100-600ms)
			setTimeout(ready, Math.random() * 5000 + 100);
		  } else {
			var answer = convState.current.answer.value;
			var parent = "-";
			var qtype = 1;
			if(qus_ans.length > 0 && !qus_ans[qus_ans.length-1]['status']){
				//todo find last question for validation
				let vtype = qus_ans[qus_ans.length-1]['validate_type'];
				if(!validate_val(vtype,answer)){
					parent = qus_ans[qus_ans.length-1]['parent'];
					level--;
					qtype = 0;
				}
				qus_ans[qus_ans.length-1]['answer'] = answer;
			}else{
				if (!!convState.current.answer.parent) {
					parent = convState.current.answer.value;
					level++;
				}
			}
			if (level == 1 && answer == "end") {
			  convState.current.next = false;
			  //emulating random response time (100-600ms)
			  setTimeout(ready, Math.random() * 5000 + 100);
			}
			let qa = getQuestionWithAns(level, parent,qtype);
			let nqa = qa;
			nqa['parent'] = parent;
			nqa['status'] = false;
			qus_ans.push(nqa);
			console.log("qa:", qa);
			if (!qa) {
				console.log('all data',JSON.stringify(qus_ans));
				var win = window.open(baseurl+'Lawyer', '_blank');
				if (win) {
					//Browser has allowed it to be opened
					win.focus();
				} else {
					//Browser has blocked it
					alert('Please allow popups for this website');
				}
			  convState.current.next = true;
			  //emulating random response time (100-600ms)
			  level = 0;
			  setTimeout(ready, Math.random() * 5000 + 100);
			}

			convState.current.next = convState.newState({
			  type: qa.o?"select": "text",
			  name: "dynamic-question-" + count,
			  questions: [qa.q],
			  answers: qa.a,
			});

			//emulating random response time (100-600ms)
			setTimeout(ready, Math.random() * 500 + 100);
			
			level++;
		  }
		  count++;
		},
	  },
	});
  });