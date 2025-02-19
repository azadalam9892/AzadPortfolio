        <!-- Bootstrap Bundle JS (Includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- type.js link here -->
        <script src="./type.js" type="text/javascript"></script>

        <footer class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-3">
                                <img src="images/main-logo1.png" alt="" width="100" height="100">
                            </div>

                            <div class="col-md-6">
                                <!-- <div class="footer-rights-text">
                                    <p class="mb-0">&copy; <?php echo date('Y'); ?>. All Rights Reserved. made
                                        with love
                                        Azad Alam</p>
                                </div> -->
                                <div class="footer-rights-text">
                                    <p class="mb-0">Made with love Azad Alam</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="footer-icons">
                                    <a href="https://www.instagram.com/invites/contact/?igsh=1dz088gucsrrj&utm_content=1dl9ms1" target="_blank" ><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100005154916348" target="_blank" ><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/azad-alam-bashir-ahmed-mansuri-b88832190/" target="_blank" ><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- tyep.js js code here  -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var typed = new Typed("#typing", {
                strings: [
                    "I'm Azad Alam Mansuri",
                    "A Php Developer",
                    "A Frontend Developer",
                ],
                    typeSpeed: 190,
                    backSpeed: 50,
                    backDelay: 1000,
                    startDelay: 500,
                    loop: true,
                    showCursor: true,
                    cursorChar: "|",
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $(".nav-link").on("click", function(event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var target = this.hash;

                        $("html, body").animate({
                            scrollTop: $(target).offset().top - 50 
                        }, 1500, "swing");
                    }
                });
            });
        </script>

    </body>
</html>