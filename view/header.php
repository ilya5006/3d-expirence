<header>
    <div>
        <a href="/">Главная страница</a>
        <a href="/categories.php">Каталог</a>
    </div>
    
    <?php if (isset($_SESSION['id_user'])): ?>
        <div id="profile_header" style="display: none;">
            <img src="" alt="Аватар">
            <p>username</p>
            <div id="triangle"></div>

            <div class="dropdown-content">
                <a href="/profile.php">Мой профиль</a>
                <a href="#">Заказы</a>
                <a href="#">Выйти</a>
            </div>
        </div>
    <?php else: ?>
        <div id="login_signup">
            <a href="/login.php">Log in</a>
            <a href="/signup.php">Sign up</a>
        </div>
    <?php endif; ?>
</header>