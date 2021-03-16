<style>
	.helper{font-size:.85em;}
</style>

<h2><?php echo __('Account Settings'); ?></h2>

<fieldset id="account">

	<div class="field">
	    <div class="two columns alpha">
	        <label for="id_account"><?php echo __('Site Account'); ?></label>
	    </div>

	    <div class="inputs five columns omega">
	        <p class="explanation"><?php echo __("Enter the IntenseDebate site acct id."); ?></p>

	        <div class="input-block">
	            <input type="text" class="textinput" name="id_account" value="<?php echo get_option('id_account'); ?>">
	            <p class="helper"><?php echo __('Log into your account at <a target="_blank" href="http://intensedebate.com/">intensedebate.com</a>. Choose or create a site. Click "View Site Key" and copy the value for "IntenseDebate site acct." <br>Need help? View an <a target="_blank" href="' .WEB_ROOT. '/plugins/IntenseDebate/assets/screenshot.png' . '">example screenshot</a> or visit <a target="_blank" href="http://support.intensedebate.com/">intensedebate.com</a>.'); ?></p>
	        </div>
	    </div>
	</div>

</fieldset>


<h2><?php echo __('Display Settings'); ?></h2>

<fieldset id="display">


	<div class="field">
	    <div class="two columns alpha">
	        <label for="id_items"><?php echo __('Items'); ?></label>
	    </div>

	    <div class="inputs five columns omega">
	        <?php echo get_view()->formCheckbox('id_items', true,
	array('checked'=>(boolean)get_option('id_items'))); ?>

	        <p class="explanation"><?php echo __('Display comments on item record.'); ?></p>
	    </div>
	</div>

	<div class="field">
	    <div class="two columns alpha">
	        <label for="id_collections"><?php echo __('Collections'); ?></label>
	    </div>

	    <div class="inputs five columns omega">
	        <?php echo get_view()->formCheckbox('id_collections', true,
	array('checked'=>(boolean)get_option('id_collections'))); ?>

	        <p class="explanation"><?php echo __('Display comments on collection record.'); ?></p>
	    </div>
	</div>