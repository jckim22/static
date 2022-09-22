

function setColor(color) {
    target = document.querySelector('body');
    All = document.querySelectorAll('.saw');
    target.style.color = color;
    document.querySelector('a').style.color = color;
    for (var i = 0; i < All.length; i++) {
        All[i].style.color = color;
    }
}
function bodySet(color,time) {
    target.style.backgroundColor = color;
    document.querySelector('#night-day').value = time;
}
function nightHandle() {

    // saw라는 클래스가 있는 태그들의 배열을 All변수에 담아줌

    if (document.querySelector('#night-day').value == 'night') {
        setColor('white');
        bodySet('black','day');

    }
    else {
        setColor('black');
        bodySet('white','night');

    }

}
function List() {
    var lan = ['HTML', 'CSS', 'JavaScript'];
    var cntArr = ["5-1.html", "5-2.html", "5-3.html"];
    var cnt = 0;
    for (var i = 0; i < lan.length; i++) {
        document.write('<li"><a href=' + cntArr[cnt] + '><div class="saw active">' + lan[i] + '</div></a></li>');
        cnt++;
    }
}
function twak() {
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/632a84e054f06e12d895ebdf/1gdf1e3nc';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
}
function discuss() {
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://web-1-bvwnyrvwuv.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
}