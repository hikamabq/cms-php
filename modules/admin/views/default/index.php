<?php

use app\commands\Helpers;
use app\modules\admin\models\relawan\Relawan;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;
use yii\helpers\Html;
use yii\widgets\Pjax;

?>

<?php Pjax::begin(); ?>
<div class="admin-default-index">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="p-4 bg-dark-pattern text-light rounded shadow-sm h-100">
                <span class="position-absolute end-0 pe-5">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="64"  height="64"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-confetti"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5h2" /><path d="M5 4v2" /><path d="M11.5 4l-.5 2" /><path d="M18 5h2" /><path d="M19 4v2" /><path d="M15 9l-1 1" /><path d="M18 13l2 -.5" /><path d="M18 19h2" /><path d="M19 18v2" /><path d="M14 16.518l-6.518 -6.518l-4.39 9.58a1 1 0 0 0 1.329 1.329l9.579 -4.39z" /></svg>
                </span>
                <h2 class="m-0">
                    Selamat Datang! 
                </h2>
                <p class="pt-3">
                Semoga harimu menyenangkan
                </p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white text-dark rounded shadow-sm h-100">
                <div class="mb-3">
                    <a href="<?= Url::to('/admin/pages') ?>">Pages</a>
                    <span class="text-secondary d-block">Fitur untuk menambah, mengubah, dan menghapus halaman website.</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white text-dark rounded shadow-sm h-100">
                <div class="mb-3">
                    <a href="<?= Url::to('/admin/profile') ?>">Settings</a>
                    <span class="text-secondary d-block">Fitur untuk mengatur identitas website.</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-3 bg-white text-dark rounded shadow-sm h-100">
                <div class="">
                    <a href="<?= Url::to('/admin/seo') ?>">SimpleSEO</a>
                    <span class="text-secondary d-block">Atur SEO website anda agar muncul di mesin pencarian.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Pjax::begin(); ?>