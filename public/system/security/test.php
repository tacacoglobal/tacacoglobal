<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include './Math/BigInteger.php';
        include './Crypt/AES.php';
        include './TMC_Encrypt.class.php';
        $cipher = TMC_Encrypt::enCryptAES('cau', 'cong ty co phan tam cau');
        echo TMC_Encrypt::deCryptAES('cau', $cipher);
        ?>

        <?php
//        include('Crypt/RSA.php');
//
//        $privatekey = file_get_contents('private.key');
//
//        $rsa = new Crypt_RSA();
//        $rsa->loadKey($privatekey);
//
//        $plaintext = new Math_BigInteger('aaaaaa');
//        echo $rsa->_exponentiate($plaintext)->toBytes();
        ?>
    </body>
</html>