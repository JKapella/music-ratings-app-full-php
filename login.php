<?php

require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
} else {
    header('Location: index.php');
};