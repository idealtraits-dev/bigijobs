<!doctype html>
<html lang="en">
  <head>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">-->
	
	<meta name="google-site-verification" content="cA4v9oOjDBtFLVuHOu83--fxww2LJGzh0o2PxGQFLns" />
	<meta charset="utf-8">
	<META http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>BIGiJobs</title>
	<link rel="shortcut icon" href="<?php echo e(asset('bigijobs/img/idealfav.png')); ?>">
	
	<link rel="icon" href="<?php echo e(asset('bigijobs/img/idealfav.png')); ?>">
    
	<!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> -->
	
    <!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,100i,300,300i,400,400i,700,700i,900,900i' rel='stylesheet' type='text/css'>  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'> 
    <!-- Bootstrap core CSS -->
	<link href="<?php echo e(asset('bigijobs/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('bigijobs/css/main_style.css')); ?>" rel="stylesheet">
	
	
    <style>
	
	body {
		font-family: 'Source Sans Pro', sans-serif;
		 -webkit-font-smoothing: subpixel-antialiased;
		 -webkit-text-size-adjust: none;
		
	}
	.bg-dark {
		background-color: #ffffff !important;
	}
	.navbar-dark .navbar-brand {
		color: black;
	}
	.navbar-dark .navbar-brand:hover{
		color:black;
	}
	.navbar-dark .navbar-brand:active{
		color:black;
	}
	.navbar-dark .navbar-brand:visited{
		color:black;
	}
	.font-28 {
		font-size: 28px;
	}
	.font-24 {
		font-size: 24px;
	}
	.display-inline-grid {
		display: inline-grid;
	}
	.btn-find {
		color: #fff  !important;
		background-color: #202A5B !important;
		border-color: #202A5B !important;
		
	}
	.btn-find:focus,.btn-find:active,.btn-find:hover,.btn-find:visited { 
		color: #fff  !important;
		background-color: #202A5B !important;
		border-color: #202A5B !important;
		
	}
	.btn-new {
		color: #fff  !important;
		background-color: #00A5C8 !important;
		border-color: #00A5C8 !important;
		
	}
	.btn-new:hover {
		color: #fff  !important;
		background-color: #00A5C8 !important;
		border-color: #1F88E5 !important;
		
	}
	.btn-secondary{
	color:#fff;
	background-color:#1F88E5;
	border-color:#1F88E5;
	box-shadow:none
	}	
	.btn-secondary:focus,.btn-secondary:active,.btn-secondary:hover,.btn-secondary:visited{
	color:#fff;
	background-color:#1F88E5;
	border-color:#1F88E5;
	box-shadow:none
	}
	.w-apply-btn-desk {
		width:150px;
	}
	.bg-light {
		background-color: #f6f6f6 !important;
	}
	.blue-text-color {
		/*color : #00A5C8 !important;*/
		color : #202A5B !important;
	}
	.grey-text-color {
		color : #f6f6f6 !important;
	}
	.card {
		border: none 
	}
	.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
	border-top-left-radius: .25rem;
	border-bottom-left-radius: .25rem; 
	}
	
	.odd-background {
		background-color: #ffffff !important;
	}
	.even-background {
		background-color: #f6f6f6 !important;
	
	}
	.border {
		/*border: 1px solid #f6f6f6 !important;*/
		border: 1px solid #ced4da !important;
	}
	.parent {	 
	  height: auto;
	  overflow: hidden;
	}
	.parent1 {	 
	  height: 750px;
	  overflow: hidden;
	}

	.child {
	  height: 100%;
	  margin-right: -30px; /* Maximum width of scrollbar */
	  /*padding-right: 15px;*/ /* Maximum width of scrollbar */
	  overflow-y: scroll;
	  overflow-x: hidden;
	}
	.child1 {
	  height: 75%;
	 /* margin-right: -24px;*/ /* Maximum width of scrollbar */
	  /*padding-right: 15px !important; *//* Maximum width of scrollbar */
	  overflow-y: scroll;
	   overflow-x: hidden;
	}
	/*.fixed { height:800px; overflow:hidden; }
	.scrollit { height:800px; overflow-y:scroll;}*/
	
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}
	
	.modal {
		overflow: hidden;
	}
	.modal .modal-body {
		/*height: 600px;*/
		overflow: auto;
	}
	.modal .modal-fixed {
		position: fixed;
		bottom: 25px;
		left: 30%;
		margin-left: -22.5%;
		-webkit-overflow-scrolling: touch
	}
	
	.sticky-top {
		z-index: unset;
	}
	.CTA-container {
	  padding-bottom: env(safe-area-inset-bottom);
	}
	.salary_text_color {
		color: #1F88E5;
	}
	
	 #footer {
               /* bottom: 0;
    position: absolute;*/
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
        }
	/*.footer {
	  bottom: 0;
	  position: absolute;
	}*/
	.mb-5{
		margin-bottom:0.5rem!important;
	}
	.f14 {
		font-size:14px;
	}
	@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		  font-size: 3.5rem;
	}
	.overall_padding {
		  padding: 1rem!important;
	  }
	 .overall_padding1 {
		  padding: 1rem!important;
	  }
	  .col_pad {
		  padding:0px;
	  }
	  .pl-15{
		  padding-left: 1.5rem;
	  }
	  .pl-1{
		  padding-left: 1rem !important;
	  }
	.custom_border {
		border: 1px solid #ced4da;
		border-bottom: 0px;
		margin-left:0px;
		padding:0.5rem;
		margin-right: 2px;
	}
	::-webkit-scrollbar {
	    width: 7px;
	}

	/* Track */
	::-webkit-scrollbar-track {
	  box-shadow: inset 0 0 5px grey; 
	  border-radius: 10px;
	}
	 
	/* Handle */
	::-webkit-scrollbar-thumb {
	  background: #202A5B; 
	  border-radius: 10px;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
	  background: #202A5B; 
	}
	}
	@media (max-width: 767px) {
	  .logo_img {
		margin-right: auto!important;
		margin-left: auto!important;
	  }
	  .overall_padding {
		  padding: 0.5rem !important;
		  margin:0px 20px 0px 0px;
	  }
	  .pr-1{
		  padding-right:1rem !important;
		 /* margin-right:1rem  !important;*/
	  }
	  .pl-1{
		  padding-left: 1rem !important;
	  }
	  .overall_padding1 {
		  padding: 0.5rem!important;
	  }
	  .apply_width {
		  width: 85%;
		 /* line-height: 2rem; */
	  }
	  
	  
	}
    </style>

    <?php echo $__env->yieldContent('css'); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NKJ52SCR8G"></script>
	<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'G-NKJ52SCR8G');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MBMKFJQ');</script>
