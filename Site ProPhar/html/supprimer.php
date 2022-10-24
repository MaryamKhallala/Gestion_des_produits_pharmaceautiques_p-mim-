 
<?php 
ob_start();
session_start();
?>
 <!DOCTYPE html>
 <html>
  <head> 
     
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
   <title>Supprimer Medicaments</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/LOGO-2018 noir.jpg" type="image/x-icon">

<!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">

  
   </head> 
 <body>
   <div class="box">
      
               
    <form method="POST" action="">
      <div class="form-group">
                       <div class="inputBox">
                      <input  name="Code_Lot" type="text" required="" ><label><strong> code_lot de Médicaments que vous voulez supprimer :</strong></label>
                    </div>
                      <center><input  name="sup" type="submit" value="supprimer" ></center>
                    </div>
</form>
</div>
        
<style type="text/css">
    body {

        margin: 50;
        padding: 50;
        font-family: sans-serif;
        /*background: url(assets/images/login1.jpg);
        background-size:cover; */
    }
    .box{
        border-radius: 50px;
        position: absolute;
        top: 55%;
        left:50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding: 30px;
        background:rgba(207, 227, 241 ,.6);
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
        font-size: 12px;
        color: black;
        pointer-events: none;
        transition: .5s
    }
    .box .inputBox input:valid ~ label,
    .box .inputBox input:focus ~ label {
        top: -18px;
        left: 0;
        color: #03a9f4;
        font-size: 12px;
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
        margin-left: 240px;
        
    }

</style>
   

    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

 </body>
 </html>




 

<?php

  if (isset($_POST['sup'])) {
    $con=mysqli_connect("localhost",'root','','gestion_prophar');
     if ($con) { 
     $sql = "DELETE FROM medicament WHERE Code_Lot ='".$_POST['Code_Lot']."' "; 
     $resultat = mysqli_query($con,$sql); 
     if ($resultat == FALSE) { 
      echo "Echec de l'exécution de la requête.<br />"; 
       } 
        else { 
      echo "<script>alert('Le médicament  a été supprimer avec succée!!')</script><br />"; 

   
     $req="insert into historique values ('medicament et lot',CURDATE(),''".$_SESSION['num_pharm']."'','suppression','".$_POST['Code_Lot']."','Null')";

         $sol= mysqli_query($con,$req);
  
   // Exécution de la requête 
   
   } 

  }
  }
    
?>