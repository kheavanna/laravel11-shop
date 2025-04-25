<div class="modal fade" id="modalCreateBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #4b2bfd; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Brand</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form method="POST" class="formCreateBrand" enctype="multipart/form-data">

                <div class="form-group">
                   <label for="">Brand Name</label>
                   <input type="text" name="name" class="name form-control" id="">
                   <p></p>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="category form-control">
                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" class="status form-control">
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                  </select>
                  <p></p>
                </div>

           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="BrandStore('.formCreateBrand')" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
</div><?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/back-end/messages/brand/create.blade.php ENDPATH**/ ?>