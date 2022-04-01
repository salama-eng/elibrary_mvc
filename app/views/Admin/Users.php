<?php

require_once __DIR__ . "/header.php"; ?>



<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">











    <!--/ DataTable with Buttons -->

    <hr class="my-5">


    <!-- Multilingual -->

    <!--/ Multilingual -->




    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Users</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>

            <tr>
              <th>id</th>
              <th>name</th>
        
              <th>email</th>
              <th>password</th>
              <th>is_active</th>
              <th>role name</th>
              <th>created_at</th>
              <th>updated_at</th>
      
         

            </tr>
          </thead>
          <tbody class="table-border-bottom-0">

            <?php foreach ($params as $user) { ?>


              <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
               
                <td><?= $user['email']; ?></td>
                <td><?= $user['password']; ?></td>
                <td>
            <?php if($user['is_active']==1) {?>    
            <span class="badge bg-label-success me-1">active</span>
            <?php }
            else {?>
             <span class="badge bg-label-danger me-1">not active</span>
            <?php } ?>
            </td>
              
                
                <td><?= $user['created_at']; ?></td>
                <td><?= $user['updated_at']; ?></td>
               
        
              
            <td>
            <a href="/edit_category/<?php echo $user['id'];?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <button type="button" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
              </button>
              
            </td>
              </tr>


            <?php } ?>


          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->



  </div>
</div>
<!-- / Content -->




<!-- Footer -->
<?php

require_once __DIR__ . "/footer.php"; ?>