
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>
    <body>
    
        <?php
    if (!isset($_POST['motdepasse']))
    {
 
    ?>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la CIA :</p>
        <form action="formulaire.php" method="post">
            <p>
            <input type="password" name="motdepasse" />
            <input type="submit" value="Valider" />
            </p>
        </form>

        <?php
    }
    elseif (isset($_POST['motdepasse']) AND $_POST['motdepasse'] != "kangourou")
    {
        echo '<p>Ce mot de passe n\'est pas le bon</p>';
    }
    else 
    {
        echo '<p>Voici les codes d\'accès du serveur central de la CIA : 123456789</p>';
    }
    ?>
    
        
    </body>
</html>