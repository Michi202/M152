<?php include("../../header.php") ?>

<div id="main">
    <div class="inner">
        <header>
            <a href="/animationen.php">
                <h1>Animationen</h1>
            </a>
        </header>
        <div>
            <h2 style="text-align:center;text-shadow:1px black" class="element">Hover ME</h2>
        </div>
        <div>
            Diese Animation wiggelt den Text
        </div>
        <div>
            <h3 style="margin:0">Code</h3>
            <hr style="margin:10px">
            <div class="row" style="flex-wrap:inherit;">
                <div>
                    <span>Hover die, die Animation startet</span>
                    <div style="background: #919191;padding: 10px;border-radius: 11px;">
                        .element:hover{<br>
                            animation: wiggle 500ms forwards<br>
                        }<br>
                    </div>
                </div>
                <div>
                    <span>Die Animation die die box mittles transform nach links und rechts wiggelt</span>
                    <div style="background: #919191;padding: 10px;border-radius: 11px;">
                        @keyframes wiggle {<br>
                            0% {<br>
                                transform: translate(0, 0)<br>
                            }<br>
                            15% {<br>
                                transform: translate(1rem, 0)<br>
                            }<br>
                            35% {<br>
                                transform: translate(-1rem, 0)<br>
                            }<br>
                            55% {<br>
                                transform: translate(1rem, 0)<br>
                            }<br>
                            80% {<br>
                                transform: translate(-1rem, 0)<br>
                            }<br>
                            100% {<br>
                                transform: translate(0, 0)<br>
                            }<br>
                        }<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.element{
    padding: 20px;
}
.element:hover{
    animation: wiggle 500ms forwards
}
@keyframes wiggle {
    0% {
        transform: translate(0, 0)
    }
    15% {
        transform: translate(1rem, 0)
    }
    35% {
        transform: translate(-1rem, 0)
    }
    55% {
        transform: translate(1rem, 0)
    }
    80% {
        transform: translate(-1rem, 0)
    }
    100% {
        transform: translate(0, 0)
    }
}
		
</style>
<?php include("../../footer.php") ?>