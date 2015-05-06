<html>
<head>
  <title>Horse Race</title>
</head>
<body>
<?php

  class Horse {

    public $name = '';
    public $location;
    MAX_POSITION = 30;
    $location = new Location;
    function finished() {

      $location->$position >= MAX_POSITION;

    }
  }
  class Race {

    public $chosenHorse;
    public $horses = []
    MAX_MOVEMENT_FORWARD = 5;
    function makeHorses() {
  
      $horse1 = new Horse("horse1");
      $horse2 = new Horse("horse2");
      $horse3 = new Horse("horse3");
      $horse4 = new Horse("horse4");
      array_push($horses, $horse1, $horse2, $horse3, $horse4);
      echo $horses;
    }
    function horseChosen() {

      public $myHorse = [];
      echo "pick a horse (1-4)"

      if ($chosenHorse == 1) {

        $chosenHorse = $horses[0];
        array_push($myHorse, $chosenHorse);

      }
      if ($chosenHorse == 2) {

        $chosenHorse = $horses[1];
        array_push($myHorse, $chosenHorse);

      }
      if ($chosenHorse == 3) {

        $chosenHorse = $horses[2];
        array_push($myHorse, $chosenHorse);

      }
      if ($chosenHorse == 4) {

        $chosenHorse = $horses[3];
        array_push($myHorse, $chosenHorse);

      }
    }
    function setup() {

      makeHorses();
      horseChosen();

    }
    function saysWinner() {



    }
    function everything() {

      setup();
      while (findFinishedHorse()) {

        runRace();

      }
      saysWinner();
    }
    function runRace() {

      moveHorses();
      board();

    }
    function moveHorses() {

      foreach($horses as $horse) {

      $location = $horse->$location;
      public $distanceMoved = rand(1, 5);
      $location->$position += $distanceMoved;

      }

    }
    function findFinishedHorse() {

      foreach($horses as $horse) {

        if (finished()) {

          return true;

        }

      }

    }
    function board() {

      foreach($horses as $horse) {

        $name = $horse->$name;
        $position = $horse->$location->$position;
        $tilda = "~" * $position;
        echo "                              |"
        echo $tilda . $name;
        echo "                              |"
      }

    }
  }
  class Location {

    public $position = 0;

  }
  $className = 'Race';
  call_user_func(array($className, 'everything'));
?>
</body>
</html>
