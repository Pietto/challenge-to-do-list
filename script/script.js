function addCard(par) {
    console.log(par);


    var popup = document.createElement("DIV");
    popup.innerHTML = "<h1>SEND HELP PLS</h1>";
    document.body.appendChild(popup);

    console.log('aaa');

}

function openPopup(title, id) {
    overlay_add_card.style.display = 'block';
    setTimeout(function(){overlay_add_card.style.opacity = '1';},1);
}

function openListPopup() {
    overlay_add_List.style.display = 'block';
    setTimeout(function(){overlay_add_List.style.opacity = '1';},1);
}

function closePopup() {
    overlay_add_card.style.opacity = '.01';
    setTimeout(function(){overlay_add_card.style.display = 'none';},200);
    overlay_add_List.style.opacity = '.01';
    setTimeout(function(){overlay_add_List.style.display = 'none';},200);
}

//closes popup upon clicking escape
window.addEventListener ('keydown', (event) =>{
    if(event.code == 'Escape') {
        closePopup();
    }
})