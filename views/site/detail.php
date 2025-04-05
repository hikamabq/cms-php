<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = $model->title;
?>
<?php Pjax::begin(); ?>
<div class="container">
    <div class="section-posts mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="card border-0 h-100">
                            <div class="card-header bg-white pb-0 border-bottom-0">
                                <h3 class="fw-semibold"><?= $model->title ?></h3>
                            </div>
                            <div class="card-body pb-0">
                                <?php if(!empty($model->thumbnail) || $model->thumbnail != null){ ?>
                                <div class="w-100 bg-light rounded mb-3">
                                    <img src="<?= Url::to('@web/uploads/'.$model->thumbnail .'') ?>" alt="" class="img-fluid rounded">
                                </div>
                                <?php } ?>
                                <p class="small text-secondary">
                                    <?= $model->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php Pjax::end(); ?>