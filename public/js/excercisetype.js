$(document).ready(function () {
    $("#exTypeSubmit").click(function (e) {  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        let errore = false; //controllo che i campi non siano vuoti o non validi
   

        if ($("#exname").val().trim() == "") {    //nome esercizio vuoto
            errore = true;
            $("#validationServerExNameFeedback").html('dare un nome ad esercizio');
            $("#exname").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerExNameFeedback").html('');
            $("#exname").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //attrezzatura vuota
        if ($("#equipment").val().trim() == "") {
            errore = true;
            $("#validationServerEquipmentFeedback").html('inserire attrezzatura');
            $("#equipment").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerEquipmentFeedback").html('');
            $("#equipment").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //gruppo allenato non scelto
        if ($("#trained_body_part option:selected").val() == "") {
            errore = true;
            $("#validationServerBodyPartFeedback").html("scegliere un gruppo muscolare");
            $("#trained_body_part").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerBodyPartFeedback").html('');
            $("#trained_body_part").removeClass("is-invalid"); //toglie la classe is-invalid
        }


        if (!errore) {    //submitta il form
            $("form#formExType").submit();
        }


    });
});