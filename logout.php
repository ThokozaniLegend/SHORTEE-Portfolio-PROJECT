<?php

/*
 * Auth: Thokozani J. Mahlangu
 * ALX STUDENT
 *
 */

session_start();
session_unset();
session_destroy();
header("Location: welcome.php");
exit();

