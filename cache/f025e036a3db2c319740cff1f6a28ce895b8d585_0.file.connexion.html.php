<?php
/* Smarty version 3.1.30, created on 2021-03-25 07:50:49
  from "C:\xampp\htdocs\gestionEmplois\src\view\user\connexion.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605c32c9130f33_34998980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f025e036a3db2c319740cff1f6a28ce895b8d585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionEmplois\\src\\view\\user\\connexion.html',
      1 => 1616655045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c32c9130f33_34998980 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
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
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/inscription">S'inscrire</a></li>
        <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/liste">Demandeur </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/liste">Entreprise </a></li>
        <l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web >
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
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
<div class="col-md-4  col-md-offset-4" style="margin-top:150px;">
    <div class="panel panel-info">
        <div class="panel-heading">AUTHENTIFICATION</div>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="alert alert-success">Données ajoutées!</div>
            <?php } else { ?>
            <div class="alert alert-danger">Erreur!</div>
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Presentation/index">
                <div class="form-group">
                    <label class="control-label">LOGIN</label>
                    <input class="form-control" type="text" name="login" id="login"/>
                </div>
                <div class="form-group">
                    <label class="control-label">MOT DE PASSE</label>
                    <input class="form-control" type="password" name="password" id="password"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="connect" value="SE CONNECTER"/>
                    <!--input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/-->
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php }
}
