<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .navbar {
        background-color: #111B25; 
        border-radius: 0px;
        margin-bottom: 0px;
    }

    .search-nav {
        margin-top: 25px;
        flex: 1; 
        display: flex;
        justify-content: center;
        width: 50%;
    }

    .search-nav form {
        width: 100%; 
        max-width: 400px; 
    }

    .search-nav input {
        width: 100%; 
    }

    .sidebar-container {
        height: 100%;
        display: flex;
        flex-direction: column;
        padding: 0px;
        margin-top: 0px;
    }

</style>

<nav class="navbar navbar-light justify-content-between">
    <div></div>
    <img class="img-fluid ml-auto navbar-brand" style="width: 80px; height: 80px;" src="{{asset('learnify-logo.png')}}" alt="Learnify Logo">
    <p class="navbar-brand ml-auto logo-text" style="margin-top: 15px; color: #CBE3EF; margin-left: -20px;">Learnify</p>
    <div class="search-nav container-fluid">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="search-button btn btn-outline-success my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</nav>