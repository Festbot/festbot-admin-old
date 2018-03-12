



$("form").submit(function(e) {

  //  e.preventDefault();
    var error="";

// ures email mezo
    if ($("#emailEnterprise").val() == "") {
    error += "<p>The email field is required.</p>";

    }
//ha hiba van kiirja
    if (error !="") {
        $("#errorEnterprise").html('<div class="alert alert-danger" role="alert"> <strong>There was an error: </strong>' + error + '</div>');

            return false;

      } else {

            return true;

//        $("form").unbind("submit").submit();


     }

});

