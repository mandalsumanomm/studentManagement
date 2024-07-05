

<?php $__env->startSection('content'); ?>
<div class="container">
  <h2>Add New Student</h2>
  <div class="card">
    <div class="card-header">
      Student Information
    </div>
    <div class="card-body">
      <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile</label>
          <input type="text" class="form-control" id="mobile" name="mobile" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement\studentmanagement-app\resources\views/students/create.blade.php ENDPATH**/ ?>