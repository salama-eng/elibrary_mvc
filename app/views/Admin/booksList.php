<?php require_once 'app/views/Admin/header.php'  ?>





<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">



  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Session</span>
              <div class="d-flex align-items-end mt-2">
                <h4 class="mb-0 me-2">21,459</h4>
                <small class="text-success">(+29%)</small>
              </div>
              <small>Total Users</small>
            </div>
            <span class="badge bg-label-primary rounded p-2">
              <i class="bx bx-user bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Paid Users</span>
              <div class="d-flex align-items-end mt-2">
                <h4 class="mb-0 me-2">4,567</h4>
                <small class="text-success">(+18%)</small>
              </div>
              <small>Last week analytics </small>
            </div>
            <span class="badge bg-label-danger rounded p-2">
              <i class="bx bx-user-plus bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Active Users</span>
              <div class="d-flex align-items-end mt-2">
                <h4 class="mb-0 me-2">19,860</h4>
                <small class="text-danger">(-14%)</small>
              </div>
              <small>Last week analytics</small>
            </div>
            <span class="badge bg-label-success rounded p-2">
              <i class="bx bx-group bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
              <span>Pending Users</span>
              <div class="d-flex align-items-end mt-2">
                <h4 class="mb-0 me-2">237</h4>
                <small class="text-success">(+42%)</small>
              </div>
              <small>Last week analytics</small>
            </div>
            <span class="badge bg-label-warning rounded p-2">
              <i class="bx bx-user-voice bx-sm"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Users List Table -->
 
      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">DataTables /</span> Basic
</h4>

<!-- DataTable with Buttons -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-basic table border-top">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!-- Modal to add new record -->
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">Full Name</label>
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
          <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicPost">Post</label>
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='bx bxs-briefcase'></i></span>
          <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicEmail">Email</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
          <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicDate">Joining Date</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='bx bx-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicSalary">Salary</label>
        <div class="input-group input-group-merge">
          <span id="basicSalary2" class="input-group-text"><i class='bx bx-dollar'></i></span>
          <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>
<!--/ DataTable with Buttons -->

<hr class="my-5">

<!-- Complex Headers -->
<div class="card">
  <h5 class="card-header">Complex Headers</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-complex-header table table-bordered">
      <thead>
        <tr>
          <th rowspan="2">Name</th>
          <th colspan="2">Contact</th>
          <th colspan="3">HR Information</th>
          <th rowspan="2">Action</th>
        </tr>
        <tr>
          <th>E-mail</th>
          <th>City</th>
          <th>Position</th>
          <th>Salary</th>
          <th class="border-1">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Complex Headers -->

<hr class="my-5">

<!-- Row grouping -->
<div class="card">
  <h5 class="card-header">Row Grouping</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-row-grouping table border-top">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Row grouping -->

<hr class="my-5">

<!-- Multilingual -->
<div class="card">
  <h5 class="card-header">Multilingual</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-multilingual table border-top">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Multilingual -->


            
          </div>
          <!-- / Content -->

          
          

<!-- / Content -->



<?php require_once 'app/views/Admin/footer.php'  ?>