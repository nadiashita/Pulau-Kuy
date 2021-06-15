@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Detail Paket Wisata</strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('storage/'.$produk->image) }}" alt="Image" class="img-fluid">
        </div>
     <!--    <p><img src="{{ asset('storage/'.$produk->image) }}" alt="Image" class="img-fluid"></p> -->
        <!-- </div> -->
        <div class="col-md-6">
        <h2 class="text-black">{{ $produk->name }}</h2>
        
        <h3>{{ round($rata_rating_produk,1) }} <?php for($x=1;$x<=$rata_rating_produk;$x++) { echo '<i class="fa fa-star" style="color: #eba83a"></i>';}if (strpos($rata_rating_produk,'.')){echo '<i class="fa fa-star-half-o" style="color: #eba83a"></i>';$x++;}while ($x<=5) {echo '<i class="fa fa-star-o" style="color: #eba83a"></i>';$x++;}?></h3>
        <script src="https://use.fontawesome.com/29d45e997e.js"></script>


        
        {!! nl2br(e($produk->description)) !!}
        


        <p><strong class="text-primary h4">Rp {{ $produk->price }} </strong></p>

        <div class="mb-5">
            <form action="{{ route('user.keranjang.simpan') }}" method="post">
                @csrf
                @if(Route::has('login'))
                    @auth
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @endauth
                @endif
            <input type="hidden" name="products_id" value="{{ $produk->id }}">
            <small>Sisa Stok {{ $produk->stok }}</small>
            <input type="hidden" value="{{ $produk->stok }}" id="sisastok">
            <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
        </div>

        </div>
        <p><button type="submit" class="buy-now btn btn-sm btn-primary">Add To Cart</button></p>
        </form>
        </div>
    </div>
    <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Komentar & Rating</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    @foreach($rating_id as $rat)
                    <h5 class="card-title">{{$rat->name}}</h5>
                    <p class="card-text">{{$rat->komentar}}</p>
                    <p>{{ round($rat->rating,1) }} <?php for($x=1;$x<=$rat->rating;$x++) { echo '<i class="fa fa-star" style="color: #eba83a"></i>';}if (strpos($rat->rating,'.')){echo '<i class="fa fa-star-half-o" style="color: #eba83a"></i>';$x++;}while ($x<=5) {echo '<i class="fa fa-star-o" style="color: #eba83a"></i>';$x++;}?></p>
                    <hr>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection