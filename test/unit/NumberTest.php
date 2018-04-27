<?php

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase{

  public function testFirst(){
    $first_number = new \App\Models\Number;
    $this->assertEquals(4,$first_number->multiple(2));
  }

  public function testSecond(){
      $Prenom =  new \App\Models\Number;
      $this->assertNotEmpty($Prenom->getFirstname());
  }

  public function testThird(){
      $this->assertLessThan(25,3); // 1er parametre doit etre plus grand que le second parametre
  }

  public function testDirectory(){
      $isPath= new \App\Models\Number;
      $this->assertDirectoryExists($isPath->getDirectory("/var/www/html")); // Verifier que le repertoire existe
  }

  public function testSame(){
    $this->assertSame("12","12"); // doit etre tu même type et avoir la meme valeur
  }

  public function testArrayKey(){
    $this->assertArrayHasKey(0, [2,3,40]);  //
  }


}

 ?>
