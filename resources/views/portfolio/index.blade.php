<x-portfolio.layout>
    <x-portfolio.navbar :user="auth()->user()->fullName"/>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <x-portfolio.alert type="success"/>
        <x-portfolio.alert type="info"/>
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ auth()->user()->fullName}}</h1>
            <p>I'm <span class="typed" data-typed-items="{{$titles}}"></span></p>
            <a class="btn btn-primary mx-2" href="{{route('portfolio.hero.create')}}" role="button">Add titles</a>
            <a class="btn btn-secondary mx-2" href="{{route('portfolio.hero.index')}}" role="button">Edit titles</a>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$about->summary}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                        <a class="btn btn-info mt-4 mx-2" href="{{route('portfolio.about.edit', $about)}}" role="button">Edit About Me</a>
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{$about->title}}</h3>
                        <p class="fst-italic">
                            {{$about->short_summary}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{$about->birthday}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{$about->phone}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{$about->city}}</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>{{$about->freelance}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {{$about->ending}}
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                         data-aos-delay="100">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up"
                         data-aos-delay="300">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
{{--                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit--}}
{{--                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias--}}
{{--                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
                </div>

                <div class="row skills-content">
                    @foreach($skills->split($skills->count()/2) as $column)
                    <div class="col-lg-6" data-aos="fade-up">
                        @foreach($column as $skill)
                        <div class="progress">
                            <span class="skill">{{$skill->name}} <i class="val">{{$skill->level}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <a class="btn btn-info mt-4 mx-2" href="{{route('portfolio.skills.create')}}" role="button">Add Skill</a>
                <a class="btn btn-success mt-4 mx-2" href="{{route('portfolio.skills.index')}}" role="button">Edit Skills</a>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
{{--                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit--}}
{{--                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias--}}
{{--                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4>{{auth()->user()->fullName}}</h4>
                            <p><em>{{ $about->summary }}</em></p>
                            <ul>
                                <li>{{$about->city}}</li>
                                <li>{{$about->phone}}</li>
                                <li>{{$about->email}}</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        @foreach($educations as $education)
                        <div class="resume-item">
                            <h4>{{ $education->name }}</h4>
                            <h5>{{$education->start_year}} - {{$education->end_year}}</h5>
                            <p><em>{{$education->institution}}</em></p>
                            <p>{{ $education->description }}</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach($experiences as $experience)
                        <div class="resume-item">
                            <h4>{{ $experience->position }}</h4>
                            <h5>{{$experience->starting_year}} - {{$experience->ending_year}}</h5>
                            <p><em>{{$experience->company}}</em></p>
                            <ul>
                                @foreach($experience->bulletPoints as $bulletPoint)
                                <li>{{$bulletPoint}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <a class="btn btn-info mt-4 mx-2" href="{{route('portfolio.educations.create')}}" role="button">Add Education</a>
                <a class="btn btn-success mt-4 mx-2" href="{{route('portfolio.educations.index')}}" role="button">Edit Educations</a>
                <a class="btn btn-outline-info mt-4 mx" href="{{route('portfolio.experiences.create')}}" role="button">Add Experience</a>
                <a class="btn btn-outline-success mt-4 mx-2" href="{{route('portfolio.educations.index')}}" role="button">Edit Experiences</a>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.blade.php" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
</x-portfolio.layout>
