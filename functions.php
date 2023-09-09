<?php

function generatePassword($lengthChosen) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"£$%&/()=?^*ç°§,.-;:_+';
  $charactersLength = strlen($characters);
  $result = '';
  for($i = 0; $i < $lengthChosen; $i++) {
    $result .= $characters[random_int(0, $charactersLength - 1)];
  }
  return $result;
}

?>