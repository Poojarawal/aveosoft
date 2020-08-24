@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WELCOME, {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    

                </div>
             </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-stats" style="margin-top: 30px;margin-bottom: 30px">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">WALLET BALANCE</i>
                  </div>
                  <p class="card-category">Revenue</p>
                  <h3 class="card-title">{{ Auth::user()->wallet }} USD</h3>
                </div>
                
              </div>
            </div>

                <div class="col-lg-12">
                        <a class="btn btn-primary" href="stripe">ADD MONEY
                        </a>
                </div>


              @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div><br />
            @endif


        </div>
    </div>
</div>
@endsection
