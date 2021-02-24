<!doctype html>
<html>
    <head>
        <title> Formulaire PHP</title>
        <meta charset="utf-8" />
    </head>
    
    <body>
      <p>Bonjour

      <?php
          echo $_POST['prenom'];


      ?>
        fait comme chez toi </p>
        <P> Tu ne tappelle pas 
            <?php 
                echo $_POST['prenom'];
            ?> 
            j'ai due mal comprendre!
        </P>
        <p> click  <a href="formulaire.html">ici</a></p>
    </body>

</html>

