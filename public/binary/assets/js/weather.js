

function getweather(city) {
    var weather = sendRequestPureJS('GET', `http://api.weatherapi.com/v1/current.json?key=eed26d72ee514a2bb4481738222205&q=${city}&aqi=yes`);
    weather = JSON.parse(weather);
    return weather
    //alert(weather.location.name);
}

function displayweather() {
    // defining elements
    var weatherDiv = get("weather-section");
    var containerDiv = create("div");
    var firstRowDiv = create("div");
    var colLg12 = create("div");
    var mainContentDiv = create("div");
    var secondRowDiv = create("div");


    // adding classes
    containerDiv.classList.add("container");
    firstRowDiv.classList.add("row");
    colLg12.classList.add("col-lg-12");
    mainContentDiv.classList.add("main-content");
    secondRowDiv.classList.add("row");

    // appending
    weatherDiv.appendChild(containerDiv);
    containerDiv.appendChild(firstRowDiv);
    firstRowDiv.appendChild(colLg12);
    colLg12.appendChild(mainContentDiv);
    mainContentDiv.appendChild(secondRowDiv);

    var weather = getweather("Amman");
    createCard(weather, secondRowDiv, "Amman");
    var weather = getweather("Aqaba");
    createCard(weather, secondRowDiv, "Aqaba");
    var weather = getweather("31.7140932,35.5869483");
    createCard(weather, secondRowDiv, "Dead Sea");
    var weather = getweather("29.5697129,35.4199306");
    createCard(weather, secondRowDiv, "Wadi Rum");
    var weather = getweather("30.328458,35.4441186");
    createCard(weather, secondRowDiv, "Petra");
    var weather = getweather("Jerash");
    createCard(weather, secondRowDiv, "Jerash");

}

function createCard(weather, elem, city) {
    var colLg2 = create("div");
    var card = create("div");
    var img = create("img");
    var miniContainer = create("div");
    var cityName = create("p");
    var tempSit = create("p");

    // adding classes
    colLg2.classList.add("col-lg-2");
    card.classList.add("card");
    miniContainer.classList.add("container");


    //adding styles
    card.style.width = "150px";
    card.style.display = "flex";
    card.style.alignItems = "center";
    card.style.justifyContent = "center";
    img.style.width = "70px";
    img.style.height = "70px";
    img.style.marginTop = "10px";

    cityName.innerHTML = city;
    tempSit.innerHTML = `${weather.current.condition.text} ${weather.current.temp_c}C`;
    //img.src = "{{ asset('binary/assets/images/about-us.jpg') }}";
    img.src = weather.current.condition.icon;
    // appending
    colLg2.appendChild(card);
    card.appendChild(img);
    card.appendChild(miniContainer);
    miniContainer.appendChild(cityName);
    miniContainer.appendChild(tempSit);
    elem.appendChild(colLg2);
}