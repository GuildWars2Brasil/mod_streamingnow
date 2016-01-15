<?php
/**
 * Streaming Now Module Entry Point
 *
 * @package    GuildWars2Brasil.Modules
 * @subpackage Modules
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );

$streams = modStreamingNowHelper::getStreams($params);
$main_streams = modStreamingNowHelper::getMainStreams($params);

// Priorizar streamings específicos
foreach($streams as $key => $stream) {
	// Abaixo os últimos serão os primeiros da lista
	$priority = array(
		'esportnacional', 'guildwars2'
	);
	if(in_array($stream['channel']['name'], $priority)){
		array_unshift($main_streams, $stream);
		unset($streams[$key]);
	}
}

require( JModuleHelper::getLayoutPath('mod_streamingnow'));
?>
