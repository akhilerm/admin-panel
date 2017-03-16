
function Delete()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.opener.pageReload();
                window.close();
            }
        };
    xt="../registration/getfromDelete.php?pid="+window.opener.getId()+"&otid="+window.document.getElementById('otid').value;
    xmlhttp.open("GET", xt, true);
    xmlhttp.send();
}