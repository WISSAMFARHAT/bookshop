@extends('admin.masterAdmin')

@section('main')
<div class="contaier p-4">
    <div class="row">
        <div class="col-lg-6 col-10 my-3">
            <div class="d-flex bg-white">
                <div>
                    <h1>0 LBP</h1>
                    <span>Today's sales</span>
                </div>
                <div>
                    <em class="fa fa-users"></em>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-10 my-3">
            <div class="d-flex bg-white">
                <div>
                    <h1>0 LBP</h1>
                    <span>Week's sales</span>
                </div>
                <div>
                    <em class="fa fa-users"></em>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-10 my-3">
            <div class="d-flex bg-white">
                <div>
                    <h1>0</h1>
                    <span>Today's orders</span>
                </div>
                <div>
                    <em class="fa fa-clipboard"></em>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-10 my-3">
            <div class="d-flex bg-white">
                <div>
                    <h1>0</h1>
                    <span>Week's Orders</span>
                </div>
                <div>
                    <em class="fa fa-google-wallet"></em>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection