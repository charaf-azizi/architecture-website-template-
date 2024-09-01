 < <meta charset="UTF-8">
<?php

	if 	(!empty($_POST['email'] ) and !empty($_POST['nom']) and !empty($_POST['message']) and !empty($_POST['tel'])) {
                $nom=@$_POST['nom'];
                $message=@$_POST['message'];
                $tel=@$_POST['tel'];
                $email=@$_POST['email'];
                $con=mysqli_connect('localhost','root','','bdteste');
                    $req="insert into teste(nom,message,email,tel) values('$nom','$message', '$email','$tel')";
                    $runreq= mysqli_query($con,$req);
               
                if($runreq)
                {  echo '<script>alert("Ajout se fait avec succés:")</script>';
                    echo '<script>window.document.location.replace("Contact.html")</script>';
                  
                    
                }			
                else
                {     echo '<script>alert("Echéc Ajout:")</script>';
                    echo '<script>window.document.location.replace("Contact.html")</script>';
               
                }
            } 
    else {
        echo '<script>alert("saisir toutes les données")</script>';
        echo '<script>window.document.location.replace("Contact.html")</script>';
            
        }
    
     ?>

	
