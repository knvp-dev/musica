<div class="profile-header">
		<div class="container flex-space-between">
			<div class="is-flex">
			<h1 class="title">{{ $account->username }}</h1>
			</div>
			@if(Auth::id() == $account->id)
			<div class="is-flex submenu">
				<a href="#" class="a-button"><i class="fa fa-plus"></i>Add instrument</a>
				
				<a href="#" class="a-button"><i class="fa fa-plus"></i>New band</a>
				
				<a href="#" class="a-button"><i class="fa fa-plus"></i>New advert</a>
				
				<a href="{{ route('profiles.edit', $account) }}" class="a-button"><i class="fa fa-cog"></i>Edit profile</a>
			</div>
			@endif
		</div>
	</div>