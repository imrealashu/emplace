var contactUs = (function(){

    var $el = $('#contact-us');
    var action = $el.attr('action');

    function sendRequest(){
        alert('ashish');
    };
    return {
        sendRequest: sendRequest
    };

})();
(function(){
   contactUs.sendRequest();
});