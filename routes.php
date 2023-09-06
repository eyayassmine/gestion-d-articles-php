<?php
// Define routes
$routes = [
    '/' => 'HomeController@index',  // Example: http://yourapp.com/
    '/articles' => 'ArticleController@index',  // Example: http://yourapp.com/articles
    '/articles/create' => 'ArticleController@create',  // Example: http://yourapp.com/articles/create
    '/articles/{id}' => 'ArticleController@show',  // Example: http://yourapp.com/articles/1
    //
    '/articles/{id}/comment' => 'ArticleController@show',  // Example: http://yourapp.com/articles/1


    '/users' => 'UserController@index',  // Example: http://yourapp.com/articles
    '/users/create' => 'UserController@create',  // Example: http://yourapp.com/articles/create
    '/users/{id}' => 'UserController@show',  // Example: http://yourapp.com/articles/1
];
?>

