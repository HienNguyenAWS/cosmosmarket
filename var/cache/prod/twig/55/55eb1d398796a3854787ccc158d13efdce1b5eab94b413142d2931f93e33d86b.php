<?php

/* __string_template__67845f0403cda6d09ab433405d3248daf609e47c2333febf19f231c8dd595f9c */
class __TwigTemplate_2e5b3be2a44d83cb39ad1ddd3a9ca353098342f37fc6854aeb179f501217f241 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__67845f0403cda6d09ab433405d3248daf609e47c2333febf19f231c8dd595f9c", 11);
        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        // line 16
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.login"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-grid3\">

            <div class=\"ec-grid3__cell2\">
                <form name=\"shopping_login\" id=\"shopping_login\" method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_login");
        echo "\">
                    <input type=\"hidden\" name=\"_target_path\" value=\"shopping\" />
                    <input type=\"hidden\" name=\"_failure_path\" value=\"shopping_login\" />
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                    <div class=\"ec-login\">
                        <div class=\"ec-login__icon\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <div class=\"ec-login__input\">
                            <div class=\"ec-input\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_email", []), 'widget', ["attr" => ["style" => "ime-mode: disabled;", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.mail_address"), "autofocus" => true]]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_pass", []), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.password")]]);
        echo "
                            </div>
                            ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_remember_me", [])) {
            // line 41
            echo "                            <div class=\"ec-checkbox\">
                                <label>
                                    ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 44
                echo "                                        <input type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 46
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_memory", []), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.remember_me")]);
                echo "
                                    ";
            }
            // line 48
            echo "                                </label>
                            </div>
                            ";
        }
        // line 51
        echo "                        </div>
                        ";
        // line 52
        if (($context["error"] ?? null)) {
            // line 53
            echo "                            <p class=\"ec-errorMessage\">";
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", []), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", []), "validators"), "html", null, true));
            echo "</p>
                        ";
        }
        // line 55
        echo "                        <div class=\"ec-grid2\">
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__actions\">
                                    <button type=\"submit\" class=\"ec-blockBtn--cancel\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.login"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            <div class=\"ec-grid2__cell\">
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 62
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("forgot");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.forgot_login"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"ec-login__link\"><a class=\"ec-link\" href=\"";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("entry");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.signup"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            ";
        // line 72
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            // line 73
            echo "                <div class=\"ec-grid3__cell\">
                    <div class=\"ec-guest\">
                        <div class=\"ec-guest__inner\">
                            <p>";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.guest_purchase_message"), "html", null, true);
            echo "</p>
                            <div class=\"ec-guest__actions\"><a class=\"ec-blockBtn--cancel\" href=\"";
            // line 77
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_nonmember");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.guest_purchase"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 83
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__67845f0403cda6d09ab433405d3248daf609e47c2333febf19f231c8dd595f9c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 83,  159 => 77,  155 => 76,  150 => 73,  148 => 72,  135 => 64,  128 => 62,  121 => 58,  116 => 55,  110 => 53,  108 => 52,  105 => 51,  100 => 48,  94 => 46,  90 => 44,  88 => 43,  84 => 41,  82 => 40,  77 => 38,  73 => 37,  66 => 33,  60 => 30,  54 => 27,  43 => 19,  38 => 16,  35 => 15,  31 => 11,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__67845f0403cda6d09ab433405d3248daf609e47c2333febf19f231c8dd595f9c", "");
    }
}
