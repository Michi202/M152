<?php include("../../header.php") ?>

<div id="main">
    <div class="inner">
        <header>
            <a href="/animationen.php">
                <h1>Animationen</h1>
            </a>
        </header>
        <div>
            <h2 style="text-align:center" class="element">Hover ME</h2>
        </div>
        <div>
            Diese Animation kreiert eine Box um das Element, sobald der Mauszeiger darüber ist.
        </div>
        <div>
            <h3 style="margin:0">Code</h3>
            <hr style="margin:10px">
            <div style="background: #919191;padding: 10px;border-radius: 11px;">
                .element:hover{<br>
                    box-shadow: inset 0 0 0 0.<br>
                }<br>
            </div>
        </div>
    </div>
</div>
<style>
.element{
    padding: 20px;
}
.element:hover{
    box-shadow: inset 0 0 0 0.5rem
}
</style>
<?php include("../../footer.php") ?>