<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-danger alert-dismissable">
			<?php
				echo $this->Form->button('&times;', [
					'data-dismiss' => 'alert',
					'aria-hidden' => true,
					'class' => 'close',
					'escape' => false
				]);
			?>
			<strong>
				<?php $this->FontAwesome->icon('times-circle'); ?>
				<?= __('Error') . ': '; ?>
			</strong>
			<?= h($message); ?>
		</div>
	</div>
</div>
