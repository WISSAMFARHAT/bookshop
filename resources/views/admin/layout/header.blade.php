<input type="checkbox" role="button" id="for-checked" />
<header id="checked">
    
    <h1>Admin</h1>

    <div class="mt-5  navRow active">
        <a href="#" class="d-flex">
            <em class="fa fa-tachometer"></em>
            <h4 class="font30">Dashboard</h4>
        </a>
    </div>

    <div class="mt-3 navRow">
        <a href="#" class="d-flex">
            <em class="fa fa-shopping-bag"></em>
            <h4 class="font30">Orders</h4>
        </a>
    </div>

    <div class="mt-3 navRow">
        <a href="#" class="d-flex">
            <em class="fa fa-plus-square"></em>
            <h4 class="font30">Products</h4>
        </a>
    </div>

    <div class="mt-3 navRow">
        <a href="#" class="d-flex">
            <em class="fa fa-dollar"></em>
            <h4 class="font30">Discounts</h4>
        </a>
    </div>

    <div class="mt-3 navRow">
        <a href="#" class="d-flex">
            <em class="fa fa-cog"></em>
            <h4 class="font30">Settings</h4>
        </a>
    </div>


    <div class="mt-3 navRow">
        <a href="#" class="d-flex">
            <em class="fa fa-power-off"></em>
            <h4 class="font30">LogOut</h4>
        </a>
    </div>

</header>

<main>
    <div class="head">
        <label for="for-checked"><em class="fa fa-bars" style="cursor: pointer"></em></label>
        <h1 id="ch">Dashboard</h1>
    </div>
    @yield('main')
</main>


