@extends('layouts.dashboard')
@section('title', 'Identites')
@section('navbar')
    <div class="w-100">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="preferences-tab" data-toggle="tab" href="#preferences" role="tab" aria-controls="preferences" aria-selected="true">Preferences</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="folders-tab" data-toggle="tab" href="#folders" role="tab" aria-controls="folders" aria-selected="false">Folders</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="identities-tab" data-toggle="tab" href="#identities" role="tab" aria-controls="identities" aria-selected="false">Identities</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="responses-tab" data-toggle="tab" href="#responses" role="tab" aria-controls="responses" aria-selected="false">Responses</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="tab-content w-100" id="myTabContent">
        <div class="tab-pane fade show" id="preferences" role="tabpanel" aria-labelledby="preferences-tab">
            <div class="row mt-2" style="height: 80vh">
                <div class="col-md-2">
                    <div class="card mailboxlist-container">
                        <div class="card-header boxtitle">Section</div>
                        <div class="card-body p-0">
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block active"> User Interface</a>
                                </li>
                                <li>
                                    <a href="{{url('/identities/preference-mailbox-view')}}" class="text-decoration-none p-1 border-bottom d-block">Mailbox View</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block">Displaying Messages</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block">Composing Messages</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block">Contacts</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block">Special Folders</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none p-1 border-bottom d-block">Server Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card mailboxlist-container" style="height: 80vh">
                        <div class="card-header boxtitle"> User Interface</div>
                        <div class="card-body overflow-auto">
                            <form action="">
                                <fieldset class="border border-secondary p-2 w-100">
                                    <legend class="text-secondary" style="width: 9%;">Main Options</legend>
                                    <table class="w-100">
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="language" class="m-0">Language</label>
                                            </td>
                                            <td class="w-25">
                                                <select name="language" id="language">
                                                    <option value="sq_AL">Albanian (Shqip)</option>
                                                    <option value="ar_SA">Arabic (Saudi Arabia)</option>
                                                    <option value="ar">Arabic (العربية)</option>
                                                    <option value="hy_AM">Armenian (Հայերեն)</option>
                                                    <option value="ast">Asturiana (Asturianu)</option>
                                                    <option value="az_AZ">Azerbaijani (Azərbaycanca)</option>
                                                    <option value="eu_ES">Basque (Euskara)</option>
                                                    <option value="be_BE">Belarusian (беларуская мова)</option>
                                                    <option value="bn_BD">Bengali (বাংলা)</option>
                                                    <option value="bs_BA">Bosnian (Bosanski)</option>
                                                    <option value="br">Breton (Brezhoneg)</option>
                                                    <option value="bg_BG">Bulgarian (Български)</option>
                                                    <option value="ca_ES">Catalan (Català)</option>
                                                    <option value="zh_TW">Chinese (正體中文)</option>
                                                    <option value="zh_CN">Chinese (简体中文)</option>
                                                    <option value="hr_HR">Croatian (Hrvatski)</option>
                                                    <option value="cs_CZ">Czech (Česky)</option>
                                                    <option value="da_DK">Danish (Dansk)</option>
                                                    <option value="fa_AF">Dari (ﻯﺭﺩ)</option>
                                                    <option value="nl_NL">Dutch (Nederlands)</option>
                                                    <option value="en_CA">English (Canada)</option>
                                                    <option value="en_GB">English (GB)</option>
                                                    <option value="en_US" selected="selected">English (US)</option>
                                                    <option value="eo">Esperanto</option>
                                                    <option value="et_EE">Estonian (Eesti)</option>
                                                    <option value="fo_FO">Faroese (Føroyskt)</option>
                                                    <option value="fi_FI">Finnish (Suomi)</option>
                                                    <option value="nl_BE">Flemish (Vlaams)</option>
                                                    <option value="fr_FR">French (Français)</option>
                                                    <option value="gl_ES">Galician (Galego)</option>
                                                    <option value="ka_GE">Georgian (ქართული)</option>
                                                    <option value="de_DE">German (Deutsch)</option>
                                                    <option value="de_CH">German (Schweiz)</option>
                                                    <option value="el_GR">Greek (Ελληνικά)</option>
                                                    <option value="he_IL">Hebrew (עברית)</option>
                                                    <option value="hi_IN">Hindi (हिनदी)</option>
                                                    <option value="hu_HU">Hungarian (Magyar)</option>
                                                    <option value="is_IS">Icelandic (Íslenska)</option>
                                                    <option value="id_ID">Indonesian (Bahasa Indonesia)</option>
                                                    <option value="ia">Interlingua</option>
                                                    <option value="ga_IE">Irish (Gaedhilge)</option>
                                                    <option value="it_IT">Italian (Italiano)</option>
                                                    <option value="ja_JP">Japanese (日本語)</option>
                                                    <option value="kab">Kabyle (Taqbaylit)</option>
                                                    <option value="km_KH">Khmer (ភាសាខ្មែរ)</option>
                                                    <option value="kn_IN">Konkani (कोंकणी)</option>
                                                    <option value="ko_KR">Korean (한국어)</option>
                                                    <option value="ku">Kurdish (Kurmancî)</option>
                                                    <option value="lv_LV">Latvian (Latviešu)</option>
                                                    <option value="lt_LT">Lithuanian (Lietuviškai)</option>
                                                    <option value="lb_LU">Luxembourgish (Lëtzebuergesch)</option>
                                                    <option value="mk_MK">Macedonian (Македонски)</option>
                                                    <option value="ms_MY">Malay (Bahasa Melayu)</option>
                                                    <option value="ml_IN">Malayalam (മലയാളം)</option>
                                                    <option value="mr_IN">Marathi (मराठी)</option>
                                                    <option value="mn_MN">Mongolic (Монгол)</option>
                                                    <option value="ne_NP">Nepali (नेपाली)</option>
                                                    <option value="nb_NO">Norwegian (Bokmål)</option>
                                                    <option value="nn_NO">Norwegian (Nynorsk)</option>
                                                    <option value="ps">Pashto</option>
                                                    <option value="fa_IR">Persian (فارسی)</option>
                                                    <option value="pl_PL">Polish (Polski)</option>
                                                    <option value="pt_BR">Portuguese (Brasil)</option>
                                                    <option value="pt_PT">Portuguese (Português)</option>
                                                    <option value="ro_RO">Romanian (Româneşte)</option>
                                                    <option value="ru_RU">Russian (Русский)</option>
                                                    <option value="sr_CS">Serbian (Српски)</option>
                                                    <option value="si_LK">Sinhalese (සිංහල)</option>
                                                    <option value="sk_SK">Slovak (Slovenčina)</option>
                                                    <option value="sl_SI">Slovenian (Slovenščina)</option>
                                                    <option value="es_AR">Spanish (Argentina)</option>
                                                    <option value="es_ES">Spanish (Español)</option>
                                                    <option value="es_419">Spanish (Latin America)</option>
                                                    <option value="sv_SE">Swedish (Svenska)</option>
                                                    <option value="tzl">Talossan</option>
                                                    <option value="ta_IN">Tamil (தமிழ்)</option>
                                                    <option value="th_TH">Thai (ไทย)</option>
                                                    <option value="ti">Tigrinya (ትግርኛ)</option>
                                                    <option value="tr_TR">Turkish (Türkçe)</option>
                                                    <option value="uk_UA">Ukrainian (Українська)</option>
                                                    <option value="ur_PK">Urdu (اُردو)</option>
                                                    <option value="uz">Uzbek (Oʻzbekcha)</option>
                                                    <option value="vi_VN">Vietnamese (Tiếng Việt)</option>
                                                    <option value="cy_GB">Welsh (Cymraeg)</option>
                                                    <option value="fy_NL">West Frisian (Frysk)</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="timezone">Time zone</label>
                                            </td>
                                            <td class="w-25">
                                                <select name="timezone" id="timezone">
                                                    <option value="auto" selected="selected">Auto</option>
                                                    <option value="Pacific/Midway">(GMT -11:00) Pacific/Midway</option>
                                                    <option value="Pacific/Niue">(GMT -11:00) Pacific/Niue</option>
                                                    <option value="Pacific/Pago_Pago">(GMT -11:00) Pacific/Pago Pago</option>
                                                    <option value="America/Adak">(GMT -10:00) America/Adak</option>
                                                    <option value="Pacific/Honolulu">(GMT -10:00) Pacific/Honolulu</option>
                                                    <option value="Pacific/Rarotonga">(GMT -10:00) Pacific/Rarotonga</option>
                                                    <option value="Pacific/Tahiti">(GMT -10:00) Pacific/Tahiti</option>
                                                    <option value="Pacific/Marquesas">(GMT -09:30) Pacific/Marquesas</option>
                                                    <option value="America/Anchorage">(GMT -09:00) America/Anchorage</option>
                                                    <option value="America/Juneau">(GMT -09:00) America/Juneau</option>
                                                    <option value="America/Metlakatla">(GMT -09:00) America/Metlakatla</option>
                                                    <option value="America/Nome">(GMT -09:00) America/Nome</option>
                                                    <option value="America/Sitka">(GMT -09:00) America/Sitka</option>
                                                    <option value="America/Yakutat">(GMT -09:00) America/Yakutat</option>
                                                    <option value="Pacific/Gambier">(GMT -09:00) Pacific/Gambier</option>
                                                    <option value="America/Los_Angeles">(GMT -08:00) America/Los Angeles</option>
                                                    <option value="America/Tijuana">(GMT -08:00) America/Tijuana</option>
                                                    <option value="America/Vancouver">(GMT -08:00) America/Vancouver</option>
                                                    <option value="Pacific/Pitcairn">(GMT -08:00) Pacific/Pitcairn</option>
                                                    <option value="America/Boise">(GMT -07:00) America/Boise</option>
                                                    <option value="America/Cambridge_Bay">(GMT -07:00) America/Cambridge Bay</option>
                                                    <option value="America/Chihuahua">(GMT -07:00) America/Chihuahua</option>
                                                    <option value="America/Creston">(GMT -07:00) America/Creston</option>
                                                    <option value="America/Dawson">(GMT -07:00) America/Dawson</option>
                                                    <option value="America/Dawson_Creek">(GMT -07:00) America/Dawson Creek</option>
                                                    <option value="America/Denver">(GMT -07:00) America/Denver</option>
                                                    <option value="America/Edmonton">(GMT -07:00) America/Edmonton</option>
                                                    <option value="America/Fort_Nelson">(GMT -07:00) America/Fort Nelson</option>
                                                    <option value="America/Hermosillo">(GMT -07:00) America/Hermosillo</option>
                                                    <option value="America/Inuvik">(GMT -07:00) America/Inuvik</option>
                                                    <option value="America/Mazatlan">(GMT -07:00) America/Mazatlan</option>
                                                    <option value="America/Ojinaga">(GMT -07:00) America/Ojinaga</option>
                                                    <option value="America/Phoenix">(GMT -07:00) America/Phoenix</option>
                                                    <option value="America/Whitehorse">(GMT -07:00) America/Whitehorse</option>
                                                    <option value="America/Yellowknife">(GMT -07:00) America/Yellowknife</option>
                                                    <option value="America/Bahia_Banderas">(GMT -06:00) America/Bahia Banderas</option>
                                                    <option value="America/Belize">(GMT -06:00) America/Belize</option>
                                                    <option value="America/Chicago">(GMT -06:00) America/Chicago</option>
                                                    <option value="America/Costa_Rica">(GMT -06:00) America/Costa Rica</option>
                                                    <option value="America/El_Salvador">(GMT -06:00) America/El Salvador</option>
                                                    <option value="America/Guatemala">(GMT -06:00) America/Guatemala</option>
                                                    <option value="America/Indiana/Knox">(GMT -06:00) America/Indiana/Knox</option>
                                                    <option value="America/Indiana/Tell_City">(GMT -06:00) America/Indiana/Tell City</option>
                                                    <option value="America/Managua">(GMT -06:00) America/Managua</option>
                                                    <option value="America/Matamoros">(GMT -06:00) America/Matamoros</option>
                                                    <option value="America/Menominee">(GMT -06:00) America/Menominee</option>
                                                    <option value="America/Merida">(GMT -06:00) America/Merida</option>
                                                    <option value="America/Mexico_City">(GMT -06:00) America/Mexico City</option>
                                                    <option value="America/Monterrey">(GMT -06:00) America/Monterrey</option>
                                                    <option value="America/North_Dakota/Beulah">(GMT -06:00) America/North Dakota/Beulah</option>
                                                    <option value="America/North_Dakota/Center">(GMT -06:00) America/North Dakota/Center</option>
                                                    <option value="America/North_Dakota/New_Salem">(GMT -06:00) America/North Dakota/New Salem</option>
                                                    <option value="America/Rainy_River">(GMT -06:00) America/Rainy River</option>
                                                    <option value="America/Rankin_Inlet">(GMT -06:00) America/Rankin Inlet</option>
                                                    <option value="America/Regina">(GMT -06:00) America/Regina</option>
                                                    <option value="America/Resolute">(GMT -06:00) America/Resolute</option>
                                                    <option value="America/Swift_Current">(GMT -06:00) America/Swift Current</option>
                                                    <option value="America/Tegucigalpa">(GMT -06:00) America/Tegucigalpa</option>
                                                    <option value="America/Winnipeg">(GMT -06:00) America/Winnipeg</option>
                                                    <option value="Pacific/Easter">(GMT -06:00) Pacific/Easter</option>
                                                    <option value="Pacific/Galapagos">(GMT -06:00) Pacific/Galapagos</option>
                                                    <option value="America/Atikokan">(GMT -05:00) America/Atikokan</option>
                                                    <option value="America/Bogota">(GMT -05:00) America/Bogota</option>
                                                    <option value="America/Cancun">(GMT -05:00) America/Cancun</option>
                                                    <option value="America/Cayman">(GMT -05:00) America/Cayman</option>
                                                    <option value="America/Detroit">(GMT -05:00) America/Detroit</option>
                                                    <option value="America/Eirunepe">(GMT -05:00) America/Eirunepe</option>
                                                    <option value="America/Grand_Turk">(GMT -05:00) America/Grand Turk</option>
                                                    <option value="America/Guayaquil">(GMT -05:00) America/Guayaquil</option>
                                                    <option value="America/Havana">(GMT -05:00) America/Havana</option>
                                                    <option value="America/Indiana/Indianapolis">(GMT -05:00) America/Indiana/Indianapolis</option>
                                                    <option value="America/Indiana/Marengo">(GMT -05:00) America/Indiana/Marengo</option>
                                                    <option value="America/Indiana/Petersburg">(GMT -05:00) America/Indiana/Petersburg</option>
                                                    <option value="America/Indiana/Vevay">(GMT -05:00) America/Indiana/Vevay</option>
                                                    <option value="America/Indiana/Vincennes">(GMT -05:00) America/Indiana/Vincennes</option>
                                                    <option value="America/Indiana/Winamac">(GMT -05:00) America/Indiana/Winamac</option>
                                                    <option value="America/Iqaluit">(GMT -05:00) America/Iqaluit</option>
                                                    <option value="America/Jamaica">(GMT -05:00) America/Jamaica</option>
                                                    <option value="America/Kentucky/Louisville">(GMT -05:00) America/Kentucky/Louisville</option>
                                                    <option value="America/Kentucky/Monticello">(GMT -05:00) America/Kentucky/Monticello</option>
                                                    <option value="America/Lima">(GMT -05:00) America/Lima</option>
                                                    <option value="America/Nassau">(GMT -05:00) America/Nassau</option>
                                                    <option value="America/New_York">(GMT -05:00) America/New York</option>
                                                    <option value="America/Nipigon">(GMT -05:00) America/Nipigon</option>
                                                    <option value="America/Panama">(GMT -05:00) America/Panama</option>
                                                    <option value="America/Pangnirtung">(GMT -05:00) America/Pangnirtung</option>
                                                    <option value="America/Port-au-Prince">(GMT -05:00) America/Port-au-Prince</option>
                                                    <option value="America/Rio_Branco">(GMT -05:00) America/Rio Branco</option>
                                                    <option value="America/Thunder_Bay">(GMT -05:00) America/Thunder Bay</option>
                                                    <option value="America/Toronto">(GMT -05:00) America/Toronto</option>
                                                    <option value="America/Anguilla">(GMT -04:00) America/Anguilla</option>
                                                    <option value="America/Antigua">(GMT -04:00) America/Antigua</option>
                                                    <option value="America/Aruba">(GMT -04:00) America/Aruba</option>
                                                    <option value="America/Asuncion">(GMT -04:00) America/Asuncion</option>
                                                    <option value="America/Barbados">(GMT -04:00) America/Barbados</option>
                                                    <option value="America/Blanc-Sablon">(GMT -04:00) America/Blanc-Sablon</option>
                                                    <option value="America/Boa_Vista">(GMT -04:00) America/Boa Vista</option>
                                                    <option value="America/Campo_Grande">(GMT -04:00) America/Campo Grande</option>
                                                    <option value="America/Caracas">(GMT -04:00) America/Caracas</option>
                                                    <option value="America/Cuiaba">(GMT -04:00) America/Cuiaba</option>
                                                    <option value="America/Curacao">(GMT -04:00) America/Curacao</option>
                                                    <option value="America/Dominica">(GMT -04:00) America/Dominica</option>
                                                    <option value="America/Glace_Bay">(GMT -04:00) America/Glace Bay</option>
                                                    <option value="America/Goose_Bay">(GMT -04:00) America/Goose Bay</option>
                                                    <option value="America/Grenada">(GMT -04:00) America/Grenada</option>
                                                    <option value="America/Guadeloupe">(GMT -04:00) America/Guadeloupe</option>
                                                    <option value="America/Guyana">(GMT -04:00) America/Guyana</option>
                                                    <option value="America/Halifax">(GMT -04:00) America/Halifax</option>
                                                    <option value="America/Kralendijk">(GMT -04:00) America/Kralendijk</option>
                                                    <option value="America/La_Paz">(GMT -04:00) America/La Paz</option>
                                                    <option value="America/Lower_Princes">(GMT -04:00) America/Lower Princes</option>
                                                    <option value="America/Manaus">(GMT -04:00) America/Manaus</option>
                                                    <option value="America/Marigot">(GMT -04:00) America/Marigot</option>
                                                    <option value="America/Martinique">(GMT -04:00) America/Martinique</option>
                                                    <option value="America/Moncton">(GMT -04:00) America/Moncton</option>
                                                    <option value="America/Montserrat">(GMT -04:00) America/Montserrat</option>
                                                    <option value="America/Port_of_Spain">(GMT -04:00) America/Port of Spain</option>
                                                    <option value="America/Porto_Velho">(GMT -04:00) America/Porto Velho</option>
                                                    <option value="America/Puerto_Rico">(GMT -04:00) America/Puerto Rico</option>
                                                    <option value="America/Santiago">(GMT -04:00) America/Santiago</option>
                                                    <option value="America/Santo_Domingo">(GMT -04:00) America/Santo Domingo</option>
                                                    <option value="America/St_Barthelemy">(GMT -04:00) America/St Barthelemy</option>
                                                    <option value="America/St_Kitts">(GMT -04:00) America/St Kitts</option>
                                                    <option value="America/St_Lucia">(GMT -04:00) America/St Lucia</option>
                                                    <option value="America/St_Thomas">(GMT -04:00) America/St Thomas</option>
                                                    <option value="America/St_Vincent">(GMT -04:00) America/St Vincent</option>
                                                    <option value="America/Thule">(GMT -04:00) America/Thule</option>
                                                    <option value="America/Tortola">(GMT -04:00) America/Tortola</option>
                                                    <option value="Atlantic/Bermuda">(GMT -04:00) Atlantic/Bermuda</option>
                                                    <option value="America/St_Johns">(GMT -03:30) America/St Johns</option>
                                                    <option value="America/Araguaina">(GMT -03:00) America/Araguaina</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT -03:00) America/Argentina/Buenos Aires</option>
                                                    <option value="America/Argentina/Catamarca">(GMT -03:00) America/Argentina/Catamarca</option>
                                                    <option value="America/Argentina/Cordoba">(GMT -03:00) America/Argentina/Cordoba</option>
                                                    <option value="America/Argentina/Jujuy">(GMT -03:00) America/Argentina/Jujuy</option>
                                                    <option value="America/Argentina/La_Rioja">(GMT -03:00) America/Argentina/La Rioja</option>
                                                    <option value="America/Argentina/Mendoza">(GMT -03:00) America/Argentina/Mendoza</option>
                                                    <option value="America/Argentina/Rio_Gallegos">(GMT -03:00) America/Argentina/Rio Gallegos</option>
                                                    <option value="America/Argentina/Salta">(GMT -03:00) America/Argentina/Salta</option>
                                                    <option value="America/Argentina/San_Juan">(GMT -03:00) America/Argentina/San Juan</option>
                                                    <option value="America/Argentina/San_Luis">(GMT -03:00) America/Argentina/San Luis</option>
                                                    <option value="America/Argentina/Tucuman">(GMT -03:00) America/Argentina/Tucuman</option>
                                                    <option value="America/Argentina/Ushuaia">(GMT -03:00) America/Argentina/Ushuaia</option>
                                                    <option value="America/Bahia">(GMT -03:00) America/Bahia</option>
                                                    <option value="America/Belem">(GMT -03:00) America/Belem</option>
                                                    <option value="America/Cayenne">(GMT -03:00) America/Cayenne</option>
                                                    <option value="America/Fortaleza">(GMT -03:00) America/Fortaleza</option>
                                                    <option value="America/Maceio">(GMT -03:00) America/Maceio</option>
                                                    <option value="America/Miquelon">(GMT -03:00) America/Miquelon</option>
                                                    <option value="America/Montevideo">(GMT -03:00) America/Montevideo</option>
                                                    <option value="America/Nuuk">(GMT -03:00) America/Nuuk</option>
                                                    <option value="America/Paramaribo">(GMT -03:00) America/Paramaribo</option>
                                                    <option value="America/Punta_Arenas">(GMT -03:00) America/Punta Arenas</option>
                                                    <option value="America/Recife">(GMT -03:00) America/Recife</option>
                                                    <option value="America/Santarem">(GMT -03:00) America/Santarem</option>
                                                    <option value="America/Sao_Paulo">(GMT -03:00) America/Sao Paulo</option>
                                                    <option value="Antarctica/Palmer">(GMT -03:00) Antarctica/Palmer</option>
                                                    <option value="Antarctica/Rothera">(GMT -03:00) Antarctica/Rothera</option>
                                                    <option value="Atlantic/Stanley">(GMT -03:00) Atlantic/Stanley</option>
                                                    <option value="America/Noronha">(GMT -02:00) America/Noronha</option>
                                                    <option value="Atlantic/South_Georgia">(GMT -02:00) Atlantic/South Georgia</option>
                                                    <option value="America/Scoresbysund">(GMT -01:00) America/Scoresbysund</option>
                                                    <option value="Atlantic/Azores">(GMT -01:00) Atlantic/Azores</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT -01:00) Atlantic/Cape Verde</option>
                                                    <option value="Africa/Abidjan">(GMT +00:00) Africa/Abidjan</option>
                                                    <option value="Africa/Accra">(GMT +00:00) Africa/Accra</option>
                                                    <option value="Africa/Bamako">(GMT +00:00) Africa/Bamako</option>
                                                    <option value="Africa/Banjul">(GMT +00:00) Africa/Banjul</option>
                                                    <option value="Africa/Bissau">(GMT +00:00) Africa/Bissau</option>
                                                    <option value="Africa/Conakry">(GMT +00:00) Africa/Conakry</option>
                                                    <option value="Africa/Dakar">(GMT +00:00) Africa/Dakar</option>
                                                    <option value="Africa/Freetown">(GMT +00:00) Africa/Freetown</option>
                                                    <option value="Africa/Lome">(GMT +00:00) Africa/Lome</option>
                                                    <option value="Africa/Monrovia">(GMT +00:00) Africa/Monrovia</option>
                                                    <option value="Africa/Nouakchott">(GMT +00:00) Africa/Nouakchott</option>
                                                    <option value="Africa/Ouagadougou">(GMT +00:00) Africa/Ouagadougou</option>
                                                    <option value="Africa/Sao_Tome">(GMT +00:00) Africa/Sao Tome</option>
                                                    <option value="America/Danmarkshavn">(GMT +00:00) America/Danmarkshavn</option>
                                                    <option value="Antarctica/Troll">(GMT +00:00) Antarctica/Troll</option>
                                                    <option value="Atlantic/Canary">(GMT +00:00) Atlantic/Canary</option>
                                                    <option value="Atlantic/Faroe">(GMT +00:00) Atlantic/Faroe</option>
                                                    <option value="Atlantic/Madeira">(GMT +00:00) Atlantic/Madeira</option>
                                                    <option value="Atlantic/Reykjavik">(GMT +00:00) Atlantic/Reykjavik</option>
                                                    <option value="Atlantic/St_Helena">(GMT +00:00) Atlantic/St Helena</option>
                                                    <option value="Europe/Guernsey">(GMT +00:00) Europe/Guernsey</option>
                                                    <option value="Europe/Isle_of_Man">(GMT +00:00) Europe/Isle of Man</option>
                                                    <option value="Europe/Jersey">(GMT +00:00) Europe/Jersey</option>
                                                    <option value="Europe/Lisbon">(GMT +00:00) Europe/Lisbon</option>
                                                    <option value="Europe/London">(GMT +00:00) Europe/London</option>
                                                    <option value="UTC">(GMT +00:00) UTC</option>
                                                    <option value="Africa/Algiers">(GMT +01:00) Africa/Algiers</option>
                                                    <option value="Africa/Bangui">(GMT +01:00) Africa/Bangui</option>
                                                    <option value="Africa/Brazzaville">(GMT +01:00) Africa/Brazzaville</option>
                                                    <option value="Africa/Casablanca">(GMT +01:00) Africa/Casablanca</option>
                                                    <option value="Africa/Ceuta">(GMT +01:00) Africa/Ceuta</option>
                                                    <option value="Africa/Douala">(GMT +01:00) Africa/Douala</option>
                                                    <option value="Africa/El_Aaiun">(GMT +01:00) Africa/El Aaiun</option>
                                                    <option value="Africa/Kinshasa">(GMT +01:00) Africa/Kinshasa</option>
                                                    <option value="Africa/Lagos">(GMT +01:00) Africa/Lagos</option>
                                                    <option value="Africa/Libreville">(GMT +01:00) Africa/Libreville</option>
                                                    <option value="Africa/Luanda">(GMT +01:00) Africa/Luanda</option>
                                                    <option value="Africa/Malabo">(GMT +01:00) Africa/Malabo</option>
                                                    <option value="Africa/Ndjamena">(GMT +01:00) Africa/Ndjamena</option>
                                                    <option value="Africa/Niamey">(GMT +01:00) Africa/Niamey</option>
                                                    <option value="Africa/Porto-Novo">(GMT +01:00) Africa/Porto-Novo</option>
                                                    <option value="Africa/Tunis">(GMT +01:00) Africa/Tunis</option>
                                                    <option value="Arctic/Longyearbyen">(GMT +01:00) Arctic/Longyearbyen</option>
                                                    <option value="Europe/Amsterdam">(GMT +01:00) Europe/Amsterdam</option>
                                                    <option value="Europe/Andorra">(GMT +01:00) Europe/Andorra</option>
                                                    <option value="Europe/Belgrade">(GMT +01:00) Europe/Belgrade</option>
                                                    <option value="Europe/Berlin">(GMT +01:00) Europe/Berlin</option>
                                                    <option value="Europe/Bratislava">(GMT +01:00) Europe/Bratislava</option>
                                                    <option value="Europe/Brussels">(GMT +01:00) Europe/Brussels</option>
                                                    <option value="Europe/Budapest">(GMT +01:00) Europe/Budapest</option>
                                                    <option value="Europe/Busingen">(GMT +01:00) Europe/Busingen</option>
                                                    <option value="Europe/Copenhagen">(GMT +01:00) Europe/Copenhagen</option>
                                                    <option value="Europe/Dublin">(GMT +01:00) Europe/Dublin</option>
                                                    <option value="Europe/Gibraltar">(GMT +01:00) Europe/Gibraltar</option>
                                                    <option value="Europe/Ljubljana">(GMT +01:00) Europe/Ljubljana</option>
                                                    <option value="Europe/Luxembourg">(GMT +01:00) Europe/Luxembourg</option>
                                                    <option value="Europe/Madrid">(GMT +01:00) Europe/Madrid</option>
                                                    <option value="Europe/Malta">(GMT +01:00) Europe/Malta</option>
                                                    <option value="Europe/Monaco">(GMT +01:00) Europe/Monaco</option>
                                                    <option value="Europe/Oslo">(GMT +01:00) Europe/Oslo</option>
                                                    <option value="Europe/Paris">(GMT +01:00) Europe/Paris</option>
                                                    <option value="Europe/Podgorica">(GMT +01:00) Europe/Podgorica</option>
                                                    <option value="Europe/Prague">(GMT +01:00) Europe/Prague</option>
                                                    <option value="Europe/Rome">(GMT +01:00) Europe/Rome</option>
                                                    <option value="Europe/San_Marino">(GMT +01:00) Europe/San Marino</option>
                                                    <option value="Europe/Sarajevo">(GMT +01:00) Europe/Sarajevo</option>
                                                    <option value="Europe/Skopje">(GMT +01:00) Europe/Skopje</option>
                                                    <option value="Europe/Stockholm">(GMT +01:00) Europe/Stockholm</option>
                                                    <option value="Europe/Tirane">(GMT +01:00) Europe/Tirane</option>
                                                    <option value="Europe/Vaduz">(GMT +01:00) Europe/Vaduz</option>
                                                    <option value="Europe/Vatican">(GMT +01:00) Europe/Vatican</option>
                                                    <option value="Europe/Vienna">(GMT +01:00) Europe/Vienna</option>
                                                    <option value="Europe/Warsaw">(GMT +01:00) Europe/Warsaw</option>
                                                    <option value="Europe/Zagreb">(GMT +01:00) Europe/Zagreb</option>
                                                    <option value="Europe/Zurich">(GMT +01:00) Europe/Zurich</option>
                                                    <option value="Africa/Blantyre">(GMT +02:00) Africa/Blantyre</option>
                                                    <option value="Africa/Bujumbura">(GMT +02:00) Africa/Bujumbura</option>
                                                    <option value="Africa/Cairo">(GMT +02:00) Africa/Cairo</option>
                                                    <option value="Africa/Gaborone">(GMT +02:00) Africa/Gaborone</option>
                                                    <option value="Africa/Harare">(GMT +02:00) Africa/Harare</option>
                                                    <option value="Africa/Johannesburg">(GMT +02:00) Africa/Johannesburg</option>
                                                    <option value="Africa/Juba">(GMT +02:00) Africa/Juba</option>
                                                    <option value="Africa/Khartoum">(GMT +02:00) Africa/Khartoum</option>
                                                    <option value="Africa/Kigali">(GMT +02:00) Africa/Kigali</option>
                                                    <option value="Africa/Lubumbashi">(GMT +02:00) Africa/Lubumbashi</option>
                                                    <option value="Africa/Lusaka">(GMT +02:00) Africa/Lusaka</option>
                                                    <option value="Africa/Maputo">(GMT +02:00) Africa/Maputo</option>
                                                    <option value="Africa/Maseru">(GMT +02:00) Africa/Maseru</option>
                                                    <option value="Africa/Mbabane">(GMT +02:00) Africa/Mbabane</option>
                                                    <option value="Africa/Tripoli">(GMT +02:00) Africa/Tripoli</option>
                                                    <option value="Africa/Windhoek">(GMT +02:00) Africa/Windhoek</option>
                                                    <option value="Asia/Amman">(GMT +02:00) Asia/Amman</option>
                                                    <option value="Asia/Beirut">(GMT +02:00) Asia/Beirut</option>
                                                    <option value="Asia/Damascus">(GMT +02:00) Asia/Damascus</option>
                                                    <option value="Asia/Famagusta">(GMT +02:00) Asia/Famagusta</option>
                                                    <option value="Asia/Gaza">(GMT +02:00) Asia/Gaza</option>
                                                    <option value="Asia/Hebron">(GMT +02:00) Asia/Hebron</option>
                                                    <option value="Asia/Jerusalem">(GMT +02:00) Asia/Jerusalem</option>
                                                    <option value="Asia/Nicosia">(GMT +02:00) Asia/Nicosia</option>
                                                    <option value="Europe/Athens">(GMT +02:00) Europe/Athens</option>
                                                    <option value="Europe/Bucharest">(GMT +02:00) Europe/Bucharest</option>
                                                    <option value="Europe/Chisinau">(GMT +02:00) Europe/Chisinau</option>
                                                    <option value="Europe/Helsinki">(GMT +02:00) Europe/Helsinki</option>
                                                    <option value="Europe/Kaliningrad">(GMT +02:00) Europe/Kaliningrad</option>
                                                    <option value="Europe/Kiev">(GMT +02:00) Europe/Kiev</option>
                                                    <option value="Europe/Mariehamn">(GMT +02:00) Europe/Mariehamn</option>
                                                    <option value="Europe/Riga">(GMT +02:00) Europe/Riga</option>
                                                    <option value="Europe/Sofia">(GMT +02:00) Europe/Sofia</option>
                                                    <option value="Europe/Tallinn">(GMT +02:00) Europe/Tallinn</option>
                                                    <option value="Europe/Uzhgorod">(GMT +02:00) Europe/Uzhgorod</option>
                                                    <option value="Europe/Vilnius">(GMT +02:00) Europe/Vilnius</option>
                                                    <option value="Europe/Zaporozhye">(GMT +02:00) Europe/Zaporozhye</option>
                                                    <option value="Africa/Addis_Ababa">(GMT +03:00) Africa/Addis Ababa</option>
                                                    <option value="Africa/Asmara">(GMT +03:00) Africa/Asmara</option>
                                                    <option value="Africa/Dar_es_Salaam">(GMT +03:00) Africa/Dar es Salaam</option>
                                                    <option value="Africa/Djibouti">(GMT +03:00) Africa/Djibouti</option>
                                                    <option value="Africa/Kampala">(GMT +03:00) Africa/Kampala</option>
                                                    <option value="Africa/Mogadishu">(GMT +03:00) Africa/Mogadishu</option>
                                                    <option value="Africa/Nairobi">(GMT +03:00) Africa/Nairobi</option>
                                                    <option value="Antarctica/Syowa">(GMT +03:00) Antarctica/Syowa</option>
                                                    <option value="Asia/Aden">(GMT +03:00) Asia/Aden</option>
                                                    <option value="Asia/Baghdad">(GMT +03:00) Asia/Baghdad</option>
                                                    <option value="Asia/Bahrain">(GMT +03:00) Asia/Bahrain</option>
                                                    <option value="Asia/Kuwait">(GMT +03:00) Asia/Kuwait</option>
                                                    <option value="Asia/Qatar">(GMT +03:00) Asia/Qatar</option>
                                                    <option value="Asia/Riyadh">(GMT +03:00) Asia/Riyadh</option>
                                                    <option value="Europe/Istanbul">(GMT +03:00) Europe/Istanbul</option>
                                                    <option value="Europe/Kirov">(GMT +03:00) Europe/Kirov</option>
                                                    <option value="Europe/Minsk">(GMT +03:00) Europe/Minsk</option>
                                                    <option value="Europe/Moscow">(GMT +03:00) Europe/Moscow</option>
                                                    <option value="Europe/Simferopol">(GMT +03:00) Europe/Simferopol</option>
                                                    <option value="Europe/Volgograd">(GMT +03:00) Europe/Volgograd</option>
                                                    <option value="Indian/Antananarivo">(GMT +03:00) Indian/Antananarivo</option>
                                                    <option value="Indian/Comoro">(GMT +03:00) Indian/Comoro</option>
                                                    <option value="Indian/Mayotte">(GMT +03:00) Indian/Mayotte</option>
                                                    <option value="Asia/Tehran">(GMT +03:30) Asia/Tehran</option>
                                                    <option value="Asia/Baku">(GMT +04:00) Asia/Baku</option>
                                                    <option value="Asia/Dubai">(GMT +04:00) Asia/Dubai</option>
                                                    <option value="Asia/Muscat">(GMT +04:00) Asia/Muscat</option>
                                                    <option value="Asia/Tbilisi">(GMT +04:00) Asia/Tbilisi</option>
                                                    <option value="Asia/Yerevan">(GMT +04:00) Asia/Yerevan</option>
                                                    <option value="Europe/Astrakhan">(GMT +04:00) Europe/Astrakhan</option>
                                                    <option value="Europe/Samara">(GMT +04:00) Europe/Samara</option>
                                                    <option value="Europe/Saratov">(GMT +04:00) Europe/Saratov</option>
                                                    <option value="Europe/Ulyanovsk">(GMT +04:00) Europe/Ulyanovsk</option>
                                                    <option value="Indian/Mahe">(GMT +04:00) Indian/Mahe</option>
                                                    <option value="Indian/Mauritius">(GMT +04:00) Indian/Mauritius</option>
                                                    <option value="Indian/Reunion">(GMT +04:00) Indian/Reunion</option>
                                                    <option value="Asia/Kabul">(GMT +04:30) Asia/Kabul</option>
                                                    <option value="Antarctica/Mawson">(GMT +05:00) Antarctica/Mawson</option>
                                                    <option value="Asia/Aqtau">(GMT +05:00) Asia/Aqtau</option>
                                                    <option value="Asia/Aqtobe">(GMT +05:00) Asia/Aqtobe</option>
                                                    <option value="Asia/Ashgabat">(GMT +05:00) Asia/Ashgabat</option>
                                                    <option value="Asia/Atyrau">(GMT +05:00) Asia/Atyrau</option>
                                                    <option value="Asia/Dushanbe">(GMT +05:00) Asia/Dushanbe</option>
                                                    <option value="Asia/Karachi">(GMT +05:00) Asia/Karachi</option>
                                                    <option value="Asia/Oral">(GMT +05:00) Asia/Oral</option>
                                                    <option value="Asia/Qyzylorda">(GMT +05:00) Asia/Qyzylorda</option>
                                                    <option value="Asia/Samarkand">(GMT +05:00) Asia/Samarkand</option>
                                                    <option value="Asia/Tashkent">(GMT +05:00) Asia/Tashkent</option>
                                                    <option value="Asia/Yekaterinburg">(GMT +05:00) Asia/Yekaterinburg</option>
                                                    <option value="Indian/Kerguelen">(GMT +05:00) Indian/Kerguelen</option>
                                                    <option value="Indian/Maldives">(GMT +05:00) Indian/Maldives</option>
                                                    <option value="Asia/Colombo">(GMT +05:30) Asia/Colombo</option>
                                                    <option value="Asia/Kolkata">(GMT +05:30) Asia/Kolkata</option>
                                                    <option value="Asia/Kathmandu">(GMT +05:45) Asia/Kathmandu</option>
                                                    <option value="Antarctica/Vostok">(GMT +06:00) Antarctica/Vostok</option>
                                                    <option value="Asia/Almaty">(GMT +06:00) Asia/Almaty</option>
                                                    <option value="Asia/Bishkek">(GMT +06:00) Asia/Bishkek</option>
                                                    <option value="Asia/Dhaka">(GMT +06:00) Asia/Dhaka</option>
                                                    <option value="Asia/Omsk">(GMT +06:00) Asia/Omsk</option>
                                                    <option value="Asia/Qostanay">(GMT +06:00) Asia/Qostanay</option>
                                                    <option value="Asia/Thimphu">(GMT +06:00) Asia/Thimphu</option>
                                                    <option value="Asia/Urumqi">(GMT +06:00) Asia/Urumqi</option>
                                                    <option value="Indian/Chagos">(GMT +06:00) Indian/Chagos</option>
                                                    <option value="Asia/Yangon">(GMT +06:30) Asia/Yangon</option>
                                                    <option value="Indian/Cocos">(GMT +06:30) Indian/Cocos</option>
                                                    <option value="Antarctica/Davis">(GMT +07:00) Antarctica/Davis</option>
                                                    <option value="Asia/Bangkok">(GMT +07:00) Asia/Bangkok</option>
                                                    <option value="Asia/Barnaul">(GMT +07:00) Asia/Barnaul</option>
                                                    <option value="Asia/Ho_Chi_Minh">(GMT +07:00) Asia/Ho Chi Minh</option>
                                                    <option value="Asia/Hovd">(GMT +07:00) Asia/Hovd</option>
                                                    <option value="Asia/Jakarta">(GMT +07:00) Asia/Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk">(GMT +07:00) Asia/Krasnoyarsk</option>
                                                    <option value="Asia/Novokuznetsk">(GMT +07:00) Asia/Novokuznetsk</option>
                                                    <option value="Asia/Novosibirsk">(GMT +07:00) Asia/Novosibirsk</option>
                                                    <option value="Asia/Phnom_Penh">(GMT +07:00) Asia/Phnom Penh</option>
                                                    <option value="Asia/Pontianak">(GMT +07:00) Asia/Pontianak</option>
                                                    <option value="Asia/Tomsk">(GMT +07:00) Asia/Tomsk</option>
                                                    <option value="Asia/Vientiane">(GMT +07:00) Asia/Vientiane</option>
                                                    <option value="Indian/Christmas">(GMT +07:00) Indian/Christmas</option>
                                                    <option value="Asia/Brunei">(GMT +08:00) Asia/Brunei</option>
                                                    <option value="Asia/Choibalsan">(GMT +08:00) Asia/Choibalsan</option>
                                                    <option value="Asia/Hong_Kong">(GMT +08:00) Asia/Hong Kong</option>
                                                    <option value="Asia/Irkutsk">(GMT +08:00) Asia/Irkutsk</option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT +08:00) Asia/Kuala Lumpur</option>
                                                    <option value="Asia/Kuching">(GMT +08:00) Asia/Kuching</option>
                                                    <option value="Asia/Macau">(GMT +08:00) Asia/Macau</option>
                                                    <option value="Asia/Makassar">(GMT +08:00) Asia/Makassar</option>
                                                    <option value="Asia/Manila">(GMT +08:00) Asia/Manila</option>
                                                    <option value="Asia/Shanghai">(GMT +08:00) Asia/Shanghai</option>
                                                    <option value="Asia/Singapore">(GMT +08:00) Asia/Singapore</option>
                                                    <option value="Asia/Taipei">(GMT +08:00) Asia/Taipei</option>
                                                    <option value="Asia/Ulaanbaatar">(GMT +08:00) Asia/Ulaanbaatar</option>
                                                    <option value="Australia/Perth">(GMT +08:00) Australia/Perth</option>
                                                    <option value="Australia/Eucla">(GMT +08:45) Australia/Eucla</option>
                                                    <option value="Asia/Chita">(GMT +09:00) Asia/Chita</option>
                                                    <option value="Asia/Dili">(GMT +09:00) Asia/Dili</option>
                                                    <option value="Asia/Jayapura">(GMT +09:00) Asia/Jayapura</option>
                                                    <option value="Asia/Khandyga">(GMT +09:00) Asia/Khandyga</option>
                                                    <option value="Asia/Pyongyang">(GMT +09:00) Asia/Pyongyang</option>
                                                    <option value="Asia/Seoul">(GMT +09:00) Asia/Seoul</option>
                                                    <option value="Asia/Tokyo">(GMT +09:00) Asia/Tokyo</option>
                                                    <option value="Asia/Yakutsk">(GMT +09:00) Asia/Yakutsk</option>
                                                    <option value="Pacific/Palau">(GMT +09:00) Pacific/Palau</option>
                                                    <option value="Australia/Adelaide">(GMT +09:30) Australia/Adelaide</option>
                                                    <option value="Australia/Broken_Hill">(GMT +09:30) Australia/Broken Hill</option>
                                                    <option value="Australia/Darwin">(GMT +09:30) Australia/Darwin</option>
                                                    <option value="Antarctica/DumontDUrville">(GMT +10:00) Antarctica/DumontDUrville</option>
                                                    <option value="Antarctica/Macquarie">(GMT +10:00) Antarctica/Macquarie</option>
                                                    <option value="Asia/Ust-Nera">(GMT +10:00) Asia/Ust-Nera</option>
                                                    <option value="Asia/Vladivostok">(GMT +10:00) Asia/Vladivostok</option>
                                                    <option value="Australia/Brisbane">(GMT +10:00) Australia/Brisbane</option>
                                                    <option value="Australia/Hobart">(GMT +10:00) Australia/Hobart</option>
                                                    <option value="Australia/Lindeman">(GMT +10:00) Australia/Lindeman</option>
                                                    <option value="Australia/Melbourne">(GMT +10:00) Australia/Melbourne</option>
                                                    <option value="Australia/Sydney">(GMT +10:00) Australia/Sydney</option>
                                                    <option value="Pacific/Chuuk">(GMT +10:00) Pacific/Chuuk</option>
                                                    <option value="Pacific/Guam">(GMT +10:00) Pacific/Guam</option>
                                                    <option value="Pacific/Port_Moresby">(GMT +10:00) Pacific/Port Moresby</option>
                                                    <option value="Pacific/Saipan">(GMT +10:00) Pacific/Saipan</option>
                                                    <option value="Australia/Lord_Howe">(GMT +10:30) Australia/Lord Howe</option>
                                                    <option value="Antarctica/Casey">(GMT +11:00) Antarctica/Casey</option>
                                                    <option value="Asia/Magadan">(GMT +11:00) Asia/Magadan</option>
                                                    <option value="Asia/Sakhalin">(GMT +11:00) Asia/Sakhalin</option>
                                                    <option value="Asia/Srednekolymsk">(GMT +11:00) Asia/Srednekolymsk</option>
                                                    <option value="Pacific/Bougainville">(GMT +11:00) Pacific/Bougainville</option>
                                                    <option value="Pacific/Efate">(GMT +11:00) Pacific/Efate</option>
                                                    <option value="Pacific/Guadalcanal">(GMT +11:00) Pacific/Guadalcanal</option>
                                                    <option value="Pacific/Kosrae">(GMT +11:00) Pacific/Kosrae</option>
                                                    <option value="Pacific/Norfolk">(GMT +11:00) Pacific/Norfolk</option>
                                                    <option value="Pacific/Noumea">(GMT +11:00) Pacific/Noumea</option>
                                                    <option value="Pacific/Pohnpei">(GMT +11:00) Pacific/Pohnpei</option>
                                                    <option value="Antarctica/McMurdo">(GMT +12:00) Antarctica/McMurdo</option>
                                                    <option value="Asia/Anadyr">(GMT +12:00) Asia/Anadyr</option>
                                                    <option value="Asia/Kamchatka">(GMT +12:00) Asia/Kamchatka</option>
                                                    <option value="Pacific/Auckland">(GMT +12:00) Pacific/Auckland</option>
                                                    <option value="Pacific/Fiji">(GMT +12:00) Pacific/Fiji</option>
                                                    <option value="Pacific/Funafuti">(GMT +12:00) Pacific/Funafuti</option>
                                                    <option value="Pacific/Kwajalein">(GMT +12:00) Pacific/Kwajalein</option>
                                                    <option value="Pacific/Majuro">(GMT +12:00) Pacific/Majuro</option>
                                                    <option value="Pacific/Nauru">(GMT +12:00) Pacific/Nauru</option>
                                                    <option value="Pacific/Tarawa">(GMT +12:00) Pacific/Tarawa</option>
                                                    <option value="Pacific/Wake">(GMT +12:00) Pacific/Wake</option>
                                                    <option value="Pacific/Wallis">(GMT +12:00) Pacific/Wallis</option>
                                                    <option value="Pacific/Chatham">(GMT +12:45) Pacific/Chatham</option>
                                                    <option value="Pacific/Apia">(GMT +13:00) Pacific/Apia</option>
                                                    <option value="Pacific/Enderbury">(GMT +13:00) Pacific/Enderbury</option>
                                                    <option value="Pacific/Fakaofo">(GMT +13:00) Pacific/Fakaofo</option>
                                                    <option value="Pacific/Tongatapu">(GMT +13:00) Pacific/Tongatapu</option>
                                                    <option value="Pacific/Kiritimati">(GMT +14:00) Pacific/Kiritimati</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="time_formate">Time format</label>
                                            </td>
                                            <td>
                                                <select name="time_formate" id="time_formate">
                                                    <option value="G:i">7:30</option>
                                                    <option value="H:i" selected="selected">07:30</option>
                                                    <option value="g:i a">7:30 am</option>
                                                    <option value="h:i A">07:30 AM</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="date_formate">Date format</label>
                                            </td>
                                            <td>
                                                <select name="date_formate" id="date_formate">
                                                    <option value="Y-m-d" selected="selected">2021-07-24</option>
                                                    <option value="Y/m/d">2021/07/24</option>
                                                    <option value="Y.m.d">2021.07.24</option>
                                                    <option value="d-m-Y">24-07-2021</option>
                                                    <option value="d/m/Y">24/07/2021</option>
                                                    <option value="d.m.Y">24.07.2021</option>
                                                    <option value="j.n.Y">24.7.2021</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="pretty_dates">Pretty dates</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="pretty_dates" id="pretty_dates">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="display_next_list">Display next list entry after delete/move</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="display_next_list" id="display_next_list">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="header-title w-2">
                                                <label for="refresh">Refresh (check for new messages, etc.)</label>
                                            </td>
                                            <td>
                                                <select name="refresh" id="refresh">
                                                    <option value="0">never</option>
                                                    <option value="1" selected="selected">every 1 minute(s)</option>
                                                    <option value="3">every 3 minute(s)</option>
                                                    <option value="5">every 5 minute(s)</option>
                                                    <option value="10">every 10 minute(s)</option>
                                                    <option value="15">every 15 minute(s)</option>
                                                    <option value="30">every 30 minute(s)</option>
                                                    <option value="60">every 60 minute(s)</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <fieldset class="border border-secondary p-2 w-100 mt-2">
                                    <legend class="text-secondary" style="width: 9%;">Interface skin</legend>
                                    <table class="w-100">
                                        <tr>
                                            <td>
                                                <label for="clasic" class="d-inline-block my-1 align-middle ">
                                                    <span class="float-left px-1 align-middle"><input type="radio" name="interface_skin" class="align-middle" id="clasic"></span>
                                                    <span class="float-left px-1 align-middle"><img src="{{asset('public/assets/images/clasic_thumbnail.png')}}" class="border border-dark"></span>
                                                    <span class="float-left px-1 align-middle">
                                                        <span class="font-weight-bold">Clasic</span><br>
                                                        <span>by The Roundcube Dev Team</span><br>
                                                        <span class="font-italic text-secondary">License: Creative Commons Attribution-ShareAlike</span>
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="clasic" class="d-inline-block my-1 align-middle">
                                                    <span class="float-left px-1 align-middle"><input type="radio" name="interface_skin" class="align-middle" id="clasic"></span>
                                                    <span class="float-left px-1 align-middle"><img src="{{asset('public/assets/images/elastic_thumbnail.png')}}" class="border border-dark"></span>
                                                    <span class="float-left px-1 align-middle">
                                                        <span class="font-weight-bold">Elastic</span><br>
                                                        <span>by Aleksander Machniak</span><br>
                                                        <span class="font-italic text-secondary">License: Creative Commons Attribution-ShareAlike</span>
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="clasic" class="d-inline-block my-1 align-middle">
                                                    <span class="float-left px-1 align-middle"><input type="radio" name="interface_skin" class="align-middle" id="clasic"></span>
                                                    <span class="float-left px-1 align-middle"><img src="{{asset('public/assets/images/larry_thumbnail.png')}}" class="border border-dark"></span>
                                                    <span class="float-left px-1 align-middle">
                                                        <span class="font-weight-bold">Larry</span><br>
                                                        <span>by FLINT / Büro für Gestaltung, Switzerland</span><br>
                                                        <span class="font-italic text-secondary">License: Creative Commons Attribution-ShareAlike</span>
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <fieldset class="border border-secondary p-2 w-100 mt-2">
                                    <legend class="text-secondary" style="width: 11%;">Browser Options</legend>
                                    <label for="handle_popups">Handle popups as standard windows <input type="checkbox" name=""
                                                                                           id="handle_popups"></label><br>
                                    <a href="" class="text-underline"><u>Register protocol handler for mailto: links</u></a>
                                </fieldset>
                                <input type="submit" value="Save" class="px-2 mt-2 font-weight-bold">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="folders" role="tabpanel" aria-labelledby="folders-tab">
            Folders
        </div>
        <div class="tab-pane fade show active" id="identities" role="tabpanel" aria-labelledby="identities-tab">
            <div class="row mt-2" style="height: 80vh">
                <div class="col-md-3">
                    <div class="card mailboxlist-container" style="bottom: 0px; height: 100%">
                        <div class="card-header boxtitle">Identities</div>
                        <div class="card-body p-0">
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-decoration-none px-1 border-bottom d-block active"> < tellpe@tellpe.com ></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer p-0">
                            <a href="{{url('/add-new-identity')}}" class="py-1 px-2 d-inline-block border-right border-dark" title="Create new identity">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a href="" class="py-1 px-2 d-inline-block border-right border-secondary text-secondary" title="Delete">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mailboxlist-container">
                        <div class="card-header boxtitle">Edit identities</div>
                        <div class="card-body">
                            <ul class="nav nav-tabs border-dark" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0 active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="true">Settings</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0" id="signature-tab" data-toggle="tab" href="#signature" role="tab" aria-controls="signature" aria-selected="false">Signature</a>
                                </li>
                            </ul>
                            <form action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active border border-top-0 border-dark p-2" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <table class="w-100">
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="display_name" class="p-0 m-0">Display Name</label></td>
                                            <td>
                                                <input type="text" class="w-25" id="display_name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="email" class="p-0 m-0">Email</label></td>
                                            <td>
                                                <input type="email" class="w-25" id="email" value="tellpe@tellpe.com">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="organization" class="p-0 m-0">Organization</label></td>
                                            <td>
                                                <input type="text" class="w-25" id="organization">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="reply-to" class="p-0 m-0">Reply-To</label></td>
                                            <td>
                                                <input type="text" class="w-25" id="reply-to">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="bcc" class="p-0 m-0">Bcc</label></td>
                                            <td>
                                                <input type="text" class="w-25" id="bcc">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="set-default" class="p-0 m-0">Set default</label></td>
                                            <td>
                                                <input type="checkbox" id="set-default">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade show border border-top-0 border-dark p-2" id="signature" role="tabpanel" aria-labelledby="signature-tab">
                                    <table class="w-100">
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="signature" class="p-0 m-0">Signature</label></td>
                                            <td>
                                                <textarea name="" id="signature" class="w-100 overflow-auto hei" rows="4">

BFIN GROUP PLC.
Reg. n° 12070052
England & Wales
(HEAD OFFICE FINANCIAL MANAGEMENT)
                                                </textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="html-signature" class="p-0 m-0">HTML signature</label></td>
                                            <td>
                                                <input type="checkbox" id="html-signature">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                                <input type="submit" class="px-2 mt-3 font-weight-bold" value="Save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="responses" role="tabpanel" aria-labelledby="responses-tab">
            responses
        </div>
        <div class="tab-pane fade show" id="about" role="tabpanel" aria-labelledby="about-tab">
            about
        </div>
    </div>
@endsection
