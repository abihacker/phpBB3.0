<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
 <div class="fixeMarge"><section itemprop="about" class="SectionSynopsis">

 <!--mettre une image sap a droite du menu d'introduction-->
<div class="navbar">
			<!--<div class="inner"><span class="corners-top"><span></span></span>-->
			
	
	<!--<figure class="figure-center"><img class="ImgCliquable figure-img-caption" src="images/sap.jpg" alt="en route vers le sap"></li></figure>-->
  </ul>
  
<header class="EnteteTitres">
<span style="color:#000000;font-family:Arial;font-size:13px;">
</header><nav style="width: 380px;" class="nav-sommaire fixed2" role="navigation">
<header><h1 class="TitreHeader StopArrondi ToggleGecko"><img class="ToggleImgPlier" title="Plier" alt="Plier" src="images/langfr-280px-SAP_2011_logo.svg.png">
<img class="ToggleImgDeplier" title="Déplier" alt="Déplier" src="images/langfr-280px-SAP_2011_logo.svg.png" style="display:none;"></h1></header>
  
			</div>
			</div>
bienvenue <?php echo (isset($this->_rootref['PSEUDO'])) ? $this->_rootref['PSEUDO'] : ''; ?>
       <div class="container_24 top-3">
        	<div class="grid_24 align-c">
				<h2 class="h2-2"><b>PRESENTATION DES MODULES</b></h2>
            </div>   
            <div class="grid_24">    
                <div class="box-5">
                	<div>
                    	<img src="images/sap1.jpg" alt="" class="img-border" width="100" height="50">
                       <a href="#" <p class="text-1">Financial(SAP FI)</p></a>
                        <p>Le module FI (Financial) contient toutes les écritures des ventes et achats, lesquelles se déversent dans
						la comptabilité générale via la comptabilité client ou fournisseur.</p>
						     <h1>telecharger le pdf</h1>
							  <form method="POST" enctype="multipart/form-data">
							    <input type="file" name="fichier" />
								 <input type="submit" value="envoyer" />
								</form>
                       <!-- <a href="www.sap.com/fico" class="link-1">read more</a>-->
                    </div>
                    <div>
                    	<img src="images/sap1.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Controlling (SAP CO)</p>
                        <p>Le module CO (Controlling) concerne le contrôle de gestion.</p>
                        <!--<a href="www.sap.com/co" class="link-1">read more</a>-->
                    </div>
                    <div>
                    	<img src="images/SAP-MM1.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Material Management(SAP MM)</p>
                        <p>est le module logistique de SAP. Il gère les achats d’articles et les stocks d’articles </P>
						(les mouvements de stocks : entrées et sorties, transferts de stocks).</p>
                        <!--<a href="www.sap.com/mm" class="link-1">read more</a>-->
                    </div>
                    <div>
                    	<img src="images/2f7dd7c.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Human ressource(SAP HR/HCM)</p>
                                     <p>Données de base du personnel
                                      Suivi du temps de travail
                                       Suivi des carrières
                                       Gestion des compétences
                                       Recrutement de personnel
                                       Gestion des demandes de déplacement
                                       Suivi des frais de déplacement
                                       Gestion de la paie
                                       Employee self-service
                                        Manager self-service</p>
                        <!--<a href="#" class="link-1">read more</a>-->
                    </div>
                    <div>
                    	<img src="images/sap-sd-grid.PNG" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Sale Distribution(SAP SD)</p>
                        <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
                        <!--<a href="#" class="link-1">read more</a>-->
                    </div>
                    <div class="last">
                    	<img src="images/SAP-ABAP-Consultants.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Devellopment(SAP ABAP)</p>
                        <p>ABAP: application for business avdanved programming il s'agit du langage de programmation du systeme qui permet de faciliter
						le travail du consultant en lui offrant une interface</P>
						       conviviale.</p>
                        <!--<a href="#" class="link-1">read more</a>-->
						<div class="last">
                    	<img src="images/SAP-Basis-Logo.PNG" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Administration(SAP BASIS)</p>
                        <p>ABAP: application for business avdanved programming il s'agit du langage de programmation du systeme qui permet de faciliter
						le travail du consultant en lui offrant une interface</P>
						       conviviale.</p>
                        <!--<a href="#" class="link-1">read more</a>-->
						<div class="last">
                    	<img src="images/sap_pm.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Production Planning(SAP PP)</p>
                        <p>Le module PP (Production Planning) concerne la gestion de la Production.</P>
						      conviviale.</p>
                        <!--<a href="#" class="link-1">read more</a>-->
						<div class="last">
                    	<img src="images/SAP-MM-WM.jpg" alt="" class="img-border" width="100" height="50">
                        <p class="text-1">Warehouse Management(SAP WM)</p>
                        <p>Le module PP (Production Planning) concerne la gestion de la Production.</P>
						       conviviale.</p>
                        <!--<a href="#" class="link-1">read more</a>-->
                    </div>
                </div>
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
</body>
</html>
<?php $this->_tpl_include('overall_footer.html'); ?>