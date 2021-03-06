<?php include 'header.php'; ?>

<body>

  <a href="dashboard-bedrijven.php"><img class="center-image back" src="images/whitearrow.png"></a><div class="main-title-block"><h1 class="title text-center">Containers</h1></div>

<div class="container">

  <div class="col-12 spacing-top">
	<div class="row">
		<div class="col-8">
		<div class="searchbar">
  			<input type="text" placeholder="Zoeken" class="form-control">
		</div>
	</div>
	<div class="col-4">
		<button type="button" class="btn btn-primary btn-sm sorteren">Sorteren</button>
	</div>
</div>
</div>

<div class="achtergrond-instellingen">

	<div class="container">
  		<div class="col-12 spacing-top">

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-8">
			    			<p class="containernaam">Container</p>
			    			<p class="containerlocatie">Straatnaam, Groningen</p>
								<?php	

									$url = 'json/container1.json'; // path to your JSON file
									$data = file_get_contents($url); // put the contents of the file into a variable
									$containers = json_decode($data); // decode the JSON feed

									echo '<p class="containerlocatie">Laatste meting: ' . $containers[0]->date; 
								?>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-8">
			    			<p class="containernaam">Container</p>
			    			<p class="containerlocatie">Straatnaam, Groningen</p>
								<?php	

									$url = 'json/container2.json'; // path to your JSON file
									$data = file_get_contents($url); // put the contents of the file into a variable
									$containers = json_decode($data); // decode the JSON feed

									echo '<p class="containerlocatie">Laatste meting: ' . $containers[0]->date; 
								?>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-8">
			    			<p class="containernaam">Container</p>
			    			<p class="containerlocatie">Straatnaam, Groningen</p>
								<?php	

									$url = 'json/container3.json'; // path to your JSON file
									$data = file_get_contents($url); // put the contents of the file into a variable
									$containers = json_decode($data); // decode the JSON feed

									echo '<p class="containerlocatie">Laatste meting: ' . $containers[0]->date; 
								?>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-8">
			    			<p class="containernaam">Container</p>
			    			<p class="containerlocatie">Straatnaam, Groningen</p>
								<?php	

									$url = 'json/container4.json'; // path to your JSON file
									$data = file_get_contents($url); // put the contents of the file into a variable
									$containers = json_decode($data); // decode the JSON feed

									echo '<p class="containerlocatie">Laatste meting: ' . $containers[0]->date; 
								?>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-8">
			    			<p class="containernaam">Container</p>
			    			<p class="containerlocatie">Straatnaam, Groningen</p>
								<?php	

									$url = 'json/container5.json'; // path to your JSON file
									$data = file_get_contents($url); // put the contents of the file into a variable
									$containers = json_decode($data); // decode the JSON feed

									echo '<p class="containerlocatie">Laatste meting: ' . $containers[0]->date; 
								?>
			    		</div>
			    	</div>
		    	</div>
			</div>
	</div>
  </div>
 </div>





</div>



<?php include 'menu-bedrijven.php'; ?>

<?php include 'footer.php'; ?>




</div>
</div>
</div>
</div>

</div>
</div>
</body>
