<?php

    $data = [
      "squadName" => "Super hero squad",
      "homeTown" => "Metro City",
      "formed" => 2016,
      "secretBase" => "Super tower",
      "active" => true,
      "members" => [
        [
          "name" => "Molecule Man",
          "age" => 29,
          "secretIdentity" => "Dan Jukes",
          "powers" => [
            "Radiation resistance",
            "Turning tiny",
            "Radiation blast"
          ]
        ],
        [
          "name" => "Madame Uppercut",
          "age" => 39,
          "secretIdentity" => "Jane Wilson",
          "powers" => [
            "Million tonne punch",
            "Damage resistance",
            "Superhuman reflexes"
          ]
        ],
        [
          "name" => "Eternal Flame",
          "age" => 1000000,
          "secretIdentity"=> "Unknown",
          "powers"=> [
            "Immortality",
            "Heat Immunity",
            "Inferno",
            "Teleportation",
            "Interdimensional travel"
          ]
        ]
      ]
    ];

//print_r($_GET['option']);

if ($_GET['option']==1) {
      $data = [
        "data" => 1,
        "blogpost_title" => "Hello I am FIRST title!!",
        "blogpost_text" => "Hello I am FIRST text!"
      ];
    }
  else if ($_GET['option']==2) {
    $data = [
      "data" => 2,
      "blogpost_title" => "SECOND title!!",
      "blogpost_text" => "SECOND text!"
    ];
  }

header('Content-type: application/json');
echo json_encode( $data );
