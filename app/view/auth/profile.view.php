<main id="profile">
    <div id="intro">
        <h1>Profile</h1>
    </div>


    <!-- Display error message if there is an error -->
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <!-- Profile form for editing -->
    <form action="profile.php" method="POST" enctype="multipart/form-data">
        <div class="form-item">
            <label class="form-label">Username :</label>
            <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
        </div>

        <div class="form-item">
            <label class="form-label">Email :</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>

        <!-- Display success message if profile update is successful -->
        <?php if (isset($message)): ?>
            <div id="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
    </form>
</main>