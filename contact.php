<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>GSOSTUDIOS</title>
        <link rel="icon" type="image/png" href="">
		<link rel="stylesheet" type="text/css" href="contact.css">
    
	</head>
	<body>
        <div class="header">
            <div class="logo">
                <a class="TextLogo" href="./index.html">Anthony GASCON / <br>GSOSTUDIOS </a>
            </div>
           
            <div class="nav-container">
                <div class="burger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-list">
                    <li class="nav"><a href="./index.html">Accueil</a></li>
                    <!--<a href="https://www.flaticon.com/fr/icones-gratuites/fleche-vers-le-bas" title="flèche vers le bas icônes">Flèche vers le bas icônes créées par Md. Mukhlesur Rahaman - Flaticon</a>-->
                    <li class="nav photos-menu">
                        <a href="#" class="photos-link">Photos <span class="arrow">&#9660;</span></a>
                        <ul class="sub-nav">
                            <li class="navPhoto"><a href="event-sportif.html">Events Sportifs</a></li>
                            <li class="navPhoto"><a href="portrait.html">Portrait</a></li>
                            <li class="navPhoto"><a href="nature.html">Nature</a></li>
                            <li class="navPhoto"><a href="corporate.html">Corporate</a></li>
                            <li class="navPhoto"><a href="mariage.html">Mariage</a></li>
                        </ul>
                    <li class="nav"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="titre">
            <h1> Contact</h1>
        </div>


        <div class="formulaire">
            <div class="contact">
                <form method="post">
                    <label>Nom *</lable>
                    <input type="text" name="nom" placeholder="Votre nom" required>
                    <label>Email *</lable>
                    <input type="email" name="email" placeholder="Votre email" required>
                    <label>Sujet *</lable>
                    <input type="text" name="sujet" placeholder="Sujet du mail" required>
                    <label>Message *</lable>
                    <textarea name="message" placeholder="Votre message" required></textarea>
                    <input type="submit" value="Envoyer">
                </form>
                <?php
                if (isset($_POST["message"])){
                    $message = "Ce message vous a été envoyé via la page contact du site GSOSTUDIOS
                    Nom : " . $_POST["nom"] . "
                    Email : " . $_POST["email"] . "
                    Message : " . $_POST["message"];
                    
                    /*modifier mail en dessous*/
                    $retour = mail("ambremdal@gmail.com", $_POST["sujet"], 
                    $message, "From:contact@gsostudios" . "\r\n" . "Reply-to" . $_POST["email"]);
                    if ($retour) {
                        echo "<p>L'email a bien été envoyé.</p>";
                    } else {
                        echo "<p>Une erreur s'est produite lors de l'envoi de l'email.</p>";
                    }
                }
                ?>
            </div>
        </div>


        <footer>
            <div class="footer">
                <div class="general">
                    <ul>
                        <li class="foot"><a href="./index.html">Accueil</a></li>
                        <li class="foot"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="ListePhoto">
                    <ul>
                        <li class="foot"><a href="event-sportif.html">Events Sportif</a></li>
                        <li class="foot"><a href="portrait.html">Portrait</a></li>
                        <li class="foot"><a href="nature.html">Nature</a></li>
                        <li class="foot"><a href="corporate.html">Corporate</a></li>
                        <li class="foot"><a href="mariage.html">Mariage</a></li>
                    </ul>
                </div>
            </div>    
            <div class="Copyright">
                <small class="small">Copyright © 2024 Anthony GASCON / GSOSTUDIOS - MERCIER--DALMASSO Ambre - Tous droits réservés.</small>
            </div>
            
        </footer>

        <script defer src="script.js"></script>
    </body>
</html>