$(document).ready(function(){
    $("#registrationSubmit").click(function(e){  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        let errore=false; //controllo che i campi non siano vuoti o non validi
        
        if($("#floatingUsername").val().trim()==""){    //username non vuoto
            errore  = true;
            $("#validationServerUsernameFeedback").html('username non può essere vuoto');
            $("#floatingUsername").addClass("is-invalid"); //mette la classe is-invalid

        }

        //TODO: password non vuota 
        //      le due password devono essere uguali
        //      la password deve avere tot caratteri (non fare trim)
        //      mettere la classe is-invalid nei campi della password

        if(!errore){    //submitta il form
            $("form#formRegistration").submit();
        }


    });
});