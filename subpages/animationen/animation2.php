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
            Diese Animation verscheibt den Text von der Mitte nach links. Mit einer kleinen Verzögrung
        </div>
        <div>
            <h3 style="margin:0">Code</h3>
            <hr style="margin:10px">
            <div class="row" style="flex-wrap:inherit;">
                <div>
                    <span>Hover die, die Animation startet</span>
                    <div style="background: #919191;padding: 10px;border-radius: 11px;">
                        .element:hover{<br>
                            animation: animation-toLeft 500ms forwards<br>
                        }<br>
                    </div>
                </div>
                <div>
                    <span>Die Animation die die box mittles transform nach links verschiebt</span>
                    <div style="background: #919191;padding: 10px;border-radius: 11px;">
                        @keyframes animation-toLeft {<br>
                            0% {<br>
                                transform: translate(0rem, 0rem);<br>
                            }<br>
                            25% {<br>
                                transform: translate(-5em, 0rem);<br>
                            }<br>
                            50% {<br>
                                transform: translate(-10em, 0rem);<br>
                            }<br>
                            100% {<br>
                                transform: translate(-17em, 0rem);<br>
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
    animation: animation-toLeft 500ms forwards
}
@keyframes animation-toLeft {
    0% {
        transform: translate(0rem, 0rem);
    }
    25% {
        transform: translate(-5em, 0rem);
    }
    50% {
        transform: translate(-10em, 0rem);
    }
    100% {
        transform: translate(-17em, 0rem);
    }
}
		
</style>
<?php include("../../footer.php") ?>