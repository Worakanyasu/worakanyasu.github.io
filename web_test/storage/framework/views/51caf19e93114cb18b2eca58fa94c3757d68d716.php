<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('ยินดีต้อนรับสู่หน้าต่างของฉัน!')); ?>

                    <br>
                    <button type="submit" onclick="document.location='form'" class="btn btn-primary">
                        Profile
                    </button>
                    <button type="submit" onclick="document.location='page'" class="btn btn-primary">
                        Page
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_test\resources\views/home.blade.php ENDPATH**/ ?>