<?php require_once('inc/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Review</title>  
    <link rel="icon" type="image/png" href="img/logo.png">  
    <?php include("nav_helper.php"); ?>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    
    <style>
        h2{
            color:mediumspringgreen;
        }
        h4{
            color:tomato;
        }
        div{
              border:5px solid #000033;
              margin:15px;
              padding:2px;
              border-radius:12px;
              color:white;
              width:1300px;
              background-image:url('img/about.jpg')      
        }
        #reviewTable {
            border: 2px solid green;
            width: 100%;
            
        }
        table {
            border: 1px solid black;
            padding: 3px;
            color: aqua;
            border-spacing: 5px;
            height: 100%;
            width: 100%;
            table-layout: fixed;
        }
        
        th, td {
            border: 5px solid bisque;
            padding: 3px;
            color: aqua;
            width: auto;
            overflow: auto;
            font-family: monospace, sans-serif;
            font-size: 120%;
            max-height: 50px;
        }
        th{
            color: coral;
        }
        #reviewBtn {
            width: 95%;
            height: 30px;
            margin-left: 2%;
        }
      
        .form-group{
            width: 95%;
        }  
    </style>
</head>
    
<body>
    <?php include("search_helper.php"); ?>
    <a href="#contact" id="reviewBtn" class="btn btn-success">Your Review</a>  
      
       <div id="table">
           <?php
            $sql="SELECT * FROM comment ORDER BY date DESC";
            $result = mysqli_query($con, $sql);
            echo "<table id='reviewTable'>";
           //<th>DATE</th><th>NAME</th><th>EMAIL</th>
           //"<td>".$row['date']."</td><td>".$row['name']."</td><td>".$row['email']."</td>
           echo "<tr><th>COMMENTS:</th></tr>";
            do{
              echo "<tr>";
               $row=$result->fetch_assoc();
               if($row){
                   echo "<td>On ".$row['date']." User \"".$row['name']."\" <br>Having EmailID: \"".$row['email']."\" Says---<br>";
                   echo "---------------------------------------------------------------------------------------------------------------------------------------------"."<br>";
                   echo "\"".$row['comment']."\"</td>";
               }
                else
                    echo "</tr>";
              } while($row);
              
           echo "</table>";
       ?>
      </div>    
       
       <div id="contact">
                  <h2> User Review Form :</h2>
            <form action="admin/comment.php" method="post">
                <div class="form-group">
                    <label for="Full Name:">Full Name*</label>
                    <input type="text" id="full name" class="form-control" placeholder="Full Name" name="name">
                </div>
                <div class="form-group">
                    <label for="Email/Gmail:">Email/Gmail*</label>
                    <input type="text" id="full name" class="form-control" placeholder="Email/Gmail" name="email">
                </div>
                <div class="form-group">
                    <label for="Messages:">Messages</label>
                    <textarea id="message" cols="18" rows="6" class="form-control" placeholder="Type your message here" name="message"></textarea> 
                </div>
                
                <input type="Submit" name="Submit" class="btn btn primary" style="height:50px;width:95%;margin:15px; padding:2px; border-radius:12px; background-color: #b13822;color:bisque"> 
            </form> 
        </div>    
    <?php include("Datalist.php");  ?>
</body>
</html>