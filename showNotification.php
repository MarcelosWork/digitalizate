
        <?php
      // Check if a success message is present in the session and display it
      session_start();
      if (isset($_SESSION['success_message'])) {
        echo 'myFunction();';
        unset($_SESSION['success_message']); // Clear the session variable
      }
      ?>
  
