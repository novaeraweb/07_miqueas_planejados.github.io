<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<script src="jquery-2.2.4.js"></script>
		<script src="jssor.slider.debug.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<video autoplay loop>
			<source src="/anim/anim.webm" type="video/webm">
			Your browser does not support the video tag.
		</video> 
		
		<div id="footer">
				<div id="textContainer">
					<div style="position: absolute; top: 20px; left: 15px; text-shadow: none;">Os melhores momentos da vida</div>
					<div style="position: absolute; top: 50px; left: 150px; font-weight: 400;">acontecem sem planejar.</div>
					<div style="position: absolute; top: 100px; left: 35px; font-weight: 400;">Mas os ambientes</div>
					<div style="position: absolute; top: 130px; left: 170px; text-shadow: none;">você planeja com a gente.</div>
				</div>
					
				<div id="contato">
					(14) 3815 1602 - www.marcenariamiqueas.com.br
				</div>
				
				<div id="relogio">
				</div>
		</div>
		
		<img id="fundo" src="fundo.jpg" />
		
		<div id="carousel">
			<div id="slides" u="slides" style="position: absolute; left: 150px; overflow: hidden; display: inline-block; text-align: center; margin-left: auto; margin-right: auto;">
				<!--<div><img u="image" src="image1.jpg" /></div>
				<div><img u="image" src="image2.jpg" /></div>-->
				<?php
					$directory = 'animimgs/';
					$scanned_directory = array_diff(scandir($directory), array('..', '.'));
					foreach ($scanned_directory as $key => $value) {
						print('<div><img u="image" src="/anim/animimgs/' . $value	 . '" /></div>');
					}
				?>
			</div>
		</div>
		
		<script>		
			$(document).ready(function() {
				$('#carousel').css('height', ($(document).height()-300) + 'px');
				$('#slides').css('height', ($(document).height()-300) + 'px');
				$('#slides').css('width', ($(document).width()-300) + 'px');
				$('#footer').css('width', ($(document).width()-330) + 'px');
				
				//Define an array of slideshow transition code
				var _SlideshowTransitions = [
				{$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:$JssorEasing$.$EaseInQuad},
				{$Duration:1000,$Cols:3,$Rows:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$JssorEasing$.$EaseInBounce},
				{$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:$JssorEasing$.$EaseInQuad},
				{$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:800,$Delay:300,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSquare,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:800,$Delay:300,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangleCross,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:800,$Delay:300,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationRectangle,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:800,$Delay:300,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCross,$Easing:$JssorEasing$.$EaseOutQuad},
				{$Duration:800,$Delay:200,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:2049},
				{$Duration:600,x:1,$Delay:50,$Cols:8,$Rows:4,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				{$Duration:600,y:-1,$Delay:50,$Cols:8,$Rows:4,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				{$Duration:600,x:-1,y:1,$Delay:50,$Cols:8,$Rows:4,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				{$Duration:600,x:-1,$Delay:50,$Cols:8,$Rows:4,$SlideOut:true,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				{$Duration:600,y:1,$Delay:50,$Cols:8,$Rows:4,$SlideOut:true,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				{$Duration:600,x:-1,y:-1,$Delay:50,$Cols:8,$Rows:4,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:1028,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
				
				];
				var options = {
					$AutoPlay: true,
					$FillMode: 2,
					$PauseOnHover: 0,
					$SlideshowOptions: {
							$Class: $JssorSlideshowRunner$,
							$Transitions: _SlideshowTransitions,
							$TransitionsOrder: 1,
							$ShowLink: false
						}
				};
				var jssor_slider1 = new $JssorSlider$('carousel', options);
				document.slider = jssor_slider1;
			});
			
			$(window).resize(function() {
				$('#carousel').css('height', ($(document).height()-330) + 'px');
				$('#slides').css('height', ($(document).height()-300) + 'px');
				$('#slides').css('width', ($(document).width()-300) + 'px');
				$('#footer').css('width', ($(document).width()-330) + 'px');
			});
			
			setInterval(function() {
				$('#relogio').text(new Date(new Date().getTime()).toLocaleTimeString());
			}, 1000);
		</script>

		<style>
			#carousel {
				position: fixed;
				left: 0px;
				top: 25px;
				width: 100%;
				/*height: 100%;*/
				z-index: 10;
			}
			
			#contato {
				position: fixed;
				right: 20px;
				bottom: 20px;
				font-size: 24px;
			}
			
			#relogio {
				position: fixed;
				right: 15px;
				bottom: 50px;				
			}
			
			#textContainer {
				position: absolute;
				top: 0px;
				left: 40%;
				transform: translateX(-50%);
				width: 650px;
			}
			
			#fundo {
				position: fixed;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
			}
			
			#slides {
				border-radius: 3px;
			}
		
			#footer {
				font-family: 'Open Sans', sans-serif;
				font-size: 38px;
				font-weight: 300;
				color: white;
				text-shadow: 0px 0px 8px #CCC;
				background-color: rgba(0, 0, 0, 0.5);
				position: fixed;
				bottom: 0px;
				left: 330px;
				width: 100%;
				height: 249px;
				z-index: 100;
			}
			
			video {
				z-index: 100;
				image-fit: fill;
				position: fixed;
				bottom: 0px;
				left: 0px;
				width: 330px;
				height: 250px;
				overflow:hidden;
			}
	
			body {
				background-color: gray;
				overflow:hidden;
			}
		</style>
	</body>
</html>