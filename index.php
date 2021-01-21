<?php
  // struttura dati
  $questions = [
    // prima domanda
    [
      // titolo
      "title" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    ],
    // seconda domanda
    [
      "title" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    ],
    // terza domanda
    [
      "title" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
    ],
    // quarta domanda
    [
      "title" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
    ],
  ];
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>php-google-faq</title>
  </head>

  <body>
    <h1>php-google-faq</h1>
    <?php for ($i=0; $i < count($questions); $i++) {
      $question = $questions[$i];
      echo $question["title"];
      echo "<br>";
    } ?>
  </body>
</html>
