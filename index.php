<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
}

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ruzger.hu - URL modul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1"><i class="fas fa-link"></i>&nbsp;ruzger.hu - URL modul</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://ruzger.hu"><i class="fas fa-book-open"></i>&nbsp;Portfólió</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="holder">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="shorteningType" class="form-label fw-bold">Adat típusa</label>
                        <select name="shorteningType" id="shorteningType" class="form-select">
                            <option value="link" selected>Link</option>
                            <option value="text">Szöveg</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="shorteningName" class="form-label fw-bold">Link elnevezése</label>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <span class="form-text">
                                    https://url.ruzger.hu/
                                </span>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="shorteningName" id="shorteningName" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>