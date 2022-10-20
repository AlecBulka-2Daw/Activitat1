<?php

function connectMysql(string $dsn,string $dbuser,string $dbpass):PDO{
    try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    }catch(PDOException $e){
        die( $e->getMessage());
        
    }
    return $db;
}

/**
 * authentication function
 *
 * @param string $db
 * @param string $email
 * @param string $password
 * @return boolean
 */
function auth(PDO $db, string $email, string $password):bool{

    $stmt=$db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
    $stmt->execute([":email"=>$email]);

    if ($stmt->rowCount()==1){
        $user = $stmt->fetchAll()[0];
        if (password_verify($password, $user->password)){
            $_SESSION['user'] = $user;
            return true;
        }
    }
    return false;
}

function register(PDO $db, string $email, string $password, string $username):bool{

    $stmt=$db->prepare("SELECT * FROM users WHERE email=:email OR username=:username");
    $stmt->execute([":email"=>$email, ":username"=>$username]);

    if ($stmt->rowCount()!=0){
        return false;
    }

    $stmt=$db->prepare("INSERT INTO users (email, password, username) VALUES (:email, :password, :username)");
    $options = [
        'cost' => 4
    ];
    $stmt->execute([":email"=>$email,":password"=>password_hash($password, PASSWORD_BCRYPT, $options),":username"=>$username]);

    $stmt=$db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
    $stmt->execute([":email"=>$email]);
    $user = $stmt->fetchAll()[0];
    $_SESSION['user'] = $user;


    return true;
}