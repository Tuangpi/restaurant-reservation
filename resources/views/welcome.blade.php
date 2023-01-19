<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mycss/mycss.css') }}">
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Reservation') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="{{ route('menus.index') }}" class="nav-link">Our Menu</a></li>
                    <li class="nav-item"><a href="{{ route('reservation.step.one') }}" class="nav-link">Make
                            Reservation</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="hero-img">
            <div>
                <div>Welcome to Larainfo Restaurant</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div class="btn btn-lg btn-warning"><a class="welcomea" href="{{ route('reservation.step.one') }}">Make your Reservation</a></div>
            </div>
        </div>
        <section>
            <div class="story">
                <div class="story-right">
                    <h4>Our Story</h4>
                    <h2>Welcome</h2>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat commodi fugit sit blanditiis
                        earum consectetur. Consequuntur totam voluptas vitae, blanditiis ut, ratione suscipit, commodi
                        dolore dolorum placeat mollitia vero error.</div>

                    <div class="btn btn-success">Read More</div>
                </div>
                <img src="../public/hero.jpg" alt="our story image" width="100%" height="auto">
            </div>
        </section>
        <section class="why-us">
            <div class="story">
                <div class="story-right">
                    <h4>Our Story</h4>
                    <h2>Welcome</h2>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat commodi fugit sit blanditiis
                        earum consectetur. Consequuntur totam voluptas vitae, blanditiis ut, ratione suscipit, commodi
                        dolore dolorum placeat mollitia vero error.</div>
                    <ul>
                        <li>Lorem, ipsum dolor si</li>
                        <li>t amet consectetur adipisicin</li>
                        <li>g elit. Reiciendis odit esse error</li>
                        <li> nihil aliquid ullam ab illu</li>
                    </ul>
                </div>
                <img src="../public/hero.jpg" alt="our story image" width="100%" height="auto">
            </div>
        </section>
        <section>
            <div class="our-menu">
                <h4>Our Menu</h4>
                <h2>Today's Speciality</h2>
            </div>
            <div class="card-container">
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
            </div>
        </section>
        <section class="testimonial">
            <div class="testimonial-title">
                <h3>Testimonial</h3>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae cum, ipsa </h5>
            </div>
            <div class="card-container">
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
                <div class="card card-sm">
                    <img src="" alt="asdf">
                    <div class="card-title">Spacigi</div>
                    <div class="card-body">asdfak</div>
                    <div>price</div>
                </div>
            </div>
        </section>
        <section>
            <form action="" class="order-form">
                <div class="order-now">Order Now FREE AND FAST</div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" />
                </div>
                <div>
                    <label for="last_name">First Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" />
                </div>
                <div>
                    <label for="table_number">Table Number</label>
                    <input type="number" id="table_number" name="table_number" class="form-control" />
                </div>
                <div>
                    <label for="booking_date">Booking Date</label>
                    <input type="datetime" id="booking_date" name="booking_date" class="form-control" />
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-success">Book Now</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="divider"></div>
        <ul class="footer-menu">
            <li class="nav-item"><a href="{{ route('admin.categories.index') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('admin.tables.index') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ route('admin.reservations.index') }}" class="nav-link">Terms</a></li>
        </ul>
    </footer>
</body>

</html>