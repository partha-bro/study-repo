var buttonNumber = document.querySelectorAll('button').length;
for (let index = 0; index < buttonNumber; index++) {
    document.querySelectorAll('button')[index].addEventListener('click',function (){
        alert('i got clicked.');
    });  
}
