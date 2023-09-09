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

      function generatePassword($lengthChosen) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"£$%&/()=?^*ç°§,.-;:_+';
        $charactersLength = strlen($characters);
        $result = '';
        for($i = 0; $i < $lengthChosen; $i++) {
          $result .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $result;
      }
    ?>

    <div><?php echo $lengthChosen ?></div>
  </form>

</body>
</html>