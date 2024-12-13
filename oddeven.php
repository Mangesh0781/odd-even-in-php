<!DOCTYPE html>
<html>
<body>

<form method="post">
  Enter a number: <input type="text" name="number">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['number'];  // Get input from form

$x =readline('enter a number');
if($input %2==0){
    echo "$input : " .'even number';
}
else if($input %2 !=0){
    echo  "$input : " . 'odd number ';
}

else{
    echo 'enter a valid number';
}
}

?>

</body>
</html>
