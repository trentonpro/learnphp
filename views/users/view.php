<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1>User</h1>
  <table class="table table-hover table-striped">
    <tbody>
      <tr><th>ID</th><td><?= (int) $user->id ?></td></tr>
      <tr><th>Name</th><td><?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></td></tr>
      <tr><th>Email</th><td><?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8') ?></td></tr>
    </tbody>
  </table>
  <div class="d-flex gap-2">
    <a href="/admin/users" class="btn btn-secondary">Back</a>
    <a href="/admin/users/edit?id=<?= (int) $user->id ?>" class="btn btn-warning">Edit</a>
    <form action="/admin/users/delete?id=<?= (int) $user->id ?>" method="POST" onsubmit="return confirm('Delete this user?')">
      <input type="hidden" name="_token" value="<?= htmlspecialchars($token, ENT_QUOTES, 'UTF-8') ?>">
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
