<?php
$url = esc_url( home_url( '/' ));
$templtpath= get_template_directory_uri(); 
?>
<div class="midcol">
<div class="dashbg" style="margin-top: -48px;">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="dashmid">
<div class="dashmidh">
<h2>upload documents</h2>
</div>
 <?php $this->display_flash(); ?>
<div class="row-fluid">
	<div>
		<h1>How to upload documents</h1>
		<ol>
			<li>Click "Choose file" button</li>
			<li>Choose file to upload</li>
			<li>Click "Upload documents" button</li>
		</ol>
	</div>
	<p>
		Please upload as many as you can...don't worry you can come back later.
	</p>
	<div>
	<form class="form-horizontal" enctype="multipart/form-data" style="border:1px sold green" action="<?php echo $url;?>locums/uploaddocuments"  method="post">
		<input type="hidden" name="sId" value="<?php echo $this->params['id'];?>"/>
   
    
<div class="panel-body">
	<div class="row">
		<div class="xs-responsive-table">
			<h4><strong>Documents you need to get approved</strong></h4>
			
			<p>Awaiting documents</p>
			
			<table class="table table-hover table-striped">

			<?php
			$sId =  $this->params['id'];
			?>
			<?php if (isset($this->params['id'])) { ?>
 				<tr> 
					<td data-label="Type"><?php echo $lable_array[$sId]; ?></td>
  					<td class="xs-full-width-button action-buttons">
						<div class="hidden-xs">
				 	<input type="file" name="<?php echo $documentList[$sId];?>" id="<?php echo $documentList[$sId];?>" />
						</div>
					 </td> 
				</tr>
				<?php } ?>
 
  	
			<tr>
			<td> <input type="submit" name="submut" value="submit"/> </td>
			</tr>	 
				
		  
		 	</table>
		  
		</div>
				</div>
			</div>
		</form>
		  
	</div>
	</div>
	</div>
		  
	</div>
	</div>
		</div>
				</div>
  
	<!--middle end here-->
