<?php
/**
 * @version     $Id: folder.php 1428 2012-01-20 17:14:12Z ercanozkaya $
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Files
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Folder Validator Command Class
 *
 * @author      Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Files
 */

class ComFilesCommandValidatorFolder extends ComFilesCommandValidatorNode
{
	protected function _databaseBeforeSave($context)
	{
		return parent::_databaseBeforeSave($context) && $this->getService('com://admin/files.filter.folder.uploadable')->validate($context);
	}
}