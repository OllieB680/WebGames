<!DOCTYPE html>
<?php session_start();
      include_once("../controller/routing.php"); ?>

<html lang="en-us">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Atomic Games | Impossible Survival Game</title>
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
	<script src="TemplateData/UnityProgress.js"></script>
	
	<?php
	include_once("../content/header.php");
	?>
	
  </head>
  
  <body class="template">
    <div class="template-wrap clear" style="margin-top:80px;">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="500px" width="960px"></canvas>
      <br>
      <div class="logo"></div>
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
      <div class="title">Atomic Games | Impossible Survival Game</div>
    </div>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "Release/GameUniGL.data",
    codeUrl: "Release/GameUniGL.js",
    asmUrl: "Release/GameUniGL.asm.js",
    memUrl: "Release/GameUniGL.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>
  </body>
</html>