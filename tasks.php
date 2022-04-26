<!DOCTYPE HTML>
<html lang="en">

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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="" />

    <title>Tasks | Kennetic Concepts</title>

    <script src="./js/tinymce/tinymce.min.js"></script>

    <?php include 'inc/header-script.php'; ?>

    <script>
    tinymce.init({
        selector: '#mytextarea',
        plugins: [
            'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
            'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
            'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
            'wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
    });
    </script>
</head>



<body id="task">
    <?php include 'inc/header.php'; ?>



    <h2>Task Entry</h2>

    <form action="" method="POST">
        <fieldset>
            <legend>Task Information:</legend>
            Task Name:<br>
            <input type="text" name="title">
            <br><br>
            <textarea id="mytextarea">Hello, World!</textarea>
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>

</body>
<?php include 'inc/footer.php'; ?>

</html>