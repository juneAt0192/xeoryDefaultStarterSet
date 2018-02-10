<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"><!-- SEO対策 -->
	<meta charset="UTF-8">
	<title><?php bzb_title(); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<?php wp_head(); ?><!-- wpの設定で絶対必要 -->

<?php echo get_option('analytics_tracking_code');?><!-- SEO対策か？？ xeory独特の関数-->
<?php echo get_option('webmaster_tool');?><!-- SEO対策か？？xeory独特の関数 -->

</head>

<body <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage"><!-- SEO対策か？？ -->

<header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader"><!-- header -->
	<p class="testweb">
		aiueo
	</p>
</header>


<nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement"><!-- nav -->

</nav>
