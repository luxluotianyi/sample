<form class="" action="{{ route('statuses.store') }}" method="post">
  @include('shared.errors')
  {{ csrf_field() }}
  <textarea name="content" rows="3" class="form-control" placeholder="聊聊新鲜事...">{{ old('content') }}</textarea>
  <button type="submit" class="btn btn-primary pull-right" name="button">发布</button>
</form>
