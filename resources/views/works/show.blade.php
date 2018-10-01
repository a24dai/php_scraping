@extends('common.common')
@section('content')

    @foreach ($member_infos as $member)
      <ul>
        <li><p>{{{ $member['name'] }}}</p></li>
        <li><p>{{{ $member['en_name'] }}}</p></li>
        <li><p>{{{ $member['post'] }}}</p></li>
        <li><p>{{{ $member['intro'] }}}</p></li>
        <li><img src="{{{ $member['img'] }}}"></li>
      </ul>
    @endforeach

@endsection
