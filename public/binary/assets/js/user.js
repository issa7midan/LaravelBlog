class User {
    constructor() {
        function loggedInUser() {
            module.exports = { loggedInUser, };
        }

    }
    loggedInUser() {
        var user = sendRequest("GET", 'authuser');
        user = JSON.parse(user);
        return user
    };

}