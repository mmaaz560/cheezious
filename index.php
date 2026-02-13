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
   
<?php
 include './navebar.php';
?>

    <!-- main cards which change atomatically -->
     <div class="images position-relative " style="height:70vh; width: 100%">
        <img class="position-absolute  main-img object-fit-cover"
          src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1766418772820-1520%20x%20460%20px%20NEw%20%201.jpg&w=3840&q=75" height="100%" width="100%" alt="">
         <img class="position-absolute  main-img object-fit-cover"
          src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1764681926332-Web%20Banner_Amanah%20Mall_1520x460_opt-3%20pixels.png&w=1080&q=75" height="100%" width="100%" alt="">
         <img class="position-absolute  main-img object-fit-cover"
          src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1763728179352-Web%20banner%20(3.png&w=1080&q=75" height="100%" width="100%" alt="">
         <img class="position-absolute  main-img object-fit-cover"
          src="https://cheezious.com/_next/image?url=https%3A%2F%2Fs3-me-south-1.amazonaws.com%2Fcz-content-prod%2Fbanners%2Fwebsite%2F1759214309912-Web%20Banner_1520x460%20pixels_Beef%20Peperoni.png&w=1080&q=75" height="100%" width="100%" alt="">

    </div>




  <div class="container p-5" >
     <div class="d-flex justify-content-between gap-3 align-items-center">
        <h2>Explore Menu</h2>
        <a href="./all-menu.php" class="text-danger text-decoration-none fs-6 fw-bold">VIEW ALL</a>
     </div>
     
        <?php
        include './config.php';
        $select = "SELECT * FROM products";
        $result = mysqli_query($connection,$select);
        if(mysqli_num_rows($result) > 0){
            ?>

    <div class="position-relative">
         <i class="bi bi-chevron-left  left  d-flex justify-content-center align-items-center text-danger z-3 position-absolute bg-warning rounded-1" 
         style="width:30px;height:30px;display:block; top:50%;left:10px"></i>
         <i class="bi bi-chevron-right  right d-flex justify-content-center align-items-center  text-danger z-3 position-absolute bg-warning rounded-1" 
         style="width:30px;height:30px;display:block; top:50%; right:-6px; transform: translateX(-50%); "></i>
    <div class=" d-flex container px-0 gap-3 menu overflow-x-scroll pt-5" style= "width:95%;">
        

      <?php
        include './config.php';
        $select = "SELECT * FROM products";
        $result = mysqli_query($connection,$select);
        foreach($result as $item){
            ?>
            
                 <div class="col-lg-3   col-md-6 " >
                  <div class="card   text-center border-warning" style="width: 200px;height:100%;" >
                    <img src="./category_image/<?php echo $item['image']?>" width="80%" height="150px" class="mx-auto" alt="">
                    <h5><?php echo $item['name']?></h5>
                 </div>
                </div>
                
          <?php
            }
        ?>
     
    </div>
    </div>
    <?php
        }else{
            echo "<h3 class='text-center'>No items available</h3>";
        }
    ?>
 </div>


    <script>
      
        let mainImgs = document.querySelectorAll('.main-img')
        let left = document.querySelector('.left')
        let right = document.querySelector('.right')
        let menu = document.querySelector('.menu')


      

         count=0
        setInterval(()=>{
            if(count > mainImgs.length - 1){
                count = 0
            }
            mainImgs.forEach((item,index)=>{
                item.style.opacity = '0'
            })
            mainImgs[count].style.opacity = '1'
            count++
        },2000)

        right.addEventListener('click',()=>{
            menu.scrollBy({
                left:260,
                behavior:'smooth'
            })
        })
        left.addEventListener('click',()=>{
            menu.scrollBy({
                left:-260,
                behavior:'smooth'
            })
        })


    </script>
    
</body>
</html>