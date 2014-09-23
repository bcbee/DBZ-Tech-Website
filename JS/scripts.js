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

function core() {
    this.showId = function(id) {
        try {
           document.getElementById(id).style.display = "block";
        }
        catch (e) {
           // statements to handle any exceptions
        }
    }
    
    this.hideId = function(id) {
        try {
           document.getElementById(id).style.display = "none";
        }
        catch (e) {
           // statements to handle any exceptions
        }
        
    }
}

Core = new core;