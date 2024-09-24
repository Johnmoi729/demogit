<?php $__env->startSection('title', 'Danh sách Xe Cũ'); ?>

<?php $__env->startSection('content'); ?>
<style>
.container {
    margin-top: 50px;
    padding: 0 20px;
}

h1 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 2.5em;
    color: #333;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 15px;
    text-align: left;
}

.table thead th {
    background-color: #333;
    color: white;
}

.table tbody tr:hover {
    background-color: #f5f5f5;
}

.table tbody tr a {
    color: #007bff;
    text-decoration: none;
}

.table tbody tr a:hover {
    text-decoration: underline;
}

.car-image {
    width: 100px;
    height: auto;
}
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4">Danh sách Xe Cũ</h1>

    <?php if($cars->isEmpty()): ?>
        <div class="alert alert-warning text-center" role="alert">
            Chưa có xe cũ nào.
        </div>
    <?php else: ?>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Hình ảnh</th> <!-- Thêm cột hình ảnh -->
                    <th scope="col">Hãng xe</th>
                    <th scope="col">Mẫu xe</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php if($car->image): ?>
                                <img src="<?php echo e(asset($car->image)); ?>" alt="<?php echo e($car->make); ?>" class="car-image">
                            <?php else: ?>
                                <span>Chưa có hình ảnh</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('posts.byCar', ['car_id' => $car->id])); ?>">
                                <?php echo e($car->make); ?>

                            </a>
                        </td>
                        <td><?php echo e($car->model); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\P1\XAMPP\htdocs\demogit-master\resources\views/cars/index.blade.php ENDPATH**/ ?>