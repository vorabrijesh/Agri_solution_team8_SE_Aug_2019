

$.getJSON(
	"http://api.agromonitoring.com/agro/1.0/weather?units=imperial&polyid=5d63e4e2eb408b0007145894&appid=79a76f23cda73ab92a814579bd1c44ba", 
	function(data){
	console.log(data);

	var icon = "http://openweathermap.org/img/w/"+data.weather[0].icon+".png"
	$('.icon').attr('src',icon);

	var temp= data.main.temp;
	var humid = data.main.humidity;
	var pressure = data.main.pressure;
	var desc = data.weather[0].description;
	$('.temp').append(temp+ " K"); 
	$('.humid').append(humid+ "%");
	$('.pressure').append(pressure+"hPa");
	$('.desc').append(desc);
	console.log("succesfull weather api");

});