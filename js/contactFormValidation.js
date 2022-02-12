function formValidate(){
    var cf = document.forms['contact'];
    var fullname = cf['fullname'].value;
    var email = cf['email'].value;
    var phone = cf['phone'].value;
    var message = cf['message'].value;


    if (message.length==0){
        cf['fullname'].focus();
        alert(console.log(message));
    }

    
}
