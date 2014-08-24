<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-warning alert-dismissable">
			<?php
				echo $this->Form->button('&times;', [
					'data-dismiss' => 'alert',
					'aria-hidden' => true,
					'class' => 'close',
					'escape' => false
				]);
			?>
			<strong>
				<?php $this->FontAwesome->icon('warning'); ?>
				<?= __('Warning') . ': '; ?>
			</strong>
			<?= h($message); ?>
		</div>
	</div>
</div>
