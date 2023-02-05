<?php
if (isset($_GET)) 
{
function IsChecked($chkname,$value)
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

$reponse1 = false;
$reponse2 = false;
$reponse3 = false;
$reponse4 = false;
  
if(IsChecked("question1",'REPONSE 1'))
{
    $reponse1 = true;
}  
if(IsChecked("question1",'REPONSE 2'))
{
    $reponse2 = true;
} 
if(IsChecked("question1",'REPONSE 3'))
{
    $reponse3 = true;
} 
  if(IsChecked("question1",'REPONSE 4'))
{
    $reponse4 = true;
}  

$question2 = checkSelection("question2");

  $question3 = checkSelection("question3");
  $question4 = checkSelection("question4"); 
  $question5 = checkSelection("question5"); 
  $question6 = checkSelection("question6");
}
?>