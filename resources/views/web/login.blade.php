@extends('layouts.web.web')    


@section('content')
<form action = "{{ action('Web\MemberController@loginCheck')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @lang("web/login.acc") <input type = "text" id = "acc" name = "acc">
    {{ $errors->first('acc') }}
    <br>
    @lang('web/login.pss') <input type = "password" id = "pss" name = "pss">
    {{ $errors->first('pss') }}
    <br>
        <input type = "submit" value="@lang('web/login.login')" >
        <input type = "button" value="@lang('web/login.logout')"  onclick = "window.location.href = '{{ route('logout') }}'">
        <br>
        <input type = "button" value="@lang('web/login.forget')" >
        <input type = "button" value="@lang('web/login.register')" onclick = "window.location.href = '{{ route('register') }}'">
</form>
@endsection