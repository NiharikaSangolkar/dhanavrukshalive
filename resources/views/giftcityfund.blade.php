@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
     <!-- public/img/insurance.png -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" 
    style="background: url('{{ asset('img/giftcityfund.jpg') }}') center/cover no-repeat; background-size: cover; background-position: center; height: 55vh;">
      <div class="container text-center py-5">
         <h1 class="display-2 text-white mb-4 animated slideInDown">Gift City Funds</h1>
           <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item"><a href="#">Gift City Funds</a></li>
              </ol>
           </nav>
      </div>
   </div>
</div>
    
    <!-- Page Header End -->

    <section class="child-future-saving-section">
    <div class="child-future-saving-container">
        <div class="child-future-saving-image">
            <img src="img/giftcityfund.jpg" alt="Child Future Saving">
        </div>
        <div class="child-future-saving-content">
            <h1>Gifty City Funds</h1>
            <p>
                <strong> GIFT City (Gujarat International Financial-Tec City)</strong>
           , is India's first IFSC, or International Financial Services Centre. It is approved and regulated by the government under the Special Economic Zones Act, 2005. GIFT City is a jurisdiction that provides financial services to both residents and non-residents in foreign currency.
            </p>
            <p>
                <strong>The International Financial Services Centre (IFSC)</strong>  was established to attract overseas financial institutions and the overseas branches/subsidiaries of Indian financial institutions to India. The IFSC provides a compelling ecosystem for conducting financial services business, including a favourable regulatory environment and a world-class infrastructure. IFSC units are treated as non-residents under extant Foreign Exchange Management regulations. The International Financial Services Centres Authority (IFSCA) is a unified regulator for securities markets, banking, insurance, and pension funds in the IFSC.
                .
            </p>
            <a href="{{ route('schedulemeeting') }}" class="child-future-saving-btn">Schedule Meeting</a>
        </div>
    </div>
</section>

    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection