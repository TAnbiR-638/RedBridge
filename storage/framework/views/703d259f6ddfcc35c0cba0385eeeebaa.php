<div class="page-section" id="donors">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Donors</h1>

      <div class="row">
  <?php $__currentLoopData = $donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-3">
    <div class="card-doctor">
      <div class="header">
        <img src="donorphotos/<?php echo e($donor->photo); ?>" alt="">
        <div class="meta">
          <a href="tel:<?php echo e($donor->phone); ?>"><span class="mai-call"></span></a>
          <a href="tel:<?php echo e($donor->phone); ?>"><span class="mai-logo-whatsapp"></span></a>
          
        </div>
      </div>
      <div class="body">
        <p class="text-xl mb-0"><?php echo e($donor->name); ?></p>
        <span class="text-sm text-grey"><?php echo e($donor->blood_group); ?></span> <br>
        <span class="text-sm text-grey"><?php echo e($donor->place); ?></span>
      </div>
      
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

    </div>
  </div><?php /**PATH C:\xampp\htdocs\blooddonation-home\resources\views/user/donors.blade.php ENDPATH**/ ?>