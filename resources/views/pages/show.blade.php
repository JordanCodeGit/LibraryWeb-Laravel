<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $book->title }} Details</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

</head>

<body>
    <header class="header">
        <div class="branding">
            <div class="container-fluid position-relative py-3">
                <div class="logo-wrapper">
	                <div class="site-logo">
                        <a class="navbar-brand" href="/">
                        <img class="logo-icon me-2" src="{{ asset('assets/img/backIcon.png') }}" alt="logo" >
                        <span class="logo-text ">Jordan's Library</span></a></div>
                </div><!--//docs-logo-wrapper-->

            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->

    <section class="hero-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
				    <div class="promo pe-md-3 pe-lg-5">
					    <h1 class="headline mb-3">
                {{ $book->title }}
					    </h1><!--//headline-->

					    <div class="subheadline mb-4">
						    {{ $book->description }}
					    </div><!--//subheading-->

              <div class="subheadline mb-4">
						    Written by {{ $book->author }}
					    </div><!--//subheading-->

              <div class="subheadline mb-4">
						    Published by {{ $book->publisher }}
					    </div><!--//subheading-->

              <div class="subheadline mb-4">
						    Written in {{ $book->year }}
					    </div><!--//subheading-->

              <div class="subheadline mb-4">
						    Category: {{ $book->category }}
					    </div><!--//subheading-->

					    <div class="hero-quotes mt-5">
						    <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="8000">
								<ol class="carousel-indicators">
									<li data-bs-target="#quotes-carousel" data-bs-slide-to="0" class="active"></li>
									<li data-bs-target="#quotes-carousel" data-bs-slide-to="1"></li>
									<li data-bs-target="#quotes-carousel" data-bs-slide-to="2"></li>
								</ol>

							    <div class="carousel-inner">
								    <div class="carousel-item active">
								        <blockquote class="quote p-4 theme-bg-light">
									        "{{ $book->title }} is a great book to read. I highly recommend it to everyone who wants to learn more about {{ $book->title }}.
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{ asset('assets/img/profiles/profile-1.png') }}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">James Doe</div>
										        <div class="soure-title">Co-Founder</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								    <div class="carousel-item">
								        <blockquote class="quote p-4 theme-bg-light">
									        "{{ $book->title }} puts me in the edge of my seat. The category of {{ $book->category }} is a great one to read."
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{ asset('assets/img/profiles/profile-2.png') }}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">Jean Doe</div>
										        <div class="soure-title">Founder</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								    <div class="carousel-item">
								        <blockquote class="quote p-4 theme-bg-light">
									        "Awesome book! {{ $book->title }} is a whole journey to read. With {{ $book->author }} as the author, you know you're in for a treat."
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{ asset('assets/img/profiles/profile-3.png') }}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">Andy Doe</div>
										        <div class="soure-title">Frontend Developer</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								</div><!--//carousel-inner-->
							</div><!--//quotes-carousel-->

					    </div><!--//hero-quotes-->
				    </div><!--//promo-->
			    </div><!--col-->
			    <div class="col-12 col-md-5 mb-5 align-self-center">
				    <div class="book-cover-holder">
					    <img class="img-fluid book-cover" src="{{ asset('storage/' . $book->cover) }}" alt="book cover">
				    </div><!--//book-cover-holder-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//hero-section-->

    <!-- Javascript -->
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/smoothscroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

