<?php
/**
 * @version     $Id: default_profiles.php 1041 2011-10-09 00:04:40Z johanjanssens $
 * @category	Nooku
 * @package     Nooku_Components
 * @subpackage  Debug
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */
defined('KOOWA') or die( 'Restricted access' ); ?>

<table class="adminlist">
	<thead>
    	<tr>
    		<th class="-koowa-sortable"><?= @text('Identifier') ?></th>
    		<th class="-koowa-sortable"><?= @text('Event'); ?></th>
    		<th class="-koowa-sortable"><?= @text('Time'); ?></th>
    		<th class="-koowa-sortable"><?= @text('Memory'); ?></th>
    	</tr>
  	</thead>
  	<tbody>
  		<? foreach ( $events as $event ) : ?>
  		<tr>  
			<td class="-koowa-sortable"><?= $event['caller'] ?></div>
            <td class="-koowa-sortable"><?= $event['message'] ?></td>
            <td class="-koowa-sortable" data-comparable="<?= $event['time'] ?>"><?= sprintf('%.3f', $event['time']).' seconds' ?></td>
            <td class="-koowa-sortable"><?= $event['memory'] ?></td>
        </tr>
         <? endforeach; ?>
  	</tbody>
</table>
