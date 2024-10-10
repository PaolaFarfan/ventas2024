<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            
</head>
<style>
    .modal-header {
        border-bottom: none;
        position: relative;
    }
    .modal-header .close {
        position: absolute;
        right: 15px;
        top: 15px;
        font-size: 1.5rem;
        color: #000;
    }
    .modal-body {
        text-align: center;
        padding: 2rem;
    }
    .modal-body img {
        max-height: 70px;
        margin-bottom: 1rem;
    }
    .modal-body h5 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
        color: #933A71;
    }
    .modal-body p {
        font-size: 1.25rem;
        color: #333;
    }
    
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="./views/plantilla/logo_marca.png" alt="Logo" width="160" height="100" class="d-inline-block align-text-top"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo BASEE_URL ?>login">NOVEDADES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASEE_URL ?>mujeres">MUJERES</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASEE_URL ?>hombres">HOMBRES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASEE_URL ?>niños">NIÑOS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo BASEE_URL ?>bebes">BEBES</a>
					</li>

				</ul>
                    <form class="d-flex me-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                     <a href="<?php echo BASEE_URL ?>carrito"><button class="btn btn-outline-primary me-2" type="button">
                        <i class="bi bi-cart"></i>
                    </button></a>
                    <a href="<?php echo BASEE_URL ?>megusta"><button class="btn btn-outline-danger me-2" type="button">
                        <i class="bi bi-heart"></i>
                    </button></a>
                    <a href="<?php echo BASEE_URL ?>login"><button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-person"></i>
                    </button></a>
                </div>
            </div>
        </nav>
