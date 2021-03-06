<?php

/**
 * A number of issues were found in Google's dataset and reported at.
 * https://github.com/googlei18n/libaddressinput/issues
 * Since Google has been slow to resolve them, the library maintains its own
 * list of customizations, in PHP format for easier contribution.
 *
 * @todo
 * PE subdivisions (https://github.com/googlei18n/libaddressinput/issues/50)
 * Other points raised in https://github.com/googlei18n/libaddressinput/issues/49
 */

/**
 * Returns the address format customizations for the provided country code.
 */
function get_address_format_customizations($countryCode) {
    $formatCustomizations = [];
    // Make the locality required.
    $formatCustomizations['CO'] = [
        'required_fields' => [
            'addressLine1',
            'locality',
            'administrativeArea',
        ],
    ];
    // Switch %organization and %recipient.
    // https://github.com/googlei18n/libaddressinput/issues/83
    $formatCustomizations['DE'] = [
        'format' => '%organization\n%givenName %familyName\n%addressLine1\n%addressLine2\n%postalCode %locality',
    ];
    // Make the postal codes required, add administrative area fields (EE, LT).
    // https://github.com/googlei18n/libaddressinput/issues/64
    $formatCustomizations['EE'] = [
        'format' => '%givenName %familyName\n%organization\n%addressLine1\n%addressLine2\n%postalCode %locality %administrativeArea',
        'required_fields' => [
            'addressLine1',
            'locality',
            'postalCode',
        ],
        'administrative_area_type' => 'county',
    ];
    $formatCustomizations['LT'] = [
        'format' => '%organization\n%givenName %familyName\n%addressLine1\n%addressLine2\n%postalCode %locality %administrativeArea',
        'required_fields' => [
            'addressLine1',
            'locality',
            'postalCode',
        ],
        'administrative_area_type' => 'county',
    ];
    $formatCustomizations['LV'] = [
        'required_fields' => [
            'addressLine1',
            'locality',
            'postalCode',
        ],
    ];

    return isset($formatCustomizations[$countryCode]) ? $formatCustomizations[$countryCode] : [];
}

/**
 * Returns the subdivision customizations for the provided group.
 */
