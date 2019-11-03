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
        //Will not execute both since argument cannot be null and match
        if($category == null OR strtolower($category) == strtolower($item["category"])){
            //Null = all key values, match only matched values 
            $sort = $item["title"];
            //Remove prepositions from title names for alpha order
            //ltrim = ignore "The " at beginning of title
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            //$output[203] = "Clean Coding"
            $output[$id] = $sort;
        }
    }
    //Sort array titles 
    asort($output);
    //Return only the keys
    return array_keys($output);
}

?>