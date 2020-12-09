function addCard(par) {
    console.log(par);


    var popup = document.createElement("DIV");
    popup.innerHTML = "<h1>SEND HELP PLS</h1>";
    document.body.appendChild(popup);

    console.log('aaa');

}

const overlayAddCard = document.getElementById('overlay_add_card');
const overlayAddList = document.getElementById('overlay_add_List');
console.log(overlayAddlist);

function openPopup(title, id) {
    overlayAddCard.style.display = 'block';
    setTimeout(function(){overlayAddCard.style.opacity = '1';},1);
}

function openListPopup() {
    overlay_Add_List.style.display = 'block';
    setTimeout(function(){overlayAddList.style.opacity = '1';},1);
}

function closePopup() {
    overlayAddCard.style.opacity = '.01';
    setTimeout(function(){overlayAddCard.style.display = 'none';},200);    
}

//closes popup upon clicking escape
window.addEventListener ('keydown', (event) =>{
    if(event.code == 'Escape') {
        closePopup();
    }
})