<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css1/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
      <link rel="shortcut icon" href="zooz.png" type="image/x-icon">


  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
    }

    h1{
      color: #0056d2;
      font-weight: bold;
    }

    .left-section {
      width: 50%;
      padding: 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .left-section h2 {
      margin-bottom: 10px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .password-toggle {
      position: relative;
    }

    .password-toggle input {
      padding-right: 40px;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .btn-primary {
      width: 100%;
      padding: 14px;
      background-color: #0d6efd;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    .small-links {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      margin-top: 10px;
    }

    .remember-me {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .google-signin {
      margin-top: 30px;
      text-align: center;
      font-size: 14px;
      color: #333;
    }

    .google-signin img {
      vertical-align: middle;
      margin-right: 8px;
    }

    .right-section {
      width: 50%;
      background-color: #0056d2;
      color: white;
      padding: 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .right-section img {
      max-width: 100%;
      border-radius: 16px;
      margin-bottom: 30px;
    }

    .right-section h1 {
      font-size: 28px;
      font-weight: 600;
      text-align: center;
    }

    .whatsapp-icon {
      position: absolute;
      bottom: 20px;
      right: 20px;
    }

    .whatsapp-icon img {
      width: 50px;
    }
    @media (max-width: 768px){
        .right-section{
            width: 30%;
        }
        .left-section{
            width: 70%;
        }
    }
    @media (max-width: 992px){
        .right-section{
            width: 30%;
        }
        .left-section{
            width: 70%;
        }
    }
  </style>
</head>
<body>

  <div class="left-section">

       <h1 class="text-center">LOGIN</h1>
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $item)
               <li>{{ $item }}</li>
               @endforeach
            </ul>
        </div>
        @endif
        
        <form action="" method="POST">
            @csrf
            <h2>Email</h2>
            <div class="form-group">
                <input type="email" value="{{ old('email') }}" name="email"  class="form-control" placeholder="masukkan email">
            </div>
            
            <h2>Password</h2>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="masukkan password">
            </div>
            
            <button name="submit" type="submit" class="btn-primary">Login</button>
            
        </form>
   
  </div>

  <div class="right-section">
    {{-- <img src="kursiii.png" alt="SMEs Pack Screenshot"> --}}
    <dotlottie-player src="https://lottie.host/b3e14270-329e-48bb-8330-09a94adc1e72/PFQF5pz9SJ.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
<div class="right">

  <h1 style="color: white">MEUBEL JEPARA</h1>
  <p style="color: white">Jepara furniture has been exported to various countries in the world</p>
</div>
  </div>

</body>
</html>

