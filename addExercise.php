<!--Jin Qikai 19034275-->
<!DOCTYPE html>
<?php
session_start();
include("dbFunctions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php include './extension.html'?>
        <title></title>
        <style>
            .slider {
                -webkit-appearance: none;
                border-radius: 10px;
                width: 100%;
                height: 25px;
                background: grey;

            }

            .slider::-webkit-slider-thumb {
                appearance: none;
                border-radius: 10px;
                width: 25px;
                height: 25px;
                background: yellow;
                cursor: pointer;
            }

            #border {
                margin: 0 auto;
                width:500px;
                padding: 30px;
                text-align: center;
                margin-top: 10%;
                border: 5px solid green;
                margin-bottom: 10%;
            }
        </style>

        <script type="text/javascript">
          $(document).ready(function() {
            retrieve();

            $("form").submit(function() {
              $.get("./doAddExercise.php", {
                exercisetype: $("#eType").val(),
                durationSlideValue: $("#duration").val()
              }, function(data) {
                data.trim();
                if (data == "TRUE" ){
                  retrieve();
                } else if (data == "FALSE") {
                  console.log("an error has occured");
                } else {
                  console.log(data);
                }
              }, "text");
              return false;
            });

            function retrieve() {
              $("#eType").val("Walk");
              $("duration").val(5);
              update(5);
              console.log("retrieving");
              $.get("./exerciseSummary.php", {}, function(data) {
                console.log(data);
                var output = "";
                var count = 1;
                data.forEach(i => {
                  if ((i.exercise == "Walk" && i.duration > 30) || (i.exercise == "Run" && i.duration > 10) || (i.exercise == "Cycle" && i.duration > 20)) {
                    output += "<tr class='table-warning'>";
                  } else {
                    output += "<tr>";
                  }
                  output += "<th scope='row'>" + count + "</th>";
                  output += "<td>" + i.exercise + "</td>";
                  output += "<td>" + i.duration + "</td>";
                  output += "</tr>";
                  count++;
                });
                $("tbody").html(output);
              }, "json");
            }
          });

        </script>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <div class="container">
            <form action="doAddExercise.php" method="POST">
                <div id="border">
                <label>Enter your exercise and duration</label><br>
                <label for="eType">Exercise Type:</label>
                <select class="btn btn-secondary dropdown-toggle" id="eType" name="exercisetype">
                    <option value="Walk">Walk</option>
                    <option value="Run">Run</option>
                    <option value="Cycle">Cycle</option>
                </select>
                <br/><br/>
                <input type="range" min="5" max="120" value="5" class="slider" id="duration" name="durationSlideValue" oninput=update(this.value)>
                <p>Duration: <span id="durationValue" name="dValue"></span> minutes</p>
                <script type="text/javascript">
                function update(event) {
                  $("#durationValue").html(event);
                }
                </script>
                <input class="btn btn-info" type="submit" name="Submit">
                </div>
            </form>

            <table class="table table-hover">
              <thead class="thead-dark">
                <tr id="table-header">
                  <th scope="col">#</th>
                  <th scope="col">Exercise</th>
                  <th scope="col">Duration</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
    </body>
</html>
<!--Jin Qikai 19034275-->