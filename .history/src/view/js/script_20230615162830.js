e = true;

function changer() {
    if (e) {
        document.getElementById("pass").setAttribute("type", "text");
        document.getElementById("eye").src = "./../src/View/image/gren.png";
        e = false;
    } else {
        document.getElementById("pass").setAttribute("type", "password");
        document.getElementById("eye").src = "./../View/image/red.png";
        e = true;
         

    }

}