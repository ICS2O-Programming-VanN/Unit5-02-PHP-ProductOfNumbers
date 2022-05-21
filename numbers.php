<?php
  // If Button clicked
  if(isset($_POST['submit'])) {
    // Ensures inputs fields are not empty
    if($_POST['first-num'] != "" and $_POST['second-num'] != "") {
      
      // Get First and Second number from user
      $firstNumber = $_POST['first-num']; 
      $secondNumber = $_POST['second-num'];

      // Initializes Variables
      $product = 0;

      // For loop to calculate the product of both numbers
      for ($counter = 0; $counter < $secondNumber; $counter++) {
        $product += $firstNumber;
      }
      // Displays the product of entered numbers
      echo "<h4>The product of these two number is " . $product . "</h4>";

      // If user did fill all input fields, yet pressed button
    } else {
      echo "<h4>Please fill both boxes.</h4>";
    }

    
  }
?>