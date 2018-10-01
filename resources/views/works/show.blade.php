@extends('common.common')
@section('content')
<div class="row">
    @foreach ($member_infos as $member)
      <ul style="padding: 50px 0;" class="col-md-4">
        <li><p>{{{ $member['name'] }}}</p></li>
        <li><p>{{{ $member['en_name'] }}}</p></li>
        <li><p>{{{ $member['post'] }}}</p></li>
        <li><img style="width: 300px; height: 300px;" src="{{{ $member['img'] }}}"></li>
      </ul>
    @endforeach
</div>
@endsection
