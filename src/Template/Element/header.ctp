<? $pustyadres=str_replace(array('/?adminlang=en', '/?adminlang=pl','?adminlang=en', '?adminlang=pl','/?adminlang=ru', '/?adminlang=de','?adminlang=ru', '?adminlang=de'), '', $_SERVER['REQUEST_URI']); ?>
<div class="container-fluid"><div class="row"><div class="col-md-2 col-md-offset-5 margin-top-20 text-center" style="margin-top:20px;"><a href="/panel" class="center-block"><img src="/img/logoAkcja.png"   style="width: 120px"></a></div> 
</div>

</div>
<div class="row"><div class="col-md-12  margin-bottom-50" style="margin-bottom: 50px; margin-top:0px;"><div class="btn-group text-center btn-group-justified btn-group-simple margin-top-50 margin-bottom-50" role="group" aria-label="...">
		 <div class="btn-group" role="group"> <a type="button" href="/panel/" class="btn btn-default btn-sm <?=$adminStreamsActive?>">Nasze streamy</a></div>  

	 <div class="btn-group" role="group"> <a type="button" href="/panel/userstreams" class="btn btn-default btn-sm <?=$userStreamsActive?>">Przesłane streamy</a></div>   
  
 
  <div class="btn-group" role="group"> <a type="button" href="/users/logout" class="">Wyloguj</a></div>

</div></div></div></div>
<input type="hidden" value="<?=$sid?>" id="sid">
<input type="hidden" value="<?=$xdbf?>" id="xdbf">
<style>
	.wersjeWrap {
		position: absolute;
		right:0px;
		top:0px;
		padding: 10px;
		text-align: center;
		border: 1px solid #000;
		border-width: 0px 0px 1px 1px;
	}
	.wersje a {
		color:#000;
		font-size: 14px;
		display: inline-block;
		padding: 2px 5px;
	}
	.wersje a.active {
		background: #000;
		color:#fff;
	}
	</style>