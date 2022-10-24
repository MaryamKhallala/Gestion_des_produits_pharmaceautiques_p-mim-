<?php
     // Lecture de fichier de confuguration

     
     //connexion
    $link = mysqli_connect('localhost','root','','base_prophar');



    //verification de connexion
    if (mysqli_connect_errno()) {
    	printf("Echec de la connexion : %s\n", mysqli_connect_error());
    	unset ($_SESSION["fichierconfiguration"]);
    	exit();

    }

    // changer de la base de donner
    /*if (!mysqli_select_db($link ,$base)){
    	echo "DataBase $base non trouvée ! -> ".myssql_error($link);
    	unset ($_SESSION["fichierconfiguration"]);
    	exit();
    }*/

    ?>