<?php
//create_cat.php
include 'conn.php';
include 'header.php';

echo '<div class="Article">';
    echo '<table style="width:100%">';
        echo '<tr>';
            echo '<a href="category.php?id="" style="text-align:left">Category_name</a>';
            echo '<a href="topic.php?id="" style="text-align:right">Topic subject</a>';
        echo '</tr>';
        echo '<tr style="text-align:right">';
            echo '<td>Category description goes here</td>';
            echo '<td>at 10-10</td>';
        echo '</tr>';
    echo '</table>';
echo '</div>';
include 'footer.php';
?>