<?php
//Default category
$pageTitle = "Full Catalog";

//Default no active state underline 'null'
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
        <h1><?php echo $pageTitle; ?></h1>
        <ul> 
            <?php
            //Assign each $catalog item to variable $item 
            foreach($catalog as $item){
                echo "<li>" . $item . "</li>";
            }
            ?>
        </ul>
    </div>
</div>

<?php
    include("inc/footer.php");
?>