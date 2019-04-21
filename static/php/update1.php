<?php
    $connection=mysqli_connect("remotemysql.com", "DY3RfZHvBv", "19zRI8He52");
    if (!$connection){
        die('Could not connect to server: ' . mysqli_error($connection));
    }
?>

<?php
    mysqli_select_db("DY3RfZHvBv", $connection);
    $result=mysqli_query("SELECT * FROM articles", $connection);

    while ($data = mysqli_fetch_row($result)){
        echo '  <li class="list-group-item"><a href="$data"> {{article.title}} </a></li>';
    }
?>