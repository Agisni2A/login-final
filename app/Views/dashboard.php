<!-- Contoh dashboard -->
<!DOCTYPE html>
<html>
<?= $this->include('head'); ?>

<body>
    <div class="align-center">
        <h1>Welcome, <?= session()->get('username') ?></h1>
        <a href="/logout">Logout</a>
    </div>
</body>

</html>