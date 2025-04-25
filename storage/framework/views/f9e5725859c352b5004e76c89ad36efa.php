<div class="modal fade" id="modalUpdateBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:40%;">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3f42ce; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Brand</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form method="POST" class="formUpdateUpdate" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="hidden" id="brand_id" name="brand_id">
                   <label for="">Brand Name</label>
                   <input type="text" name="name" class="name name_edit form-control" id="">
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
                     <option value="0">Block</option>
                  </select>
                  <p></p>
                </div>

           </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" onclick="BrandUpdate('.formUpdateUpdate')" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
</div><?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/back-end/messages/brand/edit.blade.php ENDPATH**/ ?>