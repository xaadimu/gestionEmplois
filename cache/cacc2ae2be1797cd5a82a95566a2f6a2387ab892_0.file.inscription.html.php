<?php
/* Smarty version 3.1.30, created on 2021-03-25 07:50:57
  from "C:\xampp\htdocs\gestionEmplois\src\view\user\inscription.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605c32d132f8c0_31913466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cacc2ae2be1797cd5a82a95566a2f6a2387ab892' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionEmplois\\src\\view\\user\\inscription.html',
      1 => 1616655045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c32d132f8c0_31913466 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <style>
        h1{
            color: #40007d;
        }
    </style>
</head>
<body>
<div class="nav navbar navbar-default navbar-fixed-top">
    <ul class="nav navbar-nav">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/connexion">Se Connecter </a></li>
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <!--li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getId/1">Menu test get id page </a></li>
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
<div class="col-md-6 col-md-offset-3" style="margin-top:150px;">
    <div class="panel panel-info">
        <div class="panel-heading">INSCRIPTION</div>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="alert alert-success">Données ajoutées!</div>
            <?php } else { ?>
            <div class="alert alert-danger">Erreur!</div>
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/connexion">
                <div class="form-group">
                    <label class="control-label">Entrer votre login</label>
                    <input class="form-control" type="text" name="login" id="login"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Entrer votre Mot de Passe</label>
                    <input class="form-control" type="password" name="password" id="pasword"/>
                </div>
                <div class="form-group">
                    <select>
                        <option value="">---Faites le choix de votre profil---</option>
                        <option value="">Demandeur d'emploi</option>
                        <option value="">Entrprise</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
