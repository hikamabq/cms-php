<?php

/** @var yii\web\View $this */

use app\modules\admin\models\pages\Pages;
use app\modules\admin\models\posts\Posts;
use yii\helpers\Url;
use yii\widgets\Pjax;

$pages = Pages::find()->where(['type' => 0])->all();

$this->title = 'Beranda';
?>
<?php Pjax::begin(); ?>
<div class="bg-white">
    <div class="container py-5">
        <div class="section-banner">
            <div class="row">
                <div class="col-md-6 mb-3 d-flex align-items-center">
                    <div class="highlight">
                        <a href="" class="text-decoration-none">
                            <h1 class="text-theme">Bergerak atau Tergantikan</h1>
                            <p class="small text-secondary">
                            Sentra Transformasi Peradaban (Transid) Merupakan Kumpulan Anak-anak muda yang resah dengan kondisi tempat tinggalnya, kemudian berkolaborasi untuk berdampak agar terwujud kemandirian sosial yang berkelanjutan lewat gerakan pemberdayaan masyarakat berbasis rumah baca.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="slick-slider">
                            <img src="<?= Url::to('@web/uploads/1288989184.jpeg') ?>" alt="" class="img-fluid rounded">
                            <img src="<?= Url::to('@web/uploads/793161939.jpg') ?>" alt="" class="img-fluid rounded">
                            <img src="<?= Url::to('@web/uploads/362919710.jpg') ?>" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-theme text-light">
    <div class="container py-5 text-center">
        <h3>Peta Keterdampakan</h3>
        <p class="text-light text-opacity-75">Dalam upaya untuk bersama-sama memayu hayuning bawono, Transid per September 2024 telah melaksanakan :</p>
        <div class="row py-3">
            <div class="col-md-1"></div>
            <div class="col-6 col-md-2 mb-3 text-center">
                <span class="d-block">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /><path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" /><path d="M12.5 15.5l2 2" /><path d="M15 13l2 2" /></svg>
                </span>
                <h3 class="text-theme-secondary">690</h3>
                Partisipasi
            </div>
            <div class="col-6 col-md-2 mb-3 text-center">
                <span class="d-block">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-dollar"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h3" /><path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" /><path d="M19 21v1m0 -8v1" /></svg>
                </span>
                <h3 class="text-theme-secondary">10</h3>
                Donatur
            </div>
            <div class="col-6 col-md-2 mb-3 text-center">
                <span class="d-block">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 21v-6a2 2 0 0 1 2 -2h2c.645 0 1.218 .305 1.584 .78" /><path d="M20 11l-8 -8l-9 9h2v7a2 2 0 0 0 2 2h4" /><path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" /></svg>
                </span>
                <h3 class="text-theme-secondary">12</h3>
                Rumah Baca
            </div>
            <div class="col-6 col-md-2 mb-3 text-center">
                <span class="d-block">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                </span>
                <h3 class="text-theme-secondary">13</h3>
                Kegiatan
            </div>
            <div class="col-6 col-md-2 mb-3 text-center">
                <span class="d-block">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="48"  height="48"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-codesandbox"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 7.5v9l-4 2.25l-4 2.25l-4 -2.25l-4 -2.25v-9l4 -2.25l4 -2.25l4 2.25z" /><path d="M12 12l4 -2.25l4 -2.25" /><path d="M12 12l0 9" /><path d="M12 12l-4 -2.25l-4 -2.25" /><path d="M20 12l-4 2v4.75" /><path d="M4 12l4 2l0 4.75" /><path d="M8 5.25l4 2.25l4 -2.25" /></svg>
                </span>
                <h3 class="text-theme-secondary">275</h3>
                Barang Tersalurkan
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section-posts my-3">
        <?php foreach($pages as $dataPages){ ?>
        <div class="row mb-3">
            <div class="col-md-12">
                <h3><?= $dataPages['name'] ?></h3>
            </div>
            <?php 
            $posts = Posts::find()->where(['id_pages' => $dataPages['id']])->all();
            foreach($posts as $data){  ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-header border-bottom-0 bg-light rounded p-0">
                        <a href="<?= Url::to('/detail/'.$data['slug'].'') ?>">
                            <div class="w-100 overflow-hidden" style="height: auto;">
                                <img src="<?= Url::to('@web/uploads/'.$data['thumbnail'] .'') ?>" alt="" class="img-fluid rounded">
                            </div>
                        </a>
                    </div>
                    <div class="card-body ps-0 pb-0">
                        <span class="d-block xsmall text-secondary mb-2">
                            <span>
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alarm"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                            </span>
                            <?= date('D M Y', strtotime($data['created_at'])) ?>
                        </span>
                        <a href="<?= Url::to('/detail/'.$data['slug'].'') ?>" class="text-decoration-none">
                            <b class="fw-semibold small text-dark"><?= $data['title'] ?></b>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    <!-- <div class="section-banner mb-3">
        <div class="row">
            <div class="col-md-12 mb-3 d-none d-md-block">
                <div class="w-100 bg-white rounded p-5 text-center">
                    <h3 class="text-dark">Quotes</h3>
                    <p class="text-dark text-opacity-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dignissimos? Ullam maiores sed provident minus sunt voluptate, recusandae eius fuga ipsam ipsa unde id totam sint! Quae deleniti quidem officia.
                    </p>
                    <span class="text-muted small">Hikam Abqory</span>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="bg-theme-secondary text-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h4>Mari buat rumah baca <br> di lingkunganmu !</h4>
            </div>
            <div class="col-md-6 text-end">
                <a href="" class="btn btn-outline-light">Bisa tanya kami caranya</a>
            </div>
        </div>
    </div>
</div>
<?php 
    $this->registerJs("
        $('.slick-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        });
    ");
    ?>
<?php Pjax::end(); ?>