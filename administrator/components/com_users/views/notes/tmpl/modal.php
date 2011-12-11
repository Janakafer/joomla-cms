<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* @var $this UsersViewNotes */

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
?>
<div class="unotes">
	<h1><?php echo JText::sprintf('COM_USERS_NOTES_FOR_USER', $this->user->name, $this->user->id); ?></h1>
<?php if (empty($this->items)) : ?>
	<?php echo JText::_('COM_USERS_NO_NOTES'); ?>
<?php else : ?>
	<ol>
	<?php foreach ($this->items as $i => $item) : ?>
		<li class="<?php echo $i % 2 ? 'o' : 'e'; ?>">
			<div class="fltlft">
				<?php if ($item->subject) : ?>
					<h4><?php echo JText::sprintf('COM_USERS_NOTE_N_SUBJECT', $item->id, $this->escape($item->subject)); ?></h4>
				<?php else : ?>
					<h4><?php echo JText::sprintf('COM_USERS_NOTE_N_SUBJECT', $item->id, JText::_('COM_USERS_EMPTY_SUBJECT')); ?></h4>
				<?php endif; ?>
			</div>

			<div class="fltlft">
				<?php echo JHtml::date($item->created_time, 'l d F Y H:i'); ?>
			</div>

			<?php if ($item->catid) : ?>
			<div class="fltrgt">
				<?php /*echo JHtml::_('user.image', $item->category_params->get('image'));*/ ?>
			</div>
			<?php endif; ?>

			<div class="clr"></div>

			<?php echo $item->body; ?>
		</li>
	<?php endforeach; ?>
	</ol>
<?php endif; ?>
</div>