@extends('layouts.master')

@section('content')

<!-- start banner Area -->
<!-- <section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					
					@foreach($news as $new)
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Nouveau goût !</h1>
								<h3>{{ $new->name }}</h3>
								<p>{{ $new->details }}</p>
								<div class="add-bag d-flex align-items-center">
									<form action="{{ route('cart.store') }}" method="POST">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $new->id }}">
										<input type="hidden" name="name" value="{{ $new->name }}">
										<input type="hidden" name="price" value="{{ $new->price }}">
										<button type="submit" class="primary-btn">
											<span class="add-text text-uppercase text-white">Ajouter au panier</span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="w-50" src="{{ Voyager::image($new->image) }}" alt="">
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- End banner Area -->

<body>
	<main>
		<br></br>
		<br></br>
		<br></br>
		<img class="map" src="img/CDB-carte.png" alt="">
	</main>
</body>
@stop