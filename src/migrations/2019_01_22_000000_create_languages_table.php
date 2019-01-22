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

			$table->string('name');

			$table->boolean('active')->default(0);
			$table->string('iso_639_1', 2);
			$table->string('iso_639_3', 3);

			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();

			$table->unique('iso_639_3');
			$table->index('iso_639_1');
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
		// TODO Fully implement iso_639_3. Still a lot of them as iso_639_1
		Model\Language::insert([
			['iso_639_1'=>'ab', 'iso_639_3'=>'ab', 'name'=>'Abkhaz', 'active'=>0],
			['iso_639_1'=>'aa', 'iso_639_3'=>'aa', 'name'=>'Afar', 'active'=>0],
			['iso_639_1'=>'af', 'iso_639_3'=>'af', 'name'=>'Afrikaans', 'active'=>0],
			['iso_639_1'=>'ak', 'iso_639_3'=>'ak', 'name'=>'Akan', 'active'=>0],
			['iso_639_1'=>'sq', 'iso_639_3'=>'sq', 'name'=>'Albanian', 'active'=>0],
			['iso_639_1'=>'am', 'iso_639_3'=>'am', 'name'=>'Amharic', 'active'=>0],
			['iso_639_1'=>'ar', 'iso_639_3'=>'ara', 'name'=>'Arabic', 'active'=>0],
			['iso_639_1'=>'an', 'iso_639_3'=>'an', 'name'=>'Aragonese', 'active'=>0],
			['iso_639_1'=>'hy', 'iso_639_3'=>'hy', 'name'=>'Armenian', 'active'=>0],
			['iso_639_1'=>'as', 'iso_639_3'=>'as', 'name'=>'Assamese', 'active'=>0],
			['iso_639_1'=>'av', 'iso_639_3'=>'av', 'name'=>'Avaric', 'active'=>0],
			['iso_639_1'=>'ae', 'iso_639_3'=>'ae', 'name'=>'Avestan', 'active'=>0],
			['iso_639_1'=>'ay', 'iso_639_3'=>'ay', 'name'=>'Aymara', 'active'=>0],
			['iso_639_1'=>'az', 'iso_639_3'=>'az', 'name'=>'Azerbaijani', 'active'=>0],
			['iso_639_1'=>'bm', 'iso_639_3'=>'bm', 'name'=>'Bambara', 'active'=>0],
			['iso_639_1'=>'ba', 'iso_639_3'=>'ba', 'name'=>'Bashkir', 'active'=>0],
			['iso_639_1'=>'eu', 'iso_639_3'=>'eu', 'name'=>'Basque', 'active'=>0],
			['iso_639_1'=>'be', 'iso_639_3'=>'be', 'name'=>'Belarusian', 'active'=>0],
			['iso_639_1'=>'bn', 'iso_639_3'=>'bn', 'name'=>'Bengali', 'active'=>0],
			['iso_639_1'=>'bh', 'iso_639_3'=>'bh', 'name'=>'Bihari', 'active'=>0],
			['iso_639_1'=>'bi', 'iso_639_3'=>'bi', 'name'=>'Bislama', 'active'=>0],
			['iso_639_1'=>'bs', 'iso_639_3'=>'bs', 'name'=>'Bosnian', 'active'=>0],
			['iso_639_1'=>'br', 'iso_639_3'=>'br', 'name'=>'Breton', 'active'=>0],
			['iso_639_1'=>'bg', 'iso_639_3'=>'bul', 'name'=>'Bulgarian', 'active'=>0],
			['iso_639_1'=>'my', 'iso_639_3'=>'my', 'name'=>'Burmese', 'active'=>0],
			['iso_639_1'=>'zh', 'iso_639_3'=>'yue', 'name'=>'Cantonese', 'active'=>0],
			['iso_639_1'=>'ca', 'iso_639_3'=>'ca', 'name'=>'Catalan; Valencian', 'active'=>0],
			['iso_639_1'=>'ch', 'iso_639_3'=>'ch', 'name'=>'Chamorro', 'active'=>0],
			['iso_639_1'=>'ce', 'iso_639_3'=>'ce', 'name'=>'Chechen', 'active'=>0],
			['iso_639_1'=>'ny', 'iso_639_3'=>'ny', 'name'=>'Chichewa; Chewa; Nyanja', 'active'=>0],
			['iso_639_1'=>'zh', 'iso_639_3'=>'zho', 'name'=>'Chinese', 'active'=>0],
			['iso_639_1'=>'cv', 'iso_639_3'=>'cv', 'name'=>'Chuvash', 'active'=>0],
			['iso_639_1'=>'kw', 'iso_639_3'=>'kw', 'name'=>'Cornish', 'active'=>0],
			['iso_639_1'=>'co', 'iso_639_3'=>'co', 'name'=>'Corsican', 'active'=>0],
			['iso_639_1'=>'cr', 'iso_639_3'=>'cr', 'name'=>'Cree', 'active'=>0],
			['iso_639_1'=>'hr', 'iso_639_3'=>'hrv', 'name'=>'Croatian', 'active'=>0],
			['iso_639_1'=>'cs', 'iso_639_3'=>'ces', 'name'=>'Czech', 'active'=>0],
			['iso_639_1'=>'da', 'iso_639_3'=>'dan', 'name'=>'Danish', 'active'=>0],
			['iso_639_1'=>'dv', 'iso_639_3'=>'dv', 'name'=>'Divehi; Dhivehi; Maldivian;', 'active'=>0],
			['iso_639_1'=>'nl', 'iso_639_3'=>'nld', 'name'=>'Dutch', 'active'=>0],
			['iso_639_1'=>'en', 'iso_639_3'=>'eng', 'name'=>'English', 'active'=>1],
			['iso_639_1'=>'eo', 'iso_639_3'=>'eo', 'name'=>'Esperanto', 'active'=>0],
			['iso_639_1'=>'et', 'iso_639_3'=>'est', 'name'=>'Estonian', 'active'=>0],
			['iso_639_1'=>'ee', 'iso_639_3'=>'ee', 'name'=>'Ewe', 'active'=>0],
			['iso_639_1'=>'fo', 'iso_639_3'=>'fo', 'name'=>'Faroese', 'active'=>0],
			['iso_639_1'=>'fj', 'iso_639_3'=>'fj', 'name'=>'Fijian', 'active'=>0],
			['iso_639_1'=>'tl', 'iso_639_3'=>'fil', 'name'=>'Filipino', 'active'=>0],
			['iso_639_1'=>'fi', 'iso_639_3'=>'fin', 'name'=>'Finnish', 'active'=>0],
			['iso_639_1'=>'fr', 'iso_639_3'=>'fra', 'name'=>'French', 'active'=>0],
			['iso_639_1'=>'ff', 'iso_639_3'=>'ff', 'name'=>'Fula; Fulah; Pulaar; Pular', 'active'=>0],
			['iso_639_1'=>'gl', 'iso_639_3'=>'gl', 'name'=>'Galician', 'active'=>0],
			['iso_639_1'=>'ka', 'iso_639_3'=>'ka', 'name'=>'Georgian', 'active'=>0],
			['iso_639_1'=>'de', 'iso_639_3'=>'deu', 'name'=>'German', 'active'=>0],
			['iso_639_1'=>'el', 'iso_639_3'=>'ell', 'name'=>'Greek, Modern', 'active'=>0],
			['iso_639_1'=>'gn', 'iso_639_3'=>'gn', 'name'=>'Guaraní', 'active'=>0],
			['iso_639_1'=>'gu', 'iso_639_3'=>'guj', 'name'=>'Gujarati', 'active'=>0],
			['iso_639_1'=>'ht', 'iso_639_3'=>'ht', 'name'=>'Haitian; Haitian Creole', 'active'=>0],
			['iso_639_1'=>'ha', 'iso_639_3'=>'ha', 'name'=>'Hausa', 'active'=>0],
			['iso_639_1'=>'he', 'iso_639_3'=>'heb', 'name'=>'Hebrew', 'active'=>0],
			['iso_639_1'=>'hz', 'iso_639_3'=>'hz', 'name'=>'Herero', 'active'=>0],
			['iso_639_1'=>'hi', 'iso_639_3'=>'hin', 'name'=>'Hindi', 'active'=>0],
			['iso_639_1'=>'ho', 'iso_639_3'=>'ho', 'name'=>'Hiri Motu', 'active'=>0],
			['iso_639_1'=>'hu', 'iso_639_3'=>'hun', 'name'=>'Hungarian', 'active'=>0],
			['iso_639_1'=>'ia', 'iso_639_3'=>'ia', 'name'=>'Interlingua', 'active'=>0],
			['iso_639_1'=>'id', 'iso_639_3'=>'id', 'name'=>'Indonesian', 'active'=>0],
			['iso_639_1'=>'ie', 'iso_639_3'=>'ie', 'name'=>'Interlingue', 'active'=>0],
			['iso_639_1'=>'ga', 'iso_639_3'=>'ga', 'name'=>'Irish', 'active'=>0],
			['iso_639_1'=>'ig', 'iso_639_3'=>'ig', 'name'=>'Igbo', 'active'=>0],
			['iso_639_1'=>'ik', 'iso_639_3'=>'ik', 'name'=>'Inupiaq', 'active'=>0],
			['iso_639_1'=>'io', 'iso_639_3'=>'io', 'name'=>'Ido', 'active'=>0],
			['iso_639_1'=>'is', 'iso_639_3'=>'is', 'name'=>'Icelandic', 'active'=>0],
			['iso_639_1'=>'it', 'iso_639_3'=>'ita', 'name'=>'Italian', 'active'=>0],
			['iso_639_1'=>'iu', 'iso_639_3'=>'iu', 'name'=>'Inuktitut', 'active'=>0],
			['iso_639_1'=>'ja', 'iso_639_3'=>'jpn', 'name'=>'Japanese', 'active'=>0],
			['iso_639_1'=>'jv', 'iso_639_3'=>'jv', 'name'=>'Javanese', 'active'=>0],
			['iso_639_1'=>'kl', 'iso_639_3'=>'kl', 'name'=>'Kalaallisut, Greenlandic', 'active'=>0],
			['iso_639_1'=>'kn', 'iso_639_3'=>'kn', 'name'=>'Kannada', 'active'=>0],
			['iso_639_1'=>'kr', 'iso_639_3'=>'kr', 'name'=>'Kanuri', 'active'=>0],
			['iso_639_1'=>'ks', 'iso_639_3'=>'ks', 'name'=>'Kashmiri', 'active'=>0],
			['iso_639_1'=>'kk', 'iso_639_3'=>'kk', 'name'=>'Kazakh', 'active'=>0],
			['iso_639_1'=>'km', 'iso_639_3'=>'km', 'name'=>'Khmer', 'active'=>0],
			['iso_639_1'=>'ki', 'iso_639_3'=>'ki', 'name'=>'Kikuyu, Gikuyu', 'active'=>0],
			['iso_639_1'=>'rw', 'iso_639_3'=>'rw', 'name'=>'Kinyarwanda', 'active'=>0],
			['iso_639_1'=>'ky', 'iso_639_3'=>'ky', 'name'=>'Kirghiz, Kyrgyz', 'active'=>0],
			['iso_639_1'=>'kv', 'iso_639_3'=>'kv', 'name'=>'Komi', 'active'=>0],
			['iso_639_1'=>'kg', 'iso_639_3'=>'kg', 'name'=>'Kongo', 'active'=>0],
			['iso_639_1'=>'ko', 'iso_639_3'=>'ko', 'name'=>'Korean', 'active'=>0],
			['iso_639_1'=>'ku', 'iso_639_3'=>'ku', 'name'=>'Kurdish', 'active'=>0],
			['iso_639_1'=>'kj', 'iso_639_3'=>'kj', 'name'=>'Kwanyama, Kuanyama', 'active'=>0],
			['iso_639_1'=>'la', 'iso_639_3'=>'la', 'name'=>'Latin', 'active'=>0],
			['iso_639_1'=>'lb', 'iso_639_3'=>'lb', 'name'=>'Luxembourgish, Letzeburgesch', 'active'=>0],
			['iso_639_1'=>'lg', 'iso_639_3'=>'lg', 'name'=>'Luganda', 'active'=>0],
			['iso_639_1'=>'li', 'iso_639_3'=>'li', 'name'=>'Limburgish, Limburgan, Limburger', 'active'=>0],
			['iso_639_1'=>'ln', 'iso_639_3'=>'ln', 'name'=>'Lingala', 'active'=>0],
			['iso_639_1'=>'lo', 'iso_639_3'=>'lo', 'name'=>'Lao', 'active'=>0],
			['iso_639_1'=>'lt', 'iso_639_3'=>'lt', 'name'=>'Lithuanian', 'active'=>0],
			['iso_639_1'=>'lu', 'iso_639_3'=>'lu', 'name'=>'Luba-Katanga', 'active'=>0],
			['iso_639_1'=>'lv', 'iso_639_3'=>'lv', 'name'=>'Latvian', 'active'=>0],
			['iso_639_1'=>'gv', 'iso_639_3'=>'gv', 'name'=>'Manx', 'active'=>0],
			['iso_639_1'=>'mk', 'iso_639_3'=>'mk', 'name'=>'Macedonian', 'active'=>0],
			['iso_639_1'=>'mg', 'iso_639_3'=>'mg', 'name'=>'Malagasy', 'active'=>0],
			['iso_639_1'=>'ms', 'iso_639_3'=>'ms', 'name'=>'Malay', 'active'=>0],
			['iso_639_1'=>'ml', 'iso_639_3'=>'ml', 'name'=>'Malayalam', 'active'=>0],
			['iso_639_1'=>'mt', 'iso_639_3'=>'mt', 'name'=>'Maltese', 'active'=>0],
			['iso_639_1'=>'zh', 'iso_639_3'=>'cmn', 'name'=>'Mandarin', 'active'=>0],
			['iso_639_1'=>'mi', 'iso_639_3'=>'mi', 'name'=>'Māori', 'active'=>0],
			['iso_639_1'=>'mr', 'iso_639_3'=>'mr', 'name'=>'Marathi (Marāṭhī)', 'active'=>0],
			['iso_639_1'=>'mh', 'iso_639_3'=>'mh', 'name'=>'Marshallese', 'active'=>0],
			['iso_639_1'=>'mn', 'iso_639_3'=>'mn', 'name'=>'Mongolian', 'active'=>0],
			['iso_639_1'=>'na', 'iso_639_3'=>'na', 'name'=>'Nauru', 'active'=>0],
			['iso_639_1'=>'nv', 'iso_639_3'=>'nv', 'name'=>'Navajo, Navaho', 'active'=>0],
			['iso_639_1'=>'nb', 'iso_639_3'=>'nb', 'name'=>'Norwegian Bokmål', 'active'=>0],
			['iso_639_1'=>'nd', 'iso_639_3'=>'nd', 'name'=>'North Ndebele', 'active'=>0],
			['iso_639_1'=>'ne', 'iso_639_3'=>'ne', 'name'=>'Nepali', 'active'=>0],
			['iso_639_1'=>'ng', 'iso_639_3'=>'ng', 'name'=>'Ndonga', 'active'=>0],
			['iso_639_1'=>'nn', 'iso_639_3'=>'nn', 'name'=>'Norwegian Nynorsk', 'active'=>0],
			['iso_639_1'=>'no', 'iso_639_3'=>'nor', 'name'=>'Norwegian', 'active'=>0],
			['iso_639_1'=>'ii', 'iso_639_3'=>'ii', 'name'=>'Nuosu', 'active'=>0],
			['iso_639_1'=>'nr', 'iso_639_3'=>'nr', 'name'=>'South Ndebele', 'active'=>0],
			['iso_639_1'=>'oc', 'iso_639_3'=>'oc', 'name'=>'Occitan', 'active'=>0],
			['iso_639_1'=>'oj', 'iso_639_3'=>'oj', 'name'=>'Ojibwe, Ojibwa', 'active'=>0],
			['iso_639_1'=>'cu', 'iso_639_3'=>'cu', 'name'=>'Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic', 'active'=>0],
			['iso_639_1'=>'om', 'iso_639_3'=>'om', 'name'=>'Oromo', 'active'=>0],
			['iso_639_1'=>'or', 'iso_639_3'=>'or', 'name'=>'Oriya', 'active'=>0],
			['iso_639_1'=>'os', 'iso_639_3'=>'os', 'name'=>'Ossetian, Ossetic', 'active'=>0],
			['iso_639_1'=>'pa', 'iso_639_3'=>'pa', 'name'=>'Panjabi, Punjabi', 'active'=>0],
			['iso_639_1'=>'pi', 'iso_639_3'=>'pi', 'name'=>'Pāli', 'active'=>0],
			['iso_639_1'=>'fa', 'iso_639_3'=>'fa', 'name'=>'Persian', 'active'=>0],
			['iso_639_1'=>'pl', 'iso_639_3'=>'pol', 'name'=>'Polish', 'active'=>0],
			['iso_639_1'=>'ps', 'iso_639_3'=>'ps', 'name'=>'Pashto, Pushto', 'active'=>0],
			['iso_639_1'=>'pt', 'iso_639_3'=>'por', 'name'=>'Portuguese', 'active'=>0],
			['iso_639_1'=>'qu', 'iso_639_3'=>'qu', 'name'=>'Quechua', 'active'=>0],
			['iso_639_1'=>'rm', 'iso_639_3'=>'rm', 'name'=>'Romansh', 'active'=>0],
			['iso_639_1'=>'rn', 'iso_639_3'=>'rn', 'name'=>'Kirundi', 'active'=>0],
			['iso_639_1'=>'ro', 'iso_639_3'=>'ron', 'name'=>'Romanian, Moldavian, Moldovan', 'active'=>0],
			['iso_639_1'=>'ru', 'iso_639_3'=>'rus', 'name'=>'Russian', 'active'=>0],
			['iso_639_1'=>'sa', 'iso_639_3'=>'sa', 'name'=>'Sanskrit (Saṁskṛta)', 'active'=>0],
			['iso_639_1'=>'sc', 'iso_639_3'=>'sc', 'name'=>'Sardinian', 'active'=>0],
			['iso_639_1'=>'sd', 'iso_639_3'=>'sd', 'name'=>'Sindhi', 'active'=>0],
			['iso_639_1'=>'se', 'iso_639_3'=>'se', 'name'=>'Northern Sami', 'active'=>0],
			['iso_639_1'=>'sm', 'iso_639_3'=>'sm', 'name'=>'Samoan', 'active'=>0],
			['iso_639_1'=>'sg', 'iso_639_3'=>'sg', 'name'=>'Sango', 'active'=>0],
			['iso_639_1'=>'sr', 'iso_639_3'=>'sr', 'name'=>'Serbian', 'active'=>0],
			['iso_639_1'=>'gd', 'iso_639_3'=>'gd', 'name'=>'Scottish Gaelic; Gaelic', 'active'=>0],
			['iso_639_1'=>'sn', 'iso_639_3'=>'sn', 'name'=>'Shona', 'active'=>0],
			['iso_639_1'=>'si', 'iso_639_3'=>'si', 'name'=>'Sinhala, Sinhalese', 'active'=>0],
			['iso_639_1'=>'sk', 'iso_639_3'=>'slk', 'name'=>'Slovak', 'active'=>0],
			['iso_639_1'=>'sl', 'iso_639_3'=>'slv', 'name'=>'Slovenian', 'active'=>0],
			['iso_639_1'=>'so', 'iso_639_3'=>'so', 'name'=>'Somali', 'active'=>0],
			['iso_639_1'=>'st', 'iso_639_3'=>'st', 'name'=>'Southern Sotho', 'active'=>0],
			['iso_639_1'=>'es', 'iso_639_3'=>'spa', 'name'=>'Spanish', 'active'=>0],
			['iso_639_1'=>'su', 'iso_639_3'=>'su', 'name'=>'Sundanese', 'active'=>0],
			['iso_639_1'=>'sw', 'iso_639_3'=>'swa', 'name'=>'Swahili', 'active'=>0],
			['iso_639_1'=>'ss', 'iso_639_3'=>'ss', 'name'=>'Swati', 'active'=>0],
			['iso_639_1'=>'sv', 'iso_639_3'=>'swe', 'name'=>'Swedish', 'active'=>0],
			['iso_639_1'=>'tl', 'iso_639_3'=>'tgl', 'name'=>'Tagalog', 'active'=>0],
			['iso_639_1'=>'ty', 'iso_639_3'=>'ty', 'name'=>'Tahitian', 'active'=>0],
			['iso_639_1'=>'tg', 'iso_639_3'=>'tg', 'name'=>'Tajik', 'active'=>0],
			['iso_639_1'=>'ta', 'iso_639_3'=>'ta', 'name'=>'Tamil', 'active'=>0],
			['iso_639_1'=>'tt', 'iso_639_3'=>'tt', 'name'=>'Tatar', 'active'=>0],
			['iso_639_1'=>'te', 'iso_639_3'=>'te', 'name'=>'Telugu', 'active'=>0],
			['iso_639_1'=>'th', 'iso_639_3'=>'tha', 'name'=>'Thai', 'active'=>0],
			['iso_639_1'=>'bo', 'iso_639_3'=>'bo', 'name'=>'Tibetan Standard, Tibetan, Central', 'active'=>0],
			['iso_639_1'=>'ti', 'iso_639_3'=>'ti', 'name'=>'Tigrinya', 'active'=>0],
			['iso_639_1'=>'tn', 'iso_639_3'=>'tn', 'name'=>'Tswana', 'active'=>0],
			['iso_639_1'=>'to', 'iso_639_3'=>'to', 'name'=>'Tonga (Tonga Islands)', 'active'=>0],
			['iso_639_1'=>'ts', 'iso_639_3'=>'ts', 'name'=>'Tsonga', 'active'=>0],
			['iso_639_1'=>'tr', 'iso_639_3'=>'tur', 'name'=>'Turkish', 'active'=>0],
			['iso_639_1'=>'tk', 'iso_639_3'=>'tk', 'name'=>'Turkmen', 'active'=>0],
			['iso_639_1'=>'tw', 'iso_639_3'=>'tw', 'name'=>'Twi', 'active'=>0],
			['iso_639_1'=>'ug', 'iso_639_3'=>'ug', 'name'=>'Uighur, Uyghur', 'active'=>0],
			['iso_639_1'=>'uk', 'iso_639_3'=>'uk', 'name'=>'Ukrainian', 'active'=>0],
			['iso_639_1'=>'ur', 'iso_639_3'=>'ur', 'name'=>'Urdu', 'active'=>0],
			['iso_639_1'=>'uz', 'iso_639_3'=>'uz', 'name'=>'Uzbek', 'active'=>0],
			['iso_639_1'=>'ve', 'iso_639_3'=>'ve', 'name'=>'Venda', 'active'=>0],
			['iso_639_1'=>'vi', 'iso_639_3'=>'vi', 'name'=>'Vietnamese', 'active'=>0],
			['iso_639_1'=>'vo', 'iso_639_3'=>'vo', 'name'=>'Volapük', 'active'=>0],
			['iso_639_1'=>'wa', 'iso_639_3'=>'wa', 'name'=>'Walloon', 'active'=>0],
			['iso_639_1'=>'cy', 'iso_639_3'=>'cym', 'name'=>'Welsh', 'active'=>0],
			['iso_639_1'=>'wo', 'iso_639_3'=>'wo', 'name'=>'Wolof', 'active'=>0],
			['iso_639_1'=>'fy', 'iso_639_3'=>'fy', 'name'=>'Western Frisian', 'active'=>0],
			['iso_639_1'=>'xh', 'iso_639_3'=>'xh', 'name'=>'Xhosa', 'active'=>0],
			['iso_639_1'=>'yi', 'iso_639_3'=>'yi', 'name'=>'Yiddish', 'active'=>0],
			['iso_639_1'=>'yo', 'iso_639_3'=>'yo', 'name'=>'Yoruba', 'active'=>0],
			['iso_639_1'=>'za', 'iso_639_3'=>'za', 'name'=>'Zhuang, Chuang', 'active'=>0],
		]);
	}

}
