function AddEvent()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                    window.opener.pageReload();
                    window.close();
            }
        };
    xt="AddEvent.php?id="+window.opener.getId()+"&ename="+window.document.getElementById("eid").value;
    xmlhttp.open("GET",xt, true);
    alert(xt);
    xmlhttp.send();
}