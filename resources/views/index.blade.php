<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHPJabber | Car Rental Website Template</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('car-rental/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('car-rental/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('car-rental/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('car-rental/css/owl.theme.default.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('car-rental/css/style.css') }}">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand">Car Rental Website</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="fleet.html">Fleet</a></li>
                    <li><a href="offers.html">Offers</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">About<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="blog-posts.html">Blog</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- HOME -->
    <section id="home">
        <div class="row">
            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Lorem ipsum dolor sit amet.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi
                                    sapiente delectus eiet.</h3>
                                <a href="fleet.html" class="section-btn btn btn-default">Fleet</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                <a href="fleet.html" class="section-btn btn btn-default">Fleet</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>Efficient Learning Methods</h1>
                                <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna
                                    venenatis sollicitudin ut at libero.</h3>
                                <a href="fleet.html" class="section-btn btn btn-default">Fleet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (Session()->has('status'))
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session()->get('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
     @endif

    <section class="section-background">
        <div class="container">
            <div class="row">

                @foreach ($cars as $car)
                    <div class="col-md-4 col-sm-3">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{ asset('car-rental/images/' . $car['image_url']) }}"
                                        class="img-responsive" alt="">
                                </div>

                            </div>

                            <div class="courses-detail">
                                <h3 id="{{$car['model']}}">{{ $car['company'] . ' ' . $car['model'] }}</h3>
                                <p class="lead"><small>from</small> <strong>Rs .
                                        {{ $car['charge'] }}</strong> <small>per day</small></p>
                                <span>
                                    <img
                                        src="https://img.icons8.com/external-those-icons-fill-those-icons/24/000000/external-fuel-cars-components-those-icons-fill-those-icons.png" />

                                    {{ $car['fuel'] }}</span><span><img
                                        src="https://img.icons8.com/ios-filled/50/000000/gear-stick.png" />{{ $car['transmission'] }}</span>

                                <span> <img src="https://img.icons8.com/material-outlined/24/000000/flight-seat.png" />
                                    {{ $car['seating'] }} seats</span>
                                <h4>Dealer Location : {{ $car['dealer_location'] }}</h4>
                            </div>

                            <div class="courses-info">
                              {{-- data-toggle="modal" data-target=".bs-example-modal"  --}}
                              
                             <a href="/form/{{$car->id}}"  class="section-btn btn btn-primary btn-block" > Book Now </a>
                                

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>



    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <h2>About us</h2>

                            <br>

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis
                                corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe
                                explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam,
                                fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid,
                                pariatur enim nisi. Quia ab iusto assumenda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter full name" name="name"
                                required>

                            <input type="email" class="form-control" placeholder="Enter email address" name="email"
                                required>

                            <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Headquarter</h2>
                        </div>
                        <address>
                            <p>212 Barrington Court <br>New York, ABC 10001</p>
                        </address>

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>

                        <div class="copyright-text">
                            <p>Copyright &copy; 2020 Company Name</p>
                            <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2>Contact Info</h2>
                        </div>
                        <address>
                            <p>+1 333 4040 5566</p>
                            <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                        </address>

                        <div class="footer_menu">
                            <h2>Quick Links</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="terms.html">Terms & Conditions</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="footer-info newsletter-form">
                        <div class="section-title">
                            <h2>Newsletter Signup</h2>
                        </div>
                        <div>
                            <div class="form-group">
                                <form action="#" method="get">
                                    <input type="email" class="form-control" placeholder="Enter your email"
                                        name="email" id="email" required>
                                    <input type="submit" class="form-control" name="submit" id="form-submit"
                                        value="Send me">
                                </form>
                                <span><sup>*</sup> Please note - we do not spam your email.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                </div>

                <div class="modal-body">
                    <form action="#" id="contact-form">


                        <input type="text" class="form-control" placeholder="Enter full name" required>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter email address" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-control"> Car Name : </label>
                                <input type="text" name="investor_name" value={{$car['model']}}>

                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter email address" required>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="section-btn btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS -->
    <script >

<script>
$('.decline-loan-button').on('click', function () {
$('#package_name').val($(this).data('package_name-input'));


//If you want to pass data to for action for a form, you can do this 
 $('#decline-loan-form').attr('action', $(this).data('decline-link'));
});
</script>
    </script>
    <script src="{{ asset('car-rental/js/jquery.js') }}"></script>
    <script src="{{ asset('car-rental/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('car-rental/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('car-rental/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('car-rental/js/custom.js') }}"></script>

</body>

</html>
