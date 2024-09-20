
<?php $__env->startSection('css'); ?> 
<style>
.dataTables_filter { display: none; }

/*a.paginate_button.current {
    background: #FFFFFF !important;
    color: #49B8F2 !important;
    border: 1px solid #CADBEC !important;
    border-radius: 8px !important;
    padding: 6px 14px !important;
}
.dataTables_paginate, .dataTables_length {
	text-align: center;
	width:100%;
}
a.paginate_button {
    position: relative !important;
    font-weight: 700 !important;
    padding: 6px 14px !important;
    margin-left: -1px !important;
    line-height: 1.42857143 !important;
    color: #4B6C8B ;
    text-decoration: none !important;
    transition: all 0.25s ease !important;
} 
a.paginate_button:active {
     color: #49b8f2 !important;
 }
a.paginate_button:hover {
     color: #49b8f2 ;
	 cursor:pointer;
 }*/
 a.paginate_button.current {
    background: #FFFFFF !important;
    color: #202A5B !important;
    border: 1px solid #202A5B !important;
    border-radius: 8px !important;
    padding: 6px 14px !important;
}
.dataTables_paginate, .dataTables_length {
	text-align: center;
	width:100%;
}
a.paginate_button {
    position: relative !important;
    font-weight: 700 !important;
    padding: 6px 14px !important;
    margin-left: -1px !important;
    line-height: 1.42857143 !important;
    color: #4B6C8B ;
    text-decoration: none !important;
    transition: all 0.25s ease !important;
} 
a.paginate_button:active {
     color: #202A5B !important;
 }
a.paginate_button:hover {
     color: #202A5B ;
	 cursor:pointer;
 }
 .dataTables_length {
	 padding-top:20px;
 }
.dataTables_length select {
	color: #4b6c8b;
    font-weight: 550;
    font-size: 13px;
	border: 0;
	display: inline-block;
    max-width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.25;
	vertical-align: middle;
	-webkit-background-size: 8px 10px;
    background-size: 8px 10px;
    border: 1px solid #cadbec;
    border-radius: .25rem;
    -moz-appearance: none;
    -webkit-appearance: none;
	background: #fff url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' v…'0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E) no-repeat right .75rem center;

 }
option {
	 padding: 5px !important;
 }

.m-b{
	margin-bottom: 30px;
}
.p-t{
	padding-top:30px;
}
.pad0{
	padding: 0.75rem 0rem !important
}
.table td, .table th, .table tr{
	border: 0px;
}
table.dataTable.no-footer { border-bottom: none !important; }

.show_more,.show_less{
  cursor:pointer;
}
.read-more-hide{
  cursor:pointer;
  color: #ed8323;
}

.hide_content{
  display: none;
}
.link_cursor {
	cursor:pointer;
	
}
.title_link:hover{
	text-decoration: underline;
}
.message-block {
    border: 1px solid #cadbec;
    border-radius: 8px;
    padding: 20px;
    backgroud-color: #eef4f9;
}
.disabled {
    opacity: .2;
}
.btn-close,.btn-close1 {
	width: 0.3em;
    height: 0.3em;
    padding: .15em .15em;
	margin-top: 6px;
}
.list-group-item-action{
	text-decoration: none;
}
.img-thumbnail {
    border: none;
}
.btn-height{
	height: 40px;
}
.btn-width{
	width: 100px;
}
.modal-close  {
   border: 0px;
   background-color: #fff;
}
/*.fw-bold {
	font-weight:900!important;
}*/
.mr-20{
	margin-right:20px;
}
.h6, h6 {
	font-weight: 900!important;
}
.testimonial-group > .row {
  overflow-x: auto;
  white-space: nowrap;
}
.testimonial-group > .row > .col-xs-4 { 
  display: inline-block;
  float: none;
}

