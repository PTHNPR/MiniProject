<!-- 로그아웃 처리-->
<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["useriame"]);

echo ("
<script>
location.href = 'index.php';
</script>
");
?>