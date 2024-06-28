<?php $__env->startSection('title','Manage Users'); ?>

<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('dash')); ?>" class="link-dark">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel - Caintic\rbac_proj\resources\views/admin/manageUsers.blade.php ENDPATH**/ ?>