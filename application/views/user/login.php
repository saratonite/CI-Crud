<?php $this->load->view('partials/public_header');?>



 <div class="login-panel">
   <div class="panel panel-default">

     <div class="panel-body">
       login
     </div>
     <div class="panel-content">

     </div>

     <form class="" action="<?= base_url();?>index.php/user/proccess_login" method="post">

       <div class="form-group">
         <label for="">Email</label>
         <input type="email" name="email" value="" class="form-control" placeholder="Email">
       </div>
       <div class="form-group">
         <label for="">Password</label>
         <input type="password" name="password" value="" class="form-control" placeholder="Password">
       </div>
       <div class="form-group">
         <button type="submit" name="login" class="btn btn-block">Login</button>
       </div>

     </form>

   </div>


 </div>


<?php  $this->load->view('partials/footer');
