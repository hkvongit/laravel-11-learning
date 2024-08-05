<?php
namespace App\Models;

/*Modal should be singular but database table name should be plural 
- Database table name: lowercase words separated by underscore 
- Model name is Capital case with no spaces
- e.g: Table name: user_details, Modal name: UserDetail
*/
class Tweet
{
  public static function all()
  {
    return [
      [
        "title" => "Hai ! this is my first tweet.",
        "id" => 1
      ],
      [
        "title" => "Messi won thw world cup.",
        "id" => 2
      ]
    ];
  }

  public static function find($id)
  {
    $tweets = Tweet::all();
    $currentTweet = null;
    foreach ($tweets as $ind_tweet) {
      // id in the url path will come as string but the id in the tweet array is number, so we can avoid strict check (===)
      if ($ind_tweet["id"] == $id) {
        $currentTweet = $ind_tweet;
        break;
      }
    }
    return $currentTweet;

  }
}