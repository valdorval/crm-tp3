<?php

/**
 * Template Name: Documentation
 *
 */
get_header();
?>

<main id="main">
     <section class="main-bloc">
          <div class="cardcontainer">
               <div class="groupcard">
                    <div class="groupcard--imgBx">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/plus.png" alt="doc">
                         <div class="groupcard--contentBx">
                              <div class="groupcard--contentBx--title">cosTOMers</div>
                              <div class="groupcard--othercontentBx">
                                   <h2>Description</h2>
                                   <br>
                                   <p>Le plugin CRM vous permet d'utiliser l'interface wordpress pour gérer vos relations client ainsi que leur suivis</p>
                                   <br>

                                   <h2>Installation</h2>
                                   <br>
                                   <ol>
                                        <li>1.Télécharger le zip du plugin à partir de https://github.com/Bhaywe/crm-plugin/tree/main</li>
                                        <li>2.Visitez Plugins> Ajouter un nouveau.</li>
                                        <li>3.Téléverser une extension</li>
                                        <li>4.Choisissez le zip précédemment télécharger</li>
                                        <li>5.Activez CRM depuis votre page Plugins.</li>
                                   </ol>
                                   <br>
                                   <h2>Utilisation</h2><br>
                                   <p>Afin d’avoir le suivis de vos relations client en tout temps, vous devrez insérer le shortcode [formulairecrm] où vous le désirez sur votre site.<br>

                                        Ainsi lorsqu’un de vos client fera une demande de suivi ils seront ajoutés dans l’onglet Clients et Suivis client depuis votre tableau de bord.<br>

                                        Vous pourrez alors suivre de près les suivis qui leur sont assignés et décider de leur état (Nouveau, Traitement, Terminé).</p>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </section>
</main>
<?php
get_footer();
?>