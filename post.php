<!DOCTYPE html>
<html>
     <head>
        <?php require_once('inc/top.php');?>
         <link rel="stylesheet" type="text/css" href="stylenew.css">
         <title>Post</title>  
         <link rel="icon" type="image/png" href="img/logo.png">  
         <?php include("nav_helper.php"); ?>
         
  </head>
<body>
<?php include("search_helper.php"); ?>
   
<?php
if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    
    
    $query = "SELECT * FROM post WHERE id = $post_id";
    $run = mysqli_query($con, $query);
    if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_array($run);
        $id = $row['id'];
        $date = $row['date'];
        $title = $row['title'];
        $image = $row['image'];
        $author_image = $row['author_image'];
        $author = $row['author'];
        $post_data = $row['description'];
    }
    else{
        header('Location: index.php');
    }
}      
?>

    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="date"><?php echo $date;?></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                                <p>Written by: <span><?php echo ucfirst($author);?></span></p>
                            </div>
                        </div>
                        <a href="img/<?php echo $image;?>"><img src="img/<?php echo $image;?>" alt="Post Image"></a>
                        <div class="desc">
                            <?php echo $post_data;?>
                        </div>
                        
                     
                    </div>
                    


                    <?php
                    $c_query = "SELECT * FROM post_comment WHERE post_id = $post_id ORDER BY id DESC";
                    $c_run = mysqli_query($con,$c_query);
                    if(mysqli_num_rows($c_run) > 0){
                    ?>
                    <div class="comment">
                       <h3>Comments</h3>
                       <?php
                        while($c_row = mysqli_fetch_array($c_run)){
                            $c_id = $c_row['id'];
                            $c_name = $c_row['name'];
                            $c_email= $c_row['email'];
                            $c_comment = $c_row['comment'];
                            $c_date = $c_row['date'];
                        ?>
                       <hr>
                        <div class="row single-comment">
                            <div class="col-sm-10">
                                <h4><?php echo ucfirst($c_name);?></h4>
                                <h5><?php echo "Commented having email: "; ?> </h5>
                                <h5> <?php echo $c_email; ?> </h5>
                                <h5> <?php echo " on: "; ?> </h5>
                                <h5> <?php echo $c_date; ?> </h5>
                                <hr>
                                <p><?php echo $c_comment;?></p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php }
                    
                    if(isset($_POST['submit'])){
                        $cs_name = $_POST['name'];
                        $cs_email = $_POST['email'];
                        $cs_comment = $_POST['comment'];
                        if(empty($cs_name) or empty($cs_email) or empty($cs_comment)){
                          $error_msg = "All (*) feilds are Required";  
                        }
                        else{
                            $cs_query = "INSERT INTO post_comment (post_id, name, email, comment) VALUES ('$post_id', '$cs_name', '$cs_email', '$cs_comment')";
                            if(mysqli_query($con, $cs_query)){
                                $msg = "Comment Submited";
                                $cs_name = "";
                                $cs_email = "";
                                $cs_comment = "";
                            }
                            else{
                                $error_msg = "Comment has not be sumited";
                            }
                        }
                    }
                    ?>
                    
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="full-name">Full Name:*</label>
                                        <input type="text" value="<?php if(isset($cs_name)){echo $cs_name;}?>" name="name" id="full-name" class="form-control" placeholder="Full Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email Address:*</label>
                                        <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($cs_email)){echo $cs_email;}?>" placeholder="Email Address">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="comment">Comment:*</label>
                                        <textarea id="comment" name="comment" cols="30" rows="10" placeholder="Your Comment Should be Here" class="form-control"><?php if(isset($cs_comment)){echo $cs_comment;}?></textarea>
                                    </div>
                                    
                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit Comment">
                                    <?php
                                    if(isset($error_msg)){
                                        echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                                    }
                                    else if(isset($msg)){
                                        echo "<span style='color:green;' class='pull-right'>$msg</span>";
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php include("Datalist.php");  ?>
</body>