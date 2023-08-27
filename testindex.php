<?php
session_start();
include "function/database_functions.php";
if (isset($_SESSION["email"])){

?>
Successful Login!
<?php
} else {
    header('Location: adminlogin.php');
}
?>