<?php $this->load->view('partials/public_header',['APP_TOP_NAV'=>'partials/user_top_nav']); ?>


    <div class="row">

      <div class="col-md-2">

        <h3>Profile</h3>

      </div>
      <div class="col-md-8">

        <?php if(isset($userdata) && $userdata): ?>

        <table>
          <thead>
            <tr>
              <th>
                Email
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <?= $userdata->email;?>
              </td>
            </tr>
          </tbody>

        </table>

      <?php endif ?>

      </div>

    </div>


<?php  $this->load->view('partials/footer'); ?>
