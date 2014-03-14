<?PHP

$username = $_POST['login'];
$password = $_POST['password'];

echo '输入的用户名：'htmlspecialchars($_POST['login'])<br />;
echo '输入的密码加密后：'MD5($password)<br />;

//检测用户名及密码是否正确
if($username=='pianpian'&&$password=='ypp'){

    
    echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
	echo $password<br />;
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>