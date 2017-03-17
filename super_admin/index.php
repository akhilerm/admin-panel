<?php
    require_once("../db_connect.php");
    session_create();
    if(session_check()==true)
    {
        if(session_get_admin()==1)
        {
?>
            <html>
            <head>
            	
		<title>Conjura'17</title>
	
		<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="../js/Registration.js"></script>
		<!--web-fonts-->
		<!--<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>-->
		<script src="../js/jquery-1.12.0.min.js"></script>
		
		<!--web-fonts-->
				
                <script>
                    var myVar = setInterval(showCount, 3000);
                    var myVar3 = setInterval(showLeader, 4000);
                    var myVar2 = setInterval(showTable, 6000);
                    
                    function showCount() {
                        if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                        }
                        else {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("total").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET","getCount.php",true);
                        xmlhttp.send();        
                    }
                    function showTable() {
                        if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                        }
                        else {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("table").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET","getTable.php",true);
                        xmlhttp.send();
                    }
                    function showLeader() {
                        if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                        }
                        else {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("table2").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET","getLeader.php",true);
                        xmlhttp.send();
                    }
                    function openTab(evt, tabname) {
			    // Declare all variables
			    var i, tabcontent, tablinks;

			    // Get all elements with class="tabcontent" and hide them
			    tabcontent = document.getElementsByClassName("super-admin-tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			    }

			    // Get all elements with class="tablinks" and remove the class "active"
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }

			    // Show the current tab, and add an "active" class to the link that opened the tab
			    document.getElementById(tabname).style.display = "block";
			    evt.currentTarget.className += " active";
		    }
                </script>
            </head>
 	        <body>
 	            
                <a href="../logout.php">Logout</a>
	            <div>
	               <p id="total" class="super-admin-count"></p>
	            </div>
	            <div class="super-admin-tabs">
		    	<button class="tablinks"  onclick="openTab(event, 'table2')">Leaderboard</button>
		  	<button class="tablinks"  onclick="openTab(event, 'table')">Event</button>
		    </div>
		    <div id="table2" class="super-admin-tabcontent">
		    </div> 
	            <div id="table" class="super-admin-tabcontent">
		    </div> 
		    
		   
		
		    
	        </body>
            </html>
        <?php
        }
        else
            echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
    }
    else
        echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';

        ?>
