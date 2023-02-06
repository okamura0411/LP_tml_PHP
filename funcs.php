<?php
    function db_connect(){
      try {
        $db_name = "tmp_db";    //データベース名
        $db_host = "localhost"; //DBホスト
        $db_id   = "root";      //アカウント名
        $db_pw   = "";      
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
      } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
      }
    }

    function redirect($file_name){
      header("Location: ".$file_name);
      exit();
  }
  function sql_error($stmt){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}
?>