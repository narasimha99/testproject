<div id="settimerates">
<?php
echo "<pre>"; print_r($_POST); echo "</pre>";
if (isset($_POST['session_date_range']))
$dateranges  = $_POST['session_date_range'];
$daterangeList = explode(",",$dateranges);
?>
<?php 
$i=1;
foreach($daterangeList as $sessiondate) {
?>

<div id="<?php echo 'DIVsessionday'.$i;?>" style="border-style: solid; border-color: 	#00CED1;margin:50px 10px 20px 30px">

<table id="<?php echo 'TABLEsessionday'.$i;?>" style="border:1px solid #DAA520;" width="auto"  >
		<tr> <td>
	 <input type="text" id="<?php echo 'session_date_'.$i;?>" name="session_date[<?php echo $i;?>]" value="<?php echo $sessiondate;?>" />  
		<input type='button' name="add" id="<?php echo 'add'.$i;?>" value="add more sessions" onclick="addsession(<?php echo $i;?>);"/>
		<input type='button' name="delete" id="<?php echo 'delete'.$i;?>" value="Delete day" onclick="deletedate(<?php echo $i;?>);"/>
	</td> </tr>

	<tr class='sessiontime' id='times1'> <td>Session 1 Enter session times using 24 hour notation (eg. 10:00, 18:00). <br/>  <span> Time</span> <input type="text" name="session_starttime[<?php echo $i;?>][1]" id="<?php echo 'session_starttime_'.$i.'_1';?>" value="<?php echo $_POST['session_starttime'][1][1];?>"  placeholder='eg: 09:00' />	<span>Till</span> <input type="text" name="session_endtime[<?php echo $i;?>][1]" id="<?php echo 'session_endtime_'.$i.'_1';?>"  value="<?php echo $_POST['session_endtime'][1][1];?>" placeholder='eg: 17:00'  />  <span>Hourly rate £</span> 
<input type="text" name="hourlyrate[<?php echo $i;?>][1]" id="<?php echo 'hourlyrate_'.$i.'_1';?>" myid="<?php echo '_'.$i.'_1';?>" value="<?php echo $_POST['hourlyrate'][1][1];?>"   onblur="gethourlyrate(<?php echo $i;?>,1)"  placeholder='eg: 80.00' /> 
<input type='button' class='deltimesession' name='delete'  class='deltimesession' id="1" value='delete' onclick="$(this).closest('tr').remove();"  /> 
</td> </tr>
<?php
//echo count($_POST['session_starttime']) ;

for($j=2; $j <= count($_POST['session_starttime'][$i]) ; $j = $j + 1 )
{
?>
<tr class='sessiontime' id="times<?php echo $j;?>">
<td>Session <?php echo $j;?> Enter session times using 24 hour notation (eg. 10:00, 18:00).
<br/>  <span> Time</span> <input type="text" name="session_starttime[<?php echo $i;?>][<?php echo $j;?>]" id="<?php echo 'session_starttime_'.$i.'_'.$j;?>" value="<?php echo $_POST['session_starttime'][$i][$j];?>"  placeholder='eg: 09:00'/>	<span>Till</span>
<input type="text" name="session_endtime[<?php echo $i;?>][<?php echo $j;?>]" id="<?php echo 'session_endtime_'.$i.'_'.$j;?>"  value="<?php echo $_POST['session_endtime'][$i][$j];?>" placeholder='eg: 17:00'  />  <span>Hourly rate £</span> 
<input type="text" name="hourlyrate[<?php echo $i;?>][<?php echo $j;?>]" id="<?php echo 'hourlyrate_'.$i.'_'.$j;?>" myid="<?php echo '_'.$i.'_'.$j;?>" value="<?php echo $_POST['hourlyrate'][$i][$j];?>"   onblur="gethourlyrate(<?php echo $i;?>,<?php echo $j;?>)"  placeholder='eg: 80.00' /> 
<input type='button' class='deltimesession' name='delete'  class='deltimesession' id="<?php echo $j;?>" value='delete' onclick="$(this).closest('tr').remove();"  /> 
</td> </tr>

<?php
$j = $j + 1;
}
?> 

</table>


<div>
<?php 
$paytolocums = (isset($_POST['paytolocums'][$i-1]))?$_POST['paytolocums'][$i-1]:0;
$medbidfee = (isset($_POST['medbidfee'][$i-1]))?$_POST['medbidfee'][$i-1]:0;
?>
	<p> <span> Pay to locum</span>  <span id="paytolocumspan"></span> <input type="text" class="paytolocum" name="paytolocums[]" id="<?php echo 'paytolocum_'.$i;?>"  value="<?php echo $paytolocums;?>" /> </p>
	<p> <span> Medbid Locum fees (15% of locum fees)</span> <span id="networklocumfee"></span> 
		<input type="text" value="<?php echo $medbidfee;?>" name="medbidfee[]" id="<?php echo 'medbidfee_'.$i;?>"  />  
	</p>
</div>

</div>

<?php
$i= $i + 1;
 } 
?>
</div>
