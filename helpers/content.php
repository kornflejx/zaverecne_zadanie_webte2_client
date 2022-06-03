<?php 

  function get_all_experiments() {

    $carShockAbsorber = new stdClass();
    $carShockAbsorber->name = 'carShockAbsorber';
    $carShockAbsorber->min = -10;
    $carShockAbsorber->max = 10;
    $carShockAbsorber->step = 0.5;

    return array($carShockAbsorber);
  }

  function get_experiments_names() {
    $experiments = array();

    foreach (get_all_experiments() as $key => $value) {
      array_push($experiments, $value->name);
    }

    return $experiments;
  }

  function get_octave_api_endpoints() {


    $car_suspension = new stdClass();
    $car_suspension->title = array(
      'sk' => 'Získaj dáta tlmiča kolesa',
      'en' => 'Get car suspension data'
    );
    $car_suspension->url = 'http://site87.webte.fei.stuba.sk/server/api/experiments/suspension?session=<span class="primary">{sessionID}</span>&r=<span class="primary">{r}</span>&api-key=<span class="primary">{apiKey}</span>';
    $car_suspension->method = 'GET';
    $car_suspension->uri_params = array(
      'sessionID' => array(
        'sk' => 'Session ID používateľa',
        'en' => 'User\'s session ID'
      ),
      'r' => array(
        'sk' => 'Číselná hodnota vstupu používateľa',
        'en' => 'Numeric value of user\'s input'
      ),
      'apiKey' => array(
        'sk' => 'Tajný autentifikačný token používateľa',
        'en' => 'User\'s secret authentication token'
      ),
    );
    $car_suspension->body_params = array();
    $car_suspension->response = array(
      'content' => array(
        array(
          'x' => 5,
          'y' => 6.00041,
          'bodyworkHeight' => 0.00041
        )
      ),
      "returnCode" => 0,
      "rangeFrom" => 0,
      "rangeTo" => 6
    );

    $all_logs = new stdClass();
    $all_logs->title = array(
      'sk' => 'Získaj všetky zalogované súbory',
      'en' => 'List all log files'
    );
    $all_logs->url = 'http://site87.webte.fei.stuba.sk/server/api/logs?api-key=<span class="primary">{apiKey}</span>';
    $all_logs->method = 'GET';
    $all_logs->uri_params = array(
      'apiKey' => array(
        'sk' => 'Tajný autentifikačný token používateľa',
        'en' => 'User\'s secret authentication token'
      ),
    );
    $all_logs->body_params = array();
    $all_logs->response = array(
      array(
        'timestamp' => '2022-01-01 10:10:10',
        'command' => 'console',
        'session' => 'j057t7hrv9d71p1vt1b010e080',
        'status' => 'success',
        'info' => 'Operation was successfull',
      )
    );

    $last_input = new stdClass();
    $last_input->title = array(
      'sk' => 'Získaj posledný vstup a hodnoty experimentu',
      'en' => 'Get last input and values of experiment'
    );
    $last_input->url = 'http://site87.webte.fei.stuba.sk/server/api/logs?experiment=<span class="primary">suspension</span>&session=<span class="primary">{sessionID}</span>&api-key=<span class="primary">{apiKey}</span>';
    $last_input->method = 'GET';
    $last_input->uri_params = array(
      'sessionID' => array(
        'sk' => 'Session ID používateľa',
        'en' => 'User\'s session ID'
      ),
      'apiKey' => array(
        'sk' => 'Tajný autentifikačný token používateľa',
        'en' => 'User\'s secret authentication token'
      ),
    );
    $last_position = new stdClass();
    $last_position->x = 5;
    $last_position->y = 4.90037;
    $last_position->bodyworkHeight = 0.00037;
    $last_input->body_params = array();
    $last_input->response = array(
      'r' => 0,
      'lastPosition' => $last_position
    );

    return array($car_suspension, $all_logs, $last_input);
  }