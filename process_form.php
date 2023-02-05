<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="style.css">
  <head>
    <title>Controle It. </title>
    
    <script src="/script.js"></script>
    <header class="header">
      <h1>Ctrl + U</h1>
      <img src="Logo.png" class="logo">
      <nav class="navigation">
        <a class="a" href="Autre.html#About">About</a>
      </nav>
    </header>
  </head>
  
  
  <body>  
    <form action="nouveau.php" method="get" id="form"> 
      <!-- ajouter action "link" -->
      
      <p>QUESTION 1: Combien de temps passez-vous en moyenne par jour sur tous vos réseaux sociaux?</p>
      <input type="radio" name="question1" value="REPONSE 1"> Moins de 1h<br>
      <input type="radio" name="question1" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question1" value="REPONSE 3"> 2h-5h<br>
      <input type="radio" name="question1" value="REPONSE 4"> 5h et plus<br>
      <br>

      <p>QUESTION 2: Lesquels de ses réseaux sociaux utilisez-vous le plus souvent? ?</p>
      <input type="checkbox" name="question2[]" value="REPONSE 1"> Facebook <br>
      <input type="checkbox" name="question2[]" value="REPONSE 2"> Instagram<br>
      <input type="checkbox" name="question2[]" value="REPONSE 3"> Twitter <br>
      <input type="checkbox" name="question2[]" value="REPONSE 4"> Tiktok <br>
      <br>

      <p>QUESTION 3: Combien de temps passez-vous en moyenne par jour pour chatter et communiquer avec d’autres personnes?</p>
      <input type="radio" name="question3" value="REPONSE 1"> Moins de 1h<br>
      <input type="radio" name="question3" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question3" value="REPONSE 3"> 2h-4h<br>
      <input type="radio" name="question3" value="REPONSE 4"> 4h et plus<br>
      <br>

      <p>QUESTION 4: Combien de temps passez-vous en moyenne par jour à communiquer dans des plateformes de bureau (gmail, teams, webex, horde)??</p>
      <input type="radio" name="question4" value="REPONSE 1"> moins de 1h<br>
      <input type="radio" name="question4" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question4" value="REPONSE 3"> 2h-4h<br>
      <input type="radio" name="question4" value="REPONSE 4"> 4h et plus<br>
      <br>

      <p>QUESTION 5: Combien de temps consacrez-vous quotidiennement à regarder des posts, stories et vidéos de d’autres personnalités sociales (que ce soit vos amis ou des célébrités)?</p>
      <input type="radio" name="question5" value="REPONSE 1"> moins de 1h<br>
      <input type="radio" name="question5" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question5" value="REPONSE 3"> 2h-4h<br>
      <input type="radio" name="question5" value="REPONSE 4"> 4h et plus<br>
      <br>

      <p>QUESTION 6: Combien de temps par jour passez-vous sur les applications de divertissements?</p>
      <input type="radio" name="question6" value="REPONSE 1"> moins de 1h<br>
      <input type="radio" name="question6" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question6" value="REPONSE 3"> 2h-5h<br>
      <input type="radio" name="question6" value="REPONSE 4"> 5h et plus<br>
      <br>

      <p>QUESTION 7: Lesquelles de ces plateformes de streaming utilisez-vous le plus souvent?</p>
      <input type="checkbox" name="question7[]" value="REPONSE 1"> Netflix, PrimeVideo, DisneyPlus, Viki, etc.<br>
      <input type="checkbox" name="question7[]" value="REPONSE 2"> Crunchyroll, Funimation, ou autres plateformes de visionnement d'animes<br>
      <input type="checkbox" name="question7[]" value="REPONSE 3"> YouTube, Dailymotion, etc.<br>
      <input type="checkbox" name="question7[]" value="REPONSE 4"> Autres<br>
      <br>
      
      <p>QUESTION 8: Combien de vidéos (youtube, dailymotion différentes écoutez-vous en moyenne dans une journée?</p>
      <input type="radio" name="question8" value="REPONSE 1"> aucune<br>
      <input type="radio" name="question8" value="REPONSE 2"> entre 1 et 3<br>
      <input type="radio" name="question8" value="REPONSE 3"> entre 4-10<br>
      <input type="radio" name="question8" value="REPONSE 4"> plus que 10<br>
      <br>

      <p>QUESTION 9: Combien de temps passez-vous à jouer à des jeux vidéo (que ce soit sur votre téléphone ou votre console)?</p>
      <input type="radio" name="question9" value="REPONSE 1"> moins de 1h<br>
      <input type="radio" name="question9" value="REPONSE 2"> 1h-2h<br>
      <input type="radio" name="question9" value="REPONSE 3"> 2h-5h<br>
      <input type="radio" name="question9" value="REPONSE 4"> 5h et plus<br>
      <br>

    <p>QUESTION 10: Quels type de jeux jouez-vous le plus?</p>
      <input type="checkbox" name="question10[]" value="REPONSE 1"> Aucun<br>
      <input type="checkbox" name="question10[]" value="REPONSE 2"> Jeux solo<br>
      <input type="checkbox" name="question10[]" value="REPONSE 3"> Jeux multijoueurs<br>
      <input type="checkbox" name="question10[]" value="REPONSE 4"> Jeux compétitifs<br>
      <br>

      <input type="submit" value="Submit">
    </form>
  </body>

  <footer>
      <p>Copyright © 2023 Cntl + U Squad</p>
    </footer>
    
</html>
  
  <?php

if (isset($_GET['question1'])) {
  $reponse = $_GET['question1'];
  if ($reponse == "REPONSE 1") {
        echo "";
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsReseaux();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsReseaux();
      }
      else {
        echo recommandationsReseaux();
      }
}
if (isset($_GET['question2'])) {
    foreach ($_GET['question2'] as $reponse) {
      if ($reponse == "REPONSE 1") {
        echo recommandationsFacebook();
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsInstagram();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsTwitter();
      }
      else {
        echo recommandationsTikTok();
      }
    }
}

function recommandationsGenerales() {
  $html = "<div>";
  $html .= "<p>Recommandations générales</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsReseaux() {
  $html = "<div>";
  $html .= "<p>Recommandations réseaux sociaux</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsFacebook() {
  $html = "<div>";
  $html .= "<p>Recommandations Facebook</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsInstagram() {
  $html = "<div>";
  $html .= "<p>Recommandations Instagram</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsTikTok() {
  $html = "<div>";
  $html .= "<p>Recommandations TikTok</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsTwitter() {
  $html = "<div >";
  $html .= "<p>Recommandations Twitter</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsDivertissement() {
  $html = "<div>";
  $html .= "<p>Recommandations Divertissement</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsNetflix() {
  $html = "<div>";
  $html .= "<p>Recommandations Netflix ou autres applications de séries</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsYoutube() {
  $html = "<div>";
  $html .= "<p>Recommandations Youtube</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsCrunchyroll() {
  $html = "<div>";
  $html .= "<p>Recommandations Crunchyroll ou autres applications d'animes</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsJeuxVideos() {
  $html = "<div>";
  $html .= "<p>Recommandations jeux-vidéos</p>";
  $html .= "<p>...</p>";
  $html .= "</div>";
  return $html;
}
  ?>
</body>
</html>