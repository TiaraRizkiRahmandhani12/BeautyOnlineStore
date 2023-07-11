@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<style>
    .containerProd {
        margin-bottom: 20px;
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #searchthis {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    #search-box {
        border-radius: 50px;
        padding: 10px 20px;
        width: 250px;
        background-color: #cfe4f7;
        border: 2px solid #a1c7e8;
    }

    #namanyay-search-btn {
        border-radius: 50px;
        padding: 10px 20px;
        background-color: #cfe4f7;
        border: 2px solid #a1c7e8;
        margin-left: 10px;
    }
</style>

<div class="containerProd">
    <div class="center">
        <form id="searchthis">
            <input id="search-box" name="search" type="search" placeholder="Search Product" value="{{ request('search') }}"/>
            <input id="namanyay-search-btn" value="Go" type="submit" value="{{ request('search') }}"/>
        </form>
    </div>
</div>

    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-primary text-white">{{ $product->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection