<?php $__env->startSection('title', 'Bài Đăng theo Xe'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Danh sách Bài Đăng về Xe</h1>

    <?php if($posts->isEmpty()): ?>
        <div class="alert alert-warning text-center" role="alert">
            Chưa có bài đăng nào cho xe này.
        </div>
    <?php else: ?>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số km đã đi</th>
                    <th scope="col">Năm sản xuất</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col"></th> <!-- Thêm cột Hành động -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post->description); ?></td>
                        <td><?php echo e(number_format($post->price)); ?> VND</td>
                        <td><?php echo e($post->mileage); ?> km</td>
                        <td><?php echo e($post->year); ?></td>
                        <td><img src="<?php echo e(asset($post->image_url)); ?>" alt="Hình ảnh" style="max-width: 100px;" class="img-thumbnail"></td>
                        <td>
                            <a href="<?php echo e(route('posts.show', ['id' => $post->id])); ?>" class="btn btn-primary w-100">Xem chi tiết</a> <!-- Thêm nút Xem chi tiết -->
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/posts/byCar.blade.php ENDPATH**/ ?>