ul.nav-wizard {
   
}
ul.nav-wizard {
  
    position: relative;
    overflow: hidden;
   
}
.nav {
    display: flex !important;
    flex-wrap: nowrap;
}
.overFl-y {
    overflow-y: hidden !important;
    overflow-x: scroll !important;
}
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
ul.nav-wizard li {
    position: relative;
    float: left;
    height: 90px;
    display: inline-block;
    padding: 0 20px 0 30px;
    margin: 0;
    line-height: 46px;
    width: 25%;
}
.list-group-item {
	border:0px;
	 padding: .5rem .5rem;
}
.mobile_select{
	width:100px !important;
}
.w-60 {
    width: 60%!important;
}
ol, ul {
    padding-left: 1.4rem;
}
.li_span {
	position: relative;
    left: -4px;
}
.underline {
	text-decoration:underline;
}
/*p {
	text-align: justify;
}*/
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="alert alert-danger alert-dismissible error text-center" role="alert"  style="display:none;">
  <!--<span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span> -->
  Choose a job category or location to start a search
</div>
 <div class="row"> <!-- first row -->			
			 
			<div class="col-xs-1 col-md-2  ">
			</div>
			<div class="col-xs-11 col-md-10  ">
				  <input type="hidden" name="latitude" id="latitude" value="">
				  <input type="hidden" name="longitude" id="longitude" value="">
				  <input type="hidden" name="search_link" id="search_link" value="0">
				  <!--<input type="hidden" name="salary" id="salary" value="">	-->
				 <div class="row"> 
					 <div class="col-12 col-sm-12 col-md-4  py-2">
						  <p class="mb-0 display-inline-grid">
						  <label for="country" class="form-label fw-bold mb-0 font-24"  style="line-height:1rem;">What</label>
						  <span class="text-muted small">choose a job category</span>
						  </p>						
						  <select class="form-select mr-1" id="category" name="category" required="">
						    <option value=""></option>
							<?php $__currentLoopData = $jobcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($jobcategory->id); ?>"><?php echo e($jobcategory->category_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>							
						  </select>
					</div>
					<div class="col-12 col-sm-12 col-md-4  py-2">
						 <p  class="mb-0 display-inline-grid">
							<label for="country" class="form-label fw-bold mb-0 font-24" style="line-height:1rem;">Where</label>
							<span class="text-muted small">city & state, zip code</span>
						</p>
						<input type="text" class="form-control mr-1" id="zip" placeholder="" required="">		  
					</div>
					<div class="col-12 col-sm-12 col-md-2  justify-content-center justify-content-md-start py-2">
						<label for="country" class="form-label"></label>
						<a href="#" class="btn btn-find search_button d-block d-sm-none" >Find Jobs</a>
						<a href="#" class="btn btn-find search_button d-none d-sm-block d-md-block" style="margin-top:0.8rem">Find Jobs</a>
					</div>
				 </div>
			</div>
		  </div> <!-- first row ends-->
		  <div class="row py-3 search_content" style="display:none;"> <!-- second row -->
			<div class="col-12 col-sm-12 col-md-2  search_filter_col">
					<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { ?>
					
					<div class="container testimonial-group d-block d-sm-none" style="padding:0px;">  <!--   -->
						<div class="row ">
							<div class="col-12   pt-3">
							<ul class="list-group list-group-horizontal">
								<li class="list-group-item date_filter">
									<label for="country" class="form-label">Date Posted</label>
									<select class="form-select mr-1 mobile_select" id="date_posted" name="date_posted" required="">
									<option value="">Anytime</option>
									<option value="1">Last 24 hours</option>
									<option value="7">Last 7 days</option>
									<option value="14">Last 14 days</option>										
									</select>
							    </li>
							    <li class="list-group-item remote_filter">
									<label for="country" class="form-label">Remote</label>
									<select class="form-select mr-1 remote_filter1 mobile_select" id="remote_type" name="remote_type" required="">
									<option value="">Select</option>
									<option value="remote">Remote</option>
									<option value="not_remote">Not Remote</option>											
									</select>
							   </li>
							   <li class="list-group-item">
								<label for="country" class="form-label">Distance</label>
								<select class="form-select mr-1 distance_filter1 mobile_select" id="distance" name="distance" required="">
									<option value="50">Within 50 miles</option>
									<option value="100">Within 100 miles</option>
									<option value="150">Within 150 miles</option>
								</select>
							   </li>
							  <li class="list-group-item salary_filter">
								<label for="country" class="form-label">Salary</label>
								<select class="form-select mr-1 salary_filter1 mobile_select" id="salary" name="salary" required="">
									
								</select>
							  </li>
							   <li class="list-group-item jobtype_filter">
									<label for="country" class="form-label">Job Type</label>
									<select class="form-select mr-1 jobtype_filter1 mobile_select" id="job_type" name="job_type" required="">
									<option value="">Select</option>
									<option value="full-time">Full-time</option>
									<option value="part-time">Part-time</option>											
									</select>
							  </li>
							  <li class="list-group-item company_filter">
								    <label for="country" class="form-label">Company</label>
									<select class="form-select mr-1 company_filter1 mobile_select" id="company" name="company" required="">
									</select>
							  </li>
							  
							</ul>
							</div>
						</div>
					</div>
					
					<?php } else { ?>
					<div class="row  d-none d-sm-block d-md-block"> <!--  -->
						<div class="col-3  col-sm-3 col-md-12 pt-3">
							<label for="country" class="form-label">Date Posted</label>
							<select class="form-select mr-1 " id="date_posted" name="date_posted" required="">
								<option value="">Anytime</option>
								<option value="1">Last 24 hours</option>
								<option value="7">Last 7 days</option>
								<option value="14">Last 14 days</option>
							</select>
						</div>
						<div class="col-3 col-sm-3   col-md-12 remote_filter pt-3">
							<label for="country" class="form-label">Remote</label>
							<select class="form-select mr-1 remote_filter1" id="remote_type" name="remote_type" required="">
							<option value="">Select</option>
							<option value="remote">Remote</option>
							<option value="not_remote">Not Remote</option>											
							</select>
						</div>
						<div class="col-3  col-sm-3 col-md-12 pt-3">
							<label for="country" class="form-label">Distance</label>
							<select class="form-select mr-1 distance_filter1" id="distance" name="distance" required="">
								<option value="50">Within 50 miles</option>
								<option value="100">Within 100 miles</option>
								<option value="150">Within 150 miles</option>
							</select>
						</div>
						<div class="col-3 col-sm-3 col-md-12 salary_filter  pt-3">
							<label for="country" class="form-label">Salary</label>
							<select class="form-select mr-1 salary_filter1" id="salary" name="salary" required="">
								
							</select>
						</div>	
						<div class="col-3 col-sm-3 col-md-12 jobtype_filter  pt-3">
							<label for="country" class="form-label">Job type</label>
							<select class="form-select mr-1 jobtype_filter1" id="job_type" name="job_type" required="">
								<option value="">Any</option>
								<option value="full-time">Full-time</option>
								<option value="part-time">Part-time</option>	
							</select>
						</div>							
						<div class="col-3 col-sm-3   col-md-12 company_filter pt-3">
							<label for="country" class="form-label">Company</label>
							<select class="form-select mr-1 company_filter1" id="company" name="company" required="">
											
							</select>
						</div>
						
					</div>
					
					<?php } ?>
					<!--<div class="container horizontal-scrollable">
						<div class="row text-center">
							<div class="col-xs-4">1</div>
							<div class="col-xs-4">2</div>
							<div class="col-xs-4">3</div>
							<div class="col-xs-4">4</div>
							<div class="col-xs-4">5</div>
							<div class="col-xs-4">6</div>
							<div class="col-xs-4">7</div>
						</div>
					</div> -->
					<!--<div class="wizard"> 
						<ul class="nav nav-pills nav-wizard overFl-y scrollbars ">
							<li class="step1 active">
								<label for="country" class="form-label">Distance</label>
								<select class="form-select mr-1" id="distance" name="distance" required="">
									<option value="50">Within 50 miles</option>
									<option value="100">Within 100 miles</option>
									<option value="150">Within 150 miles</option>
								</select>
							</li>
							<li class="step2">
								<label for="country" class="form-label">Distance</label>
								<select class="form-select mr-1" id="distance" name="distance" required="">
									<option value="50">Within 50 miles</option>
									<option value="100">Within 100 miles</option>
									<option value="150">Within 150 miles</option>
								</select>
							</li>                          
							<li class="step3">
							<label for="country" class="form-label">Distance</label>
							<select class="form-select mr-1" id="distance" name="distance" required="">
								<option value="50">Within 50 miles</option>
								<option value="100">Within 100 miles</option>
								<option value="150">Within 150 miles</option>
							</select>
							</li>                          
							<li class="step4">
								<label for="country" class="form-label">Distance</label>
								<select class="form-select mr-1" id="distance" name="distance" required="">
									<option value="50">Within 50 miles</option>
									<option value="100">Within 100 miles</option>
									<option value="150">Within 150 miles</option>
								</select>
							</li>            
						</ul>   
					</div> -->
				<!--</div> -->
			</div>
			<div class="col-12 col-sm-12 col-md-2  search_filter_emptycol">
				
			</div>
			<div class="col-12 col-sm-12 col-md-10  "> <!-- left column -->
					
				 <div class="row  "> 
					
					<div class="col-md-6 parent " style="padding-left:0px">	
						<div class="child">
							<table class="table  mb-0 hoverchange" id="job-table">
															    
								<tbody>							 
							   </tbody>
							</table>						
						</div> <!-- child div -->
					</div>
					<div class="col-md-6 job_content hide_content parent1 sticky-top hidden-xs hidden-sm job_details_desktop" style="padding-left:1.5rem">	
						<!--<div class="child1 job_details_desktop border p-2">
							
						</div> -->
					</div>					
					
				 </div>
			</div> <!-- left column ends-->
		  </div> <!-- second row ends-->	

  
