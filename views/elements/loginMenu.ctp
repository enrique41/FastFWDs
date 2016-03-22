<?php if (!($display_login) || $user == 'anonymous'): ?>
	<?php echo $this->element('login'); ?>
<?php else: ?>
	<?php echo $this->element('userMenu'); ?>
<?php endif; ?>