<?php
$opts = [
    "http" => [
        "method" => "GET",
        "timeout" => 5,
    ]
];
$ctx = stream_context_create($opts);
try {
    $s = @file_get_contents('http://127.0.0.1:8000/', false, $ctx);
    if ($s === false) {
        echo "ERR: couldn't fetch\n";
        var_export($http_response_header ?? []);
    } else {
        echo "OK: length=" . strlen($s) . "\n";
    }
} catch (Exception $e) {
    echo 'ERR: '. $e->getMessage() ."\n";
}
