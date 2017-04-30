@extends('layouts.app')

@section('content')

<div class="header has-picture has-gradient-background">
	@if( $band->cover )
	<img class="cover-image" src="/images/{{ $band->path() }}/{{ $band->cover }}" alt="band cover">
	@endif
	{{-- "/images/{{ $band->path() }}/{{ $band->profile_pic }}" --}}
	<div class="profile-pic-wrapper has-white-background-with-padding has-dropshadow">
		<img class="profile-picture" src="/images/profile.png" alt="profile pic">
	</div>
</div>

<div class="container profile-title has-text-centered">
	<h1>{{ $band->name }}</h1>
	<p>Death metal</p>
</div>

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column">
				
			</div>
			<div class="column">
				<h1 class="title">Band members</h1>
				<ul>
					<li class="is-flex band-member">
						<img src="/images/icons/drum-set.png" alt="">
						<span class="band-member-info">
							<h1><a href="">Band member name</a></h1>
							<p>Drums / percussion</p>
						</span>
					</li>
					<li class="is-flex band-member">
						<img src="/images/icons/electric-guitar.png" alt="">
						<span class="band-member-info">
							<h1><a href="">Band member name</a></h1>
							<p>Bass</p>
						</span>
					</li>
					<li class="is-flex band-member">
						<img src="/images/icons/electric-guitar-1.png" alt="">
						<span class="band-member-info">
							<h1><a href="">Band member name</a></h1>
							<p>Lead guitar</p>
						</span>
					</li>
					<li class="is-flex band-member">
						<img src="/images/icons/acoustic-guitar.png" alt="">
						<span class="band-member-info">
							<h1><a href="">Band member name</a></h1>
							<p>rhythm guitar</p>
						</span>
					</li>
					<li class="is-flex band-member">
						<img src="/images/icons/microphone.png" alt="">
						<span class="band-member-info">
							<h1><a href="">Band member name</a></h1>
							<p>Singer</p>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>



@endsection