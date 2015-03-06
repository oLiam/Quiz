{{ Form::open(array('url'=>'users/create')) }}
    <h2>Register</h2>

    {{ Form::text('username', null, array('placeholder'=>'Username')) }}
    {{ Form::text('email', null, array('placeholder'=>'Email')) }}
    {{ Form::password('password', array('placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('placeholder'=>'Password')) }}

    {{ Form::submit('Register') }}

{{ Form::close()  }}