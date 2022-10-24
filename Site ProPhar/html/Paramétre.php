
<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/shutterstock_375132532.jpg">
    <title>Paramétre</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="Admin.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                          <img src="https://img.icons8.com/metro/40/000000/hospital.png">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                        
                         <!-- Light Logo text -->    
                         <img src="../assets/images/Sans titre.png" class="light-logo" alt="homepage" height="60" width="150"/></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== 
                    <ul class="navbar-nav mr-auto mt-md-0">
                         This is  
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                       
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>-->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
                        </li>-->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       
                        <li> <a class="waves-effect waves-dark" href="Profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Ajouter Médicament.php" aria-expanded="false"><i class="mdi mdi-border-color"></i><span class="hide-menu">Ajouter Médicament</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Liste Médicaments.php" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Liste Médicaments </span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Les Médicaments Périmers.php" aria-expanded="false"><i class="mdi mdi-minus-circle-outline"></i><span class="hide-menu">Les Médicaments Périmers</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="Situation de stock.php" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Situation de stock</span></a>
                        </li>
                       
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="Paramétre.php" class="link" data-toggle="tooltip" title="Paramétre"><i class="ti-settings"></i></a>
                <!-- item--><a href="Historique de Modification.php" class="link" data-toggle="tooltip" title="Historique de Modification"><i class="mdi mdi-history"></i></a>
                <!-- item--><a href="index.html" class="link" data-toggle="tooltip" title="Déconnexion"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Bienvenue</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                            <li class="breadcrumb-item active">Paramétre</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <?php
     

 $db =mysqli_connect('localhost','root','','gestion_prophar');
 $req="select * from parametrage where num_pharm='".$_SESSION['num_pharm']."' ";

          $res=mysqli_query($db,$req);
              $data=mysqli_fetch_array($res);
                 $_SESSION['num_pharm']=$data['num_pharm'];
                 $_SESSION['code_lieu']=$data['code_lieu'];
                 $_SESSION['nom_lieu']=$data['nom_lieu'];
                 $_SESSION['adresse']=$data['adresse'];
                 $_SESSION['telephone']=$data['telephone'];
                 $_SESSION['email']=$data['email'];
                 $_SESSION['siteweb']=$data['siteweb'];
                 $_SESSION['description']=$data['description'];
                 $_SESSION['logo']=$data['logo'];
               
 ?>
                <!-- ============================================================== -->
                <!-- Row -->
               
                 <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" method="POST" action="">
                                    <div class="form-group">
                                        <label class="col-md-12">code_lieu</label>
                                        <div class="col-md-12">
                                            <input type="text"  name="code_lieu" value="<?php  echo $_SESSION['code_lieu']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12"> nom_lieu</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nom_lieu"  value="<?php  echo $_SESSION['nom_lieu']; ?> " class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">adresse</label>
                                        <div class="col-md-12">
                                            <input type="text" name="adresse"  value="<?php  echo $_SESSION['adresse']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">telephone</label>
                                        <div class="col-md-12">
                                            <input type="text" name="telephone" value="<?php  echo $_SESSION['telephone']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email"  value="<?php  echo $_SESSION['email']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">siteweb</label>
                                        <div class="col-md-12">
                                            <input type="url" name="siteweb" value="<?php  echo $_SESSION['siteweb']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">description</label>
                                        <div class="col-md-12">
                                            <input type="text" name="description" value="<?php  echo $_SESSION['description']; ?> " class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"> ancien logo</label>
                                        <div class="col-md-12">
                                            <img src="<?php  echo $_SESSION['logo']; ?>"type="text"  class="form-control form-control-line">
                                            
                                        </div>
                                         <div class="form-group">
                                        <label class="col-md-12"> nouveau logo</label>
                                        <div class="col-md-12">
                                          <input type="file" name="logo" alt="Submit"  accept="image/png,image/png, image/jpeg" value="C:\Users\HP\Desktop\asmaa\français\images.jpg" >

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button  class="btn btn-success"name="update" style="margin-left: 500px">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== 
            <footer class="footer"> Bienvenue à ProPhar ! </footer>-->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>


 <?php
 if (isset($_POST['update'])){
      
        $db =mysqli_connect('localhost','root','','gestion_prophar');
       
        $query="UPDATE parametrage SET  code_lieu ='".$_POST['code_lieu']."',nom_lieu='".$_POST['nom_lieu']."',adresse='".$_POST['adresse']."',telephone='".$_POST['telephone']."',email='".$_POST['email']."',siteweb='".$_POST['siteweb']."', description='".$_POST['description']."', logo='".$_POST['logo']."' where num_pharm='".$_SESSION['num_pharm']."' ";
            $result=mysqli_query($db,$query);
             
          
           if ($result==true) {
        
        echo "<script>alert('La modification  à été effectuer avec succée!!')</script>";
 
        $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['code_lieu']."','".$_POST['code_lieu']."')";

         $sol= mysqli_query($db,$req);

         $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['nom_lieu']."','".$_POST['nom_lieu']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['adresse']."','".$_POST['adresse']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['telephone']."','".$_POST['telephone']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['email']."','".$_POST['email']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['siteweb']."','".$_POST['siteweb']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['description']."','".$_POST['description']."')";

         $sol= mysqli_query($db,$req);
          $req="insert into historique values('parametrage',CURDATE(),'".$_SESSION['num_pharm']."','Modification','".$_SESSION['logo']."','".$_POST['logo']."')";

         $sol= mysqli_query($db,$req);
        
        }
        else{
          echo "<script>alert('erreur!!')</script>";
}
}
?>