<div class="container">
    <h2>Profile</h2>
    
    <!-- Display success message if profile update is successful -->
    <?php if (isset($message)): ?>
        <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <!-- Display error message if there is an error -->
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <!-- Profile form for editing -->
    <form action="profile.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Avatar:</label>
            <input type="file" name="avatar" class="form-control" accept="image/*">
            <!-- Display current avatar -->
            <img src="<?= htmlspecialchars($user['avatar']) ?>" alt="Avatar" class="img-thumbnail mt-3" width="150">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
