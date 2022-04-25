var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
document.getElementsByTagName('head')[0].appendChild(script);

const mainPath = "127.0.0.1:8000/";
function sendRequestPureJS (httpType, subPath, body = {}, header = "")
{
        var response ='';
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            if (this.readyState == 4 && this.status == 200){
                response = this.responseText;
            }
        }
        xhttp.open(httpType, subPath, false);
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(JSON.stringify(body));
        return response;
}

  function sendRequest(httpType, subPath, body = {}, header = {}){
    var response = 
        $.ajax({
            async: false,
            type: httpType,
            url: subPath,
            headers: header,
            data: body
        }).done(function(response){
           this.response = response;
        }).fail(function(response){
            this.response = response;
        }).always(function(){
             console.log(this.response);
        }).responseText;
    return response;
}