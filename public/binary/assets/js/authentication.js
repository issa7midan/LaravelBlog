class Authentication {
    constructor ()
    {
        function isAuthenticated ()
        {
            module.exports = { isAuthenticated }
        }
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