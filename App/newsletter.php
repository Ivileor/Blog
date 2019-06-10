<?php
if($_POST['email']){
    try{
    $pdo = new PDO('mysql:dbname=newsletter;host=localhost;port=3306;charset=utf8','root','root');

        $query = $pdo->prepare('INSERT INTO `user`(mail) VALUES(:email)');
        $query->bindParam(':email',$_POST['email']);
        $query->execute();

        foreach($pdo->query('SELECT * from `user`') as $row) {
            print_r($row);
            

        }

        $dbh = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
