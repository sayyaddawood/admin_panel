<style>
    table td, table td * {
     border: 0px solid;
}
</style>          

<div class="row">
            <div class="col-md-12">                     
			   <table style="width: 100%; border: 0px solid;" border="1">
			        <?php
				$rec = 1;
				foreach($MembersRecord as $row) {			    
				 //   if($rec > 5) {
			//		exit;
			//	    }
				?>
			       <tr>
				<td style="width: 236px; height: 220px; padding-top: 12px; vertical-align: top;">
				
				<table class="table" style="width: 100%; border: 0px solid;" border="0">				
				<tbody style="font-size:0.55em;">
				<tr>
				<td rowspan="9" style="text-align:left;">
				    <img src="<?php echo base_url()?>appassets/card/imran.png" class="light-logo" height=175" width="110"  />
				</td>			
				</tr>
				<tr>
				 <td colspan="2" style="text-align:left; font-size:13px; font-weight: 600;">Pakistan Tehreek - e - Insaf Sindh</td>
				</tr>
				<tr>
				 <td colspan="2" style="text-align:left; padding-left:55px; font-size:11px; font-weight: 600;">Membership Card</td>
				</tr>
				<tr>
				 <td style="text-align:left;">Serial #</td>
				 <td style="text-align:left;"><?php echo $row["member_RNO"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">Name:</td>
				 <td style="text-align:left;"><?php echo $row["name"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">CNIC:</td>
				 <td style="text-align:left;"><?php echo $row["cnic"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">Address:</td>
				 <td style="text-align:left;"><?php echo $row["address"]; ?></td>
				</tr>
				<tr>
				    <td colspan="2">
					<img src="<?php echo base_url()?>appassets/card/membership.png" class="light-logo" width="180"  />
				    </td>
				</tr>
				</tbody>
			    </table>
				</td>
				<td style="width: 236px; height: 220px; padding-top: 12px; vertical-align: top;">
				   
				 <table class="table" style="width: 100%; border: 0px solid;">
				
				<tbody style="font-size:0.55em;">
				<tr>
				<td rowspan="9" style="text-align:left;">
				    <img src="<?php echo base_url()?>appassets/card/imran.png" class="light-logo" height=175" width="110"  />
				</td>			
				</tr>
				<tr>
				 <td colspan="2" style="text-align:left; font-size:13px; font-weight: 600;">Pakistan Tehreek - e - Insaf Sindh</td>
				</tr>
				<tr>
				 <td colspan="2" style="text-align:left; padding-left:55px; font-size:11px; font-weight: 600;">Membership Card</td>
				</tr>
				<tr>
				 <td style="text-align:left;">Serial #</td>
				 <td style="text-align:left;"><?php echo $row["member_RNO"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">Name:</td>
				 <td style="text-align:left;"><?php echo $row["name"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">CNIC:</td>
				 <td style="text-align:left;"><?php echo $row["cnic"]; ?></td>
				</tr>
				<tr>
				 <td style="text-align:left;">Address:</td>
				 <td style="text-align:left;"><?php echo $row["address"]; ?></td>
				</tr>
				<tr>
				    <td colspan="2">
					<img src="<?php echo base_url()?>appassets/card/membership.png" class="light-logo" width="195"  />
				    </td>
				</tr>
				</tbody>
			    </table>
				</td>
			       </tr>
			       
			       <?php $rec++; } ?>
			   </table>
            </div>
          </div>