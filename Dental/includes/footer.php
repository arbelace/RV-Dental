        <footer>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-md-6">
                            <p class="mb-0"><span style="font-weight: bold; font-size: 20pt;">RV Sevilla Dental Clinic</span><br> <small> 2024 Policies and Disclaimer.</small><br><small>0088 BE STALL 3 Pinaod Baranggay Pinaod , San Ildefonso, Philippines</small> <br><small>Tel No: 0945 477 2352</small> </p>
                        </div>

                        <div class="col-auto me-lg-4">
                            <p class="mb-0"><span style="font-weight: bold; font-size: 15pt;">Let's Connect</span></p>
                            <a class="social-icons" href="https://www.facebook.com/Dr.Yshaa"><i class="fa-brands fa-facebook"></i></a>
                            <a class="social-icons" href="#"> <i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="admin/lib/js/bs.js"></script>
        <script src="admin/lib/js/jquery.js"></script>
        <script src="admin/lib/js/function.js"></script>
        <script src="admin/lib/js/designfunc.js"></script>
        <script src="admin/lib/js/flickity.js"></script>
        <script src="admin/lib/js/alertify.min.js"></script>
        <script src="https://kit.fontawesome.com/f200f2da0d.js" crossorigin="anonymous"></script>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

        <script>
            alertify.set('notifier','position', 'top-right');

            <?php 
                if(isset($_SESSION['message'])){
                    ?>
                        alertify.success('<?= $_SESSION['message']; ?>');
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
        </script>

        <!-- AOS -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> -->
    </body>
</html>