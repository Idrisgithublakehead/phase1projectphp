<?php include 'includes/header.php'; ?>

<main>
  <section class="section">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Welcome back. (Static form; not wired to DB yet.)</p>

      <form action="#" method="post">
        <label>Email
          <input type="email" name="email" placeholder="you@example.com" required>
        </label>
        <label>Password
          <input type="password" name="password" placeholder="••••••••" required>
        </label>
        <button type="submit" disabled>Login (placeholder)</button>
      </form>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
