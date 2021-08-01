document.addEventListener('DOMContentLoaded', () => {

  // Тег body для запрета прокрутки
  let tagBody = document.getElementsByTagName('body')[0];

  let hikingModal = document.getElementById('hiking_modal');
  let hikingModalCloser = document.getElementById('hiking_modal_closer');
  let hikingModalOpeners = document.getElementsByClassName('hiking_modal_opener');

  for (let opener of hikingModalOpeners) {
    opener.style.cursor = "pointer";

    opener.onclick = function (e) {
      e.preventDefault();
      let hikingModalTitle = document.getElementById('hiking_modal_title');
      let hikingModalDescription = document.getElementById('hiking_modal_description');
      let hikingModalImg = document.getElementById('hiking_modal_img');

      // в залежності від місця кліку - заповнюємо контент модального вікна
      switch (opener.dataset.name) {
        case 'hoverla': 
            hikingModalImg.src = "template/images/mountains/hoverla.jpg";
            hikingModalTitle.innerText = "Сходження на Говерлу";
            hikingModalDescription.innerText = "Гове́рла (пол. Howerla, рум. Hovârla, угор. Hóvár) — найвища вершина Українських Карпат і найвища точка України, її висота становить 2 061 м над рівнем моря. Розташована в гірському масиві Чорногора на межі Яремчанської міськради Івано-Франківської області та Рахівського району Закарпатської області за 17 кілометрів від кордону з Румунією. Популярний об'єкт літнього та зимового туризму. Перший туристичний маршрут зі сходження на вершину був відкритий 1880 року. Взимку альпіністським сходженням на Говерлу присвоєна категорія 1Б. У кінці березня щорічно, починаючи з 1964 року, відбувається «Говерляна» — традиційний масовий похід-сходження на г. Говерлу, який присвячується відкриттю спортивного літнього сезону на Львівщині й пам'яті загиблих товаришів-альпіністів і туристів. Сходження здійснюється за маршрутом: зі сторони селища Ворохта Івано-Франківської області ущелиною річки Прут — через Карпатський національний природний парк та урочище «Заросляк». ";
          break;
        case 'pipivan':
            hikingModalImg.src = "template/images/mountains/pipivan.jpg";
            hikingModalTitle.innerText = "Сходження на Піп Іван";
            hikingModalDescription.innerText = "Піп Іван Чорногірський (2028 м) – третя за висотою вершина Українських Карпат, одна з основних вершин Чорногірського хребта, красива масивна гора пірамідальної форми. Є однією з найпопулярніших вершин в Українських Карпатах. ";
          break;
        case 'homyak':
            hikingModalImg.src = "template/images/mountains/homyak2.png";
            hikingModalTitle.innerText = "Сходження на Хом'як";
            hikingModalDescription.innerText = "Висота — 1542 м, перепад висоти у порівнянні з долиною Пруту — 700—800 м. Форма дахоподібна. Схили розчленовані притоками річок басейну Пруту. У привершинній частині — кам'яні розсипища та осипища, далі — полонини і криволісся. На північно-східних схилах гори бере початок потік Роскульський. Гора Хом'як є популярним пунктом у пішохідних маршрутах вихідного дня. З вершини видно сусідні гори і хребти: Синяк і Довбушанка (на північному заході), Явірник (на півночі), Ліснів (на сході), за ним хребет Рокети з Лисиною Космацькою. На південному сході видно Чорногірський масив з Говерлою. ";
          break;

        default:
      }

      // робимо модальне вікно активним
      hikingModal.classList.add('modal_active');
      tagBody.classList.add('hidden');
    }
  }

  hikingModalCloser.onclick = function (e) {
    e.preventDefault();
    hikingModal.classList.remove('modal_active');
    tagBody.classList.remove('hidden');
  }

  // закриваєм модальне вікно, якщо клікнули не по ньому (в стороні)
  hikingModal.onmousedown = function (e) {
      let target = e.target;
      let modalContent = this.getElementsByClassName('modal_content')[0];
      if (e.target.closest('.' + modalContent.className) === null) {
        this.classList.remove('modal_active');
        tagBody.classList.remove('hidden');
      }
  }
});
