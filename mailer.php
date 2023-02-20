<?php
if($_POST["Message"]) {
mail("sebongbong1717@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>