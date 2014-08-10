<?php

/**
*
* @package Recent Topics Extension
* @copyright (c) 2014 PayBas, phpBBservice.nl <http://www.phpbbservice.nl>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Recente Onderwerpen',
	'RECENT_TOPICS_LIST'			=> 'Weergeven op “recente onderwerpen”',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Inschakelen om onderwerpen van dit forum weer te geven in de “recente onderwerpen” extensie',

	'RT_CONFIG'						=> 'Configuratie',
	'RT_ANTI_TOPICS'				=> 'Uitgesloten onderwerpen',
	'RT_ANTI_TOPICS_EXP'			=> 'Gescheiden door “, ” (Bijvoorbeeld: “7, 9”)<br />Als je geen onderwerpen wilt uitsluiten, voer dan een 0 in.',
	'RT_NUMBER'						=> 'Recente onderwerpen',
	'RT_NUMBER_EXP'					=> 'Aantal onderwerpen weergegeven op de indexpagina.',
	'RT_PAGE_NUMBER'				=> 'Recente onderwerpen pagina’s',
	'RT_PAGE_NUMBER_EXP'			=> 'Je kan meerdere recente onderwerpen weergeven door gebruik te maken van paginering. Vul 1 in om deze functie uit te schakelen. Als je 0 invoert, dan zullen er zoveel pagina’s weergegeven worden als nodig is om alle onderwerpen van je forum weer te geven (niet aanbevolen).',
	'RT_PARENTS'					=> 'Hoofdforums weergeven',
	'RT_PARENTS_EXP'				=> 'Hoofdforums weergeven in de onderwerpenrij van recente onderwerpen.',
	'RT_UNREADONLY'					=> 'Alleen ongelezen onderwerpen weergeven',
	'RT_UNREADONLY_EXP'				=> 'Schakel dit in om ongelezen onderwerpen weer te geven (ongeacht of ze "recent" zijn of niet). Deze functie gebruikt dezelfde instelling (uitsluiten van forums/onderwerpen etc.) als de normale mode. Let op: dit werkt alleen voor aangemelde gebruikers; gasten zullen de normale lijst krijgen.',

	'RT_VIEW_ON'					=> 'Geef recente onderwerpen weer op:',
));
