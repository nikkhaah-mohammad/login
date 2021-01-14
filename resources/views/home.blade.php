@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <?php 
                 
                $price = Auth::user()->payment;
                $result = "";
                 if ($price>0);
                     $result = "لطفا فاکتور خود را پرداخت کنید در غیر اینطورت از طریق پیامک به شما اطلاع رسانی خواهد شد.";
                 
                ?>

          <div class="alert alert-warning" role="alert">
            <?php  echo $result ?>

            <button type="button" class="btn btn-info" herf="\payment">Info</button>
           </div>
                
            </div>
        </div>
    </div>
</div>


</div>
@endsection
