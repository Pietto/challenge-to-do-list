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
}

function updateCardForm(id, name, desc, cardStatus, length, list_id) {
    card_update_overlay.style.display = 'block';
    setTimeout(function(){document.getElementById('card_update_overlay').style.opacity = '1';},1);
    
    update_name_input.value = name;
    update_description_input.value = desc;
    update_length_input.value = length;
    card_id.value = id;
    card_list_id.value = list_id;
    
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
    list_name_update.value = name;
}

// closes popup upon clicking escape
window.addEventListener ('keydown', (event) =>{
    if(event.code == 'Escape') {
        closeForms();
    }
});

function openStatusDropdown() {
	document.getElementById("dropdown_content_status").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		}
		}
	}
}

var todo = document.getElementById('card_todo');
var doing = document.getElementById('card_doing');
var done = document.getElementById('card_done');

function openLengthDropdown() {
	document.getElementById("dropdown_content_length").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		}
		}
	}
}

function filterStatus(status, listId){
    switch(status.value){
        case 'todo':
            todo.style.display = 'grid';
            doing.style.display = 'none';
            done.style.display = 'none';
        break;
        case 'doing':
            todo.style.display = 'none';
            doing.style.display = 'grid';
            done.style.display = 'none';
        break;
        case 'done':
            todo.style.display = 'none';
            doing.style.display = 'none';
            done.style.display = 'grid';
        break;
        case 'default':
            todo.style.display = 'grid';
            doing.style.display = 'grid';
            done.style.display = 'grid';
        default:
            todo.style.display = 'grid';
            doing.style.display = 'grid';
            done.style.display = 'grid';
    }
}