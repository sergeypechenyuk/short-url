<?php
namespace Sergeypechenyuk\ShortUrl;

use Curl\Curl;

class ShortUrl {
    public function create($url)
    {
        $curl = new Curl();
        $curl->setHeader('X-SERVER-TOKEN', config("shorturl.server-token"));
        $curl->setHeader('X-SERVER-SECRET', config("shorturl.server-secret"));

        $curl->post(config("shorturl.api-url")."links/create", [
            'long_url' => $url,
        ]);

        return json_decode($curl->response);
    }

    public function remove($url)
    {
        $curl = new Curl();
        $curl->setHeader('X-SERVER-TOKEN', config("shorturl.server-token"));
        $curl->setHeader('X-SERVER-SECRET', config("shorturl.server-secret"));

        $curl->post(config("shorturl.api-url")."links/remove", [
            'short_url' => $url,
        ]);

        return json_decode($curl->response);
    }

    public function stats($url, $details = 0)
    {
        $curl = new Curl();
        $curl->setHeader('X-SERVER-TOKEN', config("shorturl.server-token"));
        $curl->setHeader('X-SERVER-SECRET', config("shorturl.server-secret"));

        $curl->post(config("shorturl.api-url")."links/stats", [
            'short_url' => $url,
            "details" => $details,
        ]);

        return json_decode($curl->response);
    }

    public function statsAll($urls, $details = 0)
    {
        $curl = new Curl();
        $curl->setHeader('X-SERVER-TOKEN', config("shorturl.server-token"));
        $curl->setHeader('X-SERVER-SECRET', config("shorturl.server-secret"));

        $curl->post(config("shorturl.api-url")."links/stats/all", [
            'short_urls' => $urls,
            "details" => $details,
        ]);

        return json_decode($curl->response);
    }
}