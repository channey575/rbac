<?php $__env->startSection('page-title','Account Registration'); ?>

<?php $__env->startSection('auth-content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-left lh-sm" style="font-size: 1.6rem; background-color: black; color: white;">Register New User</div>
        <div class="col-sm-3"></div>
    </div>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col">
        </div>
        
        <div class="col" style="border-top:1px solid grey; border-left:1px solid grey; border-bottom:1px solid grey; ">
            <div>
                <label class="auth-labels">First Name</label>
                <input type="text" name="firstname" value="<?php echo e(old('firstname')); ?>" required class="auth-textbox form-control form-control-sm">
                <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="auth-labels">Last Name</label>
                <input type="text" name="lastname" value="<?php echo e(old('lastname')); ?>" required class="auth-textbox form-control form-control-sm">
                <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="auth-labels">Username</label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" required class="auth-textbox form-control form-control-sm">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="col" style="border-top:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey; ">
            <div>
                <label class="auth-labels">Email</label>
                <input type="email" name="email" class="auth-textbox form-control form-control-sm">
                <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input">
                <label for="generate_email" class="form-check-label">Generate Email Address</label>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="auth-labels">Password</label>
                <input type="password" name="password" required class="auth-textbox form-control form-control-sm">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label class="auth-labels">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="auth-textbox form-control form-control-sm">
            </div>
        </div>
        
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 py-2" style="border-left:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey;">
            <div class="text-center">
                <button type="submit" class="btn btn-md btn-primary">Register</button>
                <button type="reset" class="btn btn-md btn-danger">Clear</button>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </form>
    <div class="col-row text-center">
        <a href="<?php echo e(route('home')); ?>" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Return to Landing Page</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel - Caintic\rbac_proj\resources\views/auth/register.blade.php ENDPATH**/ ?>