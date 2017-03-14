function ChangeParent()
{
    var name=window.document.getElementById('name').value;
    var email=window.document.getElementById('email').value;
    var phone=window.document.getElementById('phno').value;
    var gender=window.document.getElementById('gender').value;
    var accommodation=window.document.getElementById('accommodation').value;
    window.opener.getChangesFromPopupForEditProfile(name,email,phone,gender,accommodation);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                window.close();
        }
    };
    xd="../registration/changeProfile.php?name="+name+"&email="+email+"&phno="+phone+"&gender="+gender+"&acc="+accommodation+"&pid="+window.opener.getId();
    xmlhttp.open("GET",  xd, true);
    xmlhttp.send();
}