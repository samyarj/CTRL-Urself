<!DOCTYPE html>
  
<?php
if (isset($_GET)) 
{

function recommanderMul($question) {
  if (isset($_GET[$question])) {
    $selected = $_GET[$question];
    foreach ($selected as $recommandation) {
      echo $recommandation . " <br>";
    }
  }
}

function recommanderUni($question)
  {
    if (isset($_GET[$question]))
    {
      if (!($_GET[$question] == "REPONSE 1" || $_GET[$question] == "REPONSE 2"))
      {
        echo $_GET[$question];
      }
    }
  return $question;
  }

recommanderMul("question1");
recommanderUni("question2");

}
else
{
  header("Location: test.html");
}
?>