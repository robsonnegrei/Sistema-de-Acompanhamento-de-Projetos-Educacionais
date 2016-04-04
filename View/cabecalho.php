<?php
/**
 * Created by PhpStorm.
 * User: Ronson Cavalcante
 * Date: 22/03/2016
 * Time: 10:33
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SAPE - Visitante</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="../styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../styles/main.css">
    <style type="text/css" id="holderjs-style"></style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>
<div id="header-topbar-option-demo" class="page-header-topbar">
    <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">SAPE</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main">
            <ul class="nav navbar navbar-top-links navbar-right mbn">
                <li>
                    <!-- NOME DO CABA!!!-->
                    <span class="hidden-xs">Visitante></span><span></span></a>
                </li>
                <li><a href="../Controller/ControleLogin.php?acao=sair">Sair</a></li>
            </ul>
        </div>
    </nav>
    <!--BEGIN MODAL CONFIG PORTLET-->
    <div id="modal-config" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                        ×</button>
                    <h4 class="modal-title">
                        Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                        porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                        Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                        magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                        vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                        aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                        vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                        hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                        ultricies felis.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">
                        Close</button>
                    <button type="button" class="btn btn-primary">
                        Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--END MODAL CONFIG PORTLET-->
    </div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav style="min-height: 100%;" id="sidebar" role="navigation" data-step="2" data-intro="Template has <b>many navigation styles</b>" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <div class="clearfix"></div>
                    <li class="active">
                        <a href="index.php">
                            <i class="glyphicon glyphicon-book">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Regionais</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-messages">
                                <span class="menu-title" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" ">Regionais</span>
                                <span class="caret"></span>
                        <span class="menu-title"></span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Ver Escolas</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Ver Portifólio</a></li>
                        </ul>
                        </div>
                    </li>

            </ul>
        </div>
    </nav>
</body>
</html>