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
if (isset($_GET['question3'])) {
  $reponse = $_GET['question3'];
  if ($reponse == "REPONSE 1") {
        echo "";
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsGenerales();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsGenerales();
      }
      else {
        echo recommandationsGenerales();
      }
}
// if (isset($_GET['question4'])) {
//   $reponse = $_GET['question4'];
//   if ($reponse == "REPONSE 1") {
//         echo "";
//       } else if ($reponse == "REPONSE 2") {
//         echo recommandationsReseaux();
//       }
//          else if ($reponse == "REPONSE 3") {
//         echo recommandationsReseaux();
//       }
//       else {
//         echo recommandationsReseaux();
//       }
// }
// if (isset($_GET['question5'])) {
//   $reponse = $_GET['question5'];
//   if ($reponse == "REPONSE 1") {
//         echo "";
//       } else if ($reponse == "REPONSE 2") {
//         echo recommandationsReseaux();
//       }
//          else if ($reponse == "REPONSE 3") {
//         echo recommandationsReseaux();
//       }
//       else {
//         echo recommandationsReseaux();
//       }
// }
if (isset($_GET['question6'])) {
  $reponse = $_GET['question6'];
  if ($reponse == "REPONSE 1") {
        echo "";
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsDivertissement();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsDivertissement();
      }
      else {
        echo recommandationsDivertissement();
      }
}
if (isset($_GET['question7'])) {
    foreach ($_GET['question7'] as $reponse) {
      if ($reponse == "REPONSE 1") {
        echo recommandationsNetflix();
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsCrunchyroll();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsYoutube();
      }
      else {
        echo "";
      }
    }
}
// if (isset($_GET['question8'])) {
//   $reponse = $_GET['question8'];
//   if ($reponse == "REPONSE 1") {
//         echo "";
//       } else if ($reponse == "REPONSE 2") {
//         echo recommandationsReseaux();
//       }
//          else if ($reponse == "REPONSE 3") {
//         echo recommandationsReseaux();
//       }
//       else {
//         echo recommandationsReseaux();
//       }
// }
if (isset($_GET['question9'])) {
  $reponse = $_GET['question9'];
  if ($reponse == "REPONSE 1") {
        echo "";
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsJeuxVideos();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsJeuxMultijoueurs();
      }
      else {
        echo recommandationsJeuxVideos();
      }
}
if (isset($_GET['question10'])) {
    foreach ($_GET['question10'] as $reponse) {
      if ($reponse == "REPONSE 1") {
        echo "";
      } else if ($reponse == "REPONSE 2") {
        echo recommandationsJeuxSolos();
      }
         else if ($reponse == "REPONSE 3") {
        echo recommandationsTwitter();
      }
      else {
        echo recommandationsCompetitif();
      }
    }
}

