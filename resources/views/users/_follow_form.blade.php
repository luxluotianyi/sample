@if ($user->id !== Auth::user()->id)
  <div class="" id="follow_form">
    @if (Auth::user()->isFollowing($user->id))
      <form class="" action="{{ route('followers.destroy',$user->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm" name="button">取消关注</button>
      </form>
    @else
      <form class="" action="{{ route('followers.store',$user->id) }}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-sm btn-primary" name="button">关注</button>
      </form>
    @endif
  </div>
@endif
