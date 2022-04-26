function post(title, content)
{

  var token = sendRequest("GET",'token');
  var user = sendRequest("GET", 'authuser');
  user = JSON.parse(user);
  var user_id = user[0].id;
  var body = {
    "title": $("#title").val(),
    "content": $("#content").val(),
    "user_id":user_id,
    "postTypeID":1,
  };
  
  header ={"X-CSRF-TOKEN":token};  
 sendRequest("POST", 'writepost', body,header); 
}

