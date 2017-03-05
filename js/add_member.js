function Add_Member()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.close();
            }
        };
    xmlhttp.open("GET", "AddNewMembers.php?id="+window.opener.getId()+"&eid="+window.document.getElementById("eid").value+"&phno="+window.document.getElementById('phno').value, true);
    xmlhttp.send();
}