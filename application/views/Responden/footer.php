<?php
/**
 * Created by PhpStorm.
 * User: Shinta
 * Date: 5/31/2018
 * Time: 11:17 PM
 */ ?>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script>
    $('.hapus').on("click", function (e) {
        e.preventDefault();

        var choice = confirm($(this).attr('data-confirm'));

        if (choice) {
            window.location.href = $(this).attr('href');
        }
    });

    //button jawaban
</script>

</body>

</html>
