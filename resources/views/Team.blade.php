@extends('layouts.masterLayout')
@section('content')
    
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Team</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{route('homePage')}}">home &nbsp;/</a>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="team-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Great
            <span>Team</span>
          </h3>
          <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
            <br>iews. Iterative approaches to corporate strategy...</p>
        </div>
        <!-- Nav tabs -->
        <div class="tabs">
          <ul class="nav nav-tabs justify-content-center" id="teamTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor" aria-selected="true">doctor</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="event-planning-tab" data-toggle="tab" href="#event-planning" role="tab" aria-controls="event-planning" aria-selected="false">event planning</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="lab-tab" data-toggle="tab" href="#lab" role="tab" aria-controls="lab" aria-selected="false">lab</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">marketing</a>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="teamTab">
          <!--Start single tab content-->
          <div class="team-members tab-pane fade show active" id="doctor">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-1.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Emely Robert</h6>
                  <p>Bone Specialist</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-2.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Rag Jhon</h6>
                  <p>Eye Specialist</p>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-3.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Tent Richardson</h6>
                  <p>Skin Specialist</p>
                </div>
              </div>
            </div>
          </div>
          <!--End single tab content-->
          <!--Start single tab content-->
          <div class="team-members tab-pane fade" id="event-planning">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/event-1.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Sheiring Ton</h6>
                  <p>Manager</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/event-2.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Rig Richard</h6>
                  <p>Sr. Manager</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/event-3.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Tom Moddy</h6>
                  <p>President</p>
                </div>
              </div>
            </div>
          </div>
          <!--End single tab content-->
          <!--Start single tab content-->
          <div class="team-members tab-pane fade" id="lab">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-lab-1.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Maria Robert</h6>
                  <p>X-ray</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-lab-2.jpg" class="img-fluid" alt="team">
                  <h6>Dr. John Kelly</h6>
                  <p>ultrasound therapy</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-lab-3.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Simran Toe</h6>
                  <p>bone therapy</p>
                </div>
              </div>
            </div>
          </div>
          <!--End single tab content-->
          <!--Start single tab content-->
          <div class="team-members tab-pane fade" id="marketing">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-2.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Rag Jhon</h6>
                  <p>Eye Specialist</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/doctor-lab-2.jpg" class="img-fluid" alt="team">
                  <h6>Dr. John Kelly</h6>
                  <p>ultrasound therapy</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="team-person text-center">
                  <img loading="lazy" src="images/team/event-1.jpg" class="img-fluid" alt="team">
                  <h6>Dr. Sheiring Ton</h6>
                  <p>Manager</p>
                </div>
              </div>
            </div>
          </div>
          <!--End single tab content-->
        </div>
      </div>
    </div>
  </div>
</section>

@endsection