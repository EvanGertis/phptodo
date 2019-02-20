<?php include("./views/partials/header.php");
      include("./model.php");
?>

<form id="selector-form" method="post" name="todo">
  <table>
    <tr>
      <td>
        <select id = "selector">
        
          <option>ACTION</option>
          <option>edit</option>
          <option>delete</option>

        </select>
      </td>

      <td>TODO</td>

    </tr>

    <?php 
    $rows = getAllTasks();
    foreach ($rows as $key => $col) {
    ?>
      <tr id= <?php echo $col['id']?>>
        <td><input type="radio"/></td>
        <td><?php echo $col['task']?></td>
      </tr>
    
    <?php
    }
    ?>
  </table>

  <input type="submit">
</form>

<?php include("./views/partials/footer.php") ?>