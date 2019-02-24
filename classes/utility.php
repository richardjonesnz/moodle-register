<?php
/**
 * Utility class
 *
 * @package moodle-registration
 * @copyright 2019 Richard Jones https://richardnz.net
 * @license Creative Commons CC-BY 3.0 NZ
 */
class utility {
    /**
    * defines the main site navigation links
    *
    * @return countries array of URLs and link text.
    */
    public static function fetch_links() {
        $links = array();
        $links[] = ['link' => 'index.php', 'text' => 'Home page'];
        $links[] = ['link' => 'register.php', 'text' => 'Register'];
        $links[] = ['link' => '#', 'text' => 'About'];
        return $links;
    }
    public static function fetch_countries() {
        $countries = array();
        $countries['AD'] = 'Andorra';
        $countries['AE'] = 'United Arab Emirates';
        $countries['AF'] = 'Afghanistan';
        $countries['AG'] = 'Antigua And Barbuda';
        $countries['AI'] = 'Anguilla';
        $countries['AL'] = 'Albania';
        $countries['AM'] = 'Armenia';
        $countries['AO'] = 'Angola';
        $countries['AQ'] = 'Antarctica';
        $countries['AR'] = 'Argentina';
        $countries['AS'] = 'American Samoa';
        $countries['AT'] = 'Austria';
        $countries['AU'] = 'Australia';
        $countries['AW'] = 'Aruba';
        $countries['AX'] = 'Åland Islands';
        $countries['AZ'] = 'Azerbaijan';
        $countries['BA'] = 'Bosnia And Herzegovina';
        $countries['BB'] = 'Barbados';
        $countries['BD'] = 'Bangladesh';
        $countries['BE'] = 'Belgium';
        $countries['BF'] = 'Burkina Faso';
        $countries['BG'] = 'Bulgaria';
        $countries['BH'] = 'Bahrain';
        $countries['BI'] = 'Burundi';
        $countries['BJ'] = 'Benin';
        $countries['BL'] = 'Saint Barthélemy';
        $countries['BM'] = 'Bermuda';
        $countries['BN'] = 'Brunei Darussalam';
        $countries['BO'] = 'Bolivia, Plurinational State Of';
        $countries['BQ'] = 'Bonaire, Sint Eustatius And Saba';
        $countries['BR'] = 'Brazil';
        $countries['BS'] = 'Bahamas';
        $countries['BT'] = 'Bhutan';
        $countries['BV'] = 'Bouvet Island';
        $countries['BW'] = 'Botswana';
        $countries['BY'] = 'Belarus';
        $countries['BZ'] = 'Belize';
        $countries['CA'] = 'Canada';
        $countries['CC'] = 'Cocos (Keeling) Islands';
        $countries['CD'] = 'Congo, The Democratic Republic Of The';
        $countries['CF'] = 'Central African Republic';
        $countries['CG'] = 'Congo';
        $countries['CH'] = 'Switzerland';
        $countries['CI'] = 'Côte d\'Ivoire';
        $countries['CK'] = 'Cook Islands';
        $countries['CL'] = 'Chile';
        $countries['CM'] = 'Cameroon';
        $countries['CN'] = 'China';
        $countries['CO'] = 'Colombia';
        $countries['CR'] = 'Costa Rica';
        $countries['CU'] = 'Cuba';
        $countries['CV'] = 'Cabo Verde';
        $countries['CW'] = 'Curaçao';
        $countries['CX'] = 'Christmas Island';
        $countries['CY'] = 'Cyprus';
        $countries['CZ'] = 'Czechia';
        $countries['DE'] = 'Germany';
        $countries['DJ'] = 'Djibouti';
        $countries['DK'] = 'Denmark';
        $countries['DM'] = 'Dominica';
        $countries['DO'] = 'Dominican Republic';
        $countries['DZ'] = 'Algeria';
        $countries['EC'] = 'Ecuador';
        $countries['EE'] = 'Estonia';
        $countries['EG'] = 'Egypt';
        $countries['EH'] = 'Western Sahara';
        $countries['ER'] = 'Eritrea';
        $countries['ES'] = 'Spain';
        $countries['ET'] = 'Ethiopia';
        $countries['FI'] = 'Finland';
        $countries['FJ'] = 'Fiji';
        $countries['FK'] = 'Falkland Islands (Malvinas)';
        $countries['FM'] = 'Micronesia, Federated States Of';
        $countries['FO'] = 'Faroe Islands';
        $countries['FR'] = 'France';
        $countries['GA'] = 'Gabon';
        $countries['GB'] = 'United Kingdom';
        $countries['GD'] = 'Grenada';
        $countries['GE'] = 'Georgia';
        $countries['GF'] = 'French Guiana';
        $countries['GG'] = 'Guernsey';
        $countries['GH'] = 'Ghana';
        $countries['GI'] = 'Gibraltar';
        $countries['GL'] = 'Greenland';
        $countries['GM'] = 'Gambia';
        $countries['GN'] = 'Guinea';
        $countries['GP'] = 'Guadeloupe';
        $countries['GQ'] = 'Equatorial Guinea';
        $countries['GR'] = 'Greece';
        $countries['GS'] = 'South Georgia And The South Sandwich Islands';
        $countries['GT'] = 'Guatemala';
        $countries['GU'] = 'Guam';
        $countries['GW'] = 'Guinea-Bissau';
        $countries['GY'] = 'Guyana';
        $countries['HK'] = 'Hong Kong';
        $countries['HM'] = 'Heard Island And Mcdonald Islands';
        $countries['HN'] = 'Honduras';
        $countries['HR'] = 'Croatia';
        $countries['HT'] = 'Haiti';
        $countries['HU'] = 'Hungary';
        $countries['ID'] = 'Indonesia';
        $countries['IE'] = 'Ireland';
        $countries['IL'] = 'Israel';
        $countries['IM'] = 'Isle Of Man';
        $countries['IN'] = 'India';
        $countries['IO'] = 'British Indian Ocean Territory';
        $countries['IQ'] = 'Iraq';
        $countries['IR'] = 'Iran, Islamic Republic Of';
        $countries['IS'] = 'Iceland';
        $countries['IT'] = 'Italy';
        $countries['JE'] = 'Jersey';
        $countries['JM'] = 'Jamaica';
        $countries['JO'] = 'Jordan';
        $countries['JP'] = 'Japan';
        $countries['KE'] = 'Kenya';
        $countries['KG'] = 'Kyrgyzstan';
        $countries['KH'] = 'Cambodia';
        $countries['KI'] = 'Kiribati';
        $countries['KM'] = 'Comoros';
        $countries['KN'] = 'Saint Kitts And Nevis';
        $countries['KP'] = 'Korea, Democratic People\'s Republic Of';
        $countries['KR'] = 'Korea, Republic Of';
        $countries['KW'] = 'Kuwait';
        $countries['KY'] = 'Cayman Islands';
        $countries['KZ'] = 'Kazakhstan';
        $countries['LA'] = 'Lao People\'s Democratic Republic';
        $countries['LB'] = 'Lebanon';
        $countries['LC'] = 'Saint Lucia';
        $countries['LI'] = 'Liechtenstein';
        $countries['LK'] = 'Sri Lanka';
        $countries['LR'] = 'Liberia';
        $countries['LS'] = 'Lesotho';
        $countries['LT'] = 'Lithuania';
        $countries['LU'] = 'Luxembourg';
        $countries['LV'] = 'Latvia';
        $countries['LY'] = 'Libya';
        $countries['MA'] = 'Morocco';
        $countries['MC'] = 'Monaco';
        $countries['MD'] = 'Moldova, Republic Of';
        $countries['ME'] = 'Montenegro';
        $countries['MF'] = 'Saint Martin (French Part)';
        $countries['MG'] = 'Madagascar';
        $countries['MH'] = 'Marshall Islands';
        $countries['MK'] = 'Macedonia, The Former Yugoslav Republic Of';
        $countries['ML'] = 'Mali';
        $countries['MM'] = 'Myanmar';
        $countries['MN'] = 'Mongolia';
        $countries['MO'] = 'Macao';
        $countries['MP'] = 'Northern Mariana Islands';
        $countries['MQ'] = 'Martinique';
        $countries['MR'] = 'Mauritania';
        $countries['MS'] = 'Montserrat';
        $countries['MT'] = 'Malta';
        $countries['MU'] = 'Mauritius';
        $countries['MV'] = 'Maldives';
        $countries['MW'] = 'Malawi';
        $countries['MX'] = 'Mexico';
        $countries['MY'] = 'Malaysia';
        $countries['MZ'] = 'Mozambique';
        $countries['NA'] = 'Namibia';
        $countries['NC'] = 'New Caledonia';
        $countries['NE'] = 'Niger';
        $countries['NF'] = 'Norfolk Island';
        $countries['NG'] = 'Nigeria';
        $countries['NI'] = 'Nicaragua';
        $countries['NL'] = 'Netherlands';
        $countries['NO'] = 'Norway';
        $countries['NP'] = 'Nepal';
        $countries['NR'] = 'Nauru';
        $countries['NU'] = 'Niue';
        $countries['NZ'] = 'New Zealand';
        $countries['OM'] = 'Oman';
        $countries['PA'] = 'Panama';
        $countries['PE'] = 'Peru';
        $countries['PF'] = 'French Polynesia';
        $countries['PG'] = 'Papua New Guinea';
        $countries['PH'] = 'Philippines';
        $countries['PK'] = 'Pakistan';
        $countries['PL'] = 'Poland';
        $countries['PM'] = 'Saint Pierre And Miquelon';
        $countries['PN'] = 'Pitcairn';
        $countries['PR'] = 'Puerto Rico';
        $countries['PS'] = 'Palestine, State Of';
        $countries['PT'] = 'Portugal';
        $countries['PW'] = 'Palau';
        $countries['PY'] = 'Paraguay';
        $countries['QA'] = 'Qatar';
        $countries['RE'] = 'Réunion';
        $countries['RO'] = 'Romania';
        $countries['RS'] = 'Serbia';
        $countries['RU'] = 'Russian Federation';
        $countries['RW'] = 'Rwanda';
        $countries['SA'] = 'Saudi Arabia';
        $countries['SB'] = 'Solomon Islands';
        $countries['SC'] = 'Seychelles';
        $countries['SD'] = 'Sudan';
        $countries['SE'] = 'Sweden';
        $countries['SG'] = 'Singapore';
        $countries['SH'] = 'Saint Helena, Ascension And Tristan Da Cunha';
        $countries['SI'] = 'Slovenia';
        $countries['SJ'] = 'Svalbard And Jan Mayen';
        $countries['SK'] = 'Slovakia';
        $countries['SL'] = 'Sierra Leone';
        $countries['SM'] = 'San Marino';
        $countries['SN'] = 'Senegal';
        $countries['SO'] = 'Somalia';
        $countries['SR'] = 'Suriname';
        $countries['SS'] = 'South Sudan';
        $countries['ST'] = 'Sao Tome And Principe';
        $countries['SV'] = 'El Salvador';
        $countries['SX'] = 'Sint Maarten (Dutch Part)';
        $countries['SY'] = 'Syrian Arab Republic';
        $countries['SZ'] = 'Swaziland';
        $countries['TC'] = 'Turks And Caicos Islands';
        $countries['TD'] = 'Chad';
        $countries['TF'] = 'French Southern Territories';
        $countries['TG'] = 'Togo';
        $countries['TH'] = 'Thailand';
        $countries['TJ'] = 'Tajikistan';
        $countries['TK'] = 'Tokelau';
        $countries['TL'] = 'Timor-Leste';
        $countries['TM'] = 'Turkmenistan';
        $countries['TN'] = 'Tunisia';
        $countries['TO'] = 'Tonga';
        $countries['TR'] = 'Turkey';
        $countries['TT'] = 'Trinidad And Tobago';
        $countries['TV'] = 'Tuvalu';
        $countries['TW'] = 'Taiwan';
        $countries['TZ'] = 'Tanzania, United Republic Of';
        $countries['UA'] = 'Ukraine';
        $countries['UG'] = 'Uganda';
        $countries['UM'] = 'United States Minor Outlying Islands';
        $countries['US'] = 'United States';
        $countries['UY'] = 'Uruguay';
        $countries['UZ'] = 'Uzbekistan';
        $countries['VA'] = 'Holy See (Vatican City State)';
        $countries['VC'] = 'Saint Vincent And The Grenadines';
        $countries['VE'] = 'Venezuela, Bolivarian Republic Of';
        $countries['VG'] = 'Virgin Islands, British';
        $countries['VI'] = 'Virgin Islands, U.S.';
        $countries['VN'] = 'Viet Nam';
        $countries['VU'] = 'Vanuatu';
        $countries['WF'] = 'Wallis And Futuna';
        $countries['WS'] = 'Samoa';
        $countries['YE'] = 'Yemen';
        $countries['YT'] = 'Mayotte';
        $countries['ZA'] = 'South Africa';
        $countries['ZM'] = 'Zambia';
        $countries['ZW'] = 'Zimbabwe';
        return $countries;
    }
}
?>