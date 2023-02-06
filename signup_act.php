<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
session_start();

include('funcs.php');
$pdo  = db_connect();

//POSTされたデータを各変数に入れる
$user_name = $_POST['user_name'];
$pw = $_POST['pw'];
//セッションに登録
$_SESSION['user_name'] = $user_name;
$_SESSION['pw'] = $pw;
$pw_hash =  password_hash($_SESSION['pw'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO tmp_user(user_name,pw)VALUES(:user_name,:pw)");
$stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pw',        $pw_hash,   PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

if($status==false){
    sql_error($stmt);
  }else{
    redirect("login.php");
  }
?>