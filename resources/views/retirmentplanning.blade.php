@extends('layouts.app')
@section('content')
  <!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Services<h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Retirement Saving</a></li>
            </ol>
        </nav>
    </div>
</div>

   <!-- retirement-saving-info-container-start -->
   <div class="retirement-planning-section1">
    <div class="retirement-planning-container">
        <div class="retirement-planning-content">
            <h2 class="retirement-planning-heading">Retirement Planning</h2>
            <p class="retirement-planning-text">
                Retirement saving is a much sought and discussed subject in our time. It is said that retirement assessment is never too late, though ideal if you start it at a very young age. Retirement is the ultimate reality that happens to a working professional, and it should be the most enjoyable phase of an individual. Effective retirement assessment gives individuals the benefit of retaining their financial independence even after their work life. Thus, retirement assessment is as important as your education and marriage. We must understand that the future largely depends on the choices that we make today. An individual will be able to maintain high standards of living with the help of effective retirement assessment.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
        <div class="retirement-planning-image">
            <img src="img/retirement2.jpg" alt="Retirement Planning">
        </div>
    </div>
</div>

  <!-- retirement-saving-info-container-end -->

  <!-- Retirement-Saving-feature-start -->
  <section class="Retirement-Saving-feature">
        <div class="Retirement-Saving-feature-image-container">
            <img src="img/retirement-planning-feature.webp" alt="Retirement Saving Image">
        </div>
        <div class="Retirement-Saving-feature-content">
            <span class="Retirement-Saving-feature-subheading">About Retirement Saving</span>
            <h2 class="Retirement-Saving-feature-heading">Features of <br> Retirement Saving</h2>
            <p class="Retirement-Saving-feature-description">
                We must overcome one obstacle which is that no clue is available with us for how long we are going to live. There are certain things for an effective retirement like you must decide how much money you require to live a comfortable life after retirement and ascertain how much you require investing to achieve this goal.
                You should invest in a right investment cum retirement plan to build determined corpus.
                Most of the retirement plans offered in the market either provide you with a fixed monthly income or a lump sum after you retire from your professional life.
            </p>
            <a href="{{ route('schedulemeeting') }}" class="schedule-meeting-btn">Schedule Meeting</a>
        </div>
    </section>
 <!-- Retirement-Saving-feature-end -->

<style>

.card {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 620px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  padding: 32px;
  overflow: hidden;
  border-radius: 10px;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  background-color: #fff;
  margin-left: 50%;
  margin-top: -23%;
}

.content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 20px;
  color: #333;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
}

.content .heading {
  font-weight: 600;
  font-size: 26px;
}

.content .para {
  line-height: -1.4;
  font-size: 16px;
  margin-top: -5%;
}

.content .btn {
  color: #fff;
  text-decoration: none;
  padding: 10px;
  font-weight: 600;
  border: none;
  cursor: pointer;
  background: goldenrod;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.card::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(145deg, #d4af37, #fff8e1);
  z-index: -1;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  opacity: 0;
}

.card:hover::before {
  opacity: 1;
}

.card:hover {
  box-shadow: none;
}

.card:hover .content {
  color: #fff;
}

.card:hover .btn {
  color: #333;
  background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
  

.content .btn:active {
  box-shadow: none;
}
/* Media Queries */
@media (max-width: 768px) {
  .card {
    width: 90%;
    margin-left: 5%;
    margin-top: 0;
    padding: 24px;
  }

  .content .heading {
    font-size: 22px;
  }

  .content .para {
    font-size: 14px;
    margin-top: 0;
  }

  .content .btn {
    font-size: 14px;
    padding: 8px;
  }
}

@media (max-width: 480px) {
  .card {
    width: 100%;
    padding: 16px;
    margin-left: 0;
    margin-top: 0;
  }

  .content .heading {
    font-size: 21px;
  }

  .content .para {
    font-size: 16px;
    margin-top: 0;
  }

  .content .btn {
    font-size: 12px;
    padding: 6px;
  }
}

</style>
<!-- retirement code start -->
 
<div class="retirement-container">
    <div class="retirement-content">
    <h3>Key Benefits of Retirement Planning</h3>
        <p>Retirement plans helps us to make large corpuses that can be utilized to achieve any financial goal after we stop working.An individual can start investing with a very low sum at a very early age. Retirement assesment starts at a point when you know your life goals and then to accompany these goals with a sound financial plan that helps you to meet these objectives upon retirement.</p>
        <div class="infographic-container">
    <!-- Start Early -->
    <div class="infographic-item">
      <div class="circle-ret">
        <img src="img/time.png" alt="Clock Icon">
      </div>
      <div class="title-ret info-below">Start Early</div>
      <div class="description-ret info-below">An early start gives more time for your money to grow.</div>
     
    </div>
    <!-- Save More -->
    <div class="infographic-item">
      <div class="title-ret info-above">Save More</div>
      <div class="description-ret info-above">Try to save at least 20% of your income every month.</div>
      <div class="circle-ret">
        <img src="img/compound-interest.png" alt="Save Icon">
      </div>
     
    </div>

    <!-- Factor in Inflation -->
    <div class="infographic-item">
      <div class="circle-ret">
        <img src="img/asymmetry.png" alt="Inflation Icon">
      </div>
      <div class="title-ret info-below">Factor in Inflation</div>
      <div class="description-ret info-below">Ensure you don't end up having an inadequate corpus.</div>
     
    </div>

    <!-- Gauge Risk Appetite -->
    <div class="infographic-item">
      <div class="title-ret info-above">Gauge Your Risk Appetite</div>
      <div class="description-ret info-above">Choose financial instruments to accumulate the desired wealth.</div>
      <div class="circle-ret">
        <img src="img/danger.png" alt="Risk Icon">
      </div>
    </div>
  </div>

     <!-- retirement-section-imp-container-start -->
  <div class="retirement-section-imp-container">
    <div class="retirement-section-imp-box">
        <p class="retirement-section-imp-text">
            Accumulation of wealth through SIPs of Mutual Funds & recurring investment in equities, 
            Retirement Solutions of Life Insurance Companies, Bonds, Fixed Deposits, and NPS are 
            essential components for various stages of Retirement Planning.
        </p>
    </div>
</div>
<!-- retirement-section-imp-container-end -->
    </div>

   
</div>
</div>
<h1 class="why-planning-h2"> Retirement Calculator</h1>

<iframe src="https://www.investwell.in/updation/parameter/Calculator/par_retirement_calculatorN.jsp" width="100%" height="1150" frameborder="0" scrolling="auto"></iframe>
<!-- retiremnt code end -->

    <script src="js/main.js"></script>
@endsection