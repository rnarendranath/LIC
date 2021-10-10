<!--<header style="position: absolute;    width: 98.2%;" class="mob-header">
<strong>

    <div class="col-md-12 col-sm-12 no-padding ">
	
		 <div class="collapse navbar-collapse headerlist" id="bs-example-navbar-collapse-1"  style="background-color: #000080; padding-left:10px; padding-right:10px;"> 
      <ul class="nav navbar-nav top-nav" > -->
<strong><?php
function head()
{
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	preg_match("/[^\/]+$/", "$url", $matches);
?>
<head>
<style>
*{
margin:0px;
padding:0px;}

#container ul{
	list-style:none;
}
#container ul li{
	background-color:#3C3E94;
	width:154px;
	border:1px solid white;
	height:39px;
	line-height:40px;

	text-align:center;
	float:left;
	color:white;
	font-size:14px;
	
}
#container ul li:hover{
	background-color:#388222
}
#container ul ul{
	display:none;
	}
	#container ul li:hover >ul{
		display:block;
	}
</style>
</head>
<header>
	<div id="container">
    <ul>
	     <li ><a href="index.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">HOME</span></a>
	     <ul><li><a href="aboutus.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">ABOUT US </span></a></li>
		 <li><a href="career.php" class="<?php if($matches[0] == '#') echo "active"; ?>"> <span style="color:#fff;">CAREER</span> </a></li>
		 <li><a href="join.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:13px;">JOIN AS AN LIC AGENT</span></a></li>
		<li><a href="benefits.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">BENEFITS</span></a></li>
		 </ul></li>
		 
		 
         <li><a href="products.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">PRODUCTS</span> </a></li>  
		 
		 
         <li><a href="services.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">SERVICES</span></a>
		 <ul><li><a href="taxrelief.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">TAX RELIEF</span> </a></li>
		 <li><a href="downloads.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;"> DOWNLOADS</span> </a></li>
		 <li><a href="Knowledge.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;"> KNOWLEDGE</span> </a></li>
		 </ul></li>
		 
		 
		<li><a href="agentsonly1.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">AGENTS ONLY</span></a>
		<ul>
		<li><a href="studymaterial.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">STUDY MATERIAL</span></a></li>
		<li><a href="examdetails.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">EXAM DETAILS</span></a></li>
		<li><a href="motivation.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">MOTIVATION</span></a></li>
		</ul></li>
		
		
		
		<li><a href="powerpoint.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">POWER POINT</span></a></li>
		
		
		
		<li><a href="tamil.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">TAMIL</span></a>
		<ul>
	     <li ><a href="mugavarpayankal.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:10px;">முகவர் பயன்கள்</span></a></li>
	    <li><a href="kaiyadu.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:10px;">வாடிக்கையாளர் கையேடு</span></a></li>
		 <li><a href="ponnanavaippu.php" class="<?php if($matches[0] == '#') echo "active"; ?>"> <span style="color:#fff; font-size:9.2px;">பொன்னான வாய்ப்பு</span> </a></li>
		 <li><a href="virppanainunukangal.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:10px;">விற்பனை நுட்பங்கள்</span></a></li>
		<li><a href="seithiththulir.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:10px;">செய்தித் துளிர்</span></a></li>
		<li ><a href="mugavarvaruvai.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff; font-size:10px;">முகவர் வருவாய்</span></a></li>
		 </ul></li>
		
		
		
		<li><a href="video.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">VIDEO</span></a></li>
		
		
		
		<li><a href="registration1.php" class="<?php if($matches[0] == '#') echo "active"; ?>"><span style="color:#fff;">REGISTRATION</span></a></li>
      </ul>
    </div>
</header>
<div class="sticky-container hidden-xs"> 
			<ul class="sticky"> 
				<li> <img width="32" height="32" title="" src="lib/img/fb.png" alt=""> <p> <a title="" tabindex="458" href="https://www.facebook.com/ramasamy.samy.54 "  target="blank">Facebook</a></p> </li> 
				<li> <img width="32" height="32" title="" src="lib/img/g.png" alt=""> <p> <a title="" tabindex="458" href="https://plus.google.com/105633876800875020764" target="blank">Google +</a></p> </li> 
				
				<li> <img width="32" height="32" title="" src="lib/img/contact.png" alt=""> <p> <a title="" tabindex="458" href="registration1.php">Contact Us</a></p> </li> 
				<!--<li> <img width="32" height="32" title="" src="lib/img/icons-06.png" alt=""> <p> <a title="" tabindex="458" href="retirement_plan.php">Retirement Calculator </a></p> </li> 
				<li> <img width="32" height="32" title="" src="{{URL::asset('public/front/img/icons-20.png')}}" alt=""> <p> <a title="" target="_blank" tabindex="458" href="http://www.infinitheism.com/">Like </a></p> </li> -->
			</ul> 
		</div>	
  <!--  <div class="site-menu right-menu visible-lg visible-md top-5"  style="background-color: #000080; padding-left:60px; padding-right:15px;">
      <ul class="sf-menu bottom-0 list-unstyled clearfix sf-js-enabled sf-arrows " >
    -->
<?php
}
?></strong>
