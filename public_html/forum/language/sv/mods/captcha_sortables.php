<?php
/**
*
* sortables captcha [Swedish]
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_SORTABLES'				=> 'Sorterbar CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Vänligen dra alternativen med musen till rätt lista, för att undvika automatiska registreringar.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Välj alternativen nedan för att rätt lista för att undvika automatiska registreringar.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Du har fel sorterat objekten till rätt lista av bekräftelsen frågan.',

	'QUESTION_ANSWERS'			=> 'Svar',
	'ANSWERS_EXPLAIN'			=> 'Alternativen för denna kolumn. Skriv gärna ett alternativ per rad.',
	'CONFIRM_QUESTION'			=> 'Frågor',
	'CHANGES_SUBMIT'			=> 'Bekräfta ändringar',

	'EDIT_QUESTION'				=> 'Ändra Fråga',
	'QUESTIONS'					=> 'Sorterbara List Frågor',
	'QUESTIONS_EXPLAIN'			=> 'Här kan du lägga till och redigera frågor att ställa vid registreringen. Du måste ange minst en fråga i den förvalda språket ombord för att använda denna plugin. Frågorna bör vara enkelt för din målgrupp. Användarna kommer att se alla alternativ i en kolumn och måste sortera dem till rätt kolumn. Kom också ihåg att ändra frågorna regelbundet.',
	'QUESTION_DELETED'			=> 'Frågan raderad',
	'QUESTION_LANG'				=> 'Språk',
	'QUESTION_LANG_EXPLAIN'		=> 'Språket denna fråga och dess alternativ är skriven i.',
	'QUESTION_SORT'				=> 'Förvald sorterbar lista',
	'QUESTION_SORT_EXPLAIN'		=> 'I vilken kolumn skall alla svar visas som standard.',
	
	'COLUMN_LEFT'				=> 'Vänster kolumn',
	'COLUMN_RIGHT'				=> 'Höger kolumn',
	'COLUMN_NAME'				=> 'Kolumn namn',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Exempel: Saker jag behöver',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Exempel: Saker jag inte behöver',
	
	'DEMO_QUESTION'				=> 'Vad som ska ingå för tomatsoppa',	
	'DEMO_NAME_LEFT'			=> 'I pannan',
	'DEMO_NAME_RIGHT'			=> 'Släng',
	'DEMO_OPTION_BANANAS'		=> 'Bananer',
	'DEMO_OPTION_TOMATOES'		=> 'Tomater',
	'DEMO_OPTION_APPLES'		=> 'Äpplen',
	'DEMO_PREVIEW_ONLY'			=> 'Du kan inte flytta alternativen i en förhandsvisning.',

	'QUESTION_TEXT'				=> 'Fråga',
	'QUESTION_TEXT_EXPLAIN'		=> 'Förklara hur de alternativ som ska sorteras i kolumnerna.',

	'SORTABLES_ERROR_MSG'		=> 'Fyll i alla fält och ange minst ett alternativ för båda kolumnerna.',
));

?>