function recommandationsGenerales() {
  $html = "<div>";
  $html .= "<g>Pour mieux gérer sa relation avec les écrans</g>";
  $html .= "<f>-Évitez de «scroll» sur vos téléphones au moins 30 minute avant de dormir et après vous être réveillés. Une bonne solution serait de charger le téléphone dans une pièce à l’extérieur de la chambre durant la nuit.
  -Faites du souper un moment réservé sans téléphone pour se reconnecter avec les autres.
  -Prendre une journée de congé de son téléphone: Ce jour sera dédié à examiner comment l’utilisation du téléphone avec intention peut améliorer votre humeur, votre concentration ainsi que vos relations.
  -Réglez vos paramètres de notifications pour ne recevoir que des alertes provenant de personnes réelles.
  -Mettez votre téléphone en «GreyScale». Sur Iphone, aller dans général/accessibilité/affichage et taille de texte/Niveaux de gris.
  -Faites un ménage de votre écran d’accueil­; ne conservez que les applications qui sont de réels outils pour vous et utilisez la barre de recherche de votre téléphone pour accéder aux autres applications (pour limiter le temps de «scroll» inconscient).
  -Non seulement vous pouvez limiter le nombre de notifications que vous recevez, mais vous pouvez aussi enlever les bannières d’informations qui sont faites spécifiquement pour causer une peur de manquer des nouvelles (Fear of missing out).
  </f>";
  $html .= "</div>";
  return $html;
}
function recommandationsReseaux() {
  $html = "<div>";
  $html .= "<g>Recommandations réseaux sociaux</g><br>";
  $html .= "<f>Quelques signes d’addictions aux réseaux sociaux: Isolement, sentiment d’isolement malgré la connexion, difficulté considérable à passer une journée sans consulter les réseaux sociaux, peur à l’idée de perdre l’accès aux réseaux sociaux ou simplement de perdre son téléphone, etc.

  Quelques suggestions pour s’en sortir: 
  -Sur Iphone (IOS 14.5 et +): Sélectionner «Demander à l’application de ne pas faire le suivi» lorsque possible.
  -S’abonner uniquement au contenu qui apporte une valeur réelle à votre quotidien.
  -Désactiver les notifications de groupchats s’ils prennent trop de place.
  -Supprimez les applications de réseaux sociaux de vos téléphones et essayez d’y accéder davantage sur vos ordinateurs.
  -Abonnez-vous à du contenu avec lequel vous êtes en désaccord; le contenu qui nous est servi quotidiennement est fait pour que nous soyons toujours satisfait et en accord avec le contenu qu’on voit. C’est aussi un bon moyen de s’exposer à différentes perspectives. Le site Allside.com permet d’obtenir des visions différentes de plusieurs évènements internationaux.
  </f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsFacebook() {
  $html = "<div>";
  $html .= "<g>Recommandations Facebook</g><br>";
  $html .= "<f>-L’extension «Facebook Newsfeed Eradicator» de Google Chrome permet d’enlever le fil d’actualité des applications comme Facebook et d’embrouiller certaines sections et notifications pour utiliser le potentiel de Facebook comme outil sans distraction addictive.
  -Éviter de lire uniquement les articles de nouvelles qui vous sont proposés: certaines personnes croient utiliser les réseaux sociaux comme source fiable de nouvelles, mais ces dernières sont optimisées pour ne vous donner que la pointe de l’iceberg qui vous plairait le plus.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsInstagram() {
  $html = "<div>";
  $html .= "<g>Recommandations Instagram</g><br>";
  $html .= "<f>-Pour prendre des photos de bonnes qualités et avec des filtres intéressants, vous pouvez opter pour l’application VSCO.
  -Éviter les Reels! Les pics de dopamines qui sont créés à chaque fois qu’on glisse notre doigt pour découvrir du nouveau contenu peuvent nous maintenir captivés pendant plusieurs heures.
  -Prenez une pause des mentions «J’aime» et des commentaires. Tentez de ne rien publier pendant un jour ou deux; vous pourriez être surpris d'à quel point vous pourriez vous sentir mieux sans le besoin constant de validation des autres.</f>";
  $html .= "</div>";
  return $html;
}
function recommandationsTikTok() {
  $html = "<div>";
  $html .= "<g>Recommandations TikTok</g><br>";
  $html .= "<f>-Penser à supprimer l’application sur son téléphone et à la consulter uniquement sur ordinateur ou pas du tout. L’application crée un réflexe dans le cerveau pour qu’on aille l’ouvrir dès qu’on a un moment d’ennui.
  -Désabonnez-vous des créateurs de contenu qui n’ajoute pas de valeur concrète à votre vie. Le contenu peut sembler amusant sur le coup, mais la valeur à long terme est beaucoup moins intéressante.
  -Trouvez-vous un autre passe-temps; les catalyseurs de dopamines comme TikTok sont puissants pour créer des addictions, surtout lorsqu’on passe par des moments difficiles. Essayez de planifier une sortie avec des amis, ou de prendre un nouveau cours en ligne, etc.</p>";
  $html .= "</div>";
  return $html;
}
function recommandationsTwitter() {
  $html = "<div >";
  $html .= "<g>Recommandations Twitter</g><br>";
  $html .= "<f>-Interchangez votre fil d’actualité avec quelqu’un d’autre! L’application Vicariously permet de temporairement échanger ses champs d’intérêts. Vous en saurez peut-être plus sur les raisons et les opinions des autres.
  -Désactivez les notifications provenant de pages ou de nouvelles publications.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsDivertissement() {
  $html = "<div>";
  $html .= "<g>Recommandations Divertissement</g><br>";
  $html .= "<f>Quelques signes d’addictions aux plateformes de divertissement: un flux constant de pensées à ce qui va se passer au prochain épisode, une envie incontrôlable de regarder une autre vidéo, une difficulté à s’endormir le soir, regarder ses séries en tout lieu (transport, en voyage, au toilettes, en conduisant, etc.)

  Quelques suggestions pour s’en sortir: 
  -Optez pour des filmes plutôt que des séries.
  -Évitez de cliquer sur les recommandations de vidéos ou de séries: ces dernières sont ainsi optimiser pour capter encore mieux votre intérêt. 
  -Désactivez la lecture automatique sur tous vos appareils.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsNetflix() {
  $html = "<div>";
  $html .= "<g>Recommandations Netflix ou autres applications de séries</g><br>";
  $html .= "<f>-Pensez à utiliser le mode avion lorsque vous utilisez votre téléphone.
  - Dans l'application, allez sur sur Icône de profil/Gérer les profils/(profil à modifier)/Lecture automatique pour désactiver le paramètre.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsYoutube() {
  $html = "<div>";
  $html .= "<g>Recommandations Youtube</g><br>";
  $html .= "<f>-Dans les paramètres, désactivez les recommandations de vidéo.
  -Évitez les shorts! De la même manière que les Reels sur Instagram ou les vidéos sur TikTok, les pics de dopamines réguliers qui sont créés à chaque fois qu’on glisse notre doigt pour découvrir du nouveau contenu peuvent nous maintenir captivés pendant plusieurs heures.
  -Installez l’extension «Distraction-Free Youtube» sur Google Chrome pour enlever les recommandations de vidéos.
  </f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsCrunchyroll() {
  $html = "<div>";
  $html .= "<g>Recommandations Crunchyroll ou autres applications d'animes</g><br>";
  $html .= "<f>-Utilisez les animes comme une récompense: essayez d’accomplir vos tâches en premier. Ça réduit la culpabilité qui peut pousser à être encore plus accro de manière compulsive.
  -Enlevez les sites et les pages de fans de vos favoris ou de votre fil d’actualité.
  -Évitez les grands évènements d’animes ou de mangas.
  -Coupez dans les dépenses de marchandises reliées aux animes pour diminuer l’envie incontrôlable d’en regarder un nouveau.
  -Trouvez d’autres passe-temps; le site gamequitters propose «hobby tool» sur leur siteWeb pour vous inspirer.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsJeuxVideos() {
  $html = "<div>";
  $html .= "<g>Recommandations jeux-vidéos</g><br>";
  $html .= "<f>Les jeux vidéos ont toujours causés beaucoup de débats au sujet de leurs conséquences potentielles. Néanmoins, il reste certain que l'excès des jeux peut être grandement néfaste.</f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsJeuxSolos() {
  $html = "<div>";
  $html .= "<g>Recommandations jeux Solos</g><br>";
  $html .= "<f>-Prenez des pauses fréquentes lorsque vous jouez et faites des activités différentes pour éviter de devenir trop absorbé par le jeu.
  -Participez à davantage d’activités en dehors des jeux vidéo afin de diversifier vos occupations 
  </f><br>";
  $html .= "</div>";
  return $html;
}
function recommandationsJeuxMultijoueurs() {
  $html = "<div>";
  $html .= "<g>Recommandations jeux multijoueurs</g><br>";
  $html .= "<f>-Essayez d’autres modes de jeux que les jeux multijoueurs. Des modes aventures, ou créatifs peuvent diminuer l’exposition aux systèmes de récompenses et de niveau des jeux multijoueurs.</f>";
  $html .= "</div><br>";
  return $html;
}
function recommandationsCompetitif() {
  $html = "<div>";
  $html .= "<g>Recommandations jeux compétitif</g><br>";
  $html .= "<f>-Trouvez-vous un nouveau passe-temps (par exemple essayer un nouveau sport) afin de chercher à performer dans ce dernier tout en diminuant tranquillement votre temps de jeu quotidien. Cette manière va permettre de déplacer vos activités compétitives dans un autre domaine plus sain. 
  -Une autre manière serait d’essayer un nouveau jeu moins compétitif qui n’a pas forcement de système de récompense continue. En effet, ce genre de jeu ne nécessite pas autant d’implication qu’un peu compétitif.</f><br>";
  $html .= "</div>";
  return $html;
}
  ?>
</body>
</html>