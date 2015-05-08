<!-- JavaScript Files -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.5/js/bootstrap-select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

<script>
    // On document ready:
    $(function() {
        // Instantiate MixItUp:
        $('#Container').mixItUp({
//            animation: {
//                duration: 400,
//                effects: 'fade translateZ(-360px) stagger(34ms)',
//                easing: 'ease'
//            }
        });
        $(function() {
            var $filterSelect = $('#FilterSelect'),
                    $container = $('#Container');
            $container.mixItUp();
            $filterSelect.on('change', function() {
                $container.mixItUp('filter', this.value);
            });
        });
        $(document).ready(function() {
            var trigger = $('.hamburger'),
                    overlay = $('.overlay'),
                    isClosed = false;
            trigger.click(function() {
                hamburger_cross();
            });

            function hamburger_cross() {
                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
            $('[data-toggle="offcanvas"]').click(function() {
                $('#wrapper').toggleClass('toggled');
            });
        });

    }); </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
<script>$(".card-title").fitText(1.1, { minFontSize: '15px', maxFontSize: '20px' });</script>