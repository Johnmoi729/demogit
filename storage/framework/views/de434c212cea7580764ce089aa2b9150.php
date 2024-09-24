<?php $__env->startSection('title', 'Bài Đăng theo Xe'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Danh sách Bài Đăng về Xe</h1>

    <?php if($posts->isEmpty()): ?>
        <div class="alert alert-warning text-center" role="alert">
            Chưa có bài đăng nào cho xe này.
        </div>
    <?php else: ?>
        <div class="row">
            <!-- Hiển thị danh sách bài đăng -->
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 mb-4">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset($post->image_url)); ?>" class="card-img" alt="Hình ảnh xe">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($post->car->make); ?> - <?php echo e($post->car->model); ?> - <?php echo e($post->year); ?></h5>
                                    <p class="card-text text-muted">Số tự động • Máy xăng • <?php echo e($post->mileage); ?> km</p>
                                    <h6 class="text-danger"><?php echo e(number_format($post->price)); ?> $</h6>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">
                                            <i class="fa fa-map-marker-alt"></i> Hà Nội
                                            <div class="card-footer">
    <a href="<?php echo e(route('posts.show', ['id' => $post->id])); ?>" class="btn btn-primary w-100">Xem chi tiết</a>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/posts/by_car.blade.php ENDPATH**/ ?>