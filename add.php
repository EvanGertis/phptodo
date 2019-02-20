<?php include("./views/partials/header.php");
      include("./model.php");
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $task = test_input($_POST['task']);
        $id = test_input($_POST['id']);
        insertNewTask($task, $id);
        echo $task;
      }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php include("./views/partials/footer.php") ?>
