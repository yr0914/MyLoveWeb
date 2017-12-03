// JavaScript Document
//闪动字体
function changeColor() {
    var color = "#f00|#0f0|#00f|#880|#808|#088|yellow|green|blue|gray";
    color = color.split("|");
    document.getElementById("cat_01").style.color = color[parseInt(Math.random() * color.length)];
}

function to() {
    var getval = document.getElementById("cat_01").value;
    document.location.href("/html/cat_01.html?cat_01=" + getval);
}

setInterval("changeColor()", 200);