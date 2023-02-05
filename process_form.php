<!DOCTYPE html>
  
<?php
if (isset($_GET)) 
{
function IsChecked($chkname, $value)
    {
        if(!empty($_GET[$chkname]))
        {
            foreach($_GET[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

function checkMultiple($question)
  {
    $choixMultiple = $_GET[$question];
    $liste = array();
    $compteur = 1;
    
    foreach($choixMultiple as $reponse)
    {
      if(IsChecked($question, "REPONSE " . strval($compteur)))
    {  
    array_push($liste, 1);
    $compteur++;
    } 
      else 
      {
        array_push($liste, 0);
        $compteur++;
      }
    }
  return $liste; //permet de retourner une liste de booléens pour identifier les sélections
  }

  
function checkSelection($entree)
  {
    $question = false;
    if (isset($_GET[$entree]))
    {
      if ($_GET[$entree] == "REPONSE 3" || $_GET[$entree] == "REPONSE 4")
      {
        $question = true;
      }
    }
  return $question;
  }

$question1 = checkMultiple("question1");
$question2 = checkSelection("question2");
$question3 = checkSelection("question3");
$question4 = checkSelection("question4"); 
$question5 = checkSelection("question5"); 
$question6 = checkSelection("question6");

}
?>