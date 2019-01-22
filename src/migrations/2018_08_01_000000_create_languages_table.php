<?php

use Cubitworx\Laravel\Languages\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('languages', function (Blueprint $table) {
			$table->increments('id');

			$table->string('code_3', 3); // ISO 639-3 code
			$table->string('name');

			$table->boolean('active')->default(0);
			$table->string('code_2', 2); // ISO 639-1 code
			$table->string('native_name');

			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();

			$table->unique('code_3');
			$table->index('code_2');
			$table->index('active');
		});

		$this->_languagesUp();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('languages');
	}

	protected function _languagesUp() {
		// TODO Fully implement code_3. Still a lot of them as code_2
		Model\Language::insert([
			['code_2'=>'ab', 'code_3'=>'ab', 'name'=>'Abkhaz', 'native_name'=>'аҧсуа', 'active'=>0],
			['code_2'=>'aa', 'code_3'=>'aa', 'name'=>'Afar', 'native_name'=>'Afaraf', 'active'=>0],
			['code_2'=>'af', 'code_3'=>'af', 'name'=>'Afrikaans', 'native_name'=>'Afrikaans', 'active'=>0],
			['code_2'=>'ak', 'code_3'=>'ak', 'name'=>'Akan', 'native_name'=>'Akan', 'active'=>0],
			['code_2'=>'sq', 'code_3'=>'sq', 'name'=>'Albanian', 'native_name'=>'Shqip', 'active'=>0],
			['code_2'=>'am', 'code_3'=>'am', 'name'=>'Amharic', 'native_name'=>'አማርኛ', 'active'=>0],
			['code_2'=>'ar', 'code_3'=>'ara', 'name'=>'Arabic', 'native_name'=>'العربية', 'active'=>0],
			['code_2'=>'an', 'code_3'=>'an', 'name'=>'Aragonese', 'native_name'=>'Aragonés', 'active'=>0],
			['code_2'=>'hy', 'code_3'=>'hy', 'name'=>'Armenian', 'native_name'=>'Հայերեն', 'active'=>0],
			['code_2'=>'as', 'code_3'=>'as', 'name'=>'Assamese', 'native_name'=>'অসমীয়া', 'active'=>0],
			['code_2'=>'av', 'code_3'=>'av', 'name'=>'Avaric', 'native_name'=>'авар мацӀ, магӀарул мацӀ', 'active'=>0],
			['code_2'=>'ae', 'code_3'=>'ae', 'name'=>'Avestan', 'native_name'=>'avesta', 'active'=>0],
			['code_2'=>'ay', 'code_3'=>'ay', 'name'=>'Aymara', 'native_name'=>'aymar aru', 'active'=>0],
			['code_2'=>'az', 'code_3'=>'az', 'name'=>'Azerbaijani', 'native_name'=>'azərbaycan dili', 'active'=>0],
			['code_2'=>'bm', 'code_3'=>'bm', 'name'=>'Bambara', 'native_name'=>'bamanankan', 'active'=>0],
			['code_2'=>'ba', 'code_3'=>'ba', 'name'=>'Bashkir', 'native_name'=>'башҡорт теле', 'active'=>0],
			['code_2'=>'eu', 'code_3'=>'eu', 'name'=>'Basque', 'native_name'=>'euskara, euskera', 'active'=>0],
			['code_2'=>'be', 'code_3'=>'be', 'name'=>'Belarusian', 'native_name'=>'Беларуская', 'active'=>0],
			['code_2'=>'bn', 'code_3'=>'bn', 'name'=>'Bengali', 'native_name'=>'বাংলা', 'active'=>0],
			['code_2'=>'bh', 'code_3'=>'bh', 'name'=>'Bihari', 'native_name'=>'भोजपुरी', 'active'=>0],
			['code_2'=>'bi', 'code_3'=>'bi', 'name'=>'Bislama', 'native_name'=>'Bislama', 'active'=>0],
			['code_2'=>'bs', 'code_3'=>'bs', 'name'=>'Bosnian', 'native_name'=>'bosanski jezik', 'active'=>0],
			['code_2'=>'br', 'code_3'=>'br', 'name'=>'Breton', 'native_name'=>'brezhoneg', 'active'=>0],
			['code_2'=>'bg', 'code_3'=>'bul', 'name'=>'Bulgarian', 'native_name'=>'български език', 'active'=>0],
			['code_2'=>'my', 'code_3'=>'my', 'name'=>'Burmese', 'native_name'=>'ဗမာစာ', 'active'=>0],
			['code_2'=>'zh', 'code_3'=>'yue', 'name'=>'Cantonese', 'native_name'=>'广东话 (Gwóngdūng wá), 廣東話', 'active'=>0],
			['code_2'=>'ca', 'code_3'=>'ca', 'name'=>'Catalan; Valencian', 'native_name'=>'Català', 'active'=>0],
			['code_2'=>'ch', 'code_3'=>'ch', 'name'=>'Chamorro', 'native_name'=>'Chamoru', 'active'=>0],
			['code_2'=>'ce', 'code_3'=>'ce', 'name'=>'Chechen', 'native_name'=>'нохчийн мотт', 'active'=>0],
			['code_2'=>'ny', 'code_3'=>'ny', 'name'=>'Chichewa; Chewa; Nyanja', 'native_name'=>'chiCheŵa, chinyanja', 'active'=>0],
			['code_2'=>'zh', 'code_3'=>'zho', 'name'=>'Chinese', 'native_name'=>'中文 (Zhōngwén), 汉语, 漢語', 'active'=>0],
			['code_2'=>'cv', 'code_3'=>'cv', 'name'=>'Chuvash', 'native_name'=>'чӑваш чӗлхи', 'active'=>0],
			['code_2'=>'kw', 'code_3'=>'kw', 'name'=>'Cornish', 'native_name'=>'Kernewek', 'active'=>0],
			['code_2'=>'co', 'code_3'=>'co', 'name'=>'Corsican', 'native_name'=>'corsu, lingua corsa', 'active'=>0],
			['code_2'=>'cr', 'code_3'=>'cr', 'name'=>'Cree', 'native_name'=>'ᓀᐦᐃᔭᐍᐏᐣ', 'active'=>0],
			['code_2'=>'hr', 'code_3'=>'hrv', 'name'=>'Croatian', 'native_name'=>'hrvatski', 'active'=>0],
			['code_2'=>'cs', 'code_3'=>'ces', 'name'=>'Czech', 'native_name'=>'česky, čeština', 'active'=>0],
			['code_2'=>'da', 'code_3'=>'dan', 'name'=>'Danish', 'native_name'=>'dansk', 'active'=>0],
			['code_2'=>'dv', 'code_3'=>'dv', 'name'=>'Divehi; Dhivehi; Maldivian;', 'native_name'=>'ދިވެހި', 'active'=>0],
			['code_2'=>'nl', 'code_3'=>'nld', 'name'=>'Dutch', 'native_name'=>'Nederlands, Vlaams', 'active'=>0],
			['code_2'=>'en', 'code_3'=>'eng', 'name'=>'English', 'native_name'=>'English', 'active'=>1],
			['code_2'=>'eo', 'code_3'=>'eo', 'name'=>'Esperanto', 'native_name'=>'Esperanto', 'active'=>0],
			['code_2'=>'et', 'code_3'=>'est', 'name'=>'Estonian', 'native_name'=>'eesti, eesti keel', 'active'=>0],
			['code_2'=>'ee', 'code_3'=>'ee', 'name'=>'Ewe', 'native_name'=>'Eʋegbe', 'active'=>0],
			['code_2'=>'fo', 'code_3'=>'fo', 'name'=>'Faroese', 'native_name'=>'føroyskt', 'active'=>0],
			['code_2'=>'fj', 'code_3'=>'fj', 'name'=>'Fijian', 'native_name'=>'vosa Vakaviti', 'active'=>0],
			['code_2'=>'tl', 'code_3'=>'fil', 'name'=>'Filipino', 'native_name'=>'Filipino', 'active'=>0],
			['code_2'=>'fi', 'code_3'=>'fin', 'name'=>'Finnish', 'native_name'=>'suomi, suomen kieli', 'active'=>0],
			['code_2'=>'fr', 'code_3'=>'fra', 'name'=>'French', 'native_name'=>'français, langue française', 'active'=>0],
			['code_2'=>'ff', 'code_3'=>'ff', 'name'=>'Fula; Fulah; Pulaar; Pular', 'native_name'=>'Fulfulde, Pulaar, Pular', 'active'=>0],
			['code_2'=>'gl', 'code_3'=>'gl', 'name'=>'Galician', 'native_name'=>'Galego', 'active'=>0],
			['code_2'=>'ka', 'code_3'=>'ka', 'name'=>'Georgian', 'native_name'=>'ქართული', 'active'=>0],
			['code_2'=>'de', 'code_3'=>'deu', 'name'=>'German', 'native_name'=>'Deutsch', 'active'=>0],
			['code_2'=>'el', 'code_3'=>'ell', 'name'=>'Greek, Modern', 'native_name'=>'Ελληνικά', 'active'=>0],
			['code_2'=>'gn', 'code_3'=>'gn', 'name'=>'Guaraní', 'native_name'=>'Avañeẽ', 'active'=>0],
			['code_2'=>'gu', 'code_3'=>'guj', 'name'=>'Gujarati', 'native_name'=>'ગુજરાતી', 'active'=>0],
			['code_2'=>'ht', 'code_3'=>'ht', 'name'=>'Haitian; Haitian Creole', 'native_name'=>'Kreyòl ayisyen', 'active'=>0],
			['code_2'=>'ha', 'code_3'=>'ha', 'name'=>'Hausa', 'native_name'=>'Hausa, هَوُسَ', 'active'=>0],
			['code_2'=>'he', 'code_3'=>'heb', 'name'=>'Hebrew', 'native_name'=>'עברית', 'active'=>0],
			['code_2'=>'hz', 'code_3'=>'hz', 'name'=>'Herero', 'native_name'=>'Otjiherero', 'active'=>0],
			['code_2'=>'hi', 'code_3'=>'hin', 'name'=>'Hindi', 'native_name'=>'हिन्दी, हिंदी', 'active'=>0],
			['code_2'=>'ho', 'code_3'=>'ho', 'name'=>'Hiri Motu', 'native_name'=>'Hiri Motu', 'active'=>0],
			['code_2'=>'hu', 'code_3'=>'hun', 'name'=>'Hungarian', 'native_name'=>'Magyar', 'active'=>0],
			['code_2'=>'ia', 'code_3'=>'ia', 'name'=>'Interlingua', 'native_name'=>'Interlingua', 'active'=>0],
			['code_2'=>'id', 'code_3'=>'id', 'name'=>'Indonesian', 'native_name'=>'Bahasa Indonesia', 'active'=>0],
			['code_2'=>'ie', 'code_3'=>'ie', 'name'=>'Interlingue', 'native_name'=>'Originally called Occidental; then Interlingue after WWII', 'active'=>0],
			['code_2'=>'ga', 'code_3'=>'ga', 'name'=>'Irish', 'native_name'=>'Gaeilge', 'active'=>0],
			['code_2'=>'ig', 'code_3'=>'ig', 'name'=>'Igbo', 'native_name'=>'Asụsụ Igbo', 'active'=>0],
			['code_2'=>'ik', 'code_3'=>'ik', 'name'=>'Inupiaq', 'native_name'=>'Iñupiaq, Iñupiatun', 'active'=>0],
			['code_2'=>'io', 'code_3'=>'io', 'name'=>'Ido', 'native_name'=>'Ido', 'active'=>0],
			['code_2'=>'is', 'code_3'=>'is', 'name'=>'Icelandic', 'native_name'=>'Íslenska', 'active'=>0],
			['code_2'=>'it', 'code_3'=>'ita', 'name'=>'Italian', 'native_name'=>'Italiano', 'active'=>0],
			['code_2'=>'iu', 'code_3'=>'iu', 'name'=>'Inuktitut', 'native_name'=>'ᐃᓄᒃᑎᑐᑦ', 'active'=>0],
			['code_2'=>'ja', 'code_3'=>'jpn', 'name'=>'Japanese', 'native_name'=>'日本語 (にほんご／にっぽんご)', 'active'=>0],
			['code_2'=>'jv', 'code_3'=>'jv', 'name'=>'Javanese', 'native_name'=>'basa Jawa', 'active'=>0],
			['code_2'=>'kl', 'code_3'=>'kl', 'name'=>'Kalaallisut, Greenlandic', 'native_name'=>'kalaallisut, kalaallit oqaasii', 'active'=>0],
			['code_2'=>'kn', 'code_3'=>'kn', 'name'=>'Kannada', 'native_name'=>'ಕನ್ನಡ', 'active'=>0],
			['code_2'=>'kr', 'code_3'=>'kr', 'name'=>'Kanuri', 'native_name'=>'Kanuri', 'active'=>0],
			['code_2'=>'ks', 'code_3'=>'ks', 'name'=>'Kashmiri', 'native_name'=>'कश्मीरी, كشميري‎', 'active'=>0],
			['code_2'=>'kk', 'code_3'=>'kk', 'name'=>'Kazakh', 'native_name'=>'Қазақ тілі', 'active'=>0],
			['code_2'=>'km', 'code_3'=>'km', 'name'=>'Khmer', 'native_name'=>'ភាសាខ្មែរ', 'active'=>0],
			['code_2'=>'ki', 'code_3'=>'ki', 'name'=>'Kikuyu, Gikuyu', 'native_name'=>'Gĩkũyũ', 'active'=>0],
			['code_2'=>'rw', 'code_3'=>'rw', 'name'=>'Kinyarwanda', 'native_name'=>'Ikinyarwanda', 'active'=>0],
			['code_2'=>'ky', 'code_3'=>'ky', 'name'=>'Kirghiz, Kyrgyz', 'native_name'=>'кыргыз тили', 'active'=>0],
			['code_2'=>'kv', 'code_3'=>'kv', 'name'=>'Komi', 'native_name'=>'коми кыв', 'active'=>0],
			['code_2'=>'kg', 'code_3'=>'kg', 'name'=>'Kongo', 'native_name'=>'KiKongo', 'active'=>0],
			['code_2'=>'ko', 'code_3'=>'ko', 'name'=>'Korean', 'native_name'=>'한국어 (韓國語), 조선말 (朝鮮語)', 'active'=>0],
			['code_2'=>'ku', 'code_3'=>'ku', 'name'=>'Kurdish', 'native_name'=>'Kurdî, كوردی‎', 'active'=>0],
			['code_2'=>'kj', 'code_3'=>'kj', 'name'=>'Kwanyama, Kuanyama', 'native_name'=>'Kuanyama', 'active'=>0],
			['code_2'=>'la', 'code_3'=>'la', 'name'=>'Latin', 'native_name'=>'latine, lingua latina', 'active'=>0],
			['code_2'=>'lb', 'code_3'=>'lb', 'name'=>'Luxembourgish, Letzeburgesch', 'native_name'=>'Lëtzebuergesch', 'active'=>0],
			['code_2'=>'lg', 'code_3'=>'lg', 'name'=>'Luganda', 'native_name'=>'Luganda', 'active'=>0],
			['code_2'=>'li', 'code_3'=>'li', 'name'=>'Limburgish, Limburgan, Limburger', 'native_name'=>'Limburgs', 'active'=>0],
			['code_2'=>'ln', 'code_3'=>'ln', 'name'=>'Lingala', 'native_name'=>'Lingála', 'active'=>0],
			['code_2'=>'lo', 'code_3'=>'lo', 'name'=>'Lao', 'native_name'=>'ພາສາລາວ', 'active'=>0],
			['code_2'=>'lt', 'code_3'=>'lt', 'name'=>'Lithuanian', 'native_name'=>'lietuvių kalba', 'active'=>0],
			['code_2'=>'lu', 'code_3'=>'lu', 'name'=>'Luba-Katanga', 'native_name'=>'', 'active'=>0],
			['code_2'=>'lv', 'code_3'=>'lv', 'name'=>'Latvian', 'native_name'=>'latviešu valoda', 'active'=>0],
			['code_2'=>'gv', 'code_3'=>'gv', 'name'=>'Manx', 'native_name'=>'Gaelg, Gailck', 'active'=>0],
			['code_2'=>'mk', 'code_3'=>'mk', 'name'=>'Macedonian', 'native_name'=>'македонски јазик', 'active'=>0],
			['code_2'=>'mg', 'code_3'=>'mg', 'name'=>'Malagasy', 'native_name'=>'Malagasy fiteny', 'active'=>0],
			['code_2'=>'ms', 'code_3'=>'ms', 'name'=>'Malay', 'native_name'=>'bahasa Melayu, بهاس ملايو‎', 'active'=>0],
			['code_2'=>'ml', 'code_3'=>'ml', 'name'=>'Malayalam', 'native_name'=>'മലയാളം', 'active'=>0],
			['code_2'=>'mt', 'code_3'=>'mt', 'name'=>'Maltese', 'native_name'=>'Malti', 'active'=>0],
			['code_2'=>'zh', 'code_3'=>'cmn', 'name'=>'Mandarin', 'native_name'=>'官话, 官話', 'active'=>0],
			['code_2'=>'mi', 'code_3'=>'mi', 'name'=>'Māori', 'native_name'=>'te reo Māori', 'active'=>0],
			['code_2'=>'mr', 'code_3'=>'mr', 'name'=>'Marathi (Marāṭhī)', 'native_name'=>'मराठी', 'active'=>0],
			['code_2'=>'mh', 'code_3'=>'mh', 'name'=>'Marshallese', 'native_name'=>'Kajin M̧ajeļ', 'active'=>0],
			['code_2'=>'mn', 'code_3'=>'mn', 'name'=>'Mongolian', 'native_name'=>'монгол', 'active'=>0],
			['code_2'=>'na', 'code_3'=>'na', 'name'=>'Nauru', 'native_name'=>'Ekakairũ Naoero', 'active'=>0],
			['code_2'=>'nv', 'code_3'=>'nv', 'name'=>'Navajo, Navaho', 'native_name'=>'Diné bizaad, Dinékʼehǰí', 'active'=>0],
			['code_2'=>'nb', 'code_3'=>'nb', 'name'=>'Norwegian Bokmål', 'native_name'=>'Norsk bokmål', 'active'=>0],
			['code_2'=>'nd', 'code_3'=>'nd', 'name'=>'North Ndebele', 'native_name'=>'isiNdebele', 'active'=>0],
			['code_2'=>'ne', 'code_3'=>'ne', 'name'=>'Nepali', 'native_name'=>'नेपाली', 'active'=>0],
			['code_2'=>'ng', 'code_3'=>'ng', 'name'=>'Ndonga', 'native_name'=>'Owambo', 'active'=>0],
			['code_2'=>'nn', 'code_3'=>'nn', 'name'=>'Norwegian Nynorsk', 'native_name'=>'Norsk nynorsk', 'active'=>0],
			['code_2'=>'no', 'code_3'=>'nor', 'name'=>'Norwegian', 'native_name'=>'Norsk', 'active'=>0],
			['code_2'=>'ii', 'code_3'=>'ii', 'name'=>'Nuosu', 'native_name'=>'ꆈꌠ꒿ Nuosuhxop', 'active'=>0],
			['code_2'=>'nr', 'code_3'=>'nr', 'name'=>'South Ndebele', 'native_name'=>'isiNdebele', 'active'=>0],
			['code_2'=>'oc', 'code_3'=>'oc', 'name'=>'Occitan', 'native_name'=>'Occitan', 'active'=>0],
			['code_2'=>'oj', 'code_3'=>'oj', 'name'=>'Ojibwe, Ojibwa', 'native_name'=>'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'active'=>0],
			['code_2'=>'cu', 'code_3'=>'cu', 'name'=>'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic', 'native_name'=>'ѩзыкъ словѣньскъ', 'active'=>0],
			['code_2'=>'om', 'code_3'=>'om', 'name'=>'Oromo', 'native_name'=>'Afaan Oromoo', 'active'=>0],
			['code_2'=>'or', 'code_3'=>'or', 'name'=>'Oriya', 'native_name'=>'ଓଡ଼ିଆ', 'active'=>0],
			['code_2'=>'os', 'code_3'=>'os', 'name'=>'Ossetian, Ossetic', 'native_name'=>'ирон æвзаг', 'active'=>0],
			['code_2'=>'pa', 'code_3'=>'pa', 'name'=>'Panjabi, Punjabi', 'native_name'=>'ਪੰਜਾਬੀ, پنجابی‎', 'active'=>0],
			['code_2'=>'pi', 'code_3'=>'pi', 'name'=>'Pāli', 'native_name'=>'पाऴि', 'active'=>0],
			['code_2'=>'fa', 'code_3'=>'fa', 'name'=>'Persian', 'native_name'=>'فارسی', 'active'=>0],
			['code_2'=>'pl', 'code_3'=>'pol', 'name'=>'Polish', 'native_name'=>'polski', 'active'=>0],
			['code_2'=>'ps', 'code_3'=>'ps', 'name'=>'Pashto, Pushto', 'native_name'=>'پښتو', 'active'=>0],
			['code_2'=>'pt', 'code_3'=>'por', 'name'=>'Portuguese', 'native_name'=>'Português', 'active'=>0],
			['code_2'=>'qu', 'code_3'=>'qu', 'name'=>'Quechua', 'native_name'=>'Runa Simi, Kichwa', 'active'=>0],
			['code_2'=>'rm', 'code_3'=>'rm', 'name'=>'Romansh', 'native_name'=>'rumantsch grischun', 'active'=>0],
			['code_2'=>'rn', 'code_3'=>'rn', 'name'=>'Kirundi', 'native_name'=>'kiRundi', 'active'=>0],
			['code_2'=>'ro', 'code_3'=>'ron', 'name'=>'Romanian, Moldavian, Moldovan', 'native_name'=>'română', 'active'=>0],
			['code_2'=>'ru', 'code_3'=>'rus', 'name'=>'Russian', 'native_name'=>'русский язык', 'active'=>0],
			['code_2'=>'sa', 'code_3'=>'sa', 'name'=>'Sanskrit (Saṁskṛta)', 'native_name'=>'संस्कृतम्', 'active'=>0],
			['code_2'=>'sc', 'code_3'=>'sc', 'name'=>'Sardinian', 'native_name'=>'sardu', 'active'=>0],
			['code_2'=>'sd', 'code_3'=>'sd', 'name'=>'Sindhi', 'native_name'=>'सिन्धी, سنڌي، سندھی‎', 'active'=>0],
			['code_2'=>'se', 'code_3'=>'se', 'name'=>'Northern Sami', 'native_name'=>'Davvisámegiella', 'active'=>0],
			['code_2'=>'sm', 'code_3'=>'sm', 'name'=>'Samoan', 'native_name'=>'gagana faa Samoa', 'active'=>0],
			['code_2'=>'sg', 'code_3'=>'sg', 'name'=>'Sango', 'native_name'=>'yângâ tî sängö', 'active'=>0],
			['code_2'=>'sr', 'code_3'=>'sr', 'name'=>'Serbian', 'native_name'=>'српски језик', 'active'=>0],
			['code_2'=>'gd', 'code_3'=>'gd', 'name'=>'Scottish Gaelic; Gaelic', 'native_name'=>'Gàidhlig', 'active'=>0],
			['code_2'=>'sn', 'code_3'=>'sn', 'name'=>'Shona', 'native_name'=>'chiShona', 'active'=>0],
			['code_2'=>'si', 'code_3'=>'si', 'name'=>'Sinhala, Sinhalese', 'native_name'=>'සිංහල', 'active'=>0],
			['code_2'=>'sk', 'code_3'=>'slk', 'name'=>'Slovak', 'native_name'=>'slovenčina', 'active'=>0],
			['code_2'=>'sl', 'code_3'=>'slv', 'name'=>'Slovenian', 'native_name'=>'slovenščina', 'active'=>0],
			['code_2'=>'so', 'code_3'=>'so', 'name'=>'Somali', 'native_name'=>'Soomaaliga, af Soomaali', 'active'=>0],
			['code_2'=>'st', 'code_3'=>'st', 'name'=>'Southern Sotho', 'native_name'=>'Sesotho', 'active'=>0],
			['code_2'=>'es', 'code_3'=>'spa', 'name'=>'Spanish', 'native_name'=>'español, castellano', 'active'=>0],
			['code_2'=>'su', 'code_3'=>'su', 'name'=>'Sundanese', 'native_name'=>'Basa Sunda', 'active'=>0],
			['code_2'=>'sw', 'code_3'=>'swa', 'name'=>'Swahili', 'native_name'=>'Kiswahili', 'active'=>0],
			['code_2'=>'ss', 'code_3'=>'ss', 'name'=>'Swati', 'native_name'=>'SiSwati', 'active'=>0],
			['code_2'=>'sv', 'code_3'=>'swe', 'name'=>'Swedish', 'native_name'=>'svenska', 'active'=>0],
			['code_2'=>'tl', 'code_3'=>'tgl', 'name'=>'Tagalog', 'native_name'=>'Wikang Tagalog', 'active'=>0],
			['code_2'=>'ty', 'code_3'=>'ty', 'name'=>'Tahitian', 'native_name'=>'Reo Tahiti', 'active'=>0],
			['code_2'=>'tg', 'code_3'=>'tg', 'name'=>'Tajik', 'native_name'=>'тоҷикӣ, toğikī, تاجیکی‎', 'active'=>0],
			['code_2'=>'ta', 'code_3'=>'ta', 'name'=>'Tamil', 'native_name'=>'தமிழ்', 'active'=>0],
			['code_2'=>'tt', 'code_3'=>'tt', 'name'=>'Tatar', 'native_name'=>'татарча, tatarça, تاتارچا‎', 'active'=>0],
			['code_2'=>'te', 'code_3'=>'te', 'name'=>'Telugu', 'native_name'=>'తెలుగు', 'active'=>0],
			['code_2'=>'th', 'code_3'=>'tha', 'name'=>'Thai', 'native_name'=>'ไทย', 'active'=>0],
			['code_2'=>'bo', 'code_3'=>'bo', 'name'=>'Tibetan Standard, Tibetan, Central', 'native_name'=>'བོད་ཡིག', 'active'=>0],
			['code_2'=>'ti', 'code_3'=>'ti', 'name'=>'Tigrinya', 'native_name'=>'ትግርኛ', 'active'=>0],
			['code_2'=>'tn', 'code_3'=>'tn', 'name'=>'Tswana', 'native_name'=>'Setswana', 'active'=>0],
			['code_2'=>'to', 'code_3'=>'to', 'name'=>'Tonga (Tonga Islands)', 'native_name'=>'faka Tonga', 'active'=>0],
			['code_2'=>'ts', 'code_3'=>'ts', 'name'=>'Tsonga', 'native_name'=>'Xitsonga', 'active'=>0],
			['code_2'=>'tr', 'code_3'=>'tur', 'name'=>'Turkish', 'native_name'=>'Türkçe', 'active'=>0],
			['code_2'=>'tk', 'code_3'=>'tk', 'name'=>'Turkmen', 'native_name'=>'Türkmen, Түркмен', 'active'=>0],
			['code_2'=>'tw', 'code_3'=>'tw', 'name'=>'Twi', 'native_name'=>'Twi', 'active'=>0],
			['code_2'=>'ug', 'code_3'=>'ug', 'name'=>'Uighur, Uyghur', 'native_name'=>'Uyƣurqə, ئۇيغۇرچە‎', 'active'=>0],
			['code_2'=>'uk', 'code_3'=>'uk', 'name'=>'Ukrainian', 'native_name'=>'українська', 'active'=>0],
			['code_2'=>'ur', 'code_3'=>'ur', 'name'=>'Urdu', 'native_name'=>'اردو', 'active'=>0],
			['code_2'=>'uz', 'code_3'=>'uz', 'name'=>'Uzbek', 'native_name'=>'zbek, Ўзбек, أۇزبېك‎', 'active'=>0],
			['code_2'=>'ve', 'code_3'=>'ve', 'name'=>'Venda', 'native_name'=>'Tshivenḓa', 'active'=>0],
			['code_2'=>'vi', 'code_3'=>'vi', 'name'=>'Vietnamese', 'native_name'=>'Tiếng Việt', 'active'=>0],
			['code_2'=>'vo', 'code_3'=>'vo', 'name'=>'Volapük', 'native_name'=>'Volapük', 'active'=>0],
			['code_2'=>'wa', 'code_3'=>'wa', 'name'=>'Walloon', 'native_name'=>'Walon', 'active'=>0],
			['code_2'=>'cy', 'code_3'=>'cym', 'name'=>'Welsh', 'native_name'=>'Cymraeg', 'active'=>0],
			['code_2'=>'wo', 'code_3'=>'wo', 'name'=>'Wolof', 'native_name'=>'Wollof', 'active'=>0],
			['code_2'=>'fy', 'code_3'=>'fy', 'name'=>'Western Frisian', 'native_name'=>'Frysk', 'active'=>0],
			['code_2'=>'xh', 'code_3'=>'xh', 'name'=>'Xhosa', 'native_name'=>'isiXhosa', 'active'=>0],
			['code_2'=>'yi', 'code_3'=>'yi', 'name'=>'Yiddish', 'native_name'=>'ייִדיש', 'active'=>0],
			['code_2'=>'yo', 'code_3'=>'yo', 'name'=>'Yoruba', 'native_name'=>'Yorùbá', 'active'=>0],
			['code_2'=>'za', 'code_3'=>'za', 'name'=>'Zhuang, Chuang', 'native_name'=>'Saɯ cueŋƅ, Saw cuengh', 'active'=>0],
		]);
	}

}
