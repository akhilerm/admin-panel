function Change()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                window.opener.pageReload();
                window.close();
            }
        };
   	//xx=( window.document.getElementById("eid").innerHTML).replace(/[^0-9]/g, ''); 
    xt="../registration/getfromChangeTransactionId.php?pid="+window.opener.getId()+"&otid="+window.document.getElementById('otid').value+"&ntid="+window.document.getElementById('ntid').value;
    xmlhttp.open("GET", xt, true);
    xmlhttp.send();
}










//http://127.0.0.1/admin-panel/registration/getfromChangeTransationId.php?pid=11001&otid=6307417455218&ntid=10