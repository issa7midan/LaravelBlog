const mainPath = "127.0.0.1:8000/";
function sendRequest (httpType, subPath, body = {}, header = "")
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