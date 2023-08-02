<html>
<body>

<form action="result.php" method="post">
  Enter the number <input type="number" name="no">
  <input type="submit">
</form>
<?php
   $no = $_POST['no'];
  echo $no;

?>
</body>
</html>
