    <form action = "{{ action('Web\MemberController@loginCheck')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @lang("web/login.acc") <input type = "text" id = "acc" name = "acc">
    {{ $errors->first('acc') }}
    <br>
    @lang('web/login.pss') <input type = "password" id = "pss" name = "pss">
    {{ $errors->first('pss') }}
    <br>
    <input type = "submit" value="登入" >
    
    
</form>
