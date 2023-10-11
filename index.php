<?php
/*
Descrizione:
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-primary">
    
    <div class="container text-center">
        <h1 class="py-3 text-secondary-emphasis">Strong Password Generator</h1>
        <h2 class="py-3 text-white">Genera una password sicura</h2>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card py-3">

                    <form method="GET">
                        <div class="container text-start">
                            <div class="row">                    
                                <div class="py-3 col-6">
                                    
                                    <span class="d-block my-3"><label for="characters">Lunghezza password:</label></span>
                                    <span class="d-block">Consenti ripetizioni di uno o più caratteri: </span>
                                </div>
                                <div class="py-3 col-6">
                                    <input class="d-block my-3" name="characters" id="characters" type="text">
                                    <input class="me-1 form-check-input" type="radio" name="allow" id="allow" value="1">
                                    <label class="me-3 form-check-label" for="allow">Si</label>
                                    <input class="me-1 form-check-input" type="radio" name="allow" id="no_allow" value="0">
                                    <label class="me-3 form-check-label" for="no_allow">No</label>
                                    <div class="pt-3">
                                        <input name="letters" id="letters" type="checkbox">
                                        <label for="letters">Lettere</label>
                                    </div>
                                    <div class="pt-2">
                                        <input name="numbers" id="numbers" type="checkbox">
                                        <label for="numbers">Numeri</label>
                                    </div>
                                    <div class="pt-2">
                                        <input name="symbols" id="symbols" type="checkbox">
                                        <label for="symbols">Simboli</label>
                                    </div>   
                                </div>
                            </div> 
                        </div>
                           
                    </form>

                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>