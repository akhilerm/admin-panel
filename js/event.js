function AddEvent()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.opener.pageReload();
                window.close();
            }
        };
    xt="addEvent.php?part_id="+window.opener.getId()+"&eid="+window.document.getElementById("eid").value;
    xmlhttp.open("GET",xt, true);
    xmlhttp.send();
}