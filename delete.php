<?php include("./views/partials/header.php");
      include("./model.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $id = $_POST['id'];
    if (empty($id)) {
        echo "id is empty";
    } else {
        deleteTask($id);
    }
}
?>
<?php include("./views/partials/footer.php") ?>