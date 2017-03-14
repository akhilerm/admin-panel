function Add_Member()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               // alert(xt);
                window.opener.pageReload();
                window.close();
            }
        };
   	xx=( window.document.getElementById("eid").innerHTML).replace(/[^0-9]/g, ''); 
    xt="../registration/addNewMembers.php?id="+window.opener.getId()+"&eid="+xx+"&phno="+window.document.getElementById('phno').value;
    xmlhttp.open("GET", xt, true);
    xmlhttp.send();
}