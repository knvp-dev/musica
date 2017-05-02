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
	<p class="tag nationality-tag"><img src="/images/icons/flags/226-united-states.svg" class="small-image" alt=""> United States</p>
	<p>Death metal</p>
</div>

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column pl-10">
				<div class="band-introduction">
					<h1 class="title">Upcoming shows</h1>
					<ul class="shows-list">
						{{-- <p class="has-text-centered">No upcoming shows</p> --}}
						<li class="show-list-item">
							<span class="show-date show-date-active">
								Aug, 14th
							</span>
							<span class="show-title">
								<h1>The good the bad and the metalhead</h1>
								<p class="show-location">Houston, TX</p>
							</span>
							<span class="upnext">
								<span class="tag primary-tag">Up next!</span>
							</span>
						</li>
						<li class="show-list-item">
							<span class="show-date">
								Aug, 14th
							</span>
							<span class="show-title">
								<h1>The good the bad and the metalhead</h1>
								<p class="show-location">Houston, TX</p>
							</span>
							<span class="upnext">
								{{-- <span class="tag primary-tag">Up next!</span> --}}
							</span>
						</li>
						<li class="show-list-item">
							<span class="show-date">
								Aug, 14th
							</span>
							<span class="show-title">
								<h1>The good the bad and the metalhead</h1>
								<p class="show-location">Houston, TX</p>
							</span>
							<span class="upnext">
								
							</span>
						</li>
						<li class="show-list-item">
							<span class="show-date">
								Aug, 14th
							</span>
							<span class="show-title">
								<h1>The good the bad and the metalhead</h1>
								<p class="show-location">Houston, TX</p>
							</span>
							<span class="upnext">
								
							</span>
						</li>
						<li class="show-list-item">
							<span class="show-date">
								Aug, 14th
							</span>
							<span class="show-title">
								<h1>The good the bad and the metalhead</h1>
								<p class="show-location">Houston, TX</p>
							</span>
							<span class="upnext">
								
							</span>
						</li>
					</ul>
					</div>
				</div>
				<div class="column pl-10">
					<h1 class="title">Band members</h1>
					<ul>
						<li class="is-flex band-member">
							<img src="/images/icons/instruments/drum-set.svg" alt="">
							<span class="band-member-info">
								<h1><a href="">Band member name</a></h1>
								<p>Drums / percussion</p>
							</span>
						</li>
						<li class="is-flex band-member">
							<img src="/images/icons/instruments/electric-guitar.svg" alt="">
							<span class="band-member-info">
								<h1><a href="">Band member name</a></h1>
								<p>Bass</p>
							</span>
						</li>
						<li class="is-flex band-member">
							<img src="/images/icons/instruments/electric-guitar-1.svg" alt="">
							<span class="band-member-info">
								<h1><a href="">Band member name</a></h1>
								<p>Lead guitar</p>
							</span>
						</li>
						<li class="is-flex band-member">
							<img src="/images/icons/instruments/acoustic-guitar.svg" alt="">
							<span class="band-member-info">
								<h1><a href="">Band member name</a></h1>
								<p>rhythm guitar</p>
							</span>
						</li>
						<li class="is-flex band-member">
							<img src="/images/icons/instruments/microphone.svg" alt="">
							<span class="band-member-info">
								<h1><a href="">Band member name</a></h1>
								<p>Vocals</p>
							</span>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>



	@endsection