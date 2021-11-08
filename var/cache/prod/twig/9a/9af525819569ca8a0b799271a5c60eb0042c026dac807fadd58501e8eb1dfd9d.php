<?php

/* __string_template__ecd684bec2ca2ca7614bd5cbafd7af09dca33d4e268736b9a53ec376f1686183 */
class __TwigTemplate_4217bd0cc6f98003a6f86f829d2faa643ce25fa5f0d802f8fa5a38bb694ac1d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-eyecatchRole\">
        <div class=\"ec-eyecatchRole__image\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_about.jpg"), "html", null, true);
        echo "\" alt=\"\" role=\"presentation\"/>
        </div>
        <div class=\"ec-eyecatchRole__intro\">
            
            <p class=\"ec-eyecatchRole__introTitle\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.title__ja"), "html", null, true);
        echo "</p>
            <p class=\"ec-eyecatchRole__introDescriptiron\">";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.descriptiron"), "html", null, true));
        echo "</p>
            <a class=\"ec-blockBtn--top\" href=\"http://cosmosmarket.vn/help/about\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.eyecatch.view_list"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__ecd684bec2ca2ca7614bd5cbafd7af09dca33d4e268736b9a53ec376f1686183";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  40 => 20,  36 => 19,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ecd684bec2ca2ca7614bd5cbafd7af09dca33d4e268736b9a53ec376f1686183", "");
    }
}
