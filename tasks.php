<?php
    include "inc/db_config.php";

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $importance = $_POST['importance'];
        $difficulty = $_POST['difficulty'];
    }

    $sql = "INSERT INTO 'tasks' ('title', 'description', 'importance', 'difficulty') VALUES ('$title', '$description', '$importance', '$difficulty')";

    $result = $connection->query($sql);

    if($result == TRUE) {
        echo "We Good";
    }
    else {
        echo "It Broke:" . $sql . "<br>". $connection->error;
    }

    $connection->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="" />

    <title>Tasks | Kennetic Concepts</title>

    <?php include 'inc/header-script.php'; ?>
</head>



<body id="task">
    <?php include 'inc/header.php'; ?>

    <h2>Task Entry</h2>

    <form action="" method="POST">
        <fieldset>
            <legend>Task Information:</legend>
            Task Name:<br>
            <input type="text" name="title">
            <br>

</body>
<?php include 'inc/footer.php'; ?>

</html>