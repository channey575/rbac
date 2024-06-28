<?php $__env->startSection('page-content'); ?>
<div class="container-fluid">
    <!-- Be present above all else. - Naval Ravikant -->
    <table class="table table-striped-columns table-dark table-hover">
       <tr>
          <th>#</th>
          <th>Entry</th>
          <th>Entry Amount</th>
          <th>Encoded By</th>
          <th></th>
       </tr>
       <?php $__currentLoopData = $allBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
          <td><?php echo e($book->id); ?></td>
          <td><?php echo e($book->entry); ?></td>
          <td class="text-end"><?php echo e(number_format($book->amount,2)); ?></td>
          <td><?php echo e($book->user_id); ?></td>
          <td>
            <a href="<?php echo e(route('ledger',$book->id)); ?>" class="link-warning">View Details</a>
          </td>
       </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <tr>
          <td colspan="5">
              <?php echo e($allBooks->links()); ?>

          </td>
       </tr>
    </table>

    <a href="<?php echo e(route('acctg')); ?>" class="link-dark">Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel - Caintic\rbac_proj\resources\views/acctg/books/viewLedgers.blade.php ENDPATH**/ ?>