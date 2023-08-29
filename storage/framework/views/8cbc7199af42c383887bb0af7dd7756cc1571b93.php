<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.layouts.master','data' => []]); ?>
<?php $component->withName('backend.layouts.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('pageTitle', null, []); ?> 
      Edit Mobile Phone Dokan 
     <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.elements.breadcrumb','data' => []]); ?>
<?php $component->withName('backend.elements.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('pageHeader', null, []); ?>  <p style="color: rgb(156, 11, 11); display:inline">Edit OnePlus</p> Phone    <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <main>   
    <form action="<?php echo e(route('products.update', ['product'=> $product -> id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-3 col-form-label">Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputName" 
				name="name" value="<?php echo e(old('name',$product-> name)); ?>">
                <?php $__errorArgs = ['name'];
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
            <label for="inputCategory" class="col-sm-3 col-form-label">Category Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputCategory" name="category_name" value="<?php echo e(old('category_name',$product-> category_name)); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputBrand" class="col-sm-3 col-form-label">Brand Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputBrand" name="brand_name" value="<?php echo e(old('brand_name',$product-> brand_name)); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPrice" class="col-sm-3 col-form-label">Price: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPrice" name="price" value="<?php echo e(old('price',$product-> price)); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputDescription" class="col-sm-3 col-form-label">Description: </label>
            <div class="col-sm-9">
                <textarea name="description" id="inputDescription" class="form-control" cols="30" rows="10"><?php echo e(old('description',$product-> description)); ?></textarea>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="inputImage" class="col-sm-3 col-form-label">Image: </label>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="inputImage" name="image" value="<?php echo e(old('image',$product-> image)); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputImage" class="col-sm-3 col-form-label">Status: </label>
            <div class="col-sm-9">
                
                <div class="form-check">

                    <?php if($product -> status == 1): ?>
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status" checked>
                    <?php else: ?>
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="status">
                    <?php endif; ?>
                    
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH D:\MobileShop-Laravel-Framework\resources\views/backend/products/edit.blade.php ENDPATH**/ ?>