@extends("master.layout")

@section("title")
    Homepage
@endsection

@section("content")
    @include("parts.slider")
	<div class="container">
		<div class="row margin-top-20">
			<div class="col s4 center">
                <i class="large material-icons">backup</i>
                <h5 class="title">Integrated</h5>
                <span>Libraro Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias veniam exercitationem quia repellendus inventore odio ducimus officia, ipsa earum dolorem harum vero ipsum. Quidem pariatur sint blanditiis repellat iusto quia?</span>
            </div>
			<div class="col s4 center">
                <i class="large material-icons">money_off</i>
                <h5 class="title">Free</h5>
                <span>Libraro Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias veniam exercitationem quia repellendus inventore odio ducimus officia, ipsa earum dolorem harum vero ipsum. Quidem pariatur sint blanditiis repellat iusto quia?</span>
            </div>
            <div class="col s4 center">
                <i class="large material-icons">lock_open</i>
                <h5 class="title">Easy to Use</h5>
                <span>Libraro Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias veniam exercitationem quia repellendus inventore odio ducimus officia, ipsa earum dolorem harum vero ipsum. Quidem pariatur sint blanditiis repellat iusto quia?</span>
            </div>
		</div>
	</div>
@endsection