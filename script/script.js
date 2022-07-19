if (localStorage.getItem('leng') == null) {
    localStorage.setItem('leng', 'uz');
}
if (localStorage.getItem('qori') == null) {
    localStorage.setItem('qori', 'uz.sodik');
}
if (localStorage.getItem('reactor') == null) {
    localStorage.setItem('reactor', 'ar.alafasy');
}


async function get(link) {
    let data = await fetch(link);
    let natija = await data.json();
    return natija;
}


// Asosiy page yaratildi
let qori = localStorage.getItem('qori');

async function suralar() {
    let data = await get("http://api.alquran.cloud/v1/surah");
    data.data.forEach((e) => {
        let row = document.querySelector("#surahs .row");
        row.innerHTML += ` <div onclick="oyatlar('${e.number}','${qori}')" class="col-sm-6 col-md-4 suralar col-lg-3 searchList text-center mb-3">
                                <div class=" p-1">
                                    <div class="card-body">
                                        <p class="my-0 py-0 text-white">${e.number}${text(' - sura')}</p>
                                        <p class="my-0 py-0 text-white">${e.numberOfAyahs}${text(' ta oyat')}</p>
                                        <h5 class="my-0 py-0 fw-900 text-white">${text(e.englishName)}</h5>
                                        <p class="mt-2 mb-1 text-warning">${text('Nozil qilingan yer: ')}${text(e.revelationType)}</p>
                                    </div>
                                </div>
                            </div>`;
    });
}
suralar();


// Oyatlar page yaratildi
let reactor = localStorage.getItem('reactor');

async function oyatlar(id, qori) {
    document.querySelector(".preloader").classList.add("d-block");
    document.querySelector("#surahs").classList.add("d-none");
    document.querySelector("#oyatlar").classList.remove("d-none");

    let oyatlarRows = document.querySelector(".audio_row");
    oyatlarRows.innerHTML = "";
    let uz = await get(`https://api.alquran.cloud/v1/surah/${id}/${qori}`);
    let arab = await get(`https://api.alquran.cloud/v1/surah/${id}/${reactor}`);
    let arab_massiv = arab.data.ayahs;
    document.querySelector('#suraTitle').innerHTML = `<h3 class="text-warning text-center">${text(uz.data.englishName)}</h3>`

    uz.data.ayahs.forEach((e, i) => {
        oyatlarRows.innerHTML += `
                                <div class="ayahs_list searchList col-md-12 m-2 p-4">
                                    <p class="translation">${i + 1}) ${text(e.text)}</p>
                                    <h6 style="font-size:25px;" class="surah text-right arab-text">${arab_massiv[i].text}</h6>
                                    <audio id="audio" controls style="width:300px;">
                                        <source src="${arab_massiv[i].audio}" type="audio/mpeg">
                                    </audio>
                                </div>`;
    });


    document.querySelectorAll(".ayahs_list audio").forEach((e, i) => {
        e.onplay = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.add('audio_hover');
            document.querySelectorAll(".ayahs_list audio").forEach((element, index) => {
                if (index != i) {
                    element.pause();
                    document.querySelectorAll(".ayahs_list")[index].classList.remove('audio_hover');
                }
            })
        }

        e.onended = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.remove('audio_hover')
            document.querySelectorAll(".ayahs_list audio")[i + 1].currentTime = 0;
            document.querySelectorAll(".ayahs_list audio")[i + 1].play();
            document.querySelectorAll(".ayahs_list")[i + 1].classList.add('audio_hover')
        };

        e.onpause = () => {
            document.querySelectorAll(".ayahs_list")[i].classList.remove('audio_hover')
        }
    });
    document.querySelector(".preloader").classList.remove("d-block");
}

// cut
function yodlash() {
    let input = document.getElementById("cut").value.split("-");
    let begin = input[0];
    let end = input[1];
    let lists = document.querySelectorAll(".ayahs_list");

    lists.forEach((e, i) => {
        e.classList.add('d-none');

        e.querySelector('audio').pause();

    })

    for (let index = parseInt(begin) - 1; index < parseInt(end); index++) {
        lists[index].classList.remove('d-none');
    }

    document.querySelectorAll(".ayahs_list audio")[begin - 1].play();
    document.querySelectorAll(".ayahs_list audio")[end - 1].onended = () => {
        document.querySelectorAll(".ayahs_list audio")[begin - 1].play();
    };
}

function search(needle, searchList) {
    let input = needle.value.toLowerCase();
    document.querySelectorAll(searchList).forEach(e => {
        let element = e.innerText.toLowerCase();
        if (!element.includes(input)) {
            e.classList.add('d-none')
        } else {
            e.classList.remove('d-none')
        }
    })
}


function scroll_up() {
    window.scroll({
        top: 0, behavior: "smooth"
    })
}


window.onscroll = () => {
    let wintop = (window.pageYOffset || document.scrollTop) - (document.clientTop || 0)
    let scrollbtn = document.querySelector('.scroll-up')
    if (wintop > 350) {
        scrollbtn.classList.remove('d-none')
    } else {
        scrollbtn.classList.add('d-none')
    }
    
    let scrollbtn2 = document.querySelector('.scroll-up-Listen')
    if (wintop > 350) {
        scrollbtn2.classList.remove('d-none')
    } else {
        scrollbtn2.classList.add('d-none')
    }
}




  