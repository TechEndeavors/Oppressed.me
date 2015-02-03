@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Profiles Index</div>

					<div class="panel-body">
						@if (count($profiles))
							<ul>
								@foreach ($profiles as $profile)
									<li><a href="{{ action('ProfilesController@show', [$profile->id]) }}">{{$profile->name}}</a></li>
								@endforeach
							</ul>
						@else
							<p>No Oppressed.me profiles found</p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
