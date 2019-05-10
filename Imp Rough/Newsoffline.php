<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <style>
        body {
				background: url("News.jpg");
				width: 98%;
				height:90%;
				background-size: cover;
                margin: top;
        }
            
        h1{
            color:cyan;
            margin-left: 450px;
        }   
        h2{
            color:bisque;
        }
        h4{
            color:bisque;
        }
        
    </style>
</head>
    
<body>
    <?php include("search_helper.php"); ?> 
    <h1>Tourist Guide in Bangladesh</h1>
    <marquee scrollamount="7" direction="right" >
    <h2> Tourism in Bangladesh </h2>
    </marquee>
    
    
    <?php include("Datalist.php");  ?>
</body>
</html>