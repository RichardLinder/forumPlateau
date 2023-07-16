<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <main>
        <section>

            <h1>Connexion</h1>
            
                <div>
                    <form  action="index.php?ctrl=security&action=login" method="post">
                        
                        <div>
                            <label class="pseudo" for="pseudo">pseudo :</label>
                            <input type="text" name="pseudo" id="pseudo" required><br/>
                        </div>
                        
                        <div class="password">
                            <label for="password"></label>
                            <input type="password" id="pass" name="password" minlength="8" required>
                            <input type="checkbox" onclick="togglePassword()">Show Password<br/>
                        </div>

                        <input id="submitLogin" type="submit" name="login" value="login">
                    </form>
                </div>
            
            </section>
    </main>
    <script type ="text/javascript" src="public/js/formsActions.js"></script>
</body>
</html>