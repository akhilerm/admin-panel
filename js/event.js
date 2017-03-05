function AddEvent()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    window.close();
            }
        };
    xmlhttp.open("GET", "AddEvent.php?id="+window.opener.getId()+"&ename="+window.document.getElementById("event").value , true);
    xmlhttp.send();
}