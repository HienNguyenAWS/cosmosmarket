<?php

/* __string_template__a10af1eddb5f8ed575af82e589f7ffd0a0e0a92376aa67dda7f3964a5a3bf33b */
class __TwigTemplate_71ac3617f6f139d4c7ef0abc574adb68251d43070aa65cefa48e213d6ae73592 extends Twig_Template
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
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">Khuyến mãi</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.title__ja"), "html", null, true);
        echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.more"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "12"]);
        echo "\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0829135908_612b303cdefec.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">Nước hoa victoria secret very sexy 100ml</p>
                    
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "13"]);
        echo "\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0829142000_612b3520e92b9.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">Combo Tắm mist lotion bath & body works</p>
                    
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 38
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "09"]);
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0826130521_61272f21173f6.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">Nước rửa tay - Bath & Body Works (259ml)</p>
                    
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a10af1eddb5f8ed575af82e589f7ffd0a0e0a92376aa67dda7f3964a5a3bf33b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 39,  72 => 38,  63 => 32,  59 => 31,  50 => 25,  46 => 24,  37 => 20,  33 => 19,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__a10af1eddb5f8ed575af82e589f7ffd0a0e0a92376aa67dda7f3964a5a3bf33b", "");
    }
}
