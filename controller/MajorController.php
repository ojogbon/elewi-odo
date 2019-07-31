<?php
  /**
   * include all needed files
   */

   include '../model/connectToDB.php';
   // include 'model/connectToDB.php';
   // include 'model/connectToDB.php';

  class MajorController
  {
      private $control;
    function __construct($control)
    {
      // code...
      $this->control = $control;
    }

    /**
    * Do main Control
    * @author ojogbon
    * @param no parameter
    **/

    public function doController()
    {
      // code...

    }

    /**
      * Getters and Setters
    */
    public function getControl (){
      return $this->control ;
    }

    public function setControl ($control){
      $this->control = $control ;
    }


  }

 ?>
