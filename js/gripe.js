const api = 'e6885846dbd2a55149ec5edfb4246afe';

const iconImg = document.getElementById('weather-icon');
const tempF = document.querySelector('.f');
const tempF2 = document.querySelector('.f2');
const desc = document.querySelector('.desc');
const desc2 = document.querySelector('.desc2');
const sunriseDOM = document.querySelector('.sunrise');
const sunsetDOM = document.querySelector('.sunset');

window.addEventListener('load', () => {
	let lon;
	let lat;
	// Accessing Geolocation of User
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition((position) => {
			// Storing Longitude and Latitude in variables
			lon = position.coords.longitude;
			lat = position.coords.latitude;
			const base = `https://api.openweathermap.org/data/2.5/onecall?lat=${lat}&lon=${lon}&exclude={hourly}&appid=${api}`;
			// Using fetch to get data
			fetch(base)
			.then((response) => {
				return response.json();
			})
			.then((data) => {
				const { temp } = data.current;
				const { description } = data.current.weather[0];
				const { icon } = data.current;
				const { sunrise, sunset } = data.current;
				//const iconUrl = `http://openweathermap.org/img/wn/${icon}@2x.png`;
				const fahrenheit = (temp - 273.15) * 9 / 5 + 32;
				// Converting Epoch(Unix) time to GMT
				const sunriseGMT = new Date(sunrise * 1000);
				const sunsetGMT = new Date(sunset * 1000);
				// Interacting with DOM to show data
				//iconImg.src = iconUrl;
				desc.textContent = `${description}`;
				desc2.textContent = `${description}`;
				tempF.textContent = `${fahrenheit.toFixed(1)} °F`;
				tempF2.textContent = `${fahrenheit.toFixed(1)} °F`;
				sunriseDOM.textContent = `${sunriseGMT.toLocaleDateString()}, ${sunriseGMT.toLocaleTimeString()}`;
				sunsetDOM.textContent = `${sunsetGMT.toLocaleDateString()}, ${sunsetGMT.toLocaleTimeString()}`;
			});
		});
	}
});

function ajaxpost() {
	var data = new FormData();
	data.append("username", document.getElementById("username").value);
	data.append("profileimage", document.getElementById("profileimage").value);
	data.append("gripe", document.getElementById("gripe").value);

	var xhr = new XMLHttpRequest();
	xhr.open("POST", "gripeinsert.php");
	xhr.onload = function () {
      document.getElementById('gripe').value = "";
    };
	xhr.send(data);
	return false;
}
