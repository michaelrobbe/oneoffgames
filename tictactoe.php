<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tic·Tac·Toe</title>
    <script src="js/vendor/jquery.js"></script>
    <script type="text/javascript">

var buildGrid = function(x, y, gridSize) {
  var output = new String();
  var count = (x+1) + (y * x);

  if (x === 0 && y === 0) {
    output += '<table>';
  };

  if (x === 0) {
    output += '<tr>';
  };

  output += '<td>' + count + '</td>';

  if (x === gridSize) {
    output += '</tr>';
  };

  if (x === gridSize && y === gridSize) {
    output += '</table>';
  };

  return output;
};

var gridSize = 3;

var renderGrid = function() {
  for (y = 0; y < gridSize; y++) {
    for (x = 0; x < gridSize; x++) {
      document.write(buildGrid(x, y, gridSize));
    };
  };
}

    </script>
</head>
<body>
  <div class="tictac_wrapper">
    <script type="text/javascript">renderGrid()</script>
  </div>
</body>
</html>
