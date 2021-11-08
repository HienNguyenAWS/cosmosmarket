<?php

/* __string_template__d8b7c4118d8dd4f68d46b45e7813758e0ec8c0a32e3921057997c91ab9011f4f */
class __TwigTemplate_91c57db20af59ec6c5c5a89ed66e5b90eb488d57e37d6fd968199f3c3db1b680 extends Twig_Template
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
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method");
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $context["__internal_69285fa80f8ed46f41570b8a3e30eb664fbd333da2b69d3bca64d53370e88d41"] = $this;
        // line 31
        echo "
<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            <li><a href=\"http://cosmosmarket.vn/\">TRANG CHỦ</a></li>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 37
            echo "                <li>
                    ";
            // line 38
            echo $context["__internal_69285fa80f8ed46f41570b8a3e30eb664fbd333da2b69d3bca64d53370e88d41"]->macro_tree($context["Category"]);
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            <li><a href=\"http://cosmosmarket.vn/help/about\">LIÊN HỆ</a></li>
        </ul>
    </div>
</div>";
    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 14
            echo "    ";
            $context["__internal_50628ebfbdb202c20286590ee088d6abbc037e1ae3e61b84f59f16925409a43c"] = $this;
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", []), "html", null, true);
            echo "
    </a>
    ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [])) > 0)) {
                // line 19
                echo "        <ul>
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "                <li>
                    ";
                    // line 22
                    echo $context["__internal_50628ebfbdb202c20286590ee088d6abbc037e1ae3e61b84f59f16925409a43c"]->macro_tree($context["ChildCategory"]);
                    echo "
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </ul>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "__string_template__d8b7c4118d8dd4f68d46b45e7813758e0ec8c0a32e3921057997c91ab9011f4f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  102 => 22,  99 => 21,  95 => 20,  92 => 19,  90 => 18,  85 => 16,  78 => 15,  75 => 14,  63 => 13,  56 => 41,  47 => 38,  44 => 37,  40 => 36,  33 => 31,  31 => 30,  28 => 28,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d8b7c4118d8dd4f68d46b45e7813758e0ec8c0a32e3921057997c91ab9011f4f", "");
    }
}
