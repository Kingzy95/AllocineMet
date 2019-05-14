<?php
echo'<pre>';
    print_r($_POST['user_name']);
echo'<pre>';

//Reception des données après post
$userName = $_POST['user_name'];
$passWord = $_POST['psw'];

//Connexion PDO
try {
    $connexion = new PDO('mysql:host=localhost;dbname=allocinemet_bdd', 'root', '');
    //Preparation de la requet SQL
    $sql = "SELECT * from users where id=1";

    $result = $connexion->query($sql);
    $user = $result->fetch();

    foreach($user as $row) {
        print_r($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>

