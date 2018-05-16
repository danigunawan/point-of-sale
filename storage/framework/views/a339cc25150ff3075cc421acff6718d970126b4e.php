<?php if(session()->has('notif.message')): ?>
<script type="text/javascript">
$.notify({
	// options
	message: '<?php echo session()->get('notif.message'); ?>'
},{
	// settings
	type: '<?php echo e(session()->get('notif.level')); ?>'
});
</script>
<?php endif; ?>
