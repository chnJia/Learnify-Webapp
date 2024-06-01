<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="app.css">

<style>
    .course-detail {
        margin-left: 40px;
        margin-bottom: 30px;
        margin-top: 0px;
    }

    img {
        border-radius: 10px;
    }

    .col-md-6 {
        padding-left: 0px;
    }

    .tab-menu {
        cursor: pointer;
    }

    .enroll-button {
        color: white;
        background-color: #254E7A;
        border-radius: 20px;
        border-color: rgb(140, 140, 140);
        padding: 5px 15px 5px 15px;
        margin-left: 0px;
        margin-top: 20px;
    }

    .content {
        background-color: #DBEAFF;
        padding: 10px;
        border-radius: 10px;
        padding-left: 30px;
        margin-top: 15px;
    }

    li {
        font-weight: bold;
    }

    footer {
        background-color: #111B25;
        margin-top: 30px;
        padding: 20px 0px 20px 20px;
        position: relative;
    }

    ol.breadcrumb {
        background-color: white;
        margin-bottom: 0px;
        padding-top: 0px;
    }
</style>

@include('_homeNavbar');

<div class="container-fluid course-detail-container">
    {{ Breadcrumbs::render('react_course_detail_lessons')}};
    <h1 class="course-detail">Course Detail</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding-left: 0px;">
                <img class="img-fluid" style="max-width: 100%;" src="{{asset('react-js-banner-big-1.jpg')}}" alt="Card image cap">
            </div>
            <div class="col-md-6">
                <h3> <strong>Programming with React</strong></h3>
                <p><strong>Instructor: </strong>Rina Sari</p>
                <p><strong>Rating: </strong>4.8 / 5</p>
                <button class="enroll-button" onclick="enroll()">Enroll Now</button>
            </div>
        </div>
        <div class="row">
            <h4><strong>Description</strong></h4>
            <p>"Learn React programming: build dynamic web interfaces efficiently using reusable components. Covering JSX syntax, component-based   architecture, state management, and routing. Gain hands-on experience for creating responsive, modern web apps."</p>
        </div>
        <div class="row tab-menu">
            <div class="col-md-1" style="padding-left: 0px;">
                <h4><strong>Lessons</strong></h4>
            </div>
            <div class="col-md-1" style="padding-left: 0px;">
                <h4 onclick="redirectToReviews()">Reviews</h4>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <h4><strong>Session 1: Introduction to React</strong></h4>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <img class="img-fluid" style="max-width: 100%; height: 200px;" src="{{asset('react-logo.png')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-4">
                        <h3><strong>Description</strong></h3>
                        <ul>
                            <li>What is React</li>
                            <li>Understanding the Virtual DOM</li>
                            <li>React Components</li>
                            <li>JSX</li>
                            <li>Basic React Syntax</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content">
                <h4><strong>Session 2: Components and Props</strong></h4>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <img class="img-fluid" style="max-width: 100%; height: 200px;" src="{{asset('react-logo.png')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-4">
                        <h3><strong>Description</strong></h3>
                        <ul>
                            <li>Creating functional and class components</li>
                            <li>Passing props to components</li>
                            <li>Knowing components in React</li>
                            <li>Components composition</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content">
                <h4><strong>Session 3: State and Lifecycle</strong></h4>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <img class="img-fluid" style="max-width: 100%; height: 200px;" src="{{asset('react-logo.png')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-4">
                        <h3><strong>Description</strong></h3>
                        <ul>
                            <li>Understanding components state</li>
                            <li>Lifecycle methods</li>
                            <li>setState()</li>
                            <li>Handling user events</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content">
                <h4><strong>Session 4: Handling Forms and Events</strong></h4>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <img class="img-fluid" style="max-width: 100%; height: 200px;" src="{{asset('react-logo.png')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-4">
                        <h3><strong>Description</strong></h3>
                        <ul>
                            <li>Handling user input with forms</li>
                            <li>Controlled components</li>
                            <li>Handling events in React</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content">
                <h4><strong>Session 5: React Router</strong></h4>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 0px;">
                        <img class="img-fluid" style="max-width: 100%; height: 200px;" src="{{asset('react-logo.png')}}" alt="Card image cap">
                    </div>
                    <div class="col-md-4">
                        <h3><strong>Description</strong></h3>
                        <ul>
                            <li>Client-side routing with React Router</li>
                            <li>Configuring routes/li>
                            <li>Navigation</li>
                            <li>Best practices using React Routes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
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
    function redirectToReviews() {
        window.location.href = "{{ url('/react-course-detail-reviews')}}"
    }

    function enroll() {
        window.location.href = "{{ url('/react-course-teachers-list')}}"
    }
</script>