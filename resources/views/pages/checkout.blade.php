@extends("master")


@section("main")
<div class="container mt-5">
    <div class="row" style="align-items: center;">
        <div class="col-md-7 col-xs-12">
            <div class="row">
                <div class="details">
                    <h4>تفاصيل</h4>
                </div>
                <div class="row mt-3">
                    <form>
                        <h2>عنوان الشحنة</h2>
                        <div class="d-flex">
                            <input type="text" class="form-control w-100" name="first name " placeholder="الاسم الاول * "> 
                            <input type="text" class="form-control w-100" style="margin-right: 10px" name="last name " placeholder="الاسم اخير * "> 
                        </div>
                        <input type="text" class="form-control w-100 mt-3 mr-2" name="company" placeholder="شركة" />
                        <div class="d-flex mt-3">
                            <input type="text" class="form-control w-100" name="phone " placeholder="رقم * "> 
                            <input type="text" class="form-control w-100" style="margin-right: 10px" name="fax " placeholder="فاكس  "> 
                        </div>
                        <input type="text" class="form-control w-100 mt-3 mr-2" name="email" placeholder="بريد *" />
                        <input type="text" class="form-control w-100 mt-3 mr-2" name="bulding" placeholder="مبنى *" />
                        <input type="text" class="form-control w-100 mt-3 mr-2" name="street" placeholder="شارع *" />
                        <textarea  class="form-control w-100 mt-3 mr-2" name="note" placeholder="ملاحظة" ></textarea>
                        <button type="submit" class="btn bg w-100 mt-4">دفع</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xs-12 mt-4">
            <div class="row bg py-4 mx-3">
                <h3 >ORDER SUMMARY <span>2 item(s)</span> </h3>
                <div class="brder"></div>
                <div class="mt-2">
                    <div class="d-flex sub w-100 py-2">
                        <h3>الشحن <span>[تسليم سريع]</span></h3>
                        <h4 style="left: 2%!important">60,000 LBP</h4>
                    </div>
                    <div class="brder w-100"></div>
                    <div class="d-flex sub w-100 py-2">
                        <h3>ضريبة <span>[ضريبة القيمة المضافة]</span></h3>
                        <h4 style="left: 2%!important">40,480 LBP</h4>
                    </div>
                    <div class="brder w-100"></div>
                </div>
                <h3 class="mt-3">المجموع : 600,500 LBP</h3> 
            </div>
        </div>
    </div>
</div>

@endsection