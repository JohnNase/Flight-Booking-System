<?php
$randomNumber = rand(1, 79);
 
?>
<style> 
    .button {
      display: inline-block;
      padding: 10px 20px; 
      color: #8002f5;
      font-weight: bolder;
      text-decoration: none;
      border-radius: 4px;
      font-size: 30px;
      cursor: pointer;
    } 
</style>
<html>


<head>
  <meta charset="utf-8"> 
</head>

<body>
<a href="..\HTML\packages.php" class="button" style="text-decoration: none;">← Go Back </a>
  <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div id="squares">█ █ █ <span style="color:black">█ █ █ █ █ █ █ █ █ █ </span><?php echo $randomNumber; ?>% 
      <br>&gt; Coming Soon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br>&gt; Fly Easy <span id="comp">█</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </body>

  <style>
    body {
      background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      }
      
      div {
        color: #8002f5;
        font-family: Monaco, monospace;
        font-size: 24px;
        width: 100%;
        text-align: center;
        position: absolute;
        top: 45%;
        left: 0;
        animation: 120ms infinite normal glitch;
      }
      
      span {
        animation: 1.5s infinite normal comp;
      }
      
      ::-moz-selection {
        background: #7021d2;
        color: #fff;
      }
      
      ::selection {
        background: #7021d2;
        color: #fff;
      }
      
      @keyframes glitch {
        0% {
          opacity: 0;
          left: 0;
        }
        40%,
        80% {
          opacity: 1;
          left: -2px;
        }
      }
      
      @keyframes comp {
        0% {
          opacity: 0;
          left: 0;
        }
        40% {
          opacity: 0;
          left: -2px;
        }
        80% {
          opacity: 1;
          left: -2px;
        }
      }
      
  </style>

</html>