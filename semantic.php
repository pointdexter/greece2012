<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>The Semantic Grid System | Fluid Example</title>

    <!-- Stylesheets -->
	<link rel="stylesheet" href="http://localhost/greece2012/public/themes/semantic/stylesheets/css/responsive.css" type="text/css" media="screen" / />
	
	
    <!-- Scripts -->
	
	<!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	
	<!-- Header -->
	<header id="top">
		<h1><a href="http://semantic.gs/">Greece 2012</a></h1>
		<p>diary of an unemployed photographer</p>
<div id="nav">
	<ul>
      <li><a<?php echo url_match('/') ? ' class="current"': ''; ?> href="<?php echo URL_PUBLIC; ?>">Home</a></li>
<?php foreach($this->find('/')->children() as $menu): ?>
      <li><?php echo $menu->link($menu->title, (in_array($menu->slug, explode('/', $this->url)) ? ' class="current"': null)); ?></li>
<?php endforeach; ?> 
	</ul>
</div><!-- / #nav -->
	</header>

	<!-- Main Body -->
	<article id="maincolumn">
		
		<?php echo $this->content(); ?> 
	</article>

	<!-- Sidebar -->
	<section id="sidebar">
		
		<?php echo $this->content('sidebar'); ?>
	</section>
	
</body>
</html>