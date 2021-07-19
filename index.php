<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            padding: 200px;
        }
    p{
        display: block;
        max-width: 980px;
        margin: 0 auto 20px;
        text-align: center;
    }
    a{
        width: 300px;
        height: 100px;
        line-height: 100px;
        border: 1px solid #ddd;
        text-align: center;
        margin: 0 auto;
        display: block;
        color: #000;
    }
        
        a:hover {
            background-color: #000;
            color: #fff;
        }
</style>
        <p>※固定ページ作成の為、HOME画面を仮設置しています。LPは下記からご確認ください。</p>
        <a href="<?php echo esc_url( home_url( '/lp001' ) ); ?>">2021_lp</a>
</body>
</html>