<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    function index(){

    
    $postsList = [
        [
          "userId" => 1,
          "id" => 1,
          "title" => "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
          "body" => "<p>quia et <strong>suscipit</strong>
  suscipit <em>recusandae consequuntur</em> expedita et cum
  reprehenderit molestiae ut ut quas totam
  nostrum rerum est autem sunt rem eveniet architecto</p>"
        ],
        [
          "userId" => 1,
          "id" => 2,
          "title" => "qui est esse",
          "body" => "est rerum tempore vitae
  sequi sint nihil reprehenderit dolor beatae ea dolores neque
  fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis
  qui aperiam non debitis possimus qui neque nisi nulla"
        ],
        [
          "userId" => 1,
          "id" => 3,
          "title" => "ea molestias quasi exercitationem repellat qui ipsa sit aut",
          "body" => "et iusto sed quo iure
  voluptatem occaecati omnis eligendi aut ad
  voluptatem doloribus vel accusantium quis pariatur
  molestiae porro eius odio et labore et velit aut"
        ],
      ];

      return $postsList;
    }
}
