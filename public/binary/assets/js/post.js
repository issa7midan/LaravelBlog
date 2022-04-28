class Posts {
    constructor() {


        function updatePost() {
            const { loggedInUser } = require('./user.js');
            module.exports = { updatePost, }
        }
        function createPost() {
            const { loggedInUser } = require('./user.js');
            module.exports = { createPost, }
        }
        function deletePost() {
            module.exports = { deletePost, }
        }

        function getAllPosts() {
            module.exports = { getAllPosts }
        }
    }



    updatePost(title, content) {
        var token = sendRequest("GET", 'token');
        const users = new User();
        const user = users.loggedInUser();
        const user_id = user[0].id;
        var body = {
            "title": $("#title").val(),
            "content": $("#content").val(),
            "user_id": user_id,
            "postTypeID": 1,
        };
        header = { "X-CSRF-TOKEN": token };
        sendRequest("POST", 'updatepost', body, header);
    }
    createPost(title, content) {
        var token = sendRequest("GET", 'token');
        const users = new User();
        const user = users.loggedInUser();
        const user_id = user[0].id;
        var body = {
            "title": $("#title").val(),
            "content": $("#content").val(),
            "user_id": user_id,
            "postTypeID": 1,
        };
        const header = { "X-CSRF-TOKEN": token };
        sendRequest("POST", 'writepost', body, header);

    }
    deletePost(id) {
        var token = sendRequest("GET", 'token');
        header = { "X-CSRF-TOKEN": token };
        var body = {
            "id": id
        };
        sendRequest("POST", 'deletepost', body, header);
    }
    getAllPosts() {
        var posts = sendRequest("GET", 'allposts');
        posts = JSON.parse(posts);
        return posts;
    }


}