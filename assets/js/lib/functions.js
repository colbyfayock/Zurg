// Device window is < 640px
var isSmall = function() {
    var winW = $(window).width();
    if (winW < 640) {
        return true;
    } else {
        return false;
    }
};

var clearStyles = function(e) {
    var windowWidth = $(window).width();
    if(!isSmall()) {
        $(e).removeAttr("style");
    }
};