@extends('layouts.default')
@section('title','更新密码')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel paenl-default">
        <div class="panel-heading">更新密码</div>
        <div class="panel-body">
          @include('shared.errors')

          <form class="" action="{{ route('password.update') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
              <label for="" class="col-md-4 control-label">邮箱地址：</label>
              <div class="col-md-6">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-md-4 control-label">密码：</label>
              <div class="col-md-6">
                <input type="password" name="password" class="form-control" value="">
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-md-4 control-label">确认密码：</label>
              <div class="col-md-6">
                <input type="password" name="password_confirmation" class="form-control" value="">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" name="button">更新密码</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
