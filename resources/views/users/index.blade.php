@extends('layouts.main')
@section('content')

    <div class="banner">
        <h1 class="banner-text">Embrace the Beauty of 
            <br>Nature, Crafted by Gary's 
            <br>Florists in Southampton
        </h1>
    </div>

    <div class="container col-row-sm">
        <div class="col-2">
            <h2>Florists Southampton</h2>
            <p>At Gary's Florists, we believe in the language of flowers, a silent poetry that speaks volumes. Nestled in the heart of Southampton, our boutique flower shop is a haven for those seeking the perfect bloom to express their emotions.</p>
            <p>Let Gary's Florists be your choice for exquisite blooms, where every petal whispers a tale of beauty and emotions</p>
        </div>
        <div class="col-2">
            <img src="/assets/home-img1.jpg" alt="">
        </div>
    </div>

    <div class="container" id="benefit">
        <h2>Why Choose Gary's Florists</h2>
        <div class="row col-row-sm">
            <div class="col-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque distinctio, tenetur sit eaque quisquam harum numquam, voluptas aliquam officia velit possimus minima saepe reprehenderit, perferendis eum. Nobis, ex earum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque distinctio, tenetur sit eaque quisquam harum numquam, voluptas aliquam officia velit possimus minima saepe reprehenderit, perferendis eum. Nobis, ex earum?</p>
            </div>
            <div class="col-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque distinctio, tenetur sit eaque quisquam harum numquam, voluptas aliquam officia velit possimus minima saepe reprehenderit, perferendis eum. Nobis, ex earum?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt atque distinctio, tenetur sit eaque quisquam harum numquam, voluptas aliquam officia velit possimus minima saepe reprehenderit, perferendis eum. Nobis, ex earum?</p>
            </div>
        </div>
    </div>

    @include('layouts.contact-us')

@endsection