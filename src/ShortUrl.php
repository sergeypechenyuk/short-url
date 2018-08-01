<?php
namespace Sergeypechenyuk\ShortUrl;

use GuzzleHttp;

class ShortUrl {
    public function create($url)
    {
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://mail.ru');
        dd($result);
    }
}