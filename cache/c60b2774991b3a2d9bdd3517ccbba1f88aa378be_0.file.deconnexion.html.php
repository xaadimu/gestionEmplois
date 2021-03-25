<?php
/* Smarty version 3.1.30, created on 2021-03-25 05:39:24
  from "C:\xampp\htdocs\gestionEmplois\src\view\user\deconnexion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605c13fca117d8_56260031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60b2774991b3a2d9bdd3517ccbba1f88aa378be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionEmplois\\src\\view\\user\\deconnexion.html',
      1 => 1616647054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c13fca117d8_56260031 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <!-- integration de javascript dans le moteur de rendu de vue Smarty -->
    
    <?php echo '<script'; ?>
 language=javascript>
        function load_design() {
            document.getElementById("design_js").style.color = "#40007d";
        }

    <?php echo '</script'; ?>
>
    
</head>
<body onload="load_design()">
<div class="nav navbar navbar-default navbar-fixed-top">
    <ul class="nav navbar-nav">
        <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li-->
        <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/liste">Demandeur </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/liste">Entreprise </a></li-->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/connexion">Se Connecter </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/inscription">S'inscrire </a></li>
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li-->
    </ul>
</div>


<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
    <div class="panel panel-info">
        <div class="panel-heading">BIENVENUE SUR NOTRE PLATEFORME</div>
        <div class="panel-body">
            <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                Cette plateforme est conçue pour faciliter aux jeunes diplomès la recherche
                d'un emploi. Elle vous permet de creer, publier vos cv et egalement faire la mise à jour
                si necessaire.</br>
                Vous etes jeunes, ambitieux et à la recherche d'un job. </br>Ajoutez rapidedement vos CV
                et consultez les offres disponibles des entreprises.
            </div>
            <div id="design_js">BONNE CHANCE! <h1>L'emploi des jeunes notre priorité!!!</h1></div>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
