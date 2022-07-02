$(document).ready(function () {
    $("#searchSubmit").click(function (e) {  //per controllare tutti i campi

        e.preventDefault(); //per prevenire il submit immediato

        //submitta il form se nella barra di ricerca ho scritto qualcosa
        //altrimenti mostra semplicemente tutte le schede pubbliche
        if (!($("#search").val().trim() == "")) {    
            $("form#formTempSearch").submit();
        }
    });
});