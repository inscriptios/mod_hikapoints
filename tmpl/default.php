<?php
/**
 * @package	HikaShop Points for Joomla!
 * @version	1.0.0
 * @author	https://github.com/inscriptios
 * @copyright	(C) 2018 inscriptios. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php if(!empty($html1)){ ?>
<div id="hikapoints_module_<?php echo $module->id;?>" class="hikapoints_module <?php echo @$module->params['moduleclass_sfx']; ?>">
<span class="hikapoints_message"><?php echo $html1; ?></span>
</div>
<?php } else { ?>
<div id="hikapoints_module_<?php echo $module->id;?>" class="hikapoints_module <?php echo @$module->params['moduleclass_sfx']; ?>">
<span class="hikapoints_need_login"><?php echo $html2; ?></span>
</div>
<?php } ?>
