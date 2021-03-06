<?php
/**
 * @version     $Id: executable.php 3024 2011-10-09 01:44:30Z johanjanssens $
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Extensions
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Language Controller Executable Behavior
 *
 * @author      Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Extensions
 */
class ComExtensionsControllerBehaviorExecutable extends ComDefaultControllerBehaviorExecutable
{  
    public function canAdd()
    {
        if($this->getMixer()->getIdentifier()->name == 'module') {
            return true;
        }
        
        return false; 
    }
    
    public function canDelete()
    {
        if($this->getMixer()->getIdentifier()->name == 'module') {
            return true;
        }
        
        return false; 
    }
}