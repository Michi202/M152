<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Webspace</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="/index.php" class="logo">
									<span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">michaelmarchesi</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Ipsum veroeros</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
                <div id="main">
                    <div class="inner">
                    <header>
                        <h1>Galerie</h1>
                    </header>
    <div class="row">
        <?php
        $dirname = "../images/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            echo '<div style="margin-bottom:42px;" class="col-3"><img width="100%" height="100%" src="'.$image.'" /></div>';
        }

        ?>
    </div>
</div>
</div>

<!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Get in touch</h2>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="field half">
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="field">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send" class="primary" /></li>
                    </ul>
                </form>
            </section>
            <section>
                <h2>Follow</h2>
                <ul class="icons">
                    <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
                    <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
                    <li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
                </ul>
            </section>
            <ul class="copyright">
                <div class="inner">
                    <div class="row">
                        <div class="col-4 footer-links"><a href="subpages/impressum.html"><h2>Impressum</h2></a></div>
                        <div class="col-4 footer-links"><a href="#"><h2>Urheberrecht</h2></a></div>
                        <div class="col-4 footer-links"><a href="subpages/agb.html"><h2>AGB</h2></a></div>
                    </div>
                </div>
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html>