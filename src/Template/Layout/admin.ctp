<!DOCTYPE html>
 <html xmlns:fb="http://ogp.me/ns/fb#" lang="pl">
 <head>

<meta http-equiv="Content-Language" content="pl,en">
 <title>Łanćuch Światła - zarządzanie</title>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta content="" name="description"/>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <!-- Update your html tag to include the itemscope and itemtype attributes -->
   

 <? 
  ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes" />
  
 
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <?= $this->Html->css('clearer.css') ?>
  <?= $this->Html->css('layout.css') ?>
  <link rel="stylesheet" href="/css/admin.css">

    <!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]--> 
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]--> 
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]--> 
<!--[if gt IE 8]><!--> <html lang="pl-PL" class="no-js"> <!--<![endif]--> 


 <!--[if IE 7]> <link type="text/css" rel="stylesheet" href="/css/new_juneie8.css"><![endif]--> 
  <!--[if IE 8]> <link type="text/css" rel="stylesheet" href="/css/new_juneie8.css"><![endif]--> 

<!--[if IE 9]><!-->  <!--<![endif]--> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     
</head> 
<? if ($nologin) { ?>
<div class="container" style="margin-top:200px">
		<div class="h2 text-center text-300">Zaloguj się</div>
		
	<div class="row">
		<div class="col-md-2 col-md-offset-5"> 
<form action="/users/login" method="POST">
<input name="username" placeholder="Login" class="form-control"><br/>
<input name="password" placeholder="hasło" class="form-control"><br/>
<button class="btn btn-default margin-top-20" type="submit">ZALOGUJ</button>	
	
</form>
	</div></div></div> 
<? } else { ?>
<?=$this->element('header')?>
<?=$this->fetch('content')?>
<input id="sid" value="<?=$sid?>" type="hidden">
<input id="xdbf" value="<?=$xdbf?>" type="hidden">
  <? }; ?>
 <br/><br/><br/><br/>
<script>
	var sid='<?=$sid?>';
	var xdbf='<?=$xdbf?>';
	</script>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <link href="/css/clearer.css" rel="stylesheet" type="text/css" />

<? if ($addtextskrypt) { ?>

  <link href="/css/3rd/froala/froala_editor.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/3rd/froala/froala_style.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/3rd/froala/froala_content.min.css" rel="stylesheet" type="text/css" />

<!-- CSS rules for styling the block tags such as p, h1, h2, etc. -->
 
<script src="/js/3rd/froala/froala_editor.min.js"></script>
<script src="/js/3rd/froala/plugins/tables.min.js"></script>
<script src="/js/3rd/froala/plugins/colors.min.js"></script>
<script src="/js/3rd/froala/plugins/font_size.min.js"></script>
<script src="/js/3rd/froala/plugins/fullscreen.min.js"></script>
<script src="/js/3rd/froala/plugins/lists.min.js"></script>
<script src="/js/3rd/froala/plugins/media_manager.min.js"></script>
 <script src="/js/3rd/froala/plugins/video.min.js"></script> 
  <script src="/js/3rd/froala/plugins/icons1.js"></script> 
<?} ?>
<? if ($checkboxskrypt) {?>
 <script src="/js/3rd/checkbox/bootstrap-checkbox.min.js"></script> 



<? } ?>
<? if ($dateskrypt) {?>
<link rel="stylesheet" href="/css/3rd/datepicker/bootstrap-datetimepicker.min.css">


  <script src="/js/3rd/datepicker/moment.js"></script> 
 <script src="/js/3rd/datepicker/pl.js"></script> 
 <script src="/js/3rd/datepicker/bootstrap-datetimepicker.js"></script> 

 
<? } ?>
  <? if ($addphotoskrypt) { 
	  ?>
	  
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="/css/3rd/fileupload/jquery.fileupload.css">
<link rel="stylesheet" href="/css/3rd/fileupload/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="/css/3rd/fileupload/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="/css/3rd/fileupload/jquery.fileupload-ui-noscript.css"></noscript>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Wysyłanie...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name" name="{%=file.name%}">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Usuń</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Anuluj</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/js/3rd/fileupload/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
 <!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/js/3rd/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="/js/3rd/fileupload/jquery.fileupload-ui.js"></script>


<?
  } ?>
   <? if ($skrypt) { 
	 foreach ($skrypt as $s) { 
	 ?> <script language="javascript" type="text/javascript" src="/js/<?=$s?>.js"></script>

<? } }; ?>


 