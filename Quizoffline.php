<?php

####################################################################################################################################################
#                                                      [ QUIZ ]                                                         #
####################################################################################################################################################

?>
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>  
<link rel="icon" type="image/png" href="img/logo.png">  
<?php include("nav_helper.php"); ?>

        
<style type='text/css'>
    #wrapper {
         width:1300px;
         height:550px;
         padding: 13px;
         margin-right:auto;
         margin-left:auto;
         background-color: lightslategray;
	
    }
    img{
        margin: -5px;
    }
    h3{
        color: #000033;
    }
    div{
        color: maroon;
    }
</style>
<link rel="stylesheet" type="text/css" href="stylenew.css">
</head>

<body bgcolor='#e1e1e1'>
<?php include("search_helper.php"); ?>    

<?php


	//Creating random number s
	$rid = rand(1,3);
	//echo $rid;
?>

<div id='wrapper'>
    <center><font face='Andalus' size='5'><b> Quiz on Tourism in Bangladesh. </b></font></center>
    <img src="img/Quiz1.jpg" height="100" width="180" >
<?php
if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>(*)Where Paharpur Buddhist Monastery is located ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Naogaon </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Rajshahi </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Comilla </label>
        </div>
        </li>
        <br>
     
        <li>
        <h3>(*)Which is the longest sea-beach in the world ?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Potenga Sea Beach </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Cox's Bazar Sea Beach </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Kuakata Sea Beach </label>
        </div>
        </li>
        
        <br>
        
         <li>
        <h3>(*)Where 'Golden Temple' is located ?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Mymensingh </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Chittagong </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Bandarban </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
    
    	<li>
        <h3>(*)Where Zainul Abedin Museum is located ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Mymensingh </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Dinajpur </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Dhaka </label>
        </div>
        </li>
        
        <br>
        <li>
        <h3>(*)Which place is the Haunt of Royal Bengal Tiger ?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Tangail </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Sundarbans </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Munshiganj </label>
        </div>
        </li>
        <br>
       
         <li>
        <h3>(*)Where Garo Hill is situated ?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A) Bhola </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Dhaka </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) No one </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
    
</form>";
}

if ($rid == 3){
	
	echo "
<form action='process.php?id=3' method='post' id='quizForm' id='3'>


	<ol>
    
   
    	<li>
        <h3>(*)Which place is famous for a sweet named 'kacha Golla' ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Natore </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Sylhet </label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Barisal </label>
        </div>
        </li>
        
        <br>
        <li>
        <h3>(*)Where Shat Gambuz Mosque is located ? </h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Bogra </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Bagerhat </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) None of the above</label>
        </div>
        </li>
        
        <br>
        
         <li>
        <h3>(*)Where Asmita is situated ? </h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A) Dhaka </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Narayanganj </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Kishoreganj </label>
        </div>
        </li>
        <br>
    </ol>
    <br>
     <input type='submit' value='Submit Quiz' />
     </form>";
    }
    
    ?>
    </div>
    <?php include("Datalist.php");  ?>
</body>
</html>