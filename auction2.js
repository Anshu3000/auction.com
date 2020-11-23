
function ge1id(eml) {
    return document.getElementById(eml);
}
 
function ge1class(eml) {
    return document.getElementsByClassName(eml);
}

var ba1 = ge1class("bar1");
var cro = ge1class("cross1");

console.log(ba1);
if (ba1 != null) {
   
    ba1[0].addEventListener('click', function () {
        var link1b = ge1class("link-box");
        console.log(link1b);
        console.log(link1b[0].classList);
        link1b[0].classList.toggle("bloc"); 
        ba1[0].classList.toggle("non1");
        cro[0].classList.toggle("bloc");   
     });

}

if (cro != null) {
    cro[0].addEventListener('click', function () {
        var link1b = ge1class("link-box");
        console.log(link1b);
        console.log(link1b[0].classList);
        link1b[0].classList.toggle("bloc");
        ba1[0].classList.toggle("non1");
        cro[0].classList.toggle("bloc"); 
        
    }); 

}

//ending of dynamic navbar;


function onval() {
    var x = document.forms["signup12"]["pass12"].value;
    var x2 = document.forms["signup12"]["reypass"].value;

   // alert(x.length);

    if (x.length==0) {
        alert("please enter your password");
        return false;
    }

    if (x != x2) {
        alert("password and retype password shoule be same");
        return false;
    }

    return true;
}




function scrollexplore1() {
    // console.log("hello");
   // alert("hello");
 //console.log(document.body.scrollHeight)
    var i = 10;
    var int = setInterval(function () {
        window.scrollTo(0, i);
        i += 10;
        if (i >=document.body.scrollHeight) clearInterval(int);
    }, 20);
}



function loginscroll1() {
    var i = 10;
    // alert("hello2");
    console.log(document.body.scrollHeight);
    var int = setInterval(function () {
        window.scrollTo(0, i);
        i += 10;
        if (i >= document.body.scrollHeight) clearInterval(int);
    }, 20);
}


function onval23() {
  
    var x34sell = document.getElementById("email2456");

    x = localStorage.getItem("useremail");
    // alert(x);
    // alert("hello");
    if (x!=null) {
        x34sell.value = x;
        return true;
    } else {
        alert("Please login oval 234 first");
        window.location.assign("http://localhost/collegetoc/login1toc.php");
        return false;
    }

    return true;
}



