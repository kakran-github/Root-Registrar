<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A* Implementation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  </head>
  <style>
    body {
    background-image: url(nightwalker.jpg);
    height: 100%;
    min-height: 700px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .grid {
    position: relative;
    margin: 0 auto;
    margin-top: 15vh;
    background: #ffffff80;
    border: 8px solid #000000;
  }

  .node {
    position: absolute;
    box-sizing: border-box;
    background: #e2e0e080;
    transition: all 0.2s ease-in-out;
    border-radius: 15%;
  }

  .node.obstacle {
    background: rgba(0, 124, 162, 0.501);
  }

  .node.path {
    height: 27px;
    width: 27px;
    margin: 0 auto;
    background-color: greenyellow;
    animation-name: stretch;
    animation-duration: 2s;
    animation-timing-function: ease-out;
    animation-delay: 0;
    animation-direction: alternate;
    animation-fill-mode: none;
    animation-play-state: running;
  }

  @keyframes stretch {
    0% {
      transform: scale(0.3);
      background-color: red;
      border-radius: 100%;
    }
    50% {
      background-color: orange;
    }
    100% {
      transform: scale(1);
      background-color: yellow;
    }
  }

  .node.start,
  .node.goal {
    cursor: pointer;
    color: white;
  }

  .node.start {
    background-color: red;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  .node.goal {
    background-color: #5edb04;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
  }

  .node.selected {
    opacity: 0.7;
  }

  .controls {
    margin-left: 15vw;
    margin-right: 15vw;
    margin-top: 20px;
    text-align: center;   
  }

  .btn {
    display: inline-block;
    font-weight: 400;
    color: #fdfdfd;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    font-family: 'Oswald', sans-serif;
    padding: 0.375rem 0.75rem;
    font-size: 1.5rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: all 0.15s ease-in-out, background-color 0.15s ease-in-out,
      border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }
  .btn:hover{
    color: white;
    background-color: rgb(5, 5, 69);
    box-shadow: 0 50px 50px rgb(65, 117, 181)
  }
  #text-1,
  #text-2,
  #text-3 {
    text-align: center;
    color: white;
    font-size: 80px;
    margin: 250px auto;
  }

  .typeWriter {
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 80px;
    margin: 250px auto;
    color: #3d84a8;
  }
  </style>
  <body onload="app.launch()">
  <?php include 'navbar.php';?>
    <div class="grid">
      
    </div>
    <div class="controls">
      <button class="btn btn-outline-primary" onclick="app.findPathWithCustomSpeed('Fast')">
        Find Route
      </button>
      <button class="btn btn-outline-primary" onclick="Grid.randomizeObstacles()">
        Randomize Blocks
      </button>
      <button class="btn btn-outline-primary" onclick="Grid.clearGridObstaclesAndPaths()">
        Clear Board
      </button>
    </div>
    <script src="jsastar/grid.js"></script>
    <script src="jsastar/ASTAR.js"></script>
    <script src="jsastar/app.js"></script>
  </body>
</html>
