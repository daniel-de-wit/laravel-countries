<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Seeder;

class PtSeeder extends Seeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    protected $lang = 'pt';

    /**
     * Attribute that defines regions
     *
     * @var array
     */
    protected $regions = [
        'africa' => 'África',
        'americas' => 'Américas',
        'asia' => 'Ásia',
        'europe' => 'Europa',
        'oceania' => 'Oceania',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Builder::regionsTranslations($this->regions, $this->lang);
        Builder::countriesTranslations($this->countries(), $this->lang);
    }

    public function countries()
    {
        return [
            'AI' => 'Anguilla',
            'AG' => 'Antígua e Barbuda',
            'AR' => 'Argentina',
            'AW' => 'Aruba',
            'BS' => 'Bahamas',
            'BB' => 'Barbados',
            'BZ' => 'Belize',
            'BM' => 'Bermudas',
            'BO' => 'Bolívia',
            'BR' => 'Brasil',
            'CA' => 'Canadá',
            'CL' => 'Chile',
            'CO' => 'Colômbia',
            'CR' => 'Costa Rica',
            'CU' => 'Cuba',
            'DM' => 'Dominica',
            'SV' => 'El Salvador',
            'EC' => 'Equador',
            'US' => 'Estados Unidos',
            'GD' => 'Granada',
            'GL' => 'Groênlandia',
            'GP' => 'Guadalupe',
            'GT' => 'Guatemala',
            'GY' => 'Guiana',
            'GF' => 'Guiana Francesa',
            'HT' => 'Haiti',
            'HN' => 'Honduras',
            'KY' => 'Ilhas Caiman',
            'FK' => 'Ilhas Malvinas',
            'TC' => 'Ilhas Turks e Caicos',
            'VG' => 'Ilhas Virgens Britânicas',
            'VI' => 'Ilhas Virgens dos EUA',
            'JM' => 'Jamaica',
            'MQ' => 'Martinica',
            'MS' => 'Montserrat',
            'MX' => 'México',
            'NI' => 'Nicarágua',
            'PA' => 'Panamá',
            'PY' => 'Paraguai',
            'PE' => 'Peru',
            'PR' => 'Porto Rico',
            'DO' => 'República Dominicana',
            'PM' => 'Saint Pierre e Miquelon',
            'LC' => 'Santa Lúcia',
            'SR' => 'Suriname',
            'BL' => 'São Bartolomeu',
            'KN' => 'São Cristovão e Nevis',
            'MF' => 'São Martinho',
            'VC' => 'São Vicente e Granadinas',
            'TT' => 'Trinidad e Tobago',
            'UY' => 'Uruguai',
            'VE' => 'Venezuela',
            'AL' => 'Albânia',
            'DE' => 'Alemanha',
            'AD' => 'Andorra',
            'BY' => 'Belarus',
            'BG' => 'Bulgária',
            'BE' => 'Bélgica',
            'BA' => 'Bósnia-Herzegovina',
            'CY' => 'Chipre',
            'HR' => 'Croácia',
            'DK' => 'Dinamarca',
            'SK' => 'Eslováquia',
            'SI' => 'Eslovênia',
            'ES' => 'Espanha',
            'EE' => 'Estônia',
            'FI' => 'Finlândia',
            'FR' => 'França',
            'GI' => 'Gibraltar',
            'GR' => 'Grécia',
            'GG' => 'Guernsey',
            'NL' => 'Holanda',
            'HU' => 'Hungria',
            'IM' => 'Ilha de Man',
            'AX' => 'Ilhas Aland',
            'FO' => 'Ilhas Faroe',
            'IE' => 'Irlanda',
            'IS' => 'Islândia',
            'IT' => 'Itália',
            'JE' => 'Jersey',
            'LV' => 'Letônia',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituânia',
            'LU' => 'Luxemburgo',
            'MK' => 'Macedônia',
            'MT' => 'Malta',
            'MD' => 'Moldávia',
            'ME' => 'Montenegro',
            'MC' => 'Mônaco',
            'NO' => 'Noruega',
            'PL' => 'Polônia',
            'PT' => 'Portugal',
            'GB' => 'Reino Unido',
            'CZ' => 'República Tcheca',
            'RO' => 'Romênia',
            'RU' => 'Rússia',
            'SM' => 'San Marino',
            'SE' => 'Suécia',
            'CH' => 'Suíça',
            'SJ' => 'Svalbard e Jan Mayen',
            'RS' => 'Sérvia',
            'CS' => 'Sérvia e Montenegro',
            'UA' => 'Ucrânia',
            'VA' => 'Vaticano',
            'AT' => 'Áustria',
            'AQ' => 'Antártida',
            'AU' => 'Austrália',
            'FJ' => 'Fiji',
            'GS' => 'Geórgia do Sul e Ilhas Sandwich do Sul',
            'GU' => 'Guam',
            'BV' => 'Ilha Bouvet',
            'HM' => 'Ilha Heard e Ilhas McDonald',
            'NF' => 'Ilha Norfolk',
            'CC' => 'Ilhas Coco',
            'CK' => 'Ilhas Cook',
            'MP' => 'Ilhas Marianas do Norte',
            'MH' => 'Ilhas Marshall',
            'UM' => 'Ilhas Menores Distantes dos Estados Unidos',
            'CX' => 'Ilhas Natal',
            'SB' => 'Ilhas Salomão',
            'FM' => 'Micronésia',
            'NR' => 'Nauru',
            'NU' => 'Niue',
            'NC' => 'Nova Caledônia',
            'NZ' => 'Nova Zelândia',
            'PW' => 'Palau',
            'PG' => 'Papua-Nova Guiné',
            'PN' => 'Pitcairn',
            'PF' => 'Polinésia Francesa',
            'KI' => 'Quiribati',
            'WS' => 'Samoa',
            'AS' => 'Samoa Americana',
            'IO' => 'Território Britânico do Oceano Índico',
            'TF' => 'Territórios Franceses do Sul',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TV' => 'Tuvalu',
            'VU' => 'Vanuatu',
            'WF' => 'Wallis e Futuna',
            'AO' => 'Angola',
            'DZ' => 'Argélia',
            'BJ' => 'Benin',
            'BW' => 'Botsuana',
            'BF' => 'Burquina Faso',
            'BI' => 'Burundi',
            'CV' => 'Cabo Verde',
            'TD' => 'Chade',
            'KM' => 'Comores',
            'CG' => 'Congo',
            'CD' => 'Congo-Kinshasa',
            'CI' => 'Costa do Marfim',
            'DJ' => 'Djibuti',
            'EG' => 'Egito',
            'ER' => 'Eritreia',
            'ET' => 'Etiópia',
            'GA' => 'Gabão',
            'GH' => 'Gana',
            'GN' => 'Guiné',
            'GW' => 'Guiné Bissau',
            'GQ' => 'Guiné Equatorial',
            'GM' => 'Gâmbia',
            'LS' => 'Lesoto',
            'LR' => 'Libéria',
            'LY' => 'Líbia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'ML' => 'Mali',
            'MA' => 'Marrocos',
            'MR' => 'Mauritânia',
            'MU' => 'Maurício',
            'YT' => 'Mayotte',
            'MZ' => 'Moçambique',
            'NA' => 'Namíbia',
            'NG' => 'Nigéria',
            'NE' => 'Níger',
            'KE' => 'Quênia',
            'CF' => 'República Centro-Africana',
            'CM' => 'República dos Camarões',
            'RE' => 'Reunião',
            'RW' => 'Ruanda',
            'EH' => 'Saara Ocidental',
            'SH' => 'Santa Helena',
            'SN' => 'Senegal',
            'SL' => 'Serra Leoa',
            'SC' => 'Seychelles',
            'SO' => 'Somália',
            'SZ' => 'Suazilândia',
            'SD' => 'Sudão',
            'ST' => 'São Tomé e Príncipe',
            'TZ' => 'Tanzânia',
            'TG' => 'Togo',
            'TN' => 'Tunísia',
            'UG' => 'Uganda',
            'ZW' => 'Zimbábue',
            'ZM' => 'Zâmbia',
            'ZA' => 'África do Sul',
            'AF' => 'Afeganistão',
            'AM' => 'Armênia',
            'SA' => 'Arábia Saudita',
            'AZ' => 'Azerbaijão',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BN' => 'Brunei',
            'BT' => 'Butão',
            'KH' => 'Camboja',
            'KZ' => 'Casaquistão',
            'QA' => 'Catar',
            'CN' => 'China',
            'SG' => 'Cingapura',
            'KP' => 'Coreia do Norte',
            'KR' => 'Coreia do Sul',
            'AE' => 'Emirados Árabes Unidos',
            'PH' => 'Filipinas',
            'GE' => 'Geórgia',
            'HK' => 'Hong Kong, Região Admin. Especial da China',
            'ID' => 'Indonésia',
            'IQ' => 'Iraque',
            'IR' => 'Irã',
            'IL' => 'Israel',
            'YE' => 'Iêmen',
            'JP' => 'Japão',
            'JO' => 'Jordânia',
            'KW' => 'Kuwait',
            'LB' => 'Líbano',
            'MO' => 'Macau, Região Admin. Especial da China',
            'MV' => 'Maldivas',
            'MY' => 'Malásia',
            'MM' => 'Mianmar',
            'MN' => 'Mongólia',
            'NP' => 'Nepal',
            'OM' => 'Omã',
            'PK' => 'Paquistão',
            'KG' => 'Quirguistão',
            'LA' => 'República Popular Democrática do Laos',
            'LK' => 'Sri Lanka',
            'SY' => 'Síria',
            'TJ' => 'Tadjiquistão',
            'TH' => 'Tailândia',
            'TW' => 'Taiwan',
            'PS' => 'Território da Palestina',
            'TL' => 'Timor Leste',
            'TM' => 'Turcomenistão',
            'TR' => 'Turquia',
            'UZ' => 'Uzbequistão',
            'VN' => 'Vietnã',
            'IN' => 'Índia',
        ];
    }
}
