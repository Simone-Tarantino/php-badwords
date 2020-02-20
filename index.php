<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php
// creo variabile che contiene il testo
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $cambio = $_GET["cambio"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- echo per stampare la variabile creata prima "$testo" e chiudo sempre con il punto e virgola -->
    <p><?php echo $testo; ?></p>
    <!-- utilizzo echo per stampare il risultato della funzione "strlen"(ovvero la st-ring len-gth) della variabile "$testo" -->
    <p>Lunghezza paragrafo: <?php echo strlen($testo); ?></p>
    <hr>
    <!-- salvo in una variabile il risultato della funzione "str_replace"(str-ing replace) che rimpiazza la parola salvata nella funzione "$cambio" con la stringa '****', nella nostra variabile "$testo" e poi stampo la mia variabile con "echo"-->
    <p>
      <?php $nuovo_testo = str_replace($cambio, '***', $testo);
      echo $nuovo_testo; ?>
    </p>
    <!-- stampo con "echo" il risultato della funzione "strlen"(ovvero la st-ring len-gth) della variabile "$nuovo_testo" -->
    <p>Lunghezza paragrafo: <?php echo strlen($nuovo_testo) ?></p>
  </body>
</html>
