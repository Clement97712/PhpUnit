<?php
namespace App\Models;

class Number{
  public $is_number;
  public $is_firstname;


  public function multiple($first_value){
    return $first_value*2;
  }

public function getFirstname(){
  return "Fred";
}

public function getDirectory($path){
  return $path;
}

}


 ?>
