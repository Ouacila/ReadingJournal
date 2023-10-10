<?php
session_start();
//ce fichier est l'égal du models  pour du mvc : chargé de récupérer des données et faire des requête, view 
//c'est ce qu'on voit sur le site et le controller va controller ttes les données.
// require ('PHPMailer/PHPMailerAutoload.php');
//require('PHPMailer/PHPMailerAutoload.php');
require('actions/database.php'); 
if(isset($_POST['validate'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $cle = rand(1000000, 10000000);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $check = $bdd->prepare('SELECT email from users WHERE email = ?');
        $check->execute(array($email));

        if($check->rowcount() == 0){
            $insertDB = $bdd->prepare('INSERT INTO users (nom, prenom, pseudo, email, cle, confirme, password) VALUES (?,?,?,?,?,?,?)');
            $insertDB->execute(array($nom ,$prenom, $pseudo, $email, $cle, 0, $password));

            $reqInfoUser = $bdd->prepare('SELECT * from users WHERE email = ?');
            $reqInfoUser->execute(array($email));
            if($reqInfoUser->rowcount() > 0){
                $userInfos =  $reqInfoUser->fetch();
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfos['id'];
                $_SESSION['nom'] = $userInfos['nom'];
                $_SESSION['prenom'] = $userInfos['prenom'];
                $_SESSION['pseudo'] = $userInfos['pseudo'];

                header('Location: connexion.php');

                
                //envoi du mail en php on va utiliser une biblio exterieure : phpmailer


        //     function smtpmailer($to, $from, $from_name, $subject, $body)
        //         {
        //         $mail = new PHPMailer();
        //         $mail->IsSMTP();
        //         $mail->SMTPAuth = true; 
        //         $mail->isSMTP();
        //         $mail->SMTPSecure = ''; 
        //         $mail->Host = 'smtp.gmail.com';
        //         $mail->Port = 587;  
        //         $mail->Username = 'waashyw@gmail.com';
        //         $mail->Password = 'waashywXQR';   
        
        // //   $path = 'reseller.pdf';
        // //   $mail->AddAttachment($path);
        
        //         $mail->IsHTML(true);
        //         $mail->From="waashyw@gmail.com";
        //         $mail->FromName=$from_name;
        //         $mail->Sender=$from;
        //         $mail->AddReplyTo($from, $from_name);
        //         $mail->Subject = $subject;
        //         $mail->Body = $body;
        //         $mail->AddAddress($to);
        //         if(!$mail->Send())
        //         {
        //             $error ="Please try Later, Error Occured while Processing...";
        //             return $error; 
        //         }
        //         else 
        //         {
        //             $error = "Thanks You !! Your email is sent.";  
        //             return $error;
        //         }
        //     }
            
        //     $to   = $email;
        //     $from = 'waashyw@gmail.com';
        //     $name = 'ReadingJournal';
        //     $subj = 'Confirmation pour inscription au reading journal en ligne';
        //     $msg = 'http://localhost:8888/ReadingJ/verifEmail.php?id='.$_SESSION['id'].'&cle='.$cle;
            
        //     $error=smtpmailer($to,$from, $name ,$subj, $msg);
            

        //     }

        }else{
            $errorMsg = "L'adresse email existe déjà, connectez vous si vous avez déjà un compte !";
        }



    }else{
        $errorMsg = "Veuillez compléter tous les champs !";
    }
}
}

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<img src="http://www.primfx.com/mailing/banniere.png"/>
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />
			<img src="http://www.primfx.com/mailing/separation.png"/>
		</div>
	</body>
</html>
';

mail("ouacila.bachir@gmail.com", "Salut tout le monde !", $message, $header);

?>