
function getWeather(){
    console.log("function ran congratz lol");
    document.getElementById("results").style.display = "block";
    document.getElementById("loading").style.display = "block";
    var htmlinput = document.getElementById("search");
    console.log(htmlinput.value);
   
    if (isNaN(htmlinput.value) == true) {//text entry
        
            fetch('https://api.openweathermap.org/data/2.5/weather?q=' + htmlinput.value + '&appid=6a803c1998641398d23fc179d0042a49')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (htmlinput.value == "") {
                        document.getElementById("loading").style.display = "none";
                        document.getElementById("error1").style.display = "block";
                        document.getElementById("results").style.display = "none";
                    }
                    else if (data['cod'] != '404' && htmlinput.value != "") {
                        document.getElementById("error1").style.display = "none";
                        document.getElementById("imagecontainer").style.display = "block";
                        var imgid = data['weather'][0]['icon'];
                        console.log("imgid: " + imgid);
                        document.getElementById('myImage').src = 'https://openweathermap.org/img/wn/' + imgid + '@2x.png'
                        var tempValue = data['main']['temp'];
                        var nameValue = data['name'];
                        var descValue = data['weather'][0]['description'];
                        console.log(nameValue);
                        tempValue = parseFloat(tempValue);
                        tempValue = (((tempValue - 273.15) * 9) / 5) + 32;
                        name1.innerHTML = nameValue;
                        desc.innerHTML = "| " + descValue + " |";
                        temp.innerHTML = Math.trunc(tempValue) + "<span> &#8457;</span>";
                        document.getElementById("loading").style.display = "none";
                    }
                    else {
                        document.getElementById("loading").style.display = "none";
                        document.getElementById("error1").style.display = "block";
                        document.getElementById("results").style.display = "none";

                    }
                })
        }
        else {//number entry for zip
            fetch('https://api.openweathermap.org/data/2.5/weather?zip=' + htmlinput.value + ',us' + '&appid=6a803c1998641398d23fc179d0042a49')
                .then(response => response.json())
                .then(data => {
                    
                    console.log(data);
                    if (htmlinput.value == "") {
                        document.getElementById("loading").style.display = "none";
                        document.getElementById("error1").style.display = "block";
                        document.getElementById("results").style.display = "none";
                    }
                    else if (data['cod'] != '404' && htmlinput.value != "") {
                        document.getElementById("error1").style.display = "none";
                        document.getElementById("imagecontainer").style.display = "block";
                        var imgid = data['weather'][0]['icon'];
                        console.log("imgid: " + imgid);
                        document.getElementById('myImage').src = 'https://openweathermap.org/img/wn/' + imgid + '@2x.png'
                        var tempValue = data['main']['temp'];
                        var nameValue = data['name'];
                        var descValue = data['weather'][0]['description'];
                        console.log(nameValue);
                        tempValue = parseFloat(tempValue);
                        tempValue = (((tempValue - 273.15) * 9) / 5) + 32;
                        name1.innerHTML = nameValue;
                        desc.innerHTML = "| " + descValue + " |";
                        temp.innerHTML = Math.trunc(tempValue) + "<span> &#8457;</span>";
                        document.getElementById("loading").style.display = "none";
                    }
                    else {
                        document.getElementById("loading").style.display = "none";
                        document.getElementById("error1").style.display = "block";
                        document.getElementById("results").style.display = "none";

                    }
                })
        }
    }
    




