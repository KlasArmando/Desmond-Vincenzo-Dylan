<p>
    {!! Form::open(array('users' => 'UsersController@create')) !!}
    {!! Form::open(['url' => 'users']) !!}
    {!! Form::label('email', 'Email'); !!}
    {!! Form::email('email') !!}<br>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', array('users' => 'password')) !!}<br>
    {!! Form::submit('submit', array('users' => 'btn btn-primary')) !!}
    {{ Form::close() }}</p>