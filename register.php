<?php include 'includes/header.php'; ?>

<main>
  <section class="section">
    <div class="container">
      <h1>Create Account</h1>
      <p class="lead">Register to save your details and faster checkout. (Static only.)</p>

      <form action="#" method="post">
        <label>Full Name
          <input type="text" name="full_name" placeholder="Jane Doe" required>
        </label>
        <label>Email
          <input type="email" name="email" placeholder="jane@example.com" required>
        </label>
        <label>Password
          <input type="password" name="password" placeholder="••••••••" required>
        </label>
        <button type="submit" disabled>Register (placeholder)</button>
      </form>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
