<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
session_start();

include('funcs.php');
$pdo  = db_connect();
$user_name = $_POST['user_name'];
$pw = $_POST['pw'];

$sql  = 'SELECT * FROM tmp_user WHERE user_name=:user_name';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_name',$user_name);
$res  = $stmt->execute();
//抽出データを取得
$val = $stmt->fetch();

$pw = password_verify($pw, $val["pw"]);
if($pw){
    $_SESSION['chk_ssid'] = session_id();
    header('Location: index.php');
}else{
    header('Location: login.php');
}
exit();
?>