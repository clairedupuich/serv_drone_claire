<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("pdo.php");

    if(isset($_POST["submit"])) {
        if(isset($_POST["username"], $_POST["password"]) && !empty($_POST["username"])&& !empty($_POST["password"])) {
            //echo "bonjour".$_POST["username"];
            $firstname = $_POST["username"];
            $password = $_POST["password"];
            $pdo = MonPdo::utiliserPdo(); // tu te connectes à PDO
            $sql = "INSERT INTO `users` (`firstName`, `password`) VALUES ('".$firstname."', '".$password."')";
            $requete = $pdo->prepare($sql);
            $requete->execute();
            
       } else {
           echo "entrer un nom";
       }
    }

    // $_POST = [
    //     "username" => "claire"
    //     "password" => "123"
            //"submit" => "submit"


    // ]
    

    ?>
        <form action="#" method="POST">
            

                compt
                <label for="pseudo">Nom d'utilisateur</label>
                <input type="text" id ="pseudo" name="username">
            
                密码mot de pass
                <label for="pwd">Mot de passe</label>
                <input type="password" name="password" id="pwd">
               
                <button type="submit" name="submit" value="submit">Valider</button>
                
        </form>
    </body>
</html>