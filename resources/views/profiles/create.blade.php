@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a New Profile</div>

                    <div class="panel-body">
                    {!! Form::open(['url' => 'profiles']) !!}
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug (will be used to generate the URL):') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address1', 'Address (First Line):') !!}
                            {!! Form::text('address1', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address2', 'Address (Second Line):') !!}
                            {!! Form::text('address2', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('city', 'City:') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('state', 'State:') !!}
                            {!! Form::text('state', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('zip', 'Zip:') !!}
                            {!! Form::text('zip', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('country', 'Country:') !!}
                            {!! Form::text('country', 'US', ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('summary', 'Summary:') !!}
                            {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('details', 'Details:') !!}
                            {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}

                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop