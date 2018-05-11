
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="./main.js"></script>
</head>
<body>
    <div class="message">
        <?php if (isset($message)) { echo $message; }?>
    </div>
    <ul id="registration-step">
    <li id="account" class="highlight">Contribuable</li>
    <li id="password">Contact</li>
    <li id="general">Mandat</li>
    </ul>
    <form name="frmRegistration" id="registration-form" method="post">
        <div id="account-field">
            <fieldset>
                <table style="width: 100%;">
                    <tr>
                        <td colspan="3">
                            <div>
                                <label>Je soussigné(e)*</label>
                                <span id="civilite-error" class="registration-error"></span>
                                <input type="radio" name="civilite" value="m" /> M.
                                <input type="radio" name="civilite" value="mme" /> Mme
                                <input type="radio" name="civilite" value="mlle" /> Mlle
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prénoms*</label>
                            <span id="prenom-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="prenom" id="prenom" class="demoInputBox" autofocus required />
                            </div>
                        </td>
                        <td>
                            <label>Nom*</label>
                            <span id="nom-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nom" id="nom" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Fonction*</label>
                            <span id="fonction-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="fonction" id="fonction" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                            <span id="email-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="email" id="email" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Tel*</label>
                            <span id="tel-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="tel" id="tel" class="demoInputBox allownumericwithoutdecimal" required maxlength="9" />
                            </div>
                        </td>
                        <td>
                            <label>Agissant pour le compte de l'entreprise*</label>
                            <span id="agissantcpte-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="agissantcpte" id="agissantcpte" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <label>Secteur d'Activité*</label>
                            <span id="secteuractivite-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="secteuractivite" id="secteuractivite" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Adresse du siège - N°</label>
                            <span id="adressesiege-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="adressesiege" id="adressesiege" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Type de voie*</label>
                            <span id="typevoie-error" class="registration-error"></span>
                            <div>
                                <select name="typevoie" id="typevoie" class="demoInputBox" required>
                                    <option value="" selected></option>
                                    <option value="allees">ALLEES</option>
                                    <option value="avenue">AVENUE</option>
                                    <option value="boulevard">BOULEVARD</option>
                                    <option value="impasse">IMPASSE</option>
                                    <option value="place">PLACE</option>
                                    <option value="rue">RUE</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <label>Nom de la voie</label>
                            <span id="nomvoie-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nomvoie" id="nomvoie" class="demoInputBox" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Immeuble</label>
                            <span id="immeuble-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="immeuble" id="immeuble" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Quartier</label>
                            <span id="quartier-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="quartier" id="quartier" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Commune*</label>
                            <span id="commune-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="commune" id="commune" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>BP</label>
                            <span id="bp-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="bp" id="bp" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>NINEA*</label>
                            <span id="ninea-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="ninea" id="ninea" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>COFI</label>
                            <span id="cofi-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="cofi" id="cofi" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Centre fiscal*</label>
                            <span id="centrefiscal-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="centrefiscal" id="centrefiscal" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <!-- =================================== Point Focal ============================= -->
            <fieldset>
                <legend>Je désigne comme point focal*</legend>
                <table style="width: 100%">
                    <tr>
                        <td colspan="3">
                            <div>
                                <span id="soussignepf-error" class="registration-error"></span>
                                <input type="radio" name="soussignepf" value="m" /> M.
                                <input type="radio" name="soussignepf" value="mme" /> Mme
                                <input type="radio" name="soussignepf" value="mlle" /> Mlle
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prénoms*</label>
                            <span id="prenompf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="prenompf" id="prenompf" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Nom*</label>
                            <span id="nompf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nompf" id="nompf" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Fonction*</label>
                            <span id="fonctionpf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="fonctionpf" id="fonctionpf" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Email*</label>
                            <span id="emailpf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="emailpf" id="emailpf" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Téléphone au bureau</label>
                            <span id="telbureaupf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telbureaupf" id="telbureaupf" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                        <td>
                            <label>Poste</label>
                            <span id="postepf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="postepf" id="postepf" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Téléphone obligatoire*</label>
                            <span id="telportablepf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telportablepf" id="telportablepf" class="demoInputBox allownumericwithoutdecimal" maxlength="9" required />
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <small>
                <p style="font-style: italic;">*Le point focal est l’interlocuteur privilégié dans les rapports avec l’administration fiscale dans le cadre des téléprocédures.
                Il pourra notamment recevoir les rappels par email et ou par sms. Il peut également être désigné pour télédéclarer et ou
                télépayer au nom de l’entreprise.</p>
            </small>
        </div>
        <div id="password-field" style="display:none;">
            <fieldset>
                <legend>Je désigne également pour télédéclarer et/ou télépayer les impôts et taxes, au nom de ladite entreprise</legend>
                <table style="width: 100%;">
                    <tr>
                        <td colspan="3">
                            <div>
                                <span id="civilitedesigne-error" class="registration-error"></span>
                                <input type="radio" name="civilitedesigne" value="m" /> M.
                                <input type="radio" name="civilitedesigne" value="mme" /> Mme
                                <input type="radio" name="civilitedesigne" value="mlle" /> Mlle
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prénoms*</label>
                            <span id="prenomdesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="prenomdesigne" id="prenomdesigne" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Nom*</label>
                            <span id="nomdesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nomdesigne" id="nomdesigne" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Fonction*</label>
                            <span id="fonctiondesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="fonctiondesigne" id="fonctiondesigne" class="demoInputBox" required />
                            </div>
                        </td>
                        <td>
                            <label>Email*</label>
                            <span id="emaildesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="emaildesigne" id="emaildesigne" class="demoInputBox" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Téléphone au bureau</label>
                            <span id="telbureaudesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telbureaudesigne" id="telbureaudesigne" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                        <td>
                            <label>Poste</label>
                            <span id="postedesigne-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="postedesigne" id="postedesigne" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Téléphone obligatoire*</label>
                            <span id="telportablepf-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telportablepf" id="telportablepf" class="demoInputBox allownumericwithoutdecimal" maxlength="9" required />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Habilitation*</label>
                            <span id="habilitationdesigne-error" class="registration-error"></span>
                            <div>
                                <select name="habilitationdesigne" id="habilitationdesigne" class="demoInputBox" required>
                                    <option value="" selected>Sélectionnez un rôle</option>
                                    <option value="allees">TELEDECLARATION UNIQUEMENT</option>
                                    <option value="avenue">TELEPAIEMENT UNIQUEMENT</option>
                                    <option value="boulevard">TELEDECLARATION ET TELEPAIEMENT</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <legend>Il sera suppléé par (optionnel):</legend>
                <table style="width: 100%;">
                    <tr>
                        <td colspan="3">
                            <div>
                                <span id="civilitesupp1-error" class="registration-error"></span>
                                <input type="radio" name="civilitesupp1" value="m" /> M.
                                <input type="radio" name="civilitesupp1" value="mme" /> Mme
                                <input type="radio" name="civilitesupp1" value="mlle" /> Mlle
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prénoms</label>
                            <span id="prenomsupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="prenomsupp1" id="prenomsupp1" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Nom</label>
                            <span id="nomsupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nomsupp1" id="nomsupp1" class="demoInputBox" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Fonction</label>
                            <span id="fonctionsupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="fonctionsupp1" id="fonctionsupp1" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Email</label>
                            <span id="emailsupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="emailsupp1" id="emailsupp1" class="demoInputBox" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Téléphone au bureau</label>
                            <span id="telbureausupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telbureausupp1" id="telbureausupp1" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                        <td>
                            <label>Poste</label>
                            <span id="postesupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="postesupp1" id="postesupp1" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Téléphone obligatoire*</label>
                            <span id="telportablesupp1-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telportablesupp1" id="telportablesupp1" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Habilitation</label>
                            <span id="habilitationsupp1-error" class="registration-error"></span>
                            <div>
                                <select name="habilitationsupp1" id="habilitationsupp1" class="demoInputBox" required>
                                    <option value="" selected>Sélectionnez un rôle</option>
                                    <option value="allees">TELEDECLARATION UNIQUEMENT</option>
                                    <option value="avenue">TELEPAIEMENT UNIQUEMENT</option>
                                    <option value="boulevard">TELEDECLARATION ET TELEPAIEMENT</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <br>
            <fieldset>
                <legend>Et par (optionnel):</legend>
                <table style="width: 100%;">
                    <tr>
                        <td colspan="3">
                            <div>
                                <span id="civilitesupp2-error" class="registration-error"></span>
                                <input type="radio" name="civilitesupp2" value="m" /> M.
                                <input type="radio" name="civilitesupp2" value="mme" /> Mme
                                <input type="radio" name="civilitesupp2" value="mlle" /> Mlle
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prénoms</label>
                            <span id="prenomsupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="prenomsupp2" id="prenomsupp2" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Nom</label>
                            <span id="nomsupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="nomsupp2" id="nomsupp2" class="demoInputBox" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Fonction</label>
                            <span id="fonctionsupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="fonctionsupp2" id="fonctionsupp2" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Email</label>
                            <span id="emailsupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="emailsupp2" id="emailsupp2" class="demoInputBox" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Téléphone au bureau</label>
                            <span id="telbureausupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telbureausupp2" id="telbureausupp2" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                        <td>
                            <label>Poste</label>
                            <span id="postesupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="postesupp2" id="postesupp2" class="demoInputBox" />
                            </div>
                        </td>
                        <td>
                            <label>Téléphone obligatoire*</label>
                            <span id="telportablesupp2-error" class="registration-error"></span>
                            <div>
                                <input type="text" name="telportablesupp2" id="telportablesupp2" class="demoInputBox allownumericwithoutdecimal" maxlength="9" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Habilitation</label>
                            <span id="habilitationsupp2-error" class="registration-error"></span>
                            <div>
                                <select name="habilitationsupp2" id="habilitationsupp2" class="demoInputBox" required>
                                    <option value="" selected>Sélectionnez un rôle</option>
                                    <option value="allees">TELEDECLARATION UNIQUEMENT</option>
                                    <option value="avenue">TELEPAIEMENT UNIQUEMENT</option>
                                    <option value="boulevard">TELEDECLARATION ET TELEPAIEMENT</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div id="general-field" style="display:none;">
            <label>Display Name</label>
            <div><input type="text" name="display-name" id="display-name" class="demoInputBox"/></div>
            <label>Gender</label>
            <div>
                <select name="gender" id="gender" class="demoInputBox">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>
        </div>
        <div>
            <input class="btnAction" type="button" name="back" id="back" value="Précédent" style="display:none;">
            <input class="btnAction" type="button" name="next" id="next" value="Suivant" >
            <input class="btnAction" type="submit" name="finish" id="finish" value="Enregistrer" style="display:none;">
        </div>
    </form>
    </body>
</html>