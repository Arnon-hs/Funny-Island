<?php
  $career_data = [
    [name => "Carpenter", image => "carpenter.jpg"],
    [name => "Park Helper", image => "park-helper.jpg"],
    [name => "Financial manager", image => "financial-manager.jpg"],
    [name => "Mobile app developer", image => "mobile-app-developer.jpg"],
    [name => "Copywriter", image => "copywriter.jpg"],
  ];
  header('Content-Type: application/json');
  echo json_encode($career_data);
