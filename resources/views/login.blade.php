<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        width: 50%;
        margin: auto;
        /* height: 100%;
        margin-top: 30px; */
    }
    
    input {
        margin-bottom: 15px;
        padding: 10px;
        font-size: 16px;
        background-color: #F7F3EA;
        border-radius: 10px;
        cursor: pointer;
    }

    .input-icons {
        width: 100%;
        margin-bottom: 10px;
    }
 
    .input-icons i {
        position: absolute;
    }
 
    .icon {
        padding: 15px;
        min-width: 50px;
        text-align: center;
     }

     .input-field {
        width: 100%;
        padding: 10px;
        text-align: left;
        padding-left: 50px;
        width: 100%;
        margin-bottom: 20px;
    }

    .login-button {
        color: white;
        font-weight: bold;
        background-color: #254E7A;
        border-radius: 20px;
        width: 30%;
        padding: 5px 20px 5px 20px;
    }

    .login-sidebar {
        background-color: rgb(255, 255, 255);
        padding: 40px;
    }

    footer {
        background-color: #111B25;
        margin-top: 30px;
        padding: 20px 0px 20px 20px;
        position: relative;
    }

</style>

<div class="login-container container-fluid">
    <div class="login-sidebar">
        <h1>Welcome Back!</h1>
        <img class="img-fluid ml-auto navbar-brand" style="width: 100%; height: 300px;" src="{{asset('learnify-logo.png')}}" alt="Learnify Logo">
        <p style="color: #254E7A; text-align: center;"><strong style="font-size: large"><i>Learnify</i></strong></p>
    </div>
    

    <form action="POST" class="login-form">
        <h2 style="padding-bottom: 10px;">Sign In</h2>
        <div class="input-icons">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Full Name">
        </div>
        <div class="input-icons">
            <i class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="Phone Number">
        </div>
        <div class="input-icons">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="email" placeholder="Email">
        </div>
        <div class="input-icons">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Password">
        </div>
        <div class="input-icons">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Re-Password">
        </div>
        <p>Dont have an Account Yet? <a href="{{ Route('register') }}">Register here</a></p>
        <button class="login-button" type="submit">Sign In</button>
    </form>
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