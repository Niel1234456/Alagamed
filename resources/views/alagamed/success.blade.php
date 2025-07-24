


<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Success</div>

                    <div class="card-body">
                        <p>Your appointment was made successfully!</p>

                        <!-- Display appointment credentials -->
                        <ul>
                            <li><strong>Name:</strong> {{ $name }}</li>
                            <li><strong>Email:</strong> {{ $email }}</li>
                            <li><strong>Phone Number:</strong> {{ $phone_number }}</li>
                            <li><strong>AppointmentDate:</strong> {{ $AppointmentDate }}</li>
                            <li><strong>Services:</strong> {{ $services }}</li>
                        </ul>

                        <!-- Button to redirect to alagamed.index -->
                        <center><a href="{{ route('alagamed.index') }}" class="btn btn-primary">Go to Alagamed </center></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
