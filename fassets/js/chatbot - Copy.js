// import { getTags } from "../../backend/controllers/tag.controller";
function getQuestion(level,qtype){
    var url = chat_url+'/question/'+level+'/'+qtype;
    console.log('Question called:',url);
    return $.ajax({
        dataType: "json",
        url: url,
        data: [],
        async:false,
        success: function(data){
            console.log('questions:',data.result);
            return data.result;
        }
      });

    // return $.getJSON(url).done(function(data){
    //     return data;
    // });
}
function getTagsByParent(parent,callback){
    var url = chat_url+'/tags/'+parent;
    return $.ajax({
        dataType: "json",
        url: url,
        data: [],
        async:false,
        success: function(data){
            console.log('tags:',data.result);
            return data.result;
        }
      });
    console.log('Tag called:',url);
    // return $.getJSON(url).done(function(data){return data;});
}
$(document).ready(function () {
    var count = 1;
    // getQuestion(1,1);
    // getTagsByParent('-');

    function getQuestionWithTags(level,qtype,parent){
        // parent = "-";
        
        // var question = getQuestion(level,qtype);
        // var tags = getTagsByParent(parent);
        
        return {
            q : getQuestion(level,qtype).responseJSON.result,
            a : getTagsByParent(parent).responseJSON.result
        }
                 
    }


    var convForm = $('#chat').convform({
        eventList: {
            onInputSubmit: function (convState, ready) {
                console.log('input is being submitted...');
                //here you send the response to your API, get the results and build the next question
                //when ready, call 'ready' callback (passed as the second parameter)
                if (convState.current.answer.value === 'end') {
                    convState.current.next = false;
                    //emulating random response time (100-600ms)
                    // setTimeout(ready, Math.random() * 500 + 100);
                } else {
                    console.log('answer:',convState.current.answer);
                    if (Array.isArray(convState.current.answer)) var answer = convState.current.answer.join(', ');
                    else var answer = convState.current.answer.text;
                    var qx = getQuestionWithTags(count,1,'-');
                    convState.current.next = convState.newState({
                        type: 'select',
                        name: 'dynamic-question-' + count,
                        questions: [qx.q],
                        answers: qx.a
                    });
                    //emulating random response time (100-600ms)
                    // setTimeout(ready, Math.random() * 500 + 100);
                }
                count++;
            }
        }
    });
});

// function getQuestion(level,qtype){
//     console.log('Question called:','http://localhost:3000/api/questionnaire?level='+level+'&qtype='+qtype);
//         $.get('http://localhost:3000/api/questionnaire?level='+level+'&qtype='+qtype,function(data,status){
//             console.log("question:",arguments);
//         });
// }
// function getTagsByParent(parent){
//     console.log('Tag called:','http://localhost:3000/api/tag?parent='+parent);
//         $.get('http://localhost:3000/api/tag?parent='+parent,function(data,status){
//             console.log("tags:",arguments);
//         });
// }