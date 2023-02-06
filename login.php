<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" media="all" href="css/ress.min.css" />
    <link rel="stylesheet" media="all" href="css/style.css" />
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/style.js"></script>
</head>
<body>
    <header class="login_header">
        <div>
            <div class="col span-12 header">
                <h1 class="logo_l"><a href="./index.php">LOGO</a></h1>
            </div>
        </div>
    </header>
    <div class="login_container">
        <h5 class="login">ログイン</h5>
        <form class="input_container" method="POST" action="login_act.php">
            <p>ユーザーネーム</p>
            <input type="text" name="user_name" placeholder='user name' class="login_info"><br>
            <p>Password</p>
            <input type="password" name="pw" placeholder="Password" class="login_info"><br>
            <button type="submit" class="login_info">ログイン</button>
        </form>
        <h5><a href="./login.php">ログイン画面へ戻る</a></h5>
    </div>
</body>
</html>