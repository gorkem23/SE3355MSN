<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSN</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

    <div class="main shadow py-4">

        <div class="container my-3">
            <div class="row justify-content-between">
                <div class="mr-auto">
                    <a href="<?=site_url($this->session->userdata('site_lang'))?>">
                        <img src="../images/logo.png" class="w-100 d-block">
                    </a>
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
							<a href="<?php echo site_url($this->session->userdata('site_lang').'/cikis'); ?>" class="text-dark">
								<b><?php echo $kullanici_adsoyad; ?>;</b>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
								<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
								</svg>
							</a>
						<?php } else { ?>
							<a href="uye_ol" class="text-dark">
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
                            </svg> EN
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

		<section>
			<div class="container mt-5">
				<div class="col-lg-12 text-center">
					<h2>Giriş</h2>
                    <div class="col-lg-8 mx-auto mt-5">
                        <form action="<?php echo site_url($this->session->userdata('site_lang').'/giris'); ?>" method="post">
                            <div class="form-row mb-3">
                                <div class="col-lg-6">
                                    <label for="email"><?php echo $this->lang->line('email')?>:</label>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6"><label for="sifre"><?php echo $this->lang->line('sifre')?>:</label></div>
                                <div class="col-lg-6"><input type="password" name="sifre" id="sifre" class="form-control"></div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-dark">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
				</div>

			</div>
		</section>

    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>