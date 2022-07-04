$(document).ready(function () {
    //per controllare tutti i campi
    $("#registrationSubmit").click(function (e) {

        e.preventDefault(); //per prevenire il submit immediato

        let errore = false; //controllo che i campi non siano vuoti o non validi
        var re = new RegExp("^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.{8,})"); //reg ex per controllo password

        //username vuoto, almeno 3 caratteri, esiste già
        if ($("#floatingUsername").val().trim() == "") {    
            errore = true;
            $("#validationServerUsernameFeedback").html('username non può essere vuoto');
            $("#floatingUsername").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if ($("#floatingUsername").val().trim().length < 3){ 
            errore = true;
            $("#validationServerUsernameFeedback").html('username deve avere almeno 3 caratteri');
            $("#floatingUsername").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if (usernameExists($("#floatingUsername").val().trim())) {
            errore = true;
            $("#validationServerUsernameFeedback").html('username esiste già');
            $("#floatingUsername").addClass("is-invalid"); //mette la classe is-invalid
        }
        else {
            $("#validationServerUsernameFeedback").html('');
            $("#floatingUsername").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        // check parametri password
        if (!re.test($("#floatingPassword").val().trim())) {
            errore = true;
            $("#validationServerPasswordFeedback").html("la password non rispetta i parametri");
            $("#floatingPassword").addClass("is-invalid"); //mette la classe is-invalid
        }
        else {
            $("#validationServerPasswordFeedback").html("");
            $("#floatingPassword").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //password uguali
        if ($("#floatingPassword").val().trim() != ($("#floatingPasswordConfirmation").val().trim())) {
            errore = true;
            $("#validationServerPasswordConfirmFeedback").html("le password devono essere uguali");
            $("#floatingPassword").addClass("is-invalid");
            $("#floatingPasswordConfirmation").addClass("is-invalid"); //mette la classe is-invalid
        }
        else {
            $("#validationServerPasswordConfirmFeedback").html("");
            $("#floatingPasswordConfirmation").removeClass("is-invalid"); //toglie la classe is-invalid
        }
        //submitta il form 
        if (!errore) {    
            $("form#formRegistration").submit();
        }
    });
});

//controllo se l'username esiste già. 
function usernameExists(username) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    return $.ajax({
        url: "/check_username",
        data: "username=" + username,
        method: 'GET',
        async: false
    }).responseText;
};