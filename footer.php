<!-- footer -->
<footer id="footer" class="footer">
        <div class="container has-text-centered">

            <a href="mailto:joeyfasano@gmail.com">
                <i class="fas fa-envelope-square fa-4x grow"></i>
            </a>
            <a href="tel:16194102995">
                <i class="fas fa-phone-square fa-4x grow"></i>
            </a>
            <a href="https://www.linkedin.com/in/joseph-fasano/" target="_blank">
                <i id="icon" class="fab fa-linkedin fa-4x grow"></i>
            </a>
            <a href="https://github.com/joeyfasano" target="_blank">
                <i class="fab fa-github fa-4x grow"></i>
            </a>

        </div>
    </footer>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.1.0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script>
        // Smooth scrolling
        $(document).ready(function () {
            var scrollLink = $('.scroll');
            scrollLink.click(function (event) {
                event.preventDefault();
                $('body,html').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000)
            });

            // Active link
            $(window).scroll(function () {
                var scrollBarLocation = $(this).scrollTop();

                scrollLink.each(function () {
                    var sectionOffset = $(this.hash).offset().top;
                    if (sectionOffset <= scrollBarLocation) {
                        $(this).addClass("active-button");
                        $(this).siblings().removeClass("active-button");
                    } else if (sectionOffset = top) {
                        $(this).removeClass("active-button");

                    }
                })

            })
        })
        // Navbar Scroll
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
    </script>
</body>

</html>