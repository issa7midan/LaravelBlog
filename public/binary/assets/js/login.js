
function login(email, password)
{
  var token = sendRequest("GET",'token');
  // var body = {
  //   "email": email,
  //   "password": password
  // };
  var body = {
    "email": $("#email").val(),
    "password": $("#password").val()
  };
  header ={"X-CSRF-TOKEN":token};  
 sendRequest("POST", 'user/login', body,header); 
}
class views{
 constructor(){
  function viewPoint() {
    const {mobileCheck} = require('./web.js');
    var isMobile = mobileCheck();
    if(isMobile == true) {
      var fieldsets = document.getElementsByClassName("fieldsets");
      // for(var i = 0; i<fieldsets.length; i++)
      //   fieldsets[i].style.width = "100%";
      Array.from(fieldsets).forEach(element => {
        element.style.width = "100%";
      });
      
    }else {
      var fieldsets = document.getElementsByClassName("fieldsets");
      Array.from(fieldsets).forEach(element => {
        element.style.width = "50%";
      });
    }
    module.exports = {viewPoint,}   
   }
  }
}
