<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 10:14 AM
 */
session_start();
$conn = $_SESSION['connection'];
//echo "closeing";
$conn -> close();
session_destroy();