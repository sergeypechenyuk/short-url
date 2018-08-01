<?php
namespace Sergeypechenyuk\ShortUrl;

use GuzzleHttp;

class ShortUrl {
    public function create($url)
    {
        $curl = new Curl();
//        $curl->setOpt(CURLOPT_PROXY, $proxy);
        $curl->post(config("shorturl.api-url")."links/create", [
            'long_url' => $url,
        ]);
dd($curl->response);
        $response = $client->get('https://mail.ru');
        dd($result);
    }
}