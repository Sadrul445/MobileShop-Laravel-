<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.layouts.master','data' => []]); ?>
<?php $component->withName('backend.layouts.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('pageTitle', null, []); ?> 
       OnePlus Phone
     <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.elements.breadcrumb','data' => []]); ?>
<?php $component->withName('backend.elements.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('pageHeader', null, []); ?>  <p style="color: rgb(156, 11, 11); display:inline">Mobile </p> Phone Dokan  <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
  <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
          
          
          Products 
          <a href="<?php echo e(route('products.create')); ?>" 
          style="background-color: brown;
          text-decoration:none;
          color:white; 
          padding:6px ; 
          border-radius:10px;
          float:right;">Add Phones <i class="fas fa-plus"></i></a>
      </div>
      <div class="card-body">

          <?php if(session('message')): ?>
          
              <div class="alert alert-success">
                  <strong><?php echo e(session('message')); ?></strong>
              </div>
          <?php endif; ?>
    <table class="table table-striped" style="color: rgb(255, 255, 255);font-size:16px;border-radius:20px">
        <thead>
            <tr style="background-color:brown;">
              <th scope="col">#SL</th>
              <th scope="col">Name</th>
              <th scope="col">Category Name</th>
              <th scope="col">Brand Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price ৳</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $sl=0   
            ?>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color:rgb(255, 255, 255);color:rgb(150, 15, 15)">
                <td><?php echo e(++$sl); ?></td>
                <td><?php echo e($mobile -> name); ?></td>
                <td><?php echo e($mobile -> category_name); ?></td>
                <td><?php echo e($mobile -> brand_name); ?></td>
                <td style="width: 20%"><?php echo e($mobile -> description); ?></td>
                <td><?php echo e($mobile -> price); ?> <span> ৳</span></td>
                <td><img src="<?php echo e(Storage::url($mobile-> image)); ?>" alt="" height="100px"></td>
                <td>
                  <?php if($mobile -> status == 1): ?>
                      <p>Active</p>
                  <?php else: ?>
                      <p>Deactive</p>
                  <?php endif; ?>
                </td>
                <td>
                    <a class="btn btn-primary" href="<?php echo e(route('products.edit',['product'=>$mobile-> id])); ?>"><i class="fa fa-edit"></i></a>
                    <form action="<?php echo e(route('products.destroy',['product'=> $mobile -> id])); ?>" method="post" enctype="multipart/form-data" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                      
                      <button type= "submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
              </tr>      
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </tbody>
      </table>
    </div>
  </div>    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\MobileShop-Laravel-Framework\resources\views/backend/products/index.blade.php ENDPATH**/ ?>