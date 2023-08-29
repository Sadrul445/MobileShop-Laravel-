<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.layouts.master','data' => []]); ?>
<?php $component->withName('backend.layouts.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('pageTitle', null, []); ?> 
       Mobile Phone Dokan : Create  
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
    <main>   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4" >Add New</h3></div>
                        <div class="card-body">
                            
            
                            <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-sm-3 col-form-label"> Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputName" name="name" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputCat" class="col-sm-3 col-form-label">Category Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputCat" name="category_name" value="">
                                        <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="small text-danger"> <?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputBrandName" class="col-sm-3 col-form-label"> Brand Name: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputBrandName" name="brand_name" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputDescription" class="col-sm-3 col-form-label"> Description: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputDescription" name="description" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPrice" class="col-sm-3 col-form-label"> Price: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPrice" name="price" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputImage" class="col-sm-3 col-form-label">Image: </label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="inputImage" name="image" value="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputStatus" class="col-sm-3 col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status">
                                            <label class="form-check-label" for="flexCheckChecked">
                                              Checked
                                            </label>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <div class="col-sm-9 offset-3">
                                    <button class="btn btn-success" type="submit">
                                        Submit
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\MobileShop-Laravel-Framework\resources\views/backend/products/create.blade.php ENDPATH**/ ?>