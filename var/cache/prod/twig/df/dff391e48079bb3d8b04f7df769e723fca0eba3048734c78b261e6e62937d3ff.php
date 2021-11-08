<?php

/* __string_template__898482f5fd8001a8a24541ee5ec297e1b0b08b6ba040afc5123a635aeb8df981 */
class __TwigTemplate_4bd2f4d598720107de6929c24bfd7dfcf55f510a0171b1112e92b4e96aa5c35d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__898482f5fd8001a8a24541ee5ec297e1b0b08b6ba040afc5123a635aeb8df981", 11);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }
    </style>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = [])
    {
        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            ";
        // line 62
        if ((($context["has_class"] ?? null) == false)) {
            // line 63
            echo "            if (\$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock_unlimited", []), "vars", []), "id", []), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), "vars", []), "id", []), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), "vars", []), "id", []), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock_unlimited", []), "vars", []), "id", []), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), "vars", []), "id", []), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), "vars", []), "id", []), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 76
        echo "            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", []), "vars", []), "prototype", []), 'widget');
        echo "';
            var proto_del = '";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", []), "vars", []), "prototype", []), 'widget');
        echo "';
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", []), "value", []), "save_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
            \$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", []), "value", []), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 88
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", []), "value", []), "temp_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
            \$widget.val('";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", []), "value", []), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 94
            echo "            \$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = ";
        // line 130
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [])), 0), "html", null, true);
        echo ";
            \$('#";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", []), "vars", []), "id", []), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 132
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_image_add");
        echo "\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", []), "vars", []), "id", []), "html", null, true);
        echo "').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
