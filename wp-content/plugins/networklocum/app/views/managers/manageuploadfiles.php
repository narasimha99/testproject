<?php $url = esc_url( home_url( '/' )); ?>
	<!--middle start here-->
 	<div class="midcol">
		<div class="container">
		<div class="row">
		<div class="col-md-12">  
		<div class="aligncenter">
		<h2 class="text1">Manage Uploaded documents</h2>
		</div>	
		</div>
		</div>
		<div class="row">
 		  
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
        		<thead class="cf">
        			<tr>
        				<th>S No</th>
        				<th>Locum Details</th>
 					<th colspan="25">Documents Status
						<br> 0 - Not at Uploded
					        <br> 1 - Waiting for approve 
						<br> 2 - Approved
						<br> 3 - Rejected 
					</th>
					<th> Verify documents </th>
         			</tr>

        		</thead>
        		

<?php
$i  =1;
foreach($Locumdocuments as $document) { 
 
	$locumName =  $document->firstname;
 
?>
<tr>
<td data-title="Code"><?php echo $i;?></td>

<td data-title="Code"> <a href="#"><?php echo $locumName; ?> </a> </td>

<td data-title="Company"> <?php echo $document->certificate_completion_training;?> </td>
        				
<td data-title="Company"> <?php echo $document->passports_photo;?> </td>
        				
<td data-title="Company"> <?php echo $document->cv;?> </td>
        				
<td data-title="Company"> <?php echo $document->crb_check;?> </td>
        				
<td data-title="Company"> <?php echo $document->mdu;?> </td>
        				
<td data-title="Company"> <?php echo $document->diptheria;?> </td>
        				
<td data-title="Company"> <?php echo $document->poliomyelitis;?> </td>
        				
<td data-title="Company"> <?php echo $document->basiclifesupport;?> </td>
        				
<td data-title="Company"> <?php echo $document->tuberculosis;?> </td>
        				
<td data-title="Company"> <?php echo $document->safeguarding_children;?> </td>
        				
<td data-title="Company"> <?php echo $document->my_references;?> </td>
        				
<td data-title="Company"> <?php echo $document->safeguarding_adults;?> </td>
        				
<td data-title="Company"> <?php echo $document->current_performers_list;?> </td>
        				
<td data-title="Company"> <?php echo $document->hepatitis_b;?> </td>
        				
<td data-title="Company"> <?php echo $document->varicella_chicken;?> </td>
        				
<td data-title="Company"> <?php echo $document->rubella;?> </td>
        				
<td data-title="Company"> <?php echo $document->last_appraisal;?> </td>
        				
<td data-title="Company"> <?php echo $document->immunisation_history;?> </td>
        				
<td data-title="Company"> <?php echo $document->information_governance_certificates;?> </td>
        				
<td data-title="Company"> <?php echo $document->tetanus;?> </td>
        				
<td data-title="Company"> <?php echo $document->righttoworkin_uk;?> </td>
        				
<td data-title="Company"> <?php echo $document->rcgp_substance_misuse;?> </td>
        				
<td data-title="Company"> <?php echo $document->mmr;?> </td>
        				
<td data-title="Company"> <?php echo $document->myterms_conditions;?> </td>
        				
<td data-title="Company"> <?php echo $document->gmc_certificate;?> </td>
<td data-title="Company">  

<a href="<?php echo $url.'managers/verifydocuments/'.$document->user_id;?>" class="btn btn-primary aplbtn" title="verify documents">verify documents</a>
 </td>

</tr>
<?php 
$i= $i+1;
}
?>
        		</tbody>
        	</table>
	</div>
	</div>
	</div>
	<div>
	</div>
