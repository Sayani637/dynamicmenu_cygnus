<?php
session_start();
session_destroy();
echo"<script>
alert('You have successfully logout');
window.location.href='signup.php';
</script>";
?>