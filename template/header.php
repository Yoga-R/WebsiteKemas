<?php
session_start();
?>
<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><meta charset="utf-8">
    <title>SADAKA | Charity / Non-profit responsive Bootstrap HTML5 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Template main Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizr -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>


</head>
<body>
    <header class="main-header">
        
        
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                            <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                        </ul> <!-- /.header-contact  -->
                        
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                        </ul> <!-- /.header-social  -->
                        
                    </div>


                </div>
            </div>

        </div>

        <div class="navbar-main">
          
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            
            <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a>
            
        </div>

        <div id="navbar" class="navbar-collapse collapse pull-right">

          <ul class="nav navbar-nav">

            <li><a class="is-active" href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li class="has-child"><a href="#">CAUSES</a>


              <ul class="submenu">
               <li class="submenu-item"><a href="causes.html">Causes list </a></li>
               <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
               <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
               <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
           </ul>

       </li>

       <?php

       include "lib/koneksi.php";

       if(empty($_SESSION['email']) and empty($_SESSION['password'])) { ?>
        <li class="submenu-item">
            <a href="registerdonatur.php">
            Daftar
       </a>
       </li>


                            
       <li class="submenu-item">
                            <a href="logindonatur.php">
            Login
       </a>
                                
                                <div class="modal fade" id="modal" role="dialog" arialabelledby = "modalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-tittle">Login</h3>
                                                <button type="button" class="close" data-dismiss = "modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-sm-15">
                                                    
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <form action="aksi/aksi_login.php" method="post">
                                                                <div class="form-group">
                                                                    <label for="email">Username</label>
                                                                    <input type="text" id="email" name="username" class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="password" id="password" name="password" class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" id="remember" class="form-check-input">
                                                                        <label for="remember" class="form-check-label ml-2">Remember Me</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-outline-dark">Login</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </li>
                                    <?php
                                } else {
                                    $user = $_SESSION ['email'];
                                    $queryuser_session = mysqli_query ($koneksi, "select * from tbl_donatur WHERE email = '$user'");
                                    $hasilQuery_session = mysqli_fetch_array($queryuser_session);
                                    $id_user_session = $hasilQuery_session ['id_donatur'];
                                    
                                    // $foto_session = $hasilQuery_session [''];
                                    
                                    

                                    ?>
                                    <!-- <ul class="submenu-item">
                                    <a href=""><i class="fas fa-sign-in-alt mr-2"></i>Akun</a>
                                    </ul> -->
                                    <li class="has-child"><a href="#">Akun</a>


              <ul class="submenu">
               <li class="submenu-item"><a href="datadiridonatur.php">Profil</a></li>
               <li class="submenu-item"><a href="aksi/aksi_logout.php">Logout</a></li>
           </ul>
        <!-- <li class="nav-item dropdown ">     
            

        <img class="rounded-circle py-1 my-1 "  style="max-width:5%;"  src="images/foto_profile/
        data-holder-rendered="true" ><img src="https://img.icons8.com/metro/26/000000/expand-arrow.png"/>
          
                 <div class="dropdown-menu" aria-labelledby="electronics">
                 <a class="dropdown-item" href="category.html"><p class="text-dark">Profile</p></a>
   
                 <a class="dropdown-item" href="aksi/aksi_logout.php"><p class="text-dark">Log Out</p></a>
            
        </div>
    </li> -->
    
<?php } ?>
</li>

</ul>
<div class="col-lg-1">
                        <div class="nav-item dropdown ">     
                            <?php

                            include "lib/koneksi.php";

                            if(empty($_SESSION['username']) and empty($_SESSION['password'])) { ?>        
                                <?php
                            } else {
                              
                                

                                ?>
                                <!-- <img class="rounded-circle py-1 my-1  "  style="max-width:60%;"  src="images/foto_profile/<?= $foto_session; ?>"
                                data-holder-rendered="true" >  <img src="https://img.icons8.com/metro/10/000000/expand-arrow.png"/>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="profile.php?id_user=<?=  $id_user_session; ?>" class="dropdown-item">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="aksi/aksi_logout.php" class="dropdown-item dropdown-item--hover-red">Logout5 <span class="fa fa-sign-out"></span></a>
                                </div> -->

<!--                                                 
                                                         <div class="dropdown-menu" aria-labelledby="electronics">
                                                         <a class="dropdown-item" href="profile.php?id_user=<?=  $id_user_session; ?>"><p class="text-dark">Profile</p></a>
                                           
                                                         <a class="dropdown-item" href="aksi/aksi_logout.php"><p class="text-dark">Log Out</p></a>
                                                   
                                                     </div> -->
                                                 <?php } ?>
                                             </div>
                                             
                                             
                                             
                                         </div>
</div> <!-- /#navbar -->

</div> <!-- /.container -->

</div> <!-- /.navbar-main -->


</nav> 

</header> <!-- /. main-header -->

                         