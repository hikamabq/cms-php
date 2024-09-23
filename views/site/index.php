<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = 'Beranda';
?>
<?php Pjax::begin(); ?>
<div class="container">
    <div class="section-banner mb-3">
        <div class="row">
            <div class="col-md-6 mb-3 d-flex align-items-center">
                <div class="highlight">
                    <h1>Title or Header in here</h1>
                    <p class="small text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ducimus deleniti obcaecati. Deserunt nulla voluptas veritatis. Dolorum qui reiciendis odit, velit ratione rerum, porro, voluptas eveniet quam dolores atque possimus!
                    </p>
                    <a href="" class="btn btn-dark px-4">Read more</a>
                </div>
            </div>
            <div class="col-md-6 mb-3 d-none d-md-block">
                <div class="w-100 bg-light rounded" style="height: 250px;"></div>
            </div>
        </div>
    </div>
    <div class="section-posts mb-3">
        <div class="row mb-3">
            <div class="col-md-12">
                <h3>Artikel</h3>
            </div>
            <?php for ($i=0; $i < 4; $i++) {  ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-header border-bottom-0 bg-light rounded">
                        <div class="w-100" style="height: 150px;"></div>
                    </div>
                    <div class="card-body ps-0 pb-0">
                        <span class="d-block xsmall text-secondary mb-2">
                            <span>
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alarm"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                            </span>
                            14 Sept 2024
                        </span>
                        <b class="fw-semibold">Title or Header text in here</b>
                        <p class="small text-secondary">
                            <?php for ($s=0; $s <= $i; $s++) { 
                                echo "Lorem ipsum dolor sit amet consectetur adipisicing elit ";
                            } ?>
                        </p>
                    </div>
                    <!-- <div class="card-footer bg-white border-top-0 pt-0 pb-3 ps-0">
                        <span class="xsmall bg-secondary bg-opacity-50 py-1 px-2 text-light rounded-1 d-inline">Education</span>
                        <span class="xsmall bg-secondary bg-opacity-50 py-1 px-2 text-light rounded-1 d-inline">Social</span>
                    </div> -->
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Berita</h3>
            </div>
            <?php for ($i=0; $i < 4; $i++) {  ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card border-0 h-100">
                    <div class="card-header border-bottom-0 bg-light rounded">
                        <div class="w-100" style="height: 150px;"></div>
                    </div>
                    <div class="card-body ps-0 pb-0">
                        <span class="d-block xsmall text-secondary mb-2">
                            <span>
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="14"  height="14"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-alarm"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M12 10l0 3l2 0" /><path d="M7 4l-2.75 2" /><path d="M17 4l2.75 2" /></svg>
                            </span>
                            14 Sept 2024
                        </span>
                        <b class="fw-semibold">Title or Header text in here</b>
                        <p class="small text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                    </div>
                    <!-- <div class="card-footer bg-white border-top-0 pt-0 pb-3 ps-0">
                        <span class="xsmall bg-secondary bg-opacity-50 py-1 px-2 text-light rounded-1 d-inline">Education</span>
                        <span class="xsmall bg-secondary bg-opacity-50 py-1 px-2 text-light rounded-1 d-inline">Social</span>
                    </div> -->
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="section-banner mb-3">
        <div class="row">
            <div class="col-md-12 mb-3 d-none d-md-block">
                <div class="w-100 bg-white rounded p-5 text-center">
                    <h3 class="text-dark">Quotes</h3>
                    <p class="text-dark text-opacity-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dignissimos? Ullam maiores sed provident minus sunt voluptate, recusandae eius fuga ipsam ipsa unde id totam sint! Quae deleniti quidem officia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Pjax::end(); ?>