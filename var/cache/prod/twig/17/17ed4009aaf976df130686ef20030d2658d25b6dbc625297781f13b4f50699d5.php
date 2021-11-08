<?php

/* __string_template__23bad0aeba1d0f39ab1251ab603b49d75cf7e864e156d48af2b1d996307165df */
class __TwigTemplate_be7da58a3bb54ec3da281cd302034b3ffb6f2dff8b9f09c0ac4931c0b2891634 extends Twig_Template
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
        echo "<!DOCTYPE html>
";
        // line 12
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" />

<div  class=\"container\" style=\"width:100%\">
\t\t<div class=\"row\" style=\"margin-bottom:20px; margin-top:15px; padding-left:10px;  padding-right: 20px;\">
\t\t\t<div style=\"width:2%\" ></div>
\t\t\t<div style=\"width:25%\" >
\t\t\t\t<a href=\"http://cosmosmarket.vn/\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"></a>
\t\t\t</div>
\t\t\t<div style=\"width:60%\" >";
        // line 26
        echo twig_include($this->env, $context, "Block/login.twig");
        echo "</div>
\t\t\t<div style=\"width:13%\" >";
        // line 27
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "</div>
\t\t</div>
\t\t<div class=\"row\" style=\"margin-top: 10px; padding-right: 20px;\">
\t\t\t<div style=\"width:10%\" >";
        // line 30
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "</div>
\t\t\t<div style=\"width:90%\" >";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
        echo "</div>
\t\t
\t\t</div>
</div>


                    <!--Start of Tawk.to Script-->
                        <script type=\"text/javascript\">
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
                        s1.async=true;
                        s1.src='https://embed.tawk.to/6185fcc46bb0760a49415ef1/1fjpm6o2o';
                        s1.charset='UTF-8';
                        s1.setAttribute('crossorigin','*');
                        s0.parentNode.insertBefore(s1,s0);
                        })();
                        </script>
                    <!--End of Tawk.to Script-->";
    }

    public function getTemplateName()
    {
        return "__string_template__23bad0aeba1d0f39ab1251ab603b49d75cf7e864e156d48af2b1d996307165df";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 31,  55 => 30,  49 => 27,  45 => 26,  40 => 24,  26 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__23bad0aeba1d0f39ab1251ab603b49d75cf7e864e156d48af2b1d996307165df", "");
    }
}
