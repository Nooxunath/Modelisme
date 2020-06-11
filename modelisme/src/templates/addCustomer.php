<div class="row text-center">
    <h1 class="col-12" style="margin-top: 80px; font-size: 70px;">Espace Administration</h1>   
</div>
<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 class="text-white"> Enregistrement de clients</h1>
    </div> 
    <form name="formCustomer" method="POST" action="addCustomer.php" >
        <div class="form-group">
            <label for="customerName">Nom client :</label>
            <input type="texte" name="customerName" id="customerName" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contactLastName">Nom contact :</label>
                <input type="texte" name="contactLastName" id="contactLastName" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="contactFirstName">Prénom contact :</label>
                <input type="texte" name="contactFirstName" id="contactFirstName" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="texte" name="phone" id="phone" class="form-control w-50">
        </div>
        <div class="form-group">
            <label for="address1">Adresse 1 :</label>
            <input type="texte" name="address1" id="address1" class="form-control">
        </div>
        <div class="form-group">
            <label for="address2">Adresse 2:</label>
            <input type="texte" name="address2" id="address2" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">Ville :</label>
                <input type="texte" name="city" id="city" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="state">Departement :</label>
                <input type="texte" name="state" id="state" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="postalCode">Code postal :</label>
                <input type="number" name="postalCode" id="postalCode" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="country">Pays :</label>
                <input type="texte" name="country" id="country" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="employee">Rep. des ventes</label>
                <select id="employee" name="employee" class="form-control">
                    <?php foreach($employees as $employee): ?>
                        <option value="<?= intval($employee['employeeNumber'])?>"><?= $employee['firstName']." ".$employee['lastName']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="creditLimit">Limite de crédit :</label>
                <input type="number" name="creditLimit" id="creditLimit" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mb-5">Sauvegarder</button>
        </div>
    </form>
</div>