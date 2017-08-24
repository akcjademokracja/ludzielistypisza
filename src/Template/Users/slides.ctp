<div class="container">
	<div class="margin-bottom-20 text-center "><a class="btn btn-success" href="/panel/slide_add">Dodaj slide</a>
	
	
	</div>
	<div class="row" style="background-color:#333; height:30px; line-height:30px; color:#fff; margin-bottom:5px;">
		<div class="col-md-1">
		<strong>Zdjęcie</strong>
		</div>
		<div class="col-md-4">
		<strong>Tekst większy</strong>
		</div> 
			<div class="col-md-4">
		<strong>Tekst mniejszy</strong>
		</div> <div class="col-md-1"><strong>Kolejność</strong></div>
 		<div class="col-md-2 text-right">
		<strong>Zmiany</strong>
		</div>
		
	</div>
		
		
		<? foreach ($slides as $slide) { ?>
<div class="row slidesrow" id="slideRow<?=$slide['id']?>">
	<div class="col-md-1">
	<img src="/phots/slides/<?=$slide['id']?>Thumb.jpg?ti=<?=time()?>" style="height:30px">
 	</div>
	<div class="col-md-4 text-ellipsis">
		<a class="no-margin-top h5 no-margin-bottom text-ellipsis" href="/panel/slide_edit/<?=$slide['id']?>"><?=$slide['title'.al.'']?></a>
	</div>  
 	<div class="col-md-4 text-ellipsis">
		<a class="no-margin-top h5 no-margin-bottom text-ellipsis" href="/panel/slide_edit/<?=$slide['id']?>"><?=$slide['moretext'.al.'']?></a>
	</div>  
	<div class="col-md-1">
		<input class="form-control kolejnosc text-center input-sm" name="<?=$slide['id']?>" value="<?=$slide['kolejnosc']?>">
	</div>
	<div class="col-md-2 text-right" style="padding-left:0px; padding-right:0px;">
		
		<a onclick="javascript:removeSlide(<?=$slide['id']?>)" class="btn text-danger " style="margin-right:10px"><i class="fa fa-remove"></i></a>
		 		
		
		<a onclick="javascript:activateSlide(<?=$slide['id']?>)" id="activateSlideBtn<?=$slide['id']?>" class="btn   btn-<? if ($slide['published']==0) { echo 'default'; } else { echo 'success active'; }; ?> btn-sm" style="margin-right:10px"><i class="fa fa-bookmark"></i></a>
<!-- 	<a onclick="javascript:generujPdf(<?=$wyjazd['Trip']['id']?>)" class="btn btn-default btn-sm" style="margin-right:10px"><i class="fa fa-file-pdf-o"></i></a> -->

 		<a href="/panel/slide_edit/<?=$slide['id']?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
	</div>
	
</div>



<? } ?></div>
<style>
	.no-margin-bottom {
		margin-bottom:0px;
	}
	.subgalhover {
		display: inline-block;
		padding: 0px 2px;
		text-align: center;
	}
	.subgalhover:hover {
		border-radius:100%;
		background-color:#cc0000;
		color:#fff;
	}
	.starbtn {
		cursor: pointer;
		color:#ccc;
	}
	.starbtn.active {
		color:green;
	}
	.starbtn:hover {
		color:#000;
	}
	.slidesrow:nth-child(even) { 
		background:#efefef;
	}
	.no-margin-top {
		margin-top:0px;
	}
	.slidesrow {
		min-height: 40px;
		line-height: 40px;
 		padding: 5px 0px;
		
	}
	.slidesrow div, .slidesrow h5, .slidesrow .h4, .slidesrow h5, .slidesrow .btn.btn-sm  {
		 height: 30px;
		line-height: 30px;
		margin-bottom: 0px;
		margin-top: 0px;
		padding-top:0px;
		padding-bottom:0px;
	}
	</style>
 
	 