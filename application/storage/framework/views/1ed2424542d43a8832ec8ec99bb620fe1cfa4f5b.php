
<?php $__env->startSection('settings-page'); ?>
<!-- action buttons -->
<?php echo $__env->make('pages.settings.sections.roles.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--heading-->
<?php echo $__env->make('pages.settings.sections.webmailtemplates.table.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.settings.ajaxwrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\application\resources\views/pages/settings/sections/webmailtemplates/page.blade.php ENDPATH**/ ?>