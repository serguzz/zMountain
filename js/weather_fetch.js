const openWeatherMapKey = '16f4f20ff67e578e39e995c6769afd32';

// degToCompass function transforms meteological degrees into Word's Directions
function degToCompass(num) {
    var val = Math.floor((num / 22.5) + 0.5);
    const arrUkr = ["ПН", "ПН-ПН-СХ", "Пн-Сх", "Сх-Пн-Сх", "Сх", "Сх-Пд-Сх", "Пд-Сх", "Пд-Пд-Сх", "Пд", "Пд-Пд-Зх", "Пд-Зх", "Зх-Пд-Зх", "Зх", "Зх-Пн-Зх", "Пн-Зх", "Пн-Пн-Зх"];
    var arr = ["N", "NNE", "NE", "ENE", "E", "ESE", "SE", "SSE", "S", "SSW", "SW", "WSW", "W", "WNW", "NW", "NNW"];
    return arrUkr[(val % 16)];
}


function drawWeatherWidget() {

    let cityName = document.getElementById("city_name").value;
    if (cityName === '') {cityName = "Kyiv";}

    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + cityName + '&lang=ua&appid=' + openWeatherMapKey)
      .then(function (resp) {return resp.json() })
        .then(function (data) {
            console.log(data);
            //добавляем название города

            if (data.message === "city not found") {
               alert ("Невірна назва міста! Спробуйте ще раз!");

            } else {

                document.querySelector('.weather_city').textContent = "Погода в " + data.name;
                //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
              //  document.querySelector('.weather_forecast').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
                //Добавляем описание погоды
                document.querySelector('.weather_desc').textContent = data.weather[0]['description'];
                //Добавляем иконку погоды
                document.querySelector('.weather_icon').innerHTML = `<img src="https://openweathermap.org/img/wn/${data.weather[0]['icon']}@2x.png">`;

                let img_url = "https://openweathermap.org/img/wn/" + data.weather[0]['icon'] +  "@4x.png";
                //document.querySelector('.open_weather_map').style.background = "url('" + img_url + "')" + " no-repeat";
                document.querySelector('.open_weather_map').style.background = "transparent";
                document.querySelector('.open_weather_map').style.backgroundSize = "contain";


                document.querySelector('.avg_temp').textContent = (data.main.temp - 273.15).toFixed(1) + " °C";
                document.querySelector('.min_temp').textContent =  (data.main.temp_min - 273.15).toFixed(1) + " °C";
                document.querySelector('.max_temp').textContent =  (data.main.temp_max - 273.15).toFixed(1) + " °C";
                document.querySelector('.weather_humidity').textContent =  (data.main.humidity) + " %";
                document.querySelector('.weather_wind').textContent =  degToCompass(data.wind.deg) + " " + (data.wind.speed) + " м/с";

              }
          })
        .catch((error) => {
              console.error('Error222:', error);
            });

}

drawWeatherWidget();
