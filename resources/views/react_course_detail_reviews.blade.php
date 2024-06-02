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

    .review {
        background-color: #DBEAFF;
        padding: 10px;
        border-radius: 10px;
        margin-top: 10px;
    }
    
    .name {
        font-size: 20px;
        margin-bottom: 0px;
    }

    footer {
        background-color: #111B25;
        margin-top: 50px;
        padding: 20px 0px 20px 20px;
        position: relative;
    }

    ol.breadcrumb {
        background-color: white;
        margin-bottom: 0px;
        padding-top: 0px;
        font-weight: bold;
    }
</style>

@include('_homeNavbar');

<div class="container-fluid course-detail-container">
    {{ Breadcrumbs::render('react_course_detail_reviews')}};
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
                <h4 onclick="redirectToLessons()">Lessons</h4>
            </div>
            <div class="col-md-1" style="padding-left: 0px;">
                <h4><strong>Reviews</strong></h4>
            </div>
        </div>

        <div class="reviews-container">
            <!-- first row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Fahmi Rumbayan</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>5 days ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Saya sangat merekomendasikan kursus Programming With React kepada siapa  pun yang ingin belajar tentang pengembangan web dengan React. Instruktur  sangat jelas dalam menjelaskan konsep-konsep dasar hingga yang lebih  kompleks. Materi yang disajikan sangat terstruktur dan mudah dipahami,  membuat saya merasa lebih percaya diri dalam mengembangkan aplikasi web  menggunakan React
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Dini Anggraini</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>1 week ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Saya baru saja menyelesaikan kursus Programming With React dan saya  sangat senang dengan hasilnya. Instruktur sangat sabar dan responsif  terhadap pertanyaan-pertanyaan saya. Materi-materi yang disajikan sangat  lengkap dan tersusun dengan baik. Saya merasa memiliki landasan yang  kuat dalam React setelah menyelesaikan kursus ini
                        </div>
                    </div>
                </div>
            </div>

            <!-- second row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Rina Sulistyowati</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>6 days ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Pembelajaran Programming With React benar-benar mengubah cara saya  memandang pengembangan web. Materi-materi yang diajarkan sangat relevan  dengan tren industri saat ini. Saya suka bagaimana instruktur  menggabungkan penjelasan teori dengan studi kasus yang nyata. Ini  memberi saya pemahaman yang mendalam tentang bagaimana membangun  aplikasi web dengan React.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Aditama Pratama</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>1 week ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Pembelajaran Programming With React telah membantu saya mengubah  perspektif saya tentang pengembangan web. Instruktur memberikan  penjelasan yang sangat jelas dan mudah dipahami tentang konsep-konsep  React yang kompleks. Saya juga sangat menghargai sumber daya tambahan  yang disediakan, seperti proyek-proyek praktis dan referensi  dokumentasi.
                        </div>
                    </div>
                </div>
            </div>

            <!-- third row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Andre Widjaja</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>6 days ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Kursus Programming With React sungguh luar biasa! Saya sangat menghargai  pendekatan praktis yang diberikan oleh instruktur. Materi-materi yang  disajikan tidak hanya teoritis, tetapi juga diterapkan dalam  proyek-proyek praktis yang membantu saya memperkuat pemahaman saya. Saya  merasa jauh lebih siap untuk memasuki pasar kerja setelah menyelesaikan  kursus ini.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Siti Natamadjaya</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>2 weeks ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Saya sangat merekomendasikan kursus Programming With React kepada siapa pun yang ingin belajar tentang React. Instruktur sangat ahli dan mengajarkan materi dengan cara yang mudah dipahami. Saya juga senang  dengan fleksibilitas kursus ini, karena saya dapat belajar sesuai dengan waktu luang saya sendiri. Pemilihan pengajar juga sangat banyak dan dapat disesuaikan dengan jadwal saya.
                        </div>
                    </div>
                </div>
            </div>

            <!-- fourth row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Rizky Hutabarat</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>2 weeks ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Kursus Programming With React adalah salah satu yang terbaik yang pernah  saya ikuti. Instruktur memiliki pemahaman yang mendalam tentang React  dan mampu menjelaskan konsep-konsep yang kompleks dengan cara yang  sederhana. Saya merasa sangat termotivasi untuk terus belajar dan  mengembangkan aplikasi web menggunakan React setelah menyelesaikan  kursus ini
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review">
                        <div class="profile" style="display: flex; align-items: center;">
                            <img class="img-fluid" style="max-width: 80px;" src="{{asset('profile-picture-icon.png')}}" alt="Profile Picture">
                            <div class="profile-info" style="margin-left: 20px; ">
                                <div class="name"><p class="name"><strong>Nadia Fahridina</strong></p></div>
                                <div class="rating" style="display: flex; align-items: center;">
                                    <div class="stars" style="font-size: 24px; color: rgb(255, 166, 0);">★★★★★</div>
                                    <div style="margin-left: 10px;  padding-top: 2px;">5.0</div>
                                </div>
                            </div>
                            <div class="date-uploaded" style="margin-left: auto; margin-right: 20px;"><p>3 weeks ago</p></div>
                        </div>
                        <div class="text" style="margin-top: 10px;">
                            Saya sangat puas dengan pengalaman belajar saya dalam kursus Programming  With React. Materi-materi yang diajarkan sangat terstruktur dan mudah  diikuti. Saya merasa lebih percaya diri dalam mengembangkan aplikasi web  setelah menyelesaikan kursus ini. Terima kasih kepada instruktur yang  luar biasa dan platform yang menyediakan pengalaman belajar yang luar  biasa.
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
    function redirectToLessons() {
        window.location.href = "{{ url('/react-course-detail-lessons')}}"
    }

    function enroll() {
        window.location.href = "{{ url('/react-course-teachers-list')}}"
    }
</script>