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
        case 'shpytsi':
            hikingModalImg.src = "template/images/mountains/shpytsi.jpg";
            hikingModalTitle.innerText = "Сходження на Шпиці";
            hikingModalDescription.innerText = "Шпи́ці — одна з вершин гірського масиву Чорногора (Українські Карпати). Розташована у Верховинському районі Івано-Франківської області, в межах Карпатського національного природного парку. Висота гори — 1863 м. Лежить у центральній частина Чорногорського масиву, за кілька кілометрів на північний схід від головного хребта, і з'єднана з ним пологою сідловиною.  Шпиці — одна з найцікавіших гір у Карпатах. Її східні схили оперезані скельними виступами заввишки 20—50 м, які справді нагадують шпиці (звідси й назва гори). На північному заході від гори — велика котловина гори Данціжа, обмежена хребтами Великі і Малі Кізли. Трохи правіше, у напрямку на північ від Шпиців, видніється гора Гомул, а ще правіше, на північний схід,— гора Велика Маришевська. На півдні розташована гора Бребенескул, друга за висотою вершина не лише Чорногори, а й усієї України. На південних схилах Шпиць розкинувся льодовиковий кар, грандіозний за своїми розмірами та красою, який ще називають урочищем Ґаджина. Він утворений скелястими схилами гір Шпиці та Ребра. Саме тут, за словами місцевих жителів, похований Олекса Довбуш, провідник опришків.";
          break;
        case 'marmaros':
            hikingModalImg.src = "template/images/mountains/marmaros.jpg";
            hikingModalTitle.innerText = "Піп Іван Мармароський";
            hikingModalDescription.innerText = "Мармароси - це дивовижне місце, не схоже на жодне інше  в Українських Карпатах. Скелясті стрімкі схили та запаморичливі краєвиди відкриваються під час нашого маршруту. Ми пропонуємо вам здійснити лайт трекінг,  замість виснажливих переходів і наборів висоти - радіальні виходи на найголовніші вершини та відпочинок. На вантажівці ми піднімемось на полонину Лисича, де станемо табором і звідси здійснимо  виходи на Піп Іван Мармарошський (1938 м) гору Берлебашка  (1734 м), відвідаємо гірське озеро, а після цього спустимось нижче до Ялинського водоспаду, який є найвищим в  Українських Карпатах (26 метрів).";
          break;
        case 'blyznytsya':
            hikingModalImg.src = "template/images/mountains/blyznytsya.jpg";
            hikingModalTitle.innerText = "Близниці на Свидовці";
            hikingModalDescription.innerText = "Вершини Близниці розміщені поряд і схожі за формою. Висота вищої, північної вершини 1883 м, південної — 1872 м. З півночі Близниці обмежені горою Драгобрат. Південні і західні схили пологі, східні — круто обриваються у бік розширеного верхів'я долини — льодовикового кару з залишками морени та льодовикових озер. Складаються з пісковиків, є прошарки вапняків. До висоти 1400 м — хвойні та букові ліси, криволісся, вище — полонини.";
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
