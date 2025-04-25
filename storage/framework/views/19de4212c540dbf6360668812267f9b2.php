<?php $__env->startSection('contens'); ?>

      
      <?php echo $__env->make('back-end.messages.brand.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      

      
      <?php echo $__env->make('back-end.messages.brand.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Brands</h1>
                <p data-bs-toggle="modal" data-bs-target="#modalCreateBrand" class="card-description btn btn-primary ">new brand</p>
            </div>
            <table class="table table-striped">
              <thead class="table-dark">
                <tr>
                  <th class="text-white">Brand ID</th>
                  <th class="text-white">Brand name</th>
                  <th class="text-white">Category</th>
                  <th class="text-white">Status</th>
                  <th class="text-white">Action</th>
                </tr>
              </thead>
              <tbody class="brand_list">
                 
              </tbody>

            </table>
            <div class="d-flex justify-content-between align-items-center">

                <div class="show-page mt-3">

                </div>

                <button onclick="BrandRefresh()" class=" btn btn-outline-danger rounded-0 btn-sm">refresh</button>

            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>


    //Brand List
    const BrandList = (page=1,search='') => {
      $.ajax({
        type: "POST",
        url: "<?php echo e(route('brand.list')); ?>",
        data : {
            "page" : page,
            "search" : search
        },
        dataType: "json",
        success: function (response) {
            if(response.status == 200){
                let brands = response.brands;
                let tr = ``;
                $.each(brands, function (key,value) { 
                    tr += `
                    <tr>
                        <td>B${value.id}</td>
                        <td>${value.name}</td>
                        <th>${value.category.name}</th>
                        <th>
                            ${(value.status == 1) ? '<span class="badge badge-success p-1">Active</span>' : ' <span class="badge badge-danger  p-1">Inactive</span>' }
                        </th>
                        <th>
                            <button type="button" onclick="BrandEdit(${value.id},'${value.name}')" class=" btn btn-info  btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateBrand"><i class="mdi mdi-pencil-box-outline"></i></button>
                            <button type="button" onclick="BrandDelete(${value.id})" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                        </th>
                    </tr>
                    `;
                });

                $(".brand_list").html(tr);

                //pagination
                let page = ``;
                let totalPage = response.page.totalPage;
                let currentPage = response.page.currentPage;
                page = `
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li onclick="PreviousPage(${currentPage})" class="page-item ${(currentPage == 1) ? 'd-none' : 'd-block' }">
                        <a class="page-link" href="javascript:void()" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>`;

                        for(let i=1;i<=totalPage;i++){
                            page += `
                                <li onclick="BrandPage(${i})" class="page-item ${(i == currentPage) ? 'active' : '' }">
                                    <a class="page-link" href="javascript:void()">${i}</a>
                                </li>`;
                        }

                        page +=`<li onclick="NextPage(${currentPage})" class="page-item ${( currentPage == totalPage ) ? 'd-none' : 'd-block'}">
                        <a class="page-link" href="javascript:void()" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
                `;

                if(totalPage > 1 ){
                    $(".show-page").html(page);
                }

            }
        }
      });
    }

    //Calling function
    BrandList();

    //Brand Refresh page
    const BrandRefresh = () => {
        BrandList();
        $("#searchBox").val(" ");
    }


    //search event 
    $(document).on("click",'.searchBtn', function () {
         let searchValue = $("#searchBox").val();
         BrandList(1,searchValue);
         
         //close modal
         $("#modalSearch").modal('hide');
    });



    //Pagination
    const BrandPage = (page) => {
        BrandList(page);
    }

    //Previous Page
    const NextPage  = (page) => {
        BrandList(page + 1);
    }

    //Previous Page
    const PreviousPage = (page) => {
        BrandList(page - 1);
    }


   //Brand Delete
   const BrandDelete = (id) => {
      if(confirm("Do you want to delete this ?")){
        $.ajax({
            type: "POST",
            url: "<?php echo e(route('brand.destroy')); ?>",
            data: {
                "id" : id
            },
            dataType: "json",
            success: function (response) {
                if(response.status == 200){
                    BrandList();
                    Message(response.message);
                }
            }
        });
      }
   }

   //Brand Edit
    const BrandEdit = (id,name) => {
       $(".name_edit").val(name);
       $("#color_id").val(id);
    }

   //Brand Update
   const BrandUpdate = (form) => {
    let payloads = new FormData($(form)[0]);
       $.ajax({
        type: "POST",
        url: "<?php echo e(route('brand.update')); ?>",
        data: payloads,
        dataType: "json",
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.status == 200){
                $("#modalUpdateBrand").modal("hide");
                $(form).trigger('reset');
                $(".name").removeClass("is-invalid").siblings("p").removeClass("text-danger").text(" ");
                Message(response.message);
                BrandList();
            }else{
                let error = response.error;
                $(".name").addClass("is-invalid").siblings("p").addClass("text-danger").text(error.name);
            }
        }
       });
   }

   const BrandStore = (form) => {
       let payloads = new FormData($(form)[0]);
       $.ajax({
        type: "POST",
        url: "<?php echo e(route('brand.store')); ?>",
        data: payloads,
        dataType: "json",
        contentType: false,
        processData: false,
        success: function (response) {
            if(response.status == 200){
                $("#modalCreateBrand").modal("hide");
                $(form).trigger('reset');
                $(".name").removeClass("is-invalid").siblings("p").removeClass("text-danger").text(" ");
                Message(response.message);
                BrandList();
            }else{
                let error = response.error;
                $(".name").addClass("is-invalid").siblings("p").addClass("text-danger").text(error.name);
            }
        }
       });
   }


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/back-end/brand.blade.php ENDPATH**/ ?>