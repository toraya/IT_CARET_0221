<?php
$userID = $_POST["userID"];
$password = $_POST["password"];

if ($userID === "itc" && $password === "201502c") {
    // セッションを開始
    session_start();
    // セッションにユーザIDを保存
    $_SESSION["userID"] = $userID;

    // ログイン成功 menu.phpへリダイレクト
    header("Location: menu_2.php");
}else{
    // ログイン失敗 login.phpへリダイレクト
    header("Location: login.php");
}