<?php 
use app\assets\PublicAsset;
use yii\helpers\Html;

PublicAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?= Html::encode($this->title) ?></title>
    
     <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
     <!-- https://fontawesome.com/ -->
     <!-- https://kenwheeler.github.io/slick/ -->
	 <!-- https://getbootstrap.com -->
	 <?php $this->head() ?>
<!--
   
New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">New Vision</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                <?= Html::a('Главная', ['site/index'], ['class' => "nav-link tm-nav-link"]) ?>
                              </li>
                              <li class="nav-item">
                                 <?= Html::a('О компании', ['site/our-company'], ['class' => "nav-link tm-nav-link"]) ?>
                              </li>
                              <li class="nav-item">
                                 <?= Html::a('Сервис', ['site/service'], ['class' => "nav-link tm-nav-link"]) ?>
                              </li>
                              <li class="nav-item">
                                 <?= Html::a('Контакты', ['site/contact'], ['class' => "nav-link tm-nav-link"]) ?>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <?php if (isset($this->blocks['tm-bg'])): ?>
                    <?= $this->blocks['tm-bg'] ?>
                <?php endif; ?>        
            </div>
        </div>
        
        <!-- Main -->
        <main>
            <?= $content ?>
            
            <footer>
                Copyright &copy; 2020 New Vision - Design: <a href="https://templatemo.com">TemplateMo</a>
            </footer>
            
        </main>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>