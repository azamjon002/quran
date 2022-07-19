<?php
include "header.php";
?>
    

    <section class="bg-image">
        <div class="container div_res" id="surahs" style="margin-top: 150px;">
            <div class="row">
                <!--========bu yerga sura cardlari tushadi========-->
            </div>
        </div>
    </section>

    <section id="oyatlar" class="d-none bg-image">
        <div class="container" id="surahs" style="margin-top: 150px;">
            <div class="row">
                <div class="col-md-3">
                    <a href="suralar.php" class="btn btn-warning px-5 translate">Orqaga</a>
                </div>
                <div class="col-md-6" id="suraTitle">

                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" id="cut" class="form-control" placeholder="1-5"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning translate" type="button" onclick="yodlash()">kesish</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row audio_row mt-3 p-3">
                <!--========bu yerga oyatlar tushadi========-->
            </div>
        </div>
    </section>


<?php

include "footer.php";
