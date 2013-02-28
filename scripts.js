//Scroll code: var vscroll = (document.all ? document.scrollTop : window.pageYOffset);

window.onscroll = function (oEvent) {
    // called when the window is scrolled.
    vscroll = (document.all ? document.scrollTop : window.pageYOffset);
    //console.log(vscroll);
}