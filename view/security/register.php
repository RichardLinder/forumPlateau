<main>
    <section>

        <h1>Nouveau compte </h1>
                <form  action="index.php?ctrl=security&action=register" method="post">                    
                    <div>
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" name="pseudo" id="pseudo" required>
                    </div>        
                    <div>
                        <label for="password"> Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                        <input type="checkbox" onclick="togglePassword()">voir <br/>
                        <div class="confirmPassword">
                            <label for="confPass">Confirm Password:</label>
                            <input type="password" id="password2" name="password2" onblur="confirmPassword()">
                        </div>
                    </div>
                    <input id="submitRegister" type="submit" name="register" value="register">
                </form>
            </div>        
        </section>

</main>
<script src="public\form.js">