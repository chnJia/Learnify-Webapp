<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="app.css">

<style>
      .flex-row {
        flex: 1;
        display: flex;
    }

    .content-wrapper {
        display: flex;
        flex-direction: column;
    }

    .sidebar-container {
        display: flex;
        flex-direction: column;
        height: 100%; 
    }

    .sidebar {
        background-color: #254E7A;
        width: 250px;
        flex-shrink: 0; 
        margin-top: -20px;
    }

    .main {
        flex: 1;
        background-color: #F3F8FF;
        margin-top: -20px;
        overflow-y: auto; 
    }
        
    .container-box {
        background-color: #4b6c9a;
        width: 200px;
        border-radius: 10px;
        margin-left: 20px;
        margin-top: 20px;
    }

    .text {
        padding: 10px;
    }

    .main-container {
        margin-left: 20px;
    }

    .schedule-container {
        background-color: #c6deff;
        width: 100%;
        height: auto;
        border-radius: 10px;
        padding: 5px 10px 10px 10px;
    }

    .course-container {
        background-color: #c6deff;
        width: 100%;
        border-radius: 15px;
        margin-top: 20px;
        height: auto;
        padding-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 20px;
    }

    .course-material-container {
        width: auto;
        border: 1px solid gray;
        border-radius: 5px;
        margin-left: 30px;
        background-color: white;
        box-shadow: 2px 2px 10px gray;
    }

    .popular-material-container {
        width: auto;
        border: 1px solid gray;
        border-radius: 5px;
        margin-left: 30px;
        background-color: white;
        box-shadow: 2px 2px 8px gray;
    }

    .image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        height: 27%;
    }

    .image-grid img {
        width: 100%;
        height: 40%;
        display: block;
        border-radius: 10px 10px 0px 0px;
        cursor: pointer;
    }

    .card {
        margin-top: 10px;
    }

    .card-text {
        background-color: #DBEAFF;
        height: auto;
        border-radius: 0px 0px 10px 10px;
        padding: 10px;
    }

    .course-title {
        font-size: 21px;
        font-weight: bold;
    }

    .popular-course {
        padding-top: 10px;
    }

    .course-title {
        font-weight: bold;
    }

    footer {
        background-color: #111B25;
        padding: 20px 0px 20px 20px;
    }

    .text-uppercase {
        padding-left: 100px;
    }

    .profile-image {
        width: 60; 
        height: 60px; 
        object-fit: cover;  
        border-radius: 50%;
    }

    .track-teacher-button {
        margin-top: 15px;
        color: white;
        font-weight: bold;
        background-color: #254E7A;
        border-radius: 20px;
        padding: 3px 25px 3px 25px;
        border-color: rgb(141, 141, 141);
        margin-top: 0px;
    }
    .profile-row {
        display: flex;
        align-items: center;
        gap: 10px; 
    }

    .profile-col {
        display: flex;
        align-items: center;
        margin-left: 10px;
    }

    .profile-image {
        max-width: 100%;
        border-radius: 50%;
    }

    .tab-button {
        color: #254E7A;
        font-weight: bold;
        border-radius: 20px;
        padding: 3px 15px;
        border: none;
        position: relative;
        font-size: 16px;
        cursor: pointer;
    }

    .tab-button.active::after {
        content: "";
        display: block;
        width: 100%;
        height: 15%;
        border-radius: 20px;
        background-color: #254E7A;
        position: absolute;
        left: 0;
    }

    .tabMenu-container {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
    }
</style>

@include('_homeNavbar');

