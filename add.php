<?php include("./views/partials/header.php");
      include("./model.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $task = $_POST['task'];
    if (empty($task)) {
        echo "Name is empty";
    } else {
        insertNewTask($task);
    }
}
?>



<?php include("./views/partials/footer.php") ?>