<?php
	$content=file_get_contents("landscapes.json");
	$profile=json_decode($content);
	$album=$profile->album;
?>
<!DOCTYPE html>
<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 	<h1>Home Page</h1> -->
	<!-- <p><?=$content?></p> -->
	<!-- <pre>
		< !--<?php print_r($profile)?> - ->
	</pre> -->
	<div
		id='profile'
	>
		<div
			id='profile-picture-div'
		>
			<img 
				id='profile-picture'
				src='<?=$profile->profile_picture?>'
			/>
		</div>
		<div id='profile-bio'>
			<h1><?=$profile->name?></h1>
			<h2>Bio</h2>
			<p>
				<?=$profile->bio?>
			</p>
		</div>
		<div id='contact-info'>
			Phone<br/>
			<a href='tel:<?=$profile->phone?>'>
				<?=$profile->phone?>
			</a><br/>
			Email<br/>
			<a href='mailto:<?=$profile->email?>'>
				<?=$profile->email?>
			</a><br/>
		</div>
		
	</div>
	<?php foreach ($album as $key => $item) { ?>
		
		<div class='album-item' id='album-item-<?=$key?>' >
			<?php
				echo '<!--';
				print_r($item);
				echo '-->';
			?>
			<!-- <img 
				src="<?=$item->img?>"
			/> -->
			<div
				class='album-image'
				style='background-image: url(<?=$item->img?>);'
			>
				<div class='dark-box'>
					
				</div>
				<h2 class='album-title'><?=$item->title?></h2>
			</div>
			
			<p><?=$item->description?></p>
			<div class='like-icon'>
				<?php if($item->featured) {?>

					
					<span class='fav'>&nbsp;&nbsp;&#10084;</span>
				<?php } ?>

			</div>
			<!-- <br/> -->
			<div class='album-date'><?=$item->date?></div>

		</div>
	<?php } ?>

</body>
</html>