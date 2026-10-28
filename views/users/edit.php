<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1>Edit User</h1>
  <form action="/admin/users/edit?id=<?= (int) $user->id ?>" method="POST">
    <input type="hidden" name="_token" value="<?= htmlspecialchars($token, ENT_QUOTES, 'UTF-8') ?>">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input value="<?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?>" name="name" type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" id="name" required>
      <?php if (isset($errors['name'])): ?><div class="invalid-feedback"><?= htmlspecialchars($errors['name'], ENT_QUOTES, 'UTF-8') ?></div><?php endif ?>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input value="<?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8') ?>" name="email" type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" id="email" required>
      <?php if (isset($errors['email'])): ?><div class="invalid-feedback"><?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></div><?php endif ?>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">New password (optional)</label>
      <input name="password" type="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" id="password" minlength="8" autocomplete="new-password">
      <?php if (isset($errors['password'])): ?><div class="invalid-feedback"><?= htmlspecialchars($errors['password'], ENT_QUOTES, 'UTF-8') ?></div><?php endif ?>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/admin/users" class="btn btn-secondary">Cancel</a>
  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
