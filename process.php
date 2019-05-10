<?php

####################################################################################################################################################
# SCRIPT CREATED BY ANDY @ WEBTUTSHD (youtube.com/WebTutsHD) [PHP QUIZ APP PROCESS PAGE ]                                                         #
####################################################################################################################################################

?>
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>  
<link rel="icon" type="image/png" href="img/logo.png">  
<link rel="stylesheet" type="text/css" href="stylenew.css">  
<?php include("nav_helper.php"); ?>  
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
    img{
        margin-left: 220px;
    }
</style>
</head>
<?php 

	$fid = $_GET['id'];

?>
<body bgcolor="#e1e1e1">
<?php include("search_helper.php"); ?>
<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />
<img src="img/Quiz.jpg" height="200" width="500" >
<?php
    if(isset($_POST['answerOne'])) {
	   $answer1= $_POST['answerOne'];
    } else {
        $answer1 = "B";
    }
    if(isset($_POST['answerOne'])) {
        $answer2= $_POST['answerTwo'];
    } else {
        $answer2 = "C";
    }
    if(isset($_POST['answerOne'])){
	   $answer3= $_POST['answerThree'];
    } else{ 
        $answer3 = "A";
    }
    

    
   /* if($answer1==""||$answer2==""||$answer3=="")
    {
        
        echo "wrong ..........";
    }*/
    
	$score = 0;
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
    
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";
    
    
	
?>

<a href="Quizoffline.php">Try Again!!</a> 

</div><!--- end of wrapper div --->
<?php include("Datalist.php");  ?>
</body>
</html>