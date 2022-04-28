class Comment {
    constructor() {

        function createComment() {
            module.exports = { createComment };
        }

        function deleteComment() {
            const { loggedInUser } = require('./user.js');
            module.exports = { deleteComment, }
        }

        function getCommentByPostID() {
            module.exports = { getCommentByPostID }
        }
    }

    deleteComment() {
        const users = new User();
        const user = users.loggedInUser();
        if (user.errors != '200')
            console.log(1);
    }
    createComment(first_name, last_name, email, post_id, review_id) {
        var token = sendRequest("GET", 'token');
        var body = {
            "first_name": $("#first_name").val(),
            "last_name": $("#last_name").val(),
            "email": $("#email").val(),
            "post_id": $("#post_id").val(),
            "review_id": $("#review_id").val()
        };
        const header = { "X-CSRF-TOKEN": token };
        sendRequest("POST", 'writecomment', body, header);
    }

    getCommentByPostID(id) {
        var body = {
            "id": id
        };
        sendRequest("GET", `comment/${id}`);
        var comment = sendRequest("GET", 'comment/1');
        comment = (JSON.parse(comment));
        return comment;
    }

}