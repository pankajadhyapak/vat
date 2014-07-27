<?php





function formErrorClass($errors, $inputName)
{

    if($errors->has($inputName)) return 'has-error';

    if( (count($errors->all()) > 0) && !($errors->has($inputName)) ) return 'has-success';

    return '';
}

function lastLoggedIn()
{
    return Auth::user()->last_logged_in->diffForHumans();
}

Form::macro('country', function($name)
{
    return Form::select($name ,[''=>'Select Country','Afghanistan'=>'Afghanistan','Albania'=>'Albania','Algeria'=>'Algeria','Andorra'=>'Andorra','Angola'=>'Angola','Antigua & Deps'=>'Antigua & Deps','Argentina'=>'Argentina','Armenia'=>'Armenia','Australia'=>'Australia','Austria'=>'Austria','Azerbaijan'=>'Azerbaijan','Bahamas'=>'Bahamas','Bahrain'=>'Bahrain','Bangladesh'=>'Bangladesh','Barbados'=>'Barbados','Belarus'=>'Belarus','Belgium'=>'Belgium','Belize'=>'Belize','Benin'=>'Benin','Bhutan'=>'Bhutan','Bolivia'=>'Bolivia','Bosnia Herzegovina'=>'Bosnia Herzegovina','Botswana'=>'Botswana','Brazil'=>'Brazil','Brunei'=>'Brunei','Bulgaria'=>'Bulgaria','Burkina'=>'Burkina','Burundi'=>'Burundi','Cambodia'=>'Cambodia','Cameroon'=>'Cameroon','Canada'=>'Canada','Cape Verde'=>'Cape Verde','Central African Rep'=>'Central African Rep','Chad'=>'Chad','Chile'=>'Chile','China'=>'China','Colombia'=>'Colombia','Comoros'=>'Comoros','Congo'=>'Congo','Congo {Democratic Rep}'=>'Congo {Democratic Rep}','Costa Rica'=>'Costa Rica','Croatia'=>'Croatia','Cuba'=>'Cuba','Cyprus'=>'Cyprus','Czech Republic'=>'Czech Republic','Denmark'=>'Denmark','Djibouti'=>'Djibouti','Dominica'=>'Dominica','Dominican Republic'=>'Dominican Republic','East Timor'=>'East Timor','Ecuador'=>'Ecuador','Egypt'=>'Egypt','El Salvador'=>'El Salvador','Equatorial Guinea'=>'Equatorial Guinea','Eritrea'=>'Eritrea','Estonia'=>'Estonia','Ethiopia'=>'Ethiopia','Fiji'=>'Fiji','Finland'=>'Finland','France'=>'France','Gabon'=>'Gabon','Gambia'=>'Gambia','Georgia'=>'Georgia','Germany'=>'Germany','Ghana'=>'Ghana','Greece'=>'Greece','Grenada'=>'Grenada','Guatemala'=>'Guatemala','Guinea'=>'Guinea','Guinea-Bissau'=>'Guinea-Bissau','Guyana'=>'Guyana','Haiti'=>'Haiti','Honduras'=>'Honduras','Hungary'=>'Hungary','Iceland'=>'Iceland','India'=>'India','Indonesia'=>'Indonesia','Iran'=>'Iran','Iraq'=>'Iraq','Ireland {Republic}'=>'Ireland {Republic}','Israel'=>'Israel','Italy'=>'Italy','Ivory Coast'=>'Ivory Coast','Jamaica'=>'Jamaica','Japan'=>'Japan','Jordan'=>'Jordan','Kazakhstan'=>'Kazakhstan','Kenya'=>'Kenya','Kiribati'=>'Kiribati','Korea North'=>'Korea North','Korea South'=>'Korea South','Kosovo'=>'Kosovo','Kuwait'=>'Kuwait','Kyrgyzstan'=>'Kyrgyzstan','Laos'=>'Laos','Latvia'=>'Latvia','Lebanon'=>'Lebanon','Lesotho'=>'Lesotho','Liberia'=>'Liberia','Libya'=>'Libya','Liechtenstein'=>'Liechtenstein','Lithuania'=>'Lithuania','Luxembourg'=>'Luxembourg','Macedonia'=>'Macedonia','Madagascar'=>'Madagascar','Malawi'=>'Malawi','Malaysia'=>'Malaysia','Maldives'=>'Maldives','Mali'=>'Mali','Malta'=>'Malta','Marshall Islands'=>'Marshall Islands','Mauritania'=>'Mauritania','Mauritius'=>'Mauritius','Mexico'=>'Mexico','Micronesia'=>'Micronesia','Moldova'=>'Moldova','Monaco'=>'Monaco','Mongolia'=>'Mongolia','Montenegro'=>'Montenegro','Morocco'=>'Morocco','Mozambique'=>'Mozambique','Myanmar, {Burma}'=>'Myanmar, {Burma}','Namibia'=>'Namibia','Nauru'=>'Nauru','Nepal'=>'Nepal','Netherlands'=>'Netherlands','New Zealand'=>'New Zealand','Nicaragua'=>'Nicaragua','Niger'=>'Niger','Nigeria'=>'Nigeria','Norway'=>'Norway','Oman'=>'Oman','Pakistan'=>'Pakistan','Palau'=>'Palau','Panama'=>'Panama','Papua New Guinea'=>'Papua New Guinea','Paraguay'=>'Paraguay','Peru'=>'Peru','Philippines'=>'Philippines','Poland'=>'Poland','Portugal'=>'Portugal','Qatar'=>'Qatar','Romania'=>'Romania','Russian Federation'=>'Russian Federation','Rwanda'=>'Rwanda','St Kitts & Nevis'=>'St Kitts & Nevis','St Lucia'=>'St Lucia','Saint Vincent & the Grenadines'=>'Saint Vincent & the Grenadines','Samoa'=>'Samoa','San Marino'=>'San Marino','Sao Tome & Principe'=>'Sao Tome & Principe','Saudi Arabia'=>'Saudi Arabia','Senegal'=>'Senegal','Serbia'=>'Serbia','Seychelles'=>'Seychelles','Sierra Leone'=>'Sierra Leone','Singapore'=>'Singapore','Slovakia'=>'Slovakia','Slovenia'=>'Slovenia','Solomon Islands'=>'Solomon Islands','Somalia'=>'Somalia','South Africa'=>'South Africa','South Sudan'=>'South Sudan','Spain'=>'Spain','Sri Lanka'=>'Sri Lanka','Sudan'=>'Sudan','Suriname'=>'Suriname','Swaziland'=>'Swaziland','Sweden'=>'Sweden','Switzerland'=>'Switzerland','Syria'=>'Syria','Taiwan'=>'Taiwan','Tajikistan'=>'Tajikistan','Tanzania'=>'Tanzania','Thailand'=>'Thailand','Togo'=>'Togo','Tonga'=>'Tonga','Trinidad & Tobago'=>'Trinidad & Tobago','Tunisia'=>'Tunisia','Turkey'=>'Turkey','Turkmenistan'=>'Turkmenistan','Tuvalu'=>'Tuvalu','Uganda'=>'Uganda','Ukraine'=>'Ukraine','United Arab Emirates'=>'United Arab Emirates','United Kingdom'=>'United Kingdom','United States'=>'United States','Uruguay'=>'Uruguay','Uzbekistan'=>'Uzbekistan','Vanuatu'=>'Vanuatu','Vatican City'=>'Vatican City','Venezuela'=>'Venezuela','Vietnam'=>'Vietnam','Yemen'=>'Yemen','Zambia'=>'Zambia','Zimbabwe'=>'Zimbabwe'],'India',['class'=>'form-control']);
});

