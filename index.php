// Primo esercizio

<?php

$name = $argv[1];
$lastname = $argv[2];

echo "hello, $name $lastname ";

?>

//

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>censura Testo</title>
  </head>
  <body>

    <?php

    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $bad_word = $_GET["censura"];
    $word = "***";

    $censureword = str_replace($bad_word,$word,$text);

    echo $censureword;
    ?>
    
  </body>
</html>
