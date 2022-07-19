<?php
include "header2.php";
?>
    <section>
        <div class="gap no-gap">
            <div class="featured-area-wrap slider2 text-center">
                <div class="featured-area owl-carousel">
                    <div class="featured-item" style="background: transparent;">
                        <div class="featured-cap">
                            <img src="../assets/images/resources/bsml-txt.png" alt="bsml-txt.png">
                            <h1 class="arab-text text-white">وَٱلسَّمَآءَ رَفَعَهَا وَوَضَعَ ٱلْمِيزَانَ</h1>
                            <img class="before-imge" src="../assets/images/pshape.png" alt="">
                            <h3 class="translate">Osmonni baland ko'tardi va tarozuni o'rnatdi.</h3>
                            <span class="translate">Ar-Rahmon surasi 7-oyat</span>
                            <a class="theme-btn theme-bg brd-rd5 translate" href="pages/suralar.php" title="">Batafsil</a>
                        </div>
                    </div>
                    <div class="featured-item" style="background: transparent;">
                        <div class="featured-cap">
                            <img src="../assets/images/resources/bsml-txt2.png" alt="bsml-txt2.png">
                            <h1 class="arab-text text-white">هَلْ جَزَآءُ ٱلْإِحْسَٰنِ إِلَّا ٱلْإِحْسَٰنُ</h1>
                            <img class="before-imge" src="assets/images/pshape.png" alt="">
                            <h3 class="translate">Ehsonning mukofoti, faqat ehsondir.</h3>
                            <span class="translate">Ar-Rahmon surasi 60-oyat</span>
                            <a class="theme-btn theme-bg brd-rd5 translate" href="pages/suralar.php">Batafsil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="gap bg-white">
            <div class="container">
                <div class="abt-sec-wrp style2">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-vdo style2 brd-rd5">
                                <img src="../assets/images/resources/quran-holy-book-muslims-mosque.jpg" alt="abt-img2.jpg"
                                     itemprop="image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="abt-desc">
                                <div class="sec-tl">
                                    <h2 itemprop="headline" class="translate">Qur'oni karim haqida</h2>
                                    <img src="../assets/images/pshape.png" alt="">
                                </div>
                                <p itemprop="description" class="translate">We established our center in 1954, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris .Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.</p>
                                <p itemprop="description" class="translate">Visit our premises sit amet, consectetur
                                    adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section>
        <div class="gap white-layer opc9">
            <div class="fixed-bg" style="background-image: url(../assets/images/parallax1.jpg);"></div>
            <div class="container">
                <div class="sec-tl">
                    <span class="theme-clr translate">Shahringizni tanlang</span>
                    <h2 class="translate" itemprop="headline">Namoz vaqtlari</h2>
                    <img src="../assets/images/pshape.png" alt="">
                </div>
                <div class="prayer-timing-wrp">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="timing-mockp">
                                <img src="../assets/images/resources/prayer-time-mockp.png" alt="prayer-time-mockp.png"
                                     itemprop="image">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="timing-data">
                                <div class="cntry-selc">
                                    <div class="selec-wrp brd-rd5">
                                    setting  <select id="comboB" onchange="get_azan_time(this)">
                                            <option class="translate">Shahringizni tanlang</option>
                                            <option class="translate">Tashkent</option>
                                            <option class="translate">Tashkent viloyati</option>
                                            <option class="translate">Andijon</option>
                                            <option class="translate">Buxoro</option>
                                            <option class="translate">Samarqand</option>
                                            <option class="translate">Sirdaryo</option>
                                            <option class="translate">Surxondaryo</option>
                                            <option class="translate">Xorazm</option>
                                            <option class="translate">Namangan</option>
                                            <option class="translate">Navoiy</option>
                                            <option class="translate">Farg'ona</option>
                                            <option class="translate">Jizzah</option>
                                            <option class="translate">Qashqadaryo</option>
                                            <option class="translate">Qoraqalpog'iston</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="result-update"></div>
                                <div class="prayer-timings text-center mt-4">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th><span class="translate">Namoz</span><br><img
                                                        src="../assets/images/pshape.png"
                                                        alt=""></th>
                                            <th><span class="translate">Namoz vaqti</span><br><img
                                                        src="../assets/images/pshape.png"
                                                        alt=""></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="">
                                            <td><span>Fajar</span></td>
                                            <td class="fajr-azan-prayer">04:30 am</td>
                                        </tr>
                                        <tr>
                                            <td><span>SunRise</span></td>
                                            <td class="sunrise-azan-prayer">05:10 am</td>
                                        </tr>
                                        <tr>
                                            <td><span>Zohar</span></td>
                                            <td class="zohar-azan-prayer">01:45 pm</td>
                                        </tr>
                                        <tr>
                                            <td><span>Asar</span></td>
                                            <td class="asr-azan-prayer">05:30 pm</td>
                                        </tr>
                                        <tr>
                                            <td><span>Maghrib</span></td>
                                            <td class="maghrib-azan-prayer">07:20 pm</td>
                                        </tr>
                                        <tr>
                                            <td><span>Isha</span></td>
                                            <td class="isha-azan-prayer">09:25 pm</td>
                                        </tr>
                                        <tr>
                                            <td><span>SunSet</span></td>
                                            <td class="juma-azan-prayer">02:00 pm</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="gap black-layer opc8">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax2.jpg);"></div>
            <div class="container">
                <div class="sec-tl text-center">
                    <span class="theme-clr translate">Islomning</span>
                    <h2 itemprop="headline" class="translate">Asosiy ustunlari haqida</h2>
                    <img src="assets/images/pshape.png" alt="">
                </div>
                <div class="remove-ext3">
                    <ul class="plrs-wrp text-center">
                        <li>
                            <a class="plr-bx" href="suralar.php">
                                <i class="flaticon-clicker brd-rd50"></i>
                                <h5 class="translate" itemprop="headline">Qur'on o'qish</h5>
                            </a>
                        </li>
                        <li>
                            <a href="./new_quran/listen.html" class="plr-bx">
                                <i class="flaticon-muslim-man-praying brd-rd50"></i>
                                <h5 class="translate" itemprop="headline">Qur'on eshitish</h5>
                            </a>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-islamic-ramadan brd-rd50"></i>
                                <h5 class="translate" itemprop="headline">Ro'za</h5>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-money brd-rd50"></i>
                                <h5 class="translate" itemprop="headline">Zakot</h5>
                            </div>
                        </li>
                        <li>
                            <div class="plr-bx">
                                <i class="flaticon-kaaba-building brd-rd50"></i>
                                <h5 class="translate" itemprop="headline">Haj</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="gap no-gap white-layer opc8">
            <div class="fixed-bg2" style="background-image: url(assets/images/parallax3.jpg);"></div>
            <div class="dnt-sec-wrp">
                <div class="row mrg">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-img-wrp dnt-car owl-carousel">
                            <div class="img-thmb"
                                 style="background-image: url(assets/images/resources/car-img1-1.jpg);"></div>
                            <div class="img-thmb"
                                 style="background-image: url(assets/images/resources/car-img1-2.jpg);"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="dnt-wrp">
                            <div class="sec-tl">
                                <span class="theme-clr">Give Food & Shelter To Poor</span>
                                <h2 itemprop="headline">Make Your Donation</h2>
                                <img src="assets/images/pshape.png" alt="">
                            </div>
                            <div class="dnt-lst">
                                <a class="brd-rd30" href="#" title="" itemprop="url">$100</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$200</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">$300</a>
                                <a class="brd-rd30" href="#" title="" itemprop="url">other</a>
                            </div>
                            <form class="dnt-frm">
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Phone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input class="brd-rd5" type="text" placeholder="Your Address">
                                    </div>
                                </div>
                            </form>
                            <img src="assets/images/pay-img.png" alt="pay-img.png" itemprop="image">
                            <div class="prg-wrp">
                                <h5 itemprop="headline">Raise Funds For poor</h5>
                                <div class="progress brd-rd5">
                                    <div class="progress-bar w70 theme-bg"><span
                                                class="brd-rd50 theme-bg">70%</span></div>
                                </div>
                                <span>Raised: <i class="theme-clr">$400.00</i></span> <span>Goal: <i
                                            class="theme-clr">$650.00</i></span>
                            </div>
                            <a class="theme-btn theme-bg brd-rd5" href="cause.html" title="" itemprop="url">DONATE
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php

include 'pages/footer.php'

?>