Form::macro('FormType', function($name)
{
    return Form::select($name ,[''=>'Select Form Type','C-form' => 'C-form', 'C form for E1/E2 purchases' => 'C form for E1/E2 purchases','without CST from'=>'without CST from','F- Form'=>'F- Form','H-Form'=>'H-Form','E1 form'=>'E1 form','E2 form'=>'E2 form','import'=>'import','other'=>'other'],null,['class'=>'form-control']);
});

Form::macro('main_commodity', function()
{
    $options = ' <select name="main_commodity" id="main_commodity" class="form-control">
					<option selected="selected" value="1.00">	ADHESIVES OF ALL KINDS	</option>
					<option value="7.00">	AERO/JET PLANES, HELICAOPTERS AND OTHER FLYING MACHINES/PARTS	</option>
					<option value="2.00">	AGRICULTURAL AND  HORTICULTURAL IMPLEMENTS  	</option>
					<option value="3.00">	ANIMAL AND ITS PRODUCTS	</option>
					<option value="4.00">	ARECANUT IN ALL FORMS	</option>
					<option value="5.00">	ARMS AND EXPLOSIVES	</option>
					<option value="6.00">	AUDIO, MUSIC AND VIDEO SYSTEMS/EQUIPMENTS/PARTS/CDS/CASSETTES/TAPES	</option>
					<option value="55.00">	AUTOMOBILES/MOTOR VEHICLES OF ALL KINDS AND PARTS THEREOF	</option>
					<option value="8.00">	BABY FOODS AND FOOD SUPPLEMENTS	</option>
					<option value="9.00">	BAKERY PRODUCTS AND CONFECTIONERY	</option>
					<option value="10.00">	BATTERIES OF ALL KINDS AND PARTS	</option>
					<option value="11.00">	BICYCLES AND PARTS	</option>
					<option value="12.00">	BISCUITS	</option>
					<option value="13.00">	BRICKS AND TILES OF ALL KINDS	</option>
					<option value="80.01">	CARDAMOM	</option>
					<option value="14.00">	CARPETS	</option>
					<option value="26.01">	CASHEW	</option>
					<option value="15.00">	CEMENT AND ITS PRODUCTS  AND MIXTURES	</option>
					<option value="16.00">	CEREALS AND PULSES	</option>
					<option value="17.00">	CHEMICALS 	</option>
					<option value="18.00">	COAL AND COKE	</option>
					<option value="60.01">	COCONUT,COPRA AND DESICCATED COPRA	</option>
					<option value="19.00">	COFFEE SEEDS AND COFFEE	</option>
					<option value="20.00">	COIR PRODUCTS	</option>
					<option value="21.00">	COMPUTER OF ALL KINDS, PERIPHERALS,CONSUMABLES AND SOFTWARE	</option>
					<option value="22.00">	COOLING SYSTEMS AND PARTS	</option>
					<option value="23.00">	COTTON OF ALL KINDS	</option>
					<option value="24.00">	DAIRY PRODUCTS	</option>
					<option value="25.00">	DIESEL ENGINES AND PARTS	</option>
					<option value="26.00">	DRY FRUITS OTHER THAN CASHEW	</option>
					<option value="27.00">	EDIBLE OILS INCLUDING VANASPATHI	</option>
					<option value="28.00">	ELECTRICAL GOODS OF ALL KINDS (HOME/INDUSTRIAL)	</option>
					<option value="29.00">	ELECTRONIC GOODS	</option>
					<option value="30.00">	FERTILIZERS AND AGRO CHEMICALS	</option>
					<option value="31.00">	FIBRE GLASS AND ITS ARTICLES	</option>
					<option value="32.00">	FIRE FIGHTING EQUIPMENTS	</option>
					<option value="33.00">	FIREWORKS	</option>
					<option value="34.00">	FOOD AND DRINKS	</option>
					<option value="35.00">	FOOTWEAR OF ALL KINDS AND ACCESSORIES	</option>
					<option value="36.00">	FOREST PRODUCES	</option>
					<option value="37.00">	FURNITURE OF ALL KINDS	</option>
					<option value="38.00">	GLASS AND GLASS ARTICLES	</option>
					<option value="83.01">	GRANITE BLOCKS,SLABS AND TILES	</option>
					<option value="39.00">	HANDICRAFTS OF METALS  AND IVORY AND SANDALWOOD ARTICLES	</option>
					<option value="40.00">	HARDWARE AND PAINTS	</option>
					<option value="41.00">	ICE CREAM AND ICE	</option>
					<option value="42.00">	INCENSE STICKS	</option>
					<option value="43.00">	INDUSTRIAL GASES	</option>
					<option value="44.00">	IRON AND STEEL AND ITEMS THEREOF	</option>
					<option value="45.00">	JAGGERY	</option>
					<option value="46.00">	JEWELLERY AND ALL KINDS OF ARTICLES OF GOLD, SLIVER, PLATINUM	</option>
					<option value="47.00">	KITCHEN-WARE (STOVES, FLASKS, CHINAWARE, CUTLERY, ETC)	</option>
					<option value="48.00">	LEASING OF GOODS OF ALL KINDS	</option>
					<option value="49.00">	LEATHER GOODS OF ALL KINDS EXCLUDING FOOTWEAR	</option>
					<option value="50.00">	LIFTS AND ELEVATORS	</option>
					<option value="51.00">	LOCOMOTIVES AND PARTS THEREOF	</option>
					<option value="52.00">	MACHINERY AND PARTS	</option>
					<option value="83.00">	MARBLES , SLABS AND TILES	</option>
					<option value="53.00">	MEDICINAL AND PHARMACEUTICAL PREPARATIONS , EQUIPMENTS  	</option>
					<option value="54.00">	MINERALS AND  ORES 	</option>
					<option value="56.00">	MUSICAL INSTRUMENTS	</option>
					<option value="57.00">	NARCOTICS	</option>
					<option value="58.00">	NON-EDIBLE OIL	</option>
					<option value="59.00">	NON-FERROUS METALS (ALUMINIUM, BRONZE, COPPER, BRASS, ZINC, LEAD, MERCURY) AND THEIR PRODUCTS	</option>
					<option value="60.00">	OIL SEEDS AND OIL CAKE	</option>
					<option value="61.00">	OPTICAL GOODS (BINACULARS, SPECTACLES, SUNGLASSES, MICRO/TELE SCOPES)	</option>
					<option value="99.99">	OTHERS	</option>
					<option value="62.00">	PACKING MATERIALS	</option>
					<option value="63.00">	PAPER  IN ALL FORMS AND PAPER WASTE	</option>
					<option value="80.02">	PEPPER	</option>
					<option value="64.00">	PETROLEUM PRODUCTS	</option>
					<option value="65.00">	PHOTO, FILMS, CAMERAS AND THEIR PARTS, PHOTO/CINEMATOGRAPHIC GOODS	</option>
					<option value="66.00">	PIPES AND FITTINGS	</option>
					<option value="67.00">	PLASTIC ARTICLES 	</option>
					<option value="68.00">	PLYWOOD AND OTHER SHEETS , BOARDS	</option>
					<option value="69.00">	PRINTED MATERIALS	</option>
					<option value="70.00">	PUMPS, PUMPSETS AND PARTS	</option>
					<option value="71.00">	READYMADE GARMENTS, TEXTILE MADE   UPs AND HOSIERY 	</option>
					<option value="72.00">	RECTIFIED SPIRIT AND OTHERS 	</option>
					<option value="73.00">	RENEWABLE ENERGY DEVICES AND BIO-FUELS 	</option>
					<option value="74.00">	ROOFING MATERIALS	</option>
					<option value="75.00">	RUBBER ARTICLES	</option>
					<option value="76.00">	SAND	</option>
					<option value="77.00">	SANITARY GOODS AND FITTINGS	</option>
					<option value="44.01">	SCRAP OF FERROUS AND NON-FERROUS METALS	</option>
					<option value="79.00">	SHIIPS AND BOATS	</option>
					<option value="78.00">	SIGN BOARDS AND HOARDINGS	</option>
					<option value="80.00">	SPICES	</option>
					<option value="81.00">	SPORTS GOODS	</option>
					<option value="82.00">	STATIONERY ARTICLES	</option>
					<option value="84.00">	SUGAR AND SUGARCANE	</option>
					<option value="85.00">	TEA	</option>
					<option value="86.00">	TELEPHONES	</option>
					<option value="87.00">	TEXTILES AND FABRICS	</option>
					<option value="88.00">	TIMBER AND WOOD	</option>
					<option value="89.00">	TOBACCO AND ITS PRODUCTS	</option>
					<option value="90.00">	TOILET ARTICLES	</option>
					<option value="91.00">	TOYS OF ALL KINDS	</option>
					<option value="92.00">	WATCHES AND CLOCKS	</option>
					<option value="93.00">	WEIGHTS AND MEASURES	</option>
					<option value="94.00">	WORKS CONTRACT	</option>
					<option value="95.00">	YARN	</option>

				</select>
';

    return $options;
});
Form::macro('PurposeType', function($name)
{
    $options = "<select name='$name' id='$name' class='form-control'>
                	<option value='1'>	RESALE	</option>
					<option value='2''>	USE IN MANUFACTURE/PROCRSSING OF GOODS FOR </option>
					<option value='3'>	USE IN MINING</option>
					<option value='4'>	USE IN GENERATION/DISTRIBUTION OF POWER</option>
					<option value='5''>	PACKING OF GOODS FOR SALE/RESALE</option>
					<option value='6'>	IN THE TELECOMMUNICATION NETWORK </option>
					<option value='7'>  FOR PACKING OF ANY CONTAINER/GOODS </option>
				</select>";
    return $options;
});

//function isValidToView($id = null)
//{
//    if(Auth::guest()) return Redirect::to('/login');
//
//    if(Auth::check()){
//
//    }
//}