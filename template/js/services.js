
document.addEventListener('DOMContentLoaded', () => {

  // Тег body для запрета прокрутки
  let tagBody = document.getElementsByTagName('body')[0];

  let servicesModal = document.getElementById('services_modal');
  let servicesModalCloser = document.getElementById('services_modal_closer');
  let servicesModalOpeners = document.getElementsByClassName('services_modal_opener');

  for (let opener of servicesModalOpeners) {
    opener.style.cursor = "pointer";

    opener.onclick = function (e) {
      e.preventDefault();

      let serviceId = this.dataset["id"];

      // в залежності від місця кліку - заповнюємо контент модального вікна
      // opener.dataset.id

          // тут нужно получить из базы данных объект с информацией о сервисе! - service
          // возможно через fetch или ajax

          fetch("db-api/services/" + serviceId)
            .then(function (resp) {return resp.json() })
              .then(function (data) {
                  let service = data;

                  let servicesModalTitle = document.getElementById('services_modal_title');
                  let servicesModalDescription = document.getElementById('services_modal_description');
                  let servicesModalImg = document.getElementById('services_modal_img');
                  let servicesModalButton = document.getElementById('services_modal_button');

                  servicesModalImg.src = "template/images/" + service["tag"] + "/" + service["image"];
                  servicesModalTitle.innerText = service["title"];
                  servicesModalDescription.innerText = service["description"];
                  servicesModalButton.innerText = service["button_sign"];

                  // робимо модальне вікно активним
                  servicesModal.classList.add('modal_active');
                  tagBody.classList.add('hidden');
                })
              .catch((error) => {
                    console.error('Error222:', error);
                  });

    }
  }

  servicesModalCloser.onclick = function (e) {
    e.preventDefault();
    servicesModal.classList.remove('modal_active');
    tagBody.classList.remove('hidden');
  }

  // закриваєм модальне вікно, якщо клікнули не по ньому (в стороні)
  servicesModal.onmousedown = function (e) {
      let target = e.target;
      let modalContent = this.getElementsByClassName('modal_content')[0];
      if (e.target.closest('.' + modalContent.className) === null) {
        this.classList.remove('modal_active');
        tagBody.classList.remove('hidden');
      }
  }
});
