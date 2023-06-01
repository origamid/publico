<?php

function api_usuario_post($request) {

  $response = array(
    'nome' => 'Andre',
    'email' => 'andre@origamid.com'
  );
  return rest_ensure_response($response);
}

function registrar_api_usuario_post() {
  register_rest_route('api', '/usuario', array(
    array(
      'methods' => WP_REST_Server::CREATABLE,
      'callback' => 'api_usuario_post',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_usuario_post');


?>