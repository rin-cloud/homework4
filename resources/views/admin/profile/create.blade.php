        @extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('profile')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィールページ</h2>
            </div>
        </div>
    </div>
@endsection
