<footer>
    <div class="footer-content">
        <p class="m-0">Copyright 2026 and beyond - Exercise For Injuries - All rights reserved</p>
        <p class="footer-links m-0">
            <a href="https://www.exerciseforinjuries.com/contact/" class="text-decoration-none text-dark"
                target="_blank">Contact</a>
            <span class="text-success">●</span>
            <a href="https://www.exerciseforinjuries.com/terms-of-service/" class="text-decoration-none text-dark"
                target="_blank">Terms of
                Service</a>
            <span class="text-success">●</span>
            <a href="https://www.exerciseforinjuries.com/privacy-policy/" class="text-decoration-none text-dark"
                target="_blank">Privacy
                Policy</a>
            <span class="text-success">●</span>
            <a href="https://www.exerciseforinjuries.com/cookie-policy/" class="text-decoration-none text-dark"
                target="_blank">Cookie
                Policy</a>
        </p>
    </div>

</footer>

</div>
<br>

<script src="<?php echo BASE_URL; ?>assets/js/slim.min.js"></script>

<script>

    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            item.classList.toggle('open');
        });
    });
</script>

</body>

</html>