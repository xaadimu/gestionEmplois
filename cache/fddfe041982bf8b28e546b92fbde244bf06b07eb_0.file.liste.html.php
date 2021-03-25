<?php
/* Smarty version 3.1.30, created on 2021-03-25 00:53:07
  from "C:\xampp\htdocs\gesEmplois\src\view\entreprise\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605bd0e3e47be8_96501634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddfe041982bf8b28e546b92fbde244bf06b07eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gesEmplois\\src\\view\\entreprise\\liste.html',
      1 => 1616629986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605bd0e3e47be8_96501634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
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
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/liste">Demandeur </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/liste">Entreprise </a></li>
    </ul>
</div>

<div class="container" style="margin-top:80px;">
    <div class="col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Liste des entreprises</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Poste</th>
                        <th>Demandeurs</th>
                        <th>Actions</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getDemandeurs()->getPrenom();?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/edit/<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getId();?>
">Editer</a></td>
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
    <div class="col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire de gestion des entreprises</div>
            <div class="panel-body">
                <div class="panel-body">
                    <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
                    <div class="alert alert-success">Données ajoutées!</div>
                    <?php } else { ?>
                    <div class="alert alert-danger">Erreur!</div>
                    <?php }?>
                    <?php }?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Entreprise/insert">
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Poste</label>
                            <input class="form-control" type="text" name="poste" id="poste"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Demandeurs</label>
                            <select class="form-control" name="iddemandeurs" id="iddemandeurs">
                                <option value="">Embaucher parmi les demandeurs</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeDemandeur']->value, 'entreprise');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value->getPrenom();?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
    </div>
</div>
</body>
</html>
<?php }
}
