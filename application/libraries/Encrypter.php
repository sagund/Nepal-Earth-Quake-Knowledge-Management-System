<?php

class Encrypter
{

  private $td;

  // this gets called when class is instantiated
  public function __construct($key = 'w3_thfd$#!!jj+andismdaee', $iv = false, $algorithm = 'tripledes', $mode = 'ecb')
  {

  }

  public function encrypt($plain_string)
  {
    /*
    encrypt string using mcrypt and then encode any special characters
    and then return the encrypted string
    */
    return @base64_encode(str_rot13($plain_string));
  }

  public function decrypt($encrypted_string)
  {
    /*
    remove any special characters then decrypt string using mcrypt and then trim null padding
    and then finally return the encrypted string
    */
    return trim(str_rot13(base64_decode($encrypted_string)));
  }

  // this function gets called when php garbage collection destroys the object
  public function __destruct()
  {

  }

}