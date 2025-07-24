<!-- appointmenting section starts -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="{{ asset('assets/images/appointment-img.svg') }}" alt="">
        </div>

        <form action="{{ url('/alagamed/appointment') }}" method="post">
       
            @if(isset($message))
                @foreach($message as $msg)
                    <p class="message">{{ $msg }}</p>
                @endforeach
            @endif

            <h3>make appointment</h3>
            <input type="text" name="name" placeholder="your name" class="box">
            <input type="number" name="phone_number" placeholder="your number" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <input type="date" name="AppointmentDate" class="box"> <!-- Corrected this line -->
            <input type="text" name="services" placeholder="Services you want to avail" class="box"> <!-- Corrected this line -->
            <input type="submit" name="submit" value="appointment now" class="btn">
            @csrf
        </form>

    </div>

</section>

<!-- appointmenting section ends -->
