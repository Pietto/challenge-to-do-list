function createListForm() {
    list_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('list_overlay').style.opacity = '1';},1);
}

function closeForms() {
    list_overlay.style.opacity = '.01';
    setTimeout(function(){list_overlay.style.display = 'none';},200);
    card_create_overlay.style.opacity = '.01';
    setTimeout(function(){card_create_overlay.style.display = 'none';},200);
    list_update_overlay.style.opacity = '.01';
    setTimeout(function(){list_update_overlay.style.display = 'none';},200);
    card_update_overlay.style.opacity = '.01';
    setTimeout(function(){card_update_overlay.style.display = 'none';},200);
}

function createCardForm(list) {
    card_create_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('card_create_overlay').style.opacity = '1';},1);
    card_create_list_id.value = list;
    console.log('id:', list);
    console.log(card_list_id.value);
}

function updateCardForm(id, name, desc, cardStatus, length, list_id) {
    card_update_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('card_update_overlay').style.opacity = '1';},1);
    
    update_name_input.value = name;
    update_description_input.value = desc;
    update_length_input.value = length;
    card_id.value = id;
    card_list_id.value = list_id;
    console.log('status: ',cardStatus);
    
    switch(cardStatus) {
        case 'todo':
            document.getElementById('update_status').selectedIndex = 0;
        break;
        case 'doing':
            document.getElementById('update_status').selectedIndex = 1;
        break;
        case 'done':
            document.getElementById('update_status').selectedIndex = 2;
        break;
        default:
            document.getElementById('update_status').selectedIndex = 0;
            console.log('status ', cardStatus, ' not found, default status selected.');
    }
}

function UpdateListForm(id, name){
    list_id.value = id;
    list_update_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('list_update_overlay').style.opacity = '1';},1);
    console.log('name= ',name);
    list_name_update.value = name;
}

// closes popup upon clicking escape
window.addEventListener ('keydown', (event) =>{
    if(event.code == 'Escape') {
        closeForms();
    }
});