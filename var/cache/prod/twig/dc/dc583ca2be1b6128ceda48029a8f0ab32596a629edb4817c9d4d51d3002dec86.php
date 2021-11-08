<?php

/* @ghtk/admin/product_edit.twig */
class __TwigTemplate_eea21da290b039ba24fb46d9657afe9e4aa277c173225800d7886627e69e40ef extends Twig_Template
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
        // line 1
        echo "<script>
    \$(function(){
        \$('#weight_field').after(\$('#basicConfig .card-body'));
        \$('#addComment').after(\$('#weight'));
    })
</script>

<div id=\"weight\" class=\"ec-role\">
    <div class=\"row\">
        <div class=\"col-3\">
            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.weight"), "html", null, true);
        echo "\">
                <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.weight"), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"col mb-2\">
            <div>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weight", []), 'widget');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weight", []), 'errors');
        echo "
            </div>
        </div>
    </div>
</div>       
";
    }

    public function getTemplateName()
    {
        return "@ghtk/admin/product_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  48 => 18,  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ghtk/admin/product_edit.twig", "/var/www/vhosts/cosmosmarket.vn/httpdocs/app/Plugin/ghtk/Resource/template/admin/product_edit.twig");
    }
}
