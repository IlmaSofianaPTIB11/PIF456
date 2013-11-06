<?php 
session_start();
session_destroy();
echo "Anda telah keluar <br />";
echo " <a href='login.php'> << Back </a>";
?>