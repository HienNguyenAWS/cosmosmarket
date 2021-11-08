<?php

/* __string_template__fca70cdb3e4caa114aea1562df1522034d08803f82d9a3e816081f9ab887368a */
class __TwigTemplate_f95433820b9def60c115990d9fa5c6e154c7943ca48c1fbf45aa12a6aa18de16 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__fca70cdb3e4caa114aea1562df1522034d08803f82d9a3e816081f9ab887368a", 11);
        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        // line 18
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/postalcode.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
";
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        // line 22
        echo "
<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.nonmember"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 30
        $context["step"] = 1;
        // line 31
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 32
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 33
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__cart_items"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 38
            echo "                    <li class=\"ec-progress__item is-complete\">
                        <div class=\"ec-progress__number\">";
            // line 39
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 40
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__customer_info"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 45
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 47
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__order"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 52
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 53
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__confirm"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 59
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.cart.nav__complete"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"";
        // line 69
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_nonmember");
        echo "\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", []), 'widget');
        echo "
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.name"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 78
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name01", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name02", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name01", []), 'widget', ["attr" => ["placeholder" => "common.last_name"]]);
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name02", []), 'widget', ["attr" => ["placeholder" => "common.first_name"]]);
        echo "
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name01", []), 'errors');
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), "name02", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", []), "kana01", []), 'widget', ["type" => "hidden", "value" => "カナ"]);
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", []), "kana02", []), 'widget', ["type" => "hidden", "value" => "カナ"]);
        echo "
                <dl>
                    <dt>
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.company_name"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 93
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", []), 'widget');
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", []), 'label');
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-zipInput";
        // line 104
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", []))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo "</span>
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", []), 'widget');
        echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div><a href=\"";
        // line 111
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_postalcode");
        echo "\" target=\"_blank\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.search_postal_code"), "html", null, true);
        echo "</span></a>
                            </div>
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.address"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-select";
        // line 122
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "pref", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "pref", []), 'widget');
        echo "
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "pref", []), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 126
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr01", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr01", []), 'widget', ["attr" => ["placeholder" => "common.address_sample_01"]]);
        echo "
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr01", []), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 130
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr02", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr02", []), 'widget', ["attr" => ["placeholder" => "common.address_sample_02"]]);
        echo "
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", []), "addr02", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.phone_number"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-telInput";
        // line 141
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", []), 'widget');
        echo "
                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.mail_address"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-input";
        // line 152
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "first", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "first", []), 'widget', ["attr" => ["placeholder" => "common.mail_address_sample"]]);
        echo "
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "first", []), 'errors');
        echo "
                        </div>
                        <div class=\"ec-input";
        // line 156
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "second", []))) ? (" error") : (""));
        echo "\">
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "second", []), 'widget', ["attr" => ["placeholder" => "common.repeated_confirm"]]);
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", []), "second", []), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.next"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 167
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fca70cdb3e4caa114aea1562df1522034d08803f82d9a3e816081f9ab887368a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 167,  370 => 166,  359 => 158,  355 => 157,  351 => 156,  346 => 154,  342 => 153,  338 => 152,  332 => 149,  323 => 143,  319 => 142,  315 => 141,  309 => 138,  300 => 132,  296 => 131,  292 => 130,  287 => 128,  283 => 127,  279 => 126,  274 => 124,  270 => 123,  266 => 122,  260 => 119,  251 => 113,  244 => 111,  239 => 109,  232 => 105,  226 => 104,  220 => 101,  211 => 95,  207 => 94,  203 => 93,  197 => 90,  191 => 87,  187 => 86,  180 => 82,  176 => 81,  172 => 80,  168 => 79,  164 => 78,  158 => 75,  151 => 71,  146 => 69,  134 => 60,  131 => 59,  128 => 58,  121 => 54,  118 => 53,  115 => 52,  108 => 48,  105 => 47,  102 => 46,  99 => 45,  92 => 41,  89 => 40,  86 => 39,  83 => 38,  81 => 37,  75 => 34,  72 => 33,  69 => 32,  66 => 31,  64 => 30,  56 => 25,  51 => 22,  48 => 21,  41 => 18,  38 => 17,  34 => 11,  32 => 15,  30 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fca70cdb3e4caa114aea1562df1522034d08803f82d9a3e816081f9ab887368a", "");
    }
}
