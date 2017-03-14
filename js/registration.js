var edit_profile;
var add_mambers;
function popupGeneratorForEditProfile()
{
    edit_profile=window.open('../registration/popups.php?id='+getId(),'EDIT_PROFILE','height=400 , width=300');
}

function getChangesFromPopupForEditProfile(name,email,phno,gender,college,acc)
{
    window.document.getElementById('name').innerHTML=name;
    window.document.getElementById('email').innerHTML=email;
    window.document.getElementById('phone').innerHTML=phno;
    window.document.getElementById('gender').innerHTML=gender;
    window.document.getElementById('college').innerHTML=college;
    window.document.getElementById('accomodation').innerHTML=acc;
    pageReload();
}

function deleteFromEvent(name,pid)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(name).value="Deleted";
                    document.getElementById(name).style="color:red";
                    document.getElementById(name).disabled=true;
                    pageReload();
            }
        };
    xmlhttp.open("GET", "../registration/deleteEvent.php?id=" + pid+"&eid="+name, true);
    xmlhttp.send();
}

function popupGeneratorForAddMembers(eid,id)
{
    add_mambers=window.open('../registration/addMember.php?id='+id+"&eid="+eid,'Add_Members','height=400 , width=300');
}

function popupGeneratorForAddEvents()
{
    add_mambers=window.open('event.php','Add_Members','height=400 , width=300');
}

function getId()
{
    return window.document.getElementById("id").innerHTML;
}

function pageReload()
{
    window.open("../registration/registration.php?input="+window.document.getElementById('email').innerHTML+"&option=1","_self")
}

function Submit()
{
    window.open("onlineToSpot.php?id="+getId(),"_self");
}