<div class="content-wrapper">
<div class="sidebar-container container-fluid">
    <div class="d-flex flex-row">
        <div class="sidebar p-2">
            <div class="container-box container-fluid">
                <div class="text">
                    <h4><strong>Role</strong></h3>
                    <p style="color: white; font-size: 16px;"><strong>Student</strong></p>
                </div>
            </div>
        </div>
        <div class="main p-2 container-fluid">
            <h1>Hi, </h1>
            <div class="schedule-container container-fluid">
                <h4><strong>Upcoming Schedule</strong> </h4>
                <div class="row tabMenu-container">
                    <div class="col">
                        <p class="tab-button onsite-button" onclick="selectTab(this)">Onsite</p>
                    </div>
                    <div class="col">
                        <p class="tab-button online-button active" onclick="selectTab(this)">Online</p>
                    </div>
                </div>
                
                <div class="profile">
                    <div style="display: flex; align-items: center; margin-top: 20px; margin-right: 10px;">
                        <h4><strong>Programming With React</strong></h4>
                        <span style="margin-left: 25px;">
                            <i class="far fa-clock" style="margin-right: 5px;"></i>32h 12m
                        </span>
                    </div>
                    
                    <div class="profile-row" style="display: flex; align-items: center;">
                        <div class="profile-col" style="margin-left: 0px;">
                            <img class="img-fluid rounded-circle profile-image" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                        </div>
                        <div class="profile-col">
                            <h4><strong>Rina Sari, S.Kom.</strong></h4>
                        </div>
                    </div>
                </div>
           </div>
           <div class="course-container container-fluid">
                <h4 class="course-title">Courses</h4>
                <div class="course-material-container container-fluid">
                    <div class="image-grid">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('react-js-banner-big-1.jpg')}}" alt="Card image cap" onclick="redirectToCourseDetail()">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="course-title">Programming With React</p>
                                    <p><strong>Price Range: </strong>IDR 289.000 - 399.000</p>
                                    <p><strong>Rating: </strong> 4.8 / 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('AlgebraMath.jpeg')}}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="course-title">Algebra Math</p>
                                    <p><strong>Price Range: </strong>IDR 200.000 - 320.000</p>
                                    <p><strong>Rating: </strong>4 / 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="{{asset('Biology.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    <p class="course-title">Biology for SMA</p>
                                    <p> <strong>Price Range: </strong>200.000 - 320.000</p>
                                    <p><strong>Rating: </strong>4.1 / 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="popular-course">
                    <h4 class="course-title">Popular Courses</h4>
                    <div class="popular-material-container container-fluid">
                        <div class="image-grid">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('Ai-Course.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p class="course-title">AI Fundamental</p>
                                        <p><strong>Price Range: </strong>350.000 - 420.000</p>
                                        <p><strong>Rating: </strong>4.8 / 5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('blockchain.png')}}" alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p class="course-title">Blockchain Fundamental</p>
                                        <p><strong>Price Range: </strong>320.000 - 399.000</p>
                                        <p><strong>Rating: </strong>4 / 5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{asset('Python.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-text">
                                        <p class="course-title">Basic Python Learning</p>
                                        <p><strong>Price Range: </strong>IDR 230.000 - 385.000</p>
                                        <p><strong>Rating: </strong>4.1 / 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
</div>

<!-- Footer -->
<footer class="text-center text-white">
    <div class="container">
        <section class="mt-5">
            <div class="row text-center d-flex justify-content-center pt-5">
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">About us</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Products</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Awards</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Help</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Contact</a>
                    </h6>
                </div>>
            </div>
        </section>
        <hr class="my-5" />
        <section class="mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <p style="color: #DBEAFF">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        distinctio earum repellat quaerat voluptatibus placeat nam,
                        commodi optio pariatur est quia magnam eum harum corrupti
                        dicta, aliquam sequi voluptate quas.
                    </p>
                </div>
            </div>
        </section>
        <section class="text-center mb-5">
            <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: #DBEAFF; margin-top: 10px;">
        © 2020 Copyright: Learnify
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function redirectToCourseDetail() {
        window.location.href = "{{ url('/react-course-detail-lessons') }}";
    }

    function selectTab(tabButton) {
        var tabs = document.querySelectorAll('.tab-button');

        tabs.forEach(function(tab) {
            tab.classList.remove('active');
        });

        tabButton.classList.add('active');

        var tabMenu = tabButton.classList.contains('onsite-button') ? 'onsite' : 'online';
        var profileContent = document.querySelector('.profile');
        profileContent.innerHTML = '';

        if (tabMenu === 'onsite') {
            profileContent.innerHTML = 
                `<div style="display: flex; align-items: center; margin-top: 20px; margin-right: 10px;">
                    <h4><strong>Programming With React</strong></h4>
                    <span style="margin-left: 25px;">
                        <i class="far fa-clock" style="margin-right: 5px;"></i>17h 46m
                    </span>
                </div>
                
                <div class="profile-row" style="display: flex; align-items: center;">
                    <div class="profile-col" style="margin-left: 0px;">
                        <img class="img-fluid rounded-circle profile-image" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                    </div>
                    <div class="profile-col">
                        <h4><strong>Rina Sari, S.Kom.</strong></h4>
                    </div>
                    <div class="profile-col">
                        <button type="submit" class="track-teacher-button">Track Teacher</button>
                    </div>
                    <div class="profile-col">
                        <p class="text-muted"><i>*Only available 2 hours before the course started</i></p>
                    </div>
                </div>`;
        } else {
            profileContent.innerHTML = 
                `<div style="display: flex; align-items: center; margin-top: 20px; margin-right: 10px;">
                    <h4><strong>Programming With React</strong></h4>
                    <span style="margin-left: 25px;">
                        <i class="far fa-clock" style="margin-right: 5px;"></i>32h 12m
                    </span>
                </div>
                
                <div class="profile-row" style="display: flex; align-items: center;">
                    <div class="profile-col" style="margin-left: 0px;">
                        <img class="img-fluid rounded-circle profile-image" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                    </div>
                    <div class="profile-col">
                        <h4><strong>Rina Sari, S.Kom.</strong></h4>
                    </div>
                </div>`;
            }
    }   
</script>