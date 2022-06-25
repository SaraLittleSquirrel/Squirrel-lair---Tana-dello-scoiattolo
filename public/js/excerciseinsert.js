$(document).ready(function () {
    $("#exSubmit").click(function (e) {  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        let errore = false; //controllo che i campi non siano vuoti o non validi

        //esercizio non scelto
        if ($("#excercise option:selected").val() == "") {
            errore = true;
            $("#validationServerExcerciseFeedback").html("scegliere un esercizio");
            $("#excercise").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerExcdrciseFeedback").html('');
            $("#excercise").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //giorno non scelto
        if ($("#day option:selected").val() == "") {
            errore = true;
            $("#validationServerDayTrainingFeedback").html("scegliere un giorno");
            $("#day_training").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerDayTrainingFeedback").html('');
            $("#day_training").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //numero serie vuoto
        if ($("#set").val().trim() == "") {
            errore = true;
            $("#validationServerSetFeedback").html('inserire numero serie');
            $("#sets").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerSetFeedback").html('');
            $("#sets").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //progressione non scelta
        if ($("#progression option:selected").val() == "") {
            errore = true;
            $("#validationServerProgressionSchemeFeedback").html("scegliere progressione");
            $("#progressionScheme").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerProgressionSchemeFeedback").html('');
            $("#progressionScheme").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rep min vuoto
        if ($("#rep_min").val().trim() == "") {
            errore = true;
            $("#validationServerRepMinFeedback").html('inserire rip minime');
            $("#rpmin").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerRepMinFeedback").html('');
            $("#rpmin").removeClass("is-invalid"); //toglie la classe is-invalid
        }
        
        //rep max vuoto 
        if ($("#rep_max").val().trim() == "") {
            errore = true;
            $("#validationServerRepMaxFeedback").html('inserire rip max');
            $("#rpmax").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerRepMaxFeedback").html('');
            $("#rpmax").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rec min vuoto
        if ($("#rec_min").val().trim() == "") {
            errore = true;
            $("#validationServerRecMinFeedback").html('inserire recupero min');
            $("#rcmin").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerRecMinFeedback").html('');
            $("#rcmin").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rec max vuoto
        if ($("#rec_max").val().trim() == "") {
            errore = true;
            $("#validationServerRecMaxFeedback").html('inserire recupero max');
            $("#rcmax").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerRecMaxFeedback").html('');
            $("#rcmax").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //carico vuoto
        if ($("#load").val().trim() == "") {
            errore = true;
            $("#validationServerLoadFeedback").html('inserire carico');
            $("#weight").addClass("is-invalid"); //mette la classe is-invalid

        }
        else{
            $("#validationServerLoadFeedback").html('');
            $("#weight").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        // tipo di carico
        if ($("#load_type option:selected").val() == "") {
            errore = true;
            $("#validationServerLoadTypeFeedback").html("scegliere tipo di carico");
            $("#loadt").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerLoadTypeFeedback").html('');
            $("#loadt").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //submitta il form se non ci sono errori
        if (!errore) {    
            $("form#formExInsert").submit();
        }


    });
});