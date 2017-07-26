@extends('layouts.app')

@section('content')

<div class="header has-gradient-background">
	<div class="hero-body">
		<div class="container has-text-centered">
			<span class="is-flex flex-horizontal-center mb-20">
				<i class="medium-icon flaticon-electric-guitar"></i>
				<i class="medium-icon flaticon-drum-set"></i>
				<i class="medium-icon flaticon-amplifier"></i>
				<i class="medium-icon flaticon-microphone"></i>
				<i class="medium-icon flaticon-electric-guitar-1"></i>
				<i class="medium-icon flaticon-keyboard"></i>
			</span>
		</div>
	</h4>
	<form action="/" method="post" class="hero-form">
		<div class="field is-grouped">
			<p class="control is-expanded">
				<input class="input is-medium is-left-half-round is-right-half-round pl-50" type="text" placeholder="I'm looking for....">
			</p>

		</div>
	</form>
</div>

</div>

<section class="section">
	<div class="container">
		<div class="columns">
		
			<div class="column is-3">
				@include('partials.sidebar')
			</div>
			<div class="column is-9">
				<div class="adverts-list">
				<h1 class="title">Adverts</h1>
			<div class="advert-list-item">
					<div class="advert-left-section">
						<span class="advert-replies-count">4 replies</span>
						<span class="advert-type-icon"><i class="medium-icon flaticon-drum-set"></i></span>
					</div>
					<div class="advert-right-section">
						<div class="advert-header">
							<h1 class="advert-title">Lorem ipsum dolor sit amet</h1>
							<div class="advert-meta">
								<span class="advert-type">DRUMMER</span>
								<p>Posted 2 weeks ago by </p>
								<a href="" class="advert-link">MrGuitardude26</a>
								<p> Playing with </p>
								<a href="" class="advert-link">THE DESCENDANTS</a>
							</div>
						</div>
						<div class="advert-body">
							<p>I write code with Laravel 5.3 in Homestead and everything fine. And when I upload my code to production server and make new username of database,...</p>
						</div>
					</div>
				</div>
		</div>
			</div>
		</div>
		
		
	</div>
</section>

@endsection