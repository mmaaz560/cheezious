<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php'?>
    <title>admin-categories</title>
</head>
<body>
   <div class="row">
     <?php include './admin-sidebar.php'?>
      <div style=" background-color: #F4EDED;"
       class="col-xl-9 col-lg-9 col-md-8  px-5  min-vh-100">
        <div class="container p-5">
           <div class="card shadow-lg border-0 rounded-3">
             
             <!-- Header -->
             <div class="card-header bg-warning-soft py-4 px-4 border-0">
               <h4 class="fw-semibold mb-1">
                 <i class="bi bi-tags me-2"></i>
                 Categories
               </h4>
               <p class="text-muted mb-0 small">
                 Organize your restaurant's menu beautifully
               </p>
             </div>
         
             <!-- Body -->
             <div class="card-body p-4 bg-white">
               <form action="./add-category.php" enctype="multipart/form-data" method="POST" class="row g-4">
         
                 <!-- Category Name -->
                 <div class="col-12">
                   <label class="form-label fw-medium">Category Name</label>
                   <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter category name">
                 </div>
         
                 <!-- Category Image -->
                 <div class="col-12">
                   <label class="form-label fw-medium">Category Image</label>
                   <input type="file" name="image" class="form-control form-control-lg">
                 </div>
         
                 <!-- Description -->
                 <div class="col-12">
                   <label class="form-label fw-medium">Description</label>
                   <textarea class="form-control" name="description" rows="4" placeholder="Write description..."></textarea>
                 </div>
         
                 <!-- Availability -->
                 <div class="col-md-6">
                   <label class="form-label fw-medium">Availability</label>
                   <select name="available" class="form-select  form-select-lg">
                     <option selected disabled>All Day</option>
                     <option>Breakfast</option>
                     <option>Lunch</option>
                     <option>Dinner</option>  
                   </select>
                 </div>
         
                 <!-- Status -->
                 <div class="col-md-6">
                   <label class="form-label fw-medium">Status</label>
                   <select name="stats" class="form-select form-select-lg">
                     <option selected disabled>Select status</option>
                     <option value="1">Active</option>
                     <option value="0">Inactive</option>
                   </select>
                 </div>
         
                 <!-- Featured -->
                 <div class="col-12">
                   <div class="form-check form-switch mt-2">
                     <input class="form-check-input" name="featured" type="checkbox" id="featured">
                     <label class="form-check-label fw-medium" for="featured">
                       Featured Category
                     </label>
                   </div>
                 </div>
         
                 <!-- Button -->
                 <div class="col-12 text-end">
                   <button class="btn btn-warning px-4 py-2 fw-semibold">
                     Save Category
                   </button>
                 </div>

               </form>
             </div>

          </div>
       </div>


      </div>
   </div>
  </body>
</html>