<?PHP

$username = htmlspecialchars($_POST['login']);
$password = MD5($_POST['password']);


//检测用户名及密码是否正确
if($username='pianpian'&&'password'=MD5('ypp')){

    echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>