<div class="container-fluid">
	<div class="row">
	 
		<div class="col-md-12">
	<div class="inputNameWrap"><h1 class="">Streamy dodane przez nas</h1></div>
 
 	<div class="row" style="background-color:#333; height:30px; line-height:30px; color:#fff; margin-bottom:20px;">
 		<div class="col-md-5">
			<strong>Nazwa</strong>
		</div>
		<div class="col-md-5 text-center">
			<strong>Adres</strong>
		</div>
			 
		 	<div class="col-md-1 text-center">
			<strong>Kolejnosc</strong>
		</div>  
		 
			<div class="col-md-1 text-center">
			<strong>Publ/Usuń</strong>
		</div>  
	</div>
	
	<? foreach ($streams as $stream) { 
	?>
	<div class="row form-group streamrow" id="streamRow<?=$stream['id']?>">
	<div class="col-md-5"><input placeholder="Nazwa" class="form-control toupdate" data-name="name" data-id="<?=$stream['id']?>" value="<?=$stream['name']?>"></div>
	<div class='col-md-5'><input placeholder="Adres" class="form-control toupdate" data-name="address" data-id="<?=$stream['id']?>" value="<?=$stream['address']?>"></div>
		<div class="col-md-1"><input placeholder="Kolejnosc" class="form-control toupdate" data-name="kolejnosc" data-id="<?=$stream['id']?>" value="<?=$stream['kolejnosc']?>"></div>

 	 
        <div class="col-md-1">
		
		<a onclick="javascript:activateSlide(<?=$stream['id']?>)" id="activateSlideBtn<?=$stream['id']?>" class="btn   btn-<? if ($stream['active']==0) { echo 'default'; } else { echo 'success active'; }; ?> btn-sm" style="margin-right:10px"><i class="fa fa-bookmark"></i></a>
		
		<button class="removestream btn btn-danger" data-id="<?=$stream['id']?>"><i class="fa fa-remove"></i></button></div>
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