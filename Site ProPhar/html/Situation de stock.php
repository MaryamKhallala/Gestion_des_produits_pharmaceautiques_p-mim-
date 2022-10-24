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
    <title>Situation de stock</title>
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
                    <!-- ============================================================== -->
                  <!--  <ul class="navbar-nav mr-auto mt-md-0">
                         This is  
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                       
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>-->
                     <ul class="navbar-nav mr-auto mt-md-0">
                          
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" method="POST" action="">
                                <input type="text" name="ch" class="form-control"  placeholder="Recherche code_lot"> 
                                 </form>
                        </li>
                    </ul>
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
                            <li class="breadcrumb-item active">Situation de stock</li>
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

if (! empty ($_POST['ch'])) {
  $con=mysqli_connect("localhost",'root','','gestion_prophar');



$sql="select  medicament.code_lot,id_medicament,num_pharm,DCI,nom_C,dosage,nom_form,nom_famille,Date_Fab,Date_Pre,Unite_de_Mesure,Qte_de_produit from medicament  join lot where medicament.code_lot=lot.code_lot and num_pharm ='".$_SESSION['num_pharm']."'  and   medicament.code_lot='".$_POST['ch']."' ";

  ;
$req=mysqli_query($con,$sql);
      echo "<div class='row'>
                    <!-- column -->
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-block'>
                                <h1 style=' text-decoration:underline;color=#73A5F1;'>Resultat de rechrche</h1>
                               
                                <div class='table-responsive'>
                                    <table class='table'>
                                        <thead>
                                            <tr style='background-color=#BED6FA ;color:black;'>
                                                <th><strong>Code_Lot</strong></th>
                                                <th><strong>id_medicament</strong></th>
                                                <th><strong>num_pharm</strong></th>
                                                <th><strong>DCI</strong></th>
                                                <th><strong>nom_C</strong></th>
                                                <th><strong>dosage</strong></th>
                                                <th><strong>nom_form</strong></th>
                                                <th><strong>nom_famille</strong></th>
                                                <th><strong>Date_Fab</strong></th>
                                                <th><strong>Date_Pre</strong></th>
                                                <th><strong>Unite_de_Mesure</strong></th>
                                                <th><strong>Qte_de_produit</strong></th>
                                            </tr>
                                        </thead>";
                                       

                                        while($val2 = mysqli_fetch_row($req)){

                                           echo"<tbody>
                                               <tr class='var'><td>".$val2['0']."</td><td>".$val2['1']."</td><td>".$val2['2']."</td><td>".$val2['3']."</td><td>".$val2['4']."</td><td>".$val2['5']."</td><td>".$val2['6']."</td><td>".$val2['7']."</td><td>".$val2['8']."</td><td>".$val2['9']."</td><td>".$val2['10']."</td><td>".$val2['11']." </td>
    
                                            </tr>";   }
                                        echo "</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
}
  ?>
                
                    <?php
                $con=mysqli_connect("localhost",'root','','gestion_prophar');
 $r2="select  medicament.code_lot,id_medicament,num_pharm,DCI,nom_C,dosage,nom_form,nom_famille,Date_Fab,Date_Pre,Unite_de_Mesure,Qte_de_produit from medicament  join lot where medicament.code_lot=lot.code_lot and CURDATE()<Date_Pre and num_pharm='".$_SESSION['num_pharm']."'";
  $req2=mysqli_query($con,$r2);
      echo "<div class='row'>
                    <!-- column -->
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-block'>
                                <h1 style=' text-decoration:underline;color=#73A5F1;'>Liste des Médicaments Disponible</h1>
                               
                                <div class='table-responsive'>
                                    <table class='table' style='width:2000px'>
                                        <thead>
                                            <tr style='background-color=#BED6FA ;color:black;'>
                                                <th><strong>Code_Lot</strong></th>
                                                <th><strong>id_medicament</strong></th>
                                                <th><strong>num_pharm</strong></th>
                                                <th><strong>DCI</strong></th>
                                                <th><strong>nom_C</strong></th>
                                                <th><strong>dosage</strong></th>
                                                <th><strong>nom_form</strong></th>
                                                <th><strong>nom_famille</strong></th>
                                                <th><strong>Date_Fab</strong></th>
                                                <th><strong>Date_Pre</strong></th>
                                                <th><strong>Unite_de_Mesure</strong></th>
                                                <th><strong>Qte_de_produit</strong></th>
                                                 <th><strong>Editer</strong></th>
                                            </tr>
                                        </thead>";
                                       

                                        while($val2 = mysqli_fetch_row($req2)){

                                           echo"<tbody>
                                               <tr class='var'><td>".$val2['0']."</td><td>".$val2['1']."</td><td>".$val2['2']."</td><td>".$val2['3']."</td><td>".$val2['4']."</td><td>".$val2['5']."</td><td>".$val2['6']."</td><td>".$val2['7']."</td><td>".$val2['8']."</td><td>".$val2['9']."</td><td>".$val2['10']."</td><td>".$val2['11']." </td>
    
                                            
                                             <td>
                    
                       <a href='supprimer.php'><svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px
width='30' height='30'
viewBox='0 0 192 192'
style='' fill:#000000;'><g fill='none' fill-rule='nonzero' stroke='none' stroke-width='1' stroke-linecap='butt' stroke-linejoin='miter' stroke-miterlimit='10' stroke-dasharray='' stroke-dashoffset='0' font-family='none' font-weight='none' font-size='none' text-anchor='none' style='mix-blend-mode: normal'><path d='M0,192v-192h192v192z' fill='none'></path><g fill='#f5100d'><path d='M80.8125,12c-2.682,0 -5.20106,1.18223 -6.91406,3.24023c-0.174,0.207 -0.31673,0.43669 -0.42773,0.67969l-6.39844,14.08008h-34.07227c-4.962,0 -9,4.038 -9,9v18c0,4.962 4.038,9 9,9h6v105c0,4.962 4.038,9 9,9h96c4.962,0 9,-4.038 9,-9v-105h6c4.962,0 9,-4.038 9,-9v-18c0,-4.962 -4.038,-9 -9,-9h-34.06641l-6.39844,-14.08008c-0.111,-0.243 -0.25673,-0.47569 -0.42773,-0.67969c-1.716,-2.058 -4.23506,-3.24023 -6.91406,-3.24023zM80.8125,18h30.375c0.78,0 1.52222,0.30103 2.07422,0.83203l5.08008,11.16797h-44.6836l5.08008,-11.16797c0.555,-0.531 1.29422,-0.83203 2.07422,-0.83203zM33,36h126c1.653,0 3,1.344 3,3v18c0,1.656 -1.347,3 -3,3h-126c-1.653,0 -3,-1.344 -3,-3v-18c0,-1.656 1.347,-3 3,-3zM42,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM57,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM72,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM87,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM105,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM120,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM135,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM150,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM45,66h102v105c0,1.656 -1.347,3 -3,3h-96c-1.653,0 -3,-1.344 -3,-3v-3h69c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3h-69zM60,84c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM84,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM108,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM132,84c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM132,108c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM60,132c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM126,162c-1.656,0 -3,1.341 -3,3c0,1.659 1.344,3 3,3h12c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3z'></path></g></g></svg>
                       
                            
                         </a>
                          <a href='modifier.php'> <svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px'
width='30' height='30'
viewBox='0 0 192 192'
style='' fill:#000000;'><g fill='none' fill-rule='nonzero' stroke='none' stroke-width='1' stroke-linecap='butt' stroke-linejoin='miter' stroke-miterlimit='10' stroke-dasharray='' stroke-dashoffset='0' font-family='none' font-weight='none' font-size='none' text-anchor='none' style='mix-blend-mode: normal'><path d='M0,192v-192h192v192z' fill='none'></path><g fill='#208C05 '><path d='M119.00391,23.50195c-1.90723,-0.06855 -3.84141,0.14121 -5.75391,0.64746c-5.1,1.35 -9.30059,4.64941 -11.85059,9.14941l-5.39941,9.75c-1.2,2.1 -0.45059,4.95234 1.64941,6.15234l25.95117,15c0.75,0.45 1.5,0.59766 2.25,0.59766c0.45,0 0.74824,0.00059 1.19824,-0.14941c1.2,-0.3 2.10117,-1.05059 2.70117,-2.10059l5.54883,-9.75c2.55,-4.5 3.30117,-9.74766 1.95117,-14.84766c-1.35,-5.1 -4.64941,-9.30059 -9.14941,-11.85059c-2.8125,-1.59375 -5.91797,-2.48437 -9.09668,-2.59863zM90.14648,57.19043c-1.45312,0.11133 -2.84766,0.89648 -3.59766,2.20898l-45.29883,78.60059c-5.1,8.7 -7.94883,18.45058 -8.54883,28.35058l-1.20117,19.35058c-0.15,1.65 0.75,3.29825 2.25,4.19825c0.75,0.45 1.5,0.60058 2.25,0.60058c0.9,0 1.79883,-0.3 2.54883,-0.75l16.20117,-10.64942c8.25,-5.55 15.3,-12.90059 20.25,-21.60058l45.45117,-78.60059c1.2,-2.1 0.44766,-4.94941 -1.65234,-6.14941c-2.1,-1.2 -4.94942,-0.45059 -6.14941,1.64941l-45.44824,78.60059c-4.35,7.35 -10.35176,13.80059 -17.55176,18.60058l-8.69824,5.69825l0.59766,-10.34766c0.45,-8.55 3.00059,-16.95117 7.35059,-24.45117l45.45117,-78.60059c1.2,-2.1 0.45059,-4.94941 -1.64941,-6.14941c-0.7875,-0.45 -1.68281,-0.62637 -2.55469,-0.55957zM73.5,181.5c-2.55,0 -4.5,1.95 -4.5,4.5c0,2.55 1.95,4.5 4.5,4.5h60c2.55,0 4.5,-1.95 4.5,-4.5c0,-2.55 -1.95,-4.5 -4.5,-4.5zM156,181.5c-2.48528,0 -4.5,2.01472 -4.5,4.5c0,2.48528 2.01472,4.5 4.5,4.5c2.48528,0 4.5,-2.01472 4.5,-4.5c0,-2.48528 -2.01472,-4.5 -4.5,-4.5z'></path></g></g></svg>
                   
                </td></td></tr>";   }

               
                                        echo "</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
             


?>
<style type="text/css">
    th{
        background-color: #73A5F1  ;
        text-decoration-color: black;
    }
</style>
<div class="btn btn-success">
                    
                <a class="nav-link" href="listeaccepter.php"><i class="mdi mdi-printer" style="color: white;"></i><strong style="color: white;"> Imprimer</strong> </a>
             
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
