<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> <?php if(!is_front_page()){ echo ' | ' . get_the_title(); } ?></title>

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
		 kitId: 'rha2cdt',
		 scriptTimeout: 3000,
		 async: true
	  },
	  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
	</script>

	<!--<script type='text/javascript'>
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=ukiahtvkgtlv6vpfhwkd5a';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
	</script>-->

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_url' ); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo( 'stylesheet_url' ); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'stylesheet_url' ); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'stylesheet_url' ); ?>/images/apple-touch-icon-114x114.png">

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
				<svg class="main-logo" viewBox="0 0 2747 4104" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					 <title>DIAWV_Logo_White_WithoutName</title>
					 <g id="DIA_logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						  <g id="DIAWV_Logo_White_WithoutName" transform="translate(0.000000, -304.000000)" fill="#FFFFFE">
								<path d="M176.815,1177.39 C177.617,1349.72 180.047,1935 180.047,2714.21 C180.047,2936.94 321.98,3214.23 590.511,3516.11 C801.719,3753.54 1087.21,3999.36 1380.23,4196.78 C1667.56,4001.69 1948.72,3758.05 2158.15,3522.03 C2427.86,3218 2570.42,2938.66 2570.42,2714.21 L2570.42,1177.25 L1380.18,506.026 L176.815,1177.39 Z M1380.58,4408 L1332.22,4376.4 C1009.93,4165.73 691.579,3894.87 458.86,3633.23 C156.933,3293.8 3.837,2984.59 3.837,2714.21 C3.837,1785.71 0.388,1132.75 0.347,1126.271 L0.062,1074.217 L1380.65,304 L2746.64,1074.339 L2746.64,2714.21 C2746.64,2986.25 2592.99,3297.4 2289.95,3638.96 C2059,3899.28 1745.15,4168 1428.86,4376.23 L1380.58,4408 L1380.58,4408 Z" id="Fill-1"></path>
								<path d="M2018.76,2820.01 L1778.56,2161.39 L1529.4,2820.01 L1331.45,2820.01 L1331.45,2008.85 L1489.97,2008.85 L1489.94,2820.01 L1501.41,2820.01 L1501.41,2423.88 L1648.83,2008.85 L1907.11,2008.85 L2190.04,2820.01 L2018.76,2820.01 Z M1245.13,1520.19 L1170.16,1737.47 L1106.59,1737.47 L993.21,1403 L1071.49,1403 L1140.27,1627.89 L1214.76,1402.07 L1277.38,1402.07 L1351.87,1627.89 L1416.49,1417.81 L1457.91,1520.97 L1383.65,1737.47 L1320.08,1737.47 L1245.13,1520.19 Z M1318.54,2341.82 L1307.12,2358.23 C1300.98,2277.36 1277.7,2210.74 1237.22,2157.66 L1318.54,2028.72 L1318.54,2341.82 Z M767.7,2820.02 L557.539,2820.02 L557.539,2008.85 L744.98,2008.85 C981.45,2008.85 1142.2,2060.89 1227.23,2172.38 C1267.72,2225.49 1290.99,2292.08 1297.15,2372.96 C1298.25,2387.42 1298.83,2402.33 1298.83,2417.73 C1298.83,2691 1094.32,2820.02 767.7,2820.02 Z M1421.35,1401.15 L1501.98,1401.15 L1588.8,1635.04 L1675.62,1401.15 L1754.38,1401.15 L1620.12,1735.62 L1555.59,1735.62 L1421.34,1401.19 L1421.35,1401.15 Z M1379.26,813.098 L357.84,1382.95 C357.84,1382.95 360.583,1895.96 360.583,2638.75 C360.583,3069.83 933.378,3603.12 1379.26,3894.55 C1810.53,3610.62 2389.73,3074.61 2389.73,2638.75 L2389.73,1382.95 L1379.26,813.098 L1379.26,813.098 Z" id="Fill-3"></path>
								<polyline id="Fill-4" points="1337.24 2008.85 1331.46 2008.85 1331.46 2017.46 1337.24 2008.85"></polyline>
						  </g>
					 </g>
				</svg>
				<h1 class="page-title"><?php
				if ( ! empty ( $post->post_parent ) )
				{
				    $parent_title = get_the_title($post->post_parent);
				    echo $parent_title;
				} else{
					the_title();
				}
				?></h1>
				<?php
				if(is_404()){
					$banner_image = get_field('404_banner_image', 'options');
				}else{
					$banner_image = get_field('banner_image');
				}
				$banner_url = $banner_image['sizes']["short-banner"];
				?>
				<div class="bg-image" style="background-image:url('<?php echo $banner_url; ?>')"></div>
			</div>
		<!-- </div> -->
		<!-- <h1 class="sr-only"><?php bloginfo('name'); ?> <?php if(!is_front_page()){ echo ' | ' . get_the_title(); } ?></h1> -->
	</header>
