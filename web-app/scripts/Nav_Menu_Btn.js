const btn = document.getElementById('nav_menu_btn');
const menu = $('#info_menu');

menu.hide();

let menu_hidden = true;

btn.onclick = (e) => {
    if (menu_hidden) {
        menu.show();
        menu_hidden = false;
    }
    else {
        menu.hide();
        menu_hidden = true;
    }
}