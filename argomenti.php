<?php
    // --- Credenziali ---
    $nome_corretto = 'studente';
    $password_corretta = '12345';

    // --- Dati ricevuti dal form ---
    $nome_utente = $_GET['nome'];
    $password_utente = $_GET['password'];
    $argomenti = $_GET['argomenti'];

    // --- Verifica credenziali ---
    if ($nome_utente == $nome_corretto && $password_utente == $password_corretta){
        echo "<h2>Dati inseriti correttamente</h2 <br>";
        echo "<table border='1'>";
        echo "<tr><th>Campo</th>       <th>Valore</th></tr><br><br>";
        echo "<tr><td>Nome</td><br><br><td>$nome_corretto</td></tr><br><br>";
        echo "<tr><td>Password</td><br><br><td>$password_corretta</td></tr><br><br>";

        echo "<tr><td>Argomenti scelti</td><td><br><br>";
        if(count($argomenti) > 0){
            for ($i = 0; $i < count($argomenti); $i++){
                echo $argomenti[$i] . "<br>";
            }
            if ($i < count($argomenti) - 1) {
                echo ", "; 
            }
        } else {
            echo "Nessun argomento selezionato";
        }
        echo "</td></tr>";
        echo "</table>";
    } else {
        echo "<h2>Dati inseriti non corretti, accesso non autorizzato</h2>";
    }
?>