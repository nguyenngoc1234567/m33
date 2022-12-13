@extends('shop.layouts.master')
@section('content')

<section class="feature_product_area section_gap_bottom_custom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="main_title">
          <h2><span>Featured product</span></h2>
          <p>Bring called seed first of third give itself now ment</p>
        </div>
      </div>
    </div>

    <div class="row">
@foreach ( $product as $item)

      <div class="col-lg-4 col-md-6">
        <div class="single-product">
          <div class="product-img">
            <img class="img-fluid w-100" src="{{asset('shop/img/product/inspired-product/iphone13.jpg')}}" alt="" />
            <div class="p_icon">
              <a href="#">
                <i class="ti-eye"></i>
              </a>
              <a href="#">
                <i class="ti-heart"></i>
              </a>
              <a href="#">
                <i class="ti-shopping-cart"></i>
              </a>
            </div>
          </div>
          <div class="product-btm">
            <a href="#" class="d-block">
              <h4>{{$item->name}}</h4>
            </a>
            <div class="mt-3">
              <span class="mr-4">Giá: {{$item->price}} vnd</span>
              <del>$350.000</del>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>

@endsection
