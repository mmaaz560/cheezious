<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php'?>
    <style>
         .hide{
            transform: translateX(-100%);
        }
        .icon{
            cursor: pointer;
        }
        .underlay{
            visibility: hidden;
        }
        .sidebar{
            transition: all 0.5s ;
            
        }
        .buttan:hover{
              background-color: chocolate
        }
        .main-img{
            transition: all 0.7s;
        }
    </style>
</head>
<body>
    <?php include './navebar.php'?>


<div class="container px-3 pt-0">

    <?php
            include './config.php';
            $select = "SELECT name FROM categories";
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result) > 0){
                ?>
      <div class="position-relative my-0" >
         <i class="bi bi-chevron-left  left  d-flex justify-content-center align-items-center text-danger z-3 position-absolute border border-danger rounded-circle" 
         style="width:30px;height:30px;display:block;top:50% ;left:-18px; transform: translateY(-50%);">
        </i>

         <i class="bi bi-chevron-right  right d-flex justify-content-center align-items-center  text-danger z-3 position-absolute border-danger border rounded-circle" 
         style="width:30px;height:30px;display:block; top:50%; right:-17px; transform: translateY(-50%); ">
        </i>
    
        

    
        <div  class="container d-flex rounded-3 text overflow-x-scroll  p-3 gap-3  bg-body-secondary">
            <?php
            include './config.php';
            $select = "SELECT name FROM categories";
            $result = mysqli_query($connection,$select);
            foreach($result as $item){
            ?>
             <div class="card flex-shrink-0 p-2 px-3 border-0">
                <h5><?php echo $item['name']?></h5>
             </div>


           <?php
           }
           ?>
        </div>
        
    </div>
    <?php
            }else{
                echo "<h3 class='text-center text-danger'>No categories available</h3>";
            }
    ?>
</div>
<div class="d-flex container gap-3">
  <div class="p-3">
    Malai Tikka
    <div class="card col-xl-4 border-0 shadow col-lg-5 col-md-6 ">
        <img src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fproducts%2F1768467924857-1764228828812-1763768054858-CH%20-%20MT%20App%20800x800_v01.png&w=3840&q=75"  alt="">
       <div class="bg-body-secondary p-3 ">
         <h4>Malai Tikka</h4>
        <p>A flavorful Pizza loaded with fresh BBQ Malai Tikka chunks and topped with a swi...</p>
        <div class="d-flex gap-3 align-items-center">
            <h5 class="text-danger">Rs. 1600</h5>
             <div class="bg-danger rounded-pill fw-semibold text-white px-3">Starting Price</div>
        </div>
       </div>
    </div>
  </div>
  
 <div style="height: 350px;" class="bg-body-secondary p-4 position-sticky rounded-2 d-flex flex-column justify-content-center align-items-center">
    <img src="/_next/static/media/emptycart.e7858caa.svg" width="100px" height="100px" alt="">
    <h6>YOUR CART IS EMPTY</h6>
    <p class="fs-7">Go ahead and explore top categories.</p>
 </div>
</div>







<script>
     let left = document.querySelector('.left')
        let right = document.querySelector('.right')
        let text = document.querySelector('.text')

         right.addEventListener('click',()=>{
            text.scrollBy({
                left:160,
                behavior:'smooth'
            })
        })
        left.addEventListener('click',()=>{
            text.scrollBy({
                left:-160,
                behavior:'smooth'
            })
        })

</script>


</body>
</html>