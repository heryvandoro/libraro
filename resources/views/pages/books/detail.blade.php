@extends("master.layout")

@section("title")
    {{ $book->title }}
@endsection

@section("content")
	<div class="container">
		<div class="row margin-top-20">
            <div class="col s9">
                <div class="col s3">
                    <img class="responsive-img" src="{{ asset("images/".$book->cover) }}">
                </div>
                <div class="col s6">
                    <h5>{{ $book->title }}</h5>
                    <p>Writer : {{ $book->writer }}</p>
                    <p>Stock : {{ $book->stock }}</p>
                    <p>Date : {{ \DateFormatter::format($book->release_date) }}</p>
                </div>
                <div class="col s12 margin-top-10">
                    {{ $book->description }}
                </div>
            </div> 
            <div class="col s3">
                @include("parts.sidebar")
            </div>
		</div>
	</div>
@endsection