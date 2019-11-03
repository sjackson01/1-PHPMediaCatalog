<?php
include("inc/data.php");
include("inc/functions.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    if(isset($catalog[$id])){
        $item = $catalog[$id];
    }
}     

if(!isset($item)) {
    //If item is not set tell the browser to look for a different page
    header("location:catalog.php");
    //Make sure nothing else is processed while re-direct command is processing
    exit; 
}

$pageTitle = $item["title"];

$section = null;  

include("inc/header.php");
?>

<div class="sectioin page">

    <div class="wrapper">
        <div class="media-picture">
            <span>
                <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" />
            </span>
        </div>
    </div>


</div>

?>