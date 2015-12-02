<?php
include 'index.php';
session_destroy();
echo "seção destruida";
header("Location: index.php");