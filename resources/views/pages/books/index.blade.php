@extends("master.layout")

@section("title")
    Browse
@endsection

@section("content")
	<div class="container">
		<div class="row margin-top-20">
            @foreach($books as $book)
            <div class="col s3">
                <div class="card sticky-action">
                    <div class="card-image">
                        <img class="activator" src="{{ asset("images/".$book->cover) }}">
                        <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ url("/books/".$book->slug) }}"><i class="material-icons">open_in_new</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $book->title }}<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{ $book->title }}<i class="material-icons right">close</i></span>
                        <p>{{ $book->description }}</p>
                    </div>
                    <div class="card-action">aaa</div>
                </div>
            </div>
            @endforeach
		</div>
	</div>
@endsection