<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('front-end.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <img src="<?php echo e(asset('front-end/assets/images/logo.png')); ?>" alt="">
          </a>
          <div>
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                   <?php echo e(Session::get('success')); ?>

                </div>
            <?php elseif(Session::has('error')): ?>
             <div class="alert alert-danger">
                <?php echo e(Session::get('error')); ?>

             </div>
            <?php endif; ?>
            
          </div>
          <h2 class="text-center">Welcome Back</h2>
          
          <form class="text-left clearfix" action="<?php echo e(route('customer.login.process')); ?>" method="POST" onsubmit="showLoading(this)">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password"  value="<?php echo e(old('password')); ?>">
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
              <input type="checkbox" name="remember_me" checked>
              <span>Remember me</span>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" id="submitBtn">
                Login
              </button>
            </div>
          </form>
          <p class="mt-20">New in this site? <a href="<?php echo e(route('customer.register')); ?>">Create New Account</a></p>
          <a href="<?php echo e(route('send.emai.show')); ?>">Forgot the your password?</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript to handle button loading -->
<script>
  function showLoading(form) {
    const submitButton = form.querySelector("#submitBtn");
    submitButton.disabled = true; // Disable button to prevent multiple submissions
    submitButton.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Checking...`;
    return true;
  }
</script>

</body>
</html>
<?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/front-end/auth/login.blade.php ENDPATH**/ ?>