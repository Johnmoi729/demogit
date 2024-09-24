<?php $__env->startSection('title', 'Tài khoản của tôi'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Thông tin tài khoản</h1>

    <!-- Thông báo thành công nếu có -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Hiển thị thông tin người dùng -->
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Số dư tài khoản</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                <td><?php echo e(number_format($user->balance, 2)); ?> VND</td>
            </tr>
        </tbody>
    </table>

    <!-- Form để cập nhật thông tin người dùng -->
    <h2 class="mt-5">Cập nhật thông tin tài khoản</h2>
    <form action="<?php echo e(route('user.update')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="username">Tên</label>
        <input type="text" name="username" class="form-control" value="<?php echo e($user->username); ?>" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" required>
    </div>

    <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" class="form-control" value="<?php echo e($user->phone); ?>" required>
    </div>

    <!-- Thêm trường để người dùng cập nhật mật khẩu -->
    <a href="<?php echo e(route('user.password.form')); ?>" class="btn btn-warning mt-3">Đổi mật khẩu</a>


    <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/contact/index.blade.php ENDPATH**/ ?>