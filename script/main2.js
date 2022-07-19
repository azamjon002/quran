let audio = document.querySelector(".quranPLayer");
let surahsContainer = document.querySelector(".surahs");
let next = document.querySelector(".next");
let play = document.querySelector(".play");
let prev = document.querySelector(".prev");

getSurahs();

function getSurahs() {
  fetch("http://api.alquran.cloud/v1/meta")
    .then((response) => response.json())
    .then((data) => {
      data.data.surahs.references.forEach((sura, index) => {
        surahsContainer.innerHTML += `
            <div class="col-md-12 theme-btn theme-bg">
                <div class="row" onclick="changeBtn(${index},${sura.numberOfAyahs})">
                    <div class="col-md-4 col-sm-3 translate arab-text2 text-left">${sura.numberOfAyahs}  ${text(' ta oyat')}</div>
                    <div class="col-md-4 col-sm-3 translate arab-text2 text-center">${text(sura.englishName)}</div>
                    <div class="col-md-4 col-sm-3 translate arab-text2 text-right">${sura.name}</div>
                </div>
            </div>`;
      });
    });
}

let a = true;
function changeBtn(index, length) {
  fetch(`https://api.quran.sutanlab.id/surah/${index + 1}`)
    .then((response) => response.json())
    .then((data) => {
      let audioIndex = 0;
      let verses = data.data.verses;
      let isPlay = true;

      if (a) {
        play.innerHTML = `<i class="fas fa-pause">`;
        audio.src = verses[audioIndex]["audio"].primary;
        audio.play();
        a = false;
      } else {
        audio.pause();
        play.innerHTML = `<i class="fas fa-play">`;
        a = true;
      }

      play.onclick = () => {
        if (isPlay) {
          audio.pause();
          play.innerHTML = `<i class="fas fa-play">`;
          isPlay = false;
        } else {
          audio.play();
          play.innerHTML = `<i class="fas fa-pause">`;
          isPlay = true;
        }
      };
      prev.onclick = () => {
        audioIndex--;
        if (audioIndex < 0) {
          audioIndex = length - 1;
        }
        audio.src = verses[audioIndex]["audio"].primary;
        audio.play();
      };
      next.onclick = () => {
        audioIndex++;
        if (audioIndex == length) {
          audioIndex = 0;
        }
        audio.src = verses[audioIndex]["audio"].primary;
        audio.play();
      };

      audio.onended = () => {
        audioIndex++;
        if (audioIndex == length) {
          audioIndex = 0;
        }
        audio.src = verses[audioIndex]["audio"].primary;
        audio.play();
      };
    });
}
