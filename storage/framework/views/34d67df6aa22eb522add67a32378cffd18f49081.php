<div class="row overall_padding1 custom_border">
	
		
		<?php		
		$business_name1 = stripslashes(stripslashes(str_replace("'", "",trim($job->business_name))));
		//$business_name1 = str_replace(" ", "-",$business_name1);
		$business_name1 = str_replace(" ", "-",$business_name1);
		$business_name1 = str_replace("/", "-",$business_name1);
		$business_name1 = str_replace('"', "",$business_name1);
		//$landingurl = 'https://dashboard.idealtraits.com/career/'.$business_name1.'/'.$job->aliasurl .'BIG';
		$landingurl = 'https://app.idealtraits.com/career/'.$business_name1.'/'.$job->aliasurl .'BIG';
		$remotetype = '';
		if ($job->remote_type == 'Fully Remote' || $job->remote_type == 'Work from home flexibility' )
			$remotetype = 'Remote';
		else if ($job->remote_type == 'Temporarily remote due to COVID-19')
			$remotetype = 'Temporarily Remote';		
		?>
		
		<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) {  ?>
			<div class="col-12  d-flex justify-content-between col_pad" style="padding:0.5rem" >
				<div class="w-100">
					   <h5 class=" blue-text-color fw-bold mb-0"><?php echo $job->job_title; ?></h5>
					   <?php if(!empty($remotetype)): ?>
							<div class="d-flex   fw-bold business_name_flex"><p class="fw-bold business_name" style="margin-bottom:0px"><?php echo $job->business_name; ?></p><ul style="margin-bottom:0px"  class="job_ul"><li><span class="li_span"><?php echo $remotetype; ?></span></li></ul></div>
					   <?php else: ?>
						   <p class="fw-bold"><?php echo $job->business_name; ?></p>
					   <?php endif; ?>
				</div>
				<span class="text-center CTA-container"><a href="<?php echo $landingurl; ?>"  class="btn btn-secondary  modal-fixed apply_width " style="" target="_blank">Apply Now</a></span>
				<!--<span class="text-center CTA-container"><a href="#" onclick="showjoblandingpage(<?php echo $job->id; ?>,'<?php echo $landingurl; ?>')" class="btn btn-secondary  modal-fixed apply_width " style="" target="_blank">Apply Now</a></span>-->
			</div>		
		<?php } else { ?>
			<div class="col-12  d-flex justify-content-between col_pad"  >
				<div class="w-70">
				   <h5 class=" blue-text-color fw-bold mb-0"><?php echo $job->job_title; ?></h5>
					   <?php if(!empty($remotetype)): ?>
							<div class="d-flex   fw-bold business_name_flex"><p class="fw-bold business_name" style="margin-bottom:0px"><?php echo $job->business_name; ?></p><ul style="margin-bottom:0px" class="job_ul"><li><span class="li_span"><?php echo $remotetype; ?></span></li></ul></div>
					   <?php else: ?>
						   <p class="fw-bold"><?php echo $job->business_name; ?></p>
					   <?php endif; ?>
				</div>
				<span style="float:right;"><a href="<?php echo $landingurl; ?>" class="btn btn-secondary w-apply-btn-desk" style="" target="_blank">Apply Now</a></span>
				<!--<span style="float:right;"><a href="#" onclick="showjoblandingpage(<?php echo $job->id; ?>,'<?php echo $landingurl; ?>')" class="btn btn-secondary w-apply-btn-desk" style="" target="_blank">Apply Now</a></span>-->
			
			</div>		
		<?php }?>
		
	
