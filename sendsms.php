<?php
require('textlocal.class.php');

$textlocal = new Textlocal(false, false,'TjzzuWnb4sc-sh12hlX1mPbbeFHfGzplW0LvJPWMlo');

$numbers = array($_POST['mobile']);
$sender = 'Nidusha';
$message = $_POST['message'];

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>