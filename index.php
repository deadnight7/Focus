<?php


require "functions/utils.php";
header("Content-Type: text/html; charset=utf-8");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>
	Focus
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<meta charset="utf-8">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
<link rel="stylesheet" href="css/app.css">

</head>
<body>

<!--Header Start -->
<div class="logo">
	<div class="container">
	 <div class="row">
		<div class="col-md-3 logo-main">Focus</div>
	 </div>
	</div>
</div>
<!--Header END -->

<!--Content Start
<style type = "text/css">
/* demo only */
[class*="col-"] {
  //min-height:200px;
  //line-height:200px;
  //text-align:center;
  //color:#fff;
  //font-size:2em;
}

.boxlogo {background:red;}
.boxb {background:green;}
.boxa {background:blue;}
</style>-->

<?php
	$sourceXML = simplexml_load_file ('theVerge_android.xml');
	$colors = array ('crimson',  'yellow', 'cobalt' ,'olive', 'lavender');
	$lastElement = '';
	$count = 0;
	foreach ($sourceXML->entry as $entry){
		
		/*$randomElement = $colors[array_rand($colors, 1)];
		if ($lastElement == $randomElement)
		{
			$randomElement = $colors[array_rand($colors, 1)];
		}
		$lastElement = $randomElement;*/
		
		
		$strTitle = $entry->title;
		$link = $entry->id;
		$strAuthor = $entry->author->name[0];
		$strPublishedOn = $entry->published;
		$originalDate = $strPublishedOn;
		$newDate = date("d-M-Y h:i A", strtotime($originalDate));
			
		$strContent = $entry->content;
		$strFirstImg =  substr ( $strContent ,(strpos( $strContent, ' src="')+6), (strpos( $strContent, '" />' )-22));
			
		if (strlen ($strContent) < 250)
		{
			continue;
		}
?>
		
				  
<?php
	if ($count%2 == 0 || $count%2 != 0)
	{
		?>
		<div class="container <?php echo $colors[$count%5]; ?> ">
			
		 <div class="row post">
			<!-- <div class="row post" style= "background-image: url('<?echo $strFirstImg?>'); background-position: right;   height:170px; background-repeat: no-repeat;">-->
				  <div class="col-xs-12">
								
							<div class="col-sm-12"><h3> 
									<a  href= "<?php echo $link; ?>"><?php echo $strTitle; ?>
									</a></h3>
							</div>
							<div class="col-xs-12">
								<div class="col-sm-12">
									The Verge
								</div>
								<div class="col-sm-12">
									 <?php echo $strAuthor ;?> - <?php echo time_elapsed_string($strPublishedOn); ?>
								</div>
								<!-- <div class="col-sm-12"><br/>
										<p>You don't see an All Star Comics #3 every day. Published in 1940, it’s a milesto an All Star Comics #3 every day. Published in 1940, it’s a milesto an All Star Comics #3 every day. Published in 1940, it’s a milesto an All Star Comics #3 every day. Published in 1940, it’s a milestone in what’s known as the Golden Age of comic books: the debut of the first bonafide superhero team, the Justice Society of America. There’s hardly a plot, only a meeting of some of DC’s biggest stars — Flash, Green Lantern, Hawkman — taking turns sharing tales as if they were telling ghost stories at a campfire. Spectre recounts a battle with a monster from the moon; Hawkman remembers a crisis on the island of940, it’s a milesto an All Star Comics #3 every day. Published in 1940, it’s a milestone in what’s known as the Golden Age of .</p>
								</div> -->
							</div>
					</div>
				 <!--<div class="col-md-1">The Verge</div>
				<div class="col-md-7">Engineers create world's first white laser beam</div>
				<div class="col-md-4">Loren Grush | July 31, 2015 06:02 pm</div>-->
	<!--	 </div>-->
		 </div>
		 </div>	
		<?php
	}

?>
						
				
					
<?php

	$count++;

	}
?>

				
					
					<!--
		<div class="container yellow">
		 <div class="row post">
			<div class="col-md-3">Focus</div>
		 </div>
		</div>


		<div class="container cobalt">
		 <div class="row post">
			<div class="col-md-3">Focus</div>
		 </div>
		</div>

		<div class="container  olive">
		 <div class="row post">
			<div class="col-md-3">Focus</div>
		 </div>
		</div>


		<div class="container lavender">
		 <div class="row post">
			<div class="col-md-3">Focus</div>
		 </div>
		</div>

<div class="container">
 <div class="row">
  <div class="col-md-12">.col-md-8 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</div>
 
 <div class="col-md-12"><hr/>.col-md-8 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</div>
	
 <div class="col-md-4"><hr/>.col-md-4  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</div>
</div>
</div>
-->
</body>
</html>