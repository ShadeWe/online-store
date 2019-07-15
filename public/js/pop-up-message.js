/*
 *  When there's a message from the server, this message's supposed to be shown to the user
 *  status - bad, good (the colour of message depends on it)
 *  message - the message itself which the server has sent back, or any custom message.
 */
function animatePopUpMessage(status, message) {

    var popUp = document.getElementsByClassName('pop-up-message')[0];

    popUp.id = status + "-message"; // there's styles for bad-message and good-message, so they're applied after this.
    popUp.innerHTML = message;

    document.getElementsByClassName('pop-up-message')[0].style.display = 'block';
    
    setTimeout(function() {
        document.getElementsByClassName('pop-up-message')[0].style.opacity = '1';
    }, 500);

    setTimeout(function() {
        document.getElementsByClassName('pop-up-message')[0].style.opacity = '0';
        setTimeout(function() {
            document.getElementsByClassName('pop-up-message')[0].style.display = 'none';
        }, 500);
    }, 3000);
}
