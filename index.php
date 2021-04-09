<?php

    include("function.php");
    
    $signlogbtn=' class="show" ';
    $logoutbtn=' class="hidden" ';

    if(array_key_exists("logout",$_GET)){

        unset($_SESSION);
        session_destroy();
        setcookie("id","",time()-60*60);

        $signlogbtn=' class="show" ';
        $logoutbtn=' class="hidden" ';

        header('Location:'.$_SERVER['PHP_SELF']);

    }

    if(array_key_exists("id",$_COOKIE)){

        $_SESSION['id'] = $_COOKIE['id'];
    
    }
    
    if(array_key_exists("id",$_SESSION)){

        $signlogbtn=' class="hidden" ';
        $logoutbtn=' class="show" ';
          
        $query = "SELECT `userid` FROM `users` WHERE `id` = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
        $result=mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
     
        $userid=$row['userid'];
    
    }else{
    
        $signlogbtn=' class="show" ';
        $logoutbtn=' class="hidden" ';
    
    }

    include("view/header.php");
    

    if (array_key_exists("page",$_GET)) {

        if ($_GET['page'] == 'timeline') {
            
            $url=$_SERVER['REQUEST_URI'];
            include("view/timeline.php");
            
        } else if ($_GET['page'] == 'yourtweets') {
            
            $url=$_SERVER['REQUEST_URI'];
            include("view/yourtweets.php");
            
        } else if ($_GET['page'] == 'search') {
            
            $url=$_SERVER['REQUEST_URI'];
            include("view/search.php");
            
        } else if ($_GET['page'] == 'publicprofiles') {
            
            $url=$_SERVER['REQUEST_URI'];
            include("view/publicprofiles.php");
            
        } else if ($_GET['page'] == 'about') {
            
            include("view/about.php");
            
        } else if ($_GET['page'] == 'contact') {
            
            include("view/contact.php");
            
        }   
        
    } else {

        $url=$_SERVER['PHP_SELF'];
        include("view/home.php");
        
    }

    include("view/footer.php");

?>



    