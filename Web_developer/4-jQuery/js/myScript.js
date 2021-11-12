// This condion is used for knowing that jQuery is attached successfully or not
// jQuery is a variable in "jquery-3.6.0.min.js" file
if( typeof jQuery == 'undefined' ){
    alert('jQuery is not installed.')
}else{
    console.log('jQuery is installed correctly.');
}


$(document).ready(function(){

    // click Event
    $('.shape').click(function(){
        alert('Shaped is clicked.');

        // Changing website content
        $("#text").html('This is changed text.');

        
    });

    // hover any element
    $('button').hover(function(){
        $("#text").html('Button is hover.');
        // change color
        $("#text").css('color','red');
        $("#text").css('background-color','yellow');
        //alert("iframe Width="+$("iframe").css('width')+", Height="+$("iframe").css('height'));
    });

    // change any attibute content
    $('button').click(function(){        
        $('iframe').attr('src','http://dsdigital.com/');
    });

    // this keyword
    $('.shape').click(function(){
        $(this).css('display','none');
    });

    // fading Content
    $('#fadein').click(function(){
        $('#div_fade').fadeIn('slow',function(){
            alert('Shaped is disblayed.');
        });
    });
    $('#fadeout').click(function(){
        $('#div_fade').fadeOut('slow');
    });
    $('#fadetoggle').click(function(){
        $('#div_fade').fadeToggle('slow');
    });

    // Animate Content
    $('#div_animate').click(function(){
        $(this).animate({
            width:"200px",
            height:"200px",
            margin:"10px"
        },2000, function(){
            $(this).css('backgroundColor','blue');
        });
    });

    // Regular Expresion
    var regex = /E/ig;
    var string = $('#regex_text').html();
    var result = string.match(regex);
    $('#result').html(result);

    var regex_no = /[0-9]/ig;
    var string_no = $('#regex_no').html();
    var result_no = string_no.match(regex_no);
    $('#result_no').html(result_no);

    // Form validation
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
      }

    $('#submit').click(function(){
        var errorMessage = "";

        if ( $('#email').val() && $('#phn').val() && $('#password').val() ) {
            if (isEmail($('#email').val()) == false) {
                errorMessage += 'Email issue<br/>';
            }
            if ($.isNumeric($('#phn').val()) == false) {
                errorMessage += 'Phone issue<br/>';
            }
            if ($('#password').val() != $('#passwordConfirm').val()) {
                errorMessage += 'Not same password<br/>';
            }
    
            // alert(errorMessage);
        }else{
            alert('Fields are missing.');
        }

        if (errorMessage) {
            $('#errorMessage').html(errorMessage);
        }else{
            $('#successMessage').html('You did it...!');
            $('#errorMessage').hide();
        }
        
        
    });
});