// / <reference path="jquery-1.9.1.min.js" />
// / <reference path="jquery-ui.min.js" />
// / <reference path="UIModule.js" />
// / <reference path="MainModule.js" />
/*global uiObject:true*/
/*global mainObject:true*/

$(document).ready(function() {
    "use strict";

    var UI      = uiObject();
    var Main    = mainObject();

    if($(underConstruction).length > 0) {
        Main.RedirectCountdown(URL, seconds);
    }

    responsiveFunc();

    $(window).resize(function() {
        "use strict";
        responsiveFunc();
    });
});

var responsiveFunc = (function () {
    "use strict";
    var UI = uiObject();
    UI.SelectLogoScreenWidth(650);
    UI.ChangeDivPrecentScreenHeight("bakhuset_logo_container",60);
});
