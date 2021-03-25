var a = 1;

document.addEventListener('webkitAnimationEnd', function () {
    a++;
    if (a == 12){
        document.getElementById('letra-a1').classList= "letra-a1"
    }

}, false);



