<?php
/* Smarty version 3.1.30, created on 2021-03-24 21:00:12
  from "C:\xampp\htdocs\gesEmplois\src\view\demandeur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_605b9a4cbdc0d4_02554548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7003a78a87d2167f3b3c224866566cca7cc1bfb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gesEmplois\\src\\view\\demandeur\\liste.html',
      1 => 1616616010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605b9a4cbdc0d4_02554548 (Smarty_Internal_Template $_smarty_tpl) {
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


    <div class="col-md-12 col-xs-12" style="margin-top:160px;">
        <div class="panel panel-info">
            <div class="panel-heading">Liste des demandeurs</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Speciqlite</th>
                        <th>Niveau D'Etude</th>
                        <th>Experience Professionnelle</th>
                        <th>Actions</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeDemandeur']->value, 'demandeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['demandeur']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getPrenom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getAge();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getAdresse();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getEmail();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getTelephone();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getSpecialite();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getNiveau();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getExperience();?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/edit/<?php echo $_smarty_tpl->tpl_vars['demandeur']->value->getId();?>
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
    </div>
</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
    <div class="panel panel-info">
        <div class="panel-heading">AJOUT D'UN CV</div>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="alert alert-success">Données ajoutées!</div>
            <?php } else { ?>
            <div class="alert alert-danger">Erreur!</div>
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Demandeur/insert">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="prenom"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Age</label>
                    <input class="form-control" type="number" name="age" id="age"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="adresse" id="adresse"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Telephone</label>
                    <input class="form-control" type="number" name="telephone" id="telephone"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Specialite</label>
                    <input class="form-control" type="text" name="specialite" id="specialite"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Niveau D'Etude</label>
                    <input class="form-control" type="text" name="niveau" id="niveau"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Experience Professionnelle</label>
                    <input class="form-control" type="text" name="experience" id="experience"/>
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
</html>
<?php }
}
