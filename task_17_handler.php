<?php
session_start();

unset($_SESSION['user']);

header("Location: task_16_index.php");