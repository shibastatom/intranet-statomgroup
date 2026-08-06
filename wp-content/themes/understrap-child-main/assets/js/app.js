{const e=()=>{document.documentElement.style.setProperty("--body-scroll-width",window.innerWidth-document.documentElement.clientWidth+"px")};window.addEventListener("resize",e),e()}{const e=()=>{setDarkMode(!isDarkMode());const e=isDarkMode();localStorage.setItem("darkMode",e?"1":"0")},t=e=>{e.checked=isDarkMode()};document.querySelectorAll("[data-darkmode-toggle] input, [data-darkmode-switch] input").forEach((n=>{n.addEventListener("change",e),t(n)}))}document.querySelectorAll(".uc-horizontal-scroll").forEach((e=>{e.addEventListener("wheel",(t=>{t.preventDefault(),e.scrollBy({left:t.deltaY,behavior:"smooth"})}))})),document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector("[data-uc-backtotop]");if(!e)return;e.addEventListener("click",(e=>{e.preventDefault(),window.scrollTo({top:0,behavior:"smooth"})}));let t=0;window.addEventListener("scroll",(()=>{const n=document.body.getBoundingClientRect().top;e.parentNode.classList.toggle("uc-active",n<=t),t=n}))})),document.addEventListener("DOMContentLoaded",(function(){let e=[].slice.call(document.querySelectorAll("video.video-lazyload"));function t(e){let t=e.querySelector("source");t.src=t.dataset.src,e.load(),e.muted=!0,"visible"===document.visibilityState?e.play():document.addEventListener("visibilitychange",(function t(){"visible"===document.visibilityState&&(e.play(),document.removeEventListener("visibilitychange",t))}))}if("IntersectionObserver"in window){let n=new IntersectionObserver((function(e,o){e.forEach((function(e){if(e.isIntersecting){let o=e.target;t(o),n.unobserve(o)}}))}));e.forEach((function(e){n.observe(e),e.getBoundingClientRect().top<window.innerHeight&&e.getBoundingClientRect().bottom>0&&(t(e),n.unobserve(e))}))}else e.forEach((function(e){t(e)}))}));


// state
let currCity = "London";
let units = "metric";

// Selectors
let city = document.querySelector(".weather__city");
let datetime = document.querySelector(".weather__datetime");
let weather__forecast = document.querySelector('.weather__forecast');
let weather__temperature = document.querySelector(".weather__temperature");
let weather__icon = document.querySelector(".weather__icon");
let weather__minmax = document.querySelector(".weather__minmax")
let weather__realfeel = document.querySelector('.weather__realfeel');
let weather__humidity = document.querySelector('.weather__humidity');
let weather__wind = document.querySelector('.weather__wind');
let weather__pressure = document.querySelector('.weather__pressure');

// search
document.querySelector(".weather__search").addEventListener('submit', e => {
    let search = document.querySelector(".weather__searchform");
    // prevent default action
    e.preventDefault();
    // change current city
    currCity = search.value;
    // get weather forecast 
    getWeather();
    // clear form
    search.value = ""
})

// units
document.querySelector(".weather_unit_celsius").addEventListener('click', () => {
    if(units !== "metric"){
        // change to metric
        units = "metric"
        // get weather forecast 
        getWeather()
    }
})

document.querySelector(".weather_unit_farenheit").addEventListener('click', () => {
    if(units !== "imperial"){
        // change to imperial
        units = "imperial"
        // get weather forecast 
        getWeather()
    }
})

function convertTimeStamp(timestamp, timezone){
     const convertTimezone = timezone / 3600; // convert seconds to hours 

    const date = new Date(timestamp * 1000);
    
    const options = {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric",
        hour: "numeric",
        minute: "numeric",
        timeZone: `Etc/GMT${convertTimezone >= 0 ? "-" : "+"}${Math.abs(convertTimezone)}`,
        hour12: true,
    }
    return date.toLocaleString("en-US", options)
   
}

// convert country code to name
function convertCountryCode(country){
    let regionNames = new Intl.DisplayNames(["en"], {type: "region"});
    return regionNames.of(country)
}

function getWeather(){
    const API_KEY = '64f60853740a1ee3ba20d0fb595c97d5'

fetch(`https://api.openweathermap.org/data/2.5/weather?q=${currCity}&appid=${API_KEY}&units=${units}`).then(res => res.json()).then(data => {
    console.log(data)
    city.innerHTML = `${data.name}, ${convertCountryCode(data.sys.country)}`
    datetime.innerHTML = convertTimeStamp(data.dt, data.timezone); 
    weather__forecast.innerHTML = `<p>${data.weather[0].main}`
    weather__temperature.innerHTML = `${data.main.temp.toFixed()}&#176`
    weather__icon.innerHTML = `   <img src="http://openweathermap.org/img/wn/${data.weather[0].icon}@4x.png" />`
    weather__minmax.innerHTML = `<p>Min: ${data.main.temp_min.toFixed()}&#176</p><p>Max: ${data.main.temp_max.toFixed()}&#176</p>`
    weather__realfeel.innerHTML = `${data.main.feels_like.toFixed()}&#176`
    weather__humidity.innerHTML = `${data.main.humidity}%`
    weather__wind.innerHTML = `${data.wind.speed} ${units === "imperial" ? "mph": "m/s"}` 
    weather__pressure.innerHTML = `${data.main.pressure} hPa`
})
}

document.body.addEventListener('load', getWeather())



