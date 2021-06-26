<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="fivehour.php" method="post">
<!-- Apple: <input type="checkbox" name="fruits[]" value="Apple"> <br>
Orange: <input type="checkbox" name="fruits[]" value="Orange"> <br> -->
Name: <input type="text" name="student"> <br>
<input type="submit">
</form>

<?php
// creating array
$grades = array("chika"=>"a", "dozie" =>"b", "an"=>"d");

echo $grades[$_POST["sudent"]];

// $friends["chika"] = "c";
// $friends["sam"] = "a";

// $number = count($friends);

// echo $number;




?>
</body>
</html>