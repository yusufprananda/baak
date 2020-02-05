    <!-- Link Script -->
    <!-- JQuery 3.4.1 -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- My Script -->
    <script>
        $(document).ready(function() {
            var click = 0;
            $("button.navbar-toggler").click(function() {
                if (click % 2 == 0) {
                    $('.navbar.navbar-expand-lg').css('background-color', 'white');
                    $("nav").addClass("shadow");
                    $("nav").addClass("navbar-light");
                    $("nav").removeClass("navbar-dark");
                    click += 1;
                    // console.log("Navbar diklik jadi terbuka, bg berubah putih.");
                }
                else {
                    // $('.navbar.navbar-expand-lg').css('background-color', 'transparent');
                    // $("nav").removeClass("shadow");
                    // $("nav").removeClass("navbar-light");
                    // $("nav").addClass("navbar-dark");
                    click += 1;
                    // console.log("Navbar di klik saat sedang terbuka, jadi tertutup.");
                }
            });
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 0) {
                    $('.navbar.navbar-expand-lg').css('background-color', 'white');
                    $("nav").addClass("shadow");
                    $("nav").addClass("navbar-light");
                    $("nav").removeClass("navbar-dark");
                    // console.log("Scroll bg jadi putih");
                }
                else if (scroll == 0 && click % 2 == 1) {
                    $('.navbar-toggler').trigger('click');
                    $('.navbar.navbar-expand-lg').css('background-color', 'transparent');
                    $("nav").removeClass("shadow");
                    $("nav").removeClass("navbar-light");
                    $("nav").addClass("navbar-dark");
                    // console.log("HP - Navbar terbuka saat tidak di 0, jadi tertutup saat diatas.");
                } 
                else {
                    $('.navbar.navbar-expand-lg').css('background-color', 'transparent');
                    $("nav").removeClass("shadow");
                    $("nav").removeClass("navbar-light");
                    $("nav").addClass("navbar-dark");
                    // console.log("Diatas bg jadi transparan");
                }
            });
        });
    </script>