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
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
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
    </div>
</div>
@endsection