var x = document.getElementById("dashboardbutton");
var y = document.getElementById("productoptions");
var a = document.getElementById("cakemenu")
var b = document.getElementById("pastrymenu")
var c = document.getElementById("eventsmenu")
var d = document.getElementById("customcakemenu")

x.style.display = "none"
y.style.display = "none"
a.style.display = "none"
b.style.display = "none"
c.style.display = "none"
d.style.display = "none"

function showdashboard(){
    var x = document.getElementById("dashboardbutton");
    if (x.style.display === "none"){
        x.style.display = "block"
    } else {
        x.style.display = "none"
    }
}

function showproducts(){
    var x = document.getElementById("productoptions");
    if (x.style.display === "none"){
        x.style.display = "block"
    } else {
        x.style.display = "none"
    }
}
function showcakes(){
    var a = document.getElementById("cakemenu")
    var x = document.getElementById("accountmenu")
    var b = document.getElementById("pastrymenu")
    if (a.style.display === "none"){
        a.style.display = "block";
        x.style.display = "none";
        b.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}
function showpastries(){
    var a = document.getElementById("cakemenu")
    var b = document.getElementById("pastrymenu")
    var x = document.getElementById("accountmenu")
    if (b.style.display === "none"){
        b.style.display = "block";
        x.style.display = "none";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}
function showaccount(){
    var a = document.getElementById("cakemenu")
    var b = document.getElementById("pastrymenu")
    var x = document.getElementById("accountmenu")
    if (x.style.display === "none"){
        x.style.display = "block";
        b.style.display = "none";
        a.style.display = "none";
        c.style.display = "none";
        d.style.display = "none";
    }
}
function showevents(){
    var a = document.getElementById("cakemenu")
    var b = document.getElementById("pastrymenu")
    var c = document.getElementById("eventsmenu")
    var x = document.getElementById("accountmenu")
    if (c.style.display === "none"){
        c.style.display = "block";
        b.style.display = "none";
        a.style.display = "none";
        x.style.display = "none";
        d.style.display = "none";
    }
}
function showcustomcakes(){
    var a = document.getElementById("cakemenu")
    var b = document.getElementById("pastrymenu")
    var c = document.getElementById("eventsmenu")
    var d = document.getElementById("customcakemenu")
    var x = document.getElementById("accountmenu")
    if (d.style.display === "none"){
        d.style.display = "block";
        b.style.display = "none";
        a.style.display = "none";
        x.style.display = "none";
        c.style.display = "none";
    }
}
