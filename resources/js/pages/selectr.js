

import Selectr from 'mobius1-selectr/src/selectr'

function loadScript(url, callback) {
    let script = document.createElement('script');
    script.type = 'text/javascript';

    if (script.readyState) {  // IE
        script.onreadystatechange = function () {
            if (script.readyState === 'loaded' || script.readyState === 'complete') {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {  // Others
        script.onload = function () {
            callback();
        };
    }

    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}

// Function to dynamically load CSS
function loadCSS(url) {
    let link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = url;
    document.getElementsByTagName('head')[0].appendChild(link);
}

// Load Select2 from CDN
loadCSS('https://cdn.jsdelivr.net/npm/mobius1-selectr@2.4.13/dist/selectr.min.css');

loadScript('https://cdn.jsdelivr.net/npm/mobius1-selectr@2.4.13/dist/selectr.min.js');