// / <reference path="jquery-1.9.1.min.js" />
// / <reference path="jquery-ui.min.js" />

var mainObject = function() {
  return {
    RedirectCountdown: function(URL,seconds) {
        "use strict";

        seconds = seconds * 1000; // Convert to milliseconds

        setTimeout(function() {
            window.parent.location = URL;
        }, seconds);
    }
  };
};