";
    }

    // line 230
    public function block_main($context, array $blocks = [])
    {
        // line 231
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", []), 'widget');
        echo "
        ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", []), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [])) {
            // line 283
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", []), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 295
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'widget');
        echo "
                                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", []), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 309
        if ((($context["has_class"] ?? null) == false)) {
            // line 310
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 321
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "sale_type", []), 'widget');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 325
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                ";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                                ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", []), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                                ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", []), 'errors');
        echo "
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    ";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", []), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", []), 'errors');
        echo "
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    ";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", []), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", []), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 391
        if ((($context["has_class"] ?? null) == false)) {
            // line 392
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 395
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 397
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 403
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "price02", []), 'widget');
            echo "
                                                ";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "price02", []), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 411
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 412
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 418
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "price01", []), 'widget');
            echo "
                                                ";
            // line 419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "price01", []), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 434
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), 'widget');
            echo "
                                                ";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock", []), 'errors');
            echo "
                                                ";
            // line 437
            echo "                                                ";
            // line 438
            echo "                                                ";
            // line 439
            echo "                                                ";
            // line 440
            echo "                                                ";
            // line 441
            echo "                                                ";
            // line 442
            echo "                                                ";
            // line 443
            echo "                                                ";
            // line 444
            echo "                                                ";
            // line 445
            echo "                                                ";
            // line 446
            echo "                                                ";
            // line 447
            echo "                                                ";
            // line 448
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "stock_unlimited", []), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 453
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", []), 'widget');
        echo "
                                            ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", []), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 469
        if ((($context["has_class"] ?? null) == false)) {
            // line 470
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 474
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "code", []), 'widget');
            echo "
                                                ";
            // line 481
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "code", []), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 488
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 495
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "sale_limit", []), 'widget');
            echo "
                                                ";
            // line 496
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "sale_limit", []), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 503
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 504
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 510
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "delivery_duration", []), 'widget');
            echo "
                                                ";
            // line 511
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "delivery_duration", []), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [])) {
                // line 517
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 520
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 525
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "delivery_fee", []), 'widget');
                echo "
                                                    ";
                // line 526
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "delivery_fee", []), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 531
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [])) {
                // line 532
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 535
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 540
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "tax_rate", []), 'widget');
                echo "
                                                    ";
                // line 541
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []), "tax_rate", []), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 546
            echo "                                ";
        }
        // line 547
        echo "
                                ";
        // line 549
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "auto_render", [])) {
                // line 550
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])) {
                    // line 551
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])], true);
                    // line 552
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 554
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                    // line 556
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "label", [])), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                    // line 560
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                    ";
                    // line 561
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 566
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "
                                ";
        // line 568
        if ((($context["has_class"] ?? null) == false)) {
            // line 569
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "auto_render", [])) {
                    // line 570
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])) {
                        // line 571
                        echo "                                            ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "eccube_form_options", []), "form_theme", [])], true);
                        // line 572
                        echo "                                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                        ";
                    } else {
                        // line 574
                        echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                        // line 576
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", []), "label", [])), "html", null, true);
                        echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                        // line 580
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                        ";
                        // line 581
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 586
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            echo "                                ";
        }
        // line 588
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 592
        if ( !(null === ($context["id"] ?? null))) {
            // line 593
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 598
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 600
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    ";
            // line 615
            if ((($context["has_class"] ?? null) == true)) {
                // line 616
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">";
                // line 618
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 619
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 620
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 621
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pr-3 pt-2 pb-2\">";
                // line 622
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductClasses", []));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 626
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", []) == 1)) {
                        // line 627
                        echo "                                                    <tr>
                                                        <td class=\"pl-3\">";
                        // line 628
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [])) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", []), "name", []), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 629
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [])) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", []), "name", []), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 630
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", []), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 631
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [])) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", []), "html", null, true);
                        }
                        echo "</td>
                                                        <td class=\"pr-3\">";
                        // line 632
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [])), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 635
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 636
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 639
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 641
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_class", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 642
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 644
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 650
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 676
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", []), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 677
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", []), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 689
        if ( !(null === ($context["id"] ?? null))) {
            // line 690
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 696
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 697
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 703
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 750
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 752
        $context["renderMacro"] = $this;
        // line 753
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 754
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 755
            echo $context["renderMacro"]->macro_tree(($context["ChoicedCategoryIds"] ?? null), $context["TopCategory"], twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", []));
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", []), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 763
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 765
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 776
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 790
        if ((twig_length_filter($this->env, ($context["Tags"] ?? null)) > 0)) {
            // line 791
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 792
                echo "                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 793
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", []), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            echo "                                ";
        }
        // line 797
        echo "
                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">";
        // line 802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 807
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tag", []), 'widget');
        echo "
                                    </div>
                                    ";
        // line 809
        if ((twig_length_filter($this->env, ($context["TagsList"] ?? null)) > 0)) {
            // line 810
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["TagsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 811
                echo "                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 813
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", []), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 816
            echo "                                    ";
        }
        // line 817
        echo "
                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 823
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 827
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 854
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "create_date", [])), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>";
        // line 860
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "update_date", [])), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 872
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [])) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", []), "name", [])) : ("")), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 900
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", []), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 901
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", []), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true), "get", [0 => "eccube.admin.product.search.page_no"], "method"), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 922
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", []), 'widget');
        echo "
                                ";
        // line 923
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", []), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 926
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 738
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 739
            echo "                                    ";
            $context["selfMacro"] = $this;
            // line 740
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 741
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), ($context["ChoicedIds"] ?? null))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 742
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", []), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 744
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 745
                echo "                                                ";
                echo $context["selfMacro"]->macro_tree(($context["ChoicedIds"] ?? null), $context["ChildCategory"], ($context["form"] ?? null));
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 747
            echo "                                        </ul>
                                    </li>
                                ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "__string_template__898482f5fd8001a8a24541ee5ec297e1b0b08b6ba040afc5123a635aeb8df981";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1686 => 747,  1677 => 745,  1673 => 744,  1666 => 742,  1656 => 741,  1653 => 740,  1650 => 739,  1636 => 738,  1623 => 926,  1617 => 923,  1613 => 922,  1603 => 915,  1599 => 914,  1595 => 913,  1580 => 901,  1576 => 900,  1558 => 885,  1553 => 883,  1539 => 872,  1533 => 869,  1524 => 863,  1518 => 860,  1509 => 854,  1503 => 851,  1485 => 836,  1472 => 827,  1470 => 826,  1464 => 823,  1456 => 817,  1453 => 816,  1442 => 813,  1438 => 811,  1433 => 810,  1431 => 809,  1426 => 807,  1418 => 802,  1411 => 797,  1408 => 796,  1399 => 793,  1396 => 792,  1391 => 791,  1389 => 790,  1372 => 776,  1357 => 765,  1355 => 764,  1351 => 763,  1342 => 758,  1333 => 755,  1330 => 754,  1325 => 753,  1323 => 752,  1319 => 750,  1309 => 731,  1283 => 708,  1276 => 703,  1265 => 697,  1261 => 696,  1253 => 690,  1251 => 689,  1236 => 677,  1232 => 676,  1225 => 672,  1206 => 656,  1202 => 655,  1195 => 650,  1185 => 644,  1183 => 642,  1179 => 641,  1175 => 639,  1170 => 636,  1164 => 635,  1158 => 632,  1150 => 631,  1146 => 630,  1140 => 629,  1134 => 628,  1131 => 627,  1128 => 626,  1124 => 625,  1118 => 622,  1114 => 621,  1110 => 620,  1106 => 619,  1102 => 618,  1098 => 616,  1096 => 615,  1078 => 600,  1073 => 598,  1066 => 593,  1064 => 592,  1058 => 588,  1055 => 587,  1048 => 586,  1040 => 581,  1036 => 580,  1029 => 576,  1025 => 574,  1019 => 572,  1016 => 571,  1013 => 570,  1007 => 569,  1005 => 568,  1002 => 567,  995 => 566,  987 => 561,  983 => 560,  976 => 556,  972 => 554,  966 => 552,  963 => 551,  960 => 550,  954 => 549,  951 => 547,  948 => 546,  940 => 541,  936 => 540,  928 => 535,  923 => 532,  920 => 531,  912 => 526,  908 => 525,  900 => 520,  895 => 517,  893 => 516,  885 => 511,  881 => 510,  872 => 504,  868 => 503,  858 => 496,  854 => 495,  845 => 489,  841 => 488,  831 => 481,  827 => 480,  818 => 474,  814 => 473,  809 => 470,  807 => 469,  799 => 464,  795 => 463,  786 => 457,  782 => 456,  777 => 453,  768 => 448,  766 => 447,  764 => 446,  762 => 445,  760 => 444,  758 => 443,  756 => 442,  754 => 441,  752 => 440,  750 => 439,  748 => 438,  746 => 437,  742 => 435,  738 => 434,  729 => 428,  724 => 426,  714 => 419,  710 => 418,  701 => 412,  697 => 411,  687 => 404,  683 => 403,  674 => 397,  669 => 395,  664 => 392,  662 => 391,  654 => 386,  650 => 385,  641 => 379,  637 => 378,  624 => 368,  615 => 362,  611 => 361,  603 => 356,  599 => 355,  587 => 346,  582 => 344,  578 => 343,  574 => 342,  559 => 330,  554 => 328,  550 => 327,  546 => 325,  539 => 321,  531 => 316,  525 => 313,  521 => 312,  517 => 310,  515 => 309,  509 => 306,  505 => 305,  497 => 300,  492 => 298,  487 => 295,  480 => 291,  472 => 286,  468 => 285,  464 => 283,  462 => 282,  445 => 268,  432 => 258,  428 => 257,  418 => 250,  412 => 247,  399 => 237,  391 => 231,  388 => 230,  334 => 179,  325 => 173,  301 => 152,  286 => 140,  275 => 132,  271 => 131,  267 => 130,  233 => 99,  228 => 96,  219 => 94,  214 => 93,  205 => 90,  201 => 89,  196 => 88,  191 => 87,  182 => 84,  178 => 83,  173 => 82,  169 => 81,  165 => 80,  161 => 79,  156 => 76,  149 => 72,  144 => 70,  139 => 68,  134 => 66,  129 => 64,  124 => 63,  122 => 62,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  84 => 40,  81 => 39,  61 => 22,  56 => 21,  53 => 20,  47 => 16,  41 => 15,  37 => 11,  35 => 18,  33 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__898482f5fd8001a8a24541ee5ec297e1b0b08b6ba040afc5123a635aeb8df981", "");
    }
}
