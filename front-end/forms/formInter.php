 <div class="" id="">
   <form method="POST" action="test.php">
     <div class="">
       <div class="form-group col-md-6">
         <label for="dateEditModalIntTech">Date Demande Intervention</label>
         <input type="date" name="dateDemandeIntervention" id="dateEditModalIntTech" />
       </div>
     </div>
     <div class="" hidden="true">
       Veuillez indiquer la date
     </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="postEditModalIntTech">Poste</label>
         <!-- les options Direction,Reception,Gouvernante,Technique -->
         <select id="postEditModalIntTech" class="form-control" name="lieu">
           <option value="Reception" selected>réception</option>
           <option value="Direction">Direction</option>
           <option value="Gouvernante">Gouvernante</option>
           <option value="Technique">Technique</option>
         </select>
       </div>
       <div class="form-group col-md-6">
         <label for="lieuEditModalIntTech">lieu </label>
         <input type="text" name="postEmployer" class="form-control" id="lieuEditModalIntTech"
           placeholder="Apartment, studio, or floor" />
         <div class="" hidden="true">
           Veuillez indiquer le lieu de l'intervention
         </div>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-12">
         <label for="natureEditInteventionNvModalIntTech">Nature d'inervention
         </label>
         <textarea name="nature_Intevention" class=" form-control" type="text" id=" natureEditInteventionNvModalIntTech"
           rows="1"></textarea>
         <div class="" hidden="true">
           Veuillez indiquer la nature de l'intervention
         </div>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-4">
         <label for="risqueEditModalIntTech">Risque</label>

         <!-- les options Aucun, Animaux, Enfant  -->
         <select id="risqueEditModalIntTech" type="text" name="risque" class="form-control">
           <option value="" selected></option>
           <option value="Animaux">Animaux</option>
           <option value="Enfant">Enfant</option>
         </select>
       </div>
       <div class="form-group col-md-4">
         <label for="infoEditModalIntTech">info statut app</label>
         <input type="text" name="info_statut_app" class="form-control" id="infoEditModalIntTech"
           placeholder="Apartment, studio, or floor" readonly />
       </div>

       <div class="form-group col-md-4">
         <label for="dateRealiserEditModalIntTech">Date Réaliser
         </label>
         <input type="date" disabled="true" name="date_intevention" id="dateRealiserEditModalIntTech" />

       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-12">
         <label for="remarqueInteventionEditModalIntTech">Remarque</label>
         <textarea type="text" name="remarque_intervention" id="remarqueInteventionEditModalIntTech"
           rows="1"></textarea>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-12">
         <label for="statutEditModalIntTech">Statut</label>
         <!-- les options Action prioritaire,Arrivée du jour,,résolu,En Attente,En Commande,départ du client,VTA,bloqué tech -->
         <select id="statutEditModalIntTech" class="form-control" type="text" name="statut_intervention">
           <option value="demande inter" selected>
             demande inter
           </option>
           <option value="Arrivée du jour">Arrivée du jour</option>

           <option value="bloqué tech">bloqué tech</option>
           <option value="VTA">VTA</option>
           <option value="départ du client">départ du client</option>
           <option value="En Commande">En Commande</option>
           <option value="En Attente">En Attente</option>
           <option value="résolu">résolu</option>
           <option value="Action prioritaire">
             Action prioritaire
           </option>
         </select>
       </div>
       <input type="submit" value="OK">
     </div>
   </form>
 </div>