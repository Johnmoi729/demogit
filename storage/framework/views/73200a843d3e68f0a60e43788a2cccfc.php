<?php $__env->startSection('title', 'Đăng tin'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Đăng tin bán xe</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <!-- Chọn Xe từ bảng cars -->
        <div class="form-group">
            <label for="car_id">Chọn xe</label>
            <select name="car_id" class="form-control" required>
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($car->id); ?>"><?php echo e($car->make); ?> <?php echo e($car->model); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Chọn Gói -->
        <div class="form-group">
            <label for="package_id">Chọn gói</label>
            <select name="package_id" class="form-control" required>
                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($package->id); ?>"><?php echo e($package->name); ?> - Giá: <?php echo e(number_format($package->price)); ?> VND</option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Giá xe -->
        <div class="form-group">
            <label for="price">Giá xe</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <!-- Mô tả -->
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <!-- Tải ảnh lên -->
        <div class="form-group">
            <label for="image">Tải ảnh lên</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <!-- Số km đã đi -->
        <div class="form-group">
            <label for="mileage">Số km đã đi</label>
            <input type="number" name="mileage" class="form-control" required>
        </div>

        <!-- Năm sản xuất -->
        <div class="form-group">
            <label for="year">Năm sản xuất</label>
            <input type="number" name="year" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Đăng tin và Thanh toán</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/posts/create.blade.php ENDPATH**/ ?>