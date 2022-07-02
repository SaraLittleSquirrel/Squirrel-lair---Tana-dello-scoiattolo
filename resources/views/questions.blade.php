@extends('layouts.master')

@section('title')
F.A.Q.
@endsection

@section('content')
<div class="row-fluid mb-3">
    <div class="display-2">F.A.Q.</div>
</div>

<div class="row-fluid">
    <div class="accordion" id="accordionExample">
        {{-- domanda 1 Cosa si può fare sul sito--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Cosa si può fare su questo sito?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    In questo sito è possibile salvare, modificare e scaricare schede di allenamento, condividerle con
                    gli altri utenti e cercare altre schede condivise pubblicamente.
                </div>
            </div>
        </div>
        {{-- domanda 2 Servizio a gratis--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Il servizio è a pagamento?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Assolutamente no, tutto gratis. Basta semplicemente registrarsi nella sezione apposita, fornendo un
                    nome utente e una password.
                </div>
            </div>
        </div>
        {{-- domanda 3 Sito per tutti --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Per chi è questo sito?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    La tana dello scoiattolo è aperta a tutti.
                </div>
            </div>
        </div>
        {{-- domanda 4 RPE,RIR,RM --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Cosa sono RPE, RIR, %RM?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Sono dei metodi per impostare il carico di lavoro, per chi va oltre il semplice concetto di "kg". <br><br>
                    RPE =
                    <a href="https://it.wikipedia.org/wiki/Scala_di_percezione_dello_sforzo" class="link-dark"> Rate of
                        perceived effort,
                        scala di percezione dello sforzo</a> <br> <br>

                    RIR =
                    <a href="https://www.nicholasrubini.it/ufaqs/rir/#:~:text=Il%20rir%20viene%20utilizzato%20per,ripetizioni%20se%20arrivassimo%20al%20cedimento."
                        class="link-dark">
                        Reps in reserve, ripetizioni in riserva</a> <br> <br>

                    %RM = <a href="https://it.wikipedia.org/wiki/One-repetition_maximum" class="link-dark"> % del peso
                        rispetto al carico
                        massimale</a>
                </div>
            </div>
        </div>
        {{-- domanda 5 wave & doppia--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Cosa sono "wave" e "doppia"?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Sono due metodi principali per impostare uno schema di progressione. Se ci saranno molte richieste, ne potremmo aggiungere altri, chissà. <br> <br>
                    Wave =
                    <a href="https://mindandbodyitalia.forumfree.it/?t=63963834" class="link-dark"> Consigliato per quegli esercizi impostati dal punto di vista della forza</a> <br> <br>

                    Doppia =
                    <a href="https://www.t-nation.com/training/tip-a-simple-guide-to-double-progression/"
                        class="link-dark">
                        Uno dei metodi di progressione più semplici, adatto agli esercizi strutturati in ottica ipertrofica</a> 
                </div>
            </div>
        </div>
        {{-- domanda 6 tempi di recupero sec--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    I tempi di recupero sono da scrivere in minuti o in secondi?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    In secondi.
                </div>
            </div>
        </div>
        {{-- domanda 7 come creo una scheda --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Come creo una scheda?
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    1. Andare nella sezione "Schede". <br>
                    2. Cliccare su "Aggiungi scheda". <br>
                    3. Riempire la form (Rendere la scheda pubblica è opzionale).<br>
                    4. A questo punto sarà visibile la scheda e si potranno aggiungere degli esercizi, scaricare la scheda in formato pdf o eliminarla.
                </div>
            </div>
        </div>
        {{-- domanda 8 come creo una esercizio --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Come creo una esercizio?
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    1. Andare nella sezione "Esercizi". <br>
                    2. Cliccare su "Aggiungi tipo di esercizio". <br>
                    3. Riempire la form.<br>
                    4. A questo punto sarà visibile l'elenco degli esercizi e si potranno aggiungere degli esercizi o eliminarli.
                </div>
            </div>
        </div>
        {{-- domanda 9 come posso vedere le mie schede e i miei esercizi --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Come posso visualizzare tutte le mie schede e i miei esercizi?
                </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Per le schede: <br>
                    1. Andare nella sezione "Schede". <br>
                    2. Cliccare su "Le mie schede". <br>
                    Se la scheda è stata resa pubblica, potrà essere visibile anche cercandola nella sezione "Cerca schede". <br> <br>
                    Per gli esercizi: <br>
                    1. Andare nella sezione "Esercizi". <br>
                    2. Cliccare su "I miei esercizi".
                </div>
            </div>
        </div>
        {{-- domanda 10 come metto gli esercizi --}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed" style="color:#ce6324" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Ho appena creato la mia scheda. E gli esercizi?
                </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Si consiglia di creare degli esercizi prima di creare la scheda. <br>
                All'apertura della scheda: <br>
                1. Cliccare sul tasto "+"; <br>
                2. Riempire la form scegliendo l'esercizio, serie, ripetizioni, tempi di recupero e carico;br
                3. Si potranno aggiungere altri esercizi (vedi punto 1) o modificare l'esercizio inserito, cliccando sul nome dell'esercizio stesso.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection