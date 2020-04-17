<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mypage</title>
    </head>
    <body>
        <h1>Myページ</h1>
    </body>
</html>

@extends ('layouts.profile')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section ('content')
   <div class="container">
     <div class="row">
       <div class="col-md-8 mx-auto">
         <h2>Myプロフィール</h2>
       </div> 
     </div>
   </div>
@endsection

