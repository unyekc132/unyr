<?php
                        
							$no_photo_url='http://s0.radioheart.ru:8000/json.xsl?mount=/RH29126';
                            $width='100'; //ширина картинки
                            $height='100';  //высота картинки
							
                            $data = json_decode(file_get_contents("http://s0.radioheart.ru:8000/json.xsl?mount=/RH29126"));
                            if (!count($data->mounts) || strlen($data->mounts[0]->server_name) < 2) {
                            $data = json_decode(file_get_contents("http://s0.radioheart.ru:8000/json.xsl?mount=/nonstop"));
                            }
                            $stream_title = $data->mounts[0]->server_name;
                            
                            $stream_description = $data->mounts[0]->description;
                            $listeners = $data->mounts[0]->listeners;
                            $song = $data->mounts[0]->title;
                            
           
                            $artist = explode(" - ", $song);
                            $artist = $artist[0];
                           $artist = str_replace(" ", " ", $artist);
                           $size = "large";
                            ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><? print $song; ?></title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->

<div class="mhn-player">
<div class="album-art"></div>
<div class="play-list">
	<a href="#" class="play"
		data-title="<?=$song;?>"
		data-albumart="https://yt3.ggpht.com/a/AATXAJx9f_tqDPYZDbzLEIUQ6FxJsV3A5SdGLSiDcA=s900-c-k-c0xffffffff-no-rj-mo"
		data-url="http://s0.radioheart.ru:8000/RH29126"></a>

	
</div>
<div class="audio"></div>
<div class="current-info">
	<div class="song-title"></div>
</div>
<div class="controls">
<div class="duration clearfix">
	
	
</div>
<div class="progress"><div class="bar"></div></div>

<div class="action-button">
	<a href="#" class="play-pause"><i class="fa fa-pp"></i></a>
	<a href="#" class="stop"><i class="fa fa-stop"></i></a>
	<input type="range" class="volume" min="0" max="1" step="0.1" value="0.5" data-css="0.5">
</div>


</div>
</div>

</body>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://enscrollplugin.com/releases/enscroll-0.6.1.min.js'></script><script  src="./script.js"></script>

</body>
</html>
