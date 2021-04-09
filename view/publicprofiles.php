<div class="container-fluid">

            <div id="left">

                <div class="sidenav">
                
                    <div type="button" id="closeSidebar"><i class="fa fa-window-close"></i> Close</div>
                    <a href="<?=merge_querystring($url,'?category=all');?>">All</a>
                    <a href="<?=merge_querystring($url,'?category=technology');?>">Technology</a>
                    <a href="<?=merge_querystring($url,'?category=fashion');?>">Fashion</a>
                    <a href="<?=merge_querystring($url,'?category=food');?>">Food</a>
                    <a href="<?=merge_querystring($url,'?category=healthFitness');?>">Health&Fitness</a>
                    <a href="<?=merge_querystring($url,'?category=psychology');?>">Psychology</a>
                    <a href="<?=merge_querystring($url,'?category=beauty');?>">Beauty</a>
                    <a href="<?=merge_querystring($url,'?category=selfCare');?>">Self Care</a>
                    <a href="<?=merge_querystring($url,'?category=finance');?>">Finance</a>
                    <a href="<?=merge_querystring($url,'?category=travel');?>">Travel</a>
                    <a href="<?=merge_querystring($url,'?category=homeDecor');?>">Home Decor</a>
                    <a href="<?=merge_querystring($url,'?category=hobbies');?>">Hobbies</a>
                    <a href="<?=merge_querystring($url,'?category=family');?>">Family</a>
                    <a href="<?=merge_querystring($url,'?category=gardening');?>">Gardening</a>
                    <a href="<?=merge_querystring($url,'?category=others');?>">Others</a>
                   
                </div>
        
            </div>

            
            <div id="main-container">

                <div id="main">

                    <?php if (array_key_exists("userid",$_GET)) { ?>
                        
                    <?php displayPosts($_GET['userid']); ?>

                    <?php } ?> 

                    <br><br><hr>

                    <h2>Active Users</h2>

                    <?php displayUsers(); ?>

                                
                    </div>
                <div id="right">

                    <?php displayPostBox(); ?>
                    <hr>
                    <?php displayTitle(); ?>

                </div>

            </div>

        </div>
        
