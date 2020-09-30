class QAData{

    constructor(question){
        
        //this.question = question;

        this.data = QAdata;
        
    };
    setQuestion(question){
        this.question = question;
    }
    getQuestion(){
       return this.question;
    }


stripper(phrase){
    console.log("stripper");
    phrase = phrase.toLowerCase();
    phrase = phrase.replace(/[.,\/#!$%\^&\*;:{}=\-_`'~()?]/g,"")
    var x = 1;
    //phrase = phrase + new Array(x + 1).join(' ')
    phrase = ' '.repeat(x) + phrase;
    phrase = phrase + ' '.repeat(x);
    
    console.log(phrase);
    
    phrase = phrase.replace(/ who /g,' ');
    phrase = phrase.replace(/ whos /g,' ');
    phrase = phrase.replace(/ what /g,' ');
    phrase = phrase.replace(/ whats /g,' ');
    phrase = phrase.replace(/ where /g,' ');
    phrase = phrase.replace(/ whers /g,' ');
    phrase = phrase.replace(/ why /g,' ');
    phrase = phrase.replace(/ how /g,' ');
    phrase = phrase.replace(/ hows /g,' ');
    phrase = phrase.replace(/ is /g,' ');
    phrase = phrase.replace(/ the /g,' ');
    phrase = phrase.replace( / a /g ,' ');                                                  
    phrase = phrase.replace(/ your /g,' ');
    phrase = phrase.replace(/ are /g,' ');
    phrase = phrase.replace(/ tell /g,' ');
    phrase = phrase.replace(/ question /g,' ');
    phrase = phrase.replace(/ i /g,' ');
    phrase = phrase.replace(/ that /g,' ');
    phrase = phrase.replace(/ this /g,' ');
    phrase = phrase.replace(/ me /g,' ');
    phrase = phrase.replace(/ does /g,' ');
    phrase = phrase.replace(/ mean /g,' ');
    phrase = phrase.replace(/ means /g,' ');
    phrase = phrase.replace(/ meaning /g,' ');
    phrase = phrase.replace(/ about /g,' ');
    phrase = phrase.replace(/ know /g,' ');
    phrase = phrase.replace(/ happen /g,' ');
    phrase = phrase.replace(/ explain /g,' ');
    phrase = phrase.replace(/ to /g,' ');
    phrase = phrase.replace(/ do /g,' ');
    phrase = phrase.replace(/ could /g,' ');
    phrase = phrase.replace(/ would /g,' ');
    phrase = phrase.replace(/ want /g,' ');
    phrase = phrase.replace(/ need /g,' ');
    phrase = phrase.replace(/ please /g,' ');
    phrase = phrase.replace(/ about /g,' ');
    phrase = phrase.replace(/ can /g,' ');
    phrase = phrase.replace(/ explain /g,' ');
    phrase = phrase.replace(/ describe /g,' ');
    phrase = phrase.replace(/ inform /g,' ');
    phrase = phrase.replace(/ disclose /g,' ');
    phrase = phrase.replace(/ define /g,' ');
    phrase = phrase.replace(/ information /g,' ');
    phrase = phrase.replace(/ for /g,' ');
    phrase = phrase.replace(/ give /g,' ');
    phrase = phrase.replace(/ regarding /g,' ');
    phrase = phrase.replace(/ apprise /g,' ');
    phrase = phrase.replace(/ teach /g,' ');
    phrase = phrase.replace(/ you /g,' ');
    phrase = phrase.replace(/ find /g,' ');
    phrase = phrase.replace(/ search /g,' ');
    phrase = phrase.replace(/ locate /g,' ');
    phrase = phrase.replace(/ location /g,' ');
    

    phrase = phrase.trim();
    
    //phrase = phrase.replace(/^\s+/g, '');
    return phrase;
}

 

getQAdata(){
var arrayOfObjectAnswers = this.data.arrayOfAnswers
        


var question = this.question;
var answer = null;

arrayOfObjectAnswers.forEach(function (arrayItem) {
    var questionMatch = false; 
    var obj = arrayItem;
    
    //this loops through the keys, when it finds a match it assigns an anser to the next  key value in the object
    for (var key in obj) {
        //console.log(key + " -> " + obj[key]);

            question = question.toLowerCase();
            //stripper(question);

            var keyString = obj[key];
            keyString = keyString.toLowerCase();

            
            
            if(questionMatch === true){
                answer = ((obj[key]));
                //return (obj[key]);
            }
            
        
            if(question === keyString){
                questionMatch = true;
                
            }
        
            
    }
  

});



return answer; 
    
};

    


}



