    
        <footer class="footer">
            <div class="container">
                <small class="text-muted">Copyright &copy; 2020 LifehackingClub. All Rights Reserved</small>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        

        <script type="text/javascript">

            $(document).ready(function () {
                
                $(".content").each(function() {
                    
                    var max_len=1000;
                    
                    if($(this).html().length > max_len){
                        
                        var sort_content=$(this).html().substr(0,max_len);
                        var title=$('.post>h1').html();
                        $(this).html(sort_content+"<a href='index.php?title="+encodeURIComponent(title)+"' class='read-more'>...see more</a>");
                    
                        
                    }
                });
           
                $(function () {
                    setNavigation();
                });

                function setNavigation() {

                    var path1 = location.pathname;
                    var path2 = window.location.search;
                    var path = path1+path2;

                    $(".sidenav a").each(function () {
                        
                        var href = $(this).attr('href');
                        
                        if ($(this).attr('href') === path) {
                            $(this).addClass('active-tab');
                        }
                    });
                }
               
                $('#sidebarCollapse').click(function () {
                    $('#left').toggleClass('active1');
                    $('#main-container').toggleClass('active2');
                    $('#main').toggleClass('active3');
                    $('#right').toggleClass('active3');
                    dynamicHeight();
                });
                $('#closeSidebar').click(function () {
                    $('#left').toggleClass('active1');
                    $('#main-container').toggleClass('active2');
                    $('#main').toggleClass('active3');
                    $('#right').toggleClass('active3');
                });
                $('.navbar-nav>li>button').click(function () {
                    $('.navbar-collapse').addClass('hide');
                    $('.navbar-collapse').removeClass('show');
                });

                function dynamicHeight() {
                    var totalHeight = $(window).height();
                    totalHeight -= $('.navbar').height();
                    totalHeight -= $('.footer').height();
    
                    totalHeight -= 10;
    
                    $('#left').css('height', totalHeight);
                };
                dynamicHeight();
            });
                 

        </script>

        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel1">Sign-up Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="loginAlert1"></div>
                <form id="form1" method="POST">

                    <div class="form-group">
                        <label for="userid">Userid:</label><span class="err" id="checkid"></span>
                        <input type="text" name="userid" class="form-control" id="userid" autocomplete="off">
                    </div>
                 
                    <div class="form-group">
                        <label for="name">Name:</label><span class="err" id="checkname"></span>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email1">Email:</label><span class="err" id="checkemail"></span>
                        <input type="email" name="email" class="form-control" id="email1">
                    </div>

                    <div class="form-group">
                        <label for="password1">Password:</label><span class="err" id="checkpassword"></span>
                        <input type="password" name="password" class="form-control" id="password1">
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword">Confirm password:</label><span class="err" id="checkconfirmpassword"></span>
                        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword">
                    </div>
                
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" form="form1" id="submit1" class="submit btn btn-primary">Sign Up</button>
            </div>

            </div>
        </div>
        </div>

        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel2">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">

                <div class="alert alert-danger" id="loginAlert2"></div>
            
                <form id="form2" method="POST">

                    <div class="form-group">
                        <label for="email2">Email:</label>
                        <input type="email" name="email" class="form-control" id="email2">
                    </div>

                    <div class="form-group">
                        <label for="password2">Password:</label>
                        <input type="password" name="password" class="form-control" id="password2">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="check" value="1">
                        <label class="form-check-label" for="check">Keep me logged in!</label>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" form="form2" id="submit2" class="btn btn-primary">Login</button>
            </div>

            </div>
        </div>
        </div> 

        <script>
        
            $("#signupbtn").click(function() {
                $("#checkname").hide();
                $("#checkid").hide();
                $("#checkemail").hide();
                $("#checkpassword").hide();
                $("#checkconfirmpassword").hide();
            });
        
            function checkvalidation() {
                
                var name_err=true;
                var id_err=true;
                var email_err=true;
                var password_err=true;
                var confirmpassword_err=true;
                
                $("#name").keyup(function() {
                    namecheck();
                });
                function namecheck() {
                    var name_val=$("#name").val();
                    
                    if(name_val.length == ''){
                        $("#checkname").show();
                        $("#checkname").html("**please fill your name");
                        $("#checkname").focus();
                        name_err=false;
                        return false;
                    }else if(name_val.length >15){
                        $("#checkname").show();
                        $("#checkname").html("**your name should not be longer than 15 letters");
                        $("#checkname").focus();
                        name_err=false;
                        return false;
                    }else{
                        $("#checkname").hide();
                    }
                    if(name_val.match(/^[a-zA-Z\s]+$/)){
                        $("#checkname").hide();
                    }else{
                        $("#checkname").show();
                        $("#checkname").html("**your name should only contain alphabets");
                        $("#checkname").focus();
                        name_err=false;
                        return false;
                    }
                };
                $("#userid").keyup(function() {
                    idcheck();
                });
                function idcheck() {
                    var uid_val=$("#userid").val();
                    
                    if(uid_val.length == ''){
                        $("#checkid").show();
                        $("#checkid").html("**Enter a unique userid");
                        $("#checkid").focus();
                        id_err=false;
                        return false;
                    }else if(uid_val.length >15){
                        $("#checkid").show();
                        $("#checkid").html("**Unique userid should be maximum 10 characters long");
                        $("#checkid").focus();
                        id_err=false;
                        return false;
                    }else{
                        $("#checkid").hide();
                    }
                    if(uid_val.match(/^[a-zA-Z0-9\_]+$/)){
                        $("#checkid").hide();
                    }else{
                        $("#checkid").show();
                        $("#checkid").html("**your name should only contain alphabets");
                        $("#checkid").focus();
                        id_err=false;
                        return false;
                    }
                };
                $("#email1").keyup(function() {
                    emailcheck();
                });
                function emailcheck() {
                    var email_val=$("#email1").val();
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if(email_val==''){
                        $("#checkemail").show();
                        $("#checkemail").html("**please fill email");
                        $("#checkemail").focus();
                        email_err=false;
                        return false;
                    }else if(!regex.test(email_val)){
                        $("#checkemail").show();
                        $("#checkemail").html("**Invalid email");
                        $("#checkemail").focus();
                        email_err=false;
                        return false;
                    }else{
                        $("#checkemail").hide();
                    }
                };
                $("#password1").keyup(function() {
                    checkpass();
                });
                function checkpass(){
                    var pass_val=$("#password1").val();
                    if(pass_val.length == ''){
                        $("#checkpassword").show();
                        $("#checkpassword").html("**enter password");
                        $("#checkpassword").focus();
                        password_err=false;
                        return false;
                    }else if(pass_val.length <6){
                        $("#checkpassword").show();
                        $("#checkpassword").html("**password too short");
                        $("#checkpassword").focus();
                        password_err=false;
                        return false;
                    }else if(pass_val.length >15){
                        $("#checkpassword").show();
                        $("#checkpassword").html("**password should not contain more than 15 characters");
                        $("#checkpassword").focus();
                        password_err=false;
                        return false;
                    }else{
                        $("#checkpassword").hide();
                    }

                    if((pass_val.match(/(a-zA-Z)/)) && (pass_val.match(/(0-9)/))){
                        $("#checkpassword").hide();
                    }else if(pass_val.match(/(@)/)){
                        $("#checkpassword").hide();
                    }else{
                        $("#checkpassword").show();
                        $("#checkpassword").html("**password must contain a-z,A-Z,0-9 and @ character");
                        $("#checkpassword").focus();
                        password_err=false;
                        return false;
                    }
                };
                $("#confirmpassword").keyup(function() {
                    checkconpass();
                });
                function checkconpass(){
                    var conpass_val=$("#confirmpassword").val();
                    var pass_val=$("#password1").val();
                    if(conpass_val!=pass_val){
                        $("#checkconfirmpassword").show();
                        $("#checkconfirmpassword").html("**password unmatched");
                        $("#checkconfirmpassword").focus();
                        confirmpassword_err=false;
                        return false;
                    }else{
                        $("#checkconfirmpassword").hide();
                    }
                };
                
                namecheck();
                idcheck();
                emailcheck();
                checkpass();
                checkconpass();
                
                if((name_err==true) && (id_err==true) && (email_err==true) && (password_err==true) && (confirmpassword_err==true)){
                    return true;
                }else{
                    return false;
                }
                
            }

            $("#submit1").click(function() {   
                
                if(checkvalidation()) {
               
                    var userid=$("#userid").val();
                    var email=$("#email1").val();
                    var name=$("#name").val();
                    var password=$("#password1").val();
                    var confirmpassword=$("#confirmpassword").val();
                
                    $.ajax({
                      
                        type: "POST",
                        url: "action.php?action=signup",
                        data: {"userid":userid,"name":name,"email":email,"password":password} ,
                        success : function(result) {
                            if (result == "1") {
                        
                                window.location.assign(window.location.href);
                        
                            } else {
                        
                                $("#loginAlert1").html(result).show();
                        
                            }
                        }
                                   
                    });
                } else {
                    return false;
                }

            });
            
            $("#submit2").click(function() {  

                email=$("#email2").val();
                password=$("#password2").val(); 
                stayloggedin=$("#check").val();
                   
                $.ajax({
                    
                    type: "POST",
                    url: "action.php?action=login",
                    data: {"email":email,"password":password,"stayloggedin":stayloggedin} ,
                    success: function(result) {
                        if (result == "1") {
                    
                            location.reload();
                        
                    
                        } else {
                    
                            $("#loginAlert2").html(result).show();
                    
                        }
                    }
                });              
            });

            $(".toggleFollow").click(function() {
        
                id = $(this).attr("data-userId");
                
                $.ajax({
                    type: "POST",
                    url: "action.php?action=toggleFollow",
                    data: {"userid":id} ,
                    success: function(result) {

                        if (result == "1") {
                            
                            $("a[data-userId='" + id + "']").html("Follow");
                            
                        } else if (result == "2") {
                            
                            $("a[data-userId='" + id + "']").html("Unfollow");
                            
                        }
                    }           
                    
                });
                
            });
            
            $("#postboxform").submit(function(e) {

                e.preventDefault();
                var formData= new FormData(this);

                const xhr=new XMLHttpRequest();
                xhr.open('POST','action.php?action=postPost',true);
                xhr.responseType = 'text';

                xhr.onload = function() {
                    if(xhr.readyState === xhr.DONE){
                        
                        if(xhr.status != 200) {
                            alert('Error'+xhr.status+':'+xhr.statusText);
                        }else{
                            
                            // console.log(xhr.response);
                            var result=xhr.responseText;

                            if (result == "1") {
                    
                                $("#postSuccess").show();
                                $("#postFail").hide();

                                $("#postboxform")[0].reset();
                                
                            } else if (result != "") {
                                
                                $("#postFail").html(result).show();
                                $("#postSuccess").hide();    
                            }
                        }
                    }
                };

                xhr.send(formData);

                xhr.onerror = function() {
                    alert('request failed!');
                };

            
            });

        </script>   
    </body>
</html>