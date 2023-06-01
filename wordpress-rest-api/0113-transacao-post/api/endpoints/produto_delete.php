<?php

function api_produto_delete($request) {
  $slug = $request['slug'];

  $produto_id = get_produto_id_by_slug($slug);
  $user = wp_get_current_user();

  $author_id = (int) get_post_field('post_author', $produto_id);
  $user_id = (int) $user->ID;

  if($user_id === $author_id) {

    $images = get_attached_media('image', $produto_id);
    if($images) {
      foreach($images as $key => $value) {
        wp_delete_attachment($value->ID, true);
      }
    }

    $response = wp_delete_post($produto_id, true);

  } else {
    $response = new WP_Error('permissao', 'Usuário não possui permissão.', array('status' => 401));
  }
  return rest_ensure_response($response);
}

function registrar_api_produto_delete() {
  register_rest_route('api', '/produto/(?P<slug>[-\w]+)', array(
    array(
      'methods' => WP_REST_Server::DELETABLE,
      'callback' => 'api_produto_delete',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_produto_delete');


?>