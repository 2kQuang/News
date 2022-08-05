<nav id="sidebar">
    <div class="sidebar-header">
        <div class="user" >
            <img src="https://img2.thuthuatphanmem.vn/uploads/2018/12/09/anh-bia-hacker-7-mau_111113683.jpg" style="border-radius: 20rem;" width="100%" alt="">
        </div>
        <h3 class="text-center">{{Auth::user()->name}}</h3>
        <strong></strong>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="{{route('home')}}">
                <i class="fas fa-home"></i> Home
            </a>
        </li>
       
        <li>
            <a href="{{route('categories.admin')}}">
                <i class="fas fa-paper-plane"></i> Categories
            </a>
        </li>

        <li>
            <a href="{{route('product.admin')}}">
                <i class="fas fa-box"></i> Products
            </a>
        </li>
        <li>
            <a href="">
                <i class="fas fa-box"></i> Feedback
            </a>
        </li>
    </ul>



    <ul class="list-unstyled CTAs">
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-dark" type="submit">Log out</button>
            </form>
        </li>
    </ul>
</nav>