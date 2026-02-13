  <!--side card which is open by clicking on list icon -->
     <div class="w-100 min-vh-100 underlay z-3 top-0 position-fixed" style="background-color: rgba(0,0,0,0.5)">
        <div class="col-lg-4 sidebar hide p-5 col-md-5 col-6 bg-white min-vh-100">
            <div class="d-flex align-items-center gap-4">
                <i style="width: 50px; height: 50px;border-radius:50%;" class="bi bi-person bg-warning d-flex justify-content-center align-items-center fs-2 fw-bold"></i>
                <div class="">
                    <p class="my-1">Login to explore</p>
                    <h5 class="my-1">World of flavors</h5>
                </div>
            </div>
            <button class="btn btn-outline-dark border buttan border-2 rounded-3 border-black my-4 px-3">LOGIN</button>
       
        <hr>
        <ul class="list-unstyled">
            <li class="d-flex gap-3 align-items-center my-3">
                <i class="bi bi-grid fs-4"></i>
                <h6 class="my-1">Explore Menu</h6>
            </li>
            <li class="d-flex gap-3 align-items-center my-3">
                <i class="bi bi-shop fs-4"></i>
                <h6 class="my-1">Branch Locator</h6>
            </li>
        </ul>
        <hr>
        <ul class="list-unstyled my-4">
            <li class="my-3">
                <h6>Blog</h6>
            </li>
            <li class="my-3">
                <h6>Privacy Policy</h6>
            </li>
        </ul>
       </div>
     </div>

<!-- navbar -->
    <div class="d-flex justify-content-between p-2 px-3 align-items-center">
        <div class="d-flex justify-content-center gap-3 align-items-center">
            <img  src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fstack.54881ee4.png&w=256&q=75" class="icon" width="30px" alt="">
            <img class="d-none d-lg-block" src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FmainLogo.c4a33b22.png&w=1200&q=75" width="150px" alt="">
        </div>
        
         <img class="d-lg-none d-md-block" src="https://cheezious.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FmainLogo.c4a33b22.png&w=1200&q=75" width="150px" alt="">
    

        <div class="d-flex gap-4 d-lg-block d-none">
            <button class="btn btn-warning fw-semibold">
                <i class="bi bi-cart-fill"></i>
                CART
            </button>
            <button class="btn btn-warning fw-semibold">
                <i class="bi bi-person-fill"></i>
                LOGIN
            </button>

        </div>
        <div class="d-flex gap-1 d-lg-none ">
            <button class="btn  fw-bold">
                <i class="bi bi-cart fs-3 text-danger"></i>
            </button>
            <button class="btn fw-bold">
                <i class="bi bi-person fs-3 text-danger"></i>
            </button>

        </div>

    </div>

    <script>
          let icon = document.querySelector('.icon')
        let sidebar = document.querySelector('.sidebar')
        let underlay = document.querySelector('.underlay')
      


        icon.addEventListener('click',()=>{
            underlay.style.visibility = 'visible'
            sidebar.classList.remove('hide')
        })

        underlay.addEventListener('click',()=>{
            underlay.style.visibility = 'hidden'
            sidebar.classList.add('hide')
        })
         console.log(sidebar)
        sidebar.addEventListener('click',(e)=>{
            e.stopPropagation()
        })

    </script>