<div class="modal hidden-lg hidden-md" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		<!--<button type="button" class="btn-close1" aria-label="Close" ></button>-->
      </div>
      <div class="modal-body job_details" >
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>		
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnP2yYzRRutJJK24FmTEzFtipJwNSMd7o&libraries=places" type="text/javascript"></script>

<script type="text/javascript"> 
	var searchInput = 'zip';
	var autocomplete;
	$(document).ready(function(){		
		// Set up the toggle effect:
		getUrlVars();
		$('.search_button').click(function(){
			//$('#latitude').value = '';
			//$('#longitude').value = '';
			$('.error').css('display','none');
			$('#search_link').val('0');
			if ($("#category option:selected").val() == '' && $('#zip').val() == '') {
				$('.error').css('display','');
				$('.search_content').css('display','none');
				return;
			}
			
			if ($('#zip').val() != '' ) {
				var geocoder = new google.maps.Geocoder();

				geocoder.geocode( { 'address': $('#zip').val()}, function(results, status) {
					console.log('geo Main Results= '+ JSON.stringify(results));
					if (status == google.maps.GeocoderStatus.OK) {
					 
					  var lat =  results[0].geometry.location.lat();
					  var lng =  results[0].geometry.location.lng();
					  $('#latitude').val(lat);
					  $('#longitude').val(lng);
					  console.log(' latitude value1='+$('#latitude').val());
					  console.log('longitude value2='+$('#longitude').val());
					  savesearchkeywords();
					  loadData();
					} else {
					  console.log("Geocode was not successful for the following reason: " + status);
					  $('#latitude').val('');
					  $('#longitude').val('');
					  savesearchkeywords();
					  loadData();
					}
				});
			} else {
				$('#latitude').val('');
				$('#longitude').val('');
				savesearchkeywords();
				loadData();
			}
		  
			$('.job_content').addClass('hide_content');
			//var overlay = $('<div class="se-pre-con"></div>');
			//overlay.appendTo(document.body);
			
			
		});
		
		$("#company").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$("#distance").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$("#salary").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$("#remote_type").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$("#date_posted").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$("#job_type").change(function(){
		  $('#search_link').val('0');
		  loadData();
		});
		$('.close').click(function() {
			 $(".error").fadeOut('slow');  
		});
		$('.btn-close1,.modal-close').click(function() {
			 $('.modal').modal('hide');
		});
		
  
		
		autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
			types: ['geocode'],
		});
		
		google.maps.event.addListener(autocomplete, 'place_changed', function () {
			var near_place = autocomplete.getPlace();
			//$('#latitude').val(near_place.geometry.location.lat());
			//$('#longitude').val(near_place.geometry.location.lng());
			$('#latitude').val('');
			$('#longitude').val('');
			document.getElementById('latitude').value = near_place.geometry.location.lat();
			document.getElementById('longitude').value = near_place.geometry.location.lng();
			console.log(' latitude value='+document.getElementById('latitude').value);
			console.log('longitude value='+document.getElementById('longitude').value );
		});
		
	});
	function getUrlVars(){
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			console.log('hash...'+hash[0] );
			if (hash[0] == 'cid') {
				//$("#category option:contains('" + hash[1] + "')").attr('selected', 'selected');
				$("#category option[value=" + hash[1] + "]").prop("selected",true);
				$("#category").val(hash[1]);
				vars.push(hash[0]);
				vars[hash[0]] = hash[1];
			}
		}
		return vars;
	}
	function showremotejobs(cat_id) {
		$("#category").val(cat_id);
		$("#zip").val('');
		$('#company').val('');
		$('#salary').val('');
		$('#date_posted').val('');
		$('#remote_type').val('remote');
		$('#job_type').val('');
		$('#latitude').val('');
		$('#longitude').val('');
		
		if (cat_id != '')
			$('#search_link').val('1');
		else
			$('#search_link').val('2');
		loadData();
	}
	function shownearbyjobs(zip) {
		$("#category").val('');
		$('#company').val('');
		$('#salary').val('');
		$('#date_posted').val('');
		$('#remote_type').val('');
		$('#job_type').val('');	
		$('#distance').val('150');
		$('#search_link').val('3');		
		loadData();
	}
	function loadData() {
		$('.error').css('display','none');
		var table = $('#job-table').DataTable({
			"bDestroy":true,
            processing: true,
            serverSide: true,
			"bLengthChange" : false, // to hide lengthMenu [10,50,100,-1]
            "bInfo":true, 
			"aaSorting": [], // To avoid sorting in the first time			
			"oLanguage": {
				   sLengthMenu: "Show_MENU_",
				},	
            ajax: { 
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},

				url: '<?php echo e(URL::to('/')); ?>'+'/getallbigijobs', 
				//ajax: "<?php echo e(route('getallbigijobs')); ?>",
				type: 'get',
				dataType: 'json',				
				data: { 'category': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						/*'distance': $(".distance_filter1 option:selected").val(),
						'company': $(".company_filter1 option:selected").val(),
						'salary': $(".salary_filter1 option:selected").val(),
						'remote_type': $(".remote_filter1 option:selected").val(),*/
						'distance': $("#distance option:selected").val(),
						'company': $("#company option:selected").val(),
						'salary': $("#salary option:selected").val(),
						'remote_type': $("#remote_type option:selected").val(),
						'job_type': $("#job_type option:selected").val(),
						'date_posted': $("#date_posted option:selected").val(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
				},
				/*'beforeSend': function () {
					var overlay = $('<div class="se-pre-con"></div>');
					overlay.appendTo(document.body);
				},	*/				
				complete: function(response) {
						  //console.log('response='+JSON.stringify(response));
						  var show_display_filter = true;
						  var total_records =0;
							 $.each(response, function (i, field) {
								 if (i=='responseText') {
								   var json = jQuery.parseJSON( field );
								   total_records = json.recordsTotal;
								   if(json.recordsTotal == 0) {
									   
									    $.ajax({	 
											headers: {
												'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
											},

											url: '<?php echo e(URL::to('/')); ?>'+'/getsearchlink',
											type: 'get',
											dataType: 'json',				
											data: { 'category': $("#category option:selected").val(),
													'zip': $('#zip').val(),													
													'distance': $("#distance option:selected").val(),
													'latitude':document.getElementById('latitude').value,
													'longitude': document.getElementById('longitude').value,
											},							
											complete: function(searchlink_res) { 
												//console.log('searchlink_res='+JSON.stringify(searchlink_res));
												var msg = "We couldn't find  a match";
												if  ($("#category option:selected").val() != '')
													msg += " for "+$("#category option:selected").html()+" jobs";
											    if ($('#zip').val() != '' )
												   msg += " in "+$('#zip').val();
												var searchlink_json = '';
												var link1 ='';
												var link2 ='';
												var link3 ='';
												$.each(searchlink_res, function (i, field) {
													 if (i=='responseText') {
													   searchlink_json = jQuery.parseJSON( field );
													   console.log('searchlink_res.remotejobs_count='+searchlink_json.remotejobs_count);
													   
														if (searchlink_json.categoryremotejobs_count > 0) {
															if  ($("#category option:selected").val() != '')
																 link1 = "<p><a href='#' onclick='showremotejobs("+$("#category option:selected").val()+");'>View all remote "+$("#category option:selected").html()+" jobs</a></p>";
														}
														if (searchlink_json.remotejobs_count > 0) {
															if ($('#search_link').val() != '2')
																link2 = "<p><a href='#' onclick='showremotejobs();'>View all remote jobs</a></p>";
														}
														if (searchlink_json.nearbyjobs_count > 0) {
															if ($('#zip').val() != '')
															   link3 = "<p><a href='#' onclick='shownearbyjobs();'>View all jobs nearby "+$("#zip").val()+"</a></p>";
														}
													 }
												});
											    $('.dataTables_empty').html("<div class='row'><div class='col-lg-12 p-3'><p>"+msg+"</p>"+link1+link2+link3+"</div></div>");
												
												
											}
										});
									   
									   
									   
									  // $('.child').css('margin-right','-25px');
									   //$('.search_content').css('display','none');
									  // $('.search_filter_content').css('display','none'); 
									   show_display_filter = false;
									   $('#company').val('');
									   $('#salary').val('');
									   $('#date_posted').val('');
									   $('#remote_type').val('');
									   $('#job_type').val('');
									   
									   $('.dataTables_info').remove();
								   }
								 }
							});
							//$(".se-pre-con").remove();
							$('.search_content').css('display','');
							if (show_display_filter) {
								$('.search_filter_col').css('display','');
								$('.search_filter_emptycol').css('display','none');
							} else {
								$('.search_filter_emptycol').css('display','');
								$('.search_filter_col').css('display','none');
							}
							$('.job_content').addClass('hide_content');	
							console.log('parent height='+ $('.parent').height());
							//$('.parent').css('height',$('.parent').height());
							
							$('.show_more').on('click', function(e) {
								var id = this.id;
								var id_arr = id.split("_");
								$('#show_more_'+id_arr[2]).removeClass('hide_content');
								$('#show_less_'+id_arr[2]).addClass('hide_content');								
								e.preventDefault();
							});
							$('.show_less').on('click', function(e) {
								var id = this.id;
								var id_arr = id.split("_");
								$('#show_more_'+id_arr[2]).addClass('hide_content');
								$('#show_less_'+id_arr[2]).removeClass('hide_content');								
								e.preventDefault();
							});

							$("html, body").animate({ scrollTop: 0 }, "slow"); 
							getSearchfilter();
							getCompanyfilter();
							getRemotefilter();
							getJobtypefilter();	
							<?php //if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { ?>
							<?php //} else { ?>
								//$("#job-table>tbody>tr>td>div>div>div>h5:first").trigger('click');
							<?php //} ?>
							/*var page = table.page.info();
							var current_page = page.page;
							
							var idx = table.row( this ).index();
							idx = idx +1;
							start_num = idx;
							if (current_page != 0)
								start_num = (current_page * 10) + idx;*/
							
							$('.dataTables_info').html('showing - of '+total_records + ' jobs');
							$('.dataTables_info').addClass('text-muted small');
							$('.dataTables_info').css('padding-left','1.5rem');
							$('#job-table tbody').on( 'click', 'tr', function () {
								var page = table.page.info();
								var current_page = page.page;
								var idx = table.row( this ).index();
								idx = idx +1;
								start_num = idx;
								console.log('start_num prev='+start_num);
								if (current_page != 0)
									start_num = (current_page * 10) + idx;
								
								$('.dataTables_info').html('showing '+start_num + '  of '+total_records + ' jobs');
								$('.dataTables_info').addClass('text-muted small');
								$('.dataTables_info').css('padding-left','1.5rem');
							});
					   } 
				},
			<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { ?>
				"pagingType": "simple",
				"drawCallback": function (oSettings) {
					 $('.next').addClass('btn btn-find btn-width');
					 $('.previous').addClass('btn btn-find btn-width mr-20');					  
					 $('.next').removeClass('hide_content');
					 $('.previous').removeClass('hide_content');					  
					 if($('.previous').hasClass('disabled')){
						$('.previous').addClass('hide_content');
					 }
					 if($('.next').hasClass('disabled')){
						$('.next').addClass('hide_content');
					 }
					 if($('.previous').hasClass('disabled') && $('.next').hasClass('disabled')){
						 $('.dataTables_paginate').html('<p><b>End of Search results</b></p>');
				     }
					 $(oSettings.nTHead).hide();
				},				
			<?php } else {?>
				"pagingType": "full_numbers",
				"drawCallback": function (oSettings) {
					$(oSettings.nTHead).hide();
				},
				
				/*"pagingType": "simple",
				"drawCallback": function (oSettings) {
					 $('.next').addClass('btn btn-find btn-width');
					 $('.previous').addClass('btn btn-find btn-width mr-20');					  
					 $('.next').removeClass('hide_content');
					 $('.previous').removeClass('hide_content');					  
					 if($('.previous').hasClass('disabled')){
						$('.previous').addClass('hide_content');
					 }
					 if($('.next').hasClass('disabled')){
						$('.next').addClass('hide_content');
					 }
					 if($('.previous').hasClass('disabled') && $('.next').hasClass('disabled')){
						 $('.dataTables_paginate').html('<p><b>End of Search results</b></p>');
				     }
				},*/	
			<?php }?>	
			//"sDom": "<'row tblborder'<'col-sm-12'rt >>" +"<'row p-t'<'col-sm-12 pb-2'p>>"+"<'row '<'col-sm-12'l>>",  						
			"sDom": "<'row tblborder'<'col-sm-12'rit >>" +"<'row p-t'<'col-sm-12 pb-2'p>>"+"<'row '<'col-sm-12'l>>",  
			/*"fnDrawCallback": function ( oSettings ) {
				$(oSettings.nTHead).hide();
			}	,*/	
			columns: [	
				{	data: 'job_content',
					"render": function ( data, type, row ) {						
						return data;
					},
					"width": "100%",
					orderable: false,
					searchable: false
				},
				/*{
                    "data": 'DT_RowIndex',
                    orderable: false, 
                    searchable: false
                },	*/			
            ],
						
        });	
           
	}
	
	function showjob(job_id) {
			$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/getjob/'+job_id,
					type: 'get',
					dataType: 'json',					
					/*'beforeSend': function () {
						var overlay = $('<div class="se-pre-con"></div>');
						overlay.appendTo(document.body);
					},	*/				
					complete: function(response) {
						//console.log('response='+JSON.stringify(response));
						//console.log('responsedfsdfdsfdsdfsdf='+response.responseText.html);
						//$(".se-pre-con").remove();
						$('.job_content').removeClass('hide_content');
						$('.job_row1').removeClass('even-background');
						$('.job_row1').addClass('odd-background');
						$('.job_row_'+job_id).removeClass('odd-background');
						$('.job_row_'+job_id).addClass('even-background');
						$.each(response, function (i, field) {
							 if (i=='responseText') {
							   var json = jQuery.parseJSON( field );
							  // console.log('responsedfsdfdsfdsdfsdf='+json.html);							   
							   
								<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { ?>
									$('.job_details').html(json.html);
									$('.modal').modal('show');
									$('.job_content').addClass('hide_content');	
								<?php  } else { ?>
									$('.job_details_desktop').html(json.html);
								<?php } ?>							  
							 }
						});						 

					}					
					
			});				
	}
	function getSearchfilter(){
		$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/getsalaryfilter',
					type: 'post',
					data: { 'category': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						/*'distance': $(".distance_filter1 option:selected").val(),
						'company': $(".company_filter1 option:selected").val(),
						'salary': $(".salary_filter1 option:selected").val(),
						'remote_type': $(".remote_filter1 option:selected").val(),*/
						'distance': $("#distance option:selected").val(),
						'company': $("#company option:selected").val(),
						'salary': $("#salary option:selected").val(),
						'remote_type': $("#remote_type option:selected").val(),
						'date_posted': $("#date_posted option:selected").val(),
						'job_type': $("#job_type option:selected").val(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
					},
					dataType: 'json',								
					complete: function(response) {
						console.log('response='+JSON.stringify(response));
						var content = '';
						$.each(response, function (i, field) {							
							 if (i=='responseText') {
							    var json = jQuery.parseJSON( field );							   
								//$('.salary_filter').html(json.data);
								$('.salary_filter1').html(json.data);
							  
							 }
						});	
						/*$('select').on('change', function() {
						  alert( this.value );
						});*/
						/*$('.btn-close').click(function(){
							$('#salary').val('');
							$('.btn-close').remove();
							loadData();
						});*/
					}						
					
			});	
	}
	
	function getCompanyfilter(){
		$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/getcompanyfilter',
					type: 'post',
					data: { 'category': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						'distance': $("#distance option:selected").val(),
						'company': $("#company option:selected").val(),
						'salary': $("#salary option:selected").val(),
						'remote_type': $("#remote_type option:selected").val(),
						'date_posted': $("#date_posted option:selected").val(),
						'job_type': $("#job_type option:selected").val(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
					},
					dataType: 'json',								
					complete: function(response) {
						console.log('response='+JSON.stringify(response));
						var content = '';
						$.each(response, function (i, field) {							
							 if (i=='responseText') {
							    var json = jQuery.parseJSON( field );
								$('.company_filter1').html(json.data);
							  
							 }
						});							
					}						
					
			});	
	}
	function getRemotefilter(){
		$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/getremotefilter',
					type: 'post',
					data: { 'category': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						'distance': $("#distance option:selected").val(),
						'company': $("#company option:selected").val(),
						'salary': $("#salary option:selected").val(),
						'remote_type': $("#remote_type option:selected").val(),
						'date_posted': $("#date_posted option:selected").val(),
						'job_type': $("#job_type option:selected").val(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
					},
					dataType: 'json',								
					complete: function(response) {
						console.log('response='+JSON.stringify(response));
						var content = '';
						$.each(response, function (i, field) {							
							 if (i=='responseText') {
							    var json = jQuery.parseJSON( field );
								$('.remote_filter1').html(json.data);
							  
							 }
						});							
					}						
					
			});	
	}
	function getJobtypefilter(){
		$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/getjobtypefilter',
					type: 'post',
					data: { 'category': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						'distance': $("#distance option:selected").val(),
						'company': $("#company option:selected").val(),
						'salary': $("#salary option:selected").val(),
						'remote_type': $("#remote_type option:selected").val(),
						'date_posted': $("#date_posted option:selected").val(),
						'job_type': $("#job_type option:selected").val(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
					},
					dataType: 'json',								
					complete: function(response) {
						console.log('response='+JSON.stringify(response));
						var content = '';
						$.each(response, function (i, field) {							
							 if (i=='responseText') {
							    var json = jQuery.parseJSON( field );
								$('.jobtype_filter1').html(json.data);
							  
							 }
						});							
					}						
					
			});	
	}

	function savesearchkeywords() {
			$.ajax({					
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '<?php echo e(URL::to('/')); ?>'+'/savesearchkeywords',
					type: 'post',
					data: { 'category_id': $("#category option:selected").val(),
						'zip': $('#zip').val(),
						'distance': $("#distance option:selected").val(),
						'category': $("#category option:selected").html(),
						'latitude':document.getElementById('latitude').value,
						'longitude': document.getElementById('longitude').value,
				},
					dataType: 'json',					
					/*'beforeSend': function () {
						var overlay = $('<div class="se-pre-con"></div>');
						overlay.appendTo(document.body);
					},	*/				
					complete: function(response) {
						//console.log('response='+JSON.stringify(response));
						//console.log('responsedfsdfdsfdsdfsdf='+response.responseText.html);
						//$(".se-pre-con").remove();
						/*$('.job_content').removeClass('hide_content');
						$('.job_row1').removeClass('even-background');
						$('.job_row1').addClass('odd-background');
						$('.job_row_'+job_id).removeClass('odd-background');
						$('.job_row_'+job_id).addClass('even-background');
						$.each(response, function (i, field) {
							 if (i=='responseText') {
							   var json = jQuery.parseJSON( field );
							  // console.log('responsedfsdfdsfdsdfsdf='+json.html);							   
							   
								<?php if (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" , $_SERVER["HTTP_USER_AGENT"])) { ?>
									$('.job_details').html(json.html);
									$('.modal').modal('show');
									$('.job_content').addClass('hide_content');	
								<?php } else {?>
									$('.job_details_desktop').html(json.html);
								<?php }?>							  
							 }
						});	*/					 

					}					
					
			});				
	}
	
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.bigijobslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bigijobs/resources/views/bigijobs/jobs.blade.php ENDPATH**/ ?>