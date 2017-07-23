<?php if (!defined('IN_PHPBB')) exit; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>
<script type="text/javascript">
// <![CDATA[
	var jump_page = '<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:';
	var on_page = '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>';
	var per_page = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '<?php echo (isset($this->_rootref['A_COOKIE_SETTINGS'])) ? $this->_rootref['A_COOKIE_SETTINGS'] : ''; ?>';
	var onload_functions = new Array();
	var onunload_functions = new Array();

	<?php if ($this->_rootref['S_USER_PM_POPUP'] && $this->_rootref['S_NEW_PM']) {  ?>
		var url = '<?php echo (isset($this->_rootref['UA_POPUP_PM'])) ? $this->_rootref['UA_POPUP_PM'] : ''; ?>';
		window.open(url.replace(/&amp;/g, '&'), '_phpbbprivmsg', 'height=225,resizable=yes,scrollbars=yes, width=400');
	<?php } ?>

	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	};

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	};

// ]]>
</script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/styleswitcher.js"></script>
<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_SUPER_TEMPLATE_PATH'])) ? $this->_rootref['T_SUPER_TEMPLATE_PATH'] : ''; ?>/forum_fn.js"></script>

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" rel="stylesheet" type="text/css" media="screen, projection" />

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/normal.css" rel="stylesheet" type="text/css" title="A" />
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/medium.css" rel="alternate stylesheet" type="text/css" title="A+" />
<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/large.css" rel="alternate stylesheet" type="text/css" title="A++" />

<?php if ($this->_rootref['S_CONTENT_DIRECTION'] == ('rtl')) {  ?>
	<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/bidi.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } ?>
</head>

<?php $this->_tpl_include('overall_header.html'); ?>

  <div class="fixeMarge"><section itemprop="about" class="SectionSynopsis">

 <!--mettre une image sap a droite du menu d'introduction-->
<div class="navbar">
			
  </ul>
  
<header class="EnteteTitres">
<span style="color:#000000;font-family:Arial;font-size:13px;">
</header><nav style="width: 380px;" class="nav-sommaire fixed2" role="navigation">
<header><h1 class="TitreHeader StopArrondi ToggleGecko"><img class="ToggleImgPlier" title="Plier" alt="Plier" src="images/langfr-280px-SAP_2011_logo.svg.png">
<img class="ToggleImgDeplier" title="Déplier" alt="Déplier" src="images/langfr-280px-SAP_2011_logo.svg.png" style="display:none;"></h1></header>
  
			</div>
			</div>
			bienvenue <?php echo (isset($this->_rootref['PSEUDO'])) ? $this->_rootref['PSEUDO'] : ''; ?>
<!DOCTYPE html>
     <title>CONTACTS</title>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
     <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<!--==============================header=================================-->
<header>
</header>

<!--=======content================================-->
<div id="content"><div class="ic">vous avez aimez ce forum  contactez nous pour plus d'implementation </div>
	<div class="container_12 bot-1">
		<div class="grid_12">
        	<h2 class="indent-2">contactez nous</h2>
		</div>
		   </div>
		   <div>
   <ul class="linklist rightside">
	<li class="icon-rules">
	
<img src="images/plural consulting.JPG" class="img-responsive" alt="" width="210" height="210"></li>
</ul>
  </div>	
        <div class="grid_6 push_1">
		
        	<div class="map"><iframe src="https://www.google.com/maps/dir/College+Charles+de+Gaulle,+Douala,+Cameroun/4.0861866,9.7623793/@4.0864118,9.7271669,13z/data=!3m1!4b1!4m8!4m7!1m5!1m1!1s0x10610dd3fe621a7d:0xd3d848651601a378!2m2!1d9.7623793!2d4.0861866!1m0?hl=fr-FR"></iframe></div>
			
            <address>
              <dl>
                  <dt>DOUALA cameroun<br>
PLURAL consulting Douala .</dt>
     Gyslain Tsopnang directeur executif/Consultant SAP/SD<br/>
	 Loenel Kom Responsable logiciel/Consultant SAP/PP-PM
                  <dd><span>Telephone:</span>+237 696 712 773</dd>
                  <dd><span>Telephone:</span>+237 655 886 084</dd>
				  <dd><span>Telephone:</span>+237 678 336 263</dd>
                  <dd><span>FAX:</span></dd>
                  <dd>E-mail: <a href="plutal.consulting@yahoo.com">plutal.consulting@yahoo.com</a></dd>
				   <dd>page facebook: <a href="facebook/C'SAP">C'SAP</a></dd>
              </dl>
              <dl>
                  <dt>Brazzaville congo, <br>
PLURAL consulting brazzaville</dt>
                  <dd><span>telephone:</span></dd>
                  <dd><span>Telephone:</span></dd>
                  <dd><span>FAX:</span></dd>
                  <dd>E-mail: <a href="plutal.consulting@yahoo.com">plutal.consulting@yahoo.com</a></dd>
              </dl>
           </address>
		   
		</div>
	</div>
</div>
<!--==============================footer=================================-->
<footer>
	<div class="container_12">
		<div class="grid_8">
		</div>
		<section style="margin-left: 405px; margin-top: 20px; clear: none;" class="articleBody"><p>Vous avez aimé ce forum?&nbsp;? Alors partagez-le en cliquant sur les boutons suivants&nbsp;: <a 
    title="Viadeo" href="http://www.viadeo.com/speechsap" rel="nofollow"><img alt="viadeo" src="images/kitbm-viadeo.png">viadeo</a>&nbsp;
	</a>&nbsp;<a title="Twitter" href="http://twitter.com/speechsap" rel="nofollow"><img alt="Twitter" src="images/kitbm-
	twitter.png">twitter</a>&nbsp;<a title="Facebook" href="http://www.facebook.com/speechsap" rel="nofollow"><img alt="Facebook" src="images/kitbm-facebook.png">facebook</a>&nbsp;
	</a>&nbsp;<script src="Pr%C3%A9sentation%20g%C3%A9n%C3%A9rale%20de%20l%27ERP%20SAP_fichiers/in.js" type="text/javascript"> lang: fr_FR</script>
			<span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block; text-align: center;">
			<span style="padding: 0px ! important; margin: 0px ! important; text-indent: 0px ! important; display: inline-block ! important; vertical-align: baseline ! important; font-size: 1px ! important;">
			<span id="li_ui_li_gen_1487526297247_1"><a id="li_ui_li_gen_1487526297247_1-link" href="javascript:void(0);">
			<span id="li_ui_li_gen_1487526297247_1-logo">in</span><span id="li_ui_li_gen_1487526297247_1-title">
			<span id="li_ui_li_gen_1487526297247_1-mark"></span><span id="li_ui_li_gen_1487526297247_1-title-text">Partager</span>
			</span></a></span></span></span><script type="IN/Share+init" data-url="$url"></script>&nbsp;</p></section>
</footer>

</body>
</html>
<?php $this->_tpl_include('overall_footer.html'); ?>