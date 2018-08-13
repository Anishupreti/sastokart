<?php
function getProcat(){
    global $db;
    
$get_categories = "SELECT * FROM product_categories order by 1 DESC LIMIT 0,8";
$run_categories = mysqli_query($db,$get_categories);
}
?>