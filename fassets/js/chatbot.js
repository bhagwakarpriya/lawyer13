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
  
  function getQuestion(level, qtype) {
	var url = chat_url + "/question/" + level + "/" + qtype;
	console.log("Question called:", url);
	return $.ajax({
	  dataType: "json",
	  url: url,
	  data: [],
	  async: false,
	  success: function (data) {
		console.log("questions:", data);
		return data;
	  },
	});
  }
  function getTagsByParent(parent, callback) {
	var url = chat_url + "/tags/" + parent;
	console.log("Tag called:", url);
  
	return $.ajax({
	  dataType: "json",
	  url: url,
	  data: [],
	  async: false,
	  success: function (data) {
		console.log("tags:", data);
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
  
  function getQuestionWithAns(level, parent) {
	var tags = [];
	var quest = getQuestion(level, 1).responseJSON;
	if(quest.length === 0) {
		console.log("No question to display");
		return false;
	}
	if (quest[0].has_option) {
	  tags = getTagsByParent(parent).responseJSON;
	  var resp = {
		q: quest[0].question,
		a: [],
		o:true
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
	  };
	}
	return resp;
  }
  
  // if (parent == '-') {
  // 	return question_with_ans[0];
  // }
  
  // console.log('level : ', level, "parent : ", parent);
  // return (subcats[parent] === undefined) ? false : subcats[parent][0];
  
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
			if (!!convState.current.answer.parent) {
			  parent = convState.current.answer.value;
			  level++;
			}
			if (level == 1 && answer == "end") {
			  convState.current.next = false;
			  //emulating random response time (100-600ms)
			  setTimeout(ready, Math.random() * 5000 + 100);
			}
			let qa = getQuestionWithAns(level, parent);
			console.log("qa:", qa);
			if (!qa) {
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
  