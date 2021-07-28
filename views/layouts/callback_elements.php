<!--Pulse Callback button-->
  <button id="callback-button" class="pulse-button">

      <span class="pulse-button_text">Замовити дзвінок</span>
      <span class="pulse-button_rings"></span>
      <span class="pulse-button_rings"></span>
      <span class="pulse-button_rings"></span>
  </button>


<!---Callback contact form (inside a collback modal window)------------>

<!-- Модальне вікно замовлення callback  -->
<div class="modal" id="callback_modal">
  <div class="modal_content">
    <button id="callback_modal_closer" class="modal_closer"><img src="<?php echo SUBDOMAIN;?>/template/images/close.png" width="35" alt="close"></button>

    <div class="contact">
      <h3 style="margin: 20px 0 20px 30px">Залиште заявку на дзвінок</h3>
      <div id="callback_form">
        <form role="form" id="callbackForm" data-toggle="validator">
          <div class="row">
            <div class="col-sm-1-3">
              <div class="wrap-col">
                <input type="text" name="name" id="name" placeholder="Ваше ім'я" required="required" />
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-sm-1-3">
              <div class="wrap-col">
                <input type="text" name="phone_number" id="phone_number" placeholder="Номер телефону" required="required" />
                <div class="help-block with-errors"></div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-full">
              <div class="wrap-col">
                <textarea id="message" placeholder="Повідомлення"></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-full">
              <div class="wrap-col">
                <button class="button button-skin button-subscribe" type="submit" name="Submit" >Send</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>	<!-----end of call back form------------->
