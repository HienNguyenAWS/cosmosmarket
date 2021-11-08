<?php

/* __string_template__fbd5ee855225b823d3495bcb02a1894313e744e9b3b7dd57755e6470ca64ff71 */
class __TwigTemplate_06b347f4d54a68e699604c58ba8a06a03b39d5a84023aef6efbe364a4a5b73a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__fbd5ee855225b823d3495bcb02a1894313e744e9b3b7dd57755e6470ca64ff71", 11);
        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["body_class"] = "front_page";
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        // line 16
        echo "    <style>
        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }
    </style>
";
    }

    // line 93
    public function block_javascript($context, array $blocks = [])
    {
        // line 94
        echo "    <script>
        \$(function() {
            \$('.main_visual').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                speed: 300
            });
        });
    </script>
";
    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        // line 107
        echo "    <div class=\"ec-sliderRole\">
        <div class=\"main_visual\">
            <div class=\"item slick-slide\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_hero_pc01.jpg"), "html", null, true);
        echo "\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_hero_pc02.jpg"), "html", null, true);
        echo "\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_hero_pc03.jpg"), "html", null, true);
        echo "\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_hero_pc04.jpg"), "html", null, true);
        echo "\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_hero_pc05.jpg"), "html", null, true);
        echo "\"></div>
           
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__fbd5ee855225b823d3495bcb02a1894313e744e9b3b7dd57755e6470ca64ff71";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 113,  155 => 112,  151 => 111,  147 => 110,  143 => 109,  139 => 107,  136 => 106,  122 => 94,  119 => 93,  40 => 16,  37 => 15,  33 => 11,  31 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__fbd5ee855225b823d3495bcb02a1894313e744e9b3b7dd57755e6470ca64ff71", "");
    }
}
