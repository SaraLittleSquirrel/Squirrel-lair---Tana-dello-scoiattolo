$(document).ready(function () {
    $("#exSubmit").click(function (e) {  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        var int_reg = /^\d+$/;

        let errore = false; //controllo che i campi non siano vuoti o non validi

        console.log(int_reg.test($('#set').val().trim()));

        //esercizio non scelto
        if ($("#excercise option:selected").val() == "") {
            errore = true;
            $("#validationServerExcericseFeedback").html("scegliere un esercizio");
            $("#excercise").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerExcericseFeedback").html('');
            $("#excercise").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //giorno non scelto
        if ($("#day_training option:selected").val() == "") {
            errore = true;
            $("#validationServerDayTrainingFeedback").html("scegliere un giorno");
            $("#day_training").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerDayTrainingFeedback").html('');
            $("#day_training").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //numero serie vuoto - valore numerico
        if ($("#set").val().trim() == "") {
            errore = true;
            $("#validationServerSetFeedback").html('inserire numero serie');
            $("#set").addClass("is-invalid"); //mette la classe is-invalid

        }
        else if(!(int_reg.test($('#set').val().trim()))){
            errore = true;
            $("#validationServerSetFeedback").html('deve essere un numero');
            $("#set").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerSetFeedback").html('');
            $("#set").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //progressione non scelta
        if ($("#progression option:selected").val() == "") {
            errore = true;
            $("#validationServerProgressionSchemeFeedback").html("scegliere progressione");
            $("#progression").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerProgressionSchemeFeedback").html('');
            $("#progression").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rep min vuoto - valore numerico
        if ($("#rep_min").val().trim() == "") {
            errore = true;
            $("#validationServerRepMinFeedback").html('inserire rip minime');
            $("#rep_min").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if(!(int_reg.test($('#rep_min').val().trim()))){
            errore = true;
            $("#validationServerRepMinFeedback").html('deve essere un numero');
            $("#rep_min").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerRepMinFeedback").html('');
            $("#rep_min").removeClass("is-invalid"); //toglie la classe is-invalid
        }
        
        //rep max vuoto - valore numerico - < rep min
        if ($("#rep_max").val().trim() == "") {
            errore = true;
            $("#validationServerRepMaxFeedback").html('inserire rip max');
            $("#rep_max").addClass("is-invalid"); //mette la classe is-invalid

        }
        else if(!(int_reg.test($('#rep_max').val().trim()))){
            errore = true;
            $("#validationServerRepMaxFeedback").html('deve essere un numero');
            $("#rep_max").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if(($('#rep_max').val().trim()) < ($('#rep_min').val().trim())){
            errore = true;
            $("#validationServerRepMaxFeedback").html('le ripetizioni max devono essere > di quelle min');
            $("#rep_max").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerRepMaxFeedback").html('');
            $("#rep_max").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rec min vuoto - valore numerico
        if ($("#rec_min").val().trim() == "") {
            errore = true;
            $("#validationServerRecMinFeedback").html('inserire recupero min');
            $("#rec_min").addClass("is-invalid"); //mette la classe is-invalid

        }
        else if(!(int_reg.test($('#rec_min').val().trim()))){
            errore = true;
            $("#validationServerRecMinFeedback").html('deve essere un numero');
            $("#rec_min").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerRecMinFeedback").html('');
            $("#rec_min").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //rec max vuoto - valore numerico - < rec min
        if ($("#rec_max").val().trim() == "") {
            errore = true;
            $("#validationServerRecMaxFeedback").html('inserire recupero max');
            $("#rec_max").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if(!(int_reg.test($('#rec_max').val().trim()))){
            errore = true;
            $("#validationServerRecMaxFeedback").html('deve essere un numero');
            $("#rec_max").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if(($('#rec_max').val().trim()) < ($('#rec_min').val().trim())){
            errore = true;
            $("#validationServerRecMaxFeedback").html('il recupero max deve essere > di quello min');
            $("#rec_max").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerRecMaxFeedback").html('');
            $("#rec_max").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //carico vuoto - valore numerico
        if ($("#load").val().trim() == "") {
            errore = true;
            $("#validationServerLoadFeedback").html('inserire carico');
            $("#load").addClass("is-invalid"); //mette la classe is-invalid
        }
        else if(!(int_reg.test($('#load').val().trim()))){
            errore = true;
            $("#validationServerLoadFeedback").html('deve essere un numero');
            $("#load").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerLoadFeedback").html('');
            $("#load").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        // tipo di carico non scelto
        if ($("#load_type option:selected").val() == "") {
            errore = true;
            $("#validationServerLoadTypeFeedback").html("scegliere tipo di carico");
            $("#load_type").addClass("is-invalid"); //mette la classe is-invalid
        }
        else{
            $("#validationServerLoadTypeFeedback").html('');
            $("#load_type").removeClass("is-invalid"); //toglie la classe is-invalid
        }

        //submitta il form se non ci sono errori
        if (!errore) {    
            $("form#formExInsert").submit();
        }


    });
});