<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'moises' && $password === 'moises') {
    header('Location: dashboard.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
