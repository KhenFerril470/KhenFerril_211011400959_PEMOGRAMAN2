<?php
session_start();
session_unset();
session_destroy();
header("Location: ELearningpt15.php");
exit();
?>
