          <?php
            require_once "header-config.php";
            $header_data = new header();
            extract($header_data->data);
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->controller; ?></title>

	<!-- core CSS -->
    <link href="<?php echo UICSS ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/animate.min.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/main.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo UICSS ?>/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo UICSS ?>/owl.theme.default.min.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  <?= $contacts["phone"] ?></p></div>
                        <div class="top-number"><p><i class="fa fa-envelope"></i>  <?= $contacts["email"] ?></p></div>

                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <?php
                                foreach($social  as $social){
                                ?>
                                <li><a href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a></li>
                                <?php
                            }
                            ?>
                            </ul>
                            <!-- <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div> -->
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?=BASE_URL.$logo["file"] ?>" alt="logo">
                    <div class="logo-data">
                    <h5><?= $logo["name"] ?></h5>
                    <p><?= $logo["slogan"] ?></p>
                    </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="#feature"><?= $menu["menu_two"] ?></a></li>
                    <li><a href="#recent-works"><?= $menu["menu_three"] ?></a></li>
                    <li><a href="index.html"><?= $menu["menu_four"] ?></a></li>
                    <li><a href="index.html"><?= $menu["menu_five"] ?></a></li>
                    <li><a href="index.html"><?= $menu["menu_six"] ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <?php
                        foreach($category as $category_data){
                        ?>

                        <?php $article_link = urldecode(strtolower(str_replace(' ','-',$category_data['name_'.$this->lang.''])));?>
                        <li>

                          <a href="<?php DOMAINNAME ?>/project/<?= $this->lang ?>/category/<?= $category_data['id'] ?>/<?=$article_link ?>"><?=$category_data['name_'.$this->lang.''] ?></a>
                        </li>
                        <?php
                        }
                        ?>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

	</header><!--/header-->
