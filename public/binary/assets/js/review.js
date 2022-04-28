class Reviews
{
    constructor ()
    {
        function createReview()
        {
            module.exports = { createReview }
        }
        function deleteReview()
        {
            module.exports = { deleteReview } 
        }
        function allReviews()
        {
            module.exports = { allReviews }
        }
    }

    createReview(first_name, last_name, email,content)
    {
        var token = sendRequest("GET", 'token');
        var body = {
            "first_name": $("#first_name").val(),
            "last_name": $("#last_name").val(),
            "email": $("#email").val(),
            "content": $("#content").val()
        };
        const header = { "X-CSRF-TOKEN": token };
        sendRequest("POST", 'writecomment', body, header);
    }

    deleteReview()
    {

    }

    allReviews()
    {

    }
}