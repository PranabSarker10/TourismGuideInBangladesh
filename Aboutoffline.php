<!DOCTYPE html>
<html>
<head>
    <title>About</title>  
    <link rel="icon" type="image/png" href="img/logo.png">  
    
    <link rel="stylesheet" type="text/css" href="stylenew.css">
    <?php include("nav_helper.php"); ?>
    <style>
        h2{
            color:mediumspringgreen;
        }
        h4{
            color:bisque;
        }
        div{
              border:5px solid #000033;
              margin:15px;
              padding:2px;
              border-radius:12px;
              color:white;
              width:1300px;
              background-image:url('img/background100000.jpg')
          }
        .contact_us{
              color: bisque;
              background-image:url('img/Contact_us.jpg')      
        }
    </style>
</head>
    
<body>
    <?php include("search_helper.php"); ?>
    <h1>About:</h1>
       <div>
            <p></p>
            <h3>
                Here the intension is to help tourists who love to travel.
                <p></p>
                In this website, BD Tourist places with small description are shown for exposing the natural beauties of Bangladesh to everyone.
                <p></p>
                Here in blog section, you can write something new and you can also gain up_to_date knowledge from other bloggers.
                <p></p>
                That's all.
            </h3>
            <h2>About Me:</h2>
            <h4>
                Pranab Sarker
                <p></p>
                Student of Computer Science & Engineering Department.
                <p></p>
                Rajshahi University of Engineering & Technology
                <p></p>
                Gmail: HOLUDHIMUBACKAGAIN10@gmail.com
            </h4>
      </div>  
      <div class="contact_us">
            <p></p>
            <h2>Contact_us :</h2>
            <h4>
                Gmail: HOLUDHIMUBACKAGAIN10@gmail.com
                <p></p>
                Facebook: <a href="https://www.facebook.com/profile.php?id=100016716963781">Holud Himu</a>
                <p></p>
                Place: Talaimari,Ruet.
                <p></p>
                <img src="img/himu.jpg" height=261px width=500px> 
                <img src="img/RUET.PNG" height=261px width=500px> 
            </h4>
      </div>
    <?php include("Datalist.php");  ?>
</body>
</html>