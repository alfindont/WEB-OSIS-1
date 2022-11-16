<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- BOXICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body>
    <header class="header" id="headers">
        <div class="nav__contain">
            <nav class="nav container">

                <a href="#" class="nav__logo">
                    <img src="{{ asset('img/logo-wk.png') }}" class="nav__img">
                    <br><br>
                    <h2 class="logo">SMK WIKRAMA BOGOR</h2>
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#project" class="nav__link">Project</a>
                        </li>
                        <li class="nav__item">
                            <a href="#profile" class="nav__link">Profile</a>
                        </li>
                    </ul>  
                </div>
                <div class="login__btn">
                    <a href=""><input type="button" value="Login" class="login__button"></a>
                </div>
            </nav>
        </div>
    </header>

    <div class="home__container" id="home">
    
    <div class="img__container">
        <img src="{{ asset('img/gdwikrama.jpg') }}" alt="">
            <div class="bdr-clr">
                <img src="{{ asset('img/Logo-Osis1.png') }}" alt="">
                <p>Organisasi Siswa Intra Sekolah <br> (OSIS)</p>
                <i class="bx bxl-youtube"></i><i class="bx bxl-instagram"></i>
            </div>
    </div>
    </div>

    <div class="footerP1">
        <div class="square1">
            <p>OSIS WIKRAMA</p>
        </div>
        <div class="square2"></div>
        <div class="square3"></div>
    </div>

    <br>

   <section class="about section container" id="about"> 
        <div class="about__container grid">
            <div class="about__data">
                <h2 class="section__title">About</h2>
            </div>
        </div>
        <img src="{{ asset('img/Logo-Osis2.png') }}" alt="" class="img__about">
   </section>

    <div class="footerP1A">
        <div class="square4"></div>
        <div class="triangle1"></div>
    </div>
    
</body>

<script src="{{ asset('js/main.js') }}"></script>

</html>