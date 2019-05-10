<?php 
require_once('inc/top.php');
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

$session_username = $_SESSION['username'];
$session_author_image = $_SESSION['author_image'];
?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('inc/header.php');?>

        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-3">
                    <?php require_once('inc/sidebar.php');?>
                </div>
                <div class="col-md-9">
                    <h1><i class="fa fa-plus-square"></i> Add Post <small>Add New Post</small></h1><hr>
                    <ol class="breadcrumb">
                      <li><a href="index.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-plus-square"></i> Add Post</li>
                    </ol>
                    <?php
                    if(isset($_POST['submit'])){
                        $date = date('Y/m/d H:i:s');
                        $title = mysqli_real_escape_string($con,$_POST['title']);
                        $post_data = mysqli_real_escape_string($con,$_POST['post-data']);
                        //$categories = $_POST['categories'];
                        //$tags = mysqli_real_escape_string($con,$_POST['tags']);
                        //$status = $_POST['status'];
                        $image = $_FILES['image']['name'];
                        $tmp_name = $_FILES['image']['tmp_name'];
                        
                        if(empty($title) or empty($post_data) or empty($image)){
                            $error = "All (*) Fields Are Required";
                            
                        }
                        else{
                            $insert_query = "INSERT INTO post (title, description, image, date, author, author_image) VALUES ('$title','$post_data','$image', '$date','$session_username', '$session_author_image')";
                            if(mysqli_query($con, $insert_query)){
                                $msg = "Post Has Been Added";
                                $path = "img/$image";
                                $title = "";
                                $post_data = "";
                                //$tags = "";
                                //$status = "";
                                //$categories = "";
                                if(move_uploaded_file($tmp_name, $path)){
                                    copy($path, "../$path");
                                }
                            }
                            else{
                                $error = "Post Has not Been Added";
                            }
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title:*</label>
                                    <?php
                                    if(isset($msg)){
                                        echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                    }
                                    else if(isset($error)){
                                        echo "<span class='pull-right' style='color:red;'>$error</span>";
                                    }
                                    ?>
                                    <input type="text" name="title" placeholder="Type Post Title Here" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
                                </div>
                                

                                
                                <div class="form-group">
                                    <textarea name="post-data" id="textarea" rows="10" class="form-control" placeholder="Your Post Goes Here.."><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="file">Post Image:*</label>
                                            <input type="file" name="image">
                                        </div>
                                    </div>

                                </div>

                                <input type="submit" class="btn btn-primary" value="Add Post" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once('inc/footer.php');?>