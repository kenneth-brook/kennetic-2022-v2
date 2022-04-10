<?php
include_once('db_config.php');

$sub_sql='SELECT * FROM news WHERE status = "published" ORDER BY created_on ASC';

    $sub_result = mysqli_query($connection,$sub_sql);

    while ($sub_rows = mysqli_fetch_assoc($sub_result)) {
        $owner = $sub_rows['owner'];
        $date = $sub_rows['created_on'];
        $title = $sub_rows['title'];
        $content = $sub_rows['content'];


        echo "<div class='newsCard'>
            <div class='newsTop'>
                <h6>".$date."</h6>
                <h6>Posted By: ".$owner."</h6>
            </div>
            <div class=newsTitle>
                <h2>".$title."</h2>
            </div>
            <div class=newsTitle>$content</div>
        </div>";
    }
?>