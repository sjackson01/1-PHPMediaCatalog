
    <?php
    $pageTitle = "Personal Media Library";
    //Prevent error from active state
    $section = null;
    include("inc/header.php");
    include("inc/functions.php");
    include("inc/data.php");
    ?>

    <div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
            <?php
            //Replace list items with display function
            foreach($catalog as $id => $item){
              echo get_item_html($id,$item);
          }
            ?>	
				</ul>

			</div>

		</div>

	</div> <!-- End Content Div -->

 <?php
include("inc/footer.php");
 ?>