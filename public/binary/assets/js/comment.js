class Comment {
    deleteComment() {
        const users = new User();
        const user = users.loggedInUser();
        if (user.responseCode[0] != '200')
            console.log(1);
    }
    createComment(first_name, last_name, email, comment, post_id = 0, review_id = 0) {
        var token = sendRequest("GET", 'token');
        var body = {
            "first_name": first_name,
            "last_name": last_name,
            "email": email,
            "comment": comment,
            "post_id": post_id,
            "review_id": review_id
        };
        const header = { "X-CSRF-TOKEN": token };
        sendRequest("POST", 'writecomment', body, header);
    }

    getCommentByPostID(id) {
        // sendRequest("GET", `comment/${id}`);
        var comment = sendRequest("GET", `comment/${id}`);
        comment = (JSON.parse(comment));
        return comment;
    }
    getCommentCount()
    {
        var comment = sendRequest("GET", 'commentsCount');
        comment = (JSON.parse(comment));
        return comment;
    }
}