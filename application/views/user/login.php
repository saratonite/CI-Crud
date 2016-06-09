<?php $this->load->view('partials/public_header');?>



 <div class="login-panel">

    <!--Show Erros  -->

    <?php
    if($this->session->flashdata('errors')):
      ?>

      <div class="alert alert-warning">

            <?= $this->session->flashdata('errors');?>

      </div>

    <?php
    endif
     ?>
   <div class="panel panel-info">

     <div class="panel-heading">
       LOGIN
     </div>
     <div class="panel-body">

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
           <button type="submit" name="login" class="btn btn-info btn-block">Login</button>
         </div>

       </form>

     </div>



   </div>


 </div>


<?php  $this->load->view('partials/footer');
