<?php
//$id is not used yet for some reason
//We can use this function on mutilple pages
function get_item_html($id,$item){
    $output = "<li><a href='#'><img src ='"
                . $item["img"] . "' alt = '"
                . $item["title"] . "' />"
                . "<p>View Details</p>"
                . "</a></li>";
    return $output;
}
?>