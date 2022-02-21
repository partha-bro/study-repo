<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jQuery | Web Developer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="shape red-box"></div>
        <div class="shape green-circle"></div>
        <div class="shape red-box"></div>
        <div class="clear"></div>
        <hr>
        <p id="text">This is some text.</p>
        <button>Hover & Click</button><br/>
        <!-- <iframe src="https://www.codestars.com/" frameborder="0"></iframe> -->

        <hr>
        <h3>Fade In & Out</h3>
        <div class="shape red-box" id="div_fade"></div>
        <button id="fadeout">fadeOut</button>
        <button id="fadein">fadeIn</button>
        <button id="fadetoggle">fadeToggle</button>

        <hr>
        <h3>Animate Content</h3>
        <div id="div_animate"></div>


        <hr>
        <h3>Regular Expresion</h3>
        <p id="regex_text">Regular Expresion is great.</p>
        <h3 id="result">Reselt</h3>
        <p id="regex_no">Partha no: 7011483096</p>
        <h3 id="result_no">Reselt</h3>

        <hr>
        <div id="form">
            <p id="errorMessage"></p>
            <p id="successMessage"></p>
            <label for="email">Email:</label>
            <input type="text" id="email" value="">
            <br/>
            <label for="phn">Phone:</label>
            <input type="text" id="phn" value="">
            <br/>
            <label for="password">Password:</label>
            <input type="password" id="password" value="">
            <br/>
            <label for="passwordConfirm">Confirm Password:</label>
            <input type="password" id="passwordConfirm" value="">
            <br/>
            <input type="submit" id="submit" value="Sign Up">
        </div>

        <hr>
        <p>Intro of jQuery UI</p>
        <button><a href="jQuery-ui/">jQuery UI Website</a></button>
        
        <!-- jQuery CDN -->
        <script type="text/javascript" src="js/jquery-3.6.0.min.js" ></script>
        <script type="text/javascript" src="js/myScript.js"></script>
    </body>
</html>