<?php
require_once 'includes/autoloader.php';
?><!DOCTYPE html>
<html lang="fr">

    <?php include 'header.php'; ?>

    <body class="version-s">
        <?php echo $settings['GTM']['body']; ?>

        <div id="blue-circle" class="blue-circle"></div>
        <div id="blue-red" class="blue-red"></div>
        <div id="blue-green" class="blue-green"></div>

        <div class="background"></div>

        <div class="container-all">
            <nav id="nav">
                <a href="#contact">CONTACT</a>

                <svg class="logo" xmlns="http://www.w3.org/2000/svg" width="16.64" height="16.549" viewBox="0 0 16.64 16.549">
                    <path id="LOGO_MOMO" data-name="LOGO MOMO" d="M43.533,101.512v15.549h15.64V101.512ZM58.4,115.677l-6.8-3.54,6.8-9.316ZM57.83,102.3l-6.472,8.711-6.47-8.729L58.4,102.3m-7.718,9.358L44.3,108.339v-5.514ZM44.3,116.3v-7.1l13.459,7.1H58.4v0Z" transform="translate(-43.033 -101.012)" stroke="#000" stroke-miterlimit="10" stroke-width="1"/>
                </svg>

                <svg id="switch-mode" class="switch-mode" data-name="LOGO ECLIPSE" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                    <g id="Ellipse" data-name="Ellipse 10" fill="none" stroke="#fff" stroke-width="1.5">
                        <circle cx="9.5" cy="9.5" r="9.5" stroke="none"/>
                        <circle cx="9.5" cy="9.5" r="8.75" fill="none"/>
                    </g>
                    <g id="Trace" data-name="Tracé 12" transform="translate(-574.471 -998.182)" fill="none">
                        <path d="M582.966,1014.055c3.94,0,7.134-2.828,7.134-6.319s-3.194-6.319-7.134-6.319a11.676,11.676,0,0,1,1.627,6.319A12.078,12.078,0,0,1,582.966,1014.055Z" stroke="none"/>
                        <path d="M 585.4537963867188 1012.059509277344 C 587.3159790039062 1011.272338867188 588.5997314453125 1009.630310058594 588.5997314453125 1007.736633300781 C 588.5997314453125 1005.852966308594 587.3296508789062 1004.218322753906 585.4834594726562 1003.42626953125 C 585.8384399414062 1004.586120605469 586.12109375 1006.057189941406 586.0926513671875 1007.76171875 C 586.0647583007812 1009.42919921875 585.7985229492188 1010.883483886719 585.4537963867188 1012.059509277344 M 582.966064453125 1014.055236816406 C 582.966064453125 1014.055236816406 584.5245971679688 1011.818298339844 584.5928344726562 1007.736633300781 C 584.656982421875 1003.897766113281 582.966064453125 1001.417907714844 582.966064453125 1001.417907714844 C 586.906005859375 1001.417907714844 590.0997314453125 1004.246765136719 590.0997314453125 1007.736633300781 C 590.0997314453125 1011.226745605469 586.906005859375 1014.055236816406 582.966064453125 1014.055236816406 Z" stroke="none" fill="#fff"/>
                    </g>
                </svg>

            </nav>
            <div id="container-body" class="container-body">
                <section>
                    <p>
                        I'm Maureen, an artistic director <br class="display-none-mobile">
                        crafting thoughtful <span class="word-hover">identities</span>, custom <br class="display-none-mobile">
                        <span class="word-hover">packaging</span>, and bespoke <span class="word-hover">typefaces</span>. <br class="display-none-mobile">
                        My work delights the senses, sparks <br class="display-none-mobile">
                        wonder, and pushes boundaries.
                    </p>

                    <a href="#container-tab" id="circle-arrow" class="circle-arrow">
                        <p>&#8592;</p>
                    </a>

                    <div class="absolute-text">
                        <p>SELECTED</p>
                        <p>WORKS</p>
                    </div>

                    <div id="container-tab" class="container-tab">
                        <div class="header-tab">
                            <div class="plus"></div>
                            <div class="project">PROJECTS</div>
                            <div class="domain">DOMAINS</div>
                        </div>

                        <a id="vln" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">VLN</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="outline" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">OUTLINE</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="latitude" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">LATITUDE</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="census-branding" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">MY CENSUS</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="washable" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">WASHABLE_PRINT</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="partage" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">PARTAGE</div>
                            <div class="domain">BRANDING</div>
                        </a>
                        <a id="toinztype" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">TOINZTYPE</div>
                            <div class="domain">TYPEFACE</div>
                        </a>
                        <a id="organik" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">ORGANIK</div>
                            <div class="domain">TYPEFACE</div>
                        </a>
                        <a id="sade" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">SADE</div>
                            <div class="domain">TYPEFACE</div>
                        </a>
                        <a id="discofont" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">DISCOFONT</div>
                            <div class="domain">TYPEFACE</div>
                        </a>
                        <a id="pirate" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">PIRATE</div>
                            <div class="domain">TYPEFACE</div>
                        </a>
                        <a id="shade" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">SHADE</div>
                            <div class="domain">PRINT</div>
                        </a>
                        <a id="cartier" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">CARTIER</div>
                            <div class="domain">PRINT</div>
                        </a>
                        <a id="personnal" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">PERSONAL WORK</div>
                            <div class="domain">PRINT</div>
                        </a>
                        <a id="nyx" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">NYX</div>
                            <div class="domain">VIDEO / CLIP</div>
                        </a>
                        <a id="amours" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">AMOURS  D’ÉTÉ</div>
                            <div class="domain">VIDEO / CLIP</div>
                        </a>
                        <a id="webdesign" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">MY CENSUS</div>
                            <div class="domain">WEBDESIGN</div>
                        </a>
                        <a id="photo" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">UNTITLED</div>
                            <div class="domain">PHOTOGRAPHY</div>
                        </a>
                        <a id="illu" href="#" class="line">
                            <div class="plus"><img src="images/icons/WHITE_PLUS.svg" alt=""></div>
                            <div class="project">UNTITLED</div>
                            <div class="domain">ILLUSTRATION</div>
                        </a>




                        <!-- Images -->
                        <img id="img-vln" class="img-project" src="./images/accueil/vln.png" alt="VLN project">
                        <img id="img-outline" class="img-project" src="./images/accueil/outline.png" alt="VLN project">
                        <img id="img-latitude" class="img-project" src="./images/accueil/latitude.png" alt="VLN project">
                        <img id="img-census-branding" class="img-project" src="./images/accueil/census-branding.png" alt="VLN project">
                        <img id="img-washable" class="img-project" src="./images/accueil/washable.png" alt="VLN project">
                        <img id="img-partage" class="img-project" src="./images/accueil/partage.png" alt="VLN project">
                        <img id="img-toinztype" class="img-project" src="./images/accueil/toinztype.png" alt="VLN project">
                        <img id="img-organik" class="img-project" src="./images/accueil/organik.png" alt="VLN project">
                        <img id="img-sade" class="img-project" src="./images/accueil/sade.png" alt="VLN project">
                        <img id="img-discofont" class="img-project" src="./images/accueil/discofont.png" alt="VLN project">
                        <img id="img-pirate" class="img-project" src="./images/accueil/pirate.png" alt="VLN project">
                        <img id="img-shade" class="img-project" src="./images/accueil/shade.png" alt="VLN project">
                        <img id="img-cartier" class="img-project" src="./images/accueil/cartier.png" alt="VLN project">
                        <img id="img-personnal" class="img-project" src="./images/accueil/personnal.png" alt="VLN project">
                        <img id="img-nyx" class="img-project" src="./images/accueil/nyx.png" alt="VLN project">
                        <img id="img-amours" class="img-project" src="./images/accueil/amours.png" alt="VLN project">
                        <img id="img-webdesign" class="img-project" src="./images/accueil/webdesign.png" alt="VLN project">
                        <img id="img-illu" class="img-project" src="./images/accueil/illu.png" alt="VLN project">
                        <img id="img-photo" class="img-project" src="./images/accueil/photo.png" alt="VLN project">
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>
