class user{
    constructor()
    {
        loggedInUser()
        {
            module.exports = {loggedInUser,};
        }
    }
    loggedInUser() {
        var user = sendRequest("GET", 'authuser');
        user = JSON.parse(user);
        return user  
      };
     
}