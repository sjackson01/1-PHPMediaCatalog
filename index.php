
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
            $random = array_rand($catalog, 4);
            /* $random
            array(4) { 
                  [0]=> $id=int(102) $catalog[102] = $item["title"]
            */
            foreach($random as $id){
              //$random contains 4 arrays 
              echo get_item_html($id,$catalog[$id]);
          }
            ?>	
				</ul>

			</div>

		</div>

	</div> <!-- End Content Div -->

 <?php
include("inc/footer.php");
 ?>