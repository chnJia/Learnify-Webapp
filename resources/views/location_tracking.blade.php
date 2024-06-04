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

    .text {
        padding: 10px;
    }

    .main {
        flex: 1;
        background-color: #F3F8FF;
        margin-top: -20px;
        overflow-y: auto; 
        padding-bottom: 3%;
    }

    .chat {
        background-color: #BCDBFF;
        width: 300px;
        flex-shrink: 0;
        margin-top: -20px;
        overflow-y: auto;
        position: relative;
    }
        
    .container-box {
        background-color: #BCDBFF;
        width: 200px;
        border-radius: 10px;
        margin-left: 20px;
        margin-top: 5px;
    }

    .main-container {
        margin-left: 20px;
    }

    .loc-img {
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-row {
        display: flex;
        align-items: center;
        gap: 10px; 
        margin-top: 10px;
    }

    .profile-col {
        display: flex;
        align-items: center;
        margin-left: 10px;
    }

    .profile-image {
        width: 60px;
        height: 70px;
        border-radius: 50%;
    }

    footer {
        background-color: #111B25;
        padding: 20px 0px 20px 20px;
    }

    .description {
        padding: 10px;
        color: white;
    }

    .notes-textarea {
        border-radius: 5px;
        background-color: #BCDBFF;
        border: #BCDBFF;
    }

    .online-status {
        color: rgb(32, 50, 134);
    }

    .chat-content {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        bottom: 0;
        flex-direction: column-reverse;
        margin-top: 300px;
    }

    .chat-bubble {
        background-color: #fff;
        border-radius: 20px;
        padding: 10px 20px;
        color: #254E7A;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }

    .chat-input-area {
        display: flex;
        gap: 10px;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        position: relative;
        bottom: 0;
    }

    .chat-input {
        flex: 1;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .chat-button {
        padding: 10px 20px;
        border-radius: 20px;
        background-color: #254E7A;
        color: #fff;
        border: none;
    }
</style>

@include('_homeNavbar');

<div class="content-wrapper">
    <div class="sidebar-container container-fluid">
        <div class="d-flex flex-row">
            <div class="sidebar p-2">
                <div class="container-fluid">
                    <p style="color: white; padding: 20px 10px 10px 10px;"><strong> Estimated of Arrival Time:</strong></p>
                </div>
                <div class="container-box container-fluid">
                    <div class="profile-row" style="display: flex; align-items: center;">
                        <div class="profile-col" style="margin-left: 0px;">
                            <img class="img-fluid rounded-circle profile-image" src="{{asset('rina-sari.jpeg')}}" alt="Card image cap">
                        </div>
                        <div class="profile-col">
                            <p style="color: #254E7A;"><strong>Rina Sari</strong></p>
                        </div>
                    </div>
                    <div class="text">
                        <p style="color: #254E7A; margin-bottom: 0px;"><strong>Estimated of Arrival Time:</strong></p>
                        <p style="color: #254E7A; font-size: 24px;"><strong>25 minute</strong></p>
                    </div>
                </div>
                <div class="container-fluid loc-description">
                    <p class="description" style="padding-bottom: 0px; margin-top: 10px;"><strong>Destination:</strong></p>
                    <p class="description" style="padding-top: 0px;">Jl. Medan Merdeka Barat No.13-14, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110. </p>
                    <p class="description" style="margin-bottom: 0px;"><strong >Course Date:</strong></p>
                    <p class="description" style="padding-top: 0px;">Selasa</p>
                    <p class="description" style="margin-bottom: 0px;"><strong >Course Time:</strong></p>
                    <p class="description" style="padding-top: 0px;">15.00 - 17.00</p>

                    <div class="container-fluid notes-container">
                        <textarea class="notes-textarea" rows="3" placeholder="Notes..."></textarea>
                    </div>
                </div>
            </div>
            <div class="main p-2 container-fluid">
                <h1>Teacher's Location</h1>
                <img class="img-fluid loc-img" style="width: 100%" src="{{asset('location.jpeg')}}" alt="location-img">
            </div>
            <div class="chat p-2 container-fluid">
                <h4 style="color: #254E7A;"><strong>Rina Sari</strong></h4>
                <p><i class="fas fa-check-circle online-status"></i> <strong style="color: #254E7A;">Online</strong></p>

                <div class="chat-content" id="chat-content">
                    <div class="chat-bubble">
                        <p>test</p>
                    </div>
                </div>
                <div class="chat-input-area">
                    <input type="text" id="chat-input" class="chat-input" placeholder="Type your message here...">
                    <button class="chat-button" onclick="addChatBubble()"><i class="fas fa-paper-plane"></i></button>
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
  function addChatBubble() {
            const chatContent = document.getElementById('chat-content');
            const chatInput = document.getElementById('chat-input');
            const message = chatInput.value.trim();

            if (message) {
                const newBubble = document.createElement('div');
                newBubble.className = 'chat-bubble';
                newBubble.innerHTML = `<p>${message}</p>`;
                chatContent.prepend(newBubble);  
                chatInput.value = '';
            }
        }

        document.getElementById('chat-input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                addChatBubble();
            }
        });
</script>