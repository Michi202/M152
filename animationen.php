<?php include("header.php") ?>

<div id="main">
    <div class="inner">
        <header>
            <h1>Animationen</h1>
        </header>
        <div>
            <h2>Animationen mit CSS</h2>
            <section class="tiles">
				<article class="style3">
					<span class="image">
						<img src="images/pic01.jpg" alt="" />
					</span>
					<a href="subpages/animationen/animation1.php">
						<h2>Animation 1</h2>
					</a>
				</article>
                <article class="style2">
					<span class="image">
						<img src="images/pic01.jpg" alt="" />
					</span>
					<a href="subpages/animationen/animation2.php">
						<h2>Animation 2</h2>
					</a>
				</article>
                <article class="style3">
					<span class="image">
						<img src="images/pic01.jpg" alt="" />
					</span>
					<a href="subpages/animationen/animation3.php">
						<h2>Animation 3</h2>
					</a>
				</article>
            </section>
        </div>
        <div style="margin: 1em 0 0 0">
            <h2>Animietes GIF</h2>
            Um das GIF zu erstellen welches Sie unten sehen habe ich zurst 10 Bilder gemacht wie ich in unserer Webseite auf eine Page wechsle und wieder zurück. Danach habe ich diese Bilder in die Webseite <a href="https://gif-erstellen.com/">https://gif-erstellen.com/</a> geladen die mir dann mein GIF erstellt hat. Der letze Schritt war nur noch das GIF in die webseite einzubinden mittels img Tag. Das Endergebniss sehen sie dann unten.<br> 
            <img src="/images/GIF/AnimationGIF.gif" >
        </div>
        <div style="margin: 1em 0 0 0">
            <h2>SVG</h2>
            <span style="margin:5px 0">SVG ein sehr starkes Tool, wenn es darum geht Responsiv mässige Icons oder Bilder zu liefern. SVG können in alle Grössen skaliert werden und keinen Qualität Verlust erleiden. Das light daran das sie nicht aus Pixel bestehen sondern aus Geometrischen Formen. SVG sind genau darum sehr beliebt für Icons. Frameworks wie Font-Awasome, Google Icons usw.. benutzen alle svg.</span>
            <img src="/images/code-solid.svg" class="center" height="50rem" >
        </div>
        <div style="margin: 1em 0 0 0">
            <h2>Canvas Animation</h2>
            <span style="margin:5px 0">
                Canvas sind gut um Animationen dirket mittels Javascript zu erstellen ohne aufwändige Software einfach animationen zu erstellen.
            </span>
            <canvas id="canvas" width="300" height="300"></canvas>
        </div>
        <div style="margin: 1em 0 0 0">
            <h2>Scroll-Animations</h2>
            <span style="margin:5px 0">
                Unsere Scroll Animation wurde auf der Home Page integriert.
            </span>
        </div>
    </div>
</div>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<script>
var sun = new Image();
var moon = new Image();
var earth = new Image();
function init() {
  sun.src = 'https://mdn.mozillademos.org/files/1456/Canvas_sun.png';
  moon.src = 'https://mdn.mozillademos.org/files/1443/Canvas_moon.png';
  earth.src = 'https://mdn.mozillademos.org/files/1429/Canvas_earth.png';
  window.requestAnimationFrame(draw);
}

function draw() {
  var ctx = document.getElementById('canvas').getContext('2d');

  ctx.globalCompositeOperation = 'destination-over';
  ctx.clearRect(0, 0, 300, 300); // clear canvas

  ctx.fillStyle = 'rgba(0, 0, 0, 0.4)';
  ctx.strokeStyle = 'rgba(0, 153, 255, 0.4)';
  ctx.save();
  ctx.translate(150, 150);

  // Earth
  var time = new Date();
  ctx.rotate(((2 * Math.PI) / 60) * time.getSeconds() + ((2 * Math.PI) / 60000) * time.getMilliseconds());
  ctx.translate(105, 0);
  ctx.fillRect(0, -12, 50, 24); // Shadow
  ctx.drawImage(earth, -12, -12);

  // Moon
  ctx.save();
  ctx.rotate(((2 * Math.PI) / 6) * time.getSeconds() + ((2 * Math.PI) / 6000) * time.getMilliseconds());
  ctx.translate(0, 28.5);
  ctx.drawImage(moon, -3.5, -3.5);
  ctx.restore();

  ctx.restore();

  ctx.beginPath();
  ctx.arc(150, 150, 105, 0, Math.PI * 2, false); // Earth orbit
  ctx.stroke();

  ctx.drawImage(sun, 0, 0, 300, 300);

  window.requestAnimationFrame(draw);
}

init();

</script>
<?php include("footer.php") ?>