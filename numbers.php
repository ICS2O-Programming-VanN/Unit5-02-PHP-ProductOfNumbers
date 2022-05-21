<?php
  // If Button clicked
  if(isset($_POST['submit'])) {
    // Ensures inputs fields are not empty
    if($_POST['first-num'] != "" and $_POST['second-num'] != "") {
      
      // Get Max and Min from user
      $firstNumber = $_POST['first-num']; 
      $secondNumber = $_POST['second-num'];

      // Initializes Variables
      $product = 0;


      for ($counter = 0; $counter < $secondNumber; $counter++) {
        $product += $firstNumber;
      }
      echo "<h4>The product of these two number is " . $product;

      // If user did fill all input fields, yet pressed button
    } else {
      echo "<h4>Please fill both boxes.</h4>";
    }

    
  }
?>