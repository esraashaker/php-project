<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Login CSS-->
    <link rel="stylesheet" href="template/login.css" />
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
<?php 
if(empty($_SESSION['username'])){?>
    <!doctype html>

                <div class="card login-content shadow-lg border-0">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="logo" src="https://cdn3.iconfinder.com/data/icons/galaxy-open-line-gradient-i/200/account-256.png">
                        </div>
                        <h2 class="text-logo">Market System</h2>
                        <h6 class="text-logo">Sign In</h6>
                        <br>
                        <form class="text-center" action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <input class="form-control border-0" type="text" name="username" placeholder="Type Your Username">
                            <br>
                            <input class="form-control border-0" type="password" name="password" placeholder="Type Your Password">
                            <br>
                            <button class="btn btn-primary btn-sm border-0" type="submit" name="submit">Sign In</button>
                            <p class="forgot"><a href="">Forgot Password?</a></p>
                        </form>
                        <?php
                          if($_SERVER['REQUEST_METHOD']=='POST'){
                              if(!empty($_POST['username'])&&!empty($_POST['password'])){
                                  $username=$_POST['username'];
                                  $password=$_POST['password'];
                                  if($username= ('admin' && $password == '123456')){
                                      $_SESSION['username']=$username;
                                      header('Location: index.php');
                                  }else{
                                      echo "<center><span style='color: darkred;font-size: 18px;'>Wrong Username Or Password</span></center>";
                                  }
                              }else{
                                  echo"Please Log in First";
                              }
                          }
                        
                        ?>
                    </div>
                    <div class="nomember">
                        <p class="text-center">Not a member? <a href="">Create an Account</a></p>
                    </div>
                </div>
            
<?php require_once "template/footer.php"?>
<?php }
else{
    echo "<h3>Your are Already Logged In ! if you want to go to <a href='index.php'>Dashboard</a></h3>";
}
?>
            </div>
        </div>
    </div>
</div>

