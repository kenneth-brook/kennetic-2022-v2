<?php
include_once('db_config.php');

$sub_sql="SELECT news.owner, news.created_on, news.title, news.content, directus_users.id, directus_users.first_name
          FROM news 
          INNER JOIN directus_users
          ON news.owner = directus_users.id
          ORDER BY news.created_on DESC";

    $sub_result = mysqli_query($connection,$sub_sql);

    while ($sub_rows = mysqli_fetch_assoc($sub_result)) {
        $owner = $sub_rows['first_name'];
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
            <div class=newsCont>$content</div>
        </div>";
    }
?>