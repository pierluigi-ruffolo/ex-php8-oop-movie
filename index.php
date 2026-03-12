<?php
require_once "./Traits/Visualizable.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
require_once "./db.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header class="border-bottom py-3 mb-5 shadow-sm sticky-top">
        <div class="container d-flex justify-content-center">
            <h1 class="h3 mb-0 fw-bolder text-dark tracking-tighter">
                BOOL<span class="text-primary">MOVIES</span>
            </h1>
            </a>
        </div>
    </header>
    <main class="container mb-5">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-transparent border-0 pt-4 px-4 pb-0">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title fw-bold text-dark mb-0 text-uppercase">
                                Titolo Film
                            </h5>
                            <span class="badge rounded-pill bg-info-subtle text-info border border-info-subtle">
                                NEW
                            </span>
                        </div>
                    </div>
                    <div class="card-body px-4">
                        <div class="mb-3">
                            <span class="badge bg-secondary-subtle text-secondary border-0 fw-normal">Genere 1</span>
                            <span class="badge bg-secondary-subtle text-secondary border-0 fw-normal">Genere 2</span>
                        </div>

                        <p class="card-text text-muted small">
                            Inserisci qui la descrizione del film recuperata tramite il tuo metodo o proprietà.
                        </p>
                    </div>

                    <div class="card-footer bg-body-tertiary border-0 px-4 py-3">
                        <div class="d-flex justify-content-between align-items-center text-secondary">
                            <div class="small">
                                2026
                            </div>

                            <div class="fw-bold text-warning small">
                                Voto:
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>