@extends("master")


@section("main")

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7 col-xs-12">
            @for($i = 0;$i<2;$i++)
            <div class="row bg-cart" style="align-items: center">
                <div class="col-3">
                    <div>
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=912&q=80 912w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1212&q=80 1212w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1512&q=80 1512w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1812&q=80 1812w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1824&q=80 1824w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2112&q=80 2112w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2412&q=80 2412w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2424&q=80 2424w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2712&q=80 2712w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3012&q=80 3012w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3024&q=80 3024w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3312&q=80 3312w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3612&q=80 3612w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3624&q=80 3624w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3912&q=80 3912w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=4212&q=80 4212w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=4224&q=80 4224w, https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=4400&q=80 4400w" 
                            alt="Card image cap">
                    </div>
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="d-flex" style="align-items: center">
                            <h5 class="title" >كتاب المتنبي</h5>
                            <div class="circleExit">
                                <em class="fa fa-times"></em>
                            </div>
                        </div>
                        <h5>أسم الكاتب : المتنبي</h5>
                        <h5>السعر :250,000 ل.ل</h5>
                        <h5>عدد الصفحات : 25</h5>
                        <div class="d-flex" style="align-items: center;">
                            <button class="btn bg-circle" >+</button>
                            <input type="number" class="btn bg-qt" value="1" min="1">
                            <button class="btn bg-circle" >-</button>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="col-md-5 col-xs-12 p-5">
            <div class="row">
                <div class="subtotal">
                    <h2> المجموع الفرعي</h2>
                    <h3>500,000 LBP</h3>
                </div>
                <div class="row mt-2">
                    <div class="d-flex sub">
                        <h3>الشحن <span>[تسليم سريع]</span></h3>
                        <h4>60,000 LBP</h4>
                    </div>
                    <div class="d-flex sub">
                        <h3>ضريبة <span>[ضريبة القيمة المضافة]</span></h3>
                        <h4>40,480 LBP</h4>
                    </div>
                </div>
                <div class="subtotal">
                    <h2> المجموع </h2>
                    <h3>600,500 LBP</h3>
                </div>
                <div class="mt-2">
                    <h5>متضمننا الضرائب*</h5>
                </div>
                <div class="mt-3 d-flex">
                    <a href="{{ route('home') }}" class="btn bg w-50 mx-3">مواصلة التسوق</a>
                    <a href="{{ route('checkout') }}" class="btn bg-checkout w-50 mx-3">الدفع</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection