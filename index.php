<!doctype html>

<html>
	<head>
		<meta charset="UTF-8" />
		<title>Patrick's Guitars - Photo Gallery</title>
		<link rel="stylesheet" href="../css/top.css" />
		<script src="../js/common.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
			window.onload = function() {
				var dir = "./gallery";

				var fileList = <?php echo json_encode(scandir("gallery")); ?>;

				var cleanList = cleanFileList(fileList);
				
				var images = initImages(dir, cleanList);     
				
				var $right = $("#right");
				
				for (idx = 0; idx < images.length; idx++) {
					$right.append(images[idx]);
				}
				
				$("#about").click();
				
				$("#right img:first-child").click();
			};
        </script>
    </head>

    <body> 
		<div id="header">
			<img src="../img/title - vladimir script.png"/>
		</div>
		<div id="wrapper">
			<div id="left">
				<div id="about">
					<img src="img/about - white.png"/>
				
					<script>
						$("#about").on("click", 
							function () {
								$("#center div.text")
									.css(
										{
											opacity: 0,
											display: "none"
										}
									);
								
								$("#display")
									.animate(
										{
											width: 400,
											height: 400,
											margin: 10
										},
										750
									);
									
								$("#aboutText")
									.css({display:"block"})	
									.delay(750)
									.animate(
										{
											opacity: 1
										},
										750
									);
							}
						);
					</script>
				</div>

				<div id="build">
					<img src="img/work - white.png"/>
				
					<script>
						$("#build").on("click", 
							function () {
								$("#center div.text")
									.css(
										{
											opacity: 0,
											display: "none"
										}
									);
								
								$("#display")
									.animate(
										{
											width: 400,
											height: 400,
											margin: 10
										},
										750
									);
									
								$("#buildText")
									.css({display:"block"})
									.delay(750)
									.animate(
										{
											opacity: 1
										},
										750
									);
							}
						);
					</script>
				</div>

				<div id="gallery">
					<img src="img/gallery.png"/>
				
					<script>
						$("#gallery").on("click", 
							function () {
								$("#center div.text")
									.animate(
										{
											opacity: 0
										}
									);
								
								$("#display")
									.delay(750)
									.animate(
										{
											width: 800,
											height: 800,
											margin: 0
										},
										750
									);
							}
						);
					</script>
				</div>
			</div>

			<div id="center">
				<div id="display"></div>
				
				<div id="aboutText" class="text">
					<img src="../img/about.png"/>
				
					<p>
						Patrick's Guitars makes hand built guitars in Valley Center, CA. We specialize in electric guitars with varying degrees of acoustic charm, ranging from solid-body to hollow-body archtops with some unique semi-hollow concepts in between.
					</p>
					
					<p>
						In order to leverage the unique characteristics of our instruments, we use both traditional coil pickups, and piezoelectric transducers. Our guitars are wired so that you can create any tone that you want by blending the acoustic and electric qualities in inexhaustible combinations.
					</p>
				</div>
				
				<div id="buildText" class="text">
					<img src="../img/build.png"/>
				
					<p>
						Each guitar is hand assembled with some pieces being carved and shaped one wood shaving at a time.
						The process of creating the archtop guitars is the most labor intensive, with each top
						requiring multiple stages of refinement of the front and back halves of the body, with the front require special attention to both the interior and exterior.
					</p>
				</div>
			</div>
			
			<div id="right">
			</div>
		</div>
    </body>
</html>
