
/*
a validalando form beallitasai

class="myFormValidation";
email input class="email"
submit input id="submit" class="btn-primary"
<div className="errorMessage"></div> a hibauzenetre

*/


$(".myFormValidation").submit(function(e) {

    e.preventDefault();
    var $error="";

// ures email mezo
    if ($(this).find(".email").val() == "") {
    $error += "<p>The email field is required.</p>";

    }

    //alert($(this).find(".email").val());


//ha hiba van kiirja
    if ($error !='') {
       //alert($(this).find(".errorMessage").val());
        $(this).find(".errorMessage").html('<div class="alert alert-danger" role="alert"> <strong>There was an error: </strong>' + $error + '</div>');

            return false;


      } else {


            $(this).find(".errorMessage").html('<div class="alert alert-success" role="alert"> <strong>Your application has been submitted, thank you!</strong></div>');
            $(".btn-primary").hide();
            setTimeout(function (){
              $(".myFormValidation").unbind("submit").submit();
              return true;
            }, 2000);

     }

});
