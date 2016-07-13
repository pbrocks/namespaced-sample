<?php

// This code demonstrates how to lookup the country by IP Address

    error_reporting(-1);
    ini_set('display_errors', 'On');

include("../src/geoip.inc");

// Uncomment if querying against GeoIP/Lite City.
// include("geoipcity.inc");

$gi = geoip_open("../tests/data/GeoIP.dat", GEOIP_STANDARD);

echo geoip_country_code_by_addr($gi, "24.24.24.24") . "\t" .
    geoip_country_name_by_addr($gi, "24.24.24.24") . "\n";
echo geoip_country_code_by_addr($gi, "80.24.24.24") . "\t" .
    geoip_country_name_by_addr($gi, "80.24.24.24") . "\n";

geoip_close($gi);

?>
