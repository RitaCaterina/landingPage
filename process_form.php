<?php
// inizializza le variabili per contenere i dati del form e i messaggi di errore
$companyName = $fullName = $email = $phone = $service = "";
$companyNameErr = $fullNameErr = $emailErr = $phoneErr = $serviceErr = "";

// controlla se il form è stato inviato usando il metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // controlla se il campo "companyName" è vuoto
    if (empty($_POST["companyName"])) {
        $companyNameErr = "Il nome dell'azienda è obbligatorio.";
    } else {
        // pulisce e assegna il valore inserito alla variabile
        $companyName = test_input($_POST["companyName"]);
    }

    // ripete il processo di validazione per ciascun campo del form
    if (empty($_POST["fullName"])) {
        $fullNameErr = "Il nome completo è obbligatorio.";
    } else {
        $fullName = test_input($_POST["fullName"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "L'email è obbligatoria.";
    } else {
        $email = test_input($_POST["email"]);
        // controlla se l'email rispetta il formato standard delle email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato email non valido.";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Il numero di telefono è obbligatorio.";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["service"])) {
        $serviceErr = "Il servizio è obbligatorio.";
    } else {
        $service = test_input($_POST["service"]);
    }
}

function test_input($data) {
  // rimuove gli spazi bianchi all'inizio e alla fine
  $data = trim($data);
  return $data;
}
?>

