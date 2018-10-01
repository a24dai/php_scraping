@extends('common.common')
@section('content')
<div class="row">
    @foreach ($member_infos as $member)
      <ul class="col-md-4">
        <li><p>{{{ $member['name'] }}}</p></li>
        <li><p>{{{ $member['en_name'] }}}</p></li>
        <li><p>{{{ $member['post'] }}}</p></li>
        <li><img class="face-img" src="{{{ $member['img'] }}}"></li>
      </ul>
    @endforeach
</div>
@endsection
