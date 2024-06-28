<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <div class="row">

        <div class="col-4" style="background-color: black; color: white;">Ledger Entry Details</div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div>
                Entry Number: <?php echo e($ledger->id); ?>

            </div>
            <div>
                Entry Details: <br>
                <textarea name="" id="" cols="30" rows="5" class="text-start">
                <?php echo e($ledger->entry); ?>

                </textarea>
            </div>
            <div>
                Amount: PHP <span class="fw-bold"><?php echo e(number_format($ledger->amount,2)); ?></span>
            </div>
            <div>
                Encoded by: <?php echo e($encoder->user_firstname.' '.$encoder->user_lastname); ?>

            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('ledgers')); ?>" class="link-dark">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel - Caintic\rbac_proj\resources\views/acctg/books/viewLedger.blade.php ENDPATH**/ ?>