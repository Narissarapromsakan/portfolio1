<nav class="nav">
  <div class="container nav__inner">
    <a href="#home" class="logo"><?= htmlspecialchars($profile['short'] ?? '') ?></a>
    <ul class="nav__menu">
      <li><a href="#about">About</a></li>
      <li><a href="#timeline">Timeline</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="nav__toggle" aria-label="menu" onclick="document.body.classList.toggle('menu-open')">☰</button>
  </div>
</nav>
