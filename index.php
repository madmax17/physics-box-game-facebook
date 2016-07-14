<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Don't let the triangle fall</title>
    <style>
    /* a style sheet needs to be present for cursor hiding and custom cursors to work. */
    </style>
  </head>
  <body>
    <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="400px" width="720px"></canvas>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    dataUrl: "Release/New folder.data",
    codeUrl: "Release/New folder.js",
    memUrl: "Release/New folder.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>

  </body>
</html>
