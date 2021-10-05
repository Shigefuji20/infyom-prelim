@extends('layouts.app')

@section('content')


<div class="cc">
    <img src="{{url('images\Avocado.jpg')}}" width="200" height="200" alt=""/>
    <div class="ov">
    <div class="t"><b>Brand :</b> <br> Avocado</div>
    <div class="t1"><b>ML :</b> <br> 100ml</div>
    <div class="t2"><b>Price :</b> 150.00</div>
    </div> 
</div>


<div class="ce">
    <img src="{{url('images\Black Ice.jpg')}}" width="200" height="200" alt=""/>
    <div class="ove">
    <div class="te"><b>Brand :</b> <br> Black Ice</div>
    <div class="te1"><b>ML :</b> <br> 65ml</div>
    <div class="te2"><b>Price :</b> 150.00</div>
    </div> 
</div>

<div class="cd">
    <img src="{{url('images\Daek Elixir.jpg')}}" width="200" height="200" alt=""/>
    <div class="ove">
    <div class="te"><b>Brand :</b> <br> Dark Elixir</div>
    <div class="te1"><b>ML :</b> <br> 65ml</div>
    <div class="te2"><b>Price :</b> 200.00</div>
    </div> 
</div>

<div class="cf">
    <img src="{{url('images\Milk Cakes.jpg')}}" width="200" height="200" alt=""/>
    <div class="ove">
    <div class="te"><b>Brand :</b> <br> Milk Cakes</div>
    <div class="te1"><b>ML :</b> <br> 65ml</div>
    <div class="te2"><b>Price :</b> 180.00</div>
    </div> 
</div>

<div class="cg">
    <img src="{{url('images\New Breed.jpg')}}" width="200" height="200" alt=""/>
    <div class="ove">
    <div class="te"><b>Brand :</b> <br> New Breed</div>
    <div class="te1"><b>ML :</b> <br> 100ml</div>
    <div class="te2"><b>Price :</b> 200.00</div>
    </div> 
</div>


<style>  .cc{
            position:absolute;
            left:270px; top:220px;
            padding-top: 80px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }
        .ov {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.cc:hover .ov {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.t {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.t1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.t2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}    
 .ce{
            position:absolute;
            left:500px; top:220px;
            padding-top: 80px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }
        .ove {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.ce:hover .ove {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.te {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.te1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.te2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}  
.cd{
            position:absolute;
            left:725px; top:220px;
            padding-top: 80px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }
        .ove {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.cd:hover .ove {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.tf {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.tf1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.tf2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.cf{
            position:absolute;
            left:950px; top:220px;
            padding-top: 80px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }
        .ove {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.cf:hover .ove {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.tg {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.tg1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.tg2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
} 
.cg{
            position:absolute;
            left:1180px; top:220px;
            padding-top: 80px;
            padding-right: 1px;
            padding-bottom: 1px;
            padding-left: 1px;
        }
        .ove {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
.cg:hover .ove {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.th {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.th1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.th2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}   </style>


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection