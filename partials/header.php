<header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
    <div class="container position-relative">
        <a class="navbar-brand" href="index.html">
            <img class="navbar-brand-regular" src="assets/img/logo/logo-white.png" alt="brand-logo">
            <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-inner">
            <!--  Mobile Menu Toggler -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="privacy.php">سياسة الخصوصية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="terms.php">شروط الاستخدام</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#screenshots">صور من التطبيق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">اتصل بنا</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.getElementById('navbar-nav');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                if (window.innerWidth <= 768) { // تحقق من عرض الجوال
                    // أغلق القائمة
                    navbarCollapse.classList.remove('show');

                    // في حال استخدام Bootstrap أو مكتبة مشابهة
                    const navbarToggler = document.querySelector('.navbar-toggler');
                    if (navbarToggler && navbarToggler.getAttribute('aria-expanded') === 'true') {
                        navbarToggler.click(); // يحاكي نقرة لإغلاق القائمة
                    }
                }
            });
        });
    });

</script>

