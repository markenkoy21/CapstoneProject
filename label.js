function nameblur(){
    var namelabel = document.getElementById("namelabel");
    var name = document.getElementById("name");
    if(name.value == ""){
        namelabel.style.opacity = 0;
    }
}

function namefocus(){
    var namelabel = document.getElementById("namelabel");
    var name = document.getElementById("name");
    if(name.value == ""){
        // alert("May sueod");
        namelabel.style.opacity = 1;
    }
}


function rolenoblur(){
    var rolenolabel = document.getElementById("rolenolabel");
    var roleno = document.getElementById("roleno");
    if(roleno.value == ""){
        rolenolabel.style.opacity = 0;
    }
}

function rolenofocus(){
    var rolenolabel = document.getElementById("rolenolabel");
    var roleno = document.getElementById("roleno");
    if(roleno.value == ""){
        // alert("May sueod");
        rolenolabel.style.opacity = 1;
    }
}


function passwordblur(){
    var passwordlabel = document.getElementById("passwordlabel");
    var password = document.getElementById("password");
    if(password.value == ""){
        passwordlabel.style.opacity = 0;
    }
}

function passwordfocus(){
    var passwordlabel = document.getElementById("passwordlabel");
    var password = document.getElementById("password");
    if(password.value == ""){
        // alert("May sueod");
        passwordlabel.style.opacity = 1;
    }
}