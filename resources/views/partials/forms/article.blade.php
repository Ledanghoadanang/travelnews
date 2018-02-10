<div class="form-group">
  {!! Form::label('title', 'Title') !!}
  <div class="form-controls">
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
    @if ( $errors->has('<title>Home</title>') )
      <span class="text-danger">
          <strong> {{ $errors->first('title') }}</strong>
      </span>
    @endif
</div>

@if(isset($article))
<div>
  <img id="output" src="/images/products/@if(isset($article)){{$article->image}} @endif " width="50" height="50" alt="image"/>{{$article->image}}
</div>
@endif
<div class="form-group">
  {!! Form::label('image', 'Image') !!}
  <div class="form-controls">
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('image') )
    <span class="text-danger">
        <strong> {{ $errors->first('image') }}</strong>
    </span>
  @endif
</div>


<div class="form-group">
  {!! Form::label('description', 'Description') !!}
  <div class="form-controls">
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('description') )
    <span class="text-danger">
        <strong> {{ $errors->first('description') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('content', 'Content') !!}
  <div class="form-controls">
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
  </div>
  @if ( $errors->has('content') )
    <span class="text-danger">
        <strong> {{ $errors->first('content') }}</strong>
    </span>
  @endif
</div>

@if(isset($categories))
<div class="form-group">
  {!! Form::label('category_id', 'Category') !!}
  <div class="form-controls">
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
  </div>
</div>
@endif

@if(isset($user))
<div class="form-group">
  {!! Form::label('user_id', 'User') !!}
  <div class="form-controls">
    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
  </div>
</div>
@endif
{!! Form::submit('Save Article', ['class' => 'btn btn-primary']) !!}
