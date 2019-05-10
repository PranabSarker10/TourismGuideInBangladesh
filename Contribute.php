<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="divisionstyle.css">
</head>

<?php require_once('inc/db.php'); ?>
<?php
    if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $tourist = $_POST['tourist'];
            $username = $_POST['username'];
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $division = $_SERVER['REQUEST_URI'];
        
            $key_query = "SELECT * FROM users WHERE username='$username'";
            $res = mysqli_query($con, $key_query);
            $r = mysqli_fetch_array($res);
            $var = $r['username'];
        
            
        if($username != $var){
            $error = "Wrong Username";
        }
        else{
        
            if(empty($title) or empty($description) or empty($tourist) or empty($image)){
                $error = "All (*) Fields Are Required";
            }
            else{
                $insert_query = "INSERT INTO add_place(title, image, description, tourist, division) VALUES('$title', '$image', '$description', '$tourist', '$division')";
                if(mysqli_query($con, $insert_query)){
                    $msg = "Place Has Been Added";
                    $path = "img/$image";
                    $title = "";
                    $description = "";
                    if(move_uploaded_file($tmp_name, $path)){
                        copy($path, "../$path");
                    }
                }
                else{
                    $error = "Place Has not Been Added";
                }
            }
        }
    }
?>
<div class="add-place">
<?php
    $sql="SELECT * FROM add_place WHERE division='".$_SERVER['REQUEST_URI']."' ORDER BY id";
    $result = mysqli_query($con, $sql);

    do{
       $row=$result->fetch_assoc();
       if($row){

           echo "<li>".$row['title']."</li>";
           echo "<img src='img/".$row['image']."' height=440px width=850px>";
           echo "<p></p>";
           echo "".$row['description'];
           echo "<p></p>";
           echo "<em><b>Tourist attractions:</b><br></em>";
           echo "".$row['tourist']."<br>";
           echo "<br>";
       } else
           echo "<br>";
    } while($row);
?>  
</div>       
      
      
        <div id="contact">
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
                    <textarea name="description" id="textarea" rows="10" class="form-control" placeholder="Description of the place goes here.."><?php if(isset($description)){echo $description;}?></textarea>
                </div>
                
                <div class="form-group">
                    <textarea name="tourist" id="textarea" rows="6" class="form-control" placeholder="Tourist attraction goes here.."><?php if(isset($tourist)){echo $tourist;}?></textarea>
                </div>
                
                  <div class="form-group">
                    <textarea name="username" id="textarea" rows="1" class="form-control" placeholder="Enter Your Username"></textarea>
                </div>

                
                <div class="form-group">
                    <label for="file">Post Image:*</label>
                    <input type="file" name="image">
                </div>

                <input type="submit" class="btn btn-primary" value="Contribute" name="submit">
            </form>
        </div>
</html>

    <?php include("Datalist.php");  ?>
