function ChangeParent()
{
    window.opener.getChangesFromPopupForEditProfile(window.document.getElementById('name').value,
                                                   window.document.getElementById('email').value,
                                                   window.document.getElementById('phno').value,
                                                    window.document.getElementById('gender').value,
                                                     window.document.getElementById('accomodation').value
                                                   );
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
                window.close();
        }
    };
    xdx=window.document.getElementById('gender').value=="00"?"F":"M";
    xd="../registration/changeProfile.php?name="+window.document.getElementById('name').value+"&email="+window.document.getElementById('email').value+"&phno="+window.document.getElementById('phno').value+"&gender="+xdx+"&acc="+window.document.getElementById('accomodation').value+"&pid="+window.opener.getId();
    alert(xd);
    xmlhttp.open("GET",  xd, true);
    xmlhttp.send();
}