<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="app.css">

<style>
    .header-title {
        margin-left: 40px;
        margin-bottom: 30px;
        margin-top: 0px;
    }

    ol.breadcrumb {
        background-color: white;
        margin-bottom: 0px;
        padding-top: 0px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        max-width: 100%;
        width: 100%;
        margin-bottom: 10px;
    }
    .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .profile img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-name {
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .row {
        width: 70%;
    }

    .rating {
            float: right;
            color: #f39c12;
            margin-left: 400px;
        }
</style>

@include('_homeNavbar');

<div class="container-fluid">
    {{Breadcrumbs::render('react_course_teachers_list')}};
    <h1 class="header-title">Teacher Lists</h1>
    <div class="grid-container">
        <div class="profile" onclick="redirectToBookingForm()">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Rina Sari, S.Kom.</strong></h4></div>
                    <p>Jakarta Pusat</p>
                    <p>Onsite / Online</p>
                </div>
            </div>
            <div class="rating">
                <p style="text-align: center; color: black; margin-bottom: 0px;"><strong>4.8 / 5</strong></p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="profile">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('dini-ayu.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Dini Ayu Pratiwi, M.Kom.</strong></h4></div>
                    <p>Jakarta Timur</p>
                    <p>Onsite / Online</p>
                </div>
            </div>
            <div class="rating">
                <p style="text-align: center; color: black; margin-bottom: 0px;"><strong>4.6 / 5</strong></p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="profile">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('muhammad-dodi.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Muhammad Dodi, M.Kom.</strong></h4></div>
                    <p>Jakarta Timur</p>
                    <p>Onsite</p>
                </div>
            </div>
            <div class="rating">
                <p style="text-align: center; color: black; margin-bottom: 0px;"><strong>4.0 / 5</strong></p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
        <div class="profile">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('siti.nurhayati.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Siti Nurhayati, M.Kom.</strong></h4></div>
                    <p>Jakarta Timur</p>
                    <p>Onsite / Online</p>
                </div>
            </div>
            <div class="rating">
                <p style="text-align: center; color: black; margin-bottom: 0px;"><strong>4.8 / 5</strong></p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="profile">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;">
                    <img class="img-fluid" src="{{asset('nadia-fitriani.jpeg')}}" alt="Card image cap">
                </div>
                <div class="col-md-6">
                    <div class="profile-name"><h4><strong>Nadia Fitriani, Ph.D.</strong></h4></div>
                    <p>Jakarta Utara</p>
                    <p>Online</p>
                </div>
            </div>
            <div class="rating">
                <p style="text-align: center; color: black; margin-bottom: 0px;"><strong>4.0 / 5</strong></p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
    </div>
</div>

<script>
    function redirectToBookingForm() {
        window.location.href = "{{ url('booking-form-onsite')}}"
    }
</script>