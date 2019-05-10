<?php require_once('inc/top.php');?>
<?php 
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
else if(isset($_SESSION['username']) && $_SESSION['role'] == 'author'){
    header('Location: index.php');
}

$session_username = $_SESSION['username'];

if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $del_check_query = "SELECT * FROM comment WHERE id = $del_id";
    $del_check_run = mysqli_query($con, $del_check_query);
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM comment WHERE comment.id = $del_id";
        if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
            if(mysqli_query($con, $del_query)){
                $msg = "Comment Has been Deleted";
            }
            else{
                $error = "Comment has not been deleted";
            } 
        }
    }
    else{
        header('location: index.php');
    }
}

if(isset($_GET['del_post_com'])){
    $del_id = $_GET['del_post_com'];
    $del_check_query = "SELECT * FROM post_comment WHERE id = $del_id";
    $del_check_run = mysqli_query($con, $del_check_query);
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM post_comment WHERE post_comment.id = $del_id";
        if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin'){
            if(mysqli_query($con, $del_query)){
                $msg = "Post Comment Has been Deleted";
            }
            else{
                $error = "Post Comment has not been deleted";
            } 
        }
    }
    else{
        header('location: index.php');
    }
}


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
                    <h1><i class="fa fa-comments"></i> Comments <small>View All Comments</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-comments"></i> Comments</li>
                    </ol>
                    <?php
                   
                    $query = "SELECT * FROM comment ORDER BY id DESC";
                    $run = mysqli_query($con, $query);
                    if(mysqli_num_rows($run) > 0){
                    ?>
                    
                    <?php
                        if(isset($error)){
                            echo "<span style='color:red;' class='pull-right'>$error</span>";
                        }
                        else if(isset($msg)){
                            echo "<span style='color:green;' class='pull-right'>$msg</span>";
                        }
                    ?>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Username</th>
                                <th>Comment</th>
                                <th>Del</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            while($row = mysqli_fetch_array($run)){
                                $id = $row['id'];
                                $username = $row['name'];
                                $comment = $row['comment'];
                            ?>
                            <tr>
                                <td><?php echo $id;?></td>
                                <td><?php echo $username;?></td>
                                <td><?php echo $comment;?></td>
                                <td><a href="comments.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <?php
                    }
                    else{
                        echo "<center><h2>No Users Availabe Now</h2></center>";
                    }
                    ?>
                    </form>
                </div>
                
                
                
                
                
                <div class="col-md-3">
                    <?php require_once('inc/sidebar.php');?>
                </div>
                <div class="col-md-9">
                    <h1><i class="fa fa-comments"></i> Post Comments <small>View All Post Comments</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-comments"></i> Post Comments</li>
                    </ol>
                    <?php
                   
                    $query = "SELECT * FROM post_comment ORDER BY id DESC";
                    $run = mysqli_query($con, $query);
                    if(mysqli_num_rows($run) > 0){
                    ?>
                    
                    <?php
                        if(isset($error)){
                            echo "<span style='color:red;' class='pull-right'>$error</span>";
                        }
                        else if(isset($msg)){
                            echo "<span style='color:green;' class='pull-right'>$msg</span>";
                        }
                    ?>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Post ID</th>
                                <th>Username</th>
                                <th>Post-Comment</th>
                                <th>Del</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            while($row = mysqli_fetch_array($run)){
                                $id = $row['id'];
                                $post_id = $row['post_id'];
                                $username = $row['name'];
                                $comment = $row['comment'];
                            ?>
                            <tr>
                                <td><?php echo $id;?></td>
                                <td><?php echo $post_id;?></td>
                                <td><?php echo $username;?></td>
                                <td><?php echo $comment;?></td>
                                <td><a href="comments.php?del_post_com=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <?php
                    }
                    else{
                        echo "<center><h2>No Post Comment Availabe Now</h2></center>";
                    }
                    ?>
                    </form>
                </div>
                
                
                
                
                
                
            </div>
        </div>

<?php require_once('inc/footer.php');?>