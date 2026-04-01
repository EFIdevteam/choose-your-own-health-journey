<footer>
    <div class="footer-content">
        <p class="m-0"> &copy; <span id="year"></span> Longevity Nutritionals. All rights reserved.</p>
        <p class="footer-links m-0">
            <a href="https://longevitynutritionals.net/contact/" class="text-decoration-none text-dark"
                target="_blank">Contact</a>
            <span class="text-success">●</span>
            <a href="https://longevitynutritionals.net/terms-and-conditions/" class="text-decoration-none text-dark"
                target="_blank">Terms of
                Service</a>
            <span class="text-success">●</span>
            <a href="https://longevitynutritionals.net/privacy-policy/" class="text-decoration-none text-dark"
                target="_blank">Privacy
                Policy</a>
            <span class="text-success">●</span>
            <a href="https://longevitynutritionals.net/cookie-policy/" class="text-decoration-none text-dark"
                target="_blank">Cookie
                Policy</a>
            <span class="text-success">●</span>
            <a href="https://longevitynutritionals.net/cancelation-policy-llw/" class="text-decoration-none text-dark"
                target="_blank">
                Cancellation Policy</a>
        </p>
    </div>

</footer>

</div>
<br>

<script src="<?php echo BASE_URL; ?>assets/js/slim.min.js"></script>

<script>

    document.getElementById("year").innerHTML = new Date().getFullYear();

    document.addEventListener('DOMContentLoaded', function () {

        const headers = document.querySelectorAll('.accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', function () {

                const item = this.closest('.accordion-item');
                const isOpen = item.classList.contains('open');

                // CLOSE ALL
                document.querySelectorAll('.accordion-item').forEach(el => {
                    el.classList.remove('open');
                });

                // OPEN CLICKED (if it was closed)
                if (!isOpen) {
                    item.classList.add('open');
                }
            });
        });

    });
</script>

</body>

</html>