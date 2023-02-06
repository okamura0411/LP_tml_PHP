<?php
  // ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
  // error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
  session_start();

  include('funcs.php');
  $pdo  = db_connect();
  $values = "";

    for ($i = 1; $i < 17; $i++) {
      $sql = "SELECT fname FROM tmp_file WHERE fnum = $i AND id = (SELECT MAX(id) FROM tmp_file WHERE fnum = $i)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      ${'fname' . $i} = $row['fname'];
  }
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LPテンプレート</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" media="all" href="css/ress.min.css" />
<link rel="stylesheet" media="all" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="js/style.js"></script>
<link rel="shortcut icon" href="path/to/favicon.ico" type="image/x-icon">
<link rel="icon" href="./img/OmOLi.png" type="image/png">
</head>
<body>
<header>    
<div class="container">
  <div class="row">
      <div class="header">
          <h1><a href="./index.php"><img src="./img/11.png" style="height: 50px;" alt=""></a></h1>
          <?php
          if($_SESSION['chk_ssid'] == ""){
          ?>
          <!-- 実際にHPを公開する際には、下記をコメントアウトしてください。 -->
      <div class="header-box login_hide"><a href="./login.php"><span class="contact-button">ログイン</span></a></div>
      <?php
          }else{
      ?>
          <!-- 実際にHPを公開する際には、下記をコメントアウトしてください。 -->
      <div class="header-box logout_hide"><a href="./logout.php"><span class="contact-button">ログアウト</span></a></div>

      <?php
          }
      ?>

    </div>
  </div>
  <div class="row">
      <div>
          <nav>
            <div id="open"></div>
            <div id="close"></div>   
              <div id="navi">
          <ul>
              <li><a href="index.php">ホーム</a></li>
              <li><a href="#1">商品について</a></li>
              <li><a href="#2">お客様の声</a></li>
              <li><a href="#3">申し込みの流れ</a></li>
              <li><a href="#4">アクセス</a></li>
              <li><a href="#5">お問い合わせ</a></li>

            </ul>
          </div>
          </nav> 
      </div>
    </div>
  </div>
</header>
    <div class="mainimg">
          <!-- <video src="./img/s.mp4"loop autoplay muted></video> -->
      <video id="videoPreview1" loop autoplay muted controls preload="auto" src="./img/s.mp4"></video>
      <img id="imgPreview1" class="hide topImg">
      <form action="./upload.php" method="post" enctype="multipart/form-data">
      <?php
        if(!$_SESSION['chk_ssid'] == ""){
        ?>
          <input type="file" id="fileInput1" name="file" accept="video/*,image/*">
          <input type="hidden" name="fnum" value="1">
          <input type="submit" value="登録" id="submit-button1">
        <?php
        }
    ?>
      </form>
    </div>
    <main>
        <div class="catch">
            <h2><span class="under">キャッチフレーズ</span></h2>
            <p>ここにキャッチコピーが入ります。<br>お店の宣伝やコンセプトなど。魅せる文言を入力。</p>
        </div>
        <div class="sns_container">
            <ul class="sns_pack">
                <li><a href="https://line.me/ja/" target="_blank"><img src="./icon/line.jpg"    style="width: 45px; height:45px;" alt=""></a></li>
                <li><a href="https://twitter.com/home?lang=ja" target="_blank"><img src="./icon/twitter.png" style="width: 45px; height:45px; margin:0px 30px;" alt=""></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><img src="./icon/insta.png"   style="width: 45px; height:45px;" alt=""></a></li>
            </ul>
        </div>

<section id="1" class="gray-back">
        <h2 class="center"><span class="under">商品について</span></h2>
<div class="container center">
<div class="row">
    <div>
        <video id="videoPreview2" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview2" class="hide" style="height: 200px; width: 300px;">
        <?php
    if(!$_SESSION['chk_ssid'] == ""){
    ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput2" name="file" accept="video/*,image/*" >
            <input type="hidden" name="fnum" value="2">
            <input type="submit" value="登録" id="submit-button2">
        </form>
    <?php
        }
    ?>

		<h3>ここに商品が入ります</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
       <video id="videoPreview3" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview3" class="hide" style="height: 200px; width: 300px;">
      <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput3" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="3">
            <input type="submit" value="登録" id="submit-button3">
        </form>
    <?php
          }
      ?>    

		<h3>ここに商品が入ります</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
        <video id="videoPreview4" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview4" class="hide" style="height: 200px; width: 300px;">

        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput4" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="4">
            <input type="submit" value="登録" id="submit-button4">
        </form>
    <?php
          }
      ?>   

      <h3>ここに商品が入ります</h3>
      <p>ここに説明文が入ります</p>
    </div>
    </div>
	</div>
  <!-- 2列目 -->
  <div class="container center">
<div class="row">
    <div>
        <video id="videoPreview11" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview11" class="hide" style="height: 200px; width: 300px;">
        <?php
    if(!$_SESSION['chk_ssid'] == ""){
    ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput11" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="11">
            <input type="submit" value="登録" id="submit-button11">
        </form>
    <?php
        }
    ?>

		<h3>ここに商品が入ります</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
       <video id="videoPreview12" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview12" class="hide" style="height: 200px; width: 300px;">
      <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput12" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="12">
            <input type="submit" value="登録" id="submit-button12">
        </form>
    <?php
          }
      ?>    

		<h3>ここに商品が入ります</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
        <video id="videoPreview13" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview13" class="hide" style="height: 200px; width: 300px;">

        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput13" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="13">
            <input type="submit" value="登録" id="submit-button13">
        </form>
    <?php
          }
      ?>   

		<h3>ここに商品が入ります</h3>
		<p>ここに説明文が入ります</p>
    </div>
    </div>
	</div>
</section>
		
<section id="2">
        <h2 class="center"><span class="under">スタッフ紹介</span></h2>
<div class="container center">
<div class="row">
    <div>
    <video id="videoPreview5" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview5" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput5" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="5">
            <input type="submit" value="登録" id="submit-button5">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
    <video id="videoPreview6" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview6" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput6" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="6">
            <input type="submit" value="登録" id="submit-button6">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
    <video id="videoPreview7" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview7" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput7" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="7">
            <input type="submit" value="登録" id="submit-button7">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    </div>
	</div>
  <!-- 2列目 -->
  <div class="container center">
<div class="row">
    <div>
    <video id="videoPreview14" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview14" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput14" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="14">
            <input type="submit" value="登録" id="submit-button14">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
    <video id="videoPreview15" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview15" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput15" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="15">
            <input type="submit" value="登録" id="submit-button15">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    <div>
    <video id="videoPreview16" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview16" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput16" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="16">
            <input type="submit" value="登録" id="submit-button16">
        </form>
    <?php
          }
      ?> 

		<h3>スタッフ</h3>
		<p>ここに説明文が入ります</p>
    </div>
    </div>
	</div>
</section>
		
<section id="3" class="gray-back">
        <h2 class="center"><span class="under">申し込みの流れ</span></h2>
<div class="container">
<div class="row flow">
    <div>
    <video id="videoPreview8" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview8" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput8" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="8">
            <input type="submit" value="登録" id="submit-button8">
        </form>
    <?php
          }
      ?> 

    </div>
    <div>
      <p>ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>
    </div>
    </div>	
<div class="row flow">
    <div>
       <video id="videoPreview9" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview9" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
       <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput9" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="9">
            <input type="submit" value="登録" id="submit-button9">
        </form>
    <?php
          }
      ?> 
 
    </div>
    <div><p>ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>
    </div>
    </div>
<div class="row flow">
    <div>
    <video id="videoPreview10" loop autoplay muted controls preload="auto" style="height: 200px; width: 300px;" src="./img/s.mp4"></video>
        <img id="imgPreview10" class="hide" style="height: 200px; width: 300px;">
        <?php
      if(!$_SESSION['chk_ssid'] == ""){
      ?>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="fileInput10" name="file" accept="video/*,image/*">
            <input type="hidden" name="fnum" value="10">
            <input type="submit" value="登録" id="submit-button10">
        </form>
    <?php
          }
      ?> 

    </div>
    <div><p>ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>
    </div>
    </div>
	</div>
</section>
		
<section id="4">
        <h2 class="center"><span class="under">アクセス</span></h2>
<div class="container">
<div class="row">
    <div>
      <div>
        <p>〒000-0000<br>ここに住所が入ります。ここに住所が入ります。ここに住所が入ります。<br>ここに住所が入ります。ここに住所が入ります。ここに住所が入ります。</p>
        <!-- tel: 以降を任意の電話番号に変更ください。 -->
        <p>TEL：<a href="tel:00-0000-0000">00-0000-0000</a></p>
        <a href="tel:080-2138-1581">sample</a>
        <p><strong>＜最寄駅からの所要時間＞</strong><br>
        山手線原宿駅より徒歩1分<br>
        駐車場なし・駐輪場なし</p>
        <!-- ここのリンク -->
        <p><a href="https://goo.gl/maps/XAeuYfPePHLGoSGU7" target="_blank">Google Mapを開く</a></p>
        
      </div>
	<!-- GoogleMap -->
  <iframe class="gmapIframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7146.754405024518!2d139.7019187595107!3d35.68378713147882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cbfdfba99c9%3A0x9cb63295be002377!2z5Y2D6aeE44Kx6LC36aeF!5e0!3m2!1sja!2sjp!4v1673245178398!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>	
	</div>
</section>
		
<section id="5">
<h2 class="center"><span class="under">お問い合わせ</span></h2>
<!-- 電話＋メールver  ※下記3パターンから選択してください。-->
<div class="container">
  <div class="row">
        <div>
          <div class="contact-box">
            <p><a href="tel:+81-80-2138-1581"><img src="img/tel.png" alt="電話"></a></p>
            <p>012-345-6789</p>
          </div>
        </div>
        <div>
            <div class="contact-box">
            <p><a href="mailto:hogehoge@gmail.com"><img src="img/mail.png" alt="Eメール"></a></p>
            <p>hogehoge@mail.com</p>
            </div>
        </div>
      </div>	
    </div>

<!-- メールver -->
<!-- 
<div class="container">
  <div class="row center">
        <div>
            <div class="contact-box">
            <p><a href="mailto:hogehoge@gmail.com"><img src="img/mail.png" alt="Eメール"></a></p>
            <p>hogehoge@mail.com</p>
            </div>
        </div>
      </div>	
    </div> -->

<!-- 電話ver -->

<!-- <div class="container ">
  <div class="row center">
        <div>
          <div class="contact-box">
            <p><a href="tel:+81-80-2138-1581"><img src="img/tel.png" alt="電話"></a></p>
            <p>012-345-6789</p>
          </div>
        </div>
      </div>	
    </div> -->
</section>        
    </main>
    <footer>
<div class="container">
<div class="row">
    <div>
        <h4>フッター1</h4>
        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
    </div>
    <div>
        <h4>フッター2</h4>
        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
    </div>
    <div>
        <h4>フッター3</h4>
        <p>ここにSNSやテキストなどが入ります。SNSやテキストなどが入ります。</p>
    </div>
        </div>
</div>
    </footer>
    <p id="pagetop"><a href="#">TOP</a></p>

<script>

    let fname1  = <?php echo json_encode($fname1); ?>;
    let fname2  = <?php echo json_encode($fname2); ?>;
    let fname3  = <?php echo json_encode($fname3); ?>;
    let fname4  = <?php echo json_encode($fname4); ?>;
    let fname5  = <?php echo json_encode($fname5); ?>;
    let fname6  = <?php echo json_encode($fname6); ?>;
    let fname7  = <?php echo json_encode($fname7); ?>;
    let fname8  = <?php echo json_encode($fname8); ?>;
    let fname9  = <?php echo json_encode($fname9); ?>;
    let fname10 = <?php echo json_encode($fname10);?>;
    let fname11 = <?php echo json_encode($fname11);?>;
    let fname12 = <?php echo json_encode($fname12);?>;
    let fname13 = <?php echo json_encode($fname13);?>;
    let fname14 = <?php echo json_encode($fname14);?>;
    let fname15 = <?php echo json_encode($fname15);?>;
    let fname16 = <?php echo json_encode($fname16);?>;

  function preview(){
  // 取得した拡張子によって分ける。
  if (fname1.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview1").src = './images/' + fname1;
    $("#imgPreview1").removeClass("hide");
    $("#videoPreview1").addClass("hide");
  } else if(fname1.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview1").src = './videos/'+ fname1;
    $("#videoPreview1").removeClass("hide");
    $("#imgPreview1").addClass("hide");
   }
  }
  preview();

  // 2--------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname2.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview2").src = './images/' + fname2;
    $("#imgPreview2").removeClass("hide");
    $("#videoPreview2").addClass("hide");
  } else if(fname2.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview2").src = './videos/'+ fname2;
    $("#videoPreview2").removeClass("hide");
    $("#imgPreview2").addClass("hide");
  }

  // 3---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname3.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview3").src = './images/' + fname3;
    $("#imgPreview3").removeClass("hide");
    $("#videoPreview3").addClass("hide");
  } else if(fname3.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview3").src = './videos/'+ fname3;
    $("#videoPreview3").removeClass("hide");
    $("#imgPreview3").addClass("hide");
  }

  // 4---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname4.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview4").src = './images/' + fname4;
    $("#imgPreview4").removeClass("hide");
    $("#videoPreview4").addClass("hide");
  } else if(fname4.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview4").src = './videos/'+ fname4;
    $("#videoPreview4").removeClass("hide");
    $("#imgPreview4").addClass("hide");
  }

  // 5--------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname5.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview5").src = './images/' + fname5;
    $("#imgPreview5").removeClass("hide");
    $("#videoPreview5").addClass("hide");
  } else if(fname5.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview5").src = './videos/'+ fname5;
    $("#videoPreview5").removeClass("hide");
    $("#imgPreview5").addClass("hide");
  }

  // 6---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname6.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview6").src = './images/' + fname6;
    $("#imgPreview6").removeClass("hide");
    $("#videoPreview6").addClass("hide");
  } else if(fname6.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview6").src = './videos/'+ fname6;
    $("#videoPreview6").removeClass("hide");
    $("#imgPreview6").addClass("hide");
  }

  // 7---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname7.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview7").src = './images/' + fname7;
    $("#imgPreview7").removeClass("hide");
    $("#videoPreview7").addClass("hide");
  } else if(fname7.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview7").src = './videos/'+ fname7;
    $("#videoPreview7").removeClass("hide");
    $("#imgPreview7").addClass("hide");
  }

  // 8---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname8.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview8").src = './images/' + fname8;
    $("#imgPreview8").removeClass("hide");
    $("#videoPreview8").addClass("hide");
  } else if(fname8.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview8").src = './videos/'+ fname8;
    $("#videoPreview8").removeClass("hide");
    $("#imgPreview8").addClass("hide");
  }

  // 9---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname9.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview9").src = './images/' + fname9;
    $("#imgPreview9").removeClass("hide");
    $("#videoPreview9").addClass("hide");
  } else if(fname9.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview9").src = './videos/'+ fname9;
    $("#videoPreview9").removeClass("hide");
    $("#imgPreview9").addClass("hide");
  }

  // 10---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname10.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview10").src = './images/' + fname10;
    $("#imgPreview10").removeClass("hide");
    $("#videoPreview10").addClass("hide");
  } else if(fname10.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview10").src = './videos/'+ fname10;
    $("#videoPreview10").removeClass("hide");
    $("#imgPreview10").addClass("hide");
  }

    // 11---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname11.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview11").src = './images/' + fname11;
    $("#imgPreview11").removeClass("hide");
    $("#videoPreview11").addClass("hide");
  } else if(fname11.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview11").src = './videos/'+ fname11;
    $("#videoPreview11").removeClass("hide");
    $("#imgPreview11").addClass("hide");
  }

    // 12---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname12.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview12").src = './images/' + fname12;
    $("#imgPreview12").removeClass("hide");
    $("#videoPreview12").addClass("hide");
  } else if(fname12.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview12").src = './videos/'+ fname12;
    $("#videoPreview12").removeClass("hide");
    $("#imgPreview12").addClass("hide");
  }

    // 13---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname13.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview13").src = './images/' + fname13;
    $("#imgPreview13").removeClass("hide");
    $("#videoPreview13").addClass("hide");
  } else if(fname13.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview13").src = './videos/'+ fname13;
    $("#videoPreview13").removeClass("hide");
    $("#imgPreview13").addClass("hide");
  }

    // 14---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname14.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview14").src = './images/' + fname14;
    $("#imgPreview14").removeClass("hide");
    $("#videoPreview14").addClass("hide");
  } else if(fname14.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview14").src = './videos/'+ fname14;
    $("#videoPreview14").removeClass("hide");
    $("#imgPreview14").addClass("hide");
  }

    // 15---------------------------------------------------------------
  // 取得した拡張子によって分ける。
  if (fname15.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview15").src = './images/' + fname15;
    $("#imgPreview15").removeClass("hide");
    $("#videoPreview15").addClass("hide");
  } else if(fname15.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview15").src = './videos/'+ fname15;
    $("#videoPreview15").removeClass("hide");
    $("#imgPreview15").addClass("hide");
  }

    // 16---------------------------------------------------------------
  // 取得した拡張子によって分ける。
    if (fname16.match(/\.(jpg|jpeg|png)$/i)) {
    // $fnameは画像→imgタグのsrcに挿入
    document.getElementById("imgPreview16").src = './images/' + fname16;
    $("#imgPreview16").removeClass("hide");
    $("#videoPreview16").addClass("hide");
  } else if(fname16.match(/\.(mp4|mov)$/i)) {
    // $fnameは動画→videoタグのsrcに挿入
    document.getElementById("videoPreview16").src = './videos/'+ fname16;
    $("#videoPreview16").removeClass("hide");
    $("#imgPreview16").addClass("hide");
  }

    // ファイルがアップロードされたときの処理---------------------------------------------------------------------------
    function upfile(num){
    document.getElementById("fileInput"+num).addEventListener("change", function() {
    // ファイルを取得する
    let file = this.files[0];
    // FileReaderオブジェクトを作成する
    let reader = new FileReader();
    // ファイルを読み込んだときの処理
    reader.addEventListener("load", function() {
      // プレビュー用の要素を取得する
      let preview;
      if (file.type.match(/^video\//)) {
        preview = $("#videoPreview"+num);
        $("#videoPreview"+num).removeClass("hide");
        $("#imgPreview"+num).addClass("hide");
      } else if (file.type.match(/^image\//)) {
        preview = $("#imgPreview"+num);
        $("#imgPreview"+num).removeClass("hide");
        $("#videoPreview"+num).addClass("hide");
      }
      preview.attr("src", reader.result);
    });
    reader.readAsDataURL(file);
  });
  }
  for (let i = 1; i < 17; i++) {
    upfile(i);
}
  </script>
</body>
</html>
