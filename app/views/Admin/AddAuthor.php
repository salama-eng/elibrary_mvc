<?php

namespace coding\app\models;
require_once __DIR__."/../../models/DbClass.php"; 
require_once __DIR__."/header.php"; ?>

<div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    
    
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
<h5 class="card-header">ADD NEW BOOK </h5>
<form class="card-body" action="/storauthor" method="POST">

<div class="row g-3">
<div class="col-md-6">
<label class="form-label" for="multicol-username">Author name </label>
<input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
</div>


<div class="col-md-6">
<label class="form-label" for="multicol-email">phone number </label>
<div class="input-group input-group-merge">
  <input  name="phone" type="number"  class="form-control"  aria-describedby="multicol-email2" />
  
</div>
</div>

<div class="col-md-6">
<label class="form-label" for="multicol-email">email </label>
<div class="input-group input-group-merge">
  <input  name="email" type="email"  class="form-control"  placeholder="john@doe" aria-describedby="multicol-email2" />
  
</div>
</div>


<div class="col-md-6">
<label class="form-label" for="multicol-email">bio</label>
<div class="input-group input-group-merge">
  <input  name="bio" type="text"  class="form-control"  aria-describedby="multicol-email2" />
  
</div>
</div>










<div class="col-md-6">
<label class="form-label" for="multicol-email">created by</label>
<div class="input-group input-group-merge">
  <input  name="created_by" type="text"  class="form-control"  aria-describedby="multicol-email2" />
  
</div>
</div>







  

<div class="col-md-6">
<div class="form-password-toggle">
  <label class="form-label" for="multicol-confirm-password">status</label>
  <div class="input-group input-group-merge">
  <label class="switch">
      <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
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

