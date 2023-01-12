<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class CountriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [['code' => 'USA', 'country' => 'United States'],
            ['code' => 'CA', 'country' => 'Canada'],
            ['code' => 'AF', 'country' => 'Afghanistan'],
            ['code' => 'AL', 'country' => 'Albania'],
            ['code' => 'DZ', 'country' => 'Algeria'],
            ['code' => 'AS', 'country' => 'American Samoa'],
            ['code' => 'AD', 'country' => 'Andorra'],
            ['code' => 'AO', 'country' => 'Angola'],
            ['code' => 'AI', 'country' => 'Anguilla'],
            ['code' => 'AQ', 'country' => 'Antarctica'],
            ['code' => 'AG', 'country' => 'Antigua and/or Barbuda'],
            ['code' => 'AR', 'country' => 'Argentina'],
            ['code' => 'AM', 'country' => 'Armenia'],
            ['code' => 'AW', 'country' => 'Aruba'],
            ['code' => 'AU', 'country' => 'Australia'],
            ['code' => 'AT', 'country' => 'Austria'],
            ['code' => 'AZ', 'country' => 'Azerbaijan'],
            ['code' => 'BS', 'country' => 'Bahamas'],
            ['code' => 'BH', 'country' => 'Bahrain'],
            ['code' => 'BD', 'country' => 'Bangladesh'],
            ['code' => 'BB', 'country' => 'Barbados'],
            ['code' => 'BY', 'country' => 'Belarus'],
            ['code' => 'BE', 'country' => 'Belgium'],
            ['code' => 'BZ', 'country' => 'Belize'],
            ['code' => 'BJ', 'country' => 'Benin'],
            ['code' => 'BM', 'country' => 'Bermuda'],
            ['code' => 'BT', 'country' => 'Bhutan'],
            ['code' => 'BO', 'country' => 'Bolivia'],
            ['code' => 'BA', 'country' => 'Bosnia and Herzegovina'],
            ['code' => 'BW', 'country' => 'Botswana'],
            ['code' => 'BV', 'country' => 'Bouvet Island'],
            ['code' => 'BR', 'country' => 'Brazil'],
            ['code' => 'IO', 'country' => 'British lndian Ocean Territory'],
            ['code' => 'BN', 'country' => 'Brunei Darussalam'],
            ['code' => 'BG', 'country' => 'Bulgaria'],
            ['code' => 'BF', 'country' => 'Burkina Faso'],
            ['code' => 'BI', 'country' => 'Burundi'],
            ['code' => 'KH', 'country' => 'Cambodia'],
            ['code' => 'CM', 'country' => 'Cameroon'],
            ['code' => 'CV', 'country' => 'Cape Verde'],
            ['code' => 'KY', 'country' => 'Cayman Islands'],
            ['code' => 'CF', 'country' => 'Central African Republic'],
            ['code' => 'TD', 'country' => 'Chad'],
            ['code' => 'CL', 'country' => 'Chile'],
            ['code' => 'CN', 'country' => 'China'],
            ['code' => 'CX', 'country' => 'Christmas Island'],
            ['code' => 'CC', 'country' => 'Cocos (Keeling) Islands'],
            ['code' => 'CO', 'country' => 'Colombia'],
            ['code' => 'KM', 'country' => 'Comoros'],
            ['code' => 'CG', 'country' => 'Congo'],
            ['code' => 'CK', 'country' => 'Cook Islands'],
            ['code' => 'CR', 'country' => 'Costa Rica'],
            ['code' => 'HR', 'country' => 'Croatia (Hrvatska)'],
            ['code' => 'CU', 'country' => 'Cuba'],
            ['code' => 'CY', 'country' => 'Cyprus'],
            ['code' => 'CZ', 'country' => 'Czech Republic'],
            ['code' => 'CD', 'country' => 'Democratic Republic of Congo'],
            ['code' => 'DK', 'country' => 'Denmark'],
            ['code' => 'DJ', 'country' => 'Djibouti'],
            ['code' => 'DM', 'country' => 'Dominica'],
            ['code' => 'DO', 'country' => 'Dominican Republic'],
            ['code' => 'TP', 'country' => 'East Timor'],
            ['code' => 'EC', 'country' => 'Ecudaor'],
            ['code' => 'EG', 'country' => 'Egypt'],
            ['code' => 'SV', 'country' => 'El Salvador'],
            ['code' => 'GQ', 'country' => 'Equatorial Guinea'],
            ['code' => 'ER', 'country' => 'Eritrea'],
            ['code' => 'EE', 'country' => 'Estonia'],
            ['code' => 'ET', 'country' => 'Ethiopia'],
            ['code' => 'FK', 'country' => 'Falkland Islands (Malvinas)'],
            ['code' => 'FO', 'country' => 'Faroe Islands'],
            ['code' => 'FJ', 'country' => 'Fiji'],
            ['code' => 'FI', 'country' => 'Finland'],
            ['code' => 'FR', 'country' => 'France'],
            ['code' => 'FX', 'country' => 'France, Metropolitan'],
            ['code' => 'GF', 'country' => 'French Guiana'],
            ['code' => 'PF', 'country' => 'French Polynesia'],
            ['code' => 'TF', 'country' => 'French Southern Territories'],
            ['code' => 'GA', 'country' => 'Gabon'],
            ['code' => 'GM', 'country' => 'Gambia'],
            ['code' => 'GE', 'country' => 'Georgia'],
            ['code' => 'DE', 'country' => 'Germany'],
            ['code' => 'GH', 'country' => 'Ghana'],
            ['code' => 'GI', 'country' => 'Gibraltar'],
            ['code' => 'GR', 'country' => 'Greece'],
            ['code' => 'GL', 'country' => 'Greenland'],
            ['code' => 'GD', 'country' => 'Grenada'],
            ['code' => 'GP', 'country' => 'Guadeloupe'],
            ['code' => 'GU', 'country' => 'Guam'],
            ['code' => 'GT', 'country' => 'Guatemala'],
            ['code' => 'GN', 'country' => 'Guinea'],
            ['code' => 'GW', 'country' => 'Guinea-Bissau'],
            ['code' => 'GY', 'country' => 'Guyana'],
            ['code' => 'HT', 'country' => 'Haiti'],
            ['code' => 'HM', 'country' => 'Heard and Mc Donald Islands'],
            ['code' => 'HN', 'country' => 'Honduras'],
            ['code' => 'HK', 'country' => 'Hong Kong'],
            ['code' => 'HU', 'country' => 'Hungary'],
            ['code' => 'IS', 'country' => 'Iceland'],
            ['code' => 'IN', 'country' => 'India'],
            ['code' => 'ID', 'country' => 'Indonesia'],
            ['code' => 'IR', 'country' => 'Iran (Islamic Republic of)'],
            ['code' => 'IQ', 'country' => 'Iraq'],
            ['code' => 'IE', 'country' => 'Ireland'],
            ['code' => 'IL', 'country' => 'Israel'],
            ['code' => 'IT', 'country' => 'Italy'],
            ['code' => 'CI', 'country' => 'Ivory Coast'],
            ['code' => 'JM', 'country' => 'Jamaica'],
            ['code' => 'JP', 'country' => 'Japan'],
            ['code' => 'JO', 'country' => 'Jordan'],
            ['code' => 'KZ', 'country' => 'Kazakhstan'],
            ['code' => 'KE', 'country' => 'Kenya'],
            ['code' => 'KI', 'country' => 'Kiribati'],
            ['code' => 'KP', 'country' => 'Korea, Democratic People\'s Republic of'],
            ['code' => 'KR', 'country' => 'Korea, Republic of'],
            ['code' => 'KW', 'country' => 'Kuwait'],
            ['code' => 'KG', 'country' => 'Kyrgyzstan'],
            ['code' => 'LA', 'country' => 'Lao People\'s Democratic Republic'],
            ['code' => 'LV', 'country' => 'Latvia'],
            ['code' => 'LB', 'country' => 'Lebanon'],
            ['code' => 'LS', 'country' => 'Lesotho'],
            ['code' => 'LR', 'country' => 'Liberia'],
            ['code' => 'LY', 'country' => 'Libyan Arab Jamahiriya'],
            ['code' => 'LI', 'country' => 'Liechtenstein'],
            ['code' => 'LT', 'country' => 'Lithuania'],
            ['code' => 'LU', 'country' => 'Luxembourg'],
            ['code' => 'MO', 'country' => 'Macau'],
            ['code' => 'MK', 'country' => 'Macedonia'],
            ['code' => 'MG', 'country' => 'Madagascar'],
            ['code' => 'MW', 'country' => 'Malawi'],
            ['code' => 'MY', 'country' => 'Malaysia'],
            ['code' => 'MV', 'country' => 'Maldives'],
            ['code' => 'ML', 'country' => 'Mali'],
            ['code' => 'MT', 'country' => 'Malta'],
            ['code' => 'MH', 'country' => 'Marshall Islands'],
            ['code' => 'MQ', 'country' => 'Martinique'],
            ['code' => 'MR', 'country' => 'Mauritania'],
            ['code' => 'MU', 'country' => 'Mauritius'],
            ['code' => 'TY', 'country' => 'Mayotte'],
            ['code' => 'MX', 'country' => 'Mexico'],
            ['code' => 'FM', 'country' => 'Micronesia, Federated States of'],
            ['code' => 'MD', 'country' => 'Moldova, Republic of'],
            ['code' => 'MC', 'country' => 'Monaco'],
            ['code' => 'MN', 'country' => 'Mongolia'],
            ['code' => 'MS', 'country' => 'Montserrat'],
            ['code' => 'MA', 'country' => 'Morocco'],
            ['code' => 'MZ', 'country' => 'Mozambique'],
            ['code' => 'MM', 'country' => 'Myanmar'],
            ['code' => 'NA', 'country' => 'Namibia'],
            ['code' => 'NR', 'country' => 'Nauru'],
            ['code' => 'NP', 'country' => 'Nepal'],
            ['code' => 'NL', 'country' => 'Netherlands'],
            ['code' => 'AN', 'country' => 'Netherlands Antilles'],
            ['code' => 'NC', 'country' => 'New Caledonia'],
            ['code' => 'NZ', 'country' => 'New Zealand'],
            ['code' => 'NI', 'country' => 'Nicaragua'],
            ['code' => 'NE', 'country' => 'Niger'],
            ['code' => 'NG', 'country' => 'Nigeria'],
            ['code' => 'NU', 'country' => 'Niue'],
            ['code' => 'NF', 'country' => 'Norfork Island'],
            ['code' => 'MP', 'country' => 'Northern Mariana Islands'],
            ['code' => 'NO', 'country' => 'Norway'],
            ['code' => 'OM', 'country' => 'Oman'],
            ['code' => 'PK', 'country' => 'Pakistan'],
            ['code' => 'PW', 'country' => 'Palau'],
            ['code' => 'PA', 'country' => 'Panama'],
            ['code' => 'PG', 'country' => 'Papua New Guinea'],
            ['code' => 'PY', 'country' => 'Paraguay'],
            ['code' => 'PE', 'country' => 'Peru'],
            ['code' => 'PH', 'country' => 'Philippines'],
            ['code' => 'PN', 'country' => 'Pitcairn'],
            ['code' => 'PL', 'country' => 'Poland'],
            ['code' => 'PT', 'country' => 'Portugal'],
            ['code' => 'PR', 'country' => 'Puerto Rico'],
            ['code' => 'QA', 'country' => 'Qatar'],
            ['code' => 'SS', 'country' => 'Republic of South Sudan'],
            ['code' => 'RE', 'country' => 'Reunion'],
            ['code' => 'RO', 'country' => 'Romania'],
            ['code' => 'RU', 'country' => 'Russian Federation'],
            ['code' => 'RW', 'country' => 'Rwanda'],
            ['code' => 'KN', 'country' => 'Saint Kitts and Nevis'],
            ['code' => 'LC', 'country' => 'Saint Lucia'],
            ['code' => 'VC', 'country' => 'Saint Vincent and the Grenadines'],
            ['code' => 'WS', 'country' => 'Samoa'],
            ['code' => 'SM', 'country' => 'San Marino'],
            ['code' => 'ST', 'country' => 'Sao Tome and Principe'],
            ['code' => 'SA', 'country' => 'Saudi Arabia'],
            ['code' => 'SN', 'country' => 'Senegal'],
            ['code' => 'RS', 'country' => 'Serbia'],
            ['code' => 'SC', 'country' => 'Seychelles'],
            ['code' => 'SL', 'country' => 'Sierra Leone'],
            ['code' => 'SG', 'country' => 'Singapore'],
            ['code' => 'SK', 'country' => 'Slovakia'],
            ['code' => 'SI', 'country' => 'Slovenia'],
            ['code' => 'SB', 'country' => 'Solomon Islands'],
            ['code' => 'SO', 'country' => 'Somalia'],
            ['code' => 'ZA', 'country' => 'South Africa'],
            ['code' => 'GS', 'country' => 'South Georgia South Sandwich Islands'],
            ['code' => 'ES', 'country' => 'Spain'],
            ['code' => 'LK', 'country' => 'Sri Lanka'],
            ['code' => 'SH', 'country' => 'St. Helena'],
            ['code' => 'PM', 'country' => 'St. Pierre and Miquelon'],
            ['code' => 'SD', 'country' => 'Sudan'],
            ['code' => 'SR', 'country' => 'Suricountry'],
            ['code' => 'SJ', 'country' => 'Svalbarn and Jan Mayen Islands'],
            ['code' => 'SZ', 'country' => 'Swaziland'],
            ['code' => 'SE', 'country' => 'Sweden'],
            ['code' => 'CH', 'country' => 'Switzerland'],
            ['code' => 'SY', 'country' => 'Syrian Arab Republic'],
            ['code' => 'TW', 'country' => 'Taiwan'],
            ['code' => 'TJ', 'country' => 'Tajikistan'],
            ['code' => 'TZ', 'country' => 'Tanzania, United Republic of'],
            ['code' => 'TH', 'country' => 'Thailand'],
            ['code' => 'TG', 'country' => 'Togo'],
            ['code' => 'TK', 'country' => 'Tokelau'],
            ['code' => 'TO', 'country' => 'Tonga'],
            ['code' => 'TT', 'country' => 'Trinidad and Tobago'],
            ['code' => 'TN', 'country' => 'Tunisia'],
            ['code' => 'TR', 'country' => 'Turkey'],
            ['code' => 'TM', 'country' => 'Turkmenistan'],
            ['code' => 'TC', 'country' => 'Turks and Caicos Islands'],
            ['code' => 'TV', 'country' => 'Tuvalu'],
            ['code' => 'UG', 'country' => 'Uganda'],
            ['code' => 'UA', 'country' => 'Ukraine'],
            ['code' => 'AE', 'country' => 'United Arab Emirates'],
            ['code' => 'GB', 'country' => 'United Kingdom'],
            ['code' => 'UM', 'country' => 'United States minor outlying islands'],
            ['code' => 'UY', 'country' => 'Uruguay'],
            ['code' => 'UZ', 'country' => 'Uzbekistan'],
            ['code' => 'VU', 'country' => 'Vanuatu'],
            ['code' => 'VA', 'country' => 'Vatican City State'],
            ['code' => 'VE', 'country' => 'Venezuela'],
            ['code' => 'VN', 'country' => 'Vietnam'],
            ['code' => 'VG', 'country' => 'Virgin Islands (British)'],
            ['code' => 'VI', 'country' => 'Virgin Islands (U.S.)'],
            ['code' => 'WF', 'country' => 'Wallis and Futuna Islands'],
            ['code' => 'EH', 'country' => 'Western Sahara'],
            ['code' => 'YE', 'country' => 'Yemen'],
            ['code' => 'YU', 'country' => 'Yugoslavia'],
            ['code' => 'ZR', 'country' => 'Zaire'],
            ['code' => 'ZM', 'country' => 'Zambia'],
            ['code' => 'ZW', 'country' => 'Zimbabwe']]
        ;
        Country::insert($countries);




    }
}
