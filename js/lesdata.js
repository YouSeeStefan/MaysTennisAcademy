var theButton = document.getElementById('the-important-button');

function hideTheButton() {
    this.style.display = 'none';
}

function addEvent(target, type, handler) {
    if (target.addEventListener) {
        target.addEventListener(type, handler, false);
    } else if (target.attachEvent) {
        target.attachEvent('on' + type, function() {
            return handler.call(target, window.event);
        });
    } else {
        target['on' + type] = handler;
    }
}

addEvent(theButton, 'click', hideTheButton);