function get_subdivision_customizations($group) {
    // Adds Colombian subdivisions
    // https://github.com/googlei18n/libaddressinput/issues/135
    $subdivisionCustomizations['CO'] = [
        '_add' => [
            'DC', 'AMA', 'ANT', 'ARA', 'ATL', 'BOL', 'BOY',
            'CAL', 'CAQ', 'CAS', 'CAU', 'CES', 'COR', 'CUN',
            'CHO', 'GUA', 'GUV', 'HUI', 'LAG', 'MAG', 'MET',
            'NAR', 'NSA', 'PUT', 'QUI', 'RIS', 'SAP', 'SAN',
            'SUC', 'TOL', 'VAC', 'VAU', 'VID',
        ],
        'DC' => [
            'name' => 'Distrito Capital de Bogot??',
            'iso_code' => 'CO-DC',
            'postal_code_pattern' => '11\d{4}',
        ],
        'AMA' => [
            'name' => 'Amazonas',
            'iso_code' => 'CO-AMA',
            'postal_code_pattern' => '91\d{4}',
        ],
        'ANT' => [
            'name' => 'Antioquia',
            'iso_code' => 'CO-ANT',
            'postal_code_pattern' => '05\d{4}',
        ],
        'ARA' => [
            'name' => 'Arauca',
            'iso_code' => 'CO-ARA',
            'postal_code_pattern' => '81\d{4}',
        ],
        'ATL' => [
            'name' => 'Atl??ntico',
            'iso_code' => 'CO-ATL',
            'postal_code_pattern' => '08\d{4}',
        ],
        'BOL' => [
            'name' => 'Bol??var',
            'iso_code' => 'CO-BOL',
            'postal_code_pattern' => '13\d{4}',
        ],
        'BOY' => [
            'name' => 'Boyac??',
            'iso_code' => 'CO-BOY',
            'postal_code_pattern' => '15\d{4}',
        ],
        'CAL' => [
            'name' => 'Caldas',
            'iso_code' => 'CO-CAL',
            'postal_code_pattern' => '17\d{4}',
        ],
        'CAQ' => [
            'name' => 'Caquet??',
            'iso_code' => 'CO-CAQ',
            'postal_code_pattern' => '18\d{4}',
        ],
        'CAS' => [
            'name' => 'Casanare',
            'iso_code' => 'CO-CAS',
            'postal_code_pattern' => '85\d{4}',
        ],
        'CAU' => [
            'name' => 'Cauca',
            'iso_code' => 'CO-CAU',
            'postal_code_pattern' => '19\d{4}',
        ],
        'CES' => [
            'name' => 'Cesar',
            'iso_code' => 'CO-CES',
            'postal_code_pattern' => '20\d{4}',
        ],
        'COR' => [
            'name' => 'C??rdoba',
            'iso_code' => 'CO-COR',
            'postal_code_pattern' => '23\d{4}',
        ],
        'CUN' => [
            'name' => 'Cundinamarca',
            'iso_code' => 'CO-CUN',
            'postal_code_pattern' => '25\d{4}',
        ],
        'CHO' => [
            'name' => 'Choc??',
            'iso_code' => 'CO-CHO',
            'postal_code_pattern' => '27\d{4}',
        ],
        'GUA' => [
            'name' => 'Guan??a',
            'iso_code' => 'CO-GUA',
            'postal_code_pattern' => '94\d{4}',
        ],
        'GUV' => [
            'name' => 'Guaviare',
            'iso_code' => 'CO-GUV',
            'postal_code_pattern' => '95\d{4}',
        ],
        'HUI' => [
            'name' => 'Huila',
            'iso_code' => 'CO-HUI',
            'postal_code_pattern' => '41\d{4}',
        ],
        'LAG' => [
            'name' => 'La Guajira',
            'iso_code' => 'CO-LAG',
            'postal_code_pattern' => '44\d{4}',
        ],
        'MAG' => [
            'name' => 'Magdalena',
            'iso_code' => 'CO-MAG',
            'postal_code_pattern' => '47\d{4}',
        ],
        'MET' => [
            'name' => 'Meta',
            'iso_code' => 'CO-MET',
            'postal_code_pattern' => '50\d{4}',
        ],
        'NAR' => [
            'name' => 'Nari??o',
            'iso_code' => 'CO-NAR',
            'postal_code_pattern' => '52\d{4}',
        ],
        'NSA' => [
            'name' => 'Norte de Santander',
            'iso_code' => 'CO-NSA',
            'postal_code_pattern' => '54\d{4}',
        ],
        'PUT' => [
            'name' => 'Putumayo',
            'iso_code' => 'CO-PUT',
            'postal_code_pattern' => '86\d{4}',
        ],
        'QUI' => [
            'name' => 'Quind??o',
            'iso_code' => 'CO-QUI',
            'postal_code_pattern' => '63\d{4}',
        ],
        'RIS' => [
            'name' => 'Risaralda',
            'iso_code' => 'CO-RIS',
            'postal_code_pattern' => '66\d{4}',
        ],
        'SAP' => [
            'name' => 'San Andr??s, Providencia y Santa Catalina',
            'iso_code' => 'CO-SAP',
            'postal_code_pattern' => '88\d{4}',
        ],
        'SAN' => [
            'name' => 'Santander',
            'iso_code' => 'CO-SAN',
            'postal_code_pattern' => '68\d{4}',
        ],
        'SUC' => [
            'name' => 'Sucre',
            'iso_code' => 'CO-SUC',
            'postal_code_pattern' => '70\d{4}',
        ],
        'TOL' => [
            'name' => 'Tolima',
            'iso_code' => 'CO-TOL',
            'postal_code_pattern' => '73\d{4}',
        ],
        'VAC' => [
            'name' => 'Valle del Cauca',
            'iso_code' => 'CO-VAC',
            'postal_code_pattern' => '76\d{4}',
        ],
        'VAU' => [
            'name' => 'Vaup??s',
            'iso_code' => 'CO-VAU',
            'postal_code_pattern' => '97\d{4}',
        ],
        'VID' => [
            'name' => 'Vichada',
            'iso_code' => 'CO-VID',
            'postal_code_pattern' => '99\d{4}',
        ],
    ];

    return isset($subdivisionCustomizations[$group]) ? $subdivisionCustomizations[$group] : [];
}
