
let callbackButton = document.getElementById("callback-button");
console.log(callbackButton);

callbackButton.onclick = function (e) {
  e.preventDefault();
  alert("We will call you back!!");
}
