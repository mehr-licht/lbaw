<?php $__env->startSection('title'); ?>
Internal Server Error
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('/css/print.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
        
        <div id="page-card" class="container card-container font-content not-found-container" style="margin-top:50px">
            <header>
                <h1>500 - Internal Server Error</h1>
            </header>
      
            <div class="not-found-body">
  
                <p>
                    Clique <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default">Aqui</a>para voltar atrás
                </p>
            </div>
        </div>
        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luis/git/A4S2/LBAW/lbaw2036/resources/views/errors/500.blade.php ENDPATH**/ ?>