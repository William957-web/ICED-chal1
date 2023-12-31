<html lang="en"><head>
<link rel="shortcut icon" href="https://whaleon120.github.io/blogs/image/albe8-uoedw-001.ico">
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>Challenge 1</title>
  
  
  
  
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background-color: #ecf0f1;
  font-family: helvetica, arial, sans-serif;
  font-size: 16px;
  padding-top: 330px;
  -moz-transition: padding-top 0.5s ease;
  -o-transition: padding-top 0.5s ease;
  -webkit-transition: padding-top 0.5s ease;
  transition: padding-top 0.5s ease;
}

header {
  width: 100%;
  height: 300px;
  background-color: #3498db;
  text-align: center;
  position: relative;
  position: fixed;
  top: 0;
  overflow: hidden;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
header h1 {
  font-size: 42px;
  color: #fff;
  line-height: 200px;
  text-transform: uppercase;
  font-weight: 100;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
header h3 {
  font-size: 22px;
  color: #fff;
  line-height: 0px;
  text-transform: uppercase;
  font-weight: 100;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
header nav {
  position: absolute;
  bottom: 0;
  height: 60px;
  line-height: 60px;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.1);
}
header nav a {
  color: #fff;
  display: inline-block;
  padding: 10px 15px;
  line-height: 1;
  text-decoration: none;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
header nav a:hover {
  -moz-box-shadow: 0 0 0 1px #fff;
  -webkit-box-shadow: 0 0 0 1px #fff;
  box-shadow: 0 0 0 1px #fff;
}

h2 {
  font-size: 34px;
  text-transform: uppercase;
  font-weight: 100;
  line-height: 2;
  color: #2c3e50;
}

p {
  margin-bottom: 2rem;
  line-height: 2;
  color: #7f8c8d;
}

.wrapper {
  width: 800px;
  margin: 0 auto;
}

section {
  padding: 20px;
  margin-bottom: 40px;
  background-color: #fff;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

/* Sticky Header Style */
/* ---------------------------------------- */
body.sticky-header {
  padding-top: 100px;
}
body.sticky-header header {
  height: 60px;
  background-color: rgba(52, 152, 219, 0.9);
}
body.sticky-header header h1 {
  -moz-transform: scale(0, 0);
  -ms-transform: scale(0, 0);
  -webkit-transform: scale(0, 0);
  transform: scale(0, 0);
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="canvas.js"></script>

</head>


<body translate="no" class="">
  <header>
    <h1>Math Lab</h1>
    <h3>更新中</h3>
    <nav>
      <a href="#">Home</a>
      <a href="#">Informations</a>
      <a href="#">About</a>
      <a href="javascript:alert('pizza first~')">Contact</a>
    </nav>
  </header>
  <div class="wrapper">
    <section id="steezy">
      <h2> 簡介</h2>
      <p>專門分享我的數學解題or研究，可能偶爾會放些其他的(?)</p>
      <p></p>
      </section>

    <section id="real1">
      <h2>數論</h2>
      <br>1.數論常用基本技巧<a href='https://whale-math.github.io/math/FirstToNumberTheory.pdf'>點此進入<a></br>

      </section>
      <section id="real1">
      <h2>幾何</h2>
        <br>1.九點圓深探<a href='https://whale-math.github.io/nine_points_circle.pdf'>點此進入<a></br>
      <br>2.反演變換<a href='math/Inversion.pdf'>點此進入<a></br>
      </section>
  </div>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script id="rendered-js">
$(function () {
  $(window).scroll(function () {
    var winTop = $(window).scrollTop();
    if (winTop >= 30) {
      $("body").addClass("sticky-header");
    } else {
      $("body").removeClass("sticky-header");
    } //if-else
  }); //win func.
}); //ready func.
//# sourceURL=pen.js
    </script>

<script>
  
                      ! function() {
    function get_attribute(node, attr, default_value) {
        return node.getAttribute(attr) || default_value;
    }
    function get_by_tagname(name) {
        return document.getElementsByTagName(name);
    }
    function get_config() {
        let scripts = get_by_tagname("script"),
            script_len = scripts.length,
            script = scripts[script_len - 1]; // current loading script
        // console.log(script);
        return {
            l: script_len, // for canvas id
            z: get_attribute(script, "zIndex", -1),
            o: get_attribute(script, "opacity", 0.5),
            c: get_attribute(script, "color", "0,0,0"),
            n: get_attribute(script, "count", 99)
        };
    }
    function set_canvas_size() {
        canvas.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth, 
        canvas.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    }

    let frame_func = func => window.setTimeout(func, 1000 / 30);
    // window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame
    //    || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(func) { window.setTimeout(func, 1000 / 45); };
    let random = Math.random;
    let mouse_position = {
        x: null,
        y: null
    };

    let config = get_config();
    // console.log(config);
    let canvas = document.createElement("canvas");
    let int = Math.floor;
    let abs = Math.abs;
    canvas.id = `canvas-nest-${config.l}`;
    canvas.style.cssText = `position:fixed;top:0;left:0;z-index:${config.z};opacity:${config.o}`
    get_by_tagname("body")[0].appendChild(canvas);

    set_canvas_size();

    let points = [];
    let lines = [];
    for (let i = 0; i < config.n; i++) {
        let x = random() * canvas.width,
            y = random() * canvas.height,
            theta = random() * Math.PI * 2,
            vx = 1.5 * Math.cos(theta),
            vy = 1.5 * Math.sin(theta);
        points.push({
            x: x,
            y: y,
            vx: vx,
            vy: vy,
        });
    }
    let context = canvas.getContext("2d");

    window.onresize = set_canvas_size;
    window.onmousemove = function(e) {
        e = e || window.event, mouse_position.x = e.clientX, mouse_position.y = e.clientY;
    };
    window.onmouseout = function() {
        mouse_position.x = null, mouse_position.y = null;
    };
    function get_dist(A, B) { return (A.x-B.x) * (A.x-B.x) + (A.y-B.y) * (A.y-B.y); }
    function draw_lines() {
        points.sort(function(A, B) {
            return A.x != B.x ? A.x - B.x : A.y - B.y;
        });
        let res = Array(32);
        for(let w = 0; w < 32; w++) res[w] = [];
        for(let i = 0; i < config.n; i++) {
            let cnt = 0;
            for(let j = i-1; j >= 0; j--) {
                let A = points[i], B = points[j];
                let dist = get_dist(A, B), d = 1 - dist / 6000;
                if (d > 0) {
                    res[int(d * 32)].push({
                        u: A,
                        v: B
                    });
                    cnt += 1;
                }
                if(A.x - B.x > 80 || cnt > 5) break;
            }
        }
        points.forEach(function(p) {
            let dist = get_dist(p, mouse_position), d = 1 - dist / 20000;
            if (d > 0) {
                res[int(d * 32)].push({
                    u: p,
                    v: mouse_position
                });
            }
        });
        for(let w = 0; w < 32; w++) {
            context.lineWidth = w / 32 * 2;
            context.strokeStyle = "rgba(" + config.c + "," + (w / 32 + 0.2) + ")";
            context.beginPath();
            res[w].forEach(draw_line);
            context.stroke();
        }
        return res;
    }
    function draw_line(line) {
        context.moveTo(int(line.u.x), int(line.u.y));
        context.lineTo(int(line.v.x), int(line.v.y));
    }

    function redraw() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        if (canvas.width < 480) {
            return frame_func(redraw);
        }
        points.forEach(function(p) {
            if (mouse_position.x != null && mouse_position.y != null) {
                let dist = get_dist(p, mouse_position);
                if(10500 <= dist && dist < 20000) {
                    p.x += p.vx; 
                    p.y += p.vy;
                    p.x -= 0.03 * (p.x - mouse_position.x);
                    p.y -= 0.03 * (p.y - mouse_position.y);
                } else if(10000 <= dist && dist < 10500) {
                    // captured
                    let now = Math.atan2(p.y - mouse_position.y, p.x - mouse_position.x);
                    now = now + 0.01;
                    p.x = mouse_position.x + Math.sqrt(dist) * Math.cos(now);
                    p.y = mouse_position.y + Math.sqrt(dist) * Math.sin(now);
                    let t = random() * Math.PI * 2;
                    p.vx = Math.cos(t);
                    p.vy = Math.sin(t);
                } else {
                    p.x += p.vx;
                    p.y += p.vy;
                }
            } else {
                p.x += p.vx; 
                p.y += p.vy;
            }
            // const eps = 0.03;
            // if (abs(p.x - x) > eps || abs(p.y - y) > eps) {
            //     p.x = x;
            //     p.y = y;
            // }
            p.vx *= p.x > canvas.width || p.x < 0 ? -1 : 1;
            p.vy *= p.y > canvas.height || p.y < 0 ? -1 : 1;
        });
        draw_lines();
        frame_func(redraw);
    }

    frame_func(redraw);
    // setTimeout(function() {
    //     redraw();
    // }, 100);
}();
                  
  </script>



 
</body></html>