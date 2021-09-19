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


function studentnoblur(){
    var studentnolabel = document.getElementById("studentnolabel");
    var studentno = document.getElementById("studentno");
    if(studentno.value == ""){
        studentnolabel.style.opacity = 0;
    }
}

function studentnofocus(){
    var studentnolabel = document.getElementById("studentnolabel");
    var studentno = document.getElementById("studentno");
    if(studentno.value == ""){
        // alert("May sueod");
        studentnolabel.style.opacity = 1;
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