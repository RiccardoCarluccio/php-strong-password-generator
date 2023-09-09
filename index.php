<?php
  session_start();

  include "./functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  
  <form action="index.php" method="POST" oninput="result.value=parseInt(password-length.value)">
    <!-- <input type="text" name="password-length"> -->
    <input type="number" name="password-length" min="8" max="16" placeholder="From 8 to 16">
    <!-- <input type="range" name="password-length" min="8" max="16"> -->
    <input type="submit">
    <input type="reset">

    <?php
      $lengthChosen = $_POST['password-length'];

      
    ?>

    <div><?php echo $lengthChosen ?></div>
  </form>

</body>
</html>