const btn = document.getElementById('short_info');
const menu = $('#info_menu');

menu.hide();

let menu_hidden = true;

btn.onclick = (e) => {
    if (menu_hidden) {
        menu.show();
        menu_hidden = false;
        btn.style.background = 'lightgreen';
    }
    else {
        menu.hide();
        menu_hidden = true;
        btn.style.background = 'none';
    }
}