<?php
    return [
        'api-url' => getenv("SHORTURL_API", "http://api.short.local/v1/"),
        'server-token' => getenv("SHORTURL_SERVER_TOKEN", ""),
        'server-secret' => getenv("SHORTURL_SERVER_SECRET", ""),
    ];