<?php include("./views/partials/header.php");
      include("./model.php");
?>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = 4;
        $task = getTaskById($id);
      }
?>
<form action="./add.php" method="post" name="todo">
      <input name="id" value = <?php echo $id?> hidden>
      <input type="text" id=<?php echo $id?> value=<?php echo $task ?> name="task">
      <input type="submit">
</form>

<?php
      
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>


<?php include("./views/partials/footer.php") ?>