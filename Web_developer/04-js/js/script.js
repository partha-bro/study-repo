// JS code starts here
console.log('Page is Up...!');
// alert('Page is loaded!!!');

// Now we can change text of p tag 
function textChangebyId(){
    document.getElementById('partha').innerHTML="Hello Partha";
}
function textChangeByClass(){
    document.getElementsByClassName("arjun")[1].innerHTML="Hello Arjun";
}
function textChangeByTagName(){
    document.getElementsByTagName("p")[2].style.color="red";
}

document.getElementById('myButton').onclick = function(){
    alert('Button Clicked.')
    document.getElementById('myText').innerHTML = "I think, "+document.getElementById('myText').innerHTML+" <b>Awesome</b>.";
}
document.getElementById("myStyleButton").onclick = function(){
    var text = document.getElementById('styleText');
    text.style.color = "red";
    text.style.fontSize = "35px";
    text.style.textDecoration = "italic";
    text.style.backgroundColor = "yellow";

}
document.getElementById('red').onclick = function(){
    document.getElementById('red').style.display = "none";
}
document.getElementById('yellow').onclick = function(){
    document.getElementById('yellow').style.display = "none";
}
document.getElementById('green').onclick = function(){
    document.getElementById('green').style.display = "none";
}
document.getElementById('submit').onclick = function(){
    var input_text = document.getElementById('inputText').value;
    document.getElementById('textResult').innerHTML = input_text;
}

// Array
var array = [];
console.log('array')
array[0] = "pizza";
console.log(array)
array[1] = "burger";
console.log(array)
array.push("KFC");
console.log(array);
array.splice(1,1,'Roasted chicken');
console.log(array);


var x = 1;
if( x==1 ){
    console.log('Condition True');
}else{
    console.log('Condition False');
}

document.getElementById('guess_btn').onclick = function(){
    var guess_input_text = document.getElementById('guess_input').value;
    // var lucky_no = Math.floor((Math.random() * 10) + 1);
    var lucky_no = Math.random();
    lucky_no = lucky_no * 11;
    lucky_no = Math.floor(lucky_no);

    if(lucky_no == guess_input_text){
        alert('Won, You are lucky');
    }else{
        alert(lucky_no+' Loss, Try again!');
    }
}