function verif() {
     num = document.getElementById("nump").value;
     pos = document.getElementById("pos").selectedIndex;
    if (num != '') {
         var i=0;
         var ok=true;
        while (ok) {
            if ("0"<=num.charAt(i)<="9" && i<num.length) {
                i++;
            }else var ok=false;
            }   
    }else {
        alert("numero profile abligatoire");
        return false;
    }

    if (pos == 0) {
        alert("post obligatoire");
        return false;
    }
}