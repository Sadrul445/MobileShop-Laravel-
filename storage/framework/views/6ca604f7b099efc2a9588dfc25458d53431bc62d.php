<?php if (isset($component)) { $__componentOriginalf5302f8d9d4888814441d6c8cf3eb2dcc5b1c16c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FrontendLayout::class, []); ?>
<?php $component->withName('frontend-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col mb-5">
            <div class="card h-100" style="box-shadow:5px 5px 20px 4px grey;border-radius:12px">
                <!-- Product image-->
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                <img class="card-img-top" src="<?php echo e(Storage::url($items -> image)); ?>" alt="..."  height="230px" width="180px"/>
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder"><?php echo e($items -> name); ?></h5>
                        <!-- Product price-->
                        <p class="fw-bolder"><?php echo e($items -> price); ?> ৳</p>

                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><i class="fa fa-plus-square"></i><a class="btn btn-outline-dark mt-auto" href="#">Add Cart</a></div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5302f8d9d4888814441d6c8cf3eb2dcc5b1c16c)): ?>
<?php $component = $__componentOriginalf5302f8d9d4888814441d6c8cf3eb2dcc5b1c16c; ?>
<?php unset($__componentOriginalf5302f8d9d4888814441d6c8cf3eb2dcc5b1c16c); ?>
<?php endif; ?> <?php /**PATH D:\MobileShop-Laravel-Framework\resources\views/frontend/index.blade.php ENDPATH**/ ?>