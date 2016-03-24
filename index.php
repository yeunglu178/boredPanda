<?php 

$pageTitle = "Bored Panda";
$section = null;
include("inc/header.php"); 
include("inc/data.php");
include("inc/functions.php");
?>


		

<section class="search-box">
	<form action="searchResult.php" method="">		    
		<input type="search" placeholder="Search...">		    	
		<button>Search</button>
	</form>
</section>

	<?php include("inc/footer.php"); ?>