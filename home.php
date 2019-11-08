<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Webcam</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/webcam.css">
</head>
<body>
<div class="layout">
  <div id="newImages"></div>
  
  <div class="row">
    <div class="booth">
      <video id="player" autoplay></video>
    </div>
    <div class="booth"></div>
      <canvas id="canvas" width="320px" height="240px"></canvas>
    </div>
  </div>
  <div class="center">
    <button class="btn btn-primary" id="capture-btn">Capture</button>
    <button class="btn btn-primary" id="upload-btn">Upload</button>
  </div>
  <div id="pick-image">
    <label>Video is not supported. Pick an Image instead</label>
    <input type="file" accept="image/*" id="image-picker">
  </div>
</div>

<script src="js/webcam.js"></script>
</body>
</html>