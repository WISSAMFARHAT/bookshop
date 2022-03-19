@extends('master')

@section('main')

<div class="container" >
    <div class="row" style="justify-content: center;text-align-last: center;">
        <div class="col-md-7 co-12 ">
            <div class="bg-login">
                <h2 class="mt-3" style="color: #001e28" >تسجيل دخول </h2>
                <div class="mt-4 input">
                    <em class="fa fa-user"></em>
                    <input type="text" name="email" class="form-mail" placeholder="أدخال أسم" />
                </div>

                <div class="mt-4 input">
                    <em class="fa fa-lock"></em>
                    <input type="password" name="pwd" class="form-password" placeholder="أدخال كلمة المرور" />
                    <em class="fa fa-eye"></em>
                </div>
                <div class="mt-3 d-flex" style="width: 54%;justify-content: center;">
                    <input type="checkbox" class="form-check-input" id="remeber" />
                    <label class="form-check-label mx-3" style="color: #001e28" for="remeber">
                        حفظ
                    </label>
                </div>
                <div class="my-4">
                    <button class="btn bg w-50" type="submit">تسجيل</button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection