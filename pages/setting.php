<?php

include 'header.php';
?>
    <div class="container bg-image" style="margin-top: 150px; width: 100vw; height: 100vh">
        <div class="row mx-auto">
            <div class="col-12 col-md-6 col-sm-12 col-lg-6 mb-5">
                <div class="btn-select">
                    <select id="leng">
                        <option value="uz" selected class="translate">Tilni tanlang</option>
                        <option value="uz">Uzbek</option>
                        <option value="kr">Krill</option>
                        <option value="ru">Rus</option>
                        <option value="en">English</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-12 col-lg-6 mb-5">
                <div class="btn-select">
                    <select id="qori">
                        <option value="ar.alafasy" selected class="translate">Qorini tanlang</option>
                        <?php
                        $data = json_decode(file_get_contents('https://api.alquran.cloud/v1/edition/format/audio'));

                        foreach ($data->data as $datum) {
                            echo '<option value="' . $datum->identifier . '">' . $datum->englishName . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <script>
        let leng = document.querySelector('#leng');
        leng.onchange = () => {
            if (leng.value === 'ru') {
                localStorage.setItem('qori', 'ru.kuliev');
            }
            if (leng.value === 'kr') {
                localStorage.setItem('qori', 'uz.sodik');
            }
            if (leng.value === 'uz') {
                localStorage.setItem('qori', 'uz.sodik');
            }
            if (leng.value === 'en') {
                localStorage.setItem('qori', 'en.asad');
            }
            localStorage.setItem('leng', leng.value);
            location.reload();
        }

        let qorilar = document.querySelector('#qori');
        qorilar.onchange = () => {

            localStorage.setItem('reactor', qorilar.value);

        }

    </script>

<?php
include 'footer.php';

?>