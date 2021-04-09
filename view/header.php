
<!DOCTYPE html>
<html>
    <head lang="en">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171070568-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-171070568-1');
        </script>

        <title>Life Hacks Club - A platform for life changing hacks & tricks</title>
        <meta name="description" content="Lifehacks Club is an arsenal of many tricks, skills, or hacks that increases productivity and makes life much easier, convenient, efficient and comfortable.">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <meta name="google-site-verification" content="v3oOXXughTTGNZmDKJEvkQflH0qhdU-TBfuJSkZzTOA" />
  
  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
        <style>
            
            html {
                position: relative;
                height: 100vm;
            }
            body{
                box-sizing:border-box;
                min-height: 100vm;
                margin:0 0 40px 0;
                padding: 0;
            }

            @media screen and (max-width: 600px) {

                #header-logo h1{
                    padding-left:5px !important;
                    width:200px !important;
                    font-size:30px !important;
                }
                button span{
                    display:none;
                }
                .header-content{
                    height:35px !important;
                    padding-left:10px !important;
                    padding-right:10px !important;
                    padding-top:0px !important;
                    margin-left:0px !important;
                }
                #form-search{
                    position:relative;
                }
                #search{
                    width:200px;
                    position:absolute;
                    left:-205px;
                    top:-0px;
                }
                #search-btn{
                    position:relative;
                    top:-7px;
                }
                .navbar-toggler{
                    position:relative;
                    top:-7px;
                }
                #main-container{
                    flex-direction:column;
                    width:100% !important;
                }
                #main{
                    width:100% !important;
                }
                #right{
                    width:100% !important;
                }
                
            }
            
            @media screen and (max-width: 480px) {
                #user-logo{
                    font-size:16px !important;
                }
                .header-content{
                    margin:10px 5px 0px 0px !important;
                }
                .navbar-toggler{
                    top:0px;
                }
                #search{
                    top:8px;
                }
                #search-btn{
                    top:0px;
                }
                #left.active1{
                    display:block;
                    width:50% !important;
                }
                #main-container.active2{
                    display: none;
                }
                .post img{
                    width:95% !important;
                    height:200px !important;
                    margin-left:0 !important;
                }
            }

            .header{
                margin:0px;
                height:65px;
            }
            #header-logo h1{
                font-size:40px;
                padding-top:10px;
                padding-left:8%;
                height:60px;
                width: 300px;
                float:left;
            }
            #user-logo{
                font-size:20px;
                font-weight:bold;
                float:right;
                margin-top:20px;
                margin-right: 5px;
                color: #847482;
            }
            .header-content{
                height:40px;
                padding:2px 20px;
                float:right;
                margin:15px 15px 0px 0px;
            }
            .btn-default{
                color: #FC4A1A;
                background-color:transparent;
                border-color: #FC4A1A;
            }
            .btn-default:hover, .header-content a:hover{
                color: #fff;
                background-color: #FC4A1A;
            }
            .btn-default:focus{
                box-shadow:0 0 0 .1rem rgba(252,74,26,0.5);
            }
            .header-content a{
                text-decoration:none;
                color: #FC4A1A;
                display:block;
            }
            .clear{
                clear:both;
            } 
            .navbar{
                height:50px; 
                margin-bottom:5px;
                font-size:18px;
                box-shadow:0px 5px 10px 0px grey;
                top:-2px;
            }
            .navbar-toggler{
                padding:0 5px;
                margin-left: 5px;
            }
            .navbar-toggler:focus{
                outline:1px solid;
            }
            .navbar-toggler:active{
                position:relative;
            }
            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                height: 40px; 
                line-height: 40px; 
                background-color: black;
            } 
            #loginAlert1, #loginAlert2{
                display:none;
            }
            .hidden{
                display:none;
            }
            .show{
                display:block;
            }

            .container-fluid{
                background-color: #DFDCE355;
                display:flex;
                padding:0;
            }
            #left{
                width:15%;
                background-color: #F6BA7E;
                position:sticky;
                top:51px;
                overflow-y:scroll;   
            }
            #main-container{
                display:flex;
                width:85%;
            }
            #main{
                width:70%;
            }
            #right{
                width:30%;
            }
            .sidenav {
                transition: all 0.3s;
                z-index:1;
                overflow-x:hidden;
                background-color: #F6BA7E;
                display:block;    
            }
            .sidenav a{
                padding: 6px 8px 6px 16px;
                border-bottom: 1px dotted #47748b;
                text-decoration:none;
                display:block;
                color:black;
            }
            .sidenav a.active-tab{
                background-color: #f7db88;
            }
            .sidenav a:hover{
                color: #f26d40;
            }
            #closeSidebar{
                padding:5px 16px;
                background-image: radial-gradient(grey,black,grey);
                color:white;
                display:none;
            }
            #sidebarCollapse{
                display:none;
                background-color: #4ABDAC;
                border: none;
            }
            .sidenav a:hover:not(.active-item){
                background-color:#f26d40;
                color:white;
            }
            @media screen and (max-width: 992px) {
                
                #header-logo h1{
                    padding-left:5px !important;
                }
                #sidebarCollapse, #closeSidebar{
                    display:block;
                }
                #left{
                    display:none;
                }
                #left.active1{
                    display:block;
                    width:200px;
                }
                #main-container.active2{
                    flex-direction:column;
                    width:70%;
                }
                #main-container{
                    width:100%;
                }
                #main.active3, #right.active3{
                    width:100%;
                }
                #main{
                    width:65%;
                }
                #right{
                    width:35%;
                }
                .navbar{
                    padding:0;
                } 
                #navbarContent{
                    background-color: #4ABDAC;
                    padding-left:20px;
                }
            } 
            .time{
                color:lightgrey;
            }
            .post{
                border:1px solid grey;
                border-radius:5px;
                padding:5px 20px;
                margin:10px 10px;
            }
            .post img{
                width:75%;
                height:250px;
                margin-left:10%;
            }
            .post h1{
                font-size:30px;
            }
            #postBox{
                padding:10px 10px 10px 10px;
            }

            button.toggleFollow{
                background:none;
                border:none;
            }
            .err{
                font-size:12px;
                color:red;
                float:right;
            }
            .content a:hover{
                text-decoration:none;
                color:#FC4A1A;
            }
            

        </style>

    </head>
    <body >
        <div>
            <div class="header">
                <div id="header-logo">
                    <h1><em>LifehackingClub</em></h1>
                </div>

                <div <?php echo $signlogbtn; ?> > 
                    <button class="btn btn-default header-content" data-toggle="modal" data-target="#modal1" id="signupbtn">
                        <span>Signup</span>
                        <i class="fa fa-user-plus"></i>
                    </button>
                    <button class="btn btn-default header-content" data-toggle="modal" data-target="#modal2">
                        <span>Login</span>
                        <i class="fa fa-user"></i>
                    </button>
                </div>

                <div <?php echo $logoutbtn; ?> >

                    <a href="index.php?logout=1">
                        <button class="btn btn-default header-content">
                            <span>Logout?</span>
                            <i class="fa fa-sign-out-alt"></i>
                        </button>
                    </a>

                    <span id="user-logo">Hello,<?php echo $userid; ?> </span>

                </div>

            </div>
            
            <div class="clear"></div>

            <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #4ABDAC;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <button id="sidebarCollapse" class="nav-link">category</button>
                        </li>
                        <li class="nav-item">
                            <a href="?page=timeline" class="nav-link">My profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=publicprofiles" class="nav-link">Public profiles</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>   
                </div>
                <div class="navbar-search">
                    <form id="form-search" class="form-inline my-2 my-lg-0">
                        <input type="hidden" name="page" value="search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q" id="search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" id="search-btn">
                            <span>Search</span>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </nav>
        <div>

        
        


    

    