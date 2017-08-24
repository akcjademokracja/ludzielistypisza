<div class="container-fluid">
	<div class="row">
	 
		<div class="col-md-12">
	<div class="inputNameWrap"><h1 class="">Wydarzenia</h1></div>
 
 	<div class="row" style="background-color:#333; height:30px; line-height:30px; color:#fff; margin-bottom:20px;">
 		<div class="col-md-4">
			<strong>Nazwa</strong>
		</div>
		<div class="col-md-4 text-center">
			<strong>Link</strong>
		</div>
		<div class="col-md-2 text-center">
			<strong>id</strong>
		</div>	 
		 	<div class="col-md-1 text-center">
			<strong>Kolejnosc</strong>
		</div>  
		 
			<div class="col-md-1 text-center">
			<strong>Publ/Usuń</strong>
		</div>  
	</div>
	
	<? foreach ($events as $event) { 
	?>
	<div class="row form-group eventrow" id="eventRow<?=$event['id']?>">
	<div class="col-md-4"><input placeholder="Nazwa" class="form-control toupdate" data-name="name" data-id="<?=$event['id']?>" value="<?=$event['name']?>"></div>
	<div class='col-md-4'><input placeholder="Adres" class="form-control toupdate" data-name="address" data-id="<?=$event['id']?>" value="<?=$event['linka']?>"></div>
		<div class="col-md-1"><input placeholder="Kolejnosc" class="form-control toupdate" data-name="kolejnosc" data-id="<?=$stream['id']?>" value="<?=$event['kolejnosc']?>"></div>

 	 
        <div class="col-md-1">
		
		<a onclick="javascript:activateSlide(<?=$event['id']?>)" id="activateSlideBtn<?=$event['id']?>" class="btn   btn-<? if ($event['active']==0) { echo 'default'; } else { echo 'success active'; }; ?> btn-sm" style="margin-right:10px"><i class="fa fa-bookmark"></i></a>
		
		<button class="removestream btn btn-danger" data-id="<?=$event['id']?>"><i class="fa fa-remove"></i></button></div>
 </div>


	<?
		} ?>
		
		
		
		
		
		
 
<form id="streamsform"> 	
	
	
	
	
</form>

 <div class="text-center margin-top-30">
<button class="btn btn-success" id="dodajkolejne"><i class="fa fa-plus"></i> Dodaj kolejne</button>	
	<button class="btn btn-primary btn-lg hide" onclick="javascript:zapiszStreamy()" data-html="true" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Trwa dodawanie'" data-complete-text="<i class='fa fa-check'></i> Dodane, przeładuję" id="zapiszdodane"><i class="fa fa-gavel"></i> Zapisz nowe streamy</button>	

<div class="hide" id="dododania">
	<div class="row form-group addstreamrow">
	<div class="col-md-5"><input placeholder="Nazwa" class="form-control" name="streamname[]" data-name="name" data-id=""></div>
	<div class='col-md-5'><input placeholder="Adres" class="form-control" data-name="address" name="streamaddress[]" data-id="" ></div>
		<div class="col-md-1"><input placeholder="Kolejnosc" class="form-control" data-name="kolejnosc" name="streamkolejnosc[]" ></div>
 <div class="col-md-1">
		 		<button class="removerow btn btn-danger" ><i class="fa fa-remove"></i></button></div>
 </div>
 

 </div></div></div>
	
</div>
</div>