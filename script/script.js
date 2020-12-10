function createListForm() {
    list_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('list_overlay').style.opacity = '1';},1);
}

function closeForms() {
    list_overlay.style.opacity = '.01';
    setTimeout(function(){list_overlay.style.display = 'none';},200);
    card_overlay.style.opacity = '.01';
    setTimeout(function(){card_overlay.style.display = 'none';},200);
    list_update_overlay.style.opacity = '.01';
    setTimeout(function(){list_update_overlay.style.display = 'none';},200);
}

function createCardForm(list) {
    card_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('card_overlay').style.opacity = '1';},1);
    card_list_id.value = list;
    console.log('id:', list);
}

function UpdateListForm(id){
    id_input.value = id;
    list_update_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('list_update_overlay').style.opacity = '1';},1);
}

// closes popup upon clicking escape
window.addEventListener ('keydown', (event) =>{
    if(event.code == 'Escape') {
        closeForms();
    }
});


// function function(par){
//     if(par == 'status'){

//     }
// }