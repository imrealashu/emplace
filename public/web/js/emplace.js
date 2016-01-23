var contactUs = (function(){
    var $el = $('#contact-us');
    var url = $el.attr('action');
    //$el.find('button').on('click',sendRequest); //Can be invoked by this method also
    function sendRequest(event){
        event.preventDefault();
        var data = $el.serialize();
        $.post(url,data,function(response){
            $el.next().text(response)
            $el.find('input:not(name="_token")').val('');
        })
    };
    return {
        sendRequest: sendRequest
    };
})();