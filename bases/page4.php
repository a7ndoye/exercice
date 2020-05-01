<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
        </head>
    <body>
        <form method = "POST" action = "page4a.php">
            <p>
                <label for = "Matricule"> Matricule : </label>
               
                <input type = "text" name = "mat" id ="Matricule" value="Matricule" /></br>
                
            </p>  

            <p> <label for = "Nom"> Nom : </label>
                <input type = "text" name = "nom" id ="Nom" value="nom"/></br>
            </p>   

            <p>   <label for = "prenom"> prenom : </label>
                <input type = "text" name = "prenom" id ="prenom" value="prenom"/></br>
            </p>    

            <p>    
                <label>Sexe:</label>
                <label for="oui">Masculin</label>
                <input type="radio"name="Masc"value="Masculin"id="o">
                <label for="oui">Feminin</label>
                <input type="radio"name="Fem"value="Feminin"id="">
            </p>

            <p> 
            Adresse <span style="color: #ff0000;"></span>
				<p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
            </p>
            
            <p>  
                Service <span style="color: #ff0000;"></span>
				<label for="motif"></label>
				 <select id="motif" name="ser" value="choisir"> 
				<option value="enquete_commerciales">Commercial</option>
				<option value="enquete_civile">Comptable</option> 
				<option value="recouvrement">informatique</option> 
				 </select>
            </p>
            <p>
            fonction <span style="color: #ff0000;"></span>
				<label for="motif"></label>
				 <select id="motif" name="motif"> 
				 <option value="reglement">choisir</option></br>
				<option value="enquete_commerciales">caissier</option>
				<option value="enquete_civile">gestionnaire</option> 
				<option value="recouvrement">maintenacier</option> 
				 </select>
           </p>

            <p>
                <input type = "submit" values = "Valider"/>        <input type="reset" value="Renitialiser" />
            </p>
           
        </form>
    </body>
</html>