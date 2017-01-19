@extends('layouts.web.web')    


@section('content')
<form action = "{{ action('Web\MemberController@registerSave') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @lang("web/register.nickName") <input type = "text" id = "nickName" name = "nickName">
    {{ $errors->first('nickName') }}
    <br>
    @lang("web/register.account") <input type = "text" id = "account" name = "account">
    {{ $errors->first('account') }}
    <br>
    @lang('web/register.password') <input type = "password" id = "password" name = "password">
    {{ $errors->first('password') }}
    <br>
    @lang("web/register.email") <input type = "text" id = "email" name = "email">
    {{ $errors->first('email') }}
    <br>    
        <input type = "submit" value="@lang('common.submit')" >
</form>
@endsection