<?php
  /**
   * This is the standard index.ts starting point.
   *
   * author Venika Sem
   * version 1.0
   * since 2024-03-19
   */
  
  require_once 'VenikaStack.php';
  
  $fruits = new VenikaStack();
  $fruits->push("apple");
  $fruits->push("banana");
  $fruits->push("cherry");
  echo "fruits: " . $fruits->show() . "\n";
  $top_fruit = $fruits->pop();
  echo "popped fruit: " . $top_fruit . "\n";
  echo "fruits: " . $fruits->show() . "\n\n";
  
  $colours = new VenikaStack();
  $colours->push("red");
  $colours->push("blue");
  $colours->push("purple");
  echo "colours: " . $colours->show() . "\n";
  $top_colour = $colours->pop();
  echo "popped colour: " . $top_colour . "\n";
  echo "colours: " . $colours->show() . "\n\n";
  
  $animals = new VenikaStack();
  $animals->push("dog");
  $animals->push("bird");
  $animals->push("cat");
  echo "animals: " . $animals->show() . "\n";
  $top_animal = $animals->pop();
  echo "popped animal: " . $top_animal . "\n";
  echo "animals: " . $animals->show() . "\n";
  
  echo "\nDone.";
?>
