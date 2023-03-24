@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
        <div class="container">
            <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.jpg') }}">
                <div class="hero__text">
                    <span>Ramadhan Sale</span>
                    <h2>Discount Up To 30%</h2>
                    <a href="#" class="primary-btn">SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($menu_categories as $menu_category)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ $menu_category->photo->getUrl() }}">
                                <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
@endsection
