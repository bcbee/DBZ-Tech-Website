//JavaScript Document

function load() {
    $('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
}

function changePage(title) {
    window.location = "http://dbztech.com/"+title;
}

function mobilenavselect() {
    changePage(document.getElementById('mobilenav').value);
}