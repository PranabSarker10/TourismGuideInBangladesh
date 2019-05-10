<?php require_once('inc/top.php');?>
<?php 
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

$session_username = $_SESSION['username'];

if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    if($_SESSION['role'] == 'admin'){
        $del_check_query = "SELECT * FROM post WHERE id = $del_id";
        $del_check_run = mysqli_query($con, $del_check_query);
    }
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM post WHERE post.id = $del_id";
        if(mysqli_query($con, $del_query)){
            $msg = "Post Has been Deleted";
        }
        else{
            $error = "Post has not been deleted";
        } 
    }
    else{
        header('location: index.php');
    }
}


if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    if($_SESSION['role'] == 'admin'){
        $del_check_query = "SELECT * FROM add_place WHERE id = $del_id";
        $del_check_run = mysqli_query($con, $del_check_query);
    }
    if(mysqli_num_rows($del_check_run) > 0){
        $del_query = "DELETE FROM add_place WHERE add_place.id = $del_id";
        if(mysqli_query($con, $del_query)){
            $msg = "Place Has been Deleted";
        }
        else{
            $error = "Place has not been deleted";
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
                    <h1><i class="fa fa-file"></i> Posts <small>View All Posts</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-file"></i> Posts</li>
                    </ol>
                    <?php
                    if($_SESSION['role'] == 'admin'){
                        $query = "SELECT * FROM post ORDER BY id DESC";
                        $run = mysqli_query($con, $query);
                    }
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
                                <th>Sr</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            while($row = mysqli_fetch_array($run)){
                                $id = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                            ?>
                            <tr>
                                <td><?php echo $id;?></td>
                                <td><?php echo "$title";?></td>
                                <td><?php echo "$description";?></td>
                                <td><a href="posts.php?del=<?php echo $id;?>"><i class="fa fa-times"></i></a></td>
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
                    
                   
                </div>
            </div>
        </div>
        <div id="wrapper">
        <?php require_once('inc/header.php');?>

       
       
       
       
       
       
       
       
       
        
           
        
                    
        
        
        
        
        
        
        
        
        
        

<?php require_once('inc/footer.php');?>