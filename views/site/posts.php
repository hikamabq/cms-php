<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = $slug;
?>
<?php Pjax::begin(); ?>
<div class="container">
    <div class="section-title mb-3">
        <div class="bg-white py-3">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <h1 class="text-capitalize"><?= $slug ?></h1>
                    <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4 mb-3 d-flex align-items-center">
                    <form class="d-flex w-100" role="search">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-sm btn-dark px-3 rounded-pill" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <div class="section-posts mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <?php for ($i=0; $i < 8; $i++) {  ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-header border-bottom-0 bg-light rounded">
                                <a href="<?= Url::to('/detail/slug') ?>">
                                    <div class="w-100" style="height: 150px;"></div>
                                </a>
                            </div>
                            <div class="card-body ps-0 pb-0">
                                <span class="d-block xsmall text-secondary mb-2">
                                    <span>
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alarm"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                                    </span>
                                    14 Sept 2024
                                </span>
                                <a href="<?= Url::to('/detail/slug') ?>" class="text-decoration-none">
                                    <b class="fw-semibold text-dark">Title or Header text in here</b>
                                    <p class="small text-secondary">
                                        <?php for ($s=0; $s <= $i; $s++) { 
                                            echo "Lorem ipsum dolor sit amet consectetur adipisicing elit ";
                                        } ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php Pjax::end(); ?>