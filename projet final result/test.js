


 
 function verif1() {
    email=document.getElementById("email").value;
    numvi=document.getElementById("numvi").value;

    t="ABCDEFJHIGKLMNOPQRSTUVWXYZ";
    if (email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1) {
        alert ("Please enter a valid e-mail address");
        return false;
    }


    if (  t.indexOf(numvi.value.charAt(0))==-1 ||  isNaN(numvi.value.substr(1,3) ) || numvi.value.length != 4) {
        alert ("Please enter a valid code visa number");
        return false;
    }
 }
 function verif2() {
    mail=document.getElementById("mail").value;
    npre=document.getElementById("npre").value;
    pays=document.getElementById("pays").selectedIndex;
    numv=document.getElementById("numv").value;



if (mail.indexOf("@")==-1 || mail.indexOf(".")==-1) {
    alert ("Please enter a valid e-mail address");
    return false;
}
if (npre == "") {
    alert ("Please indicate your name and you premame");
    return false;
}
if (pays.selectedIndex == "0") {
    alert ("Please indicate your countrie");
    return false;
}
t="ABCDEFJHIGKLMNOPQRSTUVWXYZ";
if (  t.indexOf(numv.value.charAt(0))==-1 ||  isNaN(numv.value.substr(1,3) ) || numv.value.length != 4) {
    alert ("Please enter a valid code visa number");
    return false;
}
}

 function ver () {
      heed = document.querySelector( ".heed" );
      x1 = document.querySelector(".profile");
      off= document.querySelector(".off");
      bo=document.querySelector(".bo");
      ever=document.querySelector(".ever");
     if (x1.style.display == "none") {
        heed.style.display = "block";
        heed.style.backgroundImage="url(baa.jpg)";
        heed.style.backgroundPosition="right";
        heed.style.backgroundSize="cover";
        heed.style.backgroundRepeat="no-repeat";
        x1.style.display = "block"
        off.style.display="none"
        bo.style.background = "rgb(255, 123, 0)";
        ever.style.display="none"
  
     } else {
        heed.style.backgroundImage="none";
        heed.style.display = "flex";
        x1.style.display = "none";
        off.style.display="block"
        bo.style.background = "none";
        ever.style.display="block";
        bo.style.backgroundImage = "url(back.jpg)";
        bo.style.backgroundSize = "cover";

  
     }
  }
