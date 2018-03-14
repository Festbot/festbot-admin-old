
/*
az email validalando form beallitasai

containerhez class="myLoginValidation";
email input class="email"
submit input id="submit" class="btn-primary"
<div className="errorMessage"></div> a hibauzenetre

<style>
form em{
  font-size: 0.8rem;
}
</style>
*/


$(".myLoginValidation").submit(function(e) {

    //e.preventDefault();
    var $error="";


// ures email mezo
    if ($(this).find(".email").val() == "") {
    $error += "<br /><em>The email field is required.</em>";

    }

    if ($(this).find(".password").val() == "") {
    $error += "<br/><em>The password field is required.</em>";

    }

    //alert($(this).find(".email").val());


//ha hiba van kiirja
    if ($error !='') {
       //alert($(this).find(".errorMessage").val());
        $(this).find(".errorMessage").html('<div class="alert alert-danger" role="alert"> <strong>There was an error: </strong>' + $error + '</div>');

        setTimeout(function (){
            $(".errorMessage").empty();
            $(".alert").alert('close');
        }, 4000);
            return false;

      } else {


            //$(this).find(".errorMessage").html('<div class="alert alert-success" role="alert"> <strong></strong></div>');
            $(".btn-primary").hide();

            setTimeout(function (){
              $(".errorMessage").empty();
              $(".alert").alert('close');
              //$(".myLoginValidation").unbind("submit").submit();
            }, 2000);
              return true;
     }

});
