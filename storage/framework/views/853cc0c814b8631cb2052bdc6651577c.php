

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Teacher Details</h2>
  <div class="card">
    <div class="card-header">
      <?php echo e($teacher->name); ?>

    </div>
    <div class="card-body">
      <p><strong>Name:</strong> <?php echo e($teacher->name); ?></p>
      <p><strong>Address:</strong> <?php echo e($teacher->address); ?></p>
      <p><strong>Mobile:</strong> <?php echo e($teacher->mobile); ?></p>
      <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>" class="btn btn-primary">Edit</a>
      <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="POST" style="display:inline-block;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
      </form>
      <a href="<?php echo e(route('teachers.index')); ?>" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement\studentmanagement-app\resources\views/teachers/show.blade.php ENDPATH**/ ?>