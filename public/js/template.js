$(document).ready(function () {
    $("#templateSubmit").click(function (e) {  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        let errore = false; //controllo che i campi non siano vuoti o non validi
   

        if ($("#tempname").val().trim() == "") {    //nome scheda vuota
            errore = true;
            $("#validationServerTempNameFeedback").html('dare un nome alla scheda');
            $("#tempname").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerTempNameFeedback").html('');
            $("#tempname").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //descrizione vuota
        if ($("#descr").val().trim() == "") {
            errore = true;
            $("#validationServerDescriptionFeedback").html('inserire descrizione');
            $("#descr").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerDescriptionFeedback").html('');
            $("#descr").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        if (!errore) {    //submitta il form
            $("form#formTemplate").submit();
        }


    });
});