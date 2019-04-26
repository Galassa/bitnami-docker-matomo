<?php
/**
 * @author https://github.com/ThaDafinser
 */
/**
 * Here you can add your subnetworks and their location based informations
 * 
 * visitorInfo can be extended to all available fields inside the `log_visit` table of piwik
 */
 echo "I'm inside intranetGeoIp";
return [
    /*
     * If the IP was not matched, apply these data to visitorInfo
     * You can also apply here all possible visitorInformation data if you want
     */
    'noMatch' => [
        'visitorInfo' => [
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_country' => 'at',
        ]
    ],
    

    // Mapping IP pour TC8000

    // Mapping 355 Valence
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B9',

            //should be freetext
            'location_city' => 'Valence',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '44.9232696',
            'location_longitude' => '4.8463442',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Valence'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.154.0/24', //10.6.154.0 - 10.6.154.255
            '10.16.178.128/27', //10.16.178.128 - 10.16.178.159
            '10.16.181.80/29', // 10.16.181.80 - 10.16.181.87
            '10.16.181.160/25', //10.16.181.128 - 10.16.181.255 !!!!
            '10.2.1.0/25' //10.2.1.0 - 10.2.1.127
        ]
    ],


    // Mapping 098 Chalons
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'A4',

            //should be freetext
            'location_city' => 'Chalons',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '48.9655528',
            'location_longitude' => '4.3100123',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Chalons'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.197.0/24' //10.6.197.0 - 10.6.197.255 !!!!
        ]
    ],


    // Mapping 122 Dourges
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B4',

            //should be freetext
            'location_city' => 'Dourges',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '50.4378207',
            'location_longitude' => '2.9500257',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Dourges'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.125.0/24', //10.6.125.0 - 10.6.125.255 !!!!
            '10.6.122.0/24' //10.6.122.0 - 10.6.122.255 !!!!
        ]
    ],


    // Mapping 430 Mazere
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B3',

            //should be freetext
            'location_city' => 'Mazere',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '43.2319181',
            'location_longitude' => '1.6081417',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Mazere'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.230.0/24', //10.6.230.0 - 10.6.230.255
            '10.6.231.0/24', //10.6.231.0 - 10.6.231.255
            '10.2.2.0/25' //10.2.2.0 - 10.2.2.127
        ]
    ],

    // Mapping 433 Libercourt
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B4',

            //should be freetext
            'location_city' => 'Libercourt',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '50.4834562',
            'location_longitude' => '2.9680416',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Libercourt'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.105.0/24', //10.6.105.0 - 10.6.105.255
            '10.16.179.0/26', //10.16.179.0 - 10.16.179.63 !!!!
            '10.16.181.64/26', //10.16.181.64 - 10.16.181.127
            '10.2.22.0/24', //10.2.22.0 - 10.2.22.255
            '10.2.23.0/24', //10.2.23.0 - 10.2.23.255
            '10.6.34.0/24' //10.6.34.0 - 10.6.34.255
        ]
    ],

    // Mapping 435 Ile de France
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'A8',

            //should be freetext
            'location_city' => 'Ile de France',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '48.675354',
            'location_longitude' => '1.3815665',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Ile de France'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.36.0/24', //10.6.36.0 - 10.6.36.255
            '10.6.37.0/24' //10.6.37.0 - 10.6.37.255
        ]
    ],


    // Mapping 443 Saint Leger
    //TODO: savoir ou est saint leger :o Pas de Calais ? Belgique ?
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B5',

            //should be freetext
            'location_city' => 'Saint Leger des Bois',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '47.4626587',
            'location_longitude' => '-0.7636209',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Saint Leger'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.128.0/24', //10.6.128.0 - 10.6.128.255
        ]
    ],


    // Mapping 400 Lezennes
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B4',

            //should be freetext
            'location_city' => 'Lezennes',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '50.6100442',
            'location_longitude' => '3.0998754',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LM - Headquarters'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.16.182.0/24', //10.16.182.0 - 10.16.182.255
            '10.16.183.0/24', //10.16.183.0 - 10.16.183.255
            '10.16.184.0/24', //10.16.184.0 - 10.16.184.255
            '10.16.185.0/24', //10.16.185.0 - 10.16.185.255
            '10.16.186.0/24', //10.16.186.0 - 10.16.186.255
            '10.16.187.0/24', //10.16.187.0 - 10.16.187.255
            '10.16.237.0/24'
        ]
    ],


    // Mapping 450 Dourges 2
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B4',

            //should be freetext
            'location_city' => 'Dourges 2',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '50.4378207',
            'location_longitude' => '2.9500257',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Dourges 2'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.134.0/24', //10.6.134.0 - 10.6.134.255
            //AG to remove
            '10.16.238.0/24'
        ]
    ],


    // Mapping 451 Grans
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'B8',

            //should be freetext
            'location_city' => 'Grans',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '44.3639331',
            'location_longitude' => '3.531856',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Grans'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.138.0/24' //10.6.138.0 - 10.6.138.255
        ]
    ],

    // Mapping 447 Réau
    [
        'visitorInfo' => [
            //ISO-3166 alpha-2 code http://en.wikipedia.org/wiki/ISO_3166-1
            'location_country' => 'fr',

            //the region code (i take them from piwik/libs/MaxMindGeoIp/geoipregionvars.php
            'location_region' => 'A8',

            //should be freetext
            'location_city' => 'Réau',

            //get this from a picker, e.g. http://www.tytai.com/gmap/
            'location_latitude' => '48.6076517',
            'location_longitude' => '2.6074124',

            //enter your company name or do it based on your domain hierarchy
            // Provider requires the "Provider" Plugin to be active. (Disabled by default in Version 2.15 and above)
            //'location_provider' => 'LMFR - Réau'
        ],
        'networks' => [
            //enter here all subnetworks for this location
            //use a subnetwork calculator, e.g. http://jodies.de/ipcalc
            '10.6.52.0/24',
            '10.6.53.0/24'
        ]
    ]

    //add more blocks live above

    /*
     *     "FR" => array(
     *   "97" => "Aquitaine",
     *   "98" => "Auvergne",
     *   "99" => "Basse-Normandie",
     *   "A1" => "Bourgogne",
     *   "A2" => "Bretagne",
     *   "A3" => "Centre",
     *   "A4" => "Champagne-Ardenne",
     *   "A5" => "Corse",
     *   "A6" => "Franche-Comte",
     *   "A7" => "Haute-Normandie",
     *   "A8" => "Ile-de-France",
     *   "A9" => "Languedoc-Roussillon",
     *   "B1" => "Limousin",
     *   "B2" => "Lorraine",
     *   "B3" => "Midi-Pyrenees",
     *   "B4" => "Nord-Pas-de-Calais",
     *   "B5" => "Pays de la Loire",
     *   "B6" => "Picardie",
     *   "B7" => "Poitou-Charentes",
     *   "B8" => "Provence-Alpes-Cote d'Azur",
     *   "B9" => "Rhone-Alpes",
     *   "C1" => "Alsace"
    * )
     * */
];
