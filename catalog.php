<?php
//Default category
    $pageTitle = "Full Catalog";
//Check if cat is valid query string from nav
    if(isset($_Get["cat"])){
//Check category and display associated page
        if($_GET["cat"] == "books"){
            $pageTitle = "Books";
        }else if($_GET["cat"] == "movies"){
            $pageTitle = "Movies";
        }else if($_Get["cat"] == "music"){
            $pageTitle = "Music";
        }
    }
include("inc/header.php");
?>
<div class ="section page">
    <!--Add: page title -->
    <h1><?php echo $pageTitle; ?></h1>
</div>
<?php
    include("inc/footer.php");
?>