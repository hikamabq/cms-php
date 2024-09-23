<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = 'MAPADI | '.$model->title.'';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php Pjax::begin(); ?>
<div class="container-lg pt-5 mt-5">
    <div class="row">
        <div class="col-md-8 border-end">
            <div class="bg-white p-3 rounded">
                <h3 class="text-uppercase fw-bold"><?= $model->title ?></h3>
                <span class="badge bg-success small rounded-0 mb-2"><?= date('d M Y', strtotime($model->created_at)) ?></span>
                <?php if($model->id_pages == 5){ ?>
                    <a href="<?= Url::to(['cetak', 'slug' => $model->slug]) ?>" target="_blank" class="btn btn-primary d-block p-3">Download Materi</a>
                <?php } ?>
                    <div class="post-inline row">
                        <div class="col-md-12">
                            <div class="wadah-foto-detail">
                                <?= '<img src="'.Yii::getAlias('@web').'/uploads/'.$model->thumbnail.'" alt="'.$model->title.'" class="img-fluid img-responsive"/>' ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p><?= $model->description ?></p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-4 pt-3">
            <?php if($model->id_pages != 5){ ?>
            <div class="p-2 border-bottom border-success border-3">
                <span class="text-uppercase text-dark small">Lainnya</span>
            </div>
            <div class="py-3">
                <?php foreach ($other as $data) { ?>
                    <a href="<?= Url::to(['site/detail', 'detail' => $data->slug])?>" class="d-block py-1 text-dark">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="<?= Url::to('@web/uploads/'.$data->thumbnail.'') ?>" alt="" class="img-fluid img-hover">
                            </div>
                            <div class="col-9">
                                <span class="d-block small"><?= $data->title ?></span>
                                <span class="smaller d-block"><?= date('d M Y', strtotime($model->created_at)) ?></span>
                                <span class="smaller bg-success text-light py-0 px-2 rounded"><?= $data->pages->name ?></span>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php Pjax::end(); ?>