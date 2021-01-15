@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('داشبورد') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>

                <?php 
                 
                $price = Auth::user()->payment;
                $result = "";
                $s = 0;
                 if ($price > $s);
                     $result = "  لطفا فاکتور خود را پرداخت کنید در غیر اینطورت از طریق پیامک به شما اطلاع رسانی خواهد شد.";
                ?>

          <div class="alert alert-warning" role="alert">
            <?php  echo $result
            ;
             
            ?>
          <div class="alert alert-primary" role="alert">
            <a href="/payment" class="alert-link">پرداخت فاکتور</a>
          </div>
            
           </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

</div>
@endsection
