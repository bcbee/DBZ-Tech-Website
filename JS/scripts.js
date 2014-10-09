//JavaScript Document
var menuDisplayed = false;


function load() {
    $('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
}

function toggleLinkMenu() {
    if (!menuDisplayed) {
        $(".linkheader").css("top", "48px");
        setTimeout(function(){$(".linkheader").show();}, 500);
    } else {
        $(".linkheader").css("top", "-48px");
        setTimeout(function(){$(".linkheader").hide();}, 500);
    }

    menuDisplayed = !menuDisplayed;
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
