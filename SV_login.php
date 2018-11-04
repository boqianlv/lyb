<?php
header('Content-type:text/html;charset=utf-8');
session_start();  //启动会话

if(isset($_POST['login']))
{
    $name = trim($_POST['name']);
    $pass = trim($_POST['password']);
    $conn = mysqli_connect("localhost","root","","DT");
    if(!$conn)
    {
        die("Connection failed!".mysqli_connect_error());
    }
    echo "Connect Successful!<br>";
    $sql = "SELECT zhang,mi FROM yuangong WHERE zhang = '{$name}' && mi='{$pass}'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "登陆成功！";
        header('refresh:3;url=index.html');
    }
    else if(($username == '')||($password == ''))
    {
        header('refresh:3;url=QD_login.html');
        echo "用户名和密码不能为空";
        exit;
    }
    else
    {
        echo "您输入的账号密码有误！请重新输入，三秒后跳转";
    }

}
