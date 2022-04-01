<?php

namespace coding\app\models;
require_once __DIR__."/../../models/DbClass.php"; 
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
      <h5 class="card-header">Cities List</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>

            <tr>
              <th>id</th>
              <th>name</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th>created_by</th>
              <th>is_active</th>

            </tr>
          </thead>
          <tbody class="table-border-bottom-0">

            <?php foreach ($params as $city) { ?>


              <tr>
                <td><?= $city['id']; ?></td>
                <td><?= $city['name']; ?></td>
    
     
                <td><?= $city['created_at']; ?></td>
                <td><?= $city['updated_at']; ?></td> 
                <?php
              
                 $result =$db_obj->select("users")->where('id',$city['created_by'])->runQuery();?>
                <td><?php   echo $result[0]->name ;?></td>


                <td>
            <?php if($city['is_active']==1) {?>    
            <span class="badge bg-label-success me-1">active</span>
            <?php }
            else {?>
             <span class="badge bg-label-danger me-1">not active</span>
            <?php } ?>
            </td>
              
            <td>
            <a href="/edit_category/<?php echo $category['id'];?>" class="btn btn-icon btn-outline-dribbble">
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