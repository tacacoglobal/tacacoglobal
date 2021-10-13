<?php

class TMC_Encrypt {

    public static function enCryptAES($key, $plaintext) {
        $aes = new Crypt_AES();
        $aes->setKey($key);
        return $aes->encrypt($plaintext);
    }

    public static function deCryptAES($key, $ciphertext) {
        $aes = new Crypt_AES();
        $aes->setKey($key);
        return $aes->decrypt($ciphertext);
    }

    public static function createKeyRSA() {
        $rsa = new Crypt_RSA();
        return $rsa->createKey();
    }

    public static function enCryptRSA($plaintext, $privatekey) {
        $rsa = new Crypt_RSA();
        $rsa->loadKey($privatekey);
        return $rsa->encrypt($plaintext);
    }

    public static function deCryptRSA($ciphertext, $publickey) {
        $rsa = new Crypt_RSA();
        $rsa->loadKey($publickey);
        return $rsa->decrypt($ciphertext);
    }

    public static function enCryptDES($key, $plaintext) {
        $des = new Crypt_DES();
        $des->setKey($key);
        return $des->encrypt($plaintext);
    }

    public static function deCryptDES($key, $ciphertext) {
        $des = new Crypt_DES();
        $des->setKey($key);
        return $des->decrypt($ciphertext);
    }

    public static function enCryptRijndael($key, $plaintext){
        $rijndael = new Crypt_Rijndael();
        $rijndael->setKey($key);
        return $rijndael->encrypt($plaintext);
    }
    
    public static function deCryptRijndael($key, $ciphertext){
        $rijndael = new Crypt_Rijndael();
        $rijndael->setKey($key);
        return $rijndael->decrypt($ciphertext);
    }
}

?>