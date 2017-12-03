/**
 * 判断当前是否为手机
 */
function ifMobile() {
    var system = {};
    var p = navigator.platform;
    system.win = p.indexOf("Win") == 0;
    system.mac = p.indexOf("Mac") == 0;
    system.x11 = (p == x11) || (p.indexOf("Linux") == 0);
    if (system.win || system.mac || system.x11) {
        alert("电脑端")
    } else {
        alert("手机端")
    }
}