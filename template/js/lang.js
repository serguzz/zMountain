
   let selectLanguage = document.getElementById('select-language');
   let selectLanguageBox = document.getElementById('select-language-box');
   let selectLanguageValues = document.getElementById('select-language-values');

   selectLanguageBox.addEventListener("mouseenter", function(event) {
      selectLanguageValues.style.visibility = "visible";
      selectLanguageValues.style.maxHeight = "300px";
   });

   selectLanguageBox.addEventListener("mouseleave", function(event) {
      selectLanguageValues.style.visibility = "hidden";
      selectLanguageValues.style.maxHeight = "0px";
   });

   docUrl = document.URL;
   setLang(getCookie("lang") ? getCookie("lang") : "ua");

   // При нажатии на класс .select-language-val меняем язык
   $(".select-language-box .select-language-val").on("click", function() {

        setLang($(this).attr("data-language"));
        selectLanguageValues.style.visibility = "hidden";

/*     if($(this).attr("data-language") !== $current_language || typeof $current_language == typeof undefined){
       var $url = $("link[rel='alternate'][hreflang='"+$(this).attr("data-language")+"']").attr("href");
       if (typeof $url !== typeof undefined && $url !== false && $url !== "undefined" && $url.length > 0) {
         window.location.replace($url);
       } else {
          var $url = window.location.protocol +"//"+ window.location.host + "/"+$(this).attr("data-language")+"/";
          window.location.replace($url);
        }
       $(".select-language-box").textValue = "test";
 }
*/
  });

// Функция установки языка (записывает в СOOKIE и обновляет языковое меню)
function setLang(lang) {
    switch (lang) {
       case 'ru':
           document.cookie = "lang=ru";
           selectLanguage.innerText = "RU";
           selectLanguage.style.background = 'url("template/images/icons/rus_flag.jpg")';

           // проверяем через регулярные выражение, является ли адрес глубоким субдоменом,
           // тогда подключаем картинку фона через ../
           if ((docUrl.search(/blog\/page/ )>-1) || (docUrl.search(/blogpost\// )>-1) || (docUrl.search(/newspost\// )>-1))
               selectLanguage.style.background = 'url("../template/images/icons/rus_flag.jpg")';
           selectLanguage.style.backgroundSize = "65px 40px";
           selectLanguage.style.backgroundRepeat = "no-repeat";
           selectLanguage.style.backgroundPosition = "center";
         break;
       case 'ua':
           document.cookie = "lang=ua";
           selectLanguage.innerText = "UA";
           selectLanguage.style.background = 'url("template/images/icons/ua_flag.ico")';
           if ((docUrl.search(/blog\/page/ )>-1) || (docUrl.search(/blogpost\// )>-1) || (docUrl.search(/newspost\// )>-1))
               selectLanguage.style.background = 'url("../template/images/icons/ua_flag.ico")';

           selectLanguage.style.backgroundSize = "40px 30px";
           selectLanguage.style.backgroundRepeat = "no-repeat";
           selectLanguage.style.backgroundPosition = "center";
         break;
       case 'en':
           document.cookie = "lang=en";
           selectLanguage.innerText = "EN";
           selectLanguage.style.background = 'url("template/images/icons/en_flag.png")';
           if ((docUrl.search(/blog\/page/ )>-1) || (docUrl.search(/blogpost\// )>-1) || (docUrl.search(/newspost\// )>-1))
               selectLanguage.style.background = 'url("../template/images/icons/en_flag.png")';

           selectLanguage.style.backgroundSize = "35px 35px";
           selectLanguage.style.backgroundRepeat = "no-repeat";
           selectLanguage.style.backgroundPosition = "center";
         break;
     }


}

// функция для работы с КуКаМи
function getCookie(name) {
  	let cookie = " " + document.cookie;
  	let search = " " + name + "=";
  	let setStr = null;
  	let offset = 0;
  	let end = 0;
  	if (cookie.length > 0) {
    		offset = cookie.indexOf(search);
    		if (offset != -1) {
      			offset += search.length;
      			end = cookie.indexOf(";", offset)
      			if (end == -1) {
      				end = cookie.length;
      			}
      			setStr = unescape(cookie.substring(offset, end));
    		}
  	}
   return(setStr);
}
