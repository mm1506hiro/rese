@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<body>
  <h1>Rese</h1>
<!--ハンバーガーメニュー-->
<div class="openbtn1"><span></span><span></span><span></span></div>
  <nav class="g-nav">
  <ul>
  <li><a href="#">Home</a></li>  
  <li><a href="#">Registration</a></li>  
  <li><a href="#">Login</a></li>  
  </ul>
  </nav>

  <!--検索メニュー-->
<form action="#" class="search-form-011">
  <select name="area" id="area-select">
    <option value="">All area
    </option>
    <option value="tokyo">東京都</option>
    <option value="osaka">大阪府</option>
    <option value="fukuoka">福岡県</option>
  </select>

  <select name="genre" id="genre-select">
    <option value="">All genre
    </option>
    <option value="tokyo">寿司</option>
    <option value="osaka">焼肉</option>
    <option value="fukuoka">居酒屋</option>
    <option value="tokyo">イタリアン</option>
    <option value="osaka">ラーメン</option>
  </select>

    <button type="submit" aria-label="検索"></button>
    <label>
        <input type="text" placeholder="Search">
    </label>
</form>

<div class="card">
  <div class="card__img">
    <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="仙人">
  </div>
  <div class="card__content">
    <h2 class="card__content-name">仙人</h2>
      <p class="card__content-tag-item">#東京都 #寿司</p>
      <div class="card__content-bottom">
        <p class="card__content-detail">詳しくみる</p>
        <span class="card__content-heart"></span>
      </div>
  </div>
</div>



</body>

</html>