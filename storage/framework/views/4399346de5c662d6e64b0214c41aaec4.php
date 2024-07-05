

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Teacher Application</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <div class="mb-3">
    <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-success">Add New</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($item->name); ?></td>
        <td><?php echo e($item->address); ?></td>
        <td><?php echo e($item->mobile); ?></td>
        <td>
          <a href="<?php echo e(route('teachers.show', $item->id)); ?>" class="btn btn-info btn-sm">View</a>
          <a href="<?php echo e(route('teachers.edit', $item->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
          <form action="<?php echo e(route('teachers.destroy', $item->id)); ?>" method="POST" style="display:inline-block;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement\studentmanagement-app\resources\views/teachers/index.blade.php ENDPATH**/ ?>