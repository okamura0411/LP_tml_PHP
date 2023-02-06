<?php
  ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
  error_reporting(E_ALL); // 全てのレベルのエラーを表示してください

  include('funcs.php');
  $pdo  = db_connect();
  // アップロードされたファイルを取得
  $fname = $_FILES["file"]["name"];
  $fnum  = $_POST['fnum'];

  $stmt = $pdo->prepare("INSERT INTO tmp_file(fname,date,fnum)VALUES(:fname,sysdate(),:fnum)");
  $stmt->bindValue(':fname',$fname,PDO::PARAM_STR);
  $stmt->bindValue(':fnum',$fnum,PDO::PARAM_INT);
  $status = $stmt->execute(); //実行

  // ファイルを受け取る→vscode内のフォルダに保存する処理
  $file = $_FILES["file"];
  // ファイルの種類を取得する
  $type = $file["type"];
  $upload_img = "./images/";
  $upload_video = "./videos/";
  // 画像か動画かを判別する
  if (preg_match("/^image\//", $type)) {
    // 画像の場合
    move_uploaded_file($file["tmp_name"], $upload_img.$file["name"]);
  } elseif (preg_match("/^video\//", $type)) {
    // 動画の場合
    move_uploaded_file($file["tmp_name"], $upload_video.$file["name"]);
  }

  if($status==false){
      sql_error($stmt);
    }else{
      redirect("index.php");
    }
?>