</div>
<!-- newly added start -->
<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { 
} else { ?>
<div class="child1 job_details_desktop border p-3" style="padding-top:0px !important; padding-bottom:0px !important; border-top:0px !important;">
<?php }?>
<!-- newly added end -->
<div class="row even-background overall_padding1 " style="margin-left: -17px;">
	<div class="col-md-12 col_pad" >
		<?php
		
		
		$desc = $job->job_desc;
		if(strpos($desc, '&lt;') !== false){
			$desc = html_entity_decode($desc);
		}
		$job_benefits = $job->job_benefits;
		$job_benefits_val ='';
		if(strpos($job_benefits,"###")!== false){
			$job_benefits_arr = explode("###",$job_benefits);
			foreach($job_benefits_arr as $benefits) {    
				$job_benefits_val .= '<p style="margin-bottom: 0.25rem;">'.$benefits.'</p>';
			}
			$job_benefits = $job_benefits_val;
		} else {
			if(strpos($job_benefits, '&lt;') !== false){
				$job_benefits = html_entity_decode($job_benefits);
			} 
		}
		$job_resp = $job->job_resp;
		 if(strpos($job_resp, '&lt;') !== false){
			$job_resp = html_entity_decode($job_resp);
		}
		$job_requ = $job->job_requ;
		if(strpos($job_requ, '&lt;') !== false){
			$job_requ = html_entity_decode($job_requ);
		}
		$business_description = $job->business_description;
		if(strpos($business_description, '&lt;') !== false){
			$business_description = html_entity_decode($business_description);
		}
		$desc = str_replace('â€™',"'",$desc);
		$desc = str_replace('Â',"",$desc);
		$desc = str_replace('â',"",$desc);
		$desc = str_replace('€™',"'",$desc);
		$desc = str_replace('€',"",$desc);
		$desc = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $desc);
		$job_resp = str_replace('â€™',"'",$job_resp);
		$job_resp = str_replace('Â',"",$job_resp);
		$job_resp = str_replace('â',"",$job_resp);						
		$job_resp = str_replace('€™',"'",$job_resp);
		$job_resp = str_replace('€',"",$job_resp);
		$job_resp = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job_resp);
		$job_requ = str_replace('â€™',"'",$job_requ);
		$job_requ = str_replace('Â',"",$job_requ);
		$job_requ = str_replace('â',"",$job_requ);						
		$job_requ = str_replace('€™',"'",$job_requ);
		$job_requ = str_replace('€',"",$job_requ);
		$job_requ = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job_requ);
		if ($job_benefits != '' && $job_benefits !== NULL) {
			$job_benefits = str_replace('â€™',"'",$job_benefits);
			$job_benefits = str_replace('Â',"",$job_benefits);
			$job_benefits = str_replace('â',"",$job_benefits);						
			$job_benefits = str_replace('€™',"'",$job_benefits);
			$job_benefits = str_replace('€',"",$job_benefits);
			$job_benefits = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job_benefits);
		}
		
		/*$job->job_desc = str_replace('Â', ' ', $job->job_desc);
		$job->business_description = str_replace('Â', ' ', $job->business_description);
		$job->job_benefits = str_replace('Â', ' ', $job->job_benefits);
		$job->job_requ = str_replace('Â', ' ', $job->job_requ);
		$job->job_resp = str_replace('Â', ' ', $job->job_resp);*/
		
		//$job->job_desc = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job->job_desc); 
		//$job->business_description = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job->business_description);
		//$job->job_benefits = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job->job_benefits);
		//$job->job_requ = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job->job_requ);
		//$job->job_resp = preg_replace('/[^(\x20-\x7F)\x0A\x0D]*/','', $job->job_resp);
		?>
	   
		<?php if ($business_description != '' && $business_description !== NULL &&  $business_description != '&nbsp;') { ?>
		<p class="fw-bold mb-0">About <?php echo $job->business_name; ?></p>
		<p class="card-text"><?php echo $business_description; ?></p>
		<?php } ?>
		
		<?php if(!empty($desc) && !is_null($desc)): ?>
		
		<p class="fw-bold mb-0">Job Description</p>
		<p class="card-text"><?php echo $desc; ?></p>
		<?php endif; ?>
		<?php
		$sal = '';
		$salaryper = '';
				
		if($job->salary_range != ''  && $job->salary_range != '-'  && $job->salary_range != '.00-' && $job->salary_range != '0.00-' && $job->salary_range != '.00-.00'  && $job->salary_range != '0.00-0.00' && $job->salary_range !== NULL){
			$per_sal =  $job->salary_per;
			if($per_sal == 'HOUR'){
			   $salaryper = 'per hour';
			}else if($per_sal == 'DAY'){
				$salaryper = 'per day';
			}else if($per_sal == 'MONTH'){
				$salaryper = 'per month';
			}else if($per_sal == 'YEAR'){
				$salaryper = 'per year';
			}
			
			$sal = $job->salary_range;
			
			if (strpos($job->salary_range, '-') !== false) {
				$job_salary = explode("-",$job->salary_range); 
				$sal = $job_salary[0];
				if ($sal != ''  && $sal != 'NaN') {
					$sal = number_format($sal,2,'.',',');
				}
				//$sal = number_format($sal,2,'.',',');
				if ($job_salary[1] != ''   && $job_salary[1] != 'NaN')
					$sal .=' - $'.number_format($job_salary[1],2,'.',',');
			}
			
		}		
		?>
		<?php if(!empty($sal) && !is_null($sal) && $sal != 'NaN' ): ?>		
		<!--<div class="d-flex"><h6 class="">Salary Range: </h6><span class=""> <?php echo '$'.$sal.' '.$salaryper; ?></span></div> -->
		<p class=""><span class="fw-bold">Salary Range: </span><span class="salary_text_color"> <?php echo '$'.$sal.' '.$salaryper; ?></span></p> 
		<?php endif; ?>
		<?php if(!empty($job->remote_type) && !is_null($job->remote_type)): ?>
			<?php if($job->remote_type == 'Temporarily remote due to COVID-19'): ?>
				<p class="">Work remotely temporarily due to COVID-19</p>
			<?php elseif( $job->remote_type == 'Work from home flexibility'): ?>
				<p class="">Flexible work from home options available</p>
			<?php elseif( $job->remote_type == 'Fully Remote'): ?>
				<p class="">Fully Remote</p>
			<?php endif; ?>		
		<?php endif; ?>
		<?php if(!empty($job_benefits) && !is_null($job_benefits)): ?>
		<p class=" fw-bold mb-0">Benefits</p>
		<p class="mb-0"><?php echo $job_benefits; ?></p>
		<?php endif; ?>
		<?php if(!empty($job_requ) && !is_null($job_requ)): ?>
		<p class="fw-bold mb-0">Requirements</p>
		<p class="mb-0"><?php echo $job_requ; ?></p>
		<?php endif; ?>
		<?php if(!empty($job_resp) && !is_null($job_resp)): ?>
		<p class="fw-bold mb-0">Responsibilities</p>
		<p class="mb-0"><?php echo $job_resp; ?></p>
		<?php endif; ?>		
	</div>
</div>
<!-- newly added start -->
<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { 
} else { ?>
</div>
<?php }?>
<!-- newly added end --><?php /**PATH /var/www/html/bigijobs/resources/views/bigijobs/job_details.blade.php ENDPATH**/ ?>