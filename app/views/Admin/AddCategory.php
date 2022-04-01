
<?php

require_once __DIR__."/header.php"; ?>



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
   









<!--/ DataTable with Buttons -->

<hr class="my-5">








<div class="card mb-4">
  <h5 class="card-header"> Add a new category</h5>
  <form class="card-body" action="/storcategory" method="POST" enctype="multipart/form-data">
    
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">category name</label>
        <input name="category_name" type="text" id="multicol-username" class="form-control" required placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email"> image</label>
        <div class="input-group input-group-merge">
          <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" required />
          
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password"> activate</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" required />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>
<?php 
require_once __DIR__."/footer.php"; ?>