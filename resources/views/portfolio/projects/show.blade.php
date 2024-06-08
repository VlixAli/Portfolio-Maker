<x-portfolio.inner-page title="Project" :user="auth()->user()->fullName">
    <x-portfolio.alert type="success"/>
    <x-portfolio.alert type="info"/>

  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{$project->image? asset('storage/'. $project->image) : asset('/images/no_image.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category:</strong> {{$project->category}}</li>
                <li><strong>Client:</strong> {{$project->client}} </li>
                <li><strong>Project date:</strong> {{$project->date}}</li>
                <li><strong>Project URL:</strong> <a href="{{$project->url}}">{{$project->url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project Description</h2>
              <p>{{$project->description}}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
</x-portfolio.inner-page>
