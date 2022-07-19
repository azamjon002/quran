<?php
include 'header.php'
?>

<section>
    <div class="container div_res" style="margin-top: 150px;">
        <div class="sec-tl contact-cont text-center">
            <h1 class="theme-clr h1 translate" lang="eng">Biz bilan bog'laning</h1>
        </div>
        <div class="col-md-12 cnt-frm text-center p-5 transparent_glass">
            <form action="control.php" method="post">
                <div class="row mrg10">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <input class="brd-rd5" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <input class="brd-rd5" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input class="brd-rd5" type="text" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <textarea class="brd-rd5" placeholder="Message" name="massage"></textarea>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <button type="submit" onclick="sweet()" class="theme-btn theme-bg brd-rd5 translate">Yuborish</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="cnt-inf-wrp transparent_glass p-5">
            <div class="row">
                <div class="col-md-12  mb-3">
                    <div class="sec-tl">
                        <h3 itemprop="headline" class="theme-clr text-center translate">Aloqa tafsilotlari</h3>
                    </div>
                    <ul class="cnt-inf-lst">
                        <li>
                            <strong class="text-white"><i class="fas fa-envelope theme-clr"></i>Email</strong>
                            <a href="#" title="" itemprop="url">bismillah@gmail.com</a>
                            <a href="#" title="" itemprop="url">www.bismillah.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone theme-clr"></i>
                            <strong class="text-white">Phone</strong>
                            <a href="#" title="" itemprop="url">+998 33 506 0511</a>
                            <a href="#" title="" itemprop="url">+998 93 776 0933</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <iframe height="250" frameborder="1" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=Chinabod%2C%20Baliqchi%2C%20Andijan%20Uzbekistan&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near"
                            title="Chinabod, Baliqchi, Andijon, Uzbekistan"
                            aria-label="Chinabod, Baliqchi, Andijon, Uzbekistan">
                    </iframe>
                </div>
            </div>
        </div>
</section>


<script>
    function sweet() {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Sizning xabaringiz yetkazildi\n Taklif uchun tashakkur',
            showConfirmButton: false,
            timer: 2500
        })
    }
</script>

<?php


include "footer.php"


?>