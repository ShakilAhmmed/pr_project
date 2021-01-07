@extends("skeleton::layouts.layout")
@section("main_section")
    <ul>
        @foreach($settings as $setting)
            <li>{{$setting->company}}</li>
        @endforeach
    </ul>
@endsection
