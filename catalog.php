<?php
//Include data.php arrays
include("inc/data.php");
include("inc/functions.php");

//Default category
$pageTitle = "Full Catalog";

//Default category
$section = null;    

//Check if cat is valid query string from nav
if(isset($_GET["cat"])){
//Check category and display associated page
    if($_GET["cat"] == "books"){
        $pageTitle = "Books";
        //Underline books if cat is books
        $section = "books";
    }else if($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    }else if($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }
}    
include("inc/header.php");
?>
<div class ="section catalog page">
    <div class="wrapper">
            <!--Add: page title -->
        <h1>
            <?php
            //Add link to full catalog when category is active 
            if($section != null){
                echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
            }
            echo $pageTitle ;
            ?>
        </h1>
        <ul class="items"> 
            <?php
            //Add array to catagories returns only keys
            $categories = array_category($catalog, $section);
            //Sorted by title keys are placed in for each to Display "img" src and "title" alt 
            foreach($categories as $id){
              echo get_item_html($id,$catalog[$id]);
            }
            ?>
        </ul>
    </div>
</div>

<?php
    include("inc/footer.php");
?>