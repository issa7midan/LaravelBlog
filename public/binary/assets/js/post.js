class Posts{
    constructor(){
        function createPost (){
            const {loggedInUser} = require('./user.js');
            module.exports = {post,}
        }
        
        function updatePost()
        {
            const {loggedInUser} = require('./user.js');
            module.exports = {updatePost,}
        }
    }
     post(title, content)
    {
      var token = sendRequest("GET",'token');
       const users = new user();
       user = users.loggedInUser();
      const user_id = user[0].id;
      var body = {
        "title": $("#title").val(),
        "content": $("#content").val(),
        "user_id":user_id,
        "postTypeID":1,
      };
      
      const header ={"X-CSRF-TOKEN":token};  
      console.log(body);
     sendRequest("POST", 'writepost', body,header); 
    }


    updatePost(title, content)
    {
        var token = sendRequest("GET", 'token');
        const users = new user();
        user = users.loggedInUser();
        const user_id = user[0].id;
        var body = {
            "title": $("#title").val(),
            "content": $("#content").val(),
            "user_id":user_id,
            "postTypeID":1,
        };
        header ={"X-CSRF-TOKEN":token};  
        sendRequest("POST", 'updatepost', body,header); 
    }
}