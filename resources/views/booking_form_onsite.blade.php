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

    .online-button {
        margin-left: 20px;
        color: white;
        font-weight: bold;
        background-color: gray;
        border-radius: 20px;
        padding: 3px 15px 3px 15px;
        border-color: white;
        margin-left: -15px;
    }

    .onsite-button {
        color: white;
        font-weight: bold;
        background-color: #254E7A;
        border-radius: 20px;
        padding: 3px 15px 3px 15px;
        border-color: white;
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
        padding: 5px 20px 5px 20px;
        border-color: white;
    }
</style>


@include('_homeNavbar');

<div class="container-fluid">
    {{ Breadcrumbs::render('booking_form')}};
    <h1 class="page-title">Booking Form</h1>
    <div class="container">
        <div class="profile">
            <div class="row">
                <div class="col-md-2" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Rina Sari, S.Kom.</strong></h4></div>
                    <p>Jakarta Pusat</p>
                    <p>Onsite / Online</p>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="onsite-button">Onsite</button>
                            </div>
                            <div class="col-md-10">
                                <button type="submit" class="online-button" onclick="redirectToOnlineBooking()">Online</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content container-fluid">
            <form action="post">
                <div class="form-content">
                    <label>Full Name</label>
                    <input type="text" class="form-control input-style"  placeholder="Full Name">
                    <label style="margin-top: 20px;">Address</label>
                    <textarea class="form-control input-style" placeholder="Address"></textarea>
                    <label style="margin-top: 20px;">Date Availability</label>
                    <p class="text-muted" style="margin-bottom: 0px;"><i>Choose max 2 days</i></p>

                    {{-- first row --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Selasa, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Kamis, pukul 10.00 - 12.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Sabtu, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                    </div>

                    {{-- second row --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Selasa, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Kamis, pukul 10.00 - 12.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Sabtu, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                    </div>

                    {{-- third row --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Selasa, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Kamis, pukul 10.00 - 12.00</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date-checkbox">
                                <input class="checkbox-input" type="checkbox" id="exampleCheckbox">
                                <label class="checkbox-input" for="exampleCheckbox">Sabtu, pukul 11.00 - 13.00</label>
                            </div>
                        </div>
                    </div>

                    <p style="margin-top: 20px;"><strong>Total Price: </strong>IDR 230.000</p>
                    <button type="submit" class="submit-button" onclick="redirectToBookingFormOnsite()">Proceed to Payment</button>
                </div>
            </form>
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