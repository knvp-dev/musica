@extends('layouts.app')

@section('content')

<div class="has-gradient-background centered-form has-text-centered">

	<div class="small-form has-dropshadow">

		<form action="/bands" method="post">
			<div class="form-title">
				Create new band
			</div>
			<div class="field">
				{{-- <label class="label">Band name</label> --}}
				<p class="control">
					<input class="input" type="text" placeholder="Band name">
				</p>
			</div>
			<div class="field">
				{{-- <label class="label">Genre</label> --}}
				<p class="control is-expanded">
					<span class="select is-fullwidth">
						<select>
							<option selected disabled="disabled">Select a genre</option>
							<option>Norwegian death metal</option>
						</select>
					</span>
				</p>
			</div>
			<div class="field">
				{{-- <label class="label">Country</label> --}}
				<p class="control is-expanded">
					<span class="select is-fullwidth">
						<select>
							<option selected disabled="disabled">Select a country</option>
							<option>Belgium</option>
						</select>
					</span>
				</p>
			</div>

			<div class="field">
				<label for="" class="field-label"></label>
				<p class="control is-expanded">
					<button class="button is-primary is-fullwidth">
						Create
					</button>
				</p>
			</div>
		</form>

	</div>
</div>
@endsection