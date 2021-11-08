<?php

/* Mail/vi/shipping_notify.html.twig */
class __TwigTemplate_bbf03068e44207f7ae12b60a8ca5b95073f1d26080d8e0630a0d21ed821177bf extends Twig_Template
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
        // line 8
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">Đơn hàng của bạn đã được chuyển đi.</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [])), "html", null, true);
        echo " <br>
                            <br>
                            Chúng tôi là ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo ".<br/>
                            Sản phẩm của bạn đang trên đường đến. Xin vui lòng chờ.<br/>
                            <br/>
                            ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [])) {
            // line 34
            echo "                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                Mã kiểm tra đơn hàng：";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", []), "html", null, true);
            echo "
                                ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", []), "confirm_url", [])) {
                // line 37
                echo "                                    <br/>
                                    Link kiểm tra đơn hàng：";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", []), "confirm_url", []), "html", null, true);
                echo "
                                ";
            }
            // line 40
            echo "                                <br/>
                            ";
        }
        // line 42
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Chi tiết đơn hàng<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "productOrderItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 46
            echo "                                Mã sản phẩm：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", []), "html", null, true);
            echo "<br/>
                                Tên sản phẩm：";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", []), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", []), "html", null, true);
            echo "<br/>
                                Số lượng：";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [])), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Thông tin người đặt hàng<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            Họ và tên：";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [])), "html", null, true);
        echo " <br/>
                            ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [])) {
            // line 56
            echo "                                Tên công ty：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", []), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 58
        echo "                            Số bưu điện：";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", []), "html", null, true);
        echo "<br/>
                            Địa chỉ：";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatAddress(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", []), twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", []), "name", [])), "html", null, true);
        echo "<br/>
                            Số điện thoại：";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", []), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　Thông tin giao hàng<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            Tên người nhận：";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatName(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", []), twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [])), "html", null, true);
        echo " <br/>
                            ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [])) {
            // line 67
            echo "                                Tên công ty：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", []), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 69
        echo "                            Số bưu điện：";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "postal_code", []), "html", null, true);
        echo "<br/>
                            Địa chỉ：";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getFormatAddress(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr01", []), twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr02", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Pref", []), "name", [])), "html", null, true);
        echo "<br/>
                            Số điện thoại：";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "phone_number", []), "html", null, true);
        echo "<br/>
                            <br/>
                            Ngày giao hàng：";
        // line 73
        echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", []))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [])))), "html", null, true);
        echo "<br/>
                            Thời gian giao hàng：";
        // line 74
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", []), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
        echo "<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        Mail này được gửi đến từ ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "<br/>
                        Nếu bạn không phải là người đã đặt đơn hàng、vui lòng nhấp vào đây <a href=\"mailto:";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", []), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", []), "html", null, true);
        echo "</a> để được hướng dẫn thêm.<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", []), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "Mail/vi/shipping_notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 90,  207 => 89,  200 => 87,  196 => 86,  181 => 74,  177 => 73,  172 => 71,  168 => 70,  162 => 69,  156 => 67,  154 => 66,  150 => 65,  142 => 60,  138 => 59,  132 => 58,  126 => 56,  124 => 55,  120 => 54,  115 => 51,  106 => 48,  98 => 47,  93 => 46,  89 => 45,  84 => 42,  80 => 40,  75 => 38,  72 => 37,  70 => 36,  66 => 35,  63 => 34,  61 => 33,  55 => 30,  50 => 28,  31 => 14,  23 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Mail/vi/shipping_notify.html.twig", "/var/www/vhosts/cosmosmarket.vn/httpdocs/src/Eccube/Resource/template/default/Mail/vi/shipping_notify.html.twig");
    }
}
