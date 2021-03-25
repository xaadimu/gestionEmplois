<?php
/* Smarty version 3.1.30, created on 2021-03-25 07:51:19
  from "C:\xampp\htdocs\gestionEmplois\src\view\entreprise\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605c32e769ff20_56527488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36b97d0c2d56571b942b909407f6e2243d35d12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionEmplois\\src\\view\\entreprise\\liste.html',
      1 => 1616654962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605c32e769ff20_56527488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Entreprise</title>
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
Demandeur/liste">Demandeur </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/liste">Entreprise </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/deconnexion">Se Deconnecter </a></li>
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

    <div class="container" style="margin-top:80px;">
        <div class="col-md-6 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">Liste des Entreprises</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Poste vacant</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEntreprise']->value, 'entreprise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getPoste();?>
</td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>
                </div>
                </div>
        </div>
        <div class="col-md-6 col-xs-12 ">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire de gestion des entreprises</div>
                <div class="panel-body">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/insert">
                        <div class="form-group">
                            <label>Nom</label>
                            <input class="form-control" type="text" name="nom"/>
                        </div>
                        <div class="form-group">
                            <label>Poste vacant</label>
                            <input class="form-control" type="text" name="poste"/>
                        </div>
                        <div class="form-group">
                            <input class="btn-success" type="submit" name="valider" value="Ajouter offre"/>
                            <input class="btn-danger" type="reset" name="annuler" value="Annuler"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }
}
