<?php include 'includes/header.php'; ?>

<main>
  <section class="section">
    <div class="container">
      <h1>Contact Us</h1>
      <p class="lead">Do you have any questions about orders? Kindly send us a note.</p>

      <form action="#" method="post">
        <label>Name
          <input type="text" name="name" placeholder="Your name" required>
        </label>
        <label>Email
          <input type="email" name="email" placeholder="you@example.com" required>
        </label>
        <label>Message
          <textarea name="message" rows="5" placeholder="How can we help?"></textarea>
        </label>
        <button type="submit" disabled>Send (placeholder)</button>
      </form>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
