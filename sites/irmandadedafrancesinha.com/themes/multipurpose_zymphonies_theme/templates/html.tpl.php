<!DOCTYPE html>
<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=47rjbOgPz4">
<link rel="icon" type="image/png" href="/favicon-32x32.png?v=47rjbOgPz4" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png?v=47rjbOgPz4" sizes="16x16">
<link rel="manifest" href="/manifest.json?v=47rjbOgPz4">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=47rjbOgPz4" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if IE 8 ]>    <html class="ie8 ielt9"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>