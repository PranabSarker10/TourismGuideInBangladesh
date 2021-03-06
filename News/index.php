﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="stylenew.css">  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags "must" come first in the head; any other head content must come ="after" these tags --> 
    <title>News</title>
    <!-- Bootstrap -->
    <link rel="icon" type="image/png" href="img/logo.png"> 
    <link rel="stylesheet" href="css/font-awesome.css">  
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>  
    <link rel="stylesheet" href="css/animate.css">   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">  
    <!-- HTML5 shim and Respond.js for IEB support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
    <!-- {if 1t IE 9}>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("search_helper.php"); ?>   
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html">
                          <div class="col-xs-3"><img src="img/logo.png" alt="Logo" width="30px"></div>
                          <div class="col-xs-9">News</div>
                      </a>
                  </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text" aria-hidden="true"></i> Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Page 1</a></li>
                          <li><a href="#">Page 2</a></li>
                      </ul>
                    </li>
                  
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt" aria-hidden="true"></i> Catagories <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                      </ul>
                    </li>
                    <li><a href="contect-us.html"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us </a></li>  
                  </ul>
                </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
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
                     <div class="post">
                         <div class="row">
                              <div class="col-md-2 post-date">
                                  <div class="day">25</div>
                                  <div class="month">August</div>
                                  <div class="year">2017</div>
                              </div>
                              <div class="col-md-8 post-title">
                                  <a href="#"><h2>This is demo heading for post one.....</h2></a>
                                  <p>Written by: <span>Holud Himu</span></p>
                              </div>
                              <div class="col-md-2 profile-picture">
                                   <img src="img/profile-black.jpg" alt="Profile Picture" class="img-circle">
                              </div>
                         </div>
                         <a href="#"><img src="img/slider-imgshow.jpg"</a>
                     </div>
                </div>
                <div class="col-md-4">
                     <div class="widgets">
                         <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                     </div><!--widget close-->
                    
                     <div class="widgets">
                         <div class="popular">
                              <h4>Popular</h4>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                   <a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                         </div>
                    </div><!--widget close-->
                    <hr>
                    <div class="widgets">
                         <div class="popular">
                              <h4>Recent Post</h4>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
                                  <a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                             <hr>
                              <div class="row">
                                  <div class="col-xs-4">
                                  <a href="#"><img src="img/S_D.jpg" alt="Image 1"></a>
                                  </div>      
                                  <div class="col-xs-8 details">
<a herf="#"><h4>This is heading for post</h4></a>
                                  <p><i class="fa fa-clock-o"></i>25 august,2017</p>
                                  </div>  
                             </div>
                         </div>
                    </div><!--widget close-->
                    <hr>
                    <div class="widgets">
                         <div class="popular">
                              <h4>Categories</h4>
                              <hr>
                              <div class="row">
                                   <div class="col-xs-6">
                                     <li><a href="">Category</a></li>  
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
                                   </div>   
                                   <div class="col-xs-6">
                                     <li><a href="">Category</a></li>  
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
                                     <li><a href="">Category</a></li> 
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
                                       <a href="#"><img src="img/facebook.png" height="" width="" alt="Facebook"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="#"><img src="img/twitter.png" alt="twitter"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="#"><img src="img/googleplus.png" alt="google Plus"></a>
                                   </div>
                              </div>     
                              <hr>
                              <div class="row">
                                   <div class="col-xs-4">
                                       <a href="#"><img src="img/linkedin.png" alt="Linkedin"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="#"><img src="img/skype.png" alt="Skype"></a>
                                   </div>
                                   <div class="col-xs-4">
                                       <a href="#"><img src="img/youtube.png" alt="YouTube"></a>
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