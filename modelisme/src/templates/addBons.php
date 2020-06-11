<div class="row text-center">
    <h1 class="col-12" style="margin-top: 80px; font-size: 70px;">Espace Administration</h1>   
</div>
<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 class="text-white">Nouveau bon de commande</h1>
    </div>    

    <form id="formBons" name="formBons" onsubmit="return false" >
        <div class="form-group row">   
            <label for="orderDate" class="col-sm-3 col-form-label">Date de la commande :</label>
            <div class="col-sm-9">   
                <input type="text" class="form-control" style="width: 270px;"id="orderDate" name="orderDate" readonly value="<?= date("d-m-yy"); ?>">
            </div>
        </div>
        <h4>Informations du client</h4>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="customerNumber">Client</label>
                <select id="customerNumber" name="customerNumber" class="form-control" onchange="dataCustomer(this)" required>
                    <option value="">- selection d'un client -</option>
                    <?php foreach($customers as $customer): ?>
                        <option value="<?= intval($customer['customerNumber'])?>"><?= htmlspecialchars($customer['customerName']) ?></>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-6 d-flex align-items-end">
                <a href="addCustomer.php" class="btn btn-dark"><i class="fas fa-user-plus text-white"></i></a>
            </div>
        </div>
        <div class="form-group">   
            <label for="address">Adresse :</label>   
            <input type="text" class="form-control w-50" id="customerAddress" disabled>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="phone"> Ville :</label>
                <input type="text" class="form-control w-50" id="customerCity" disabled >
            </div>
            <div class="form-group col-md-12">
                <label for="phone"> Pays :</label>
                <input type="text" class="form-control w-50" id="customerCountry" disabled >
            </div>
            <div class="form-group col-md-12">
                <label for="phone"> Téléphone :</label>
                <input type="text" class="form-control w-50" id="customerPhone" disabled >
            </div>
            <div class="form-group col-md-12">
                    <label for="comments">Détails :</label>
                    <input type="text" class="form-control w-50" id="comments" name="comments"></textarea>
            </div>
        </div>  

        
        <table id="tableProducts" class="table table-borderless">
            <thead class="thead-white">
                <tr class="row-12">
                    <th scope="col">Produit</th>
                    <th scope="col">Description</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody id="bodyTableProducts">
            </tbody>
        </table>
        <div class="text-center">
            <button type="button" class="btn text-white" style="background-color: rgb(160, 108, 95); border-radius: 30px;"onclick="ajouterProduitLigne()"><i class="fas fa-plus text-white"></i> Ajouter un produit</button>
            <button type="button" class="btn text-white" style="background-color: rgb(160, 108, 95); border-radius: 30px;" onclick="supprimerProduitLigne()"><i class="fas fa-minus text-white"></i> Supprimer un produit</button>
        </div>

    
        
        <div class="form-row">

            <div class="col-md-12 d-flex justify-content-end order-1 order-md-2">
                <div class="form-group">
                    <div class="form-group row justify-content-end">   
                        <label for="total">Total : </label>
                        <div>   
                            <input type="number" class="form-control" id="total" name="total" readonly>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">   
                        <label for="tva">T.V.A ( 20% ) : </label>
                        <div>   
                            <input type="number" class="form-control" id="tva" name="tva" readonly>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">   
                        <label for="totalTtc">Total T.T.C : </label>
                        <div>   
                            <input type="number" class="form-control" id="totalTtc" name="totalTtc" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" id="saveOrder" class="btn mb-5 text-white" style="background-color: rgb(160, 108, 95); border-radius: 30px;" onclick="commande()"><i class="far fa-save text-white"></i> Sauvegarder</button>
            <button type="reset" class="btn mb-5 text-white" style="background-color: rgb(160, 108, 95); border-radius: 30px;"><i class="fas fa-undo text-white"></i> Effacer</button>
        </div>
    </form>
    <div class="modal" id="reponseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Commande enregistrée.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/commandes.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
