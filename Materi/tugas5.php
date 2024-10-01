<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    img{
        width:100px
    }
  </style>
</head>

<?php
$rating = 3; 

for ($i = 1; $i <= 5; $i++) {
    if ($i <= $rating) {
        echo '<img src="https://simpleicon.com/wp-content/uploads/star.svg" alt="Filled star">';
    } else {
        echo '<img src="https://www.svgrepo.com/show/379262/star-empty.svg" alt="Empty star">';
    }
}
?>
<body>
</html>