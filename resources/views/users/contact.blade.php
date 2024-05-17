@extends('layouts.main')
@section('content')

<div class="banner" id="contactBanner">
    <h1 class="banner-text">Contact Garry's Florists</h1>
</div>

<div class="container col-row-sm">
    <div class="col-2 flex-center" style="display: flex">
        <div>
            <h2>Lorem ipsum dolor sit amet consectetur.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aspernatur numquam reprehenderit voluptatum pariatur aperiam ut suscipit deserunt, ducimus unde adipisci eos dolores error nihil.</p>
        </div>
    </div>
    <div class="col-2">
        <form class="form">
                <h2 >Contact Us </h2>
                <div class="flex">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Telephone Number">
                </div>
                <div class="row">
                    <input type="text" placeholder="Email">
                </div>
                <div class="row">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Type here..."></textarea>
                </div>
                <button class="submit">Submit</button>
        </form>
    </div>
</div>

@endsection