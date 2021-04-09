<?php

    $link = mysqli_connect("localhost","root","","lifehacking-3133331369");
    
    if(mysqli_connect_error()){
        print_r(mysqli_connect_error());
        exit();
    }

    session_start();

    function timeElapsedSinceNow( $datetime, $full = false )
    {
        date_default_timezone_set('Europe/London');
        
        $now = new DateTime();
        $then = new DateTime( $datetime );
        $diff = (array) $now->diff( $then );

        $diff['w']  = floor( $diff['d'] / 7 );
        $diff['d'] -= $diff['w'] * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );

        foreach( $string as $k => & $v )
        {
            if ( $diff[$k] )
            {
                $v = $diff[$k] . ' ' . $v .( $diff[$k] > 1 ? 's' : '' );
            }
            else
            {
                unset( $string[$k] );
            }
        }

        if ( ! $full ) $string = array_slice( $string, 0, 1 );
        return $string ? implode( ', ', $string ) . ' ago' : 'just now';
    }


    function merge_querystring($url = null,$query = null,$recursive = false)
    {
        
        if($url == null)

            return false;

        if($query == null)

            return $url;
        
        $url_components = parse_url($url);
        if(empty($url_components['query']))
        
            return $url.'?'.ltrim($query,'?');
        
        parse_str($url_components['query'],$original_query_string);
        
        parse_str(parse_url($query,PHP_URL_QUERY),$merged_query_string);
        
        if($recursive == true)
            $merged_result = array_merge_recursive($original_query_string,$merged_query_string);
        else
            $merged_result = array_merge($original_query_string,$merged_query_string);
        
        return str_replace($url_components['query'],http_build_query($merged_result),$url);

    }



    
    function displayPosts($type) {
        
        global $link;
        
        if ($type == 'public') {
            
            $whereClause = "";
                
        } else if ($type == 'isFollowing') {

            if(array_key_exists("id",$_SESSION)) {

                $result=mysqli_query($link, "SELECT userid FROM users WHERE id=".$_SESSION['id'].";");
                $row=mysqli_fetch_assoc($result);
                $query = "SELECT * FROM isfollowing WHERE follower = '". mysqli_real_escape_string($link, $row['userid'])."'";
                $result = mysqli_query($link, $query);
                
                $whereClause = "WHERE userid='' ";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    if ($whereClause == "WHERE userid='' ") 
                    $whereClause = "WHERE";
                    else $whereClause.= " OR";
                    $whereClause.= " userid = '".$row['isFollowing']."' ";
                        
                }

            }else{
                $whereClause = "WHERE userid='' ";
            }
            
        } else if ($type == 'yourtweets') {

            $result=mysqli_query($link, "SELECT userid FROM users WHERE id=".$_SESSION['id'].";");
            $row=mysqli_fetch_assoc($result);
            $whereClause = "WHERE userid = '". mysqli_real_escape_string($link, $row['userid'])."' ";
            
        } else if ($type == 'search') {
            
            echo '<p>Showing search results for "'.mysqli_real_escape_string($link, $_GET['q']).'":</p>';
            
           $whereClause = "WHERE title LIKE '%". mysqli_real_escape_string($link, $_GET['q'])."%' OR content LIKE '%".mysqli_real_escape_string($link, $_GET['q'])."%' ";
            
        } else if (ctype_alnum($type)) {
            
            echo "<h2>".mysqli_real_escape_string($link, $type)."'s Posts</h2><br>";
            
            $whereClause = "WHERE userid = '". mysqli_real_escape_string($link, $type)."' ";
            
            
        }

        $whichClause = "";
        if(array_key_exists("category",$_GET)) {

            if($_GET['category'] == 'all'){
                $whichClause = "";
            } else {

                if($type == 'public'){
                    $whichClause = "WHERE category='".$_GET['category']."'";
                } else {
                    $whichClause = "AND category='".$_GET['category']."'";
                }
    
            }
        }


        if(array_key_exists("title",$_GET)) {

            $title = "WHERE title='".urldecode($_GET['title'])."'";
            
            $query = "SELECT * FROM posts ".$title." ORDER BY `time` DESC LIMIT 10";
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) == 0) {
                
                echo "There are no posts to display.";
                
            } else {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $userQuery = "SELECT * FROM users WHERE userid = '".mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1";
                    $userQueryResult = mysqli_query($link, $userQuery);
                    $user = mysqli_fetch_assoc($userQueryResult);
                    
                    echo "<div class='post'><p><a href='?page=publicprofiles&userid=".$user['userid']."'>".$user['userid']."</a> <span class='time'>".timeElapsedSinceNow($row['time'])."</span></p>";
                   
                    echo "<h1>".ucfirst($row['title'])."</h1>";
    
                    if($row['image'] != NULL) { 
                        echo "<img src='.".$row['image']."' />";
                    }

                    echo "<p style='margin-top:15px;white-space: pre-line;'>".ucfirst($row['content'])."</p>";
                    
                    echo "<p><a type='button' class='toggleFollow' data-userId='".$row['userid']."'>";
                    
                    if(array_key_exists("id",$_SESSION)) {
                        $useridQuery = "SELECT userid FROM users WHERE id = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";
                        $useridQueryResult = mysqli_query($link, $useridQuery);
                        $userid = mysqli_fetch_assoc($useridQueryResult);
                        
                        $isFollowingQuery = "SELECT * FROM isfollowing WHERE follower = '". mysqli_real_escape_string($link, $userid['userid'])."' AND isFollowing = '". mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1";
                    
                        $isFollowingQueryResult = mysqli_query($link, $isFollowingQuery);
    
                        if($userid['userid'] != $row['userid']) {
                            if (mysqli_num_rows($isFollowingQueryResult) > 0) {
                                
                                echo "Unfollow";
                                
                            } else {
                                
                                echo "Follow";
                                
                            }
                        } 
                    }    
                    
                    echo "</a></p></div>";
                    
                }
                
            }

        } else {
        
            $query = "SELECT * FROM posts ".$whereClause."".$whichClause." ORDER BY `time` DESC LIMIT 10";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) == 0) {
                
                echo "There are no posts to display.";
                
            } else {
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $userQuery = "SELECT * FROM users WHERE userid = '".mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1";
                    $userQueryResult = mysqli_query($link, $userQuery);
                    $user = mysqli_fetch_assoc($userQueryResult);
                    
                    echo "<div class='post'><p><a href='?page=publicprofiles&userid=".$user['userid']."'>".$user['userid']."</a> <span class='time'>".timeElapsedSinceNow($row['time'])."</span></p>";
                   
                    echo "<h1>".ucfirst($row['title'])."</h1>";
    
                    if($row['image'] != NULL) { 
                        echo "<img src='.".$row['image']."' />";
                    }
    
                    echo "<p class='content' style='margin-top:15px;white-space: pre-line;'>".ucfirst($row['content'])."</p>";
                    
                    echo "<p><a type='button' class='toggleFollow' data-userId='".$row['userid']."'>";
                    
                    if(array_key_exists("id",$_SESSION)) {
                        $useridQuery = "SELECT userid FROM users WHERE id = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";
                        $useridQueryResult = mysqli_query($link, $useridQuery);
                        $userid = mysqli_fetch_assoc($useridQueryResult);
                        
                        $isFollowingQuery = "SELECT * FROM isfollowing WHERE follower = '". mysqli_real_escape_string($link, $userid['userid'])."' AND isFollowing = '". mysqli_real_escape_string($link, $row['userid'])."' LIMIT 1";
                        $isFollowingQueryResult = mysqli_query($link, $isFollowingQuery);
    
                        if($userid['userid'] != $row['userid']) {
                            if (mysqli_num_rows($isFollowingQueryResult) > 0) {
                                
                                echo "Unfollow";
                                
                            } else {
                                
                                echo "Follow";
                                
                            }
                        } 
                    }    
                        
                    echo "</a></p></div>";
                        
                }
            }
        }
        
        
    }



    function displayPostBox() {
        
        if (array_key_exists("id",$_SESSION)) {
            
            echo '<div id="postBox">
            <div id="postSuccess" class="alert alert-success hidden">Your post was posted successfully.</div>
            <div id="postFail" class="alert alert-danger hidden"></div>
            <form name="postboxform" id="postboxform" method="POST" class="form" enctype="multipart/form-data">
                <div class="form-group">
                    <textarea class="form-control" name="title" id="postQsn" rows=3 placeholder="Title"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" id="postContent" rows=10 placeholder="Content"></textarea>
                </div>
                <input list="Category" id="select" name="category" autocomplete="off">
                <datalist id="Category">
                    <option value="technology">
                    <option value="fashion">
                    <option value="food">
                    <option value="healthFitness">
                    <option value="psychology">
                    <option value="beauty">
                    <option value="selfCare">
                    <option value="finance">
                    <option value="travel">
                    <option value="homeDecor">
                    <option value="hobbies">
                    <option value="famiy">
                    <option value="gardening">
                    <option value="other">
                </datalist>
                <input type="file" name="image" id="postImage">
                <button type="submit" id="postButton" class="btn btn-default">Post</button>
            </form>
            </div>';
            
            
        } else {
            echo "<p>Login to post...</p>";
            echo "<img src='images/postbox.png' alt='' style='position:relative;' width='100%'/>";
        }   
        
    }

    function displayUsers() {
        
        global $link;
        
        $query = "SELECT * FROM users LIMIT 10";
        
        $result = mysqli_query($link, $query);
            
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<p><a href='?page=publicprofiles&userid=".$row['userid']."'>@".$row['userid']."</a></p>";
            
        }
         
    }

    function displayTitle() {

        global $link;

        $query = "SELECT title FROM posts WHERE userid='admin' ORDER BY `time` DESC LIMIT 10";
        
        $result = mysqli_query($link, $query);

        while($row=mysqli_fetch_assoc($result)) {

            $title=$row['title'];
          
            $postlink=merge_querystring('index.php','?title='.urlencode($title).'');
            echo "<h5><strong><a href='".$postlink."'>".ucfirst(mysqli_real_escape_string($link,$title))."</a></strong></h5>";
         
        }

    }

?>