<!-- End Google Tag Manager -->
	</head>
	<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBMKFJQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header> 
	  <div class="navbar navbar-dark bg-dark ">
		<div class="container">
			<!--<div class="row">
				<div class="col-md-12  text-md-left text-center">
				<img src="<?php echo e(asset('bigijobs/img/bigijobs_logo.jpg')); ?>" width="250px" style="display: inline-block;
  margin-right: auto;
  margin-left: auto;" >
				</div>
			</div> -->
		  <!--<a href="#" class="navbar-brand d-flex align-items-center mx-auto">         -->
		  <a href="https://bigijobs.idealtraits.com/" class=" text-md-left text-center logo_img">
			<img src="<?php echo e(asset('bigijobs/img/bigijobs_logo.jpg')); ?>" width="250px"   class="  img-fluid  img-responsive " >
		  </a>  
		</div>
	  </div>
	</header>

	<main>
	  <section class="container">
		<div class="row py-lg-5">		
			<div class="col-md-12" > 
			  <?php echo $__env->yieldContent('content'); ?>	
			</div>       
		</div>
	  </section> 
	</main>
	<!--<div class="container footer navbar-fixed-bottom text-center" >
  <footer>
     <img src="<?php echo e(asset('bigijobs/img/bigijobs_footer.jpg')); ?>" class="  img-fluid  img-responsive " style="width:40%;">
  </footer>
</div> -->

<footer class=" py-5 text-center f14 " id="footer">
  <div class="container">
    <img src="<?php echo e(asset('bigijobs/img/bigijobs_footer_logo.jpg')); ?>"   class="  img-fluid  img-responsive " >
	<p class="mb-5"><a href="https://www.independentagent.com/_layouts/15/IAlibrary/disclaimers/IIABA-Privacy-Policy.pdf" target="_blank">Privacy Policy</a> | <a href="https://www.independentagent.com/_layouts/15/IAlibrary/disclaimers/IIABA-Terms-of-Use.pdf" target="_blank">Terms of Use</a> | <a href="https://www.independentagent.com/_layouts/15/IAlibrary/disclaimers/IIABA-Content-Agreement.pdf" target="_blank">Content Agreement</a></p>
	<p class="mb-5">Copyright © <?php echo e(date('Y')); ?> Independent Insurance Agents & Brokers of America, Inc. All rights reserved.</p>
	<p class="mb-5">No portion of this site may be reproduced in any manner without the prior written consent of IIABA®.</p>
  </div>
</footer> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo e(asset('bigijobs/js/bootstrap.bundle.min.js')); ?>"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<?php echo $__env->yieldContent('scripts'); ?>	
  </body>
</html>
<?php /**PATH /var/www/html/bigijobs/resources/views/template/bigijobslayout.blade.php ENDPATH**/ ?>