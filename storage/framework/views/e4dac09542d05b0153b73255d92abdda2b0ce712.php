<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
<body style="background-color: rgb(182, 237, 255)">
   <div class="rounded-4 bg-primary mt-5 ms-auto me-auto shadow d-flex" style="width: 1000px; height:550px;">
      <img src="<?php echo e(asset('img/logo-login.png')); ?>" class="mt-auto mb-auto ms-5" style="height: 300px">
      <div class=" bg-light rounded-4 mt-auto mb-auto ms-auto me-3 text-primary" style="height: 530px; width:600px;">
         <div class="mt-5 d-flex" style="margin-left: 50px">
            <img src="<?php echo e(asset('img/logo1.png')); ?>" style="height:70px;">
            <h3 class="text-primary mt-3" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Radar Tasikmalaya</h3>
         </div>
         <div class="mt-5">
            <form action="/login/auth" method="POST" class="mt-5 mx-5 text-primaryc fs-6" style="font-family:Verdana, Geneva, Tahoma, sans-serif">
               <?php echo csrf_field(); ?>
               <div class="mb-4">
                 <label for="exampleInputEmail1" class="form-label">Email address:</label>
                 <input type="email" class="form-control border border-primary border-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Silakan Masukan Email Anda...." name="email" style="height: 50px">
               </div>
               <div class="mb-4">
                 <label for="exampleInputPassword1" class="form-label">Password:</label>
                 <input type="password" class="form-control border border-primary border-2" id="exampleInputPassword1" placeholder="Silakan Masukan Password Anda...." name="password" style="height: 50px">
               </div>
               <button type="submit" class="btn btn-primary text-light" style="width: 510px">Masuk</button>
             </form>
         </div>
      </div>
   </div>
   
</body><?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/login.blade.php ENDPATH**/ ?>