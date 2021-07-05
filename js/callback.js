
let callbackButton = document.getElementById("callback-button");
let callbackModal = document.getElementById("callback_modal");
let callbackModalCloser = document.getElementById('callback_modal_closer');

let tagBody = document.getElementsByTagName('body')[0];

callbackButton.onclick = function (e) {
  e.preventDefault();

  // робимо модальне вікно активним
  callbackModal.classList.add('modal_active');
  tagBody.classList.add('hidden');

}

callbackModalCloser.onclick = function (e) {
  e.preventDefault();
  callbackModal.classList.remove('modal_active');
  tagBody.classList.remove('hidden');
}

// закриваєм модальне вікно, якщо клікнули не по ньому (в стороні)
callbackModal.onmousedown = function (e) {
    let target = e.target;
    let modalContent = this.getElementsByClassName('modal_content')[0];
    if (e.target.closest('.' + modalContent.className) === null) {
      this.classList.remove('modal_active');
      tagBody.classList.remove('hidden');
    }
}

$("#callbackForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Заповніть усі необхідні поля!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var phone_number = $("#phone_number").val();

    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "callback.php",
        data: "name=" + name + "&phone_number=" + phone_number + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#callbackForm")[0].reset();
    submitMSG(true, "Дякуєм за заявку! Ми вам передзвонимо.");

}

function formError(){
    $("#callbackForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
