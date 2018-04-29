<?php

$connection = mysqli_connect('127.0.0.1','root','','bookexpressbus');

echo 'hi';

if(!$connection){
	echo 'error';
}

else{
	echo 'success';
}

?>