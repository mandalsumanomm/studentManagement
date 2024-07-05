

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Edit Student</h2>
  <div class="card">
    <div class="card-header">
      Edit <?php echo e($student->name); ?>

    </div>
    <div class="card-body">
      <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo e($student->name); ?>" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="<?php echo e($student->address); ?>" required>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile</label>
          <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo e($student->mobile); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement\studentmanagement-app\resources\views/students/edit.blade.php ENDPATH**/ ?>