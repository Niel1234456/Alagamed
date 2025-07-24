
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <title>Your MedCare Website</title>


</head>
<body>

<!-- header section start here  --> 
<header class="header">
<img src="{{ asset('assets/images/Blue_Modern_Medical_Logo-removebg-preview (1).png') }}" alt="Logo" class="logo">
  <nav class="navbar">
    <a href="#home">home</a>
    <a href="#services">services</a>
    <a href="#about">about</a>
    <a href="#doctors">doctors</a>
    <a href="#appointment">appointment</a>
    <a href="#review">review</a>
    <a href="#blogs">blogs</a>
  </nav>
  @auth
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth
</nav>
  <div id="menu-btn" class="fas fa-bars"></div>
<!-- header section end here  --> 
</header>
</body>
<!-- home section start here  --> 

<section class="home" id="home">
  <div class="image">
    <img src="{{ asset('assets/images/home-img.svg') }}" alt="">
  </div>

  <div class="content">
  <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="{{ url('/alagamed/index#appointment') }}" class="btn">appointment Now<span class="fas fa-chevron-right"></span></a>
    </div>

</section>
<!-- home section end here  --> 

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>
<!-- icons section ends -->

@include('alagamed.services')
@include('alagamed.about')
@include('alagamed.doctors')
@include('alagamed.appointment')
@include('alagamed.reviews')
@include('alagamed.blogs')










<!-- js file link  -->
<script src="js/script.js"></script>
</html>


<script src="{{ asset('assets/js/script.js') }}"></script>
