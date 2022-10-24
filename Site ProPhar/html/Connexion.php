<!DOCTYPE html>
<?php 
ob_start();
?>
<html lang="en">
  <head>
    <title>ProPhar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css1/bootstrap.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css">
    <link rel="stylesheet" href="css1/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css1/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="shortcut icon" href="shutterstock_375132532.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css1/style.css">
  </head>
  <body>
    
   
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="Sans titre.png"  height="60" width="150"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

         <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="index.html"><i class="fa fa-home fa-fw" aria-hidden="true"></i><strong> Accueil </strong></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link"  href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i><strong> A Propos </strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Inscription.php"><i class="fa fa-user-plus" aria-hidden="true"></i><strong> Inscription</strong> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i><strong> Connexion</strong> </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style=" background-color:#90CFFB; ">
      <h4 class="modal-title" style="color: black; text-decoration: underline;  font-family: italic;"><strong>A Propos </strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" style=" background-color:#D1F4FB ; background-image:url('injection-plasturgie-medical-FPSA.jpg');background-repeat:no-repeat;background-position:center;background-size:cover;position:relative">
        <p style="color: black"><strong>ProPhar Est un site qui vous aide à contrôler la date d'expiration des médicaments ,et aussi à gérez les médicaments de votre pharmacie sans difficulté et en plus gagner le temps.</strong></p>
      </div>
      
    </div>

  </div>

</div>
   
 
<style type="text/css">
   
   .box{
       
        position: absolute;
       border-radius: 25px;
        left:50%;
        transform: translate(-50%,-200%);
        width: 400px;
        padding: 30px;
        background:rgba(255,255,255,.7);
         box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
    } 
    .box img {
        border-radius: 20px;
        width: 350px ;
        height: 100px ;
        margin-top: -10px ;
        margin-right: 10px ;
        text-align: left;
        
    }
    .box h2{
        margin: 0 0 30px;
        padding: 0;
        color: black;
        text-align: center;

    }
    .box .inputBox{
        position: relative;
    }
    .box .inputBox input {
         width: 100%;
          padding: 10px 0;
         font-size: 16px;
         color: black;
         margin-bottom: 30px;
         border: none;
         border-bottom: 1px solid black;
         outline: none;
         background:transparent;
        
    } 
    .box .inputBox label{
        position: absolute;
        top: 0;
        left:0;
        padding: 10px 0;
        font-size: 16px;
        color: black;
        pointer-events: none;
        transition: .5s
    }
    .box .inputBox input:valid ~ label,
    .box .inputBox input:focus ~ label {
        top: -18px;
        left: 0;
        color: #089FD7;
        font-size: 15px;
    }
    .box input[type="submit"]{
        color: #fff;
        border: none;
        outline: none;
        background:transparent;  
        background:  #03a9f4;
        cursor: pointer;
        border-radius: 5px;
        padding:10px 20px;
        margin-left: 220px;}
        
   .banner-area{padding:284px 0 144px ;background-color:#b0b0b0;background-image:url("c.jpg");background-repeat:no-repeat;background-position:center;background-size:cover;position:relative}


</style>

   

     
        
        <section class="banner-area">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1><strong>ProPhar</strong></h1>
              <p  style="color: black"><strong>Est un site qui vous aide à contrôler la date d'expiration des médicaments.</strong></p>
            </div>
          </div>
        </div>
                    <style type="text/css">
                        h1{
                            font-family: italic;
                            font-size: 125px;
                            margin-top: 190px;
                            margin-right: 0;
                            color:black ;
                        
}
                        p{
                            font-family: italic;
                            color:black ;
                            line-height: 1em;
                            font-size: 40px;
                            

}



                        
                    </style>
                </div>
            </div>
        </div>
    </section>

      
    <!-- END slider -->
    <div class="box">
        <img src="téléchargement_2.png">
                <h2><strong>Authentification</strong></h2>
               <form method="POST" action="">
                <div class="inputBox">
                <input  type="email" name="email" required=""> <label><i class="fa fa-envelope" aria-hidden="true"></i>   <strong> Email </strong></label></div>
               <div class="inputBox">
                <input  type="password" name="password" required=""><label><i class="fa fa-lock"></i><strong> Mot de passe</strong> </label></div>
               <input type="submit"  name="connexion" value="connexion" ></input>
         </form>       
        </div>
   
    <!-- END section -->

   
    <!-- END cta-link -->

    
    <!-- END footer -->


    <!-- Modal -->
   

    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/popper.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/bootstrap-datepicker.js"></script>
    <script src="js1/jquery.timepicker.min.js"></script>
    <script src="js1/jquery.waypoints.min.js"></script>
    <script src="js1/main.js"></script>
  </body>
</html>

 <?php
 session_start();

       if (isset($_POST['connexion'])){
          
        $db =mysqli_connect('localhost','root','','gestion_prophar');
        $query="SELECT email_pharm,passeword FROM pharmacien WHERE  email_pharm='".$_POST['email']."'and passeword='".$_POST['password']."'";
            $result=mysqli_query($db,$query);
            if(mysqli_fetch_assoc($result)){
           
              $_SESSION['email']=$_POST['email'];
              header("Location:Admin.html");
               ob_end_flush();
            

           

           }
            else{
                echo "<script>alert('Email et/ou mot de passe est incorrect')</script>";
            }
       }
       
       ?>

       <?php
       /*
 session_start();
 $db =mysqli_connect('localhost','root','','gestion_prophar');
 $req="select * from pharmacien where email_pharm='".$_POST['email']."'and passeword='".$_POST['passeword']."'";

          $res=mysqli_query($db,$req);
              $data=mysqli_fetch_array($result);
                 $_SESSION['num_pharm']=$data['num_pharm'];
                 $_SESSION['nom_pharm']=$data['nom_pharm'];
                 $_SESSION['prenom_pharm']=$data['prenom_pharm'];
                 $_SESSION['tel_pharm']=$data['tel_pharm'];
                 $_SESSION['adress_pharm']=$data['adress_pharm'];
                 $_SESSION['email_pharm']=$data['email_pharm'];
                 $_SESSION['passeword']=$data['passeword'];
                 $_SESSION['username']=$data['username'];
               
               echo $_SESSION['nom_pharm']; */
 ?>

     