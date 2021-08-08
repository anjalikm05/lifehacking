<?php

    include("function.php");

    $error="";

    if($_GET['action']=='signup') {

        $userid=mysqli_real_escape_string($link,$_POST['userid']);
        $name=mysqli_real_escape_string($link,$_POST['name']);
        $email=mysqli_real_escape_string($link,$_POST['email']);
        $password=mysqli_real_escape_string($link,$_POST['password']);

        $query="SELECT * FROM `users` WHERE `email`='".$email."' LIMIT 1";
        $query1="SELECT * FROM `users` WHERE `userid`='".$userid."' LIMIT 1";
        $result=mysqli_query($link, $query);
        $result1=mysqli_query($link, $query1);

        if(mysqli_num_rows($result) > 0) {

            $error ="That email id is already taken!";
            
        }else if(mysqli_num_rows($result1) > 0) {
             $error ="This userid is not available!";
        }
        else{

            $query = "INSERT INTO users (`id`,`userid`,`name`,`email`,`password`) VALUES (NULL ,'".$userid."', '".$name."', '".$email."', '".$password."');";
            $result=mysqli_query($link,$query);
           
            if(!$result){
                $error ="Could not sign you up - please try again later!";
            }else{
                $_SESSION['id'] = mysqli_insert_id($link);
                    
                $query = "UPDATE users SET password = '". md5(md5($_SESSION['id']).$password)."' WHERE id = ".$_SESSION['id']." LIMIT 1";
                mysqli_query($link, $query) or die('error'.mysqli_error($link));
                
                echo 1;

            }
        }

        if ($error != "") {
            
            echo $error;
            exit();
        }
           
    }

    if($_GET['action']=='login') {

        $email=mysqli_real_escape_string($link,$_POST['email']);
        $password=mysqli_real_escape_string($link,$_POST['password']);
        $stayloggedin=$_POST['stayloggedin'];
        
        $query="SELECT * FROM `users` WHERE email= '".$email."' LIMIT 1";
        $result=mysqli_query($link,$query) or die('error'.mysqli_error($link));
       
        $row = mysqli_fetch_array($result);
              
        if(isset($row)){

            $hashedpassword=md5(md5($row['id']).$_POST['password']);
            if($hashedpassword == $row['password']) {

                $_SESSION['id']= $row['id'];

                if($_POST['stayloggedin']=='1'){
                    setcookie("id",$row['id'],time()+60*60*24*365);
                }

                echo 1;

            }else{

                $error = "That email/password combination could not be found.";
               
            }

        }else{

            $error = "This user does not exists!";

        }

        if ($error != "") {
            
            echo $error;
            exit();
        }
        
    }

    if ($_GET['action'] == 'toggleFollow') {

            $result=mysqli_query($link, "SELECT userid FROM users WHERE id=".$_SESSION['id'].";");
            $userrow=mysqli_fetch_assoc($result);
       
            $query = "SELECT * FROM isfollowing WHERE follower = '". mysqli_real_escape_string($link, $userrow['userid'])."' AND isFollowing = '". mysqli_real_escape_string($link, $_POST['userid'])."' LIMIT 1";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) > 0) {
                
                $row = mysqli_fetch_assoc($result);
                
                mysqli_query($link, "DELETE FROM isfollowing WHERE follower = '". mysqli_real_escape_string($link, $userrow['userid'])."' LIMIT 1");
                
                echo "1";
                  
            } else {
                
                mysqli_query($link, "INSERT INTO isfollowing (follower, isFollowing) VALUES ('". mysqli_real_escape_string($link, $userrow['userid'])."', '". mysqli_real_escape_string($link, $_POST['userid'])."')");
                
                echo "2";
                
                
            }
        
    }

    if ($_GET['action'] == 'postPost') {

        $target_dir = dirname($_FILES['image']['name']);
        $filename = basename($_FILES['image']['name']);
        $targetFilePath = $target_dir.$filename;

        
        if (!$_POST['title']) {
                    
            echo "Your post heading can't be empty!";
                    
        } else if (!$_POST['content']) {
                    
            echo "Your post content can't be empty!";
                    
        } else if (strlen($_POST['title']) > 100) {
            
            echo "Your heading is too long!";
            
        } else if (!$_POST['category']) {
            
            echo "Specify a category!";
            
        } else if (!ctype_alpha($_POST['category'])) {
            
            echo "Specify a valid category!";
            
        } else if ($_FILES['image']['error'] == 4) {
            
            $result=mysqli_query($link, "SELECT userid FROM users WHERE id=".$_SESSION['id'].";");
            $row=mysqli_fetch_assoc($result);
            
            mysqli_query($link, "INSERT INTO posts (`id`, `userid`, `title`, `content`, `category`, `image`, `time`) VALUES (NULL,'". mysqli_real_escape_string($link, $row['userid'])."', '".mysqli_real_escape_string($link, $_POST['title'])."', '".mysqli_real_escape_string($link, $_POST['content'])."', '".$_POST['category']."', NULL, NOW())");
            
            echo "1";
            
        } else{

            if(!in_array(strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION)), array('gif','jpg','jpeg','png'))) {
           
                echo "Invalid image file!";
                
            } else { 

                if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                    
                    $result=mysqli_query($link, "SELECT userid FROM users WHERE id=".$_SESSION['id'].";");
                    $row=mysqli_fetch_assoc($result);

                    mysqli_query($link, "INSERT INTO posts (`id`, `userid`, `title`, `content`, `category`, `image`, `time`) VALUES (NULL,'". mysqli_real_escape_string($link, $row['userid'])."', '".mysqli_real_escape_string($link, $_POST['title'])."', '".mysqli_real_escape_string($link, $_POST['content'])."', '".$_POST['category']."', '".$filename."', NOW())");
                    
                    echo "1";

                }else{

                    echo "sorry there was an error uploading yor file";

                }

            }

        }
        
    }

?>