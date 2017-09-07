
<!DOCTYPE HTML>
<html>  
<body>

<form action="CleanupString.php" method="post">
Sentence: <input type="text" name="text"><br>
<input type="submit" value="Cleanup">
</form>

<?php
if (isset($_POST["text"]))
{
  $text = $_POST["text"];
  trim($text, " ");
  echo ucwords($text);
} 
else 
{
  $text = null;
  echo "no text supplied";
}
?>
</body>
</html>



