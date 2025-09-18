<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CSS Slideshow</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #111;
    }

    .slideshow {
      width: 80%;
      max-width: 800px;
      height: 400px;
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
    }

    .slideshow img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      opacity: 0;
      animation: fade 16s infinite;
    }

    /* Show each image at different times */
    .slideshow img:nth-child(1) {
      animation-delay: 0s;
    }
    .slideshow img:nth-child(2) {
      animation-delay: 4s;
    }
    .slideshow img:nth-child(3) {
      animation-delay: 8s;
    }
    .slideshow img:nth-child(4) {
      animation-delay: 12s;
    }

    @keyframes fade {
      0%   { opacity: 0; }
      5%   { opacity: 1; }
      25%  { opacity: 1; }
      30%  { opacity: 0; }
      100% { opacity: 0; }
    }
  </style>
</head>
<body>
  <div class="slideshow">
    <img src="https://picsum.photos/id/1015/800/400" alt="">
    <img src="https://picsum.photos/id/1016/800/400" alt="">
    <img src="https://picsum.photos/id/1018/800/400" alt="">
    <img src="https://picsum.photos/id/1019/800/400" alt="">
  </div>
</body>
</html>