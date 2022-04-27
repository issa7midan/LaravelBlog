class user{
    loggedInUser() {
        var user = sendRequest("GET", 'authuser');
        user = JSON.parse(user);
        return user
        module.exports = {loggedInUser,};
      };
     
}