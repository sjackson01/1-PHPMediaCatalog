<?php
include("inc/data.php");
include("inc/functions.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    if(isset($catalog[$id])){
        //Store all keys inside $item array
        $item = $catalog[$id];
    }
}     
//If no item is set return to full catalog 
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
            
        <div class="media-details">
            <h1><?php echo $item["title"];?></h1>
            <table>
                <!--Create standard details section --> 
                <tr>
                    <th>Category</th>
                    <td><?php echo $item["category"];?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?php echo $item["genre"];?></td>
                </tr>
                <tr>
                    <th>Format</th>
                    <td><?php echo $item["format"];?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?php echo $item["year"];?></td>
                </tr>

                <?php 
                //Add book details if book category 
                if(strtolower($item["category"]) == "books"){ ?>
                     <tr>
                        <th>Authors</th>
                        //Expand and format interior array authors
                        <td><?php echo implode(",",$item["authors"]);?></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><?php echo $item["publisher"];?></td>
                        </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><?php echo $item["isbn"];?></td>
                    </tr>
                <?php } else if(strtolower($item["category"]) == "movies"){ ?> 
                    <tr>
                        <th>Director</th>
                        <td><?php echo $item["director"];?></td>
                    </tr>
                    <tr>
                        <th>Writers</th>
                        <td><?php echo implode(",",$item["writers"]);?></td>
                    </tr>
                    <tr>
                        <th>Stars</th>
                        <td><?php echo implode(",",$item["stars"]);?></td>
                    </tr>
                <?php } else if(strtolower($item["category"]) == "music"){ ?> 
                    <tr>
                        <th>Artist</th>
                        <td><?php echo $item["artist"];?></td>
                    </tr>    
                <?php } ?>
            </table>
         </div>
        </div>
    </div>


</div>

