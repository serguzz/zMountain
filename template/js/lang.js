
   let selectLanguage = document.getElementById('select-language');
   let selectLanguageBox = document.getElementById('select-language-box');
   let selectLanguageValues = document.getElementById('select-language-values');

   selectLanguageBox.addEventListener("mouseenter", function(event) {
      selectLanguageValues.style.visibility = "visible";
   });

   selectLanguageBox.addEventListener("mouseleave", function(event) {
      selectLanguageValues.style.visibility = "hidden";
   });

   selectLanguage.innerText = "UA";
   selectLanguage.style.background = "url('template/images/icons/ua_flag.ico')";
   selectLanguage.style.backgroundSize = "40px 30px";
   selectLanguage.style.backgroundRepeat = "no-repeat";
   selectLanguage.style.backgroundPosition = "center";

   let currentLanguage = selectLanguage.innerText;

//   $(".select-language").innerText = "test333";
//   let $current_language = $("meta[http-equiv='content-language']").attr("content");
//   $(".select-language").html($current_language.toUpperCase());
//   $(".select-language-val[data-language='"+$(this).attr("data-language")+"']").remove();


   $(".select-language-box .select-language-val").on("click", function(){

     selectLanguage.innerText = $(this)[0].innerText;

     switch ($(this).attr("data-language")) {
        case 'ru':
            selectLanguage.style.background = "url('template/images/icons/rus_flag.jpg')";
            selectLanguage.style.backgroundSize = "65px 40px";
            selectLanguage.style.backgroundRepeat = "no-repeat";
            selectLanguage.style.backgroundPosition = "center";

          break;
        case 'ua':
            selectLanguage.style.background = "url('template/images/icons/ua_flag.ico')";
            selectLanguage.style.backgroundSize = "40px 30px";
            selectLanguage.style.backgroundRepeat = "no-repeat";
            selectLanguage.style.backgroundPosition = "center";
          break;
        case 'en':
            selectLanguage.style.background = "url('template/images/icons/en_flag.png')";
            selectLanguage.style.backgroundSize = "35px 35px";
            selectLanguage.style.backgroundRepeat = "no-repeat";
            selectLanguage.style.backgroundPosition = "center";
          break;
      }


     selectLanguageValues.style.visibility = "hidden"


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
