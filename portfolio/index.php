<?php
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/components.php';
?>
<!DOCTYPE html>
<html lang="th">
<?php include __DIR__ . '/includes/head.php'; ?>
<body>
  <?php include __DIR__ . '/includes/nav.php'; ?>

  <!-- Hero -->
  <header id="home" class="section hero">
    <div class="container hero__inner">
      <div class="hero__text">
        <h1 class="gradient-text"><?= htmlspecialchars($profile['name']) ?></h1>
       
        <div class="hero__cta">
          <a href="#contact" class="btn btn-ghost">ติดต่อ</a>
        </div>
      </div>
      <div class="hero__photo">
        <img src="img/1.jpg" alt="Profile of <?= htmlspecialchars($profile['name']) ?>">
      </div>
    </div>
  </header>

  <!-- About -->
  <section id="about" class="section">
    <div class="container grid-2">
      <div class="glass card-pad">
        <h2>About Me</h2>
        <p><?= nl2br(htmlspecialchars($profile['about'])) ?></p>
        <ul class="chips">
          <?php foreach ($profile['interests'] as $chip): ?>
            <li class="chip"><?= htmlspecialchars($chip) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="glass card-pad">
        <h2>Skills</h2>
        <?= render_skills($skills) ?>
      </div>
    </div>
  </section>

  <!-- Timeline / Education & Experience -->
  <section id="timeline" class="section">
    <div class="container">
      <h2>Experience & Education</h2>
      <div class="timeline">
        <?= render_timeline($timeline) ?>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section">
  <div class="container">
    <div class="glass card-pad">
      <h2>ติดต่อ</h2>
      <ul class="contact-list">
        <li>
          <i class="fas facebook"></i>
          <strong>facebook</strong><br>
          Narissara Promsakan
        </li><li>
          <i class="fas fa-phone"></i>
          <strong>โทรศัพท์</strong><br>
          (+66) 0983834840
        </li>
        <li>
          <i class="fas fa-envelope"></i>
          <strong>อีเมล</strong><br>
          bimnarissara220147@gmail.com
        </li>
        <li>
          <i class="fas fa-map-marker-alt"></i>
          <strong>ที่ตั้ง</strong><br>
          48 หมู่ 10  ตำบลห้วยอ้อ อำเภอลอง จังหวัดแพร่ 54150 ประเทศไทย
        </li>
        
      </ul>
    </div>
  </div>
</section>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/main.js"></script>
</body>
</html>
