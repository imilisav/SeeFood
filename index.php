<?php include("base.html") ?>
<div id="index-content">
    <h1>SeeFood</h1>
    <label class="mui-btn mui-btn--raised mui-btn--primary" for="menu-qr-code-button">
        Scan SeeFood-QR Code
    </label>
    <input id="menu-qr-code-button" type=file accept="image/*" capture=environment onchange="openQRCamera(this);">
    <a href="tutorial.php" class="mui-btn mui-btn--raised mui-btn--accent">Tutorial</a>
</div>
