<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <label for=""><input type="radio" name="color" value="orange">Orange</label>
  <label for=""><input type="radio" name="color" value="pink">Pink</label>
  <label for=""><input type="radio" name="color" value="gold">Gold</label>
  <button>Post</button>
  <a href="reset.php">[reset]</a>
</form>

<?php 

include('../app/_parts/_footer.php');


