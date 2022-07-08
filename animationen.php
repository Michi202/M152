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
<?php include("footer.php") ?>