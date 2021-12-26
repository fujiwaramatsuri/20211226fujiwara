<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>九九</title>
  <link href="style.css" rel="stylesheet" />
   
</head>
<body>
 
<table border="2" style="margin:32px 0 0 32px;">
<table>
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>
</body>
</html>