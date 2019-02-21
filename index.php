<?php include("./views/partials/header.php");
      include("./model.php");
?>


  <table>
    <tr>
      <td>TODO</td>
    </tr>

    <?php 
    $rows = getAllTasks();
    foreach ($rows as $key => $col) {
    ?>
      <tr id= <?php echo $col['id']?>>
      <form action = "./delete.php" method="post">
        <td>
        <input type="submit" value="delete">
        <input name="id" value=<?php echo $col['id']?> hidden>
        </td>
      </form>
        <td><?php echo $col['task']?></td>
      </tr>
    
    <?php
    }
    ?>
  </table>
<form action="./add.php" method="post" name="todo">
  <input type= "text" name="task">
  <input type="submit" value = "add">
</form>

<?php include("./views/partials/footer.php") ?>