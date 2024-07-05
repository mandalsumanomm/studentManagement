

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Student Details</h2>
  <div class="card">
    <div class="card-header">
      <?php echo e($student->name); ?>

    </div>
    <div class="card-body">
      <p><strong>Name:</strong> <?php echo e($student->name); ?></p>
      <p><strong>Address:</strong> <?php echo e($student->address); ?></p>
      <p><strong>Mobile:</strong> <?php echo e($student->mobile); ?></p>
      <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary">Edit</a>
      <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline-block;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
      </form>
      <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement\studentmanagement-app\resources\views/students/show.blade.php ENDPATH**/ ?>