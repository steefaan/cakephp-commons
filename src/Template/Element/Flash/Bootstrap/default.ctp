<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-info alert-dismissable">
			<?php
				echo $this->Form->button('&times;', [
					'data-dismiss' => 'alert',
					'aria-hidden' => true,
					'class' => 'close',
					'escape' => false
				]);
			?>
			<strong>
				<?php $this->FontAwesome->icon('info-circle'); ?>
				<?= __('Info') . ': '; ?>
			</strong>
			<?= h($message); ?>
		</div>
	</div>
</div>
