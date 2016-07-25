<?php
session_start();
session_destroy();
header("Location: http://localhost/weixin_baoxiu_moble/index.php/admin");

?>