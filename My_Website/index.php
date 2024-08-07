<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: #100c1f">
    <main>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand shadow" href="#" style="color: #00ffcc6c;"><i>MATHS ETEC</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Destaques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-disabled="true">Mais</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Procurando por..."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><img src="img/icon/lupa.png"
                                style="height: 24px; filter: invert(100%) contrast(100%);"></button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="bg-dark">
            <div id="demo" class="carousel slide mb-5 p-5" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img/csharp.png" alt="Cubo" class="d-block w-50 m-auto">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img/javascript.png" alt="Piramide" class="d-block w-50 m-auto">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img/python.png" alt="Prisma" class="d-block w-50 m-auto">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Who am i?</h5>
                                <p class="card-text">
                                    I'm Miguel Isack, programming student at ETEC Registro. Since I started venturing
                                    into the world of programming, I fell in love with the logic and creativity that
                                    this area requires. In my daily life, I am always looking to learn something new, be
                                    it a new language, framework or even optimization techniques.

                                    I like challenges and solving problems, and programming gives me exactly that. In my
                                    spare time, I enjoy exploring personal projects and contributing to the open source
                                    community. I'm also a fan of technology in general and always keep an eye on the
                                    latest trends and innovations.

                                    Furthermore, I'm a nice person, always willing to help and exchange ideas. I'm
                                    excited about the opportunities programming can bring me and the impact I can make
                                    on the world through technology. Let's code!
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>