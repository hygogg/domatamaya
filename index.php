<!-- サンプルコード -->
<?
//クッキー変数作成
//クッキーの名前
$iCkeName     =    'tryphpCookieName';
//クッキーの値
$sCkeValue     =   date('Y-m-d H:i:s').'にtryphpで作成したcookieの値です。';
//有効期限は7日間
$iCkeTimeOut  =    time()+(60*60*24)*7;
//クッキーが有効なサイト上のパス
$sPath =           '/';
//クッキーが有効なドメイン
$sDomain =         'wepicks.net';
//クッキーセット
setcookie($iCkeName, $sCkeValue, $iCkeTimeOut, $sPath, $sDomain);
?>
 
<?php $sTitle = 'クッキーの作成とクッキー変数呼び出し「setcookie()」'; ?>
<?php $sPageUrl = 'https://wepicks.net/2012/03/02/phpsample-cookie-create/'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<meta name="robots" content="index">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<title>TRYPHP!　PHPサンプル　<?php echo $sTitle; ?></title>
</head>
<body>
<h1>PHPサンプル　<?php echo $sTitle; ?></h1>
<!-- 説明ページ -->
<h3><a href="<?php echo $sPageUrl; ?>">→説明はこちら</a></h3>
<hr/>
 
 
 
 
 
 
<h2>サンプルコード実行</h2>
<div style="background-color:#f8f8f8;margin:20px; padding:20px; border:solid #cccccc 1px;">
<!-- // =========================== ここから =========================== -->
 
<h3>クッキー変数呼び出し</h3>
<?php
//クッキー変数呼び出し
echo $_COOKIE['tryphpCookieName'];
?>
 
<!-- =========================== ここまで =========================== // -->
</div>
<hr/>
 
 
 
 
 
 
</body>
</html>
