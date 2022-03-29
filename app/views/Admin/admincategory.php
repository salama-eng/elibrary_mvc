<?php

require_once __DIR__."/header.php"; ?>



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
  <h5 class="card-header">Bordered Table</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> category name </th>
            <th>image</th>
            <th>status</th>
            
            <th>action</th>
          </tr>
        </thead>
        <tbody>
       
         
         <?php foreach($params as $category){?>
          <tr>
            
            <td><?= $category['name'];?></td>
            <td>
              <img class="img-fluid rounded" height="150px" width="150px" src="/images/<?= $category['image'];?>">
            </td>
            <td>
            <?php if($category['is_active']==1) {?>    
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
</div>






            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->
<?php

require_once __DIR__."/footer.php"; ?>