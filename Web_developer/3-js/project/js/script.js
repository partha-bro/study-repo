// alert('Testing, File is attached successfully.');
var shape = document.getElementById('shape');
var timeStart = new Date().getTime();

// The hide shape is displayed
function makeShapeAppear(){

    var colors = ["red","yellow","green","black","blue"];
    var color_no = Math.floor(Math.random() * 5);
    var top = Math.random() * 200;
    var left = Math.random() * 400;
    var width = (Math.random() * 200) + 50;

    if (Math.floor(Math.random() * 10)%2 == 0 ){
        shape.style.borderRadius = "50%";
    }else{
        shape.style.borderRadius = "0%";
    }

    shape.style.position = "relative";
    shape.style.top = top + "px";
    shape.style.left = left + "px";
    shape.style.width = width + "px";
    shape.style.height = width + "px";
    shape.style.backgroundColor = colors[color_no];

    shape.style.display = "block";
    timeStart = new Date().getTime();
}

// call the function after 1 sec or 1000 millisecond
function appearAfterDelat(){
    setTimeout(makeShapeAppear, Math.random() * 2000);
}

appearAfterDelat();

shape.onclick = function(){
    shape.style.display = "none";
    var timeEnd = new Date().getTime();
    var timeTaken = (timeEnd - timeStart) / 1000; // convert milliseconds to seconds
    document.getElementById('timeTaken').innerHTML = timeTaken + 'sec';
    appearAfterDelat();
}