<?php 
$page_css = "kontakt.css?v=2";
require __DIR__ . '/../includes/header.php';
?>
<?php require __DIR__ . '/../includes/navbar.php'; ?>

<main>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner fade-in">
      <h1>Kontakt</h1>
      <p>
        Na kontaktoni për termine, informata shtesë apo bashkëpunim profesional.
        CarePoint Hospital është gjithmonë në shërbim të pacientëve.
      </p>
      <a href="#kontakt-forma" class="btn scroll-link">Shiko më poshtë</a>
    </div>
  </section>

  <!-- SI TE NA GJENI -->
  <section class="find-us fade-in">
    <div class="section-header">
      <h2>Si të na gjeni</h2>
      <p>
        CarePoint Hospital ndodhet në Prishtinë, në lagjen e spitaleve.
      </p>
    </div>

    <div class="info-cards">

      <article class="info-card fade-in">
        <h3>Adresa</h3>
        <p>CarePoint Hospital</p>
        <p>Lagjja e Spitaleve</p>
        <p>10000, Prishtinë, Kosovë</p>
      </article>

      <article class="info-card fade-in">
        <h3>Telefoni</h3>
        <p>+383 44 123 456</p>
        <p>+383 38 600 700</p>
        <p class="small">Urgjenca 24/7</p>
      </article>

      <article class="info-card fade-in">
        <h3>Email</h3>
        <p>info@carepoint-ks.com</p>
        <p>appointments@carepoint-ks.com</p>
        <p>feedback@carepoint-ks.com</p>
      </article>

    </div>
  </section>

  <!-- FORM -->
  <section class="form-section fade-in" id="kontakt-forma">
    <div class="form-card">

      <!-- ✅ ALERT -->
      <?php
      if (isset($_GET['success'])) {
          echo "<div class='alert success'>Mesazhi u dërgua me sukses!</div>";
      }

      if (isset($_GET['error'])) {
        echo "<div class='alert error'>" . htmlspecialchars($_GET['error']) . "</div>";
      }
      ?>

      <div class="section-header">
        <h2>Na dërgoni mesazh</h2>
        <p>Plotësoni formën dhe ju kontaktojmë sa më shpejt.</p>
      </div>

      <!-- FORM  -->
      <form method="POST" action="../actions/validate_contact.php" class="cp-form">

        <div class="cp-row">
          <div class="cp-field">
            <input type="text" name="name" placeholder="Emri i plotë *" required>
          </div>
          <div class="cp-field">
            <input type="email" name="email" placeholder="Emaili juaj *" required>
          </div>
        </div>

        <div class="cp-row">
          <div class="cp-field cp-phone-field">
            <div class="cp-phone-inner">
              <div class="cp-phone-prefix">
                <img src="../img/kosovo-flag.png" alt="KS">
                <span>+383</span>
              </div>
              <input type="tel" name="phone" placeholder="44123456" required>
            </div>
          </div>

          <div class="cp-field">
            <select name="topic">
              <option value="" disabled selected>Zgjidhni arsyen</option>
              <option value="pergjithshme">Të përgjithshme</option>
              <option value="termin">Termin</option>
              <option value="ankese">Ankesë</option>
              <option value="informacion">Informacion</option>
            </select>
          </div>
        </div>

        <div class="cp-row">
          <div class="cp-field">
            <input type="text" name="mrn" placeholder="MRN (opsional)">
          </div>
          <div class="cp-field">
            <input type="text" name="id" placeholder="Letërnjoftimi (opsional)">
          </div>
        </div>

        <div class="cp-row cp-row-full">
          <div class="cp-field">
            <textarea name="message" placeholder="Mesazhi juaj *" required></textarea>
          </div>
        </div>

        <button type="submit" class="cp-submit">Dërgo mesazhin</button>

      </form>

    </div>
  </section>

  <!-- ANKESA -->
  <section class="complaints fade-in">
    <div class="section-header">
      <h2>Përgjigje dhe ankesa</h2>
      <p>
        Sugjerimet tuaja na ndihmojnë të përmirësohemi çdo ditë.
        Na shkruani në <strong>feedback@carepoint-ks.com</strong>.
      </p>
    </div>
  </section>

  <!-- MAP -->
  <section class="map-section fade-in">
    <div class="section-header">
      <h2>Lokacioni</h2>
      <p>Na gjeni lehtë në Prishtinë.</p>
    </div>

    <div class="map-wrapper">
      <iframe
        src="https://www.google.com/maps?q=Prishtine%20Lagjja%20e%20Spitaleve&output=embed"
        loading="lazy">
      </iframe>
    </div>
  </section>

</main>

<script src="kontakt.js"></script>
<<<<<<< HEAD:Kontakt/kontakt.php
<?php require __DIR__ . '/../includes/footer.php'; ?>
=======
<script src="cookies.js"></script>

 <?php require  __DIR__ . '/includes/footer.php'; ?>

 
>>>>>>> 0ffb20c (ndryshime lokale):kontakt.php
