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

//Pass in $catalog, $category parameters 
//Return an array of keys 
function array_category($catalog, $category){
    $output = array();
    //The if statement will do nothing if null so no need for else statment
    foreach($catalog as $id => $item){
        //Sort items that match category or if null sort all the items
        if($category == null OR strtolower($category) == strtolower($item["category"])){
            //Create variable used to sort by tititle
            $sort = $item["title"];
            //Remove prepositions from title names for alpha order
            //ltrim = ignore "The " at beginning of title
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            //Assign keys and value to $output array
            $output[$id] = $sort;
        }
    }
    //Sort the output array
    asort($output);
    //Return only the keys
    return array_keys($output);
}

?>