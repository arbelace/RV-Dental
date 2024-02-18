<?php
$title = "Book an appointment";
include('functions/userfunction.php');
include('./includes/header.php');
?>
<section style="background-image: url('img/dummy_img_1.png')
     !important; background-repeat: no-repeat; background-position: left !important; background-size: cover; background-attachment: fixed; ">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-12 col-sm-12 text-left">
                <h1 id="text" style="color: white; font-size: 60px;"></h1>
                <p style="color:white;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos nesciunt, itaque amet ab repellat <br> vitae ducimus distinctio porro maiores laudantium mollitia ecto optio?</p>
                <a type="button" href="#" class="btn btn-secondary"><small>Make an appointment <i class="fa-regular fa-calendar-check"></i></small></a>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="text-center" style="color: var(--first-color);">Our Services</h2>
    <p class="text-center">You can get the heighest quality service here.</p>
    <div class="container text-center">
        <form id="appointmentForm">
            <label for="name">Name:</label>
            <input type="text" id="patient_name" name="patient_name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="patient_email" name="patient_email" required><br><br>

            <label for="phone">Phone:</label>
            <input type="number" id="patient_phone" name="patient_phone" class="form-control" placeholder="Phone No. *" required>

            <label for="address">Address:</label>
            <textarea id="patient_address" name="patient_address" required></textarea><br><br>

            <label for="date">Date:</label>
            <input type="datetime-local" id="appointment_date" name="appointment_date" required><br><br>

            <label for="service">Select Service:</label><br>
            <select id="service" name="service[]" multiple required>
                <option value="Cleaning">Cleaning</option>
                <option value="Extraction">Extraction</option>
                <option value="Filling">Filling</option>
                <!-- Add more options as needed -->
            </select><br><br>

            <button type="submit">Schedule Appointment</button>
        </form>
    </div>
</section>
<script>
    var i = 0,
        text;
    text = "Smile Confidentaly."

    function typing() {
        if (i < text.length) {
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, 100);
        }
    }
    typing();
</script>
<?php include('./includes/footer.php'); ?>