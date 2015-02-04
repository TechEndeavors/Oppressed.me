@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Index</div>

					<div class="panel-body">
						@if (count($profiles))
							<ul>
								@foreach ($profiles as $profile)
									<li>{{$profile}}</li>
								@endforeach
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
