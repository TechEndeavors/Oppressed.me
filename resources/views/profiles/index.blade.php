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
									<li><a href="{{ action('ProfilesController@show', [$profile->slug]) }}">{{$profile->name}}</a> - {{$profile->summary}} (
									@if ($person->country="US")
										{{$profile->city}}, {{$profile->state}}
									@else
										{{$profile->city}}, {{$profile->country}}
									@endif
									)</li>
								@endforeach
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
