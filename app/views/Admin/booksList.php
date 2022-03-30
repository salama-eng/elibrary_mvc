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
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
       
<tr>
  <th>id</th>
  <th>title</th>
  <th>image</th>
  <th>price</th>
  <th>description</th>
  <th>page_numbers</th>
  <th>category</th>
  <th>Author</th>
  <th>Publisher</th>
  <th>Quantity</th>
  <th>format</th>
  <th>created by</th>
  <th>status</th>
  <th>created at</th>
  <th>apdates at</th>
</tr>
      </thead>
      <tbody class="table-border-bottom-0">

      <?php foreach($params as $book){ ?>


        <tr>
        <td><?= $book['id'];?></td>
     <td><?= $book['title'];?></td>
      <td><img  src="assets/books/<?= $book['image'];?>" width="200%" height=""></td>
        <td><?= $book['price'];?></td>
        <td><?= $book['description'];?></td>
       <td><?= $book['pages_number'];?></td>
        <td><?= $book['category_id'];?></td>
         <td><?= $book['author_id'];?></td>
         <td><?= $book['publisher_id'];?></td>
      <td><?= $book['quantity'];?></td>
  <td><?= $book['format'];?></td>
  <td><?= $book['created_by'];?></td>
  <td>
            <?php if($book['is_active']==1) {?>    
            <span class="badge bg-label-success me-1">active</span>
            <?php }
            else {?>
             <span class="badge bg-label-danger me-1">not active</span>
            <?php } ?>
            </td>
  <td><?= $book['created_at'];?></td>
  <td><?= $book['updated_at'];?></td>
  <td>
            <a href="/edit_category/<?php echo $book['id'];?>" class="btn btn-icon btn-outline-dribbble">
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








            
          </div></div>
          <!-- / Content -->

          
          

<!-- Footer -->
<?php

require_once __DIR__."/footer.php"; ?>