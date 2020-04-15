<header>
    <div>
        <a href="">Каталог</a>
    </div>
    
    <?php if (isset($_SESSION['id_user'])): ?>
        <div id="profile_header">
            <img src="" alt="Аватар">
            <p>username</p>
            <div id="triangle"></div>
        </div>
    <?php else: ?>
        <div id="login_signup">
            <a href="">Log in</a>
            <a href="">Sign up</a>
        </div>
    <?php endif; ?>
</header>