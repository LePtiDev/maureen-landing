<form id="contact-click" class="contact-form form box-shadow-large" action="plans/" method="post">
    <div class="form-content">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center hidden-small">Demande de renseignements</h2>
                <p class="title text-center">Inscrivez-vous pour<br class="d-none d-lg-block"> profiter des offres</p>
            </div>
        </div>
        <div class="row inputs inputs-gray">
            <div class="col-12 d-flex align-items-center radio-group-content">
                <label class="label-radio-group">Civilité*</label>
                <div class="radio-group">
                    <label class="styled-radio">
                        <input type="radio" name="civilite" value="Madame">
                        <span class="label-text">Madame</span>
                    </label>
                    <label class="styled-radio">
                        <input type="radio" name="civilite" value="Monsieur">
                        <span class="label-text">Monsieur</span>
                    </label>
                </div>
            </div>
            <div class="col-md-6 litem">
                <label>
                    <span>Nom*</span>
                    <input type="text" placeholder="Votre nom*" name="nom">
                </label>
            </div>
            <div class="col-md-6 ritem">
                <label>
                    <span>Prénom*</span>
                    <input type="text" placeholder="Votre prénom*" name="prenom">
                </label>
            </div>
            <div class="col-md-12">
                <label>
                    <span>Email*</span>
                    <input type="email" placeholder="Votre email*" name="email">
                </label>
            </div>
            <div class="col-md-6 litem">
                <label>
                    <span>Téléphone*</span>
                    <input type="tel" placeholder="Votre téléphone*" name="telephone">
                </label>
            </div>
            <div class="col-md-6 ritem">
                <label>
                    <span>Code Postal*</span>
                    <input type="number" placeholder="Votre code postal*" name="cp">
                </label>
            </div>
            <div class="col-md-12 hidden-small">
                <label>
                    <span>Message</span>
                    <textarea name="message" placeholder="Votre message"></textarea>
                </label>
            </div>
            <div class="col-md-8">
                <div class="rgpd">
                    <input class="styled-checkbox form-check-input" id="rgpd-checkbox" type="checkbox" name="optin" value="1">
                    <label for="rgpd-checkbox" class="text-checkbox d-flex"><span>En cochant cette case, j'accepte de recevoir des offres commerciales et informations par email, téléphone et sms sur les produits et services de <?php echo $settings['legalInfos']['promoteur']; ?> et affirme avoir pris  connaissance de <a href="javascript:;" data-fancybox data-src="#privacy-policy">la politique de protection des données personnelles de <?php echo $settings['legalInfos']['promoteur']; ?>.</a></span></label>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-md-end justify-content-center align-items-center">
                <button class="btn btn-arrow gradient" type="submit">
                    Envoyer
                    <svg viewBox="0 0 85.82 49.5"><defs><style>.a5dfc3e4-5bed-4b2b-a079-8686e806077e{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:10px;}</style></defs><g><g><polyline class="a5dfc3e4-5bed-4b2b-a079-8686e806077e" points="57.54 3.54 78.75 24.75 57.54 45.96"/><line class="a5dfc3e4-5bed-4b2b-a079-8686e806077e" x1="78.75" y1="24.75" y2="24.75"/></g></g></svg>
                    <svg class="loader" viewBox="0 0 90 95">
                        <circle fill="none" stroke-width="4" stroke-linecap="round" cx="45" cy="45" r="43" />
                    </svg>
                </button>
            </div>
            <div class="col-md-12">
                <span class="mandatory">*obligatoire</span>
            </div>
        </div>
    </div>
    <div class="post-validation hidden">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title">Votre message<br class="d-none d-lg-block"> a bien été envoyé&nbsp;!</h2>
                <p>Cliquez-ci dessous pour télécharger la brochure.</p>
                <a href="<?php echo SITE_URL . $settings['residenceInfos']['brochureURL']; ?>" download="<?php echo $settings['residenceInfos']['brochureFilename']; ?>" id="dl-doc" target="_blank" data-tracking data-tracking-category="telechargement" data-tracking-action="documentation" class="btn btn-arrow brochure">
                    Téléchargez la brochure
                    <svg viewBox="0 0 18 18"><g><g><path d="M16,9v7H2V9H0v7a2,2,0,0,0,2,2H16a2,2,0,0,0,2-2V9Zm-6,.67,2.59-2.58L14,8.5l-5,5-5-5L5.41,7.09,8,9.67V0h2Z"/></g></g></svg>
                </a>
                <p>Pour nous permettre de vous fournir l’offre la plus adaptée à votre besoin, veuillez compléter votre recherche.</p>
                <a href="" id="btn-typeform" target="_blank" class="btn btn-arrow">
                    Compléter votre recherche
                    <svg viewBox="0 0 85.82 49.5"><defs><style>.a5dfc3e4-5bed-4b2b-a079-8686e806077e{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:10px;}</style></defs><g><g><polyline class="a5dfc3e4-5bed-4b2b-a079-8686e806077e" points="57.54 3.54 78.75 24.75 57.54 45.96"/><line class="a5dfc3e4-5bed-4b2b-a079-8686e806077e" x1="78.75" y1="24.75" y2="24.75"/></g></g></svg>
                </a>
            </div>
        </div>
    </div>
</form>
