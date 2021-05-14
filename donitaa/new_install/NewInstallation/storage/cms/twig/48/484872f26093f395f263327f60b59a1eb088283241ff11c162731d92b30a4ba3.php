<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/dashboard/order-edit.htm */
class __TwigTemplate_3b1d28938e8084e194a2318aa37f757df38055ff4409e42349f41045264b1a9b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
";
        // line 2
        if (((($context["updateShipmentForm"] ?? null) == "update_form_simple") && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 2) != 5))) {
            // line 3
            echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
            // line 9
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment information"]);
            echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            ";
            // line 18
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                    <div class=\"kt-widget12\">
                        <div class=\"kt-widget12__content\">
                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 33
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Product Name"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 36
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "category_id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 36))) {
                        // line 37
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 39
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 43
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 44)), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 49
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 51), "html", null, true);
                echo "
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 55
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 56), "html", null, true);
                echo "</span>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 63
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
            // line 65
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65)), "html", null, true);
            echo "
                                        ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 66), "userverify_dateverified", [], "any", false, false, false, 66)) {
                // line 67
                echo "                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        ";
            }
            // line 69
            echo "                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 72
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group row kt-margin-t-20\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 80
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
            echo "</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 85
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 85), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 85), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_id", [], "any", false, false, false, 85) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 85))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 85), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                        </select>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
";
        } elseif ((        // line 97
($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 98
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("normalShipmentEditForm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 100
            echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        ";
            // line 106
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment information"]);
            echo "
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            ";
            // line 115
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"kt-section\">
                    <h3 class=\"kt-section__title kt-margin-b-20\">
                        ";
            // line 126
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Type"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                    </h3>
                    <div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"1\" ";
            // line 135
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 135) == 1)) {
                echo "checked";
            }
            echo " required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 142
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 147
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For door to door delivery"]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"2\" ";
            // line 156
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 156) == 2)) {
                echo "checked";
            }
            echo " required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    ";
            // line 163
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Drop off"]);
            echo "
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                ";
            // line 168
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["For delivery package from office directly"]);
            echo "
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                        </div>
                    </div>
                </div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 181
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["packaging"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 185
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 185), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packaging_id", [], "any", false, false, false, 185) == twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 185))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 185), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 190
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
                // line 194
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 194), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "office_id", [], "any", false, false, false, 194) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 194))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 194), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>";
            // line 199
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
            // line 201
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 201)), "html", null, true);
            echo "\">
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
            // line 218
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender information"]);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
            // line 227
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"form-group row\">
                    <label>";
            // line 237
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    ";
            // line 238
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 238) == 5)) {
                // line 239
                echo "                        <input name=\"sender_id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 239), "html", null, true);
                echo "\" type=\"hidden\" />
                        <input value=\"";
                // line 240
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 240), "html", null, true);
                echo "\" type=\"text\" class=\"form-control\" disabled />
                    ";
            } else {
                // line 242
                echo "                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 244), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 244), "name", [], "any", false, false, false, 244), "html", null, true);
                echo "</option>
                            ";
                // line 245
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 245)) {
                    // line 246
                    echo "                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                    echo "</option>
                            ";
                }
                // line 248
                echo "                        </select>
                        <span class=\"text-muted\">";
                // line 249
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will send the package"]);
                echo "</span>
                    ";
            }
            // line 251
            echo "                </div>
                <div class=\"form-group row\">
                    <label>";
            // line 253
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"";
            // line 254
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select sender first"]);
            echo "\" required>
                        <option value=\"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address_id", [], "any", false, false, false, 255), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
            echo "</option>
                        <option data-hidden=\"true\"></option>
                        ";
            // line 257
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 257) == 5)) {
                // line 258
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "addresses", [], "any", false, false, false, 258));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 259
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 259), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["address"], "default", [], "any", false, false, false, 259) == 1)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 259), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "                            <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                        ";
            }
            // line 263
            echo "                    </select>
                </div>
                ";
            // line 265
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 265) != 5)) {
                // line 266
                echo "                    <div class=\"row kt-hidden\" id=\"addnewsender\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
                // line 271
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
                echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
                // line 278
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
                // line 282
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
                // line 286
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\"> ";
                // line 289
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
                echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\"> ";
                // line 293
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
                echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-sender\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
                // line 302
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-sender=\"route\" name=\"sender[street_address]\"  rel=\"sender\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 309
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 312
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 313
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 313), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 313), "name", [], "any", false, false, false, 313), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 313), "name", [], "any", false, false, false, 313), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
                // line 318
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
                echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 324
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"";
                // line 325
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
                echo "\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 327
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                    // line 328
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 328), "html", null, true);
                    echo "\" ";
                    if ((($context["currentLang"] ?? null) != "en")) {
                        echo "data-subtext=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 328), "name", [], "any", false, false, false, 328), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 328), "name", [], "any", false, false, false, 328), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 330
                echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 333
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"";
                // line 334
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
                echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                    // line 337
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 337), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 337), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 339
                echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
                // line 342
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                echo "</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"";
                // line 343
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
                echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
                // line 345
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                    // line 346
                    echo "                                                    <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 346), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 346), "html", null, true);
                    echo "</option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
                // line 353
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
                echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">";
                // line 355
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
                echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                        <div class=\"col-lg-9 col-xl-6\">
                                            <div class=\"kt-checkbox-single\">
                                                <label class=\"kt-checkbox\">
                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\"> ";
                // line 363
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
                echo ": ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
                echo "
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
                // line 373
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
                // line 384
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">";
                // line 395
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
                // line 409
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
                echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
                // line 410
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
                echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                ";
            }
            // line 417
            echo "                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
        \t\t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t\t";
            // line 422
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
            echo "
        \t\t\t\t\t\t</h3>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"kt-portlet__body\">
                            <div class=\"location-senderaddress\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
            // line 430
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" data-senderaddress=\"route\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 437
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 441
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 441), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 441), "name", [], "any", false, false, false, 441), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 441), "name", [], "any", false, false, false, 441), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 443
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
            // line 446
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 452
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"";
            // line 453
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 456
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 456), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 456), "name", [], "any", false, false, false, 456), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 456), "name", [], "any", false, false, false, 456), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 461
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"";
            // line 462
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 464
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 465
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 465), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 465), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 470
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"";
            // line 471
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" >
                                            <option data-hidden=\"true\"></option>
                                            ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 474
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 474), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 474), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 476
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        <label>";
            // line 481
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">";
            // line 483
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t</div>
                        <div class=\"kt-portlet__foot\">
            \t\t\t\t<div class=\"row align-items-center\">
            \t\t\t\t\t<div class=\"col-lg-12\">
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 491
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 492
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 500
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\" ";
            // line 504
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 504) == 1)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
            echo " </option>
                            <option value=\"2\" ";
            // line 505
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 505) == 2)) {
                echo "selected";
            }
            echo ">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
            echo " </option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 510
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Method"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                            <option data-hidden=\"true\"></option>
                            ";
            // line 514
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["payment"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enable_cash"] ?? null) : null) == 1)) {
                // line 515
                echo "                            <option ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 515) == "cash")) {
                    echo "selected";
                }
                echo " value=\"cash\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cash"]);
                echo " </option>
                            ";
            }
            // line 517
            echo "                            ";
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["payment"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["enable_transfer"] ?? null) : null) == 1)) {
                // line 518
                echo "                            <option ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 518) == "transfer")) {
                    echo "selected";
                }
                echo " value=\"transfer\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Wire Transfer"]);
                echo " </option>
                            ";
            }
            // line 520
            echo "                            ";
            if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["payment"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["enable_paystack"] ?? null) : null) == 1)) {
                // line 521
                echo "                            <option ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 521) == "paystack")) {
                    echo "selected";
                }
                echo " value=\"paystack\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack"]);
                echo " </option>
                            ";
            }
            // line 523
            echo "                            ";
            if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["payment"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["enable_paypal"] ?? null) : null) == 1)) {
                // line 524
                echo "                            <option ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 524) == "paypal")) {
                    echo "selected";
                }
                echo " value=\"paypal\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paypal"]);
                echo " </option>
                            ";
            }
            // line 526
            echo "                        </select>
                    </div>
                </div>
                <div class=\"form-group row type_1\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 530
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Record receiver information ?"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" ";
            // line 534
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 534)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                <span></span>
                            </label>
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" ";
            // line 538
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 538) == null)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 ";
            // line 546
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 546) == null)) {
                echo "kt-hidden";
            }
            echo " receiver_information\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t";
            // line 551
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
            echo "
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>";
            // line 557
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"";
            // line 560
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 560), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 560), "name", [], "any", false, false, false, 560), "html", null, true);
            echo "</option>
                            ";
            // line 561
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 561)) {
                // line 562
                echo "                                <option value=\"new\" data-icon=\"flaticon2-add\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
                echo "</option>
                            ";
            }
            // line 564
            echo "                        </select>
                        <span class=\"text-muted\">";
            // line 565
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Choose or add a new client that will receive the package"]);
            echo "</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>";
            // line 568
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
            echo "/";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
            // line 569
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
            echo "\" required>
                            <option value=\"";
            // line 570
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address_id", [], "any", false, false, false, 570), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570), "html", null, true);
            echo "</option>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
            // line 579
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
            echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>";
            // line 586
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>";
            // line 590
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>";
            // line 594
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
            echo "</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> ";
            // line 597
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
            echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> ";
            // line 601
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
            echo "
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-receiver\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
            // line 610
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 617
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 620
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 621
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 621), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 621), "name", [], "any", false, false, false, 621), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 621), "name", [], "any", false, false, false, 621), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 623
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 626
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 632
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
            // line 633
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 635
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 636
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 636), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 636), "name", [], "any", false, false, false, 636), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 636), "name", [], "any", false, false, false, 636), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 638
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 641
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
            // line 642
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 644
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 645
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 645), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 645), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 647
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 650
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
            // line 651
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 653
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 654
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 654), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 654), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 656
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 661
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 663
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                        </div>
                                    </div>
                                    ";
            // line 666
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 666)) {
                // line 667
                echo "                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> ";
                // line 672
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Connect client"]);
                echo ": ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["create an account for the client"]);
                echo "
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
                // line 682
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
                // line 693
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
                // line 704
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Password"]);
                echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 714
            echo "                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 719
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 720
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t";
            // line 731
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
            echo "
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-receiveraddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>";
            // line 739
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 746
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 749
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 750
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 750), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 750), "name", [], "any", false, false, false, 750), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 750), "name", [], "any", false, false, false, 750), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 752
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>";
            // line 755
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 761
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 762
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 764
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 765
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 765), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 765), "name", [], "any", false, false, false, 765), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 765), "name", [], "any", false, false, false, 765), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 767
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 770
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
            // line 771
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
            echo "\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 773
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 774
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 774), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 774), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 776
            echo "                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>";
            // line 779
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 780
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                ";
            // line 782
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 783
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 783), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 783), "name", [], "any", false, false, false, 783), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 783), "name", [], "any", false, false, false, 783), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 785
            echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
            // line 790
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">";
            // line 792
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">";
            // line 800
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
            echo "</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">";
            // line 801
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
            echo "</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 809
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
            // line 813
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 813) == 1)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
            // line 817
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 817) == 2)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
            echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row ";
            // line 823
            if ((($context["return_defray"] ?? null) == 2)) {
                echo "kt-hidden";
            }
            echo " package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 824
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                ";
            // line 827
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 827) == 1)) {
                // line 828
                echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
                // line 830
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 830), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 834
            echo "                \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"package_fee\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 834), "html", null, true);
            echo "\" required />
                                ";
            // line 835
            if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 835) == 0)) {
                // line 836
                echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
                // line 838
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 838), "html", null, true);
                echo "
                                        </span>
                                    </div>
                                ";
            }
            // line 842
            echo "                            </div>
                        </div>
                    </div>
                    ";
            // line 845
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 845) != 5)) {
                // line 846
                echo "                        <div class=\"form-group row ";
                if ((($context["return_defray"] ?? null) == 2)) {
                    echo "kt-hidden";
                }
                echo " package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                // line 847
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    ";
                // line 850
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 850) == 1)) {
                    // line 851
                    echo "                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                ";
                    // line 853
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 853), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 857
                echo "                    \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"return_courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 857), "html", null, true);
                echo "\" required />
                                    ";
                // line 858
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 858) == 0)) {
                    // line 859
                    echo "                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                ";
                    // line 861
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 861), "html", null, true);
                    echo "
                                            </span>
                                        </div>
                                    ";
                }
                // line 865
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 869
            echo "                    <div class=\"form-group row ";
            if ((($context["return_defray"] ?? null) == 2)) {
                echo "kt-hidden";
            }
            echo " package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">";
            // line 870
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" class=\"return_package_fee\" name=\"return_package_fee\" value=\"1\" ";
            // line 874
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 874) == 1)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
            echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" class=\"return_package_fee\" name=\"return_package_fee\" value=\"2\" ";
            // line 878
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 878) == 2)) {
                echo "checked";
            }
            echo " required> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
            echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 type_1\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t";
            // line 895
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            ";
            // line 904
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Oh snap! Change a few things up and try submitting again"]);
            echo ".
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-section\">
\t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
\t\t\t\t\t\t";
            // line 915
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Content"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\" id=\"kt_repeater_1\">
                        <div class=\"form-group form-group-last row\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center new\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>";
            // line 925
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        ";
            // line 930
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 931
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 931), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 931), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 933
            echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
            // line 940
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
            echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control\" name=\"description\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
            // line 952
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
            echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
            // line 962
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo ":</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 966
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
            echo "</span></div>
                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\">
                                \t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">";
            // line 977
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
            echo "&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Length"]);
            echo "&nbsp;x&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Width"]);
            echo "&nbsp;x&nbsp;";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Height"]);
            echo "] (";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
            echo "):</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                <i class=\"la la-trash-o\"></i>
                                                ";
            // line 1008
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
            echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                ";
            // line 1013
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 1013));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1014
                echo "                                    <div data-repeater-item class=\"align-items-center\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 1015
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 1015), "html", null, true);
                echo "\" />
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label>";
                // line 1020
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
                echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            ";
                // line 1025
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 1026
                    echo "                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1026), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "category_id", [], "any", false, false, false, 1026) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 1026))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1026), "html", null, true);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1028
                echo "                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
                // line 1035
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 1038
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 1038), "html", null, true);
                echo "\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
                // line 1047
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"";
                // line 1050
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 1050), "html", null, true);
                echo "\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
                // line 1057
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1061
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                            \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"";
                // line 1062
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 1062), "html", null, true);
                echo "\">
                                    \t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">";
                // line 1072
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
                echo "&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Length"]);
                echo "&nbsp;x&nbsp;";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Width"]);
                echo "&nbsp;x&nbsp;";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Height"]);
                echo "] (";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                echo "):</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" value=\"";
                // line 1078
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", [], "any", false, false, false, 1078), "html", null, true);
                echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" value=\"";
                // line 1084
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 1084), "html", null, true);
                echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" value=\"";
                // line 1090
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 1090), "html", null, true);
                echo "\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3\">
                                                <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                    <i class=\"la la-trash-o\"></i>
                                                    ";
                // line 1103
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1109
            echo "                            </div>
                         </div>
                         <div class=\"form-group form-group-last row\">
                             <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                 <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                     <i class=\"la la-plus\"></i> ";
            // line 1114
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                 </a>
                             </label>
                        </div>
                    </div>
                </div>
                ";
            // line 1120
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1120) != 5)) {
                // line 1121
                echo "                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"kt-hidden form-group col-lg-4\">
                                    <label>";
                // line 1126
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Number"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 1128), "prefix_order", [], "any", false, false, false, 1128), "html", null, true);
                echo "</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" value=\"";
                // line 1129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 1129), "html", null, true);
                echo "\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                ";
                // line 1132
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "taxes", [], "any", false, false, false, 1132), "type", [], "any", false, false, false, 1132) == 1)) {
                    // line 1133
                    echo "                                <div class=\"form-group col-lg-6\">
                                    <label>";
                    // line 1134
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                    echo " & ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Duty"]);
                    echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"";
                    // line 1137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 1137), "html", null, true);
                    echo "\">
                \t\t\t\t\t</div>
                                </div>
                                ";
                } else {
                    // line 1141
                    echo "                                <div class=\"form-group col-lg-3\">
                                    <label>";
                    // line 1142
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                    echo "</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"";
                    // line 1145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 1145), "html", null, true);
                    echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group col-lg-3\">
                                    <label>";
                    // line 1149
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                    echo "</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"";
                    // line 1152
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 1152), "html", null, true);
                    echo "\">
                                    </div>
                                </div>
                                ";
                }
                // line 1156
                echo "                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1157
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                echo "</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"";
                // line 1160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 1160), "html", null, true);
                echo "\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>";
                // line 1166
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
                // line 1169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["mode"]) {
                    // line 1170
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1170), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 1170) == twig_get_attribute($this->env, $this->source, $context["mode"], "id", [], "any", false, false, false, 1170))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mode"], "name", [], "any", false, false, false, 1170), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1172
                echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
                // line 1175
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                echo "</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"";
                // line 1176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 1176), "html", null, true);
                echo "\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>";
                // line 1179
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                echo "</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        ";
                // line 1182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["couriers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["courier"]) {
                    // line 1183
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1183), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 1183) == twig_get_attribute($this->env, $this->source, $context["courier"], "id", [], "any", false, false, false, 1183))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["courier"], "name", [], "any", false, false, false, 1183), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courier'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1185
                echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1190
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
                // line 1193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["deliverytimes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["deliverytime"]) {
                    // line 1194
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1194), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_time_id", [], "any", false, false, false, 1194) == twig_get_attribute($this->env, $this->source, $context["deliverytime"], "id", [], "any", false, false, false, 1194))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deliverytime"], "name", [], "any", false, false, false, 1194), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deliverytime'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1196
                echo "                                    </select>
                                </div>
                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1199
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        ";
                // line 1202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 1203
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1203), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "equal", [], "any", false, false, false, 1203), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_id", [], "any", false, false, false, 1203) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 1203))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 1203), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1205
                echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-6\">
                                    <label>";
                // line 1210
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Fee"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        ";
                // line 1212
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1212) == 1)) {
                    // line 1213
                    echo "                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1215
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1215), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1219
                echo "                                        <input type=\"text\" class=\"form-control\" data-type='currency' name=\"courier_fee\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 1219), "html", null, true);
                echo "\" id=\"delivery_cost\" required>
                                        ";
                // line 1220
                if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 1220) == 0)) {
                    // line 1221
                    echo "                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    ";
                    // line 1223
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 1223), "html", null, true);
                    echo "
                                                </span>
                                            </div>
                                        ";
                }
                // line 1227
                echo "                                    </div>
                                </div>

                                <div class=\"form-group col-lg-6\">                                    
                                    <label>";
                // line 1231
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Weight"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 1233
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn total_weight\" name=\"total_weight\" value=\"0\">
                                    </div>
                                </div>

                            </div>
                            ";
                // line 1239
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "assign", 1 => "c"], "method", false, false, false, 1239)) {
                    // line 1240
                    echo "                                <div class=\"form-group row kt-margin-t-20\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">";
                    // line 1241
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                    echo "</label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                            <option data-hidden=\"true\"></option>
                                            ";
                    // line 1245
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                        // line 1246
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1246), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 1246) == twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1246))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1246), "html", null, true);
                        echo "</option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1248
                    echo "                                        </select>
                                    </div>
                                </div>
                            ";
                }
                // line 1252
                echo "                        </div>
                    </div>
                ";
            }
            // line 1255
            echo "            </div>
        </div>
    </div>
</div>
";
        }
        // line 1260
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" class=\"btn btn-primary save\">";
        // line 1266
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 1267
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1267), "child_of", [], "any", false, false, false, 1267));
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 1274
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

";
        // line 1276
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 1277
        echo "    <style>
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
    </style>
";
        // line 1276
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 1302
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 1303
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCjN-FapLWoOHL6QOnVcwjFmesRdCyUiAc\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }

    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });

    \$('body').on('click', '#type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
            \$('.type_1').addClass('col-lg-6');
            \$('.type_1').removeClass('col-lg-12');
        }else{
            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){
                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
            \$('.type_1').removeClass('col-lg-6');
            \$('.type_1').addClass('col-lg-12');
        }

        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var total_weight = \$('.total_weight').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         
         if(selected != '' && selected != 'new'){
            
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('change', '.total_weight', function(e){
        var total_weight = \$(this).val();
        var type = \$('#type:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var sender_address_id = \$('#sender_address_id').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        
        \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
    });

     \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });

    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });


    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('.payment').addClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     ";
        // line 1456
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1457
            echo "                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');   
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     ";
        }
        // line 1472
        echo "                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     var type = \$('#type:checked').val();
                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1517
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 ";
        // line 1520
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1521
            echo "                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val()},
                 ";
        } else {
            // line 1523
            echo "                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 ";
        }
        // line 1525
        echo "                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1527
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1531
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     ";
        // line 1541
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1542
            echo "                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');   
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     ";
        }
        // line 1557
        echo "                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                    //alert(response.delivery_cost);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1622
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            //alert(\$('#sender_id').val());
            \$.request('onNewclientaddress', {
                ";
        // line 1626
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1627
            echo "                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        } else {
            // line 1629
            echo "                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 ";
        }
        // line 1630
        echo "                 
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1633
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1637
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');

                     var selected = response.default;
                      var type = \$('#type:checked').val();
                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     var type = \$('#type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1739
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1745
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1749
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');

                     var selected = response.address_id;
                      var type = \$('#type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '";
        // line 1821
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 1827
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 1831
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');

                     var selected = response.default;
                       var type = \$('#type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       var total_weight = \$('.total_weight').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            ";
        // line 1879
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 1880
            echo "            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
            // line 1883
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        } else {
            // line 1888
            echo "            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
            // line 1891
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
            echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            ";
        }
        // line 1896
        echo "       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
        // line 1905
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '";
        // line 1918
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('#type:checked').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var total_weight = \$('.total_weight').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });




    \$(\".clients\").select2({
        ";
        // line 1969
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 1970
            echo "            dir: \"rtl\",
        ";
        }
        // line 1972
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 1974
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 1977
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 1980
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 1983
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 1986
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 1989
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 1992
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 1995
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Search for client"]);
        echo "\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });


    \$('body').on('change', '.sub_weight', function(){
        var all = \$('.sub_weight').map(function(){
            return this.value;
        }).get();
        
        var total_weight =0;
        for (var i=0;i<all.length;i++)
        {
            total_weight =total_weight + parseInt(all[i]);
        }
        \$('.total_weight').val(total_weight);

        var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         ";
        // line 2039
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2039), "enable_type", [], "any", false, false, false, 2039) != 1)) {
            // line 2040
            echo "            var type = ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2040), "type", [], "any", false, false, false, 2040), "html", null, true);
            echo ";
        ";
        } else {
            // line 2041
            echo "        
            var type = \$('.type:checked').val();
        ";
        }
        // line 2044
        echo "         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
     });
    \$('#kt_repeater_1').repeater({
        initEmpty: false,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '";
        // line 2061
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing selected"]);
        echo "',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>'
            });
            var repeater_item = \$(this);

        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>'
    });

    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });

     \$('body').on('change', '#label_other', function(){
        if(\$(this).val() == 'other')
            \$('#div_label_other').removeClass('kt-hidden');
        else
            \$('#div_label_other').addClass('kt-hidden');
    });

    \$('body').on('change', '.feeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#cost').removeClass('kt-hidden');
        else
            \$('#cost').addClass('kt-hidden');
    });

    \$('body').on('change', '.cfeeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#ccost').removeClass('kt-hidden');
        else
            \$('#ccost').addClass('kt-hidden');
    });

    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');

            var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('#type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             var total_weight = \$('.total_weight').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });

        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });
    \$(\".fees\").inputmask('999";
        // line 2160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2160), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 2160), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 2160), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 2160)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "9";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "', {
        numericInput: true
    });

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('";
        // line 2165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2165), "numbers_order", [], "any", false, false, false, 2165)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "0";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "' + \$(this).val()).slice(-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 2165), "numbers_order", [], "any", false, false, false, 2165), "html", null, true);
        echo "));
    });
});
</script>
";
        // line 1302
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/order-edit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3690 => 1302,  3674 => 2165,  3654 => 2160,  3552 => 2061,  3533 => 2044,  3528 => 2041,  3522 => 2040,  3520 => 2039,  3473 => 1995,  3467 => 1992,  3461 => 1989,  3455 => 1986,  3449 => 1983,  3443 => 1980,  3437 => 1977,  3431 => 1974,  3427 => 1972,  3423 => 1970,  3421 => 1969,  3367 => 1918,  3351 => 1905,  3340 => 1896,  3332 => 1891,  3327 => 1888,  3319 => 1883,  3314 => 1880,  3312 => 1879,  3261 => 1831,  3254 => 1827,  3245 => 1821,  3170 => 1749,  3163 => 1745,  3154 => 1739,  3049 => 1637,  3042 => 1633,  3037 => 1630,  3033 => 1629,  3029 => 1627,  3027 => 1626,  3020 => 1622,  2953 => 1557,  2936 => 1542,  2934 => 1541,  2921 => 1531,  2914 => 1527,  2910 => 1525,  2906 => 1523,  2902 => 1521,  2900 => 1520,  2894 => 1517,  2847 => 1472,  2830 => 1457,  2828 => 1456,  2671 => 1303,  2669 => 1302,  2667 => 1276,  2641 => 1277,  2639 => 1276,  2634 => 1274,  2620 => 1267,  2616 => 1266,  2608 => 1260,  2601 => 1255,  2596 => 1252,  2590 => 1248,  2575 => 1246,  2571 => 1245,  2564 => 1241,  2561 => 1240,  2559 => 1239,  2550 => 1233,  2545 => 1231,  2539 => 1227,  2532 => 1223,  2528 => 1221,  2526 => 1220,  2521 => 1219,  2514 => 1215,  2510 => 1213,  2508 => 1212,  2503 => 1210,  2496 => 1205,  2479 => 1203,  2475 => 1202,  2469 => 1199,  2464 => 1196,  2449 => 1194,  2445 => 1193,  2439 => 1190,  2432 => 1185,  2417 => 1183,  2413 => 1182,  2407 => 1179,  2401 => 1176,  2397 => 1175,  2392 => 1172,  2377 => 1170,  2373 => 1169,  2367 => 1166,  2358 => 1160,  2352 => 1157,  2349 => 1156,  2342 => 1152,  2336 => 1149,  2329 => 1145,  2323 => 1142,  2320 => 1141,  2313 => 1137,  2305 => 1134,  2302 => 1133,  2300 => 1132,  2294 => 1129,  2290 => 1128,  2285 => 1126,  2278 => 1121,  2276 => 1120,  2267 => 1114,  2260 => 1109,  2248 => 1103,  2232 => 1090,  2223 => 1084,  2214 => 1078,  2197 => 1072,  2184 => 1062,  2180 => 1061,  2173 => 1057,  2163 => 1050,  2157 => 1047,  2145 => 1038,  2139 => 1035,  2130 => 1028,  2115 => 1026,  2111 => 1025,  2103 => 1020,  2095 => 1015,  2092 => 1014,  2088 => 1013,  2080 => 1008,  2038 => 977,  2024 => 966,  2017 => 962,  2004 => 952,  1989 => 940,  1980 => 933,  1969 => 931,  1965 => 930,  1957 => 925,  1944 => 915,  1930 => 904,  1918 => 895,  1894 => 878,  1883 => 874,  1876 => 870,  1869 => 869,  1863 => 865,  1856 => 861,  1852 => 859,  1850 => 858,  1845 => 857,  1838 => 853,  1834 => 851,  1832 => 850,  1826 => 847,  1819 => 846,  1817 => 845,  1812 => 842,  1805 => 838,  1801 => 836,  1799 => 835,  1794 => 834,  1787 => 830,  1783 => 828,  1781 => 827,  1775 => 824,  1769 => 823,  1756 => 817,  1745 => 813,  1738 => 809,  1727 => 801,  1723 => 800,  1712 => 792,  1707 => 790,  1700 => 785,  1683 => 783,  1679 => 782,  1674 => 780,  1670 => 779,  1665 => 776,  1654 => 774,  1650 => 773,  1645 => 771,  1641 => 770,  1636 => 767,  1619 => 765,  1615 => 764,  1610 => 762,  1606 => 761,  1597 => 755,  1592 => 752,  1575 => 750,  1571 => 749,  1565 => 746,  1555 => 739,  1544 => 731,  1530 => 720,  1526 => 719,  1519 => 714,  1506 => 704,  1492 => 693,  1478 => 682,  1463 => 672,  1456 => 667,  1454 => 666,  1448 => 663,  1443 => 661,  1436 => 656,  1425 => 654,  1421 => 653,  1416 => 651,  1412 => 650,  1407 => 647,  1396 => 645,  1392 => 644,  1387 => 642,  1383 => 641,  1378 => 638,  1361 => 636,  1357 => 635,  1352 => 633,  1348 => 632,  1339 => 626,  1334 => 623,  1317 => 621,  1313 => 620,  1307 => 617,  1297 => 610,  1285 => 601,  1278 => 597,  1272 => 594,  1265 => 590,  1258 => 586,  1248 => 579,  1234 => 570,  1230 => 569,  1224 => 568,  1218 => 565,  1215 => 564,  1209 => 562,  1207 => 561,  1201 => 560,  1193 => 557,  1184 => 551,  1174 => 546,  1159 => 538,  1148 => 534,  1141 => 530,  1135 => 526,  1125 => 524,  1122 => 523,  1112 => 521,  1109 => 520,  1099 => 518,  1096 => 517,  1086 => 515,  1084 => 514,  1077 => 510,  1065 => 505,  1057 => 504,  1050 => 500,  1039 => 492,  1035 => 491,  1024 => 483,  1019 => 481,  1012 => 476,  1001 => 474,  997 => 473,  992 => 471,  988 => 470,  983 => 467,  972 => 465,  968 => 464,  963 => 462,  959 => 461,  954 => 458,  937 => 456,  933 => 455,  928 => 453,  924 => 452,  915 => 446,  910 => 443,  893 => 441,  889 => 440,  883 => 437,  873 => 430,  862 => 422,  855 => 417,  845 => 410,  841 => 409,  824 => 395,  810 => 384,  796 => 373,  781 => 363,  770 => 355,  765 => 353,  758 => 348,  747 => 346,  743 => 345,  738 => 343,  734 => 342,  729 => 339,  718 => 337,  714 => 336,  709 => 334,  705 => 333,  700 => 330,  683 => 328,  679 => 327,  674 => 325,  670 => 324,  661 => 318,  656 => 315,  639 => 313,  635 => 312,  629 => 309,  619 => 302,  607 => 293,  600 => 289,  594 => 286,  587 => 282,  580 => 278,  570 => 271,  563 => 266,  561 => 265,  557 => 263,  551 => 261,  536 => 259,  531 => 258,  529 => 257,  522 => 255,  518 => 254,  512 => 253,  508 => 251,  503 => 249,  500 => 248,  494 => 246,  492 => 245,  486 => 244,  482 => 242,  477 => 240,  472 => 239,  470 => 238,  464 => 237,  451 => 227,  439 => 218,  419 => 201,  414 => 199,  409 => 196,  394 => 194,  390 => 193,  384 => 190,  379 => 187,  364 => 185,  360 => 184,  354 => 181,  338 => 168,  330 => 163,  318 => 156,  306 => 147,  298 => 142,  286 => 135,  274 => 126,  260 => 115,  248 => 106,  240 => 100,  234 => 98,  232 => 97,  220 => 87,  203 => 85,  199 => 84,  192 => 80,  182 => 73,  178 => 72,  173 => 69,  169 => 67,  167 => 66,  163 => 65,  158 => 63,  153 => 60,  143 => 56,  139 => 55,  132 => 51,  127 => 49,  119 => 44,  115 => 43,  110 => 40,  104 => 39,  98 => 37,  95 => 36,  91 => 35,  86 => 33,  82 => 31,  78 => 30,  63 => 18,  51 => 9,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSave', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
{% if (updateShipmentForm == \"update_form_simple\" and user.role_id != 5 ) %}
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Shipment information'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"kt-portlet__body kt-portlet__body--fluid\">
                    <div class=\"kt-widget12\">
                        <div class=\"kt-widget12__content\">
                            {% for item in order.items %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Product Name'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {% for category in categories %}
                                            {% if item.category_id == category.id %}
                                                {{category.name}}
                                            {% endif %}
                                        {% endfor %}
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Shipping Date'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.ship_date|date(settings.dateformat)}}</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Quantity'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {{item.quantity}}
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Weight'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{item.weight}}</span>
                                </div>
                            </div>
                            {% endfor %}

                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {{order.receiver.name|capitalize}}
                                        {% if order.receiver.userverify_dateverified %}
                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Address'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.receiver_address.name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group row kt-margin-t-20\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Delivery Status'|__}}</label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for status in statuses %}
                                <option value=\"{{status.id}}_{{status.equal}}\" {% if order.status_id == status.id %}selected{% endif %}>{{status.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
{% elseif addShipmentForm == \"add_form_normal\" %}
    {% partial 'normalShipmentEditForm' %}
{% else %}
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">
                        {{'Shipment information'|__}}
                    </h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
                    <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                        <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                        <div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
                        </div>
                        <div class=\"alert-close\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"kt-section\">
                    <h3 class=\"kt-section__title kt-margin-b-20\">
                        {{'Shipment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
                    </h3>
                    <div class=\"kt-section__content\">
                        <div class=\"form-group form-group-last\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"1\" {% if order.type == 1 %}checked{% endif %} required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Pickup'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{'For door to door delivery'|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class=\"col-lg-6\">
                                    <label class=\"kt-option\">
                                        <span class=\"kt-option__control\">
                                            <span class=\"kt-radio kt-radio--state-brand\">
                                                <input type=\"radio\" name=\"type\" id=\"type\" value=\"2\" {% if order.type == 2 %}checked{% endif %} required>
                                                <span></span>
                                            </span>
                                        </span>
                                        <span class=\"kt-option__label\">
                                            <span class=\"kt-option__head\">
                                                <span class=\"kt-option__title\">
                                                    {{'Drop off'|__}}
                                                </span>
                                                <span class=\"kt-option__focus\"></span>
                                            </span>
                                            <span class=\"kt-option__body\">
                                                {{'For delivery package from office directly'|__}}
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-text text-muted\"><!--must use this helper element to display error message for the options--></div>
                        </div>
                    </div>
                </div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit kt-margin-t-0\"></div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Package Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            {% for package in packaging %}
                                <option value=\"{{package.id}}\" {% if order.packaging_id == package.id %}selected{% endif %}>{{package.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Office'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\" {% if order.office_id == office.id %}selected{% endif %}>{{office.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"form-group col-lg-4\">
                        <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{order.ship_date|date(settings.dateformat)}}\">
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet kt-portlet--mobile\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Sender information'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"form-group row\">
                    <label>{{'Sender'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    {% if user.role_id == 5 %}
                        <input name=\"sender_id\" value=\"{{user.id}}\" type=\"hidden\" />
                        <input value=\"{{user.name}}\" type=\"text\" class=\"form-control\" disabled />
                    {% else %}
                        <select class=\"form-control clients\" name=\"sender_id\" id=\"sender_id\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"{{order.sender_id}}\" selected>{{order.sender.name}}</option>
                            {% if user.hasUserPermission('client', 'c') %}
                                <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                            {% endif %}
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will send the package'|__}}</span>
                    {% endif %}
                </div>
                <div class=\"form-group row\">
                    <label>{{'Sender Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <select class=\"form-control sender_address_id\" name=\"sender_address_id\" id=\"sender_address_id\" data-live-search=\"true\" title=\"{{'Please select sender first'|__}}\" required>
                        <option value=\"{{order.sender_address_id}}\" selected>{{order.sender_address.name}}</option>
                        <option data-hidden=\"true\"></option>
                        {% if user.role_id == 5 %}
                            {% for address in user.addresses %}
                                <option value=\"{{address.id}}\" {% if address.default == 1 %}selected{% endif %}>{{address.name}}</option>
                            {% endfor %}
                            <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                        {% endif %}
                    </select>
                </div>
                {% if user.role_id != 5 %}
                    <div class=\"row kt-hidden\" id=\"addnewsender\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"sender[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"sender[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Gender'|__}}</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"male\"> {{'Male'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sender[gender]\" class=\"gender\" value=\"female\"> {{'Female'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-sender\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-sender=\"route\" name=\"sender[street_address]\"  rel=\"sender\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"sender[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"sender[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"sender[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-sender=\"country\" data-live-search=\"true\" name=\"sender[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sender=\"postal_code\" name=\"sender[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-sender=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"sender[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-sender=\"locality\" name=\"sender[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}</label>
                                            <select class=\"form-control area_id\" data-sender=\"sublocality\" name=\"sender[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for county in areas %}
                                                    <option value=\"{{county.id}}\">{{county.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Google Map'|__}}</label>
                                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                        <div class=\"col-lg-9 col-xl-6\">
                                            <div class=\"kt-checkbox-single\">
                                                <label class=\"kt-checkbox\">
                                                    <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"sender\"> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row align-items-center kt-hidden\" id=\"connect_sender\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control email\" name=\"sender[email]\" required/>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control username\" name=\"sender[username]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"password\" class=\"form-control password\" name=\"sender[password]\" required>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                {% endif %}
                <div class=\"row kt-hidden\" id=\"addnewsenderaddress\">
                    <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
        \t\t\t\t<div class=\"kt-portlet__head\">
        \t\t\t\t\t<div class=\"kt-portlet__head-label\">
        \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t\t\t\t{{'Add a new client address'|__}}
        \t\t\t\t\t\t</h3>
        \t\t\t\t\t</div>
        \t\t\t\t</div>
        \t\t\t\t<div class=\"kt-portlet__body\">
                            <div class=\"location-senderaddress\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control address street_addr\" data-senderaddress=\"route\" name=\"senderaddress[street_address]\"  rel=\"senderaddress\" required/>
                                        <input type=\"hidden\" class=\"form-control lat\" data-senderaddress=\"lat\" name=\"senderaddress[lat]\" />
                                        <input type=\"hidden\" class=\"form-control lng\" data-senderaddress=\"lng\" name=\"senderaddress[lng]\" />
                                        <input type=\"hidden\" class=\"form-control url\" data-senderaddress=\"url\" name=\"senderaddress[url]\" />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control country_id\" data-senderaddress=\"country\" data-live-search=\"true\" name=\"senderaddress[country]\" required>
                                            <option data-hidden=\"true\"></option>
                                            {% for country in countries %}
                                                <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Postal Code'|__}}</label>
                                        <input class=\"form-control postal_code\" type=\"text\" data-sendsenderaddresser=\"postal_code\" name=\"senderaddress[postal_code]\" >
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control state_id\" data-senderaddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"senderaddress[state]\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            {% for state in states %}
                                                <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <select class=\"form-control city_id\" data-senderaddress=\"locality\" name=\"senderaddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                            <option data-hidden=\"true\"></option>
                                            {% for city in cities %}
                                                <option value=\"{{city.id}}\">{{city.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'County'|__}}</label>
                                        <select class=\"form-control area_id\" data-senderaddress=\"sublocality\" name=\"senderaddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" >
                                            <option data-hidden=\"true\"></option>
                                            {% for county in areas %}
                                                <option value=\"{{county.id}}\">{{county.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-12\">
                                        <label>{{'Google Map'|__}}</label>
                                        <div class=\"col-sm-12 map_canvas map_senderaddress\"></div>
                                        <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                    </div>
                                </div>
                            </div>
        \t\t\t\t</div>
                        <div class=\"kt-portlet__foot\">
            \t\t\t\t<div class=\"row align-items-center\">
            \t\t\t\t\t<div class=\"col-lg-12\">
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
            \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_type\" id=\"payment_type\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\" {% if order.payment_type == 1 %}selected{% endif %}>{{'Postpaid'|__}} </option>
                            <option value=\"2\" {% if order.payment_type == 2 %}selected{% endif %}>{{'Prepaid'|__}} </option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group row\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Payment Method'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <select class=\"form-control\" name=\"payment_method\" id=\"payment_method\" required>
                            <option data-hidden=\"true\"></option>
                            {% if payment['enable_cash'] == 1 %}
                            <option {% if order.payment_method == 'cash' %}selected{% endif %} value=\"cash\">{{'Cash'|__}} </option>
                            {% endif %}
                            {% if payment['enable_transfer'] == 1 %}
                            <option {% if order.payment_method == 'transfer' %}selected{% endif %} value=\"transfer\">{{'Wire Transfer'|__}} </option>
                            {% endif %}
                            {% if payment['enable_paystack'] == 1 %}
                            <option {% if order.payment_method == 'paystack' %}selected{% endif %} value=\"paystack\">{{'Paystack'|__}} </option>
                            {% endif %}
                            {% if payment['enable_paypal'] == 1 %}
                            <option {% if order.payment_method == 'paypal' %}selected{% endif %} value=\"paypal\">{{'Paypal'|__}} </option>
                            {% endif %}
                        </select>
                    </div>
                </div>
                <div class=\"form-group row type_1\">
                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Record receiver information ?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                    <div class=\"col-lg-9 col-xl-6\">
                        <div class=\"kt-radio-inline\">
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"1\" {% if order.receiver_id %}checked{% endif %} required> {{'Yes'|__}}
                                <span></span>
                            </label>
                            <label class=\"kt-radio\">
                                <input type=\"radio\" name=\"show_receiver_info\" class=\"show_receiver_info\" value=\"2\" {% if order.receiver_id == null %}checked{% endif %} required> {{'No'|__}}
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"type_2 {% if order.receiver_id == null %}kt-hidden{% endif %} receiver_information\">
            <div class=\"kt-portlet kt-portlet--mobile\">
                <div class=\"kt-portlet__head\">
    \t\t\t\t<div class=\"kt-portlet__head-label\">
    \t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
    \t\t\t\t\t\t{{'Receiver information'|__}}
    \t\t\t\t\t</h3>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-portlet__body\">
                    <div class=\"form-group row\">
                        <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control clients\" name=\"receiver_id\" id=\"receiver_id\" equired>
                            <option data-hidden=\"true\"></option>
                            <option value=\"{{order.receiver_id}}\" selected>{{order.receiver.name}}</option>
                            {% if user.hasUserPermission('client', 'c') %}
                                <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                            {% endif %}
                        </select>
                        <span class=\"text-muted\">{{'Choose or add a new client that will receive the package'|__}}</span>
                    </div>
                    <div class=\"form-group row\">
                        <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                            <option value=\"{{order.receiver_address_id}}\" selected>{{order.receiver_address.name}}</option>
                            <option data-hidden=\"true\"></option>
                        </select>
                    </div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiver\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"row\">
                                    <div class=\"form-group col-lg-5\">
                                        <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-4\">
                                        <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                        <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                    </div>
                                    <div class=\"form-group col-lg-3\">
                                        <label>{{'Gender'|__}}</label>
                                        <div class=\"kt-radio-inline\">
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\"> {{'Male'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t\t<label class=\"kt-radio\">
                \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\"> {{'Female'|__}}
                \t\t\t\t\t\t\t\t<span></span>
                \t\t\t\t\t\t\t</label>
                \t\t\t\t\t\t</div>
                                    </div>
                                </div>
                                <div class=\"location-receiver\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for county in areas %}
                                                    <option value=\"{{county.id}}\">{{county.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Google Map'|__}}</label>
                                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                    {% if user.hasUserPermission('client', 'c') %}
                                        <div class=\"form-group row\">
                                            <label class=\"col-xl-3 col-lg-3 col-form-label\"></label>
                                            <div class=\"col-lg-9 col-xl-6\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\"> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Email'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Username'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">{{'Password'|__}}:&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"password\" class=\"form-control password\" name=\"receiver[password]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"row kt-hidden\" id=\"addnewreceiveraddress\">
                        <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
            \t\t\t\t<div class=\"kt-portlet__head\">
            \t\t\t\t\t<div class=\"kt-portlet__head-label\">
            \t\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t\t\t\t{{'Add a new client address'|__}}
            \t\t\t\t\t\t</h3>
            \t\t\t\t\t</div>
            \t\t\t\t</div>
            \t\t\t\t<div class=\"kt-portlet__body\">
                                <div class=\"location-receiveraddress\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-5\">
                                            <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" required/>
                                            <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                            <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                            <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'Country'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for country in countries %}
                                                    <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-3\">
                                            <label>{{'Postal Code'|__}}</label>
                                            <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'State / Region'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for state in states %}
                                                    <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %}>{{state.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'City'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\" required>
                                                <option data-hidden=\"true\"></option>
                                                {% for city in cities %}
                                                    <option value=\"{{city.id}}\">{{city.name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <div class=\"form-group col-lg-4\">
                                            <label>{{'County'|__}}</label>
                                            <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                <option data-hidden=\"true\"></option>
                                                {% for county in areas %}
                                                    <option value=\"{{county.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{county.lang(currentLang).name}}\"{% endif %}>{{county.lang('en').name}}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Google Map'|__}}</label>
                                            <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                            <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                        </div>
                                    </div>
                                </div>
            \t\t\t\t</div>
                            <div class=\"kt-portlet__foot\">
                \t\t\t\t<div class=\"row align-items-center\">
                \t\t\t\t\t<div class=\"col-lg-12\">
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                \t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                \t\t\t\t\t</div>
                \t\t\t\t</div>
                \t\t\t</div>
            \t\t\t</div>
        \t\t\t</div>
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"form-group row\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" {% if order.return_defray == 1 %}checked{% endif %} required> {{'Yes'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" {% if order.return_defray == 2 %}checked{% endif %} required> {{'No'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"package_fee\" value=\"{{order.package_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if user.role_id != 5 %}
                        <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                            <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return Shipment Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"input-group\">
                                    {% if primary_currency.place_symbol_before == 1 %}
                                        <div class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                {{primary_currency.currency_symbol}}
                                            </span>
                                        </div>
                                    {% endif %}
                    \t\t\t\t\t<input type=\"text\" class=\"form-control\" data-type='currency' name=\"return_courier_fee\" value=\"{{order.return_courier_fee}}\" required />
                                    {% if primary_currency.place_symbol_before == 0 %}
                                        <div class=\"input-group-append\">
                                            <span class=\"input-group-text\">
                                                {{primary_currency.currency_symbol}}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"form-group row {% if return_defray == 2 %}kt-hidden{% endif %} package_fee\">
                        <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"col-lg-9 col-xl-6\">
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" class=\"return_package_fee\" name=\"return_package_fee\" value=\"1\" {% if order.return_package_fee == 1 %}checked{% endif %} required> {{'Receiver'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" class=\"return_package_fee\" name=\"return_package_fee\" value=\"2\" {% if order.return_package_fee == 2 %}checked{% endif %} required> {{'Sender'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-lg-12 type_1\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__head\">
\t\t\t\t<div class=\"kt-portlet__head-label\">
\t\t\t\t\t<h3 class=\"kt-portlet__head-title\">
\t\t\t\t\t\t{{'Shipment Details'|__}}
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"kt-portlet__body\">
                <div class=\"form-group form-group-last kt-hide\">
    \t\t\t\t<div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
    \t\t\t\t\t<div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
    \t\t\t\t  \t<div class=\"alert-text\">
                            {{'Oh snap! Change a few things up and try submitting again'|__}}.
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"alert-close\">
    \t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t    \t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
    \t\t\t\t\t  \t</button>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
                <div class=\"kt-section\">
\t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
\t\t\t\t\t\t{{'Package Content'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"kt-section__content\" id=\"kt_repeater_1\">
                        <div class=\"form-group form-group-last row\">
                            <div data-repeater-list=\"items\" class=\"col-lg-12\">
                                <div data-repeater-item class=\"align-items-center new\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label>{{'Category'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                        <option data-hidden=\"true\"></option>
                                                        {% for category in categories %}
                                                            <option value=\"{{category.id}}\">{{category.name}}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Description'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control\" name=\"description\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Quantity'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Weight'|__}}:</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\">
                                \t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"kt-form__group--inline\">
                                                <div class=\"kt-form__label\">
                                                    <label class=\"kt-label m-label--single\">{{'Dimensions'|__}}&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[{{'Length'|__}}&nbsp;x&nbsp;{{'Width'|__}}&nbsp;x&nbsp;{{'Height'|__}}] ({{'cm'|__}}):</label>
                                                </div>
                                                <div class=\"kt-form__control\">
                                                    <div class=\"input-group\">
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                            <span class=\"input-group-text\">
                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" style=\"max-width: 100px;\">
                                                            </span>
                                                        </div>
                        \t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                            <div class=\"d-md-none kt-margin-b-10\"></div>
                                        </div>
                                    </div>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25 delete_btn\">
                                                <i class=\"la la-trash-o\"></i>
                                                {{'Delete'|__}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {% for item in order.items %}
                                    <div data-repeater-item class=\"align-items-center\">
                                        <input type=\"hidden\" name=\"id\" value=\"{{item.id}}\" />
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label>{{'Category'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                            <option data-hidden=\"true\"></option>
                                                            {% for category in categories %}
                                                                <option value=\"{{category.id}}\" {% if item.category_id == category.id %}selected{% endif %}>{{category.name}}</option>
                                                            {% endfor %}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Description'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control\" name=\"description\" value=\"{{item.description}}\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Quantity'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"{{item.quantity}}\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Weight'|__}}:</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                                    \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                            \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn sub_weight\" name=\"weight\" value=\"{{item.weight}}\">
                                    \t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-12\">
                                                <div class=\"kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"kt-label m-label--single\">{{'Dimensions'|__}}&nbsp;<i class=\"flaticon2-delivery-package\"></i>&nbsp;[{{'Length'|__}}&nbsp;x&nbsp;{{'Width'|__}}&nbsp;x&nbsp;{{'Height'|__}}] ({{'cm'|__}}):</label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <div class=\"input-group\">
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"length\" value=\"{{item.length}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" value=\"{{item.width}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                            \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                <span class=\"input-group-text\">
                                                                    <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" value=\"{{item.height}}\" style=\"max-width: 100px;\">
                                                                </span>
                                                            </div>
                            \t\t\t\t\t\t\t</div>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <div class=\"col-md-3\">
                                                <a href=\"javascript:;\" data-repeater-delete=\"\" class=\"btn-sm btn btn-label-danger btn-bold kt-margin-t-25\">
                                                    <i class=\"la la-trash-o\"></i>
                                                    {{'Delete'|__}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                         </div>
                         <div class=\"form-group form-group-last row\">
                             <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                 <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                     <i class=\"la la-plus\"></i> {{'Add Item'|__}}
                                 </a>
                             </label>
                        </div>
                    </div>
                </div>
                {% if user.role_id != 5 %}
                    <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                    <div class=\"kt-section\">
    \t\t\t\t\t<div class=\"kt-section__content\">
                            <div class=\"row\">
                                <div class=\"kt-hidden form-group col-lg-4\">
                                    <label>{{'Order Number'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">{{settings.tracking.prefix_order}}</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control mask\" name=\"number\" value=\"{{order.number}}\" aria-describedby=\"basic-addon1\">
                \t\t\t\t\t</div>
                                </div>
                                {% if settings.taxes.type == 1 %}
                                <div class=\"form-group col-lg-6\">
                                    <label>{{'Tax'|__}} & {{'Duty'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"tax\" value=\"{{order.tax}}\">
                \t\t\t\t\t</div>
                                </div>
                                {% else %}
                                <div class=\"form-group col-lg-3\">
                                    <label>{{'SGST'|__}}</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"sgst\" value=\"{{order.tax_sgst}}\">
                                    </div>
                                </div>
                                <div class=\"form-group col-lg-3\">
                                    <label>{{'CGST'|__}}</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"cgst\" value=\"{{order.tax_cgst}}\">
                                    </div>
                                </div>
                                {% endif %}
                                <div class=\"form-group col-lg-6\">
                                    <label>{{'Insurance'|__}}</label>
                                    <div class=\"input-group\">
                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">%</span></div>
                \t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"insurance\" value=\"{{order.insurance}}\">
                \t\t\t\t\t</div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Shipping Mode'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"mode_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for mode in modes %}
                                            <option value=\"{{mode.id}}\" {% if order.mode_id == mode.id %}selected{% endif %}>{{mode.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Customs Value'|__}}</label>
                                    <input type=\"text\" class=\"form-control\" name=\"customs_value\" value=\"{{order.customs_value}}\" aria-describedby=\"basic-addon1\">
                                </div>
                                <div class=\"form-group col-lg-4\">
                                    <label>{{'Courier Company'|__}}</label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"courier_id\">
                                        <option data-hidden=\"true\"></option>
                                        {% for courier in couriers %}
                                            <option value=\"{{courier.id}}\" {% if order.courier_id == courier.id %}selected{% endif %}>{{courier.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-6\">
                                    <label>{{'Delivery Time'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"delivery_time_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        {% for deliverytime in deliverytimes %}
                                            <option value=\"{{deliverytime.id}}\" {% if order.delivery_time_id == deliverytime.id %}selected{% endif %}>{{deliverytime.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group col-lg-6\">
                                    <label>{{'Delivery Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                                        <option data-hidden=\"true\"></option>
                                        {% for status in statuses %}
                                            <option value=\"{{status.id}}_{{status.equal}}\" {% if order.status_id == status.id %}selected{% endif %}>{{status.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"form-group col-lg-6\">
                                    <label>{{'Shipping Fee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        {% if primary_currency.place_symbol_before == 1 %}
                                            <div class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                                        <input type=\"text\" class=\"form-control\" data-type='currency' name=\"courier_fee\" value=\"{{order.courier_fee}}\" id=\"delivery_cost\" required>
                                        {% if primary_currency.place_symbol_before == 0 %}
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">
                                                    {{primary_currency.currency_symbol}}
                                                </span>
                                            </div>
                                        {% endif %}
                                    </div>
                                </div>

                                <div class=\"form-group col-lg-6\">                                    
                                    <label>{{'Total Weight'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\"><span class=\"input-group-text\">{{'Kg'|__}}</span></div>
                                        <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn total_weight\" name=\"total_weight\" value=\"0\">
                                    </div>
                                </div>

                            </div>
                            {% if (user.hasUserPermission('assign', 'c')) %}
                                <div class=\"form-group row kt-margin-t-20\">
                                    <label class=\"col-xl-3 col-lg-3 col-form-label\">{{'Assign Employee'|__}}</label>
                                    <div class=\"col-lg-9 col-xl-6\">
                                        <select class=\"form-control\" data-live-search=\"true\" name=\"assigned_id\">
                                            <option data-hidden=\"true\"></option>
                                            {% for employee in employees %}
                                                <option value=\"{{employee.id}}\" {% if order.assigned_id == employee.id %}selected{% endif %}>{{employee.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endif %}
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"kt-portlet\">
            <div class=\"kt-portlet__foot\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" class=\"btn btn-primary save\">{{'Update'|__}}</button>
                        <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{this.page.child_of|page}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_close() }}

{% put styles %}
    <style>
        .table-bordered tr td:first-child {
            width: 200px;
            font-weight: bold;
        }
        .map_canvas {
          height: 350px;
        }
        .filter-option-inner br {
            display: none;
        }
        .select2 {
            width: 100% !important;
        }
\t\t.select2-selection {
\t\t\tmin-height: 36px !important;
\t\t}
        #addnewsender,#addnewsenderaddress,#addnewreceiver,#addnewreceiveraddress{
            box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.3);
        }
        .kt-portlet .kt-portlet__head .kt-portlet__head-label .kt-portlet__head-title {
            font-weight: 700;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCjN-FapLWoOHL6QOnVcwjFmesRdCyUiAc\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function () {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });

    function formatRepo(repo) {
        if (repo.loading) return repo.text;
        var markup = \"<div class='select2-result-repository clearfix'>\" +
                        \"<div class='select2-result-repository__meta'>\" +
                        \"<div class='select2-result-repository__title'>\" + repo.text + \"</div>\";
                        if (repo.mobile) {
                            markup += \"<div class='select2-result-repository__description'>\" + repo.mobile + \"</div>\";
                        }
                    markup += \"</div></div>\";
        return markup;
    }

    function formatRepoSelection(repo) {
        return repo.text || repo.id;
    }

    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$('.show_receiver_info:checked').val();
        if(selected == 2){
            \$('.receiver_information').addClass('kt-hidden');
        }else{
            \$('.receiver_information').removeClass('kt-hidden');
        }
    });

    \$('body').on('click', '#type', function(e){
        var selected = \$(this).val();
        if(selected == 2){
            \$('.type_1').addClass('kt-hidden');
            \$('.type_2').removeClass('kt-hidden');
            \$('.type_1').addClass('col-lg-6');
            \$('.type_1').removeClass('col-lg-12');
        }else{
            \$('.type_1').removeClass('kt-hidden');
            \$('.type_2').addClass('kt-hidden');
            var show_receiver_info = \$('.show_receiver_info:checked').val();
            if(show_receiver_info == 2){
                \$('.receiver_information').addClass('kt-hidden');
            }else{
                \$('.receiver_information').removeClass('kt-hidden');
            }
            \$('.type_1').removeClass('col-lg-6');
            \$('.type_1').addClass('col-lg-12');
        }

        var show_receiver_info = \$('.show_receiver_info:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var total_weight = \$('.total_weight').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         
         if(selected != '' && selected != 'new'){
            
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: selected, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('change', '.total_weight', function(e){
        var total_weight = \$(this).val();
        var type = \$('#type:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var sender_address_id = \$('#sender_address_id').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        
        \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                        //alert(response.delivery_cost);
                        //alert(response.return_courier_fee);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
    });

     \$('body').on('click', '.return_package_fee', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });

    \$('body').on('click', '.show_receiver_info', function(e){
        var selected = \$(this).val();

        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: selected,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
    });


    \$('body').on('change', '#sender_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.sender_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewsender').removeClass('kt-hidden');
            \$('.payment').addClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsender').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');
                     {% if addShipmentForm == \"add_form_normal\" %}
                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');   
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     {% endif %}
                     if(response.default == 'new'){
                         \$('#addnewsenderaddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewsenderaddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     var type = \$('#type:checked').val();
                     var receiver_address_id = \$('#receiver_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsender');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 {% if addShipmentForm == \"add_form_normal\" %}
                 data: {name: parent.find('.name').val(),email: parent.find('.email').val(), vat: parent.find('.vat').val(),budget: parent.find('.budget').val() ,street_addr: parent.find('.street').val(), num: parent.find('.num').val(), box: parent.find('.box').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val(), lang: parent.find('.lang').find(\"option:selected\").val(), clearance: parent.find('.clearance').val(), fiscal: parent.find('.fiscal').val(),payment_term: parent.find('.payment_term').val(),price_kg: parent.find('.price_kg').val(),storage_fee: parent.find('.feeRadio:checked').val(),cost_24: parent.find('.cost_24').val(),cost_48: parent.find('.cost_48').val()},
                 {% else %}
                 data: { name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 {% endif %}
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#sender_id').append(newOption).trigger('change');
                     \$('select.sender_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.sender_address_id').val(response.address_id).selectpicker('refresh');
                     {% if addShipmentForm == \"add_form_normal\" %}
                     \$('#clearance').val(response.clearance);
                     \$('#fiscal').val(response.fiscal);
                     \$('#payment_term').val(response.payment_term);
                     \$('#price_kg').val(response.price_kg);
                     if(response.storage_fee == 1){
                        \$('#storage_yes').prop('checked',true);
                        \$('#cost_24').val(response.cost_24);
                        \$('#cost_48').val(response.cost_48);
                        \$('#ccost').removeClass('kt-hidden');   
                     }else{
                        \$('#storage_no').prop('checked',true);
                        \$('#ccost').addClass('kt-hidden');
                     }
                     \$('.payment').removeClass('kt-hidden');
                     {% endif %}
                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsender').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsender .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#sender_id').append(newOption).trigger('change');
        \$('#addnewsender').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '#packaging_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = selected;
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != ''){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                    //alert(response.delivery_cost);
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });

    \$('body').on('changed.bs.select', '.sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewsenderaddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewsenderaddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewsenderaddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewsenderaddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            //alert(\$('#sender_id').val());
            \$.request('onNewclientaddress', {
                {% if addShipmentForm == \"add_form_normal\" %}
                 data: {client_id: \$('#sender_id').val(),street_addr: parent.find('.street_addr').val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(),  country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 {% else %}
                 data: {client_id: \$('#sender_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 {% endif %}                 
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.sender_address_id').html(response.html).selectpicker('refresh');
                     \$('select.sender_address_id').val(response.default).selectpicker('refresh');

                     var selected = response.default;
                      var type = \$('#type:checked').val();
                      var receiver_address_id = \$('#receiver_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewsenderaddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewsenderaddress .cancel', function(e){
        e.preventDefault();
        \$('select.sender_address_id').val('').selectpicker('refresh');
        \$('#addnewsenderaddress').addClass('kt-hidden');
    });



    \$('body').on('change', '#receiver_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('select.receiver_address_id').html('').val('').selectpicker('refresh');
            \$('#addnewreceiver').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiver').addClass('kt-hidden');
            \$.request('onClientaddresses', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');
                     if(response.default == 'new'){
                         \$('#addnewreceiveraddress').removeClass('kt-hidden');
                     }else if(selected != ''){
                         \$('#addnewreceiveraddress').addClass('kt-hidden');
                     }

                     var selected = response.default;
                     var type = \$('#type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     var show_receiver_info = \$('.show_receiver_info:checked').val();
                     var total_weight = \$('.total_weight').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                              success: function(response, status, xhr, \$form) {
                                   \$('#delivery_cost').val(response.delivery_cost);
                                   \$('#return_courier_fee').val(response.return_courier_fee);
                              }
                         });
                    }
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiver');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     var newOption = new Option(response.name, response.id, false, true);
                     \$('#receiver_id').append(newOption).trigger('change');
                     \$('select.receiver_address_id').html('<option value=\"'+response.address_id+'\">'+response.address_name+'</option>').selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.address_id).selectpicker('refresh');

                     var selected = response.address_id;
                      var type = \$('#type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      var show_receiver_info = \$('.show_receiver_info:checked').val();
                      var total_weight = \$('.total_weight').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                               success: function(response, status, xhr, \$form) {
                                    \$('#delivery_cost').val(response.delivery_cost);
                                    \$('#return_courier_fee').val(response.return_courier_fee);
                               }
                          });
                     }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiver').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiver .cancel', function(e){
        e.preventDefault();
        var newOption = new Option('', '', false, true);
        \$('#receiver_id').append(newOption).trigger('change');
        \$('#addnewreceiver').addClass('kt-hidden');
    });

    \$('body').on('changed.bs.select', '.receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        if(selected == 'new'){
            \$('#addnewreceiveraddress').removeClass('kt-hidden');
        }else if(selected != ''){
            \$('#addnewreceiveraddress').addClass('kt-hidden');
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .save', function(e){
        e.preventDefault();
        var parent = \$('#addnewreceiveraddress');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });

        if(validation){
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'primary',
                message: '{{\"Processing, please wait\"|__}}...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '{{\"Error!\"|__}}',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '{{\"OK\"|__}}',
                         confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                     });
                     KTApp.unblockPage();
                 },
                 success: function(response, status, xhr, \$form) {
                     \$('select.receiver_address_id').html(response.html).selectpicker('refresh');
                     \$('select.receiver_address_id').val(response.default).selectpicker('refresh');

                     var selected = response.default;
                       var type = \$('#type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       var show_receiver_info = \$('.show_receiver_info:checked').val();
                       var total_weight = \$('.total_weight').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                                success: function(response, status, xhr, \$form) {
                                     \$('#delivery_cost').val(response.delivery_cost);
                                     \$('#return_courier_fee').val(response.return_courier_fee);
                                }
                           });
                      }

                     KTApp.unblockPage();
                     parent.find('input,select').each(function(){
                         \$(this).val('');
                         \$(this).selectpicker('refresh');
                     });
                     \$('#addnewreceiveraddress').addClass('kt-hidden');
                 }
            });
        }
    });
    \$('body').on('click', '#addnewreceiveraddress .cancel', function(e){
        e.preventDefault();
        \$('select.receiver_address_id').val('').selectpicker('refresh');
        \$('#addnewreceiveraddress').addClass('kt-hidden');
    });


    \$('body').on('changed.bs.select', '.country_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            {% if addShipmentForm == \"add_form_normal\" %}
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
            {% else %}
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
            {% endif %}
       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.city_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.city_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListareas', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.area_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#sender_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var type = \$('#type:checked').val();
        var receiver_address_id = \$('#receiver_address_id').val();
        var packaging_id = \$('#packaging_id').val();
        var return_defray = \$('.return_defray:checked').val();
        var return_package_fee = \$('.return_package_fee:checked').val();
        var show_receiver_info = \$('.show_receiver_info:checked').val();
        var total_weight = \$('.total_weight').val();
        if(selected != '' && selected != 'new'){
            \$.request('onChangefees', {
                 data: {sender_address_id: selected, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                 success: function(response, status, xhr, \$form) {
                      \$('#delivery_cost').val(response.delivery_cost);
                      \$('#return_courier_fee').val(response.return_courier_fee);
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('#type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });




    \$(\".clients\").select2({
        {% if currentLang == 'ar'%}
            dir: \"rtl\",
        {% endif %}
        language: {
            errorLoading: function () {
                return \"{{'There is an error while searching'|__}}...\";
            },
            inputTooLong: function (args) {
                return \"{{'You must enter less characters'|__}}...\";
            },
            inputTooShort: function (args) {
                return \"{{'You must enter more characters'|__}}...\";
            },
            loadingMore: function () {
                return \"{{'Loading More'|__}}...\";
            },
            maximumSelected: function (args) {
                return \"{{'Maximum element has been selected'|__}}...\";
            },
            noResults: function () {
                return \"{{'No result found'|__}}...\";
            },
            searching: function () {
                return \"{{'Searching'|__}}...\";
            }
        },
        placeholder: \"{{'Search for client'|__}}\",
        allowClear: true,
        ajax: {
            transport: function(params, success, failure) {
                var \$request = \$.request('onGetclients', {
                    data: params.data,
                })
                \$request.done(success)
                \$request.fail(failure)

                return \$request
            },
            dataType: 'json',
            processResults: function (response) {
                return {
                    results: response
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        minimumInputLength: 0,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });


    \$('body').on('change', '.sub_weight', function(){
        var all = \$('.sub_weight').map(function(){
            return this.value;
        }).get();
        
        var total_weight =0;
        for (var i=0;i<all.length;i++)
        {
            total_weight =total_weight + parseInt(all[i]);
        }
        \$('.total_weight').val(total_weight);

        var sender_address_id = \$('#sender_address_id').val();
         var receiver_address_id = \$('#receiver_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         {% if settings.shipments.enable_type != 1 %}
            var type = {{settings.shipments.type}};
        {% else %}        
            var type = \$('.type:checked').val();
        {% endif %}
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         var show_receiver_info = \$('.show_receiver_info:checked').val();
         var total_weight = \$('.total_weight').val();
         \$.request('onChangefees', {
              data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
              success: function(response, status, xhr, \$form) {
                   \$('#delivery_cost').val(response.delivery_cost);
                   \$('#return_courier_fee').val(response.return_courier_fee);
              }
         });
     });
    \$('#kt_repeater_1').repeater({
        initEmpty: false,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '{{\"Nothing selected\"|__}}',
            });
            \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
                buttondown_class: 'btn btn-secondary',
                buttonup_class: 'btn btn-secondary',
                verticalbuttons: true,
                verticalup: '<i class=\"la la-plus\"></i>',
                verticaldown: '<i class=\"la la-minus\"></i>'
            });
            var repeater_item = \$(this);

        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');
    \$('.bootstrap-touchspin-vertical-btn').TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary',
        verticalbuttons: true,
        verticalup: '<i class=\"la la-plus\"></i>',
        verticaldown: '<i class=\"la la-minus\"></i>'
    });

    \$('.address').each(function(){
        var address = \$(this);
        address.geocomplete({
            map: \".map_canvas.map_\"+address.attr('rel'),
            mapOptions: {
                zoom: 18
            },
            markerOptions: {
                draggable: true
            },
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

    \$('body').on('click', '.connect', function(){
        if(\$(this).is(\":checked\")){
            \$('#connect_'+\$(this).val()).removeClass('kt-hidden');
        }else{
            \$('#connect_'+\$(this).val()).addClass('kt-hidden');
        }
    });

     \$('body').on('change', '#label_other', function(){
        if(\$(this).val() == 'other')
            \$('#div_label_other').removeClass('kt-hidden');
        else
            \$('#div_label_other').addClass('kt-hidden');
    });

    \$('body').on('change', '.feeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#cost').removeClass('kt-hidden');
        else
            \$('#cost').addClass('kt-hidden');
    });

    \$('body').on('change', '.cfeeRadio', function(){
        if(\$(this).val() == 'yes')
            \$('#ccost').removeClass('kt-hidden');
        else
            \$('#ccost').addClass('kt-hidden');
    });

    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');

            var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('#type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             var show_receiver_info = \$('.show_receiver_info:checked').val();
             var total_weight = \$('.total_weight').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee,show_receiver_info:show_receiver_info,total_weight:total_weight},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });

        }else{
            \$('.package_fee').addClass('kt-hidden');
        }
    });
    \$(\".fees\").inputmask('999{{primary_currency.thousand_separator}}999{{primary_currency.thousand_separator}}999{{primary_currency.decimal_point}}{% for i in '1'..primary_currency.initbiz_money_fraction_digits %}9{% endfor %}', {
        numericInput: true
    });

    \$(\"body\").on('keyup', '.mask', function(e){
        \$(this).val(('{% for i in '1'..settings.tracking.numbers_order %}0{% endfor %}' + \$(this).val()).slice(-{{settings.tracking.numbers_order}}));
    });
});
</script>
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/order-edit.htm", "");
    }
}
