class User {
    loggedInUser() {
        var user = sendRequest("GET", 'authuser');
        user = JSON.parse(user);
        return user
    }
    isAuthenticated()
    {
        var user = sendRequest("GET",'authuser');
        user = JSON.parse(user);
        if (user.data[0].id == undefined)
            return false;
        return true;
    }
}