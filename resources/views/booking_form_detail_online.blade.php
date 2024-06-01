<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    ol.breadcrumb {
        background-color: white;
        margin-bottom: 0px;
        padding-top: 0px;
    }

    .page-title {
        margin-left: 40px;
        margin-bottom: 30px;
        margin-top: 0px;
    }

    .profile img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
    }

    .content {
        margin-top: 30px;
    }

    .input-style {
        width: 50% !important;
        border-radius: 10px !important;
        background-color: #F7F3EA !important;
    }

    .date-checkbox {
        background-color: #F7F3EA;
        padding: 10px;
        margin-top: 10px;
        border-radius: 0px 20px 20px 0px;
        width: 250px;
    }

    .submit-button {
        color: white;
        font-weight: bold;
        background-color: #254E7A;
        border-radius: 20px;
        padding: 7px 25px 7px 25px;
        border-color: white;
        margin-top: 20px;
    }

    .text-content {
        font-size: 21px;
    }

    .line-break {
        border: 1px solid gray;
        margin-top: 20px;
    }

    .payment-container {
        margin-top: 30px;
    }
</style>


@include('_homeNavbar');

<div class="container-fluid">
    {{ Breadcrumbs::render('booking_form_detail_onsite')}};
    <h1 class="page-title">Booking Detail</h1>
    <div class="container">
        <div class="profile">
            <h2>Teacher</h2>
            <div class="row">
                <div class="col-md-2" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Rina Sari, S.Kom.</strong></h4></div>
                    <p>Jakarta Pusat</p>
                    <p>Onsite / Online</p>
                    
                </div>
            </div>
        </div>
        <hr class="line-break">
        <div class="content container-fluid">
           <h3><strong>Student Name </strong></h3>
           <p class="text-content">Jesslyn Winata</p>
           <h3><strong>Course Schedule</strong></h3>

           {{-- first row --}}
           <div class="row">
               <div class="col-md-3">
                   <div class="date-checkbox">
                       <li><label class="checkbox-input" for="exampleCheckbox">Selasa, pukul 11.00 - 13.00</label></li>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="date-checkbox">
                       <li><label class="checkbox-input" for="exampleCheckbox">Kamis, pukul 10.00 - 12.00</label></li>   
                   </div>
               </div>
           </div>

           <h3><strong>No Virtual Account </strong></h3>
           <p class="text-content">2668 9897 7033 2724 58 <i class="fa fa-copy" style="cursor: pointer"></i></p>

           <div class="row payment-container">
                <div class="col-md-4">
                    <p style="margin-top: 25px; font-size: 21px"><strong>Total Price: </strong>Rp 230.000</p>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="submit-button" onclick="redirectToBookingFormOnsite()">Confirm</button>
                </div>
           </div>
           
        </div>
    </div>
</div>



<script>
    function redirectToOnlineBooking() {
        window.location.href = "{{ url('/booking-form-online') }}";
    }

    function redirectToBookingFormOnsite() {
        event.preventDefault();
        window.location.href = "{{ url('/booking-form-detail-onsite') }}"
    }
</script>