<?php

use yii\helpers\Html;

$this->title = 'Главная';

?>  

<?php $this->beginBlock('tm-bg') ?>
<div class="tm-main-bg" style="background-image: url(/web/<?= $page->img ?>);">
</div>
<?php $this->endBlock() ?>

<!-- Welcome section -->
<section class="tm-welcome">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-header-floating"><?= $blocks[0]->title ?></h2>         
        </div>
    </div>
    
    <div class="row tm-welcome-row">
        <?php foreach ($blocks[0]->columns as $column): ?>
            <article class="col-lg-6 tm-media">
            <img src="<?= $column->getImage() ?>" alt="Welcome image" class="img-fluid tm-media-img" />
            <div class="tm-media-body">
                <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase"><?= $column->header ?></h3></a>
                <p><?= $column->content ?></p>
            </div>
        </article>
        <?php endforeach ?>
    </div>
    
    <div class="row tm-welcome-row-2">
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-binoculars tm-article-icon"></i>
                <h3 class="tm-article-title">Template Usage</h3>
                <p class="tm-article-text">You can feel free to edit and use New Vision template for your commercial websites. Title color is #333</p>
                <a class="tm-btn tm-btn-rounded tm-article-link" href="#">More Details</a>
            </article>    
        </div>
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-microscope tm-article-icon"></i>
                <h3 class="tm-article-title">New Vision</h3>
                <p class="tm-article-text"><a rel="nofollow" target="_parent" href="https://templatemo.com/tm-542-new-vision">New Vision</a> comes with 4 different HTML pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color is #666</p>
            </article>    
        </div>
        <div class="col-lg-4 tm-dotted-box-container">
            <article class="tm-dotted-box">
                <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                <h3 class="tm-article-title">Download Sites</h3>
                <p class="tm-article-text">Do not re-distribute our template ZIP file on your website. Or contact us first. Button color is #C99</p>
                <a class="tm-btn tm-article-link" href="#">Read More...</a>
            </article>
        </div>
    </div>
</section>

<!-- Featured -->
<section class="tm-featured">
    <div class="row">
        <div class="col-12">
            <h2 class="tm-section-header tm-section-header-small">Featured Carousel Items</h2>        
        </div>
    </div>
    
    <!-- Carousel -->
    <div class="grid tm-carousel">
        <figure class="effect-honey">
            <img src="img/gallery-item-01.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Best</span> HTML Template</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-02.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Top</span> CSS Theme</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-03.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Best</span> HTML Template</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-04.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Great</span> Web Theme</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-05.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Best</span> HTML Collection</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-06.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Max</span> CSS Layout</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-07.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Best</span> HTML Layout</i></h4>
            </figcaption>
        </figure>
        <figure class="effect-honey">
            <img src="img/gallery-item-08.jpg" alt="Featured Item">
            <figcaption>
                <h4><i><span>Best</span> CSS Template</i></h4>
            </figcaption>
        </figure>
    </div>
</section>