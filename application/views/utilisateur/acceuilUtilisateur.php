<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section"> <span class="fa fa-paper-plane"></span> Inserer trajet</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
          <div class="wrapper">
            <div class="row justify-content-center">
              
              <div class="col-lg-8">
                <div class="contact-wrap">

                  <div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
                  <div id="form-message-success" class="mb-4 w-100 text-center">
                    Your message was sent, thank you!
                  </div>
                  <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="<?php echo base_url() ?>index.php/Utilisateur/insertTrajet">
                    <div class="row">
                      

                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 style="color: white">Voiture Disponible</h4>
                          <select type="text" class="form-control" name="idVoiture" id="name" placeholder="Lieu de depart">
                              <?php for ($i = 0 ; $i < count($voitureDispo) ; $i++) { ?>
                              <option style="color:black;"value="<?php echo $voitureDispo[$i]['id'] ?>"> <?php echo ($voitureDispo[$i]['marque'] . " " . $voitureDispo[$i]['modele'] . " " . $voitureDispo[$i]['numero'] ); ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12"> 

                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 style="color: white">Depart</h4>
                          <input type="text" class="form-control" name="lieuDepart" id="name" placeholder="Lieu de depart">
                        </div>
                      </div>
                      <div class="col-md-12"> 
                        <div class="form-group">
                          <input type="datetime-local" class="form-control" name="dateDepart" id="email" placeholder="Date et heure de depart">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="number" class="form-control" name="kmDepart" id="subject" placeholder="Kilometrage de depart">
                        </div>
                      </div>
                      


                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 style="color: white">Arriver</h4>
                          <input type="text" class="form-control" name="lieuArriver" id="name" placeholder="Lieu d'arriver">
                        </div>
                      </div>
                      <div class="col-md-12"> 
                        <div class="form-group">
                          <input type="datetime-local" class="form-control" name="dateArriver" id="email" placeholder="Date et heure d'arriver">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="number" class="form-control" name="kmArriver" id="subject" placeholder="Kilometrage de d'arriver">
                        </div>
                      </div>
                      
                       <div class="col-md-12">
                        <div class="form-group">
                          <h4 style="color: white">Carburant</h4>
                          <input type="number" class="form-control" name="montantCarburant" id="subject" placeholder="Montant Carburant">
                        </div>
                      </div>

                       <div class="col-md-12">
                        <div class="form-group">
                          <input type="number" class="form-control" name="quantiter" id="subject" placeholder="Quantiter en litre">
                        </div>
                      </div>


                      <div class="col-md-12">
                        <div class="form-group">

                          <textarea name="Motif" class="form-control" id="message" cols="30" rows="8" placeholder="Motif"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Ajouter trajet" class="btn btn-primary">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>