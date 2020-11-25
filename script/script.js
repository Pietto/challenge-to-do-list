function addCard(par){
    console.log(par);


    var popup = document.createElement("DIV");
    popup.innerHTML = "<h1>SEND HELP PLS</h1>";
    document.body.appendChild(popup);

    console.log('aaa');

}


function addCard(title, description){
    overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('overlay').style.opacity = '1';},1);
}

function closePopup(){
    overlay.style.opacity = '.01';
    overlay.style.display = 'none';
}