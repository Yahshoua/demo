<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* messagerie/index.html.twig */
class __TwigTemplate_654713ee33d88c9ecb29e8bd299041119f61688b037bdcc9db1e312670e0d395 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messagerie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messagerie/index.html.twig"));

        // line 3
        $context["title"] = "profil";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messagerie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <style>
    .container>section {
        margin-top: 5%
    }
    .alert-message h2 {
        font-size: 35px;
    }
    .alert-message p {
        padding-left: 253px;
        padding-right: 253px;
        font-size: 16px;
    }
    .card {
        height: 500px
    }
    .search-input {
        height: 35px;
        background: #ffffff;
        display: flex;
        border-bottom: 1px solid #f5f5f5;
    }
     .search-input input, .col-input-message input {
        border: none;
        outline: none !important;
        background: transparent
     }
     .search-input input::placeholder, .col-input-message input::placeholder {
        font-size: 12px
     }
     .search-input svg {
        flex: 1;
        margin: auto;
        font-size: 21px;
        color: #ddd;
     }
     .item-sender {
        display: flex;
        padding: 17px;
        padding-right: 0;
        position: relative
     }
     .item-sender:hover {
        background-color: #dddddd4a;
        cursor: pointer;
        transition: all .3s
     }
     .item-active {
         background-color: #dddddd4a;
     }
     .item-sender div:nth-of-type(2) {
             padding-left: 11px;
     }
     .item-sender .fa-trash {
            position: absolute;
            right: 0;
            margin-right: 14px;
            color: #8c8c8c;
            font-size: 14px;
     }
     .item-sender div:nth-of-type(2) p {
            margin: 0;
            font-size: 14px;
     }
     .item-sender div:nth-of-type(2) span {
            font-size: 11px;
            color: #22ffe2;
            font-family: 'Montserrat-semibold'
     }
     .card:hover {
         cursor: default !important;
         -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
     }
     .col-center-message {
         position: relative;
         border-radius: 0;
     }
     .col-input-message {
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
         height: 60px;
         background: #f3f3f3;
         display: flex
     }
     .col-input-message svg:first-child {
         margin-left: 31px;
        margin-right: 20px;
     }

     .col-input-message>div>svg{
        color: #ffffff;
        margin: auto;
     }
     .col-input-message svg {
         margin: auto
     }
      .col-input-message input {
          flex: 1;
          margin: auto
      }
     .col-input-message>div {
        display: flex;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #53c0b5;
        margin: auto;
        margin-right: 21px;
     }
     .col-right-message>div:nth-of-type(2) {
         padding: 20px;
     }
     .col-right-message>div:nth-of-type(2) h6 {
         color: #22ffe2;
         margin-top: 5px
     }
     .col-right-message>div:nth-of-type(2) p {
         margin-top: 5px;
         font-size: 11px;
     }
     .col-right-message {
         position: relative
     }
    
     .contacts, .contacts>div {
         display: flex
     }
     .contacts {
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
        border-radius: 0 0 15px 15px;
        background: #f9f9f9;
     }
     .contacts>div {
         width: 100%;
         padding: 15px;
     }
     .contacts>div:first-child {
         border-right: 1px dotted #ddd;
     }
     .contacts>div svg {
             font-size: 15px;
             margin: auto
     }
     .contacts span {
         font-size: 10px
     }
     .contacts>div:hover {
         background: #f3f3f3;
        transition: all .3s;
        cursor: pointer
     }
     .fa-paperclip:hover {
         cursor: pointer
     }
     .caption {
         width: 70px;
         height: 70px;
         border-radius: 50%;
         background-position: center;
         background-size: cover;
         background-repeat: no-repeat;
     }
     .push-message .row {
         margin: 0;
         margin-top: 11px;
     }
     .col-message {
         display: flex
     }
     .message-view {
        background-color: #00BFA6;
        font-size: 12px;
     }
     .message-bulb-left {
         border-radius: 0 10px 10px 10px;
     }
       .message-bulb-right {
         border-radius: 10px 0px 10px 10px;
         background-color: #7097bf;
     }
     .message-view p {
         color: #fff;
         margin-bottom: 0 !important;
     }
     .col-input-message>div:first-child:hover {
         background-color: #3f9c93;
         transition: all .3s
     }
     .caption-pj {
        display: flex;
        width: fit-content;
        padding-right: 22px;
        border: 1px solid #ddd;
        background: #fff;
     }
     .caption-pj>div:first-child {
         background: rgba(0, 123, 255, 0.25);
        padding: 20px;
     }
     .caption-pj>div:last-child {
         display: grid;
         margin-left: 41px;
         margin-top: auto;
         margin-bottom: auto;
     }
      .caption-pj>div:last-child span{
            font-size: 13px;
            font-weight: bold;
            font-family: 'Montserrat-semibold';
     }
     .modal-body>div:first-child {
            background: #eefffb;
            padding: 6px;
     }
     .ms-body {
         display: grid
     }
     #push-message::-webkit-scrollbar-track, section.list::-webkit-scrollbar-track
{
\t-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
\tbackground-color: #CCCCCC;
}

#push-message::-webkit-scrollbar, section.list::-webkit-scrollbar
{
\twidth: 3px;
\tbackground-color: #F5F5F5;
}
.col-left-message {
    border-radius: 0 !important
}
#push-message::-webkit-scrollbar-thumb, section.list::-webkit-scrollbar-thumb
{
\tbackground-color: #17e2c7;
    background-image: -webkit-linear-gradient(90deg, #f4fffe 0%, #00bfa630 25%, #53c0b5 100%, #a4f7ec85 75%, #c0ece8);
}
.fr-suject {
    padding: 10px;
    box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 1px 0px 8px 0 rgba(26,26,26,.12);
}
.fr-suject h4 {
    font-size: 15px;
    margin: auto;
    margin-left: 0;
}
.item-sender>div:first-child {
    border-radius: 50%;
    overflow: hidden;
    width: 65px;
    height: 65px;
}
.caption-pr {
    width: 50px;
    height: 50px;
    border-radius: 15%;
    overflow: hidden;
}
.caption-pr img {
    width: 50px;
}
.fr-suject .d-grid {
    margin-right: 21px;
}
.fr-suject .d-grid span {
    float: right;
    color: #53c0b5;
    font-family: 'montserrat-semibold';
    padding-top: 6px
}
textarea[name=message] {
    width: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
    border: none;
    margin-right: 20px;
    flex: 1;
    resize: none;
}
textarea[name=message]::placeholder {
    font-size: 13px;
    padding: 3px
}
textarea[name=message]:focus {
    outline-color: #53c0b5;
}
.chat {
    display: none
}
.chat-1 {
    display: block
}
.not-find {
    display: none;
    margin-top: 1rem;
}
.not-find h3 {
    font-size: 13px !important;
    text-align: center;
    color: #d2d2d2;
}
section.list {
    overflow: auto;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 315
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 316
        echo "    <div class=\"container\">
       <section>
            <div class=\"row\">
            ";
        // line 320
        echo "            ";
        $context["message"] = [];
        // line 321
        echo "            ";
        // line 322
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 322, $this->source); })())) > 0)) {
            // line 323
            echo "                    <div class=\"col-md-12 alert-message\" style=\"text-align: center\">
                    
                        <h2 syle=\"text-align: center\"> Bienvenue sur votre messagerie ! </h2>
                        <p>
                            Simple et rapide, elle vous permet d’échanger avec les personnes sur un projet. La mise en relation s’effectue toujours depuis une annonce en cliquant sur \"Envoyer un message\"
                        </p>
                        <img src=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/panel.png"), "html", null, true);
            echo "\" style=\"width: 70%\">
                    
                    </div>
                    ";
        } else {
            // line 333
            echo "                    ";
            // line 334
            echo "                        <div class=\"col-md-12\" >
                                <div class=\"row\">
                                        <div class=\"col-md-3 pr-0\">
                                                <div class=\"card col-left-message\" id=\"hacker-list\">
                                                    <div class=\"search-input\">
                                                        <i class=\"fas fa-search\"></i>
                                                        <input class=\"search\" type=\"text\" placeholder=\"Recherche...\"/>
                                                    </div>
                                                    ";
            // line 343
            echo "                                                    <section class=\"list\">
                                                        <div class=\"item-sender item-active\" id=\"chat-1\">
                                                                <div class=\"w-65;h-65\" data-name=\"Caroline\" data-inline=\"il y a 3 minutes\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                    <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')\" width=\"65\">
                                                                </div>
                                                                
                                                                <div>
                                                                    <h6 class=\"name\"> Caroline </h6>
                                                                    <p>
                                                                        J'aimerai sa...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                        ";
            // line 359
            echo "                                                        <div class=\"item-sender\" id=\"chat-2\">
                                                                <div class=\"w-65;h-65\"  data-name=\"Thomas\" data-inline=\"il y a 1 minutes\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                    <img  src=\"https://images.pexels.com/photos/751546/pexels-photo-751546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> Thomas </h6>
                                                                    <p>
                                                                        Bonjour. Vo...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>

                                                        <div class=\"item-sender\" id=\"chat-3\">
                                                                <div class=\"w-65;h-65\" data-name=\"GM\" data-inline=\"il y a 2 jours\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> GM </h6>
                                                                    <p>
                                                                        Ce projet e...
                                                                    </p>
                                                                    <span> il y a 2 jours </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>

                                                        <div class=\"item-sender\" id=\"chat-4\">
                                                                <div class=\"w-65;h-65\" data-name=\"CPoy\" data-inline=\"il y a 4 heures\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/4117419/pexels-photo-4117419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> CPoy </h6>
                                                                    <p>
                                                                        Pouvez-vous...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                        <div class=\"item-sender\" id=\"chat-5\">
                                                                <div class=\"w-65;h-65\" data-name=\"Labalette\" data-inline=\"il y a 4 heures\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/4117419/pexels-photo-4117419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> Labalette </h6>
                                                                    <p>
                                                                        Pouvez-vous...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                    </section>
                                                    <div class=\"not-find\">
                                                            <h3> Aucune discution trouvée... </h3>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class=\"col-md-9 pl-0\">
                                                <div class=\"card col-center-message\">
                                                    <div class=\"fr-suject d-flex\">
                                                        <h4> Léa poitier </h4>
                                                        <div class=\"d-flex\">
                                                            <div class=\"d-grid\">
                                                                <h4 style=\"color: #7d7d7d\"> Bascule-Pelouse </h4>
                                                                <span> 2500 €/m2 </span>
                                                            </div>
                                                            <div class=\"caption-pr\">
                                                                    <img  src=\"https://images.pexels.com/photos/751546/pexels-photo-751546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"push-message pb-4\" id=\"push-message\">
                                                        <section class=\"chat chat-1\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 29 août, 12:48</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                                                        <p> Nous habitons Saint-Ferjeux, en locatif et nous nous intéressons depuis plusieurs années à l'habitat participatif. Est-il possible d'avoir des infos sur le groupe ? Nous sommes une famille franco-espagnole avec deux adultes et deux enfants de 2 et 4 ans. Au plaisir d'avoir davantage d'informations, Caroline </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\">29 août, 13:56</p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                        <p> L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribués, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix au m2 des logements (donc inclus dans les 2750€).
                                                                <br>
                                                                <br>
                                                                Pour plus d'informations, je vous propose de consulter notre page projet si vous ne l’avez pas encore vu : https://lescityzens.fr/habitat-participatif/projet/7. Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Je reste bien entendu disponible pour répondre à toutes vos questions. 
                                                                <br>
                                                                Très belle journée, 
                                                                <br>
                                                                <br>
                                                                Laura Morvan 
                                                                <br>
                                                                <br>
                                                                Chargée de projet participatif chez LesCityZens
                                                                </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">10 sept, 07:01</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                                                    <div class=\"ms-body\">
                                                                        <img src=\"https://images.pexels.com/photos/736414/pexels-photo-736414.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" style=\"width: 170px;\">
                                                                        <p class=\"pt-2\"> J'aimerai savoir d'avantage sur s'il est obligatoire d'apporter le montant réquis en espèce ou cela doit se faire par chèque.  </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">15 sept, 15:17</p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3 p-2 float-right\">
                                                                    <div class=\"ms-body\">
                                                                        <div>
                                                                            <div class=\"caption-pj\">
                                                                                <div>
                                                                                    <i class=\"fas fa-paperclip\"></i>
                                                                                </div>
                                                                                <div>
                                                                                    <span> Pièce jointe: pdf </span>
                                                                                    <a href=\"#\" target=\"blank\"> <span> Cliquez pour ouvrir </span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <p class=\"pt-2\"> SAINT-FERJEUX J-3 ! La prochaine réunion d’information pour notre projet d’habitat participatif à Besançon est JEUDI ! RDV le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux, 1 avenue Ducat. Cette réunion publique est ouverte à tous celles et ceux qui sont intéressés par le projet ou souhaitent simplement en savoir plus sur l’habitat participatif. À très vite ! </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-2\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 11 août, 22:15 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> Bonjour, 

                                                                            Nous sommes très intéressés par le concept d'habitat participatif et par ce projet et souhaiterions obtenir plus d'information. Nous sommes tout juste retraités, actuellement en recherche d'un appartement sur Besançon et ce projet nous correspond tout-à-fait.
                                                                            <br>
                                                                            Nous souhaiterions assister à votre prochaine réunion ou vous rencontrer. Pouvez-vous nous rappeler au 03 81 58 09 16 ou nous envoyer un mail ? 
                                                                            <br><br>
                                                                            Merci d'avance et à bientôt. 
                                                                            <br><br>
                                                                            Catherine et Michel 
</p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-3\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">15 sept, 08:45</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                            Bonjour, 

                                                                        Je découvre votre annonce et je ne connais pas ce type d'habitat De plus, pas de plan, de lieu et de prix. Qui peut bénéficier de ce nouveau projet Je souhaiterais avoir des informations complémentaires. 
                                                                        <br>
                                                                        <br>
                                                                        Bien cordialement 
                                                                        <br>
                                                                        <br>
                                                                        Grabli Mukendi
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 23 août, 18:23 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Si vous n’êtes pas familiers avec le concept d’habitat participatif, l'idée est que contrairement a une opération immobilière classique où le promoteur monte une opération et vend les logements sur plans une fois ceux-ci achevés, dans l'habitat participatif, les acquéreurs sont recrutés au tout début du projet avant sa conception. Du coup, les acquéreurs participent activement à la programmation, à la conception et aux différents choix qu'il y a à faire concernant l'opération aussi bien par rapport aux logements individuels qu'aux espaces communs partagés, en collaborant avec le promoteur et les architectes. Au delà du principe de participer à la conception de son logement au sens large (aussi bien dans la programmation et l'aménagement des différents espaces que dans l'imagination de la vie de voisinage), l'habitat participatif vise à permettre une autre manière d'habiter, plus près de ses besoins, souvent plus durable (c'est dans ce genre de projet que vous pouvez faire le choix d'un logement vraiment écologique par exemple), mais surtout avec une vraie vie de voisinage, de communauté. Les espaces communs et les services partagés sont un point central de ce genre d'opération et ils peuvent être extrêmement variés (salle commune, cuisine ou laverie partagées, atelier de bricolage, salle de sport, de musique, local pour accueillir des événements, des associations, organiser des activités, jardin, terrasse ou potager partagés, service de voitures partagées, espaces de stockage, partage d'équipements comme des outils, des jeux, de l'électroménager type appareil à raclette, etc.). Les possibilités sont infinies et ne dépendent que des envies du groupe.

<br>
<br>
L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribué, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix au m2 des logements (donc inclus dans les 2750€).
Pour plus d'informations, je vous propose de consulter notre page projet si vous ne l’avez pas encore vu : https://lescityzens.fr/habitat-participatif/projet/7.  Nous organisons une nouvelle réunion d'information à la rentrée : le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet. Si vous le souhaitez, nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies, etc.  Je reste bien entendu disponible pour répondre à toutes vos questions.
<br>
<br>
Très belle journée,
<br>
<br>
Laura Morvan
<br>
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-4\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 18 mars, 20:36</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
<br>
<br>
Je suis intéressé par le projet d'habitat partagé. J'aurais voulu savoir où en était le projet ? Si vous aviez déjà des plans d'habitation, une idée des prix, etc. Dans tous les cas je suis intéressé pour participer à une réunion d'info (quand on aura le droit de se réunir !).
<br>
<br>
Merci Cyrille
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 19 mars, 10:26 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour,
<br>
<br>
L'opération d'habitat participatif vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé (dans le planning initial, ils devaient débuter en mai, nous ajusterons selon l'évolution du contexte actuel). Aucun logement n'a encore été attribués, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par les ménages.
<br>
Pour plus d'informations, je vous propose de consulter notre page projet : https://www.lescityzens.fr/habitat-participatif/projet/7. La prochaine réunion d'information prévue le 16 avril, à moins d'un miracle, va être décalée. Nous vous tiendrons au courant de sa prochaine date. Vous trouverez évidemment toutes ces informations sur la page projet que nous mettons à jour régulièrement. Si vous le souhaitez en plus, je peux vous ajouter à notre mailing liste de personnes intéressées par le projet, comme ça vous recevrez directement par mail les nouvelles du projet et notamment la date de la prochaine réunion ? Je reste bien entendu disponible pour répondre à toutes questions supplémentaires que vous pourriez avoir. 
<br>
<br>
Bonne journée, 

Laura Morvan pour LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 18 mars, 20:36</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
<br>
<br>
Bonjour, merci pour toutes ces informations. la réunion d'info du 16 avril étant certainement décalée je veux bien être ajoutée à la newsletters pour avoir les prochaines infos. 
<br>
<br>
Merci Cyrille
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 20 juin, 18:50 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour,
<br>
<br>
Après cette période un peu compliquée qui nous a obligé à mettre en stand-bye le projet pendant un temps, nous avons le plaisir de vous annoncer que nous reprenons officiellement toutes nos activités normalement et relançons de plus bel le recrutement pour le projet d’habitat participatif de Saint-Ferjeux.
<br>
<br>
Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet (cf le lien ci-dessus). Si vous le souhaitez, nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies, etc. Je reste bien entendu disponible pour répondre à toutes vos questions. 
<br>
<br>
Très belle journée, 
<br>
<br>
Laura Morvan 
<br>
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <section class=\"chat chat-5\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 13 mars, 14:43 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
Bonjour,
<br>
Je souhaiterais avoir plus de précisions sur la lieu de construction, pouvez vous me préciser l’adresse et me fournir de plus amples renseignements au sujet de l’ensemble du projet. <br>
Merci, je vous adresse mes meilleures salutations. <br> <br>
Marie Labalette Téléphone: 06XXXXXXXX
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 19 mars, 10:26 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour, 
                                                                        <br>
                                                                        <br>
                                                                        Le projet d’habitat participatif s’inscrit dans le cadre d’un projet d'aménagement plus vaste, localisé dans le quartier Saint-Ferjeux, entre la place de la Bascule et la rue de la Pelouse, sur le terrain de l’ancienne école de la Pelouse. Pour plus d'informations, je vous propose de consulter notre page projet : https://www.lescityzens.fr/habitat-participatif/projet/7. Je reste bien entendu disponible pour répondre à vos interrogations. 
                                                                        <br>
                                                                        Vous souhaitant une bonne fin de semaine, 
                                                                        <br>
                                                                        <br>
                                                                        Laura Morvan pour LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 13 mars, 15:08 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
Je suis intéressée par le projet, pouvez-vous avoir la gentillesse de me tenir informée, cordialement,
<br>
<br>
Mme Labalette 06XXXXXXXX
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 20 juin, 18:50 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
 Bonjour,
<br>
<br>
Après cette période un peu compliquée qui a mis en stand-bye le projet, nous avons le plaisir de vous annoncer que nous reprenons officiellement toutes nos activités normalement et relançons de plus bel le recrutement pour le projet d’habitat participatif de Saint-Ferjeux.
<br>
<br>
Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet. Nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies... et de votre intégration au groupe. Je reste bien entendu disponible pour répondre à toutes vos questions. 
<br>
<br>
Très belle journée, 
<br>
<br>
Laura Morvan 
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    ";
            // line 683
            echo "                                                    <form name=\"chat\">
                                                        <input type=\"hidden\" name=\"id-user\" value=\"[id de l'user]\">
                                                        <input type=\"file\" name=\"pjointe\" style=\"display: none\">
                                                        <div class=\"col-input-message d-flex\">
                                                            <i class=\"fas fa-paperclip\"></i>
                                                            <textarea class=\"p-1\" type=\"text\" name=\"message\" placeholder=\"Ecrivez votre message...\"></textarea>
                                                            <div style=\"cursor: pointer\">
                                                                <i class=\"fab fa-telegram-plane\" style=\"margin: auto\"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                        
                                </div>
                        </div>

                ";
        }
        // line 701
        echo "            </div>
            <!-- Modal piece jointe-->
                    <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Aperçu de votre envoi</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\"></div>
                            
                        
                        <div class=\"modal-footer\">
                            <div style=\"flex: 1;\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Commentez votre pièce jointe...\">
                            </div>
                            <button type=\"button\" class=\"btn btn-primary\">Envoyer</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    ";
        // line 725
        echo "
                    ";
        // line 727
        echo "                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"modal-supp\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h6 class=\"modal-title\" id=\"exampleModalLongTitle\">Voulez-vous supprimer cette conversation ?</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary\">Supprimer</button>
                            </div>
                            </div>
                        </div>
                        </div>


                    ";
        // line 747
        echo "       </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 750
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 751
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/list.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(function() {
                    var options = {
                    valueNames: ['name']
                    };

                    var hackerList = new List('hacker-list', options)
                    .on('searchComplete', function(\$e) {
                        let visibleItem = hackerList.visibleItems
                        console.log('visibleItem ', visibleItem.length)
                        if(visibleItem.length <= 0) {
                            \$('.not-find').show()
                        } else {
                            \$('.not-find').hide()
                        }
                        console.log('\$e ', hackerList)
                    } )

                \$('.col-left-message .item-sender').on('click', function() {
                    let id = \$(this).attr('id')
                    console.log('id ', id)
                    \$('.chat').hide()
                    \$(\".\"+id).show()
                })
                
                let hauteur = \$('.col-center-message').height() - \$('.col-input-message').height() -  \$('.fr-suject').height()
                \$('.push-message').css({'height': hauteur + 'px', 'overflow-y': 'auto'})
                var item = \$('.item-active>div:first-child')
                var data = item.data()
                var caption = item.find('img').attr('src')
                
                switchcaption = (caption, data)=> {
                    let \$this = \$('.fr-suject')
                    \$('.caption-pr').find('img').attr('src', caption)
                    \$this
                    .find('.d-grid h4').html(data.projet)
                    \$('.fr-suject>h4').html(data.name)
                    \$this.find('.d-grid span').html(data.prix)
                }
                \$('.fa-paperclip').on('click',()=> {
                    \$('input[name=\"pjointe\"]').click()
                })
                switchcaption(caption, data)

                \$('.item-sender').on('click', function() {
                    \$this= \$(this).find(\">:first-child\")
                    console.log('alldata ', \$this.data())
                    var data = \$this.data()
                    \$('.item-sender').removeClass('item-active')
                    \$(this).addClass('item-active')
                    caption =  \$(this).find(\"img\").attr('src')
                    switchcaption(caption, data)
                })
                
                // Traitement d'une piece jointe
                \$('input[name=\"pjointe\"]').on('change',function() {
                    var file = \$(this)[0].files[0]
                    var filename = file.name
                        var extension = filename.substr( (filename.lastIndexOf('.') +1) );
                        switch(extension) {
                            case 'jpg':
                            case 'png':
                            case 'gif':
                            case 'jpeg':
                                var img = document.createElement('img')
                                img.src = window.URL.createObjectURL(file);
                                img.style.width = '170px';
                                \$('.modal-body').html(img)
                                \$customBody()
                            break;                         
                            case 'zip':
                                \$customBody(link, 'Zip')
                            break;
                            case 'rar':
                                \$customBody(link, 'rar')
                            break;
                            case 'pdf':
                                var link = window.URL.createObjectURL(file)
                                \$customBody(link, 'pdf')
                            break;
                            case 'docx':
                                var link =  window.URL.createObjectURL(file)
                                \$customBody(link, 'docx')
                            break;
                            case 'doc':
                                var link =  window.URL.createObjectURL(file)
                                \$customBody(link, 'doc')
                            break;
                            default:
                                alert('format non pris en charge !');
                        }
                    
                })
                // fonction qui appel la modal après ajout de la pièce jointe
                \$customBody = (link =null, type = null)=> {
                            var corps =`<div>
                                                <div class='caption-pj'>
                                                    <div>
                                                        <i class=\"fas fa-paperclip\"></i>
                                                    </div>
                                                    <div>
                                                        <span> Pièce jointe: \${type} </span>
                                                        <a href='\${link}' target='blank'> <span> Cliquez pour ouvrir </span></a>
                                                    </div>
                                                </div>
                                            </div>`
                                if(null !== link) \$('.modal-body').html(corps)
                                \$('#exampleModalCenter').modal('show')
                    }
                // fin
                 \$('.fa-telegram-plane').on('click',()=> {
                    \$('form[name=\"chat\"]').submit(e=> {
                        e.preventDefault()
                    })
                    var message = \$('textarea').val()
                    if(message.trim('') == '') return
                    var corps = `<div class=\"mt-3 clearfix\">
                                <p class=\"text-center\" style=\"font-size: 12px\"> Maintenant </p>
                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                        <p> \${message} </p>
                                </div>
                            </div>`
                            \$('.push-message').append(corps)
                            var elem = document.getElementById('push-message');
                            elem.scrollTop = elem.scrollHeight;
                            \$('textarea').val('')
                })
                //fin
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messagerie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 751,  865 => 750,  853 => 747,  832 => 727,  829 => 725,  804 => 701,  784 => 683,  459 => 359,  442 => 343,  432 => 334,  430 => 333,  423 => 329,  415 => 323,  412 => 322,  410 => 321,  407 => 320,  402 => 316,  392 => 315,  73 => 5,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'profil' %}
{% block stylesheets %}
    <style>
    .container>section {
        margin-top: 5%
    }
    .alert-message h2 {
        font-size: 35px;
    }
    .alert-message p {
        padding-left: 253px;
        padding-right: 253px;
        font-size: 16px;
    }
    .card {
        height: 500px
    }
    .search-input {
        height: 35px;
        background: #ffffff;
        display: flex;
        border-bottom: 1px solid #f5f5f5;
    }
     .search-input input, .col-input-message input {
        border: none;
        outline: none !important;
        background: transparent
     }
     .search-input input::placeholder, .col-input-message input::placeholder {
        font-size: 12px
     }
     .search-input svg {
        flex: 1;
        margin: auto;
        font-size: 21px;
        color: #ddd;
     }
     .item-sender {
        display: flex;
        padding: 17px;
        padding-right: 0;
        position: relative
     }
     .item-sender:hover {
        background-color: #dddddd4a;
        cursor: pointer;
        transition: all .3s
     }
     .item-active {
         background-color: #dddddd4a;
     }
     .item-sender div:nth-of-type(2) {
             padding-left: 11px;
     }
     .item-sender .fa-trash {
            position: absolute;
            right: 0;
            margin-right: 14px;
            color: #8c8c8c;
            font-size: 14px;
     }
     .item-sender div:nth-of-type(2) p {
            margin: 0;
            font-size: 14px;
     }
     .item-sender div:nth-of-type(2) span {
            font-size: 11px;
            color: #22ffe2;
            font-family: 'Montserrat-semibold'
     }
     .card:hover {
         cursor: default !important;
         -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
     }
     .col-center-message {
         position: relative;
         border-radius: 0;
     }
     .col-input-message {
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
         height: 60px;
         background: #f3f3f3;
         display: flex
     }
     .col-input-message svg:first-child {
         margin-left: 31px;
        margin-right: 20px;
     }

     .col-input-message>div>svg{
        color: #ffffff;
        margin: auto;
     }
     .col-input-message svg {
         margin: auto
     }
      .col-input-message input {
          flex: 1;
          margin: auto
      }
     .col-input-message>div {
        display: flex;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #53c0b5;
        margin: auto;
        margin-right: 21px;
     }
     .col-right-message>div:nth-of-type(2) {
         padding: 20px;
     }
     .col-right-message>div:nth-of-type(2) h6 {
         color: #22ffe2;
         margin-top: 5px
     }
     .col-right-message>div:nth-of-type(2) p {
         margin-top: 5px;
         font-size: 11px;
     }
     .col-right-message {
         position: relative
     }
    
     .contacts, .contacts>div {
         display: flex
     }
     .contacts {
         position: absolute;
         bottom: 0;
         left: 0;
         right: 0;
        border-radius: 0 0 15px 15px;
        background: #f9f9f9;
     }
     .contacts>div {
         width: 100%;
         padding: 15px;
     }
     .contacts>div:first-child {
         border-right: 1px dotted #ddd;
     }
     .contacts>div svg {
             font-size: 15px;
             margin: auto
     }
     .contacts span {
         font-size: 10px
     }
     .contacts>div:hover {
         background: #f3f3f3;
        transition: all .3s;
        cursor: pointer
     }
     .fa-paperclip:hover {
         cursor: pointer
     }
     .caption {
         width: 70px;
         height: 70px;
         border-radius: 50%;
         background-position: center;
         background-size: cover;
         background-repeat: no-repeat;
     }
     .push-message .row {
         margin: 0;
         margin-top: 11px;
     }
     .col-message {
         display: flex
     }
     .message-view {
        background-color: #00BFA6;
        font-size: 12px;
     }
     .message-bulb-left {
         border-radius: 0 10px 10px 10px;
     }
       .message-bulb-right {
         border-radius: 10px 0px 10px 10px;
         background-color: #7097bf;
     }
     .message-view p {
         color: #fff;
         margin-bottom: 0 !important;
     }
     .col-input-message>div:first-child:hover {
         background-color: #3f9c93;
         transition: all .3s
     }
     .caption-pj {
        display: flex;
        width: fit-content;
        padding-right: 22px;
        border: 1px solid #ddd;
        background: #fff;
     }
     .caption-pj>div:first-child {
         background: rgba(0, 123, 255, 0.25);
        padding: 20px;
     }
     .caption-pj>div:last-child {
         display: grid;
         margin-left: 41px;
         margin-top: auto;
         margin-bottom: auto;
     }
      .caption-pj>div:last-child span{
            font-size: 13px;
            font-weight: bold;
            font-family: 'Montserrat-semibold';
     }
     .modal-body>div:first-child {
            background: #eefffb;
            padding: 6px;
     }
     .ms-body {
         display: grid
     }
     #push-message::-webkit-scrollbar-track, section.list::-webkit-scrollbar-track
{
\t-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
\tbackground-color: #CCCCCC;
}

#push-message::-webkit-scrollbar, section.list::-webkit-scrollbar
{
\twidth: 3px;
\tbackground-color: #F5F5F5;
}
.col-left-message {
    border-radius: 0 !important
}
#push-message::-webkit-scrollbar-thumb, section.list::-webkit-scrollbar-thumb
{
\tbackground-color: #17e2c7;
    background-image: -webkit-linear-gradient(90deg, #f4fffe 0%, #00bfa630 25%, #53c0b5 100%, #a4f7ec85 75%, #c0ece8);
}
.fr-suject {
    padding: 10px;
    box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 1px 0px 8px 0 rgba(26,26,26,.12);
}
.fr-suject h4 {
    font-size: 15px;
    margin: auto;
    margin-left: 0;
}
.item-sender>div:first-child {
    border-radius: 50%;
    overflow: hidden;
    width: 65px;
    height: 65px;
}
.caption-pr {
    width: 50px;
    height: 50px;
    border-radius: 15%;
    overflow: hidden;
}
.caption-pr img {
    width: 50px;
}
.fr-suject .d-grid {
    margin-right: 21px;
}
.fr-suject .d-grid span {
    float: right;
    color: #53c0b5;
    font-family: 'montserrat-semibold';
    padding-top: 6px
}
textarea[name=message] {
    width: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
    border: none;
    margin-right: 20px;
    flex: 1;
    resize: none;
}
textarea[name=message]::placeholder {
    font-size: 13px;
    padding: 3px
}
textarea[name=message]:focus {
    outline-color: #53c0b5;
}
.chat {
    display: none
}
.chat-1 {
    display: block
}
.not-find {
    display: none;
    margin-top: 1rem;
}
.not-find h3 {
    font-size: 13px !important;
    text-align: center;
    color: #d2d2d2;
}
section.list {
    overflow: auto;
}
</style>
{% endblock %}
{% block body %}
    <div class=\"container\">
       <section>
            <div class=\"row\">
            {# (simulation) Ajouter une valeur au tableau pour afficher la messagerie. Exemple message = [1], cet object representera les messages de l'utilisateur dans le controller  #}
            {% set message = []  %}
            {# vous pourez remplacer la variable message par la l'objet des messages dan le controller #}
                {% if message|length > 0 %}
                    <div class=\"col-md-12 alert-message\" style=\"text-align: center\">
                    
                        <h2 syle=\"text-align: center\"> Bienvenue sur votre messagerie ! </h2>
                        <p>
                            Simple et rapide, elle vous permet d’échanger avec les personnes sur un projet. La mise en relation s’effectue toujours depuis une annonce en cliquant sur \"Envoyer un message\"
                        </p>
                        <img src=\"{{ asset('build/images/web/panel.png') }}\" style=\"width: 70%\">
                    
                    </div>
                    {% else %}
                    {# ici s'affiche la messaherie au cas où le user a des messages #}
                        <div class=\"col-md-12\" >
                                <div class=\"row\">
                                        <div class=\"col-md-3 pr-0\">
                                                <div class=\"card col-left-message\" id=\"hacker-list\">
                                                    <div class=\"search-input\">
                                                        <i class=\"fas fa-search\"></i>
                                                        <input class=\"search\" type=\"text\" placeholder=\"Recherche...\"/>
                                                    </div>
                                                    {# l' items-sender sera une boucle des gens avec qui le user est entré en conversation. #}
                                                    <section class=\"list\">
                                                        <div class=\"item-sender item-active\" id=\"chat-1\">
                                                                <div class=\"w-65;h-65\" data-name=\"Caroline\" data-inline=\"il y a 3 minutes\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                    <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')\" width=\"65\">
                                                                </div>
                                                                
                                                                <div>
                                                                    <h6 class=\"name\"> Caroline </h6>
                                                                    <p>
                                                                        J'aimerai sa...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                        {# fin de la boucle #}
                                                        <div class=\"item-sender\" id=\"chat-2\">
                                                                <div class=\"w-65;h-65\"  data-name=\"Thomas\" data-inline=\"il y a 1 minutes\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                    <img  src=\"https://images.pexels.com/photos/751546/pexels-photo-751546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> Thomas </h6>
                                                                    <p>
                                                                        Bonjour. Vo...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>

                                                        <div class=\"item-sender\" id=\"chat-3\">
                                                                <div class=\"w-65;h-65\" data-name=\"GM\" data-inline=\"il y a 2 jours\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> GM </h6>
                                                                    <p>
                                                                        Ce projet e...
                                                                    </p>
                                                                    <span> il y a 2 jours </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>

                                                        <div class=\"item-sender\" id=\"chat-4\">
                                                                <div class=\"w-65;h-65\" data-name=\"CPoy\" data-inline=\"il y a 4 heures\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/4117419/pexels-photo-4117419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> CPoy </h6>
                                                                    <p>
                                                                        Pouvez-vous...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                        <div class=\"item-sender\" id=\"chat-5\">
                                                                <div class=\"w-65;h-65\" data-name=\"Labalette\" data-inline=\"il y a 4 heures\"  data-prix=\"2750€/m²\" data-projet=\"Bascule-Pelouse\">
                                                                        <img src=\"https://images.pexels.com/photos/4117419/pexels-photo-4117419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                                </div>
                                                                <div>
                                                                    <h6 class=\"name\"> Labalette </h6>
                                                                    <p>
                                                                        Pouvez-vous...
                                                                    </p>
                                                                    <span> il y a 1 min </span>
                                                                </div>
                                                                <i class=\"fas fa-trash\" data-toggle=\"modal\" data-target=\"#modal-supp\"></i>
                                                        </div>
                                                    </section>
                                                    <div class=\"not-find\">
                                                            <h3> Aucune discution trouvée... </h3>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class=\"col-md-9 pl-0\">
                                                <div class=\"card col-center-message\">
                                                    <div class=\"fr-suject d-flex\">
                                                        <h4> Léa poitier </h4>
                                                        <div class=\"d-flex\">
                                                            <div class=\"d-grid\">
                                                                <h4 style=\"color: #7d7d7d\"> Bascule-Pelouse </h4>
                                                                <span> 2500 €/m2 </span>
                                                            </div>
                                                            <div class=\"caption-pr\">
                                                                    <img  src=\"https://images.pexels.com/photos/751546/pexels-photo-751546.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" width=\"65\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"push-message pb-4\" id=\"push-message\">
                                                        <section class=\"chat chat-1\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 29 août, 12:48</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                                                        <p> Nous habitons Saint-Ferjeux, en locatif et nous nous intéressons depuis plusieurs années à l'habitat participatif. Est-il possible d'avoir des infos sur le groupe ? Nous sommes une famille franco-espagnole avec deux adultes et deux enfants de 2 et 4 ans. Au plaisir d'avoir davantage d'informations, Caroline </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\">29 août, 13:56</p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                        <p> L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribués, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix au m2 des logements (donc inclus dans les 2750€).
                                                                <br>
                                                                <br>
                                                                Pour plus d'informations, je vous propose de consulter notre page projet si vous ne l’avez pas encore vu : https://lescityzens.fr/habitat-participatif/projet/7. Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Je reste bien entendu disponible pour répondre à toutes vos questions. 
                                                                <br>
                                                                Très belle journée, 
                                                                <br>
                                                                <br>
                                                                Laura Morvan 
                                                                <br>
                                                                <br>
                                                                Chargée de projet participatif chez LesCityZens
                                                                </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">10 sept, 07:01</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                                                    <div class=\"ms-body\">
                                                                        <img src=\"https://images.pexels.com/photos/736414/pexels-photo-736414.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" style=\"width: 170px;\">
                                                                        <p class=\"pt-2\"> J'aimerai savoir d'avantage sur s'il est obligatoire d'apporter le montant réquis en espèce ou cela doit se faire par chèque.  </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">15 sept, 15:17</p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3 p-2 float-right\">
                                                                    <div class=\"ms-body\">
                                                                        <div>
                                                                            <div class=\"caption-pj\">
                                                                                <div>
                                                                                    <i class=\"fas fa-paperclip\"></i>
                                                                                </div>
                                                                                <div>
                                                                                    <span> Pièce jointe: pdf </span>
                                                                                    <a href=\"#\" target=\"blank\"> <span> Cliquez pour ouvrir </span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <p class=\"pt-2\"> SAINT-FERJEUX J-3 ! La prochaine réunion d’information pour notre projet d’habitat participatif à Besançon est JEUDI ! RDV le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux, 1 avenue Ducat. Cette réunion publique est ouverte à tous celles et ceux qui sont intéressés par le projet ou souhaitent simplement en savoir plus sur l’habitat participatif. À très vite ! </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-2\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 11 août, 22:15 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> Bonjour, 

                                                                            Nous sommes très intéressés par le concept d'habitat participatif et par ce projet et souhaiterions obtenir plus d'information. Nous sommes tout juste retraités, actuellement en recherche d'un appartement sur Besançon et ce projet nous correspond tout-à-fait.
                                                                            <br>
                                                                            Nous souhaiterions assister à votre prochaine réunion ou vous rencontrer. Pouvez-vous nous rappeler au 03 81 58 09 16 ou nous envoyer un mail ? 
                                                                            <br><br>
                                                                            Merci d'avance et à bientôt. 
                                                                            <br><br>
                                                                            Catherine et Michel 
</p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-3\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\">15 sept, 08:45</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                            Bonjour, 

                                                                        Je découvre votre annonce et je ne connais pas ce type d'habitat De plus, pas de plan, de lieu et de prix. Qui peut bénéficier de ce nouveau projet Je souhaiterais avoir des informations complémentaires. 
                                                                        <br>
                                                                        <br>
                                                                        Bien cordialement 
                                                                        <br>
                                                                        <br>
                                                                        Grabli Mukendi
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 23 août, 18:23 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Si vous n’êtes pas familiers avec le concept d’habitat participatif, l'idée est que contrairement a une opération immobilière classique où le promoteur monte une opération et vend les logements sur plans une fois ceux-ci achevés, dans l'habitat participatif, les acquéreurs sont recrutés au tout début du projet avant sa conception. Du coup, les acquéreurs participent activement à la programmation, à la conception et aux différents choix qu'il y a à faire concernant l'opération aussi bien par rapport aux logements individuels qu'aux espaces communs partagés, en collaborant avec le promoteur et les architectes. Au delà du principe de participer à la conception de son logement au sens large (aussi bien dans la programmation et l'aménagement des différents espaces que dans l'imagination de la vie de voisinage), l'habitat participatif vise à permettre une autre manière d'habiter, plus près de ses besoins, souvent plus durable (c'est dans ce genre de projet que vous pouvez faire le choix d'un logement vraiment écologique par exemple), mais surtout avec une vraie vie de voisinage, de communauté. Les espaces communs et les services partagés sont un point central de ce genre d'opération et ils peuvent être extrêmement variés (salle commune, cuisine ou laverie partagées, atelier de bricolage, salle de sport, de musique, local pour accueillir des événements, des associations, organiser des activités, jardin, terrasse ou potager partagés, service de voitures partagées, espaces de stockage, partage d'équipements comme des outils, des jeux, de l'électroménager type appareil à raclette, etc.). Les possibilités sont infinies et ne dépendent que des envies du groupe.

<br>
<br>
L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribué, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix au m2 des logements (donc inclus dans les 2750€).
Pour plus d'informations, je vous propose de consulter notre page projet si vous ne l’avez pas encore vu : https://lescityzens.fr/habitat-participatif/projet/7.  Nous organisons une nouvelle réunion d'information à la rentrée : le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet. Si vous le souhaitez, nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies, etc.  Je reste bien entendu disponible pour répondre à toutes vos questions.
<br>
<br>
Très belle journée,
<br>
<br>
Laura Morvan
<br>
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section class=\"chat chat-4\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 18 mars, 20:36</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
<br>
<br>
Je suis intéressé par le projet d'habitat partagé. J'aurais voulu savoir où en était le projet ? Si vous aviez déjà des plans d'habitation, une idée des prix, etc. Dans tous les cas je suis intéressé pour participer à une réunion d'info (quand on aura le droit de se réunir !).
<br>
<br>
Merci Cyrille
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 19 mars, 10:26 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour,
<br>
<br>
L'opération d'habitat participatif vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé (dans le planning initial, ils devaient débuter en mai, nous ajusterons selon l'évolution du contexte actuel). Aucun logement n'a encore été attribués, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par les ménages.
<br>
Pour plus d'informations, je vous propose de consulter notre page projet : https://www.lescityzens.fr/habitat-participatif/projet/7. La prochaine réunion d'information prévue le 16 avril, à moins d'un miracle, va être décalée. Nous vous tiendrons au courant de sa prochaine date. Vous trouverez évidemment toutes ces informations sur la page projet que nous mettons à jour régulièrement. Si vous le souhaitez en plus, je peux vous ajouter à notre mailing liste de personnes intéressées par le projet, comme ça vous recevrez directement par mail les nouvelles du projet et notamment la date de la prochaine réunion ? Je reste bien entendu disponible pour répondre à toutes questions supplémentaires que vous pourriez avoir. 
<br>
<br>
Bonne journée, 

Laura Morvan pour LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 18 mars, 20:36</p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
<br>
<br>
Bonjour, merci pour toutes ces informations. la réunion d'info du 16 avril étant certainement décalée je veux bien être ajoutée à la newsletters pour avoir les prochaines infos. 
<br>
<br>
Merci Cyrille
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 20 juin, 18:50 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour,
<br>
<br>
Après cette période un peu compliquée qui nous a obligé à mettre en stand-bye le projet pendant un temps, nous avons le plaisir de vous annoncer que nous reprenons officiellement toutes nos activités normalement et relançons de plus bel le recrutement pour le projet d’habitat participatif de Saint-Ferjeux.
<br>
<br>
Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet (cf le lien ci-dessus). Si vous le souhaitez, nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies, etc. Je reste bien entendu disponible pour répondre à toutes vos questions. 
<br>
<br>
Très belle journée, 
<br>
<br>
Laura Morvan 
<br>
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <section class=\"chat chat-5\">
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 13 mars, 14:43 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
                                                                        Bonjour ! 
Bonjour,
<br>
Je souhaiterais avoir plus de précisions sur la lieu de construction, pouvez vous me préciser l’adresse et me fournir de plus amples renseignements au sujet de l’ensemble du projet. <br>
Merci, je vous adresse mes meilleures salutations. <br> <br>
Marie Labalette Téléphone: 06XXXXXXXX
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 19 mars, 10:26 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
                                                                        Bonjour, 
                                                                        <br>
                                                                        <br>
                                                                        Le projet d’habitat participatif s’inscrit dans le cadre d’un projet d'aménagement plus vaste, localisé dans le quartier Saint-Ferjeux, entre la place de la Bascule et la rue de la Pelouse, sur le terrain de l’ancienne école de la Pelouse. Pour plus d'informations, je vous propose de consulter notre page projet : https://www.lescityzens.fr/habitat-participatif/projet/7. Je reste bien entendu disponible pour répondre à vos interrogations. 
                                                                        <br>
                                                                        Vous souhaitant une bonne fin de semaine, 
                                                                        <br>
                                                                        <br>
                                                                        Laura Morvan pour LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                <p class=\"text-center\" style=\"font-size: 12px\"> 13 mars, 15:08 </p>
                                                                <div class=\"message-view w-50 message-bulb-left ml-3  p-2\" >
                                                                        <p> 
Je suis intéressée par le projet, pouvez-vous avoir la gentillesse de me tenir informée, cordialement,
<br>
<br>
Mme Labalette 06XXXXXXXX
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class=\"mt-3 clearfix\">
                                                                    <p class=\"text-center\" style=\"font-size: 12px\"> 20 juin, 18:50 </p>
                                                                <div class=\"message-view w-50 message-bulb-right mr-3  p-2 float-right\" >
                                                                    <p>
 Bonjour,
<br>
<br>
Après cette période un peu compliquée qui a mis en stand-bye le projet, nous avons le plaisir de vous annoncer que nous reprenons officiellement toutes nos activités normalement et relançons de plus bel le recrutement pour le projet d’habitat participatif de Saint-Ferjeux.
<br>
<br>
Une réunion d'information se tiendra le 17 septembre à 18h30 à la maison de quartier Rosemont-Saint-Ferjeux. Mais il est tout à fait possible de candidater au projet pour intégrer le groupe d’acquéreurs dès maintenant. Donc si vous êtes intéressés, n’hésitez pas à remplir le formulaire de candidature en ligne sur notre page projet. Nous pouvons aussi fixer un rendez-vous téléphonique ou en visioconférence pour discuter plus amplement du projet Bascule-Pelouse, de votre projet personnel, de vos besoins, envies... et de votre intégration au groupe. Je reste bien entendu disponible pour répondre à toutes vos questions. 
<br>
<br>
Très belle journée, 
<br>
<br>
Laura Morvan 
<br>
Chargée de projet participatif chez LesCityZens
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    {# la form sera remplacé  #}
                                                    <form name=\"chat\">
                                                        <input type=\"hidden\" name=\"id-user\" value=\"[id de l'user]\">
                                                        <input type=\"file\" name=\"pjointe\" style=\"display: none\">
                                                        <div class=\"col-input-message d-flex\">
                                                            <i class=\"fas fa-paperclip\"></i>
                                                            <textarea class=\"p-1\" type=\"text\" name=\"message\" placeholder=\"Ecrivez votre message...\"></textarea>
                                                            <div style=\"cursor: pointer\">
                                                                <i class=\"fab fa-telegram-plane\" style=\"margin: auto\"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                        
                                </div>
                        </div>

                {% endif %}
            </div>
            <!-- Modal piece jointe-->
                    <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Aperçu de votre envoi</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\"></div>
                            
                        
                        <div class=\"modal-footer\">
                            <div style=\"flex: 1;\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Commentez votre pièce jointe...\">
                            </div>
                            <button type=\"button\" class=\"btn btn-primary\">Envoyer</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    {# fin modal #}

                    {# Modal de suppression #}
                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"modal-supp\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h6 class=\"modal-title\" id=\"exampleModalLongTitle\">Voulez-vous supprimer cette conversation ?</h6>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary\">Supprimer</button>
                            </div>
                            </div>
                        </div>
                        </div>


                    {# fin #}
       </section>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/list.min.js') }}\"></script>
        <script>
            \$(function() {
                    var options = {
                    valueNames: ['name']
                    };

                    var hackerList = new List('hacker-list', options)
                    .on('searchComplete', function(\$e) {
                        let visibleItem = hackerList.visibleItems
                        console.log('visibleItem ', visibleItem.length)
                        if(visibleItem.length <= 0) {
                            \$('.not-find').show()
                        } else {
                            \$('.not-find').hide()
                        }
                        console.log('\$e ', hackerList)
                    } )

                \$('.col-left-message .item-sender').on('click', function() {
                    let id = \$(this).attr('id')
                    console.log('id ', id)
                    \$('.chat').hide()
                    \$(\".\"+id).show()
                })
                
                let hauteur = \$('.col-center-message').height() - \$('.col-input-message').height() -  \$('.fr-suject').height()
                \$('.push-message').css({'height': hauteur + 'px', 'overflow-y': 'auto'})
                var item = \$('.item-active>div:first-child')
                var data = item.data()
                var caption = item.find('img').attr('src')
                
                switchcaption = (caption, data)=> {
                    let \$this = \$('.fr-suject')
                    \$('.caption-pr').find('img').attr('src', caption)
                    \$this
                    .find('.d-grid h4').html(data.projet)
                    \$('.fr-suject>h4').html(data.name)
                    \$this.find('.d-grid span').html(data.prix)
                }
                \$('.fa-paperclip').on('click',()=> {
                    \$('input[name=\"pjointe\"]').click()
                })
                switchcaption(caption, data)

                \$('.item-sender').on('click', function() {
                    \$this= \$(this).find(\">:first-child\")
                    console.log('alldata ', \$this.data())
                    var data = \$this.data()
                    \$('.item-sender').removeClass('item-active')
                    \$(this).addClass('item-active')
                    caption =  \$(this).find(\"img\").attr('src')
                    switchcaption(caption, data)
                })
                
                // Traitement d'une piece jointe
                \$('input[name=\"pjointe\"]').on('change',function() {
                    var file = \$(this)[0].files[0]
                    var filename = file.name
                        var extension = filename.substr( (filename.lastIndexOf('.') +1) );
                        switch(extension) {
                            case 'jpg':
                            case 'png':
                            case 'gif':
                            case 'jpeg':
                                var img = document.createElement('img')
                                img.src = window.URL.createObjectURL(file);
                                img.style.width = '170px';
                                \$('.modal-body').html(img)
                                \$customBody()
                            break;                         
                            case 'zip':
                                \$customBody(link, 'Zip')
                            break;
                            case 'rar':
                                \$customBody(link, 'rar')
                            break;
                            case 'pdf':
                                var link = window.URL.createObjectURL(file)
                                \$customBody(link, 'pdf')
                            break;
                            case 'docx':
                                var link =  window.URL.createObjectURL(file)
                                \$customBody(link, 'docx')
                            break;
                            case 'doc':
                                var link =  window.URL.createObjectURL(file)
                                \$customBody(link, 'doc')
                            break;
                            default:
                                alert('format non pris en charge !');
                        }
                    
                })
                // fonction qui appel la modal après ajout de la pièce jointe
                \$customBody = (link =null, type = null)=> {
                            var corps =`<div>
                                                <div class='caption-pj'>
                                                    <div>
                                                        <i class=\"fas fa-paperclip\"></i>
                                                    </div>
                                                    <div>
                                                        <span> Pièce jointe: \${type} </span>
                                                        <a href='\${link}' target='blank'> <span> Cliquez pour ouvrir </span></a>
                                                    </div>
                                                </div>
                                            </div>`
                                if(null !== link) \$('.modal-body').html(corps)
                                \$('#exampleModalCenter').modal('show')
                    }
                // fin
                 \$('.fa-telegram-plane').on('click',()=> {
                    \$('form[name=\"chat\"]').submit(e=> {
                        e.preventDefault()
                    })
                    var message = \$('textarea').val()
                    if(message.trim('') == '') return
                    var corps = `<div class=\"mt-3 clearfix\">
                                <p class=\"text-center\" style=\"font-size: 12px\"> Maintenant </p>
                                <div class=\"message-view w-50 message-bulb-left ml-3 p-2\">
                                        <p> \${message} </p>
                                </div>
                            </div>`
                            \$('.push-message').append(corps)
                            var elem = document.getElementById('push-message');
                            elem.scrollTop = elem.scrollHeight;
                            \$('textarea').val('')
                })
                //fin
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        </script>
    {% endblock %}", "messagerie/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/messagerie/index.html.twig");
    }
}
