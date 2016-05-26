<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
		<title>Screenshoter - Daksh  Miglani</title>
		<meta name="description" content="The official Daksh Miglani Website."/>
		<meta name="keywords" content="Daksh Miglani, DakshM., dakshmiglani"/>
		<meta name="robots" content="index, follow"/>
		<meta name="googlebot" content="index, follow"/>

		
		  <base href="https://daksh.tech/"/><!--[if IE]></base><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <link href='https://fonts.googleapis.com/css?family=Raleway:800,900' rel='stylesheet' type='text/css'>
    
		<style>
			body {
				margin:0 10px;
				margin-top: 60px;
				background-color: #525659;
			}
			nav {
				height: 50px;
				display: block;
				background-color: #323639;
				box-shadow:0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
				position: fixed;
				top: 0;
				left: 0;
				right: 0;
				line-height: 50px;
				font-family: sans-serif;
				color: #fff;
				padding: 0 12px;
			}
			img.scr {
				background-color: #fff;
				box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.75);
				display: block;
				margin: 0 auto;
								max-width: calc(100% - 100px);
				padding: 50px;
							}
			img.icon {
				padding:0;
				margin:0;
				float:right;
				height: 27px;
				width: 27px;
				margin-top: 11px;
				margin-left: 11px;
			}
			img.icon:hover {
				opacity: .82;
			}
			img.icon:active {
				opacity: .66;
			}
			#fix {
				height: 10px;
				display: block;
			}
			a {
				color: inherit;
				text-decoration: none;
			}
			
			a:hover {
				text-decoration: underline;
			}
			
			a:active {
				opacity: .66;
			}
            #dm {
            
                font-size: 15px;
                font-family: Raleway;
                font-weight: 800;
                
            }
		</style>
	</head>
	<body>
		<nav>
			<a href="#" style="text-decoration:none;" id="dm">Daksh Miglani</a>
			<a title="Raw" target="_BLANK" href="/scr/?raw=1"><img draggable="false" src="https://daksh.tech/drive.png" class="icon" /></a>
			<a title="Download" href="/scr/?download=1"><img draggable="false" src="https://daksh.tech/download.png" class="icon" /></a>
						<a title="Fullscreen" href="/scr/?fullscreen=1"><img draggable="false" src="https://daksh.tech/fullscreen.png" class="icon" /></a>
					</nav>
		 <img class="scr" src="<?php echo str_replace('/scr/','/rawscr/',$_SERVER['REQUEST_URI']); ?>" alt="Screenshot" />
		<div id="fix"></div>
        
	</body>
</html>