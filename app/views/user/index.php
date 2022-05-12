<?php
if($_SESSION['isLogin'] === 0)
{
    echo "<a href=\"/user/login/\">登录</a>";
}else
{
    echo "<a href=\"/user/logout/\">退出登录</a>";
}?>
