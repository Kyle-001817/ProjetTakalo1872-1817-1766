<div class="signin">
        <div class="signin__warp">
            <div class="signin__content">
                <div class="signin__logo">
                    <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
                </div>
                <div class="signin__form">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                                Inscription
                            </a>
                        </li>
                        <li class="nav-item">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="signin__form__text">
                                <p>Avec votre reseau sociaux</p>
                                <div class="signin__form__signup__social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div>
                                <div class="divide">ou</div>
                                <form action="<?php echo site_url('index.php/Register/register_user');?>" method="post">
                                    <input type="text" placeholder="Votre Nom" name="nom">
                                    <input type="text" placeholder="Votre Prenom" name="prenom">
                                    <input type="text" placeholder="Votre Email" name="email">
                                    <input type="text" placeholder="Mot de passe" name="password">
                                    <label for="sign-agree-check">
                                        J'accepte les termes & conditions
                                        <input type="checkbox" id="sign-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>