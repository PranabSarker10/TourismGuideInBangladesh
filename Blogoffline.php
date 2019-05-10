<?php require_once('inc/top.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <?php include("nav_helper.php"); ?>
    <link rel="stylesheet" type="text/css" href="stylenew.css">
      <title>Blogs</title>  
    <link rel="icon" type="image/png" href="img/logo.png"> 
  </head>
  <body>
     
    <?php include("search_helper.php"); ?>
    <div class="jumbotron">
         <div class="container">
             <div id="details" class="animated fadeInLeft">
                 <h1>Bd Tourism<span> News</span></h1>
                 <br>
                 <br>
                 <p>This section is for showing up-to-date-news. </p>
             </div>
         </div> 
         <img src="img/News.jpg" width="1260px" height="180px" alt="Top Image">
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>  
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img src="img/slider-img1.jpg" height="200px" width="800px" alt="Slider 1">
                                  <div class="carousel-caption">
                                    This is heading for slider 1.
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="img/slider-img2.jpg" height="200px" width="800px" alt="Slider 2">
                                  <div class="carousel-caption">
                                    this is heading for slider 2.
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="img/slider-img3.jpg" height="200px" width="800px" alt="Slider 3">
                                  <div class="carousel-caption">
                                    this is heading for slider 3.
                                  </div>
                                </div>    
                                <div class="item">
                                  <img src="img/slider-img4.jpg" height="200px" width="800px" alt="Slider 4">
                                  <div class="carousel-caption">
                                    this is heading for slider 4.
                                  </div>
                                </div>    
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>
                     
                     <!--my post using php-->
            <?php 
                    
                 $sql="SELECT * FROM post ORDER BY date DESC";
                 $result = mysqli_query($con, $sql);
                    
                  
                do{
                    $row=$result->fetch_assoc();
                    if($row){
                    echo "<div class='post'>";
                        echo "<div class='row'>";

                            echo "<div class='col-md-2 post-date'>";
                                echo "<div class='day'>"; echo date('D')."</div>";
                                echo "<div class='month'>"; echo date('M')."</div>";
                                echo "<div class='year'>"; echo date('Y')."</div>";
                            echo "</div>";


                            echo "<div class='col-md-2 post-date'>";
                                echo "<a href='#'><h2>".$row['title']."</h2></a>";
                                echo "<p>Written by: <span>".$row['author']."</span></p>";    
                            echo "</div>";

                        echo "</div>";
                        
                        ?>
                        
                        <a href="post.php?post_id=<?php echo $row['id'];?>"><img src="img/<?php echo $row['image'];?>" alt="Post Image"></a>
                        <div class="desc">
                            <?php echo substr($row['description'],0,300)."......";?>
                        </div>
                        <a href="post.php?post_id=<?php echo $row['id'];?>" class="btn btn-primary">Read More</a>
                        
                        <?php
                            //echo  "<a href='#'><img src=img/".$row['image']."></img></a>";
                            //echo "<p class='desc'>";
                              //  echo "".$row['description'];
                            //echo "</p>";
                         echo "</div>";
                        }
                    } while($row);
                ?>

               
                </div>
                <div class="col-md-4">
                    
                     <div class="widgets">
                         <div class="popular">
                              <h4>Popular</h4>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="SONARGAON20.php"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="SONARGAON20.php"><h4>Sonargaon, Dhaka</h4></a>
                                  <p><i class="fa fa-clock-o"></i> 25 August,2017 </p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="JAFLONG20.php"><img src="img/JAFLONG20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="JAFLONG20.php"><h4>Jaflong, Sylhet</h4></a>
                                  <p><i class="fa fa-clock-o"></i>21 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="SUNDARBANS20.php"><img src="img/SUNDARBANS20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="SUNDARBANS20.php"><h4>Sundarbans, Khulna</h4></a>
                                  <p><i class="fa fa-clock-o"></i>21 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="GOLDENTEMPLE20.php"><img src="img/GOLDEN TEMPLE20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="GOLDENTEMPLE20.php"><h4>Golden Temple,Bandarban</h4></a>
                                  <p><i class="fa fa-clock-o"></i>22 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="BICHANAKANDI20.php"><img src="img/BICHANAKANDI20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="BICHANAKANDI20.php"><h4>Bichanakandi, Sylhet</h4></a>
                                  <p><i class="fa fa-clock-o"></i>22 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="GURUDAYALCOLLEGE20.php"><img src="img/GC20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="GURUDAYALCOLLEGE20.php"><h4>Gurudayal College, Kishoreganj</h4></a>
                                  <p><i class="fa fa-clock-o"></i>24 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="COX'SBAZAR20.php"><img src="img/COX'S%20BAZAR20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="COX'SBAZAR20.php"><h4>Cox's Bazar, Cox's Bazar.</h4></a>
                                  <p><i class="fa fa-clock-o"></i>24 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="SAINTMARTIN20.php"><img src="img/SAINT%20MARTIN20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="SAINTMARTIN20.php"><h4>Siant Martin, Cox's Bazar-Teknaf</h4></a>
                                  <p><i class="fa fa-clock-o"></i>26 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="LALBAGHFORT20.php"><img src="img/LALBAGH%20FORT20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="LALBAGH%20FORT20.php"><h4>Lalbagh Fort, Dhaka</h4></a>
                                  <p><i class="fa fa-clock-o"></i>27 September,2017</p>
                                  </div>  
                             </div>
                             <hr>
                             <div class="row">
                                  <div class="col-xs-4">
                                  <a href="MADHABKUNDA20.php"><img src="img/MADHABKUNDA20.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="MADHABKUNDA20.php"><h4>Madhabkunda</h4></a>
                                  <p><i class="fa fa-clock-o"></i>27 September,2017</p>
                                  </div>  
                             </div>
                         </div>
                    </div><!--widget close-->
                    <hr>
                    
                    <div class="widgets">
                         <div class="categories">
                              <h4>Social Icons</h4>
                              <hr>
                              <div class="row">
                                   <div class="col-xs-4">
                                       <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="img/facebook.png" height="" width="" alt="Facebook"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="https://twitter.com/"><img src="img/twitter.png" alt="twitter"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="https://plus.google.com/"><img src="img/googleplus.png" alt="google Plus"></a>
                                   </div>
                              </div>     
                              <hr>
                              <div class="row">
                                   <div class="col-xs-4">
                                       <a href="https://www.linkedin.com/"><img src="img/linkedin.png" alt="Linkedin"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="https://www.skype.com/en/"><img src="img/skype.png" alt="Skype"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="YouTube"></a>
                                   </div>
                              </div> 
                         </div>
                    </div><!--widget close-->     
                </div>
            </div>
        </div>  
    </section>
                

                
      <footer>
           <div class="container">
              Copyright &copy; by <a href="https://www.facebook.com/profile.php?id=100016716963781">Holud Himu</a>.
              All Right Reserved from 2017.   
          </div>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
    <!--Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <?php include("Datalist.php");  ?>            
  </body>
</html>