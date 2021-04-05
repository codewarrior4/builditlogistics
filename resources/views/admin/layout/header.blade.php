<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="/"><img src="{{URL::asset('img/logo.png')}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a href="/admin/index"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/1.svg')}}" alt="">
            <span>Dashboard</span>
          </a>
        </li>

        <li class="">
          <a  class="has-arrow" href="#" aria-expanded="false">
            <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Shop Settings</span>
          </a>
          <ul>
            <li><a href="/admin/slider">Slider</a></li>
            <li><a href="/admin/about">About Us</a></li>
            <li><a href="/admin/tac">Terms and conditions</a></li>
            <li><a href="/admin/social">Social Media</a></li>
          </ul>
        </li>
        <li class="">
          <a  class="has-arrow" href="#" aria-expanded="false">
            <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Products</span>
          </a>
          <ul>
            <li><a href="/admin/product">Add Products</a></li>
            <li><a href="/admin/products">Products List</a></li>
          </ul>
        </li>
        <li class="">
          <a  class="has-arrow" href="#" aria-expanded="false">
            <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Category</span>
          </a>
          <ul>
            <li><a href="/admin/category">Add Category</a></li>
            <li><a href="/admin/category_sub">Add Sub Category</a></li>
          </ul>
        </li>
        <li>
          <a href="/admin/customers"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/7.svg')}}" alt="">
            <span>Customers</span>
          </a>
        </li>
        <li>
          <a href="/admin/orders"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/7.svg')}}" alt="">
            <span>Orders</span>
          </a>
        </li>

        <li>
          <a href="#" class="has-arrow"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Blog</span>
          </a>
          <ul>
            <li><a href="/admin/blog">Add blog</a></li>
            <li><a href="/admin/blogs">Blog List</a></li>
          </ul>
        </li>

        <li >
          <a href="/admin/faq"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>FAQ</span>
          </a>
        </li>
        <li >
          <a href="/admin/subscribers"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Subscribers</span>
          </a>
        </li>

        <li>
          <a href="#" class="has-arrow"  aria-expanded="false">
          <!-- <i class="fas fa-th"></i> -->
          <img src="{{URL::asset('img/menu-icon/2.svg')}}" alt="">
            <span>Stores</span>
          </a>
          <ul>
            <li><a href="/admin/store">Add store</a></li>
            <li><a href="/admin/stores">Store List</a></li>
          </ul>
        </li>

      </ul>
    
</nav>