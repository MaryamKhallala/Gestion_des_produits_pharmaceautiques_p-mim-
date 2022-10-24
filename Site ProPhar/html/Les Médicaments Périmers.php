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
    <title>Les Médicaments Périmers</title>
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
                            <li class="breadcrumb-item active">Les Médicaments Périmers</li>
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
 $r2="select  medicament.code_lot,id_medicament,num_pharm,DCI,nom_C,dosage,nom_form,nom_famille,Date_Fab,Date_Pre,Unite_de_Mesure,Qte_de_produit from medicament  join lot where medicament.code_lot=lot.code_lot and CURDATE()>Date_Pre  and num_pharm='".$_SESSION['num_pharm']."'";
  $req2=mysqli_query($con,$r2);
      echo "<div class='row'>
                    <!-- column -->
                    <div class='col-lg-12'>
                        <div class='card'>
                            <div class='card-block'>
                                <h1 style=' text-decoration:underline;color=#73A5F1;'>Liste des Médicaments Périmers</h1>
                               
                                <div class='table-responsive'>
                                    <table class='table'>
                                        <thead>
                                            <tr style='background-color=#BED6FA ;color:black;'>
                                                <th><strong>Code_Lot</strong></th>
                                                <th><strong>id_medicament</strong></th>
                                                <th><strong>num_pharm</strong></th>
                                                <th><strong>DCI</strong></th>
                                                <th><strong>nom_Commercial</strong></th>
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
                    
                       <a href='supprimer.php?'><svg xmlns='http://www.w3.org/2000/svg' x='0px' y='0px
width='30' height='30'
viewBox='0 0 192 192'
style='' fill:#000000;'><g fill='none' fill-rule='nonzero' stroke='none' stroke-width='1' stroke-linecap='butt' stroke-linejoin='miter' stroke-miterlimit='10' stroke-dasharray='' stroke-dashoffset='0' font-family='none' font-weight='none' font-size='none' text-anchor='none' style='mix-blend-mode: normal'><path d='M0,192v-192h192v192z' fill='none'></path><g fill='#f5100d'><path d='M80.8125,12c-2.682,0 -5.20106,1.18223 -6.91406,3.24023c-0.174,0.207 -0.31673,0.43669 -0.42773,0.67969l-6.39844,14.08008h-34.07227c-4.962,0 -9,4.038 -9,9v18c0,4.962 4.038,9 9,9h6v105c0,4.962 4.038,9 9,9h96c4.962,0 9,-4.038 9,-9v-105h6c4.962,0 9,-4.038 9,-9v-18c0,-4.962 -4.038,-9 -9,-9h-34.06641l-6.39844,-14.08008c-0.111,-0.243 -0.25673,-0.47569 -0.42773,-0.67969c-1.716,-2.058 -4.23506,-3.24023 -6.91406,-3.24023zM80.8125,18h30.375c0.78,0 1.52222,0.30103 2.07422,0.83203l5.08008,11.16797h-44.6836l5.08008,-11.16797c0.555,-0.531 1.29422,-0.83203 2.07422,-0.83203zM33,36h126c1.653,0 3,1.344 3,3v18c0,1.656 -1.347,3 -3,3h-126c-1.653,0 -3,-1.344 -3,-3v-18c0,-1.656 1.347,-3 3,-3zM42,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM57,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM72,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM87,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM105,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM120,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM135,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM150,42c-1.656,0 -3,1.341 -3,3v6c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-6c0,-1.659 -1.344,-3 -3,-3zM45,66h102v105c0,1.656 -1.347,3 -3,3h-96c-1.653,0 -3,-1.344 -3,-3v-3h69c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3h-69zM60,84c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM84,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM108,84c-1.656,0 -3,1.341 -3,3v60c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-60c0,-1.659 -1.344,-3 -3,-3zM132,84c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM132,108c-1.656,0 -3,1.341 -3,3v36c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-36c0,-1.659 -1.344,-3 -3,-3zM60,132c-1.656,0 -3,1.341 -3,3v12c0,1.659 1.344,3 3,3c1.656,0 3,-1.341 3,-3v-12c0,-1.659 -1.344,-3 -3,-3zM126,162c-1.656,0 -3,1.341 -3,3c0,1.659 1.344,3 3,3h12c1.656,0 3,-1.341 3,-3c0,-1.659 -1.344,-3 -3,-3z'></path></g></g></svg>
                       
                            
                         </a>
                         
                   
                </td></td></tr> </tr>";   }
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
