{!! Form::open(['route' => 'microposts.store']) !!}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('γ€γΆγγ', ['class' => 'btn btn-primary btn-block mt-1']) !!}
    </div>
{!! Form::close() !!}