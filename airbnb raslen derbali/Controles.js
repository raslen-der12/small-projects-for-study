

function verif() {
    datcheck= document.getElementById("datcheck").value;
    duree= document.getElementById("duree").value;
    chbox= document.getElementById("chbox").checked;
    j= new Date()
    if (datcheck < j ) {
        alert("false date check in");
    return false;}
    if (duree<1) {
        alert("false duree");
    return false;}
    if (chbox== false) {
        alert("check box obligatoire");
    return false;}
}