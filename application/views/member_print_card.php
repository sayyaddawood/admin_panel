<style>
    .coltd {
     border: 0px solid;
     width: 10;
}

.coltd2 {
     border: 0px solid;
     
     width: 100;
}
</style>
<div class="row">
            <div class="col-md-12">                     
			   <table style="width: 100%; border: 1px solid;" border="1">
			        
			       <tr>
				<?php
				$rec = 1;
				foreach($MembersRecord as $row) {
				?>
				<td style="width: 236px; height: 220px; padding-top: 12px; border: 1px solid; vertical-align: top;">
				
				<table class="table" style="width: 88%; border: 0px solid;" border="0">
				<tbody style="font-size:0.55em;">
				<tr>
				<td rowspan="9" style="text-align:left; width: 5px;">
				</td>
				</tr>
				<tr>
				<td rowspan="9" style="text-align:center; width:2%; height: 150px; border: 0px solid;">
				    <img src="<?php echo base_url()?>appassets/card/imran.png" class="light-logo" height=175   />
				</td>
				</tr>
				<tr>
				 <td class="coltd2" colspan="2" style="text-align:left; font-size:13px; font-weight: 600;">
				     <span style="color: green;">Pakistan Tehreek-e-Insaf Sindh</span></td>
				</tr>
				<tr>
				 <td class="coltd2" colspan="2" style="text-align:left; padding-left:55px; font-size:11px; font-weight: 600;">
				     <span style="color: red;">Membership Card</span>
				     </td>
				</tr>
				<tr>
				 <td class="coltd" style="text-align:left;">Serial #</td>
				 <td class="coltd2" style="text-align:left;"><?php echo $row["member_RNO"]; ?></td>
				</tr>
				<tr>
				 <td class="coltd" style="text-align:left;">Name:</td>
				 <td class="coltd2" style="text-align:left;"><?php echo $row["name"]; ?></td>
				</tr>
				<tr>
				 <td class="coltd" style="text-align:left;">CNIC:</td>
				 <td class="coltd2" style="text-align:left;"><?php echo $row["cnic"]; ?></td>
				</tr>
				<tr>
				 <td class="coltd" style="text-align:left;">Address:</td>
				 <td class="coltd2" style="text-align:left;"><?php echo $row["address"]; ?></td>
				</tr>
				<tr>
				    <td colspan="2" style="">
					<img src="<?php echo base_url()?>appassets/card/membership.png" class="light-logo" width="180"  />
				    </td>
				</tr>
				</tbody>
			    </table>
				</td>
				<?php $rec++;
				
				if($rec > 2) {
				    echo '</tr><tr>';
				    $rec = 1;
				}
				
				} ?>
			       </tr>
			       
			       
			   </table>
            </div>
          </div>