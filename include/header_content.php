<style>
    .navbar {
        position: fixed;
        width: 100%;
        z-index: 20;
        background-color: #ddd !important;
        padding: 0 !important;
        padding: 0 2% 0 2%;
        top: 0;
        margin: 0;
    }

    .navbar-brand {
        display: none;
    }

    .navbar-toggler {
        margin: 15px;
        outline: none !important;
        border-color: #FF823B !important;
    }

    .home {
        margin: auto 40px;
    }

    .dropbtn {
        background-color: #ddd !important;
        color: #1d1d1d;
        padding: 25px;
        font-size: 20px;
        font-weight: 600;
        border: none;
    }

    .dropbtn:hover {
        color: #ff5c00 !important;
        background-color: #F8F9FA !important;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1 !important;
        z-index: 1;
        transition: 1s;
        width: 100%;
    }

    #drop {
        color: white !important;
        font-size: 16px;
        font-weight: 600;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    #drop:hover {
        background-color: black !important;
        color: #ff5c00 !important;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        background-color: black !important;
    }

    .dropdown:hover .dropbtn {
        background-color: #F8F9FA !important;
    }

    .tel {
        width: 20rem;
        font-size: 20px;
        font-weight: 500;
        color: #FF823B !important;
        text-align: center;
        margin: 0;
        line-height: 2em;
    }

    .form {
        display: flex;
    }

    .btn {
        color: black !important;
        border: solid 1px black !important;
    }

    .btn:hover {
        border: solid 1px black !important;
        background-color: #ff5c00;
    }

    .logo_mobile {
      display: none;
    }

    .logo_mobile img {
        height: auto;
        width: 90px;
    }

    @media only screen and (max-width: 992px) {

        .contact {
            display: none;
        }

        .navbar-nav {
            width: 100%;
            margin: 0 !important;
            text-align: center;
        }

        .form {
            display: none;
        }

        .tel {
            width: 98vw;
            margin: 10px auto;
        }

        .dropdown {
            width: 20rem;
            margin: 10px auto;
        }

        .logo_mobile {
            display: block;
        }

    }
</style>
<?php
    $requete = "SELECT * FROM mutuelle";
    $reponse = $conn->query($requete);
  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="menu.php"><img src="img/logo1.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="logo_mobile" href="menu.php"><img src="img/logogris.jpg" alt="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <a class="home" href="menu.php" style="color: #FF823B !important; "> <i class="fas fa-home fa-2x"></i>
            </a>
            <li class="dropdown"">
                <button class=" dropbtn">VIDEOS</button>
                <div class="dropdown-content" id="myBtnContainer">
                    <a id="drop" class="filt active" href="menu.php"  onclick="filterSelection('all')">TOUT</a>
                    <a id="drop" class="filt" href="menu.php"  onclick="filterSelection('sport')">SPORT</a>
                    <a id="drop" class="filt" href="menu.php"  onclick="filterSelection('yoga')">YOGA</a>
                    <a id="drop" class="filt" href="menu.php"  onclick="filterSelection('autres')">AUTRES VIDEOS</a>
                </div>
            </li>
        </ul>
        <?php
      $donnees = $reponse ->fetch()                          
    ?>
    <div class="float-right">
      <p class="tel" href="#">Tel: <?php echo $donnees["tel"];?></p>
    </div>
    </div>
</nav>