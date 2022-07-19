<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>Quran app</title>
    <link rel="stylesheet" href="../assets/css/icons.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="https://kit.fontawesome.com/3d2d859c73.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lateef&display=swap');

        body {

            background-image: url("../assets/images/resources/slide-4.jpg");
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card-body:hover {
            transform: translateY(-10px);
        }


        .suralar .card-body {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.001);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.5s;
        }

        .transparent_glass {
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.001);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.5s;
        }

        .icons i {
            color: #b5b3b3;
            border: 1px solid #b5b3b3;
            padding: 6px;
            margin-left: 4px;
            border-radius: 5px;
            cursor: pointer;
        }

        .activity-done {
            font-weight: 600;
        }

        .list-group li {
            margin-bottom: 12px;
        }


        .ayahs_list {
            list-style: none;
            padding: 10px;
            border: 1px solid #e3dada;
            margin-top: 12px;
            border-radius: 5px;
            background: #fff;
        }

        .arab-text {
            font-family: 'Lateef', cursive;
            font-size: 45px;
        }

        .arab-text2 {
            font-family: 'Lateef', cursive;
        }

        .profile-image img {
            margin-left: 3px;
        }

        .audio_hover {
            transition: 1.5s;
            transform: scale(1.05);
        }

        @media only screen and (max-width: 1030px) {
            .container {
                margin-top: 50px;
            }
        }
    </style>

</head>
<body itemscope>

<div class="preloader">
    <div class="loader-inner ball-scale-multiple">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<main>
    <header class="style1">
        <div class="logo-menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="../index.php" title="Logo" itemprop="url">
                        <img src="../assets/images/logo1.png" alt="logo1.png" itemprop="image">
                    </a>
                </div>
                <nav>
                    <div>
                        <ul class="navbar_ul">
                            <li class=""><a class="translate" href="../index.php" title="" itemprop="url">Bosh sahifa</a>
                            </li>
                            <li class=""><a class="translate" href="suralar.php" title="" itemprop="url">Suralar</a>
                            </li>
                            <li class=""><a class="translate" href="listen.php" title="" itemprop="url">Tinglash</a>
                            </li>
                            <li class=""><a class="translate" href="contact.php" title="" itemprop="url">Bog'lanish</a>
                            </li>
                            <li class=""><a class="translate" href="setting.php" title="" itemprop="url">Sozlamalar</a>
                            </li>
                            <li class=""><a class="translate" href="about.php" title="" itemprop="url">Biz haqimizda</a>
                            </li>
                            <li class="">
                                <div class="icons">
                                    <input type="text" class="form-control" id="search" placeholder="Search"
                                           onkeyup="search(this,'#surahs .row .searchList')">
                                </div>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </header>

    <div class="rspn-hdr bg-white">
        <div class="lg-mn">
            <div class="logo">
                <a href="../index.php" title="Logo" itemprop="url"><img src="../assets/images/logo2.png" alt="logo2.png"
                                                                      itemprop="image"></a>
            </div>

            <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
        </div>
        <div class="rsnp-mnu">
            <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
            <ul class="navbar_ul">
                <li class="menu-item-has-children">
                    <input type="text" class="form-control" id="search" placeholder="Search"
                           onkeyup="search(this,'#surahs .row .searchList')">
                </li>
                <li class=""><a class="translate2" href="../index.php" title="" itemprop="url">Bosh sahifa</a></li>
                <li class=""><a class="translate2" href="suralar.php" title="" itemprop="url">Suralar</a></li>
                <li class=""><a class="translate2" href="listen.php" title="" itemprop="url">Tinglash</a></li>
                <li class=""><a class="translate2" href="contact.php" title="" itemprop="url">Bog'lanish</a></li>
                <li class=""><a class="translate2" href="setting.php" title="" itemprop="url">Sozlamalar</a></li>
                <li class=""><a class="translate2" href="about.php" title="" itemprop="url">Biz haqimizda</a></li>
            </ul>
        </div>
    </div>

     
