<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="../src/Controllers/UserController.php?action=register" method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <select name="role">
        <option value="client">Client</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit">S'inscrire</button>
</form>
</body>
</html>