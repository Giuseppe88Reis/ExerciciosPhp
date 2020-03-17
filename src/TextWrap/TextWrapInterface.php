<?php

namespace Galoa\ExerciciosPhp\TextWrap;
 
interface TextWrapInterface {

 public function metodOne( $text );
 public function metodTwo( $text, int $lenght );
 echo wordwrap($texto, 30, "<br />\n");
}

class oopClass implements oopinterface {
 
 public function methdOne( $text )
 {
   echo 'O Primeiro texto digitado foi:'. $text. '<br>';
  }
 
 public function methdTwo( $text, int $lenght )
 {
  
  echo 'O Segundo texto digitado é:'. $text. '<br>';
  echo 'O número escolhido será:'. $lenght. '<br>';
 }
  wordwrap($texto, 20, "<br />\n", true);
  $array = array("$text", "$lenght");
  var_dump($array);


  wordwrap($texto, 20, "<br />\n", true);
  public function textWrap(string $text, int $length): array;

}
