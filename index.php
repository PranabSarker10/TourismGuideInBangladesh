<!DOCTYPE html>
<html>
<head>
    <title>Home</title>  
    <link rel="icon" type="image/png" href="img/logo.png">  
    <?php include("nav_helper.php"); ?>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <style>
        body {
				background: url("img/bdmain.jpg");
				width: 98%;
				height:90%;
				background-size: cover;
                margin: top;
        }
            
        h1{
            color:cyan;
            margin-left: 512px;
        }   
        h2{
            color:bisque;
        }
        h4{
            color:bisque;
        }
        .image
        {
            background:url(images/back.png);
            height:100px;
            width:100px;
            display: block;
            float:left;
        }

        .image  a {
            display: none;
        }

        .image  a:hover {
            display: block;
        }
    </style>
</head>
    
<body>
    <?php include("search_helper.php"); ?> 
    <h1>Tourist Guide in Bangladesh</h1>
    <marquee scrollamount="8" direction="right" >
    <h2> Best 20 tourist places </h2>
    </marquee>
    
    <marquee scrollamount="10" direction="right" onmouseover="this.stop();" onmouseout="this.start();" >
    <a href="JAFLONG20.php">     
    <img src="img/JAFLONG20.jpg" height="300" width="350">
    </a>
    <a href="LALBAGHFORT20.php">
    <img src="img/LALBAGH FORT20.jpg" height="300" width="350">
    </a>
    <a href="SANGSHADVHABAN20.php">
    <img src="img/SANGSHAD VHABAN20.jpg" height="300" width="350">
    </a>
    <a href="PSBC20.php">    
    <img src="img/PSBC20.jpg" height="300" width="350">
    </a>
    <a href="SAINTMARTIN20.php">
    <img src="img/SAINT MARTIN20.jpg" height="300" width="350">
    </a>
    <a href="PAHARPUR20.php">
    <img src="img/PAHARPUR20.jpg" height="300" width="350">
    </a>
    <a href="GOLDENTEMPLE20.php">
    <img src="img/GOLDEN TEMPLE20.jpg" height="300" width="350">
    </a>
    <a href="KUAKATA20.php">
    <img src="img/KUAKATA20.jpg" height="300" width="350">
    </a>
    <a href="KAPTAILAKE20.php">
    <img src="img/KAPTAI LAKE20.jpg" height="300" width="350">
    </a>
    <a href="MADHABKUNDA20.php">    
    <img src="img/MADHABKUNDA20.jpg" height="300" width="350">
    </a>
    <a href="BAU20.php">
    <img src="img/BAU20.jpg" height="300" width="350">
    </a>
    <a href="COX'SBAZAR20.php">
    <img src="img/COX'S BAZAR20.jpg" height="300" width="350">
    </a>
    <a href="GURUDAYALCOLLEGE20.php">
    <img src="img/GC20.jpg" height="300" width="350">
    </a>
    <a href="AHSANMANZIL20.php">    
    <img src="img/AHSAN MANZIL20.jpg" height="300" width="350">
    </a>
    <a href="SHATGAMBUJMOSQUE20.php">    
    <img src="img/SHAT GAMBUJ MOSQUE20.jpg" height="300" width="350">
    </a>    
    <a href="BICHANAKANDI20.php">
    <img src="img/BICHANAKANDI20.jpg" height="300" width="350">
    </a>
    <a href="BNSDB20.php">
    <img src="img/BNSDB20.jpg" height="300" width="350">
    </a>
    <a href="KANTAJITEMPLE20.php">
    <img src="img/KANTAJI TEMPLE20.jpg" height="300" width="350">
    </a>
    <a href="SONARGAON20.php">    
    <img src="img/SONARGAON20.jpg" height="300" width="350">
    </a> 
    <a href="SUNDARBANS20.php">
    <img src="img/SUNDARBANS20.jpg" height="300" width="350">
    </a>  
    </marquee>
    <?php include("Datalist.php");  ?>
</body>
</html>