<script>
    (function(){
        $(".button-collapse").sideNav();

        $(".dropdown-button").dropdown();

        $('.tooltipped').tooltip({delay: 50});

        $('.materialboxed').materialbox();

        $('.carousel.carousel-slider').carousel({full_width: true});
        
        $('.carousel').carousel();
        
        $('.parallax').parallax();
        
        $('.modal-trigger').leanModal();
        
        $('.scrollspy').scrollSpy();
                
        $('.datepicker').pickadate({selectYears: 20});
        
        $('select').not('.disabled').material_select();

    })();
</script>

@yield('scripts')