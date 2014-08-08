<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tic·Tac·Toe</title>
    <style>
      body {
        font-family: "Arial";
        text-align: center;
        color: #000;
      }

      .table {
        display: table;
        line-height: 50px;
      }

      .table_row {
        display: table-row;
        float: left;
        clear: left;
        border: solid #ededed;
        border-width: 1px 0;
      }

      .table_cell {
        display: table-cell;
        width: 50px;
        height: 50px;
        /*border: 1px solid black;*/
      }

      .table_cell:nth-child(2n) {
        background-color: #ccc;
      }

      a {
        border: none;
        width: 50px;
        height: 50px;
        font-size: 30px;
        background-color: #aac;
        color: #fff;
        display: inline-block;
        text-decoration: none;
      }

      a.active {
        border: 1px solid #a0f;
      }

      .tictac_picker {
        padding-bottom: 20px;
      }
    </style>
    <script type="text/javascript">

var i = 1;

var gridSize = 3;

var buildGrid = function(x, y, gridSize) {
  var output = new String();

  if (x === 0 && y === 0) {
    output += '<div class="table">';
  };

  if (x === 0) {
    output += '<div class="table_row">';
  };

  output += '<div class="table_cell">' + i + '</div>';

  if (x === gridSize-1) {
    output += '</div>';
  };

  if (x === gridSize && y === gridSize) {
    output += '</div>';
  };
  i++;
  return output;
};

var renderGrid = function() {
  for (y = 0; y < gridSize; y++) {
    for (x = 0; x < gridSize; x++) {
      document.write(buildGrid(x, y, gridSize));
    };
  };
}

function clickHandler(e) {
  var elem, evt = e ? e:event;

  if (evt.srcElement) {
    elem = evt.srcElement;
  }
  else if (evt.target) {
    elem = evt.target;
  }

  if (Number(elem.innerHTML).isInteger()) {
    console.log(elem.innerHTML);
    elem.innerHTML = activePlayer();
  }

  // alert (elem.innerHTML)
  changePlayer();
  return true;
}

document.onclick = clickHandler;

// window.onclick = markGrid();

function changePlayer() {
  var playerEx = document.getElementById("ex");
  var playerOh = document.getElementById("oh");

  if (playerEx.className === 'active') {
    playerEx.removeAttribute('class');
    playerOh.setAttribute('class', 'active');
  }
  else {
    playerOh.removeAttribute('class');
    playerEx.setAttribute('class', 'active');
  }
}

function activePlayer() {
  var playerEx = document.getElementById("ex");
  var playerOh = document.getElementById("oh");

  if (playerEx.className === 'active') {
    return 'X';
  }
  else {
    return 'O';
  }
}

    </script>
</head>
<body>
  <div class="tictac_picker">
    <a href="javascript:void(0);" id="ex" class="active" onClick="changePlayer();">X</a>
    <a href="javascript:void(0);" id="oh" onClick="changePlayer();" >O</a>
  </div>
  <div class="tictac_wrapper">
    <script type="text/javascript">
      renderGrid();
    </script>
  </div>
</body>
</html>
