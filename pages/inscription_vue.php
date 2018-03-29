<?php $title = "Inscription"; ?>
<?php include 'pagesParts/Header.php'; ?>


<!-- Begin page content -->
<div id="main-content">
    <div class="container">
        <h1>Devenez dès à présent membre !</h1>
        <form method="post" class="well col-md-6 col-md-offset-3">
            <!-- Nom -->
            <div class="form-group">
                <label class="control-label" for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Login" required="required"/>
            </div>
            
            <!-- Mot de passe -->
            <div class="form-group">
                <label class="control-label" for="nom">Mot de passe :</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" required="required"/>
            </div>
            
            <!-- confirmer Mot de passe -->
            <div class="form-group">
                <label class="control-label" for="nom"> Confirmer mot de passe :</label>
                <input type="password" class="form-control" id="mdpc" placeholder="Confirmer mot de passe" required="required"/>
            </div>
            
            <!-- Adresse -->
            <div class="form-group">
                <label class="control-label" for="adresse">Adresse :</label>
                <input type="text" class="form-control" id="adresse" placeholder="Adresse" required="required"/>
            </div>
            
            <!-- Email -->
            <div class="form-group">
                <label class="control-label" for="adresse">Adresse email :</label>
                <input type="text" class="form-control" id="email" placeholder="Adresse" required="required"/>
            </div>

            <!-- Nom -->
            <div class="form-group">
                <label class="control-label" for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom" required="required"/>
            </div>

            <!-- Prenom -->
            <div class="form-group">
                <label class="control-label" for="login">Prenom :</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prenom" required="required"/>
            </div>
            
            <!-- Telephon -->
            <div class="form-group">
                <label class="control-label" for="adresse">Telephone:</label>
                <input type="text" class="form-control" id="tel" placeholder="Adresse" required="required"/>
            </div>

            
            <!-- code postale -->
            <div class="form-group">
                <label class="control-label" for="Code postal">Code postal :</label>
                <input type="text" class="form-control" id="codepostal" placeholder="Code Postal" required="required"/>
            </div>
            

            <!-- fonction -->
            <div class="form-group ">
                <label for="fonction" class="col-2 col-form-label" id="fonction" >Fonction</label> 
                <div class="col-10">  
                    <select class="form-control" name="fonction" required="">
                        <option value="">Cadre</option>
                        <option value="">Magasinier</option>

                    </select>                                                        
                </div>
            </div>

            <!-- Association -->
            <div class="form-group">
                <label class="control-label" for="association" id="association">Association</label></br>
                <select name="association" size="3">
                    <option>Les gardiens du nord</option>
                    <option>Unissef</option>
                    <option>CMS assos</option>
                </select>
            </div>


            <input type="submit" class="btn btn-primary" value="Valider" name="inscription"/>
        </form>

    </div>
</div>

<?php include 'pagesParts/footer.php'; ?>

