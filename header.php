<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Typeface -->
	<script>
	  (function(d) {
	    var config = {
	      kitId: 'ypk3ieq',
	      scriptTimeout: 3000,
	      async: true
	    },
	    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>

	<script type='text/javascript'>
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=ukiahtvkgtlv6vpfhwkd5a';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
	</script>

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header>
		<!-- <div class="container"> -->
			<div class="hero interior">
				<a id="menuButton">Menu</a>
				<nav id="mainNav" class="main-navigation">
					<?php if(has_nav_menu('main_nav')){
								$defaults = array(
									'theme_location'  => 'main_nav',
									'menu'            => 'main_nav',
									'container'       => false,
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								); wp_nav_menu( $defaults );
							}else{
								echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
							} ?>
				</nav>
				<svg class="main-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2746.58 4104">
				  <defs>
					 <style>
						.cls-1 {
						  fill: #fff;
						}

						.cls-2 {
						  fill: #c7c8ca;
						}
					 </style>
				  </defs>
				  <title>main_logo</title>
				  <g>
					 <path class="cls-1" d="M1380.52,4104l-48.36-31.6c-322.3-210.66-640.64-481.53-873.36-743.16-301.93-339.44-455-648.64-455-919C3.78,1481.71.33,828.75.29,822.27L0,770.22,1380.59,0l1366,770.34V2410.21c0,272-153.65,583.18-456.69,924.75-231,260.32-544.8,529-861.09,737.27ZM176.75,873.39c.8,172.33,3.23,757.61,3.23,1536.82,0,222.72,141.93,500,410.46,801.9,211.21,237.43,496.7,483.24,789.72,680.67,287.33-195.09,568.49-438.73,777.92-674.74,269.71-304,412.27-583.37,412.27-807.82v-1537L1380.11,202Z"/>
					 <polygon class="cls-2" points="1337.18 1704.85 1331.39 1704.85 1331.39 1713.46 1337.18 1704.85"/>
					 <g>
						<path class="cls-1" d="M1880.57,2717.1q-2.81-2.19-7.8-2.19h-13.41v17.62H1873q5,0,7.67-2.37a8,8,0,0,0,2.67-6.31v-.18Q1883.37,2719.29,1880.57,2717.1Z"/>
						<path class="cls-1" d="M600,2605.32a19.13,19.13,0,0,0-6.66-4.36,23.18,23.18,0,0,0-8.62-1.55H572.78v42.28H584.7a23.82,23.82,0,0,0,8.62-1.5,18.54,18.54,0,0,0,6.66-4.31,20.23,20.23,0,0,0,4.31-6.61,22.36,22.36,0,0,0,1.55-8.52v-.2a22.87,22.87,0,0,0-1.55-8.52A20,20,0,0,0,600,2605.32Z"/>
						<path class="cls-1" d="M1231.58,2605.32a19.13,19.13,0,0,0-6.66-4.36,23.18,23.18,0,0,0-8.62-1.55h-11.92v42.28h11.92a23.82,23.82,0,0,0,8.62-1.5,18.54,18.54,0,0,0,6.66-4.31,20.23,20.23,0,0,0,4.31-6.61,22.35,22.35,0,0,0,1.55-8.52v-.2a22.86,22.86,0,0,0-1.55-8.52A20,20,0,0,0,1231.58,2605.32Z"/>
						<polygon class="cls-1" points="1904.8 2626.26 1923.44 2626.26 1914.12 2603.51 1904.8 2626.26"/>
						<polygon class="cls-1" points="1667.95 2626.26 1686.59 2626.26 1677.27 2603.51 1667.95 2626.26"/>
						<polygon class="cls-1" points="2125.07 2738.41 2141.37 2738.41 2133.22 2718.51 2125.07 2738.41"/>
						<path class="cls-1" d="M1511.76,2601.91q-3.21-2.5-8.92-2.51h-15.33v20.14h15.63q5.71,0,8.77-2.71a9.16,9.16,0,0,0,3.06-7.21v-.2Q1515,2604.41,1511.76,2601.91Z"/>
						<path class="cls-1" d="M1379.2,509.1,357.78,1078.95s2.74,513,2.74,1255.81c0,431.08,572.79,964.37,1018.68,1255.8,431.27-283.93,1010.47-819.94,1010.47-1255.8V1078.95Zm42.09,588.06h80.63L1588.74,1331l86.82-233.89h78.75l-134.26,334.47h-64.52l-92.84-231.27-41.42-103.16ZM1071.42,1099l68.79,224.88,74.49-225.82h62.62l74.49,225.82,64.62-210.08L1457.85,1217l-74.26,216.5H1320l-75-217.28-75,217.28h-63.57L993.14,1099Zm247.05,625.72v313.1l-11.42,16.41c-6.14-80.87-29.42-147.49-69.9-200.57ZM622,2620.54a35.2,35.2,0,0,1-2.71,13.83,32.65,32.65,0,0,1-7.66,11.12,36.24,36.24,0,0,1-11.82,7.41,40.76,40.76,0,0,1-15.08,2.71H557.35v-70.13H584.7a41.52,41.52,0,0,1,15.08,2.65,35.65,35.65,0,0,1,11.82,7.37,32.8,32.8,0,0,1,7.66,11.07,34.85,34.85,0,0,1,2.71,13.78Zm67,35.07H635.7v-70.13h52.8v13.73H650.93v14.23H684v13.73H650.93v14.73H689Zm67.23-56.21h-38v15.13h33.46v13.93H718.26v27.15H702.83v-70.13h53.4ZM557.48,2516V1704.85H744.92c236.47,0,397.22,52,482.25,163.54,40.48,53.1,63.76,119.7,69.91,200.57q1.65,21.7,1.68,44.78c0,273.27-204.51,402.29-531.13,402.29Zm264.38,139.59h-53.3v-70.13h52.8v13.73H783.78v14.23h33.06v13.73H783.78v14.73h38.07Zm76.15,0H884.87l-34-44.58v44.58H835.68v-70.13h14.23l32.86,43.18v-43.18H898Zm67.53-20.74a21.7,21.7,0,0,1-1.89,9.27,19,19,0,0,1-5.28,6.81,23.74,23.74,0,0,1-8.08,4.21,35.07,35.07,0,0,1-10.4,1.45,46.46,46.46,0,0,1-15.73-2.75,41.65,41.65,0,0,1-14-8.47l9.12-10.92a45.71,45.71,0,0,0,9.87,6.21,26.38,26.38,0,0,0,11.07,2.3q4.81,0,7.46-1.75a5.52,5.52,0,0,0,2.65-4.86v-.2a6.09,6.09,0,0,0-.55-2.66,5.61,5.61,0,0,0-2.11-2.15,22.35,22.35,0,0,0-4.32-2q-2.76-1-7.18-2.1a87.11,87.11,0,0,1-9.65-2.91,27.08,27.08,0,0,1-7.33-4,16,16,0,0,1-4.67-5.86,20.33,20.33,0,0,1-1.66-8.72v-.2a20.33,20.33,0,0,1,1.79-8.67,19.73,19.73,0,0,1,5-6.66,22.59,22.59,0,0,1,7.73-4.31,31.1,31.1,0,0,1,9.9-1.5,42,42,0,0,1,14.18,2.3,41.14,41.14,0,0,1,11.87,6.61l-8,11.62a51,51,0,0,0-9.22-5.06,23.58,23.58,0,0,0-9-1.85q-4.51,0-6.76,1.75a5.33,5.33,0,0,0-2.25,4.36v.2a6.3,6.3,0,0,0,.65,3,5.89,5.89,0,0,0,2.36,2.26,22.16,22.16,0,0,0,4.67,1.9q3,.9,7.48,2.11a72.25,72.25,0,0,1,9.49,3.15,26.54,26.54,0,0,1,7,4.21,16,16,0,0,1,4.32,5.76,19.54,19.54,0,0,1,1.46,7.91Zm66.73,20.74H979v-70.13h52.8v13.73H994.18v14.23h33.06v13.73H994.18v14.73h38.07Zm60,0h-15.43v-70.13h15.43Zm79.85,0H1159L1125,2611v44.58H1109.8v-70.13H1124l32.86,43.18v-43.18h15.23Zm81.45-35.07a35.19,35.19,0,0,1-2.71,13.83,32.65,32.65,0,0,1-7.66,11.12,36.24,36.24,0,0,1-11.82,7.41,40.76,40.76,0,0,1-15.08,2.71h-27.35v-70.13h27.35a41.52,41.52,0,0,1,15.08,2.65,35.65,35.65,0,0,1,11.82,7.37,32.81,32.81,0,0,1,7.66,11.07,34.84,34.84,0,0,1,2.71,13.78Zm73.74,4.51a40.68,40.68,0,0,1-2.15,13.93,26.29,26.29,0,0,1-6.16,9.87,25.23,25.23,0,0,1-9.72,5.91,39.13,39.13,0,0,1-12.72,2q-14.13,0-22.24-7.82t-8.12-23.34v-40.08h15.43v39.68q0,8.62,4,13t11.12,4.36q7.11,0,11.12-4.21t4-12.62v-40.18h15.43Zm4.08-607.1v-313.1h158.52l0,811.16H1331.39Zm201.31,637.66h-18l-15-22.44h-12.12v22.44h-15.43v-70.13h32.06q13.32,0,20.44,7.11,6,6,6,16v.2q0,8.52-4.16,13.88a24.09,24.09,0,0,1-10.87,7.87Zm-139-20.74a21.71,21.71,0,0,1-1.89,9.27,19,19,0,0,1-5.28,6.81,23.74,23.74,0,0,1-8.08,4.21,35.07,35.07,0,0,1-10.4,1.45,46.46,46.46,0,0,1-15.73-2.75,41.65,41.65,0,0,1-14-8.47l9.12-10.92a45.7,45.7,0,0,0,9.87,6.21,26.38,26.38,0,0,0,11.07,2.3q4.81,0,7.46-1.75a5.52,5.52,0,0,0,2.65-4.86v-.2a6.09,6.09,0,0,0-.55-2.66,5.61,5.61,0,0,0-2.11-2.15,22.37,22.37,0,0,0-4.32-2q-2.76-1-7.18-2.1a87.13,87.13,0,0,1-9.64-2.91,27.09,27.09,0,0,1-7.33-4,16,16,0,0,1-4.67-5.86,20.34,20.34,0,0,1-1.66-8.72v-.2a20.33,20.33,0,0,1,1.79-8.67,19.72,19.72,0,0,1,5-6.66,22.59,22.59,0,0,1,7.73-4.31,31.1,31.1,0,0,1,9.9-1.5,42,42,0,0,1,14.18,2.3,41.14,41.14,0,0,1,11.87,6.61l-8,11.62a51.06,51.06,0,0,0-9.22-5.06,23.58,23.58,0,0,0-9-1.85q-4.51,0-6.76,1.75a5.33,5.33,0,0,0-2.25,4.36v.2a6.3,6.3,0,0,0,.65,3,5.9,5.9,0,0,0,2.36,2.26,22.18,22.18,0,0,0,4.67,1.9q3,.9,7.48,2.11a72.26,72.26,0,0,1,9.49,3.15,26.55,26.55,0,0,1,7,4.21,16,16,0,0,1,4.32,5.76,19.54,19.54,0,0,1,1.46,7.91Zm45.19,20.74h-15.43V2599.7h-21.34v-14.23h58.11v14.23h-21.34Zm82.83,108.92H1510l-13.85-40.15-13.85,40.15h-11.75l-21-61.8h14.46l12.71,41.55,13.76-41.73h11.57l13.76,41.73,12.71-41.55h14.11Zm77.58-.44H1552.7v-61.37h46.2v12H1566v12.45H1595v12H1566v12.89h33.31Zm-19.65-136.43v28h-15.43V2628l-27-42.48h18l16.73,28.15,17-28.15h17.53Zm76.1,118.29a19,19,0,0,1-1.65,8.11,16.65,16.65,0,0,1-4.62,6,20.78,20.78,0,0,1-7.07,3.68,30.69,30.69,0,0,1-9.1,1.27,40.68,40.68,0,0,1-13.76-2.41,36.42,36.42,0,0,1-12.27-7.41l8-9.56a40,40,0,0,0,8.64,5.44,23.07,23.07,0,0,0,9.69,2,11.79,11.79,0,0,0,6.53-1.54,4.83,4.83,0,0,0,2.32-4.25v-.17a5.32,5.32,0,0,0-.48-2.32,4.9,4.9,0,0,0-1.85-1.88,19.48,19.48,0,0,0-3.78-1.75q-2.42-.87-6.28-1.84a76.65,76.65,0,0,1-8.44-2.54,23.68,23.68,0,0,1-6.42-3.46,14,14,0,0,1-4.09-5.13,17.79,17.79,0,0,1-1.45-7.63v-.17a17.79,17.79,0,0,1,1.57-7.58,17.26,17.26,0,0,1,4.4-5.83,19.79,19.79,0,0,1,6.76-3.77,27.16,27.16,0,0,1,8.66-1.31,36.71,36.71,0,0,1,12.4,2,36,36,0,0,1,10.39,5.79l-7,10.17a44.57,44.57,0,0,0-8.07-4.43,20.6,20.6,0,0,0-7.89-1.62q-3.95,0-5.92,1.54a4.66,4.66,0,0,0-2,3.81v.18a5.52,5.52,0,0,0,.57,2.59,5.16,5.16,0,0,0,2.07,2,19.56,19.56,0,0,0,4.09,1.67q2.59.79,6.55,1.84a63.29,63.29,0,0,1,8.31,2.76,23.28,23.28,0,0,1,6.15,3.68,14.06,14.06,0,0,1,3.78,5,17.11,17.11,0,0,1,1.28,6.93Zm58.21-30.77h-18.67v48.92h-13.5v-48.92h-18.67v-12.45H1714Zm-15.49-59.56-6.41-15.73h-29.66l-6.41,15.73H1640.3l30.06-70.63h14.23l30.06,70.63Zm77.35-13.93v13.93h-50.4v-70.13h15.43v56.21Zm6.26,122.85H1770.2l-24.81-61.8h14.9l16,43.22,16-43.22h14.55Zm48.39-.44H1817v-61.37h13.5Zm7.37-108.48h-50.4v-70.13h15.43v56.21h35Zm45.23,108.48L1870,2744.45h-10.61v19.64h-13.5v-61.37h28.05q11.66,0,17.88,6.22,5.26,5.26,5.26,14v.18q0,7.45-3.64,12.14a21.07,21.07,0,0,1-9.51,6.88l15,21.92Zm-32.91-108.48v-70.13h15.43v70.13Zm42.68,0h-15.73l30.06-70.63h14.23l30.06,70.63h-16.13l-6.41-15.73h-29.66Zm72.11,99.8a45,45,0,0,1-11.27,6.88,37.08,37.08,0,0,1-14.95,2.85,35,35,0,0,1-13.11-2.37,30.23,30.23,0,0,1-10.17-6.57,29.71,29.71,0,0,1-6.62-10,33,33,0,0,1-2.37-12.62v-.18a31.37,31.37,0,0,1,19.29-29.24,32.58,32.58,0,0,1,12.89-2.5,45.32,45.32,0,0,1,7.5.57,35.85,35.85,0,0,1,6.27,1.62,29.17,29.17,0,0,1,5.44,2.63,40.46,40.46,0,0,1,4.91,3.59l-8.5,10.26a34.4,34.4,0,0,0-3.51-2.63,22.88,22.88,0,0,0-3.64-1.93,21.4,21.4,0,0,0-4.08-1.23,24.73,24.73,0,0,0-4.82-.44,15.7,15.7,0,0,0-6.88,1.54,18.58,18.58,0,0,0-5.61,4.13,18.92,18.92,0,0,0-3.77,6.06,20.16,20.16,0,0,0-1.36,7.42v.18a21.59,21.59,0,0,0,1.36,7.78,18.46,18.46,0,0,0,3.86,6.2,17.54,17.54,0,0,0,5.87,4.09,18.79,18.79,0,0,0,7.5,1.45,21.25,21.25,0,0,0,12.71-3.71v-8.83h-13.59v-11.66H1965Zm12.55-99.8h-15.23v-70.13h14.23l32.86,43.18v-43.18h15.23v70.13H2011.5l-34-44.58Zm14.54,108.48h-13.5v-61.37h13.5Zm69.87,0h-11.48l-29.72-39v39h-13.33v-61.37h12.45l28.75,37.78v-37.78h13.33Zm28.84,0h-13.5v-61.37h13.5Zm.32-110.63a32.85,32.85,0,0,1-7.56,2.51,45.67,45.67,0,0,1-9.22.85A36.28,36.28,0,0,1,2060,2654a34.58,34.58,0,0,1-18.94-19.13,36.94,36.94,0,0,1-2.71-14.13v-.2a36.56,36.56,0,0,1,2.71-14.08,36.17,36.17,0,0,1,7.51-11.52,34.84,34.84,0,0,1,11.52-7.82,37.52,37.52,0,0,1,14.83-2.86,46.33,46.33,0,0,1,9,.8,37.54,37.54,0,0,1,7.36,2.2,32.17,32.17,0,0,1,6.11,3.41,41.52,41.52,0,0,1,5.21,4.41l-9.82,11.32a37.17,37.17,0,0,0-8.37-5.81,21.32,21.32,0,0,0-9.57-2.1,19.55,19.55,0,0,0-8.17,1.7,19.34,19.34,0,0,0-6.46,4.71,21.94,21.94,0,0,0-4.21,7,23.65,23.65,0,0,0-1.5,8.47v.2a24,24,0,0,0,1.5,8.52,22.27,22.27,0,0,0,4.16,7,19.28,19.28,0,0,0,14.68,6.51,21.48,21.48,0,0,0,10.17-2.21,39.49,39.49,0,0,0,8.27-6l9.82,9.92a50.73,50.73,0,0,1-5.61,5.21A33.31,33.31,0,0,1,2091.1,2653.46Zm60.7,110.63-5.61-13.76h-25.95l-5.61,13.76h-13.76l26.3-61.8h12.45l26.3,61.8Zm16.9-108.48h-53.3v-70.13h52.8v13.73h-37.57v14.23h33.06v13.73h-33.06v14.73h38.07Zm-150-139.6-240.2-658.62L1529.34,2516h-28V2119.88l147.42-415H1907L2190,2516Z"/>
					 </g>
				  </g>
				</svg>
				<h2><?php
				if ( ! empty ( $post->post_parent ) )
				{
				    $parent_title = get_the_title($post->post_parent);
				    echo $parent_title;
				} else{
					the_title();
				}
				?></h2>
				<?php
				$banner_image = get_field('banner_image');
				$banner_url = $banner_image['sizes']["short-banner"];
				?>
				<div class="bg-image" style="background-image:url('<?php echo $banner_url; ?>')"></div>
			</div>
		<!-- </div> -->
	</header>
