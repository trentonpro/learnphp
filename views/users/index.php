<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1>Users</h1>
  <table class="table table-hover table-striped">
    <thead>
      <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?= (int) $user->id ?></td>
          <td><?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></td>
          <td><?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8') ?></td>
          <td>
            <div class="d-flex gap-2">
              <a href="/admin/users/view?id=<?= (int) $user->id ?>" class="btn btn-info">View</a>
              <a href="/admin/users/edit?id=<?= (int) $user->id ?>" class="btn btn-warning">Edit</a>
              <form action="/admin/users/delete?id=<?= (int) $user->id ?>" method="POST" onsubmit="return confirm('Delete this user?')">
                <input type="hidden" name="_token" value="<?= htmlspecialchars($token, ENT_QUOTES, 'UTF-8') ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      <?php endforeach ?>
      <?php if (!$users): ?>
        <tr><td colspan="4">No users.</td></tr>
      <?php endif ?>
    </tbody>
  </table>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
