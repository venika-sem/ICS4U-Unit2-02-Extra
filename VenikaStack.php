<?php
  /**
   * This is the VenikaStsck class
   *
   * author Venika Sem
   * version 1.0
   * since 2024-03-19
   */
  
  class VenikaStack {
      // array to store strings
      private $strStack = [];
  
      // constructor
      public function __construct() {
      }
  
      // method to add a string to the stack
      public function push($input): void {
          array_push($this->strStack, $input);
      }
  
      // method to remove a string from the stack
      public function pop() {
          if (count($this->strStack) > 0) {
              return array_pop($this->strStack);
          } else {
              return "Stack is empty";
          }
      }
  
      // method to show the stack
      public function show(): string {
          $values = "";
          foreach ($this->strStack as $value) {
              $values .= $value . ", ";
          }
          $values = substr($values, 0, -2);
          return $values;
      }
  }
?>
