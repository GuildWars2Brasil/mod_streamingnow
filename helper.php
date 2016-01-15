<?php
/**
 * Helper class for Streaming Now module
 *
 * @package    GuildWars2Brasil.Modules
 * @subpackage Modules
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modStreamingNowHelper
{
    /**
     * Retrieves the streaming list
     *
     * @param array $params An object containing the module parameters
     * @access public
     */
    public static function getStreams( $params )
    {
    	ini_set('default_socket_timeout', 2);
		$jsondata = file_get_contents($params->get('url'));
		if ($jsondata) {
			$json = json_decode($jsondata, true);
			return $json['streams'];
		} else {
			return array();
		}
    }

    /**
     * Retrieves the streaming list
     *
     * @param array $params An object containing the module parameters
     * @access public
     */
    public static function getMainStreams( $params )
    {
    	ini_set('default_socket_timeout', 2);
		$jsondata = file_get_contents($params->get('url_main'));
		if ($jsondata) {
			$json = json_decode($jsondata, true);
			return $json['streams'];
		} else {
			return array();
		}
    }
}
?>
