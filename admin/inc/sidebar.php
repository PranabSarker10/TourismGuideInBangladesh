<?php
$session_role1 = $_SESSION['role'];

$get_post = "SELECT * FROM post";
$get_post_run = mysqli_query($con, $get_post);
$num_of_post_rows = mysqli_num_rows($get_post_run);


$get_comment = "SELECT * FROM comment";
$get_comment_run = mysqli_query($con, $get_comment);
$num_of_rows = mysqli_num_rows($get_comment_run);

$get_post_comment = "SELECT * FROM post_comment";
$get_post_comment_run = mysqli_query($con, $get_post_comment);
$num_of_rows_post = mysqli_num_rows($get_post_comment_run);

$num_of_rows += $num_of_rows_post;

$get_users = "SELECT * FROM users";
$get_users_run = mysqli_query($con, $get_users);
$num_of_rows_users = mysqli_num_rows($get_users_run);

$get_places = "SELECT * FROM add_place";
$get_places_run = mysqli_query($con, $get_places);
$num_of_rows_places = mysqli_num_rows($get_places_run);

?>
                     <div class="list-group">
                      <a href="index.php" class="list-group-item active">
                        <i class="fa fa-tachometer"></i> Dashboard
                      </a>
                      <a href="posts.php" class="list-group-item">
                         <?php
                          if($num_of_post_rows > 0){
                              echo "<span class='badge'>$num_of_post_rows</span>";
                          }
                          ?>
                          <i class="fa fa-file-text"></i> All Posts
                      </a>
                      <?php
                        if($session_role1 == 'admin'){
                            
                        
                        ?>
                      <a href="comments.php" class="list-group-item">
                          <?php
                          if($num_of_rows > 0){
                              echo "<span class='badge'>$num_of_rows</span>";
                          }
                          ?>
                          <i class="fa fa-comment"></i> Comments  
                      </a>
                      <a href="users.php" class="list-group-item">
                         <?php
                          if($num_of_rows_users > 0){
                              echo "<span class='badge'>$num_of_rows_users</span>";
                          }
                          ?>
                          <i class="fa fa-users"></i> Users
                      </a>
                      
                      <a href="place.php" class="list-group-item">
                         <?php
                          if($num_of_rows_places > 0){
                              echo "<span class='badge'>$num_of_rows_places</span>";
                          }
                          ?>
                          <i class="fa fa-users"></i> Places
                      </a>
                      <?php }?>
                    </div>