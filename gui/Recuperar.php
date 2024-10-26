<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$textomd5  = $_POST["txttextoMd5"];
$encriptada1 = md5($textomd5);

$textosha1  = $_POST["txttextoSha1"];
$encriptada2 = sha1($textosha1);

$textohash  = $_POST["txttextoHash"];
$salt = '34a@$#aA9823$';
$password = 'duoc.2016';
$encriptada3 = hash('sha256', $salt . $textohash);

$textobase64  = $_POST["txttextoBase64"];
$Key = "dublin";
$encriptada4 = base64_encode ($textobase64);
$encriptada5 = base64_decode($encriptada4);


if(isset ($_POST['btnEncripMd5'])){
    echo 'Encriptado en MD5: ';
		echo $textomd5;
                 echo "<br>";
                echo $encriptada1;
	}       
if(isset ($_POST['btnEncripSha1'])){
    echo 'Encriptado en SHA1: ';
		echo $textosha1;
                 echo "<br>";
                echo $encriptada2;
	}
if(isset ($_POST['btnEncripHash'])){
    echo 'Encriptado en HASH: ';
		echo $textohash;
                 echo "<br>";
                echo $encriptada3;
	}
if(isset ($_POST['btnEncripBase64'])){
    echo 'Encriptado en BASE64_ENCODE: ';
		echo $textobase64;
                 echo "<br>";
                echo $encriptada4;
                echo "<br>";
    echo 'Desencriptado en BASE64_ENCODE: ';
    echo $encriptada4;
    echo "<br>";
    echo $encriptada5;
	}
if(isset ($_POST['btnTodos'])){
    echo 'Encriptado en MD5: ';
		echo $textomd5;
                 echo "<br>";
                echo $encriptada1;
    echo "<br>-------------------------------------";
    echo "</br>";
    echo 'Encriptado en SHA1: ';
		echo $textosha1;
                 echo "<br>";
                echo $encriptada2;
    echo "<br>-------------------------------------";
    echo "</br>";
    echo 'Encriptado en HASH: ';
		echo $textohash;
                 echo "<br>";
                echo $encriptada3;
    echo "<br>-------------------------------------";
    echo "</br>";           
    echo 'Encriptado en BASE64_ENCODE: ';
		echo $textobase64;
                 echo "<br>";
                echo $encriptada4;
                echo "<br>";
    echo 'Desencriptado en BASE64_ENCODE: ';
    echo $encriptada4;
    echo "<br>";
    echo $encriptada5;
	}
        
