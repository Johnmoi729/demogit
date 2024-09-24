<?php $__env->startSection('title', 'Chi tiết bài đăng'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1><?php echo e($post->car->make); ?> <?php echo e($post->car->model); ?> - <?php echo e($post->year); ?></h1>
    
    <img src="<?php echo e(asset($post->image_url)); ?>" alt="<?php echo e($post->car->make); ?> <?php echo e($post->car->model); ?>" class="img-fluid" style="max-height: 400px; object-fit: cover;">
    
    <div class="mt-4">
        <p><strong>Mô tả:</strong> <?php echo e($post->description); ?></p>
        <p><strong>Giá:</strong> <?php echo e(number_format($post->price)); ?> $</p>
        <p><strong>Số km đã đi:</strong> <?php echo e($post->mileage); ?> km</p>
        <p><strong>Năm sản xuất:</strong> <?php echo e($post->year); ?></p>
        <p><strong>Trạng thái:</strong> <?php echo e($post->status); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/posts/show.blade.php ENDPATH**/ ?>