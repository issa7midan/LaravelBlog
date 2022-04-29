class Posts {
    updatePost(title, content) {
        const users = new User();
        if (users.isAuthenticated()) {
            var token = sendRequest("GET", 'token');
            const user = users.loggedInUser();
            const user_id = user.data[0].id;
            
            var body = {
                "title": $("#title").val(),
                "content": $("#content").val(),
                "user_id": user_id,
                "postTypeID": 1,
            };
            header = { "X-CSRF-TOKEN": token };
            sendRequest("POST", 'updatepost', body, header);
        }
    }
    createPost(title, content) {

        const users = new User();
        if (users.isAuthenticated()) {
            var token = sendRequest("GET", 'token');
            var user = users.loggedInUser();
            var user_id = user.data[0].id
            var body = {
                "title": $("#title").val(),
                "content": $("#content").val(),
                "user_id": user_id,
                "postTypeID": 1,
            };
            const header = { "X-CSRF-TOKEN": token };
            sendRequest("POST", 'writepost', body, header);
        }

    }
    deletePost(id) {
        const users = new User();
        if (users.isAuthenticated()) {
            var token = sendRequest("GET", 'token');
            header = { "X-CSRF-TOKEN": token };
            var body = {
                "id": id
            };
            sendRequest("POST", 'deletepost', body, header);
        }
    }
    getAllPosts() {
        var posts = sendRequest("GET", 'allposts');
        posts = JSON.parse(posts);
        return posts;
    }

    getPostsByWinLocation(id)
    {
        var posts = sendRequest("GET",`blogPosts/${id}`);
        posts = JSON.parse(posts);
        return posts;
    }

}