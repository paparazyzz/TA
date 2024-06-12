<!-- <?php
    // session_start();
    // if (!isset($_SESSION["user"])) {
    //     header("Location: FormLogin.php")
    // }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="location.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">Waterbom <span>Bali</span></a>
        <div class="navbar-button">
            <a href="../TampilanLogin/FormLogin.php" class="login">
                <span>Logout</span>
                <i class='bx bx-exit' style='color:#ffffff'  ></i>
            </a>
        </div>
    </nav>

    <section class="banner">
        <h2>BOOK YOUR TICKET HOLIDAY</h2>
        <div class="card-container">
            <div class="card-img">

            </div>
            <div class="card-content">
                <h3>Reservation</h3>
                <form>
                    <div class="form-row">
                        <input type="text" placeholder="Full Name">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <select id="paket">
                            <option value="">--Pilih Paket--</option>
                            <option value=""> Single Day Pass -- Rp 387,500</option>
                            <option value=""> Duo Pass -- Rp 1,400,000</option>
                            <option value=""> Two Day Pass -- Rp 645,000</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <input type="text" placeholder="How many ticket ?" min="1">
                        <input type="file" value="upload image">
                    </div>
                    <div class="form-row">
                            <input type="submit" value="Reserve Now">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <h2>Our Location</h2>
        <p>Come to here !
        </p>
        <div class="row">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.84231725908248!2d106.84972325043162!3d-6.332183634085503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2ff2b8f281%3A0x4760f7ce6b78c11d!2sWarkop%20H.%20Junen!5e0!3m2!1sid!2sid!4v1703752496929!5m2!1sid!2sid" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
        </iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.6095174667284!2d115.16671507374289!3d-8.728577589020642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246a3ee8f82df%3A0x1291d693f3407fa5!2sWaterbom%20Bali!5e0!3m2!1sid!2sid!4v1718176580593!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
            <p>Waterbom Bali terletak di daerah Kabupaten Badung, Bali, Indonesia. 
            <br> Terletak 700 Meter dari Pantai Kuta dan 1,9 Kilometer dari <br> Bandar Udara Internasional I Gusti Ngurah Rai
        </p>
    </section>
</body>
</html>