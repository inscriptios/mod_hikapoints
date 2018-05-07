<?php
/**
 * @package	HikaShop Points for Joomla!
 * @version	1.1.0
 * @author	https://github.com/inscriptios
 * @copyright	(C) 2018 inscriptios. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
if(!defined('DS'))
	define('DS', DIRECTORY_SEPARATOR);
if(!include_once(rtrim(JPATH_ADMINISTRATOR,DS).DS.'components'.DS.'com_hikashop'.DS.'helpers'.DS.'helper.php')){
	echo 'This module can not work without the Hikashop Component';
	return;
};

$hkuser = hikashop_loadUser(true);
if($hkuser) {
  $html1= JText::sprintf('USERPOINTS_HAVE_X_POINTS', (int)$hkuser->user_points);
} else {
  $html2 = JText::_('JERROR_ALERTNOAUTHOR');
}

require(JModuleHelper::getLayoutPath('mod_hikapoints'));
