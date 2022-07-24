<?php
include_once('db_config.php');

$sub_sql="SELECT * FROM tasks ORDER BY importance DESC";

$sub_result = mysqli_query($connection,$sub_sql);

while ($sub_rows = mysqli_fetch_assoc($sub_result)) {
    $title = $sub_rows['title'];
    $description = $sub_rows['description'];
    $importance = $sub_rows['importance'];
    $difficulty = $sub_rows['difficulty'];
    $pname = $sub_rows['project_name'];

    $points = $importance * $difficulty;
    
    echo "<div class='taskCard'>
        <div class='taskTop'>
            <h2>".$title."</h2>
        </div>
        <div class='taskBody'>
            <p>".$description."</p>
        </div>
        <div class='taskPname'>
            <p>This is a task for:<br />".$pname."</p>
        </div>
        <div class='taskPointBlock'>
            <div class='pb1'><p>Importance:<br />".$importance."</p></div>
            <div class='pb2'><p>Difficulty:<br />".$difficulty."</p></div>
            <div class='pb3'><p>Points:<br />".$points."</p></div>
        </div>
    </div>";
}

?>