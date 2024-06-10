<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSN</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="main shadow py-4">

        <div class="container my-3">
            <div class="row justify-content-between">
                <div class="mr-auto">
                    <img src="images/logo.png" class="w-100 d-block">
                </div>
                <div>
                    <form action="<?php echo site_url($this->session->userdata('site_lang').'/haberler/arama'); ?>" method="post" class="form-inline shadow-sm">
                        <input class="form-control" type="search" name="arama_kelime">
                        <button class="btn bg-primary px-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="d-flex ml-auto">
					<div class="px-2">
						<?php $kullanici_adsoyad = $this->session->userdata('kullanici_adsoyad');?>
						<?php if ($this->session->userdata('kullanici_id')) { ?>
							<a href="<?php echo site_url($this->session->userdata('site_lang') .'/cikis'); ?>" class="text-dark">
								<b><?php echo $kullanici_adsoyad; ?>;</b>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
								<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
								</svg>
							</a>
						<?php } else { ?>
							<a href="<?= site_url($this->session->userdata('site_lang') . '/uye_ol') ?>" class="text-dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
									<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
									<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
								</svg>
							</a>
						<?php } ?>

					</div>
                    <div class="dropdown">
                        <button class="btn py-0" type="button" data-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">
                                <?php echo $this->lang->line('bildirimler'); ?>
                                <span class="text-primary text-right pl-4"><?php echo $this->lang->line('ayarlar'); ?></span>
                            </h6>
                            <a class="dropdown-item" href="#">
                                <p class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                                    </svg>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <small>test</small>
                            </a>
                            <a class="dropdown-item" href="#">
                                <p class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                                        <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
                                    </svg>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <small>test</small>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="btn py-0" type="button" data-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                            </svg> language
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="en">
                                English
                            </a>
                            <a class="dropdown-item" href="tr">
                                Turkish
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= site_url($this->session->userdata('site_lang') . '/haberler') ?>"><?php echo $this->lang->line('haberler')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('eglence')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('para')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('spor')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('oyun')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('yasam')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('alisveris')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Buy a Car</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('saglik')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('gida')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('seyahat')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('video')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('oyun')?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('emlak')?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            $index_baslik = "baslik_".$this->session->userdata('site_lang');
            $kategori_baslik = "baslik_".$this->session->userdata('site_lang');
        ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            <?php if ($index_haber_getir->num_rows() > 1): ?>
                                <ol class="carousel-indicators">
                                    <?php for ($i = 0; $i < $haber_getir->num_rows(); $i++): ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" <?=($i == 0) ? 'class="active"' : ''?>></li>
                                    <?php endfor; ?>
                                </ol>
                            <?php endif; ?>

                            <div class="carousel-inner">
                                <?php foreach ($index_haber_getir->result() as $i => $haber) :?>
                                    <div class="carousel-item <?=($i == 0) ? 'active' : ''?>">
                                        <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'. $haber->id?>" class="stretched-link">
                                            <img src="<?=site_url(). $haber->resim?>" class="d-block w-100 rounded">
                                        </a>
                                        <div class="carousel-caption">
                                            <h1 class="h3"><?=$haber->$index_baslik?></h1>
                                            <span>- <?=$haber->kaynak?></span>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>

                            <?php if ($index_haber_getir->num_rows() > 1): ?>
                                <button class="carousel-control-prev btn" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next btn" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            <?php endif?>
                        </div>

                        <div class="row">
                            <?php
                                $baslik = "baslik_".$this->session->userdata('site_lang');
                                foreach ($haber_getir->result() as $haber_list) :
                            ?>
                                <div class="col-lg-6">
                                    <div class="media bg-white rounded shadow-sm p-2 my-2">
                                        <img src="<?=$haber_list->resim?>" class="img-fluid mr-3 rounded" width="104" height="84">
                                        <div class="media-body small">
                                            <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                                <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'.$haber_list->id?>" class="text-dark">
                                                    <?=$haber_list->$baslik?>
                                                </a>
                                            </p>
                                            <span><img src="images/mag.png" class="mr-1"><?=$haber_list->kaynak?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card text-white mb-3">
                            <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'. $haber->id?>">
                                <img src="images/haber2.jpg" class="img-fluid">
                            </a>
                            <div class="card-img-overlay">
                                <p class="card-text font-weight-bold mb-1">
                                    Stephen Hawking once gave a simple answer as to whether there was a God
                                </p>
                                <p class="card-text">
                                    <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header bg-transparent text-dark h6">TRENDING NOW
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </h5>
                            <div class="card-body py-1">
                                <a href="" class="small text-truncate d-inline-block" style="max-width: 200px">With supporting text below as a natural lead-in to additional content.</a>
                                <a href="" class="small text-truncate d-inline-block" style="max-width: 200px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                                <a href="" class="small text-truncate d-inline-block" style="max-width: 200px">With supporting text below as a natural lead-in to additional content.</a>
                                <a href="" class="small text-truncate d-inline-block" style="max-width: 200px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                            </div>
                            <h5 class="card-header bg-transparent text-dark h6">RECOMMENDED SEARCHES</h5>
                            <div class="card-body py-1">
                                <div class="d-flex">
                                    <div class="border-right pr-2">
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">With supporting text below as a natural lead-in to additional content.</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">With supporting text below as a natural lead-in to additional content.</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                                    </div>
                                    <div class="pl-2">
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">With supporting text below as a natural lead-in to additional content.</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">With supporting text below as a natural lead-in to additional content.</a>
                                        <a href="" class="small text-truncate d-inline-block" style="max-width: 100px">Supreme Court Justices Could Be Forced Off Trump Case: Congressman</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card text-white mb-3">
                            <img src="images/haber3.jpg" class="img-fluid rounded">
                            <div class="card-img-overlay">
                                <p class="card-text font-weight-bold mb-1">
                                    Deepen Customer conncection
                                </p>
                                <p class="card-text">
                                    <span><img src="images/mag.png" class="mr-1">Pegasystems</span>
                                </p>
                            </div>
                        </div>
                        <?php
                            $baslik = "baslik_".$this->session->userdata('site_lang');
                            foreach ($haber_getir->result() as $haber_list) :
                        ?>
                            <div class="media bg-white rounded shadow-sm p-2 my-2">
                                <img src="<?=site_url() . $haber_list->resim?>" class="img-fluid mr-3 rounded" width="104" height="84">
                                <div class="media-body small">
                                    <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                        <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'.$haber_list->id?>" class="text-dark">
                                            <?=$haber_list->$baslik?>
                                        </a>
                                    </p>
                                    <span><img src="images/mag.png" class="mr-1"><?=$haber_list->kaynak?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-3">
            <div class="container border-top">
                <?php foreach ($kategoriler as $kategori): ?>
                <div class="row">
                    <div class="col-lg-12 py-3">

                        <ul class="list-group list-group-horizontal" style="font-size: 13.5px">
                            <span class="font-weight-bold"><?php echo $kategori[$kategori_baslik]; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </span>
                            <li class="list-group-item border-0 py-0 bg-transparent">My Watchlist</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Markets</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Investing</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Cryptocurrencies</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Currency Converter</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Personal Finance</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Real Estate</li>
                        </ul>
                    </div>
                    <?php foreach ($kategori['haberler'] as $haber): ?>
                        <div class="col-lg-3">
                            <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                                <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                                <div class="media-body small">
                                    <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                        <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'. $haber['id'];?>" class="text-dark">
                                            <?php echo $haber[$baslik ]; ?>
                                        </a>
                                    </p>
                                    <span><img src="images/mag.png" class="mr-1"><?php echo $haber['kaynak']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                </div>
                <?php endforeach?>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card shadow-sm p-3">
                            <span class="small">Daily poll (1 of 6)</span>
                            <span class="d-block text-dark pb-2" style="font-weight: 600;">Do you play instrument?</span>
                            <div class="btn-group btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                <label class="btn active border rounded-pill mb-3">
                                  <input type="radio" name="options" id="option1" checked> Yes, one
                                </label>
                                <label class="btn border rounded-pill mb-3">
                                  <input type="radio" name="options" id="option2"> Yes, more than one
                                </label>
                                <label class="btn border rounded-pill mb-3">
                                  <input type="radio" name="options" id="option3"> No
                                </label>
                            </div>
                            <a href="" class="btn btn-sm btn-primary rounded-pill mt-2">Next</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <img src="images/image.jpg" class="img-fluid">
                            <div class="card-body py-1">
                                <p class="mb-1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-between pt-0">
                                <div>
                                    <span class="small"><img src="images/mag.png" class="mr-1">Tha Washington Post</span>
                                </div>
                                <div class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 bg-white">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0056b3" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
                            </svg>
                            <span class="small font-weight-bold d-inline-block py-2">Shopping</span>
                        </div>
                        <div id="shoppingCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#shoppingCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#shoppingCarousel" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/shop.jpg" class="d-block w-100">
                                    <div class="carousel-caption">
                                        LOFT
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/shop2.jpg" class="d-block w-100">
                                    <div class="carousel-caption">
                                        Garnet Hill
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev btn" type="button" data-target="#shoppingCarousel" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next btn" type="button" data-target="#shoppingCarousel" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <img src="images/image.jpg" class="img-fluid">
                            <div class="card-body py-1">
                                <p class="mb-1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-between pt-0">
                                <div>
                                    <span class="small"><img src="images/mag.png" class="mr-1">Tha Washington Post</span>
                                </div>
                                <div class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        <section class="my-3">
            <div class="container border-top">
                <div class="row">
                    <div class="col-lg-12 py-3">
                        <ul class="list-group list-group-horizontal">
                            <span class="font-weight-bold">Entertainment
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </span>
                            <li class="list-group-item border-0 py-0 bg-transparent">For You</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Live News</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Weather</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">News</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Life Style</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Money</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Sports</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Entertainment</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="card shadow-sm">
                            <img src="images/haber4.jpg" class="img-fluid">
                            <div class="card-body py-1">
                                <p class="small font-weight-bold mb-1">
                                    Mike Tyson VS Jake Paul Fight Officially Postponed
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex justify-content-between pt-0">
                                <div>
                                    <span class="small"><img src="images/mag.png" class="mr-1">Tha Washington Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                        <div class="media bg-white rounded shadow-sm p-2 border-bottom">
                            <img src="images/haber-thumb1.jpg" class="mr-3 rounded">
                            <div class="media-body small">
                                <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                    <a href="" class="text-dark">
                                        Louisiana to become 1st state to require Ten Commandments be displayed in schools if governor signs bill
                                    </a>
                                </p>
                                <span><img src="images/mag.png" class="mr-1">MarketWatch</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="100%" class="rounded" src="https://www.youtube.com/embed/WjYeesfCpwU" title="These Beavers are Destroying My Pond!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        -->

        <section class="my-3">
            <div class="container border-top">
                <div class="row">
                    <div class="col-lg-12 py-3">
                        <ul class="list-group list-group-horizontal">
                            <span class="font-weight-bold">Watch
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </span>
                            <li class="list-group-item border-0 py-0 bg-transparent">For You</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Live News</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Weather</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">News</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Life Style</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Money</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Sports</li>
                            <li class="list-group-item border-0 py-0 bg-transparent">Entertainment</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <iframe width="100%" height="310" class="rounded" src="https://www.youtube.com/embed/WjYeesfCpwU" title="These Beavers are Destroying My Pond!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="100%" height="100%" class="rounded" src="https://www.youtube.com/embed/WjYeesfCpwU" title="These Beavers are Destroying My Pond!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <?php foreach ($haber_getir->result() as $haber_list) :?>
                            <div class="media bg-white rounded shadow-sm p-2 my-2">
                                <img src="<?=site_url() .$haber_list->resim?>" class="img-fluid mr-3 rounded" width="104" height="84">
                                <div class="media-body small">
                                    <p class="mb-0" style="max-height: 60px; overflow-y: hidden;">
                                        <a href="<?=site_url($this->session->userdata('site_lang')) .'/haber_detay/'.$haber_list->id?>" class="text-dark">
                                            <?=$haber_list->$baslik?>
                                        </a>
                                    </p>
                                    <span><img src="images/mag.png" class="mr-1"><?=$haber_list->kaynak?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>