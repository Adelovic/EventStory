  <div class="container body"><hr>
    <div class="row" >
        <h1>Nouvel évenement</h1>


          <!-- Titre -->
          <form class="well form-horizontal" action=" " method="post"  id="contact_form">

            <div class="form-group">
              <label class="col-md-3 control-label">Titre</label>
              <div class="col-md-6 inputGroupContainer">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="title" placeholder="Titre" class="form-control" type="text" required>
                </div>
              </div>
            </div>

            <!-- Image -->
            <div class="form-group">
              <label class="col-md-3 control-label">Image</label>
                  <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                      <div class="input-group image-preview">
                            <input type="text" placeholder = "Choisir un fichier" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Parcourir</span>
                                    <input type="file" accept="image/png, image/jpeg" name="picture"/>
                                </div>
                            </span>
                        </div>
                  </div>
                </div>
              </div>

              <!-- Adresse -->
              <div class="form-group">
                <label class="col-md-3 control-label">Adresse</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="address" placeholder="Adresse" class="form-control" type="text" required/>
                  </div>
                </div>
              </div>

              <!-- Date -->
              <div class="form-group">
                <label class="col-md-3 control-label">Date de début</label>
                <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                      <div class='input-group date' id='datetimepicker1'>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                          <input name="date_happening" placeholder="JJ/MM/AAAA" type='date' class="form-control" required/>
                      </div>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Heure de début</label>
                <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                      <div class='input-group date' id='timepicker1'>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                          <input name="time_happening" type='time' class="form-control" required/>
                      </div>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Date de fin</label>
                <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                      <div class='input-group date' id='datetimepicker2'>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                          <input name="date_end" placeholder="JJ/MM/AAAA" type='date' class="form-control" required/>
                      </div>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Heure de fin</label>
                <div class="col-md-6 inputGroupContainer">
                    <div class="input-group">
                      <div class='input-group date' id='timepicker2'>
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                          <input name="time_end" type='time' class="form-control" required/>
                      </div>
                    </div>
                </div>
              </div>

              <!-- Description -->
              <div class="form-group">
                <label class="col-md-3 control-label">Description</label>
                  <div class="col-md-6 inputGroupContainer">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                      <textarea class="form-control" name="description" placeholder="Description" required></textarea>
                  </div>
                </div>
              </div>

                <!--<div class="form-group">
                  <label class="col-md-3 control-label">Invitations</label>
                  <div class="col-md-6 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                      <select name="invitations" class="form-control selectpicker" >
                        <option value=" " >Consulter</option>
                        <option>Adel</option>
                        <option>Anthony</option>
                        <option >Alice</option>
                        <option >Christo</option>
                        <option >Eva</option>
                        <option >Paul</option>
                        <option >Yassine</option>
                      </select>
                    </div>
                  </div>
                </div>-->

                <div class="form-group">
                  <label class="col-md-3 control-label">Invitation</label>
                  <div class="col-md-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="invitation_type" value="me" required/>Seulement moi
                      </label>
                      <label>
                        <input type="radio" name="invitation_type" value="everyone" required/>Tout le monde
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-md-3 control-label">Visibilité</label>
                  <div class="col-md-6">
                    <div class="radio">
                      <label>
                        <input type="radio" name="visibility_type" value="private" required/>Invités et moi
                      </label>
                      <label>
                        <input type="radio" name="visibility_type" value="public" required/>Tout le monde
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-6 ">
                    <button type="submit" class="btn btn-primary">Terminer</button>
                  </div>
                </div>

              </form>

              <hr class="articlebreak">
 </div>

<?= $this->Html->script('createEvent.js') ?>
