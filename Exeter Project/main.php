<?php
include "db.php";
if (isset($_POST['Createmeeting'])) {
    $code = mysqli_real_escape_string($conn, $_POST['code']);
    $sql = "INSERT INTO codetable (meetingcode) VALUES ('$code')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
</head>

<body class="bg-color">
    <div id="container">
        <!-- <script src="./scripts/main.js" /> -->
        <video id="videoElement" autoplay playsinline>
            <video id="selfVideo" autoplay playinl ine></video> <!-- to see ones own camera-->
        </video>
    </div>
    <br>
    <div id="container">
        <video id="videoElement" autoplay playsinline>
            <iframe src="https://play.streamingvideoprovider.com/popplayer.php?it=87ni5fchki88&is_link=1&w=720&h=405&pause=1&title=h&skin=3&repeat=&brandNW=1&start_volume=34&bg_gradient1=%23ffffff&bg_gradient2=%23e9e9e9&fullscreen=1&fs_mode=2&skinAlpha=50&colorBase=%23250864&colorIcon=%23ffffff&colorHighlight=%237f54f8&direct=false&no_ctrl=&auto_hide=1&viewers_limit=0&cc_position=bottom&cc_positionOffset=70&cc_multiplier=0.03&cc_textColor=%23ffffff&cc_textOutlineColor=%23ffffff&cc_bkgColor=%23000000&cc_bkgAlpha=0.1&image=https%3A%2F%2Fmember.streamingvideoprovider.com%2Fpanel%2Fserver%2Fclip%3Fa%3DGenerateThumbnail%26clip_id%3D3917105%26size%3Dlarge&mainBg_Color=%23ffffff&aspect_ratio=16%3A9&play_button=1&play_button_style=pulsing&sleek_player=1&stretch=&auto_play=&auto_play_type=unMute&floating_player=none" width="100px" height="100px"></iframe>
        </video>
    </div>
    <script src="video.js"></script>
    <script src="test.js"></script>
    <!--<button id="showVideo">Open camera</button> -->
    <!--www.kirupa.com/html5/accessing_your_webcam_in_html5.htm-->

    <!--<audio id="player" controls></audio>-->
    <footer class="footer">
        <button class="camer-audio" id="vOn" onclick="switchVideo()">Camera</button>
        <button class="camer-audio" id="aOn" onclick="switchAudio()">Audio</button>
        <a href="index.html" class="start">Leave meeting</a>
        <br>
        <br>
        <h1 class="start">Meeting code  = <?php print($code)?></h1>
    </footer>
</body>

</html>