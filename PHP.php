 <!DOCTYPE html>
<html>
<body>

<?php

  for ($count = 1; $count <= 10; $count++) {
  
  	  if ($count % 2) {
      	echo "<div style='color:blue; border: 2px solid purple; text-align:center; width: 50%;'>this is div $count</div><br>";
      }
      else {
      	echo "<div style='color:red; border: 2px solid pink; text-align:center; width: 50%'>this is div $count</div><br>";
      }
  }
  
?> 

</body>
</html>