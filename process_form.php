<?php

echo $txt;
?> 

<!DOCTYPE html>
<html>
<body>
  
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

if(IsChecked("question1",'REPONSE 1'))
{
    echo "True";
}  
else
{
  echo "False";
}

  $question2 = $_GET["question2"]; 
  $question3 = $_GET["question3"];
  $question4 = $_GET["question4"]; 
  $question5 = $_GET["question5"]; 
  $question6 = $_GET["question6"]; 
  $question7 = $_GET["question7"]; 
  $question8 = $_GET["question8"]; 
  $question9 = $_GET["question9"]; 
  $question10 = $_GET["question10"]; 
  $question11 = $_GET["question11"]; 
  $question12 = $_GET["question12"]; 
  $question13 = $_GET["question13"]; 
  $question14 = $_GET["question14"]; 
  $question15 = $_GET["question15"];  
}
  echo $question2;
?><br>

</body>
</html> 