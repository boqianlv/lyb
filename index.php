<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
        session_start();
        if(!isset($_SESSION['name']))
        {
            echo '您还没有登录，请登录！',"<br>",'<a href="QD_login.html">login</a>登录<br />';
            exit();
        }
    ?>
</head>
<body>
    <script>
        var name = '<?php echo $_SESSION['name'];?>';
        document.write('欢迎来到留言板，');
        document.write(name);
    </script>
    <?php

    ?>
</body>
</html>