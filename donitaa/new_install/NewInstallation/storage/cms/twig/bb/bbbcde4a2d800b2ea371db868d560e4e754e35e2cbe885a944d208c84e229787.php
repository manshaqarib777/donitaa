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

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/dashboard/shipments.htm */
class __TwigTemplate_76078827883a3110f803fb5012e50349e2d34bf2a756d454af9d8b64b0f012f0 extends \Twig\Template
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
        echo "<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 6) == 5)) {
            // line 7
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
            // line 8
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 8) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 8), "type", [], "any", false, false, false, 8) == "saved"))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>";
            // line 9
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
            echo "
                    </a>
                </li>
                ";
        }
        // line 13
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 14) != 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "requests"))) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>";
        // line 15
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Requests"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19) == "approved")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>";
        // line 20
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24) == "assigned")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>";
        // line 25
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) == "withdriver")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>";
        // line 30
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered To Driver"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) == "stock")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>";
        // line 35
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "custom")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#custom\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>";
        // line 40
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Custom"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "postponed")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>";
        // line 45
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 49), "type", [], "any", false, false, false, 49) == "delivered")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>";
        // line 50
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 54), "type", [], "any", false, false, false, 54) == "supplied")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>";
        // line 55
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "
                    </a>
                </li>
                ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 58) != 5)) {
            // line 59
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 60), "type", [], "any", false, false, false, 60) == "manifest")) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>";
            // line 61
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 65
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 66), "type", [], "any", false, false, false, 66) == "all")) {
            echo "active";
        }
        echo "\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>";
        // line 67
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 75) == 5)) {
            // line 76
            echo "                <div class=\"tab-pane  ";
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 76) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 76), "type", [], "any", false, false, false, 76) == "saved"))) {
                echo "active";
            }
            echo "\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            ";
        }
        // line 80
        echo "            <div class=\"tab-pane  ";
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 80), "type", [], "any", false, false, false, 80)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 80), "type", [], "any", false, false, false, 80) == "requests"))) {
            echo "active";
        }
        echo "\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83) == "approved")) {
            echo "active";
        }
        echo "\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 86), "type", [], "any", false, false, false, 86) == "assigned")) {
            echo "active";
        }
        echo "\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 89), "type", [], "any", false, false, false, 89) == "withdriver")) {
            echo "active";
        }
        echo "\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 92), "type", [], "any", false, false, false, 92) == "stock")) {
            echo "active";
        }
        echo "\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 95), "type", [], "any", false, false, false, 95) == "custom")) {
            echo "active";
        }
        echo "\" id=\"custom\" role=\"tabpanel\">
                <div class=\"kt-datatable-custom\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 98), "type", [], "any", false, false, false, 98) == "postponed")) {
            echo "active";
        }
        echo "\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 101), "type", [], "any", false, false, false, 101) == "supplied")) {
            echo "active";
        }
        echo "\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104) == "delivered")) {
            echo "active";
        }
        echo "\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 107) != 5)) {
            // line 108
            echo "                <div class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 108), "type", [], "any", false, false, false, 108) == "manifest")) {
                echo "active";
            }
            echo "\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            ";
        }
        // line 112
        echo "            <div class=\"tab-pane ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 112), "type", [], "any", false, false, false, 112) == "all")) {
            echo "active";
        }
        echo "\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 123
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 128
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSavemanifest", ["flash" => true, "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 133
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+1 day"), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 135)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 144
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign to specifc car?"]);
        echo "</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>";
        // line 153
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 157
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 157), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>";
        // line 162
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Car"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 166
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "name", [], "any", false, false, false, 166), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 174
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 176
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 184
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Employee Orders"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 189
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPrint", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 193
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 195)), "html", null, true);
        echo "\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 203) != 4)) {
            // line 204
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 205
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 209
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 209), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 209), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "                                </select>
                            </div>
                        ";
        }
        // line 214
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 217
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-primary print\">";
        // line 218
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print"]);
        echo "</button>
                </div>
            ";
        // line 220
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 230
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipments Statuses"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 235
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditStatus", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_statuses_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 239
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 239) != 4)) {
            // line 240
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 241
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipmentStatuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 245
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 245), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 245), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                                </select>
                            </div>
                        ";
        }
        // line 250
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 254
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                </div>
            ";
        // line 256
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

<!-- assign employee -->
<div class=\"modal fade\" id=\"assign_shipmentEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 266
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Shipments to "]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 271
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onAssignEmployee", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipment_employee_id\" class=\"form-control\" name=\"id\" />
                        ";
        // line 275
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 275) != 4)) {
            // line 276
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 277
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 281
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 281), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 281), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "                                </select>
                            </div>
                        ";
        }
        // line 286
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 289
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 290
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 292
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

<!-- assign employee selected shipments-->
<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 302
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Shipments to "]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 307
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onAssignSelectedEmployee", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_employee_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 311
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 311) != 4)) {
            // line 312
            echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
            // line 313
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employee"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    ";
            // line 316
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 317
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 317), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 317), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                                </select>
                            </div>
                        ";
        }
        // line 322
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 325
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 326
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 328
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>


<!-- print shipments label -->
<div class=\"modal fade\" id=\"print_lable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipments Label "]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 344
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPrintShipments", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_label_id\" class=\"form-control\" name=\"ids\" />
                        ";
        // line 348
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 348) != 4)) {
            // line 349
            echo "                            <div class=\"form-group col-lg-12\">
                                <p>Are you sure to print <span id=\"shipments_length\"></span>  selected records ?</p>
                            </div>
                        ";
        }
        // line 353
        echo "                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 356
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">";
        // line 357
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print"]);
        echo "</button>
                </div>
            ";
        // line 359
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>

";
        // line 364
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 365
        echo "<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"";
        // line 386
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Created On"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"";
        // line 394
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"";
        // line 403
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Responsiable"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"";
        // line 412
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"";
        // line 415
        echo url("dashboard/shipments/manifest");
        echo "/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"";
        // line 424
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["By"]);
        echo "\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"";
        // line 431
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No. Of Orders"]);
        echo "\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"";
        // line 451
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 140,
                    template: function(row) {
                        return '<a href=\"";
        // line 455
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 455), "prefix_order", [], "any", false, false, false, 455), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 455), "numbers_order", [], "any", false, false, false, 455), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 460
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"";
        // line 468
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 468)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 471
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 477
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 480
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"";
        // line 485
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 485)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 488
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 494
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 497
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 506
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo ":</b> ' + data.office + '</a>\\
                                        </div>\\
                                    </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 512
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo ":</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                        return output;
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 520
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        //alert(row.paymentStatus)
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 526
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 534
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }

                            if(row.paymentStatus == 0){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 538
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Pending"]);
        echo "</span>';
                            }
                            if(row.paymentStatus == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-info\">";
        // line 541
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Received Employee"]);
        echo "</span>';
                            }
                            if(row.paymentStatus == 2){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 544
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Received"]);
        echo "</span>';
                            }

                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 548
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 551
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                            // if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                            //     output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">";
        // line 554
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Stock"]);
        echo "</span>';
                            // }
                            if(row.requested == 3 || row.requested == 14 ){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 557
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"Actions\",
                    width: 'auto',
                    title: \"";
        // line 567
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 573
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';


                            ";
        // line 576
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 576) != 5)) {
            // line 577
            echo "                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 578
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approve"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            ";
        }
        // line 581
        echo "
                            ";
        // line 582
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 582) != 5)) {
            // line 583
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"";
            // line 584
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            ";
        }
        // line 587
        echo "
                            ";
        // line 588
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 588) != 5)) {
            // line 589
            echo "                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 590
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            ";
        }
        // line 593
        echo "

                            ";
        // line 595
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 595) != 5)) {
            // line 596
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 597
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["set as Deliveried"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            ";
        }
        // line 600
        echo "
                            ";
        // line 601
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 601) != 5)) {
            // line 602
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 603
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            ";
        }
        // line 606
        echo "
                            ";
        // line 607
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 607) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 607) != 5))) {
            // line 608
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 609
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 612
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 612) == 5)) {
            // line 613
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 613), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 614
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 617
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 618
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 620
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 620)) {
            // line 621
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 622
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 625
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 625)) {
            // line 626
            echo "                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 627
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 630
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            ";
        // line 632
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 632)) {
            // line 633
            echo "                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 634
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 637
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 637) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 637) != 5))) {
            // line 638
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 639
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 642
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 642) == 5)) {
            // line 643
            echo "                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 643), "html", null, true);
            echo ")){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 644
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 647
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"";
        // line 668
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking"]);
        echo "\",
                    sortable: true,
                    width: 140,
                    template: function(row) {
                        return '<a href=\"";
        // line 672
        echo url("dashboard/shipments");
        echo "/'+row.id+'/view\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 672), "prefix_order", [], "any", false, false, false, 672), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 672), "numbers_order", [], "any", false, false, false, 672), "html", null, true);
        echo "'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"";
        // line 677
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Details"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"";
        // line 685
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 685)) {
            echo url("dashboard/clients");
            echo "/'+data.sender.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 688
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 694
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo ":</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 697
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"";
        // line 702
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "r"], "method", false, false, false, 702)) {
            echo url("dashboard/clients");
            echo "/'+data.receiver.id+'/view";
        } else {
            echo "javascript:;";
        }
        echo "\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 711
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo ":</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">";
        // line 714
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["From"]);
        echo ":</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';


                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 725
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branch"]);
        echo ":</b> ' + data.office + '</a>\\
                                    </div>\\
                                </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">";
        // line 731
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Date"]);
        echo ":</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                        return output;
                    }
                },
                {
                    field: \"status\",
                    title: \"";
        // line 739
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">";
        // line 744
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved"]);
        echo "</span>';
                        }else{
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">";
        // line 752
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
        echo "</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">";
        // line 755
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returning Discards"]);
        echo "</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 758
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">";
        // line 761
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Stock"]);
        echo "</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">";
        // line 764
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom"]);
        echo "</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"Actions\",
                    width: 'auto',
                    title: \"";
        // line 774
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Actions"]);
        echo "\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"";
        // line 780
        echo url("dashboard/shipments");
        echo "/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["View Shipment"]);
        echo "\"><i class=\"la la-eye\"></i></button>';


                            ";
        // line 783
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 783) != 5)) {
            // line 784
            echo "                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 785
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approve"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            ";
        }
        // line 788
        echo "
                            ";
        // line 789
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 789) != 5)) {
            // line 790
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"";
            // line 791
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            ";
        }
        // line 794
        echo "
                            ";
        // line 795
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 795) != 5)) {
            // line 796
            echo "                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 797
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            ";
        }
        // line 800
        echo "

                            ";
        // line 802
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 802) != 5)) {
            // line 803
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 804
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["set as Deliveried"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            ";
        }
        // line 807
        echo "
                            ";
        // line 808
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 808) != 5)) {
            // line 809
            echo "                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"";
            // line 810
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
            echo "\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            ";
        }
        // line 813
        echo "
                            ";
        // line 814
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 814) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 814) != 5))) {
            // line 815
            echo "                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"";
            // line 816
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 819
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 819) == 5)) {
            // line 820
            echo "                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 820), "html", null, true);
            echo "){
                                    output += '<a href=\"";
            // line 821
            echo url("dashboard/shipments");
            echo "/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit Shipment"]);
            echo "\"><i class=\"la la-edit\"></i></button>';
                                }
                            ";
        }
        // line 824
        echo "                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"";
        // line 825
        echo url("dashboard/shipments");
        echo "/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
        echo "\"><i class=\"la la-print\"></i></button>';
                                }
                            ";
        // line 827
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 827)) {
            // line 828
            echo "                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"";
            // line 829
            echo url("dashboard/shipments");
            echo "/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
            echo "\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            ";
        }
        // line 832
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 832)) {
            // line 833
            echo "                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"";
            // line 834
            echo url("dashboard/shipments");
            echo "/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Status"]);
            echo "\"><i class=\"la la-street-view\"></i></button>';
                                }
                            ";
        }
        // line 837
        echo "                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            ";
        // line 839
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 839)) {
            // line 840
            echo "                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"";
            // line 841
            echo url("dashboard/shipments");
            echo "/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mark as delivered"]);
            echo "\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            ";
        }
        // line 844
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 844) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 844) != 5))) {
            // line 845
            echo "                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 846
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 849
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 849) == 5)) {
            // line 850
            echo "                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 850), "html", null, true);
            echo ")){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
            // line 851
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete Shipment"]);
            echo "\"><i class=\"la la-remove\"></i></a>';
                                }
                            ";
        }
        // line 854
        echo "                        '</div>';

                        return output;
                    },
                }
            ]
        }

        var path = location.pathname;
        var directories = path.split(\"/\");
        var lastDirecotry = directories[(directories.length - 2)]+'/'+directories[(directories.length - 1)];
        

        if(lastDirecotry == 'shipments/view') {
            history.go(-1);
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '";
        // line 874
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...',
                    noRecords: '";
        // line 875
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No records found"]);
        echo "'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '";
        // line 881
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["First"]);
        echo "',
                                prev: '";
        // line 882
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Previous"]);
        echo "',
                                next: '";
        // line 883
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Next"]);
        echo "',
                                last: '";
        // line 884
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Last"]);
        echo "',
                                more: '";
        // line 885
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["More pages"]);
        echo "',
                                input: '";
        // line 886
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Page number"]);
        echo "',
                                select: '";
        // line 887
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select page size"]);
        echo "'
                            },

                            info: \"";
        // line 890
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Displaying"]);
        echo " ";
        echo "{{";
        echo "start";
        echo "}}";
        echo " - ";
        echo "{{";
        echo "end";
        echo "}}";
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["of"]);
        echo " ";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["records"]);
        echo "\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '";
        // line 915
        echo url("api/shipments");
        echo "/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            console.log(e);
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 989
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status to"]);
        echo " \" + status + \" ?\",
                    type: \"info-\",

                    confirmButtonText: \"";
        // line 992
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 996
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '";
        // line 1001
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted"]);
        echo "!',
                            text: '";
        // line 1002
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records statuses have been updated"]);
        echo "!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 1005
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1012
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1013
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records statuses have not been updated"]);
        echo "!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"";
        // line 1016
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 1044
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 1047
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 1051
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 1059
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                    text: '";
        // line 1060
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 1063
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1073
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1074
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1077
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 1092
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete this item ?"]);
        echo "\",
                type: \"danger\",

                confirmButtonText: \"";
        // line 1095
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 1099
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '";
        // line 1108
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                                text: '";
        // line 1109
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected record has been deleted! :("]);
        echo "',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '";
        // line 1112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 1122
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 1123
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected record has not been deleted! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1126
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 1148
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to send all"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records to the company?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 1151
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 1155
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '";
        // line 1163
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sent Successfully!"]);
        echo "',
                                    text: '";
        // line 1164
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been sent to the company!"]);
        echo "',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '";
        // line 1167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1175
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1176
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your shipments not sent, and they still just on your account! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1179
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"";
        // line 1201
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure you want to create new manifest with"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records ?"]);
        echo "\",
                    type: \"error\",

                    confirmButtonText: \"";
        // line 1204
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes!"]);
        echo "\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '";
        // line 1208
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1216
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1217
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1220
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        // \$('body').on('click', '#updateStatus', function (e) {
        //     \$('#change_status').modal('toggle');
        // });
        \$('body').on('click', '#updateStatus', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 1245
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to update"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records status "]);
        echo " ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 1248
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, update"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 1252
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_statuses_id').val(selected);
                        \$('#change_status').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1260
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1261
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1264
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });




        // \$('body').on('click', '#assignEmployee', function (e) {
        //     \$('#assign_employee').modal('toggle');
        // });
        

        \$('body').on('click', '.shipmentApproved', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 1287
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to approve shipment ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 1290
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 1295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                     \$.request('onShipmentApproved', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 1306
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                        window.location.href = \"";
        // line 1308
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1308), "type", [], "any", false, false, false, 1308), "html", null, true);
        echo "\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 1317
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 1318
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not received! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1321
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
           

        });


        \$('body').on('click', '.shipmentReceived', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 1338
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to received shipment ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 1341
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 1346
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                     \$.request('onShipmentReceived', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 1357
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                        window.location.href = \"";
        // line 1359
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1359), "type", [], "any", false, false, false, 1359), "html", null, true);
        echo "\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 1368
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 1369
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not received! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1372
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
           

        });

        

        \$('body').on('click', '.shipmentPaid', function (e) {
            e.preventDefault();
            //alert('done');
            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 1390
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delivered&paid shipment ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 1393
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 1398
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onShipmentPaid', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                        KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 1409
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                        window.location.href = \"";
        // line 1411
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1411), "type", [], "any", false, false, false, 1411), "html", null, true);
        echo "\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 1420
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 1421
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not delivered&paid! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1424
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
            

        });

        \$('body').on('click', '.shipmentDeliveried', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 1440
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delivered shipment ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 1443
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 1448
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onShipmentDeliveried', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 1459
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                        window.location.href = \"";
        // line 1461
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1461), "type", [], "any", false, false, false, 1461), "html", null, true);
        echo "\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 1470
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 1471
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not delivered! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 1474
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
            

        });



        \$('body').on('click', '.assign_employee', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            \$('#shipment_employee_id').val(id);
            //alert(\$(this).attr('id'));
        });



        \$('body').on('click', '#assignEmployee', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"";
        // line 1509
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to assign"]);
        echo " \" + ids.length + \" ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["selected records to employee "]);
        echo " ?\",
                    type: \"info\",

                    confirmButtonText: \"";
        // line 1512
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, assign"]);
        echo "!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"";
        // line 1516
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_employee_id').val(selected);
                        \$('#assign_employee').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '";
        // line 1524
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                            text: '";
        // line 1525
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your manifest not created! :)"]);
        echo "',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 1528
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        //print shipments label
        \$('body').on('click', '#printShipments', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                \$('#shipments_label_id').val(selected);
                \$('#shipments_length').html(ids.length);
                \$('#print_lable').modal('toggle');
            }
        });



        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
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
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' ";
        // line 1581
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
        echo "');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    ";
        // line 1646
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1646), "type", [], "any", false, false, false, 1646)) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 1646) == 5))) {
            // line 1647
            echo "        KTAppUserListDatatable.init('saved');
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1648
($context["this"] ?? null), "param", [], "any", false, false, false, 1648), "type", [], "any", false, false, false, 1648))) {
            // line 1649
            echo "        KTAppUserListDatatable.init('requests');
    ";
        } else {
            // line 1651
            echo "        KTAppUserListDatatable.init('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1651), "type", [], "any", false, false, false, 1651), "html", null, true);
            echo "');

        if('";
            // line 1653
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1653), "type", [], "any", false, false, false, 1653), "html", null, true);
            echo "' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('";
            // line 1659
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 1659), "type", [], "any", false, false, false, 1659), "html", null, true);
            echo "' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    ";
        }
        // line 1668
        echo "
    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '";
        // line 1681
        echo url((($context["currentLang"] ?? null) . "/dashboard/shipments"));
        echo "/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1683
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Saved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1685
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Requests"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1687
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Approved Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1689
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1691
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Delivered To Driver"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1693
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postponed Shipments"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1695
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Stock"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'custom'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1697
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["In Custom"]);
        echo "');    
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1699
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1701
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1703
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
        echo "');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('";
        // line 1705
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["All Shipments"]);
        echo "');
        }

        var url = '";
        // line 1708
        echo url("dashboard/shipments");
        echo "/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '";
        // line 1723
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 1752
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
            location.reload();
        }
    });
});
</script>
";
        // line 364
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/shipments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3020 => 364,  3010 => 1752,  2978 => 1723,  2960 => 1708,  2954 => 1705,  2949 => 1703,  2944 => 1701,  2939 => 1699,  2934 => 1697,  2929 => 1695,  2924 => 1693,  2919 => 1691,  2914 => 1689,  2909 => 1687,  2904 => 1685,  2899 => 1683,  2894 => 1681,  2879 => 1668,  2867 => 1659,  2858 => 1653,  2852 => 1651,  2848 => 1649,  2846 => 1648,  2843 => 1647,  2841 => 1646,  2773 => 1581,  2717 => 1528,  2711 => 1525,  2707 => 1524,  2696 => 1516,  2689 => 1512,  2681 => 1509,  2643 => 1474,  2637 => 1471,  2633 => 1470,  2619 => 1461,  2614 => 1459,  2600 => 1448,  2592 => 1443,  2586 => 1440,  2567 => 1424,  2561 => 1421,  2557 => 1420,  2543 => 1411,  2538 => 1409,  2524 => 1398,  2516 => 1393,  2510 => 1390,  2489 => 1372,  2483 => 1369,  2479 => 1368,  2465 => 1359,  2460 => 1357,  2446 => 1346,  2438 => 1341,  2432 => 1338,  2412 => 1321,  2406 => 1318,  2402 => 1317,  2388 => 1308,  2383 => 1306,  2369 => 1295,  2361 => 1290,  2355 => 1287,  2329 => 1264,  2323 => 1261,  2319 => 1260,  2308 => 1252,  2301 => 1248,  2293 => 1245,  2265 => 1220,  2259 => 1217,  2255 => 1216,  2244 => 1208,  2237 => 1204,  2229 => 1201,  2204 => 1179,  2198 => 1176,  2194 => 1175,  2183 => 1167,  2177 => 1164,  2173 => 1163,  2162 => 1155,  2155 => 1151,  2147 => 1148,  2122 => 1126,  2116 => 1123,  2112 => 1122,  2099 => 1112,  2093 => 1109,  2089 => 1108,  2077 => 1099,  2070 => 1095,  2064 => 1092,  2046 => 1077,  2040 => 1074,  2036 => 1073,  2023 => 1063,  2017 => 1060,  2013 => 1059,  2002 => 1051,  1995 => 1047,  1987 => 1044,  1956 => 1016,  1950 => 1013,  1946 => 1012,  1936 => 1005,  1930 => 1002,  1926 => 1001,  1918 => 996,  1911 => 992,  1903 => 989,  1826 => 915,  1784 => 890,  1778 => 887,  1774 => 886,  1770 => 885,  1766 => 884,  1762 => 883,  1758 => 882,  1754 => 881,  1745 => 875,  1741 => 874,  1719 => 854,  1713 => 851,  1708 => 850,  1705 => 849,  1699 => 846,  1696 => 845,  1693 => 844,  1685 => 841,  1682 => 840,  1680 => 839,  1676 => 837,  1668 => 834,  1665 => 833,  1662 => 832,  1654 => 829,  1651 => 828,  1649 => 827,  1642 => 825,  1639 => 824,  1631 => 821,  1626 => 820,  1623 => 819,  1615 => 816,  1612 => 815,  1610 => 814,  1607 => 813,  1601 => 810,  1598 => 809,  1596 => 808,  1593 => 807,  1587 => 804,  1584 => 803,  1582 => 802,  1578 => 800,  1572 => 797,  1569 => 796,  1567 => 795,  1564 => 794,  1558 => 791,  1555 => 790,  1553 => 789,  1550 => 788,  1544 => 785,  1541 => 784,  1539 => 783,  1531 => 780,  1522 => 774,  1509 => 764,  1503 => 761,  1497 => 758,  1491 => 755,  1485 => 752,  1474 => 744,  1466 => 739,  1455 => 731,  1446 => 725,  1432 => 714,  1426 => 711,  1417 => 705,  1404 => 702,  1396 => 697,  1390 => 694,  1381 => 688,  1368 => 685,  1357 => 677,  1346 => 672,  1339 => 668,  1316 => 647,  1310 => 644,  1305 => 643,  1302 => 642,  1296 => 639,  1293 => 638,  1290 => 637,  1282 => 634,  1279 => 633,  1277 => 632,  1273 => 630,  1265 => 627,  1262 => 626,  1259 => 625,  1251 => 622,  1248 => 621,  1246 => 620,  1239 => 618,  1236 => 617,  1228 => 614,  1223 => 613,  1220 => 612,  1212 => 609,  1209 => 608,  1207 => 607,  1204 => 606,  1198 => 603,  1195 => 602,  1193 => 601,  1190 => 600,  1184 => 597,  1181 => 596,  1179 => 595,  1175 => 593,  1169 => 590,  1166 => 589,  1164 => 588,  1161 => 587,  1155 => 584,  1152 => 583,  1150 => 582,  1147 => 581,  1141 => 578,  1138 => 577,  1136 => 576,  1128 => 573,  1119 => 567,  1106 => 557,  1100 => 554,  1094 => 551,  1088 => 548,  1081 => 544,  1075 => 541,  1069 => 538,  1062 => 534,  1051 => 526,  1042 => 520,  1031 => 512,  1022 => 506,  1010 => 497,  1004 => 494,  995 => 488,  982 => 485,  974 => 480,  968 => 477,  959 => 471,  946 => 468,  935 => 460,  924 => 455,  917 => 451,  894 => 431,  884 => 424,  872 => 415,  866 => 412,  854 => 403,  842 => 394,  831 => 386,  808 => 365,  806 => 364,  798 => 359,  793 => 357,  789 => 356,  784 => 353,  778 => 349,  776 => 348,  769 => 344,  761 => 339,  747 => 328,  742 => 326,  738 => 325,  733 => 322,  728 => 319,  717 => 317,  713 => 316,  707 => 313,  704 => 312,  702 => 311,  695 => 307,  687 => 302,  674 => 292,  669 => 290,  665 => 289,  660 => 286,  655 => 283,  644 => 281,  640 => 280,  634 => 277,  631 => 276,  629 => 275,  622 => 271,  614 => 266,  601 => 256,  596 => 254,  592 => 253,  587 => 250,  582 => 247,  571 => 245,  567 => 244,  561 => 241,  558 => 240,  556 => 239,  549 => 235,  541 => 230,  528 => 220,  523 => 218,  519 => 217,  514 => 214,  509 => 211,  498 => 209,  494 => 208,  488 => 205,  485 => 204,  483 => 203,  472 => 195,  467 => 193,  460 => 189,  452 => 184,  441 => 176,  436 => 174,  432 => 173,  425 => 168,  414 => 166,  410 => 165,  404 => 162,  399 => 159,  388 => 157,  384 => 156,  378 => 153,  366 => 144,  354 => 135,  349 => 133,  341 => 128,  333 => 123,  316 => 112,  306 => 108,  304 => 107,  296 => 104,  288 => 101,  280 => 98,  272 => 95,  264 => 92,  256 => 89,  248 => 86,  240 => 83,  231 => 80,  221 => 76,  219 => 75,  208 => 67,  202 => 66,  199 => 65,  192 => 61,  186 => 60,  183 => 59,  181 => 58,  175 => 55,  169 => 54,  162 => 50,  156 => 49,  149 => 45,  143 => 44,  136 => 40,  130 => 39,  123 => 35,  117 => 34,  110 => 30,  104 => 29,  97 => 25,  91 => 24,  84 => 20,  78 => 19,  71 => 15,  65 => 14,  62 => 13,  55 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--begin::Portlet-->
<div class=\"kt-portlet kt-portlet--tabs\">
    <div class=\"kt-portlet__head\">
        <div class=\"kt-portlet__head-toolbar\">
            <ul class=\"nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold\" role=\"tablist\">
                {% if user.role_id == 5 %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#saved\" role=\"tab\">
                        <i class=\"flaticon-folder-2\" aria-hidden=\"true\"></i>{{'Saved'|__}}
                    </a>
                </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (this.param.type is empty and user.role_id != 5) or this.param.type == 'requests' %}active{% endif %}\" data-toggle=\"tab\" href=\"#requests\" role=\"tab\">
                        <i class=\"flaticon-alert\" aria-hidden=\"true\"></i>{{'New Requests'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'approved' %}active{% endif %}\" data-toggle=\"tab\" href=\"#approved\" role=\"tab\">
                        <i class=\"flaticon-like\" aria-hidden=\"true\"></i>{{\"Approved\"|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'assigned' %}active{% endif %}\" data-toggle=\"tab\" href=\"#assigned\" role=\"tab\">
                        <i class=\"flaticon-network\" aria-hidden=\"true\"></i>{{'Assigned Shipments'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'withdriver' %}active{% endif %}\" data-toggle=\"tab\" href=\"#withdriver\" role=\"tab\">
                        <i class=\"flaticon-suitcase\" aria-hidden=\"true\"></i>{{'Delivered To Driver'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'stock' %}active{% endif %}\" data-toggle=\"tab\" href=\"#stock\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>{{'In Stock'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'custom' %}active{% endif %}\" data-toggle=\"tab\" href=\"#custom\" role=\"tab\">
                        <i class=\"flaticon-home-2\" aria-hidden=\"true\"></i>{{'In Custom'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'postponed' %}active{% endif %}\" data-toggle=\"tab\" href=\"#postponed\" role=\"tab\">
                        <i class=\"flaticon-stopwatch\" aria-hidden=\"true\"></i>{{'Postponed'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'delivered' %}active{% endif %}\" data-toggle=\"tab\" href=\"#delivered\" role=\"tab\">
                        <i class=\"flaticon-open-box\" aria-hidden=\"true\"></i>{{'Delivered'|__}}
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'supplied' %}active{% endif %}\" data-toggle=\"tab\" href=\"#supplied\" role=\"tab\">
                        <i class=\"flaticon-piggy-bank\" aria-hidden=\"true\"></i>{{'Supplied'|__}}
                    </a>
                </li>
                {% if user.role_id != 5 %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if this.param.type == 'manifest' %}active{% endif %}\" data-toggle=\"tab\" href=\"#manifest\" role=\"tab\">
                            <i class=\"flaticon-truck\" aria-hidden=\"true\"></i>{{'Manifest'|__}}
                        </a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if this.param.type == 'all' %}active{% endif %}\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                        <i class=\"flaticon-shopping-basket\" aria-hidden=\"true\"></i>{{'All Shipments'|__}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"kt-portlet__body\">
        <div class=\"tab-content\">
            {% if user.role_id == 5 %}
                <div class=\"tab-pane  {% if (this.param.type is empty and user.role_id == 5) or this.param.type == 'saved' %}active{% endif %}\" id=\"saved\" role=\"tabpanel\">
                    <div class=\"kt-datatable-saved\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane  {% if this.param.type is empty or this.param.type == 'requests' %}active{% endif %}\" id=\"requests\" role=\"tabpanel\">
                <div class=\"kt-datatable-requests\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'approved' %}active{% endif %}\" id=\"approved\" role=\"tabpanel\">
                <div class=\"kt-datatable-approved\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'assigned' %}active{% endif %}\" id=\"assigned\" role=\"tabpanel\">
                <div class=\"kt-datatable-assigned\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'withdriver' %}active{% endif %}\" id=\"withdriver\" role=\"tabpanel\">
                <div class=\"kt-datatable-withdriver\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'stock' %}active{% endif %}\" id=\"stock\" role=\"tabpanel\">
                <div class=\"kt-datatable-stock\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'custom' %}active{% endif %}\" id=\"custom\" role=\"tabpanel\">
                <div class=\"kt-datatable-custom\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'postponed' %}active{% endif %}\" id=\"postponed\" role=\"tabpanel\">
                <div class=\"kt-datatable-postponed\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'supplied' %}active{% endif %}\" id=\"supplied\" role=\"tabpanel\">
                <div class=\"kt-datatable-supplied\"></div>
            </div>
            <div class=\"tab-pane {% if this.param.type == 'delivered' %}active{% endif %}\" id=\"delivered\" role=\"tabpanel\">
                <div class=\"kt-datatable-delivered\"></div>
            </div>
            {% if user.role_id != 5 %}
                <div class=\"tab-pane {% if this.param.type == 'manifest' %}active{% endif %}\" id=\"manifest\" role=\"tabpanel\">
                    <div class=\"kt-datatable-manifest\"></div>
                </div>
            {% endif %}
            <div class=\"tab-pane {% if this.param.type == 'all' %}active{% endif %}\" id=\"all\" role=\"tabpanel\">
                <div class=\"kt-datatable-all\"></div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->
<div class=\"modal fade\" id=\"manifest_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Manifest information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onSavemanifest', { flash: true, novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"manifest_id\" class=\"form-control\" name=\"ids\" />
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date_modify(\"+1 day\")|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Assign to specifc car?'|__}}</label>
                            <div class=\"kt-checkbox-single\">
                                <label class=\"kt-checkbox\">
                                    <input type=\"checkbox\" id=\"car\" class=\"form-control\"  value=\"1\">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 employee_container\">
                            <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"employee_id\" name=\"employee_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12 kt-hidden car_container\">
                            <label>{{'Car'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" id=\"car_id\" name=\"car_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for car in cars %}
                                    <option value=\"{{car.id}}\">{{car.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"chooseEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Print Employee Orders'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onPrint', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"date\" value=\"{{now|date(settings.dateformat)}}\" required>
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"button\" class=\"btn btn-primary print\">{{'Print'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

<!-- statuses modal -->
<div class=\"modal fade\" id=\"change_status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Edit Shipments Statuses'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onEditStatus', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_statuses_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\"name=\"status_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for status in shipmentStatuses %}
                                        <option value=\"{{status.id}}\">{{status.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Update'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

<!-- assign employee -->
<div class=\"modal fade\" id=\"assign_shipmentEmployee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Shipments to '|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onAssignEmployee', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipment_employee_id\" class=\"form-control\" name=\"id\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

<!-- assign employee selected shipments-->
<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Shipments to '|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onAssignSelectedEmployee', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_employee_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Employee'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <select class=\"form-control\" name=\"employee_id\" data-live-search=\"true\" required>
                                    <option data-hidden=\"true\"></option>
                                    {% for employee in employees %}
                                        <option value=\"{{employee.id}}\">{{employee.name}}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Assign'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>


<!-- print shipments label -->
<div class=\"modal fade\" id=\"print_lable\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Print Shipments Label '|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onPrintShipments', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <input type=\"hidden\" id=\"shipments_label_id\" class=\"form-control\" name=\"ids\" />
                        {% if user.role_id != 4 %}
                            <div class=\"form-group col-lg-12\">
                                <p>Are you sure to print <span id=\"shipments_length\"></span>  selected records ?</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary print\">{{'Print'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>

{% put scripts %}
<script type=\"text/javascript\">
\"use strict\";
var KTAppUserListDatatable = function () {
    // variables
    var datatable;

    // init
    var init = function (type) {
        // init the datatables. Learn more: //keenthemes.com/metronic/?page=docs&section=datatable
        if(type == 'manifest'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    autoHide: true,
                    sortable: false,
                    width: 20,
                    textAlign: 'center',
                },
                {
                    field: \"created_at\",
                    title: \"{{'Created On'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">\\
                                    <a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.created_at_date + '</a>\\
                                    <span class=\"kt-user-card-v2__email\">' + data.created_at_time + '</span>\\
                                </div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"details\",
                    title: \"{{'Responsiable'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
    \t\t\t\ttemplate: function(data, i) {
    \t\t\t\t\tvar output = '\\
                            <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                <div class=\"kt-user-card-v2__details\">';
                                if(data.car != '-'){
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.car + '</a>\\
                                                <span class=\"kt-user-card-v2__email\">' + data.driver + '</span>';
                                }else{
                                    output += '<a href=\"{{url('dashboard/shipments/manifest')}}/'+data.id+'/view\" class=\"kt-user-card-v2__name\">' + data.employee + '</a>';
                                }
                                output += '</div>\\
                            </div>';
    \t\t\t\t\treturn output;
    \t\t\t\t}
                },
                {
                    field: \"user\",
                    title: \"{{'By'|__}}\",
                    autoHide: true,
                    sortable: false,
                    width: 'auto',
                },
                {
                    field: \"orders\",
                    title: \"{{'No. Of Orders'|__}}\",
                    autoHide: false,
                    sortable: false,
                    width: 'auto',
                }
            ];
        }else if(type == 'requests' || type == 'delivered' || type == 'assigned' || type == 'withdriver' || type == 'postponed' || type == 'supplied' || type == 'all'){
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 140,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Receiver\"|__}}:</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Branch\"|__}}:</b> ' + data.office + '</a>\\
                                        </div>\\
                                    </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Date\"|__}}:</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                        return output;
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        //alert(row.paymentStatus)
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }

                            if(row.paymentStatus == 0){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Payment Pending\"|__}}</span>';
                            }
                            if(row.paymentStatus == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-info\">{{\"Payment Received Employee\"|__}}</span>';
                            }
                            if(row.paymentStatus == 2){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Payment Received\"|__}}</span>';
                            }

                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                            // if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                            //     output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">{{\"Stock\"|__}}</span>';
                            // }
                            if(row.requested == 3 || row.requested == 14 ){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Custom\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"Actions\",
                    width: 'auto',
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Approve\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"{{\"Assign Employee\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Received\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            {% endif %}


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"set as Deliveried\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Paid\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            {% endif %}

                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != {{user.id}})){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }else{
            var columns = [
                {
                    field: 'id',
                    title: '#',
                    sortable: false,
                    autoHide: true,
                    width: 20,
                    selector: {
                        class: 'kt-checkbox--solid'
                    },
                    textAlign: 'center',
                },
                {
                    field: \"number\",
                    title: \"{{'Tracking'|__}}\",
                    sortable: true,
                    width: 140,
                    template: function(row) {
                        return '<a href=\"{{url('dashboard/shipments')}}/'+row.id+'/view\">{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}'+row.shipping_number+'</a>';
                    }
                },
                {
                    field: \"details\",
                    title: \"{{'Shipment Details'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(data, i) {
                        if(data.sender && data.sender.name){
                            var output  = '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.sender.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender.name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                                    }
                        }else{
                            var output  = '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Sender\"|__}}:</b> ' + data.sender_name + '</a>';
                          if(+ data.shipping_from_area && + data.shipping_from_area != '-'){
                              output      += '\\
                                              <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_from_area + '</span>';
                          }
                        }
                        if(data.receiver && data.receiver.name && data.receiver.name != '-'){
                            output      += '\\
                                        <a href=\"{% if user.hasUserPermission('client', 'r') %}{{url('dashboard/clients')}}/'+data.receiver.id+'/view{% else %}javascript:;{% endif %}\" class=\"kt-margin-t-5 kt-user-card-v2__name\"><b>{{\"Receiver\"|__}}:</b> ' + data.receiver.name + '</a>';
                          if(data.shipping_to_area && + data.shipping_to_area != '-'){
                              output      += '\\
                                        <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"To\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                          }
                        }else if(data.receiver_name && data.receiver_name != '-'){
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Receiver\"|__}}:</b> ' + data.receiver_name + '</a>';
                            if(data.shipping_to_area && + data.shipping_to_area != '-'){
                                output      += '\\
                                                <span class=\"kt-user-card-v2__email\"><b class=\"kt-font-boldest\">{{\"From\"|__}}:</b> ' + data.shipping_to_area + '</span>';
                            }
                        }
                        output      += '\\
                                </div>\\
                            </div>';


                        output  += '\\
                                <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                    <div class=\"kt-user-card-v2__details\">\\
                                        <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Branch\"|__}}:</b> ' + data.office + '</a>\\
                                    </div>\\
                                </div>';
                            output  += '\\
                                    <div class=\"kt-user-card-v2 kt-user-card-v2--uncircle\">\\
                                        <div class=\"kt-user-card-v2__details\">\\
                                            <a href=\"javascript:;\" class=\"kt-user-card-v2__name\"><b class=\"kt-font-boldest\">{{\"Date\"|__}}:</b> ' + data.created_at_date + '</a>\\
                                        </div>\\
                                    </div>';
                        return output;
                    }
                },
                {
                    field: \"status\",
                    title: \"{{'Status'|__}}\",
                    sortable: false,
                    width: 'auto',
                    template: function(row) {
                        if(row.requested == 100){
                            var output = '<span class=\"btn btn-bold btn-sm btn-label-primary\">{{\"Saved\"|__}}</span>';
                        }else{
                            if(row.status != null){
                                var output = '<span class=\"btn btn-bold btn-sm btn-label-' + row.status.color + '\">' + row.status.name + '</span>';
                            } else {
                                var output = '<span class=\"btn btn-bold btn-sm btn-label\">Not Found</span>';
                            }
                            if(row.delayed == 1){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-danger\">{{\"Delayed\"|__}}</span>';
                            }
                            if(row.requested == 10 || row.requested == 11){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-warning\">{{\"Returning Discards\"|__}}</span>';
                            }
                            if(row.requested == 12 && row.status.equal != 12){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Supplied\"|__}}</span>';
                            }
                            if(row.requested == 7 || row.requested == 10 || row.requested == 16){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm      btn-label-info\">{{\"Stock\"|__}}</span>';
                            }
                            if(row.requested == 11 || row.requested == 15 || row.requested == 17 || row.requested == 18){
                                output  += '&nbsp;<span class=\"btn btn-bold btn-sm btn-label-success\">{{\"Custom\"|__}}</span>';
                            }
                        }

                        return output;
                    }
                },
                {
                    field: \"Actions\",
                    width: 'auto',
                    title: \"{{'Actions'|__}}\",
                    sortable: false,
                    overflow: 'visible',
                    template: function (data) {
                        var output = '' +
                        '<div class=\"btn-group btn-group\" role=\"group\" aria-label=\"...\">'+
                            '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/view\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"View Shipment\"|__}}\"><i class=\"la la-eye\"></i></button>';


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentApproved btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Approve\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-check\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 9 || data.requested == 5){
                                    output += '<a href=\"javascript:;\" class=\"assign_employee btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"modal\" data-target=\"#assign_shipmentEmployee\" data-placement=\"top\" title=\"{{\"Assign Employee\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-user\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 ){
                                    output += '<a href=\"javascript:;\" class=\"shipmentReceived btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Received\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-arrow-down\"></i></button>';
                                }
                            {% endif %}


                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentDeliveried btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"set as Deliveried\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-thumbs-o-up\"></i></button>';
                                }
                            {% endif %}

                            {% if user.role_id != 5 %}
                                if(data.requested   ==  1 || data.requested == 9 || data.requested == 3 || data.requested == 4 || data.requested == 7){
                                    output += '<a href=\"javascript:;\" class=\"shipmentPaid btn btn-brand btn-sm btn-icon\" data-skin=\"dark\"  data-placement=\"top\" title=\"{{\"Paid\"|__}}\" id=\"'+data.id+'\" ><i class=\"la la-dollar\"></i></button>';
                                }
                            {% endif %}

                            {% if user.hasUserPermission('order', 'u') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 1 || data.requested == 100){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && data.sender_id == {{user.id}}){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/edit\" class=\"btn btn-brand btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Edit Shipment\"|__}}\"><i class=\"la la-edit\"></i></button>';
                                }
                            {% endif %}
                                if((data.requested   !=  0 && data.requested   !=  1 && data.requested != 100)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/shipment\" target=\"_blank\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Shipment\"|__}}\"><i class=\"la la-print\"></i></button>';
                                }
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  100 || data.requested   ==  0 || data.requested == 1)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/print/label\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Print Label\"|__}}\" target=\"_blank\" ><i class=\"la la-qrcode\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  3 || data.requested   ==  5 || data.requested == 6 || data.requested == 7 || data.requested == 9)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/update\" class=\"btn btn-info btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Update Status\"|__}}\"><i class=\"la la-street-view\"></i></button>';
                                }
                            {% endif %}
                            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

                            {% if user.hasUserPermission('order', 'u') %}
                                if((data.requested   ==  1 || data.requested   ==  3)){
                                    output += '<a href=\"{{url(\"dashboard/shipments\")}}/'+data.id+'/deliver\" class=\"btn btn-success btn-sm btn-icon\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Mark as delivered\"|__}}\"><i class=\"la la-smile-o\"></i></button>';
                                }
                            {% endif %}
                            {% if user.hasUserPermission('order', 'd') and user.role_id != 5 %}
                                if(data.requested   ==  0 || data.requested == 100 || data.requested == 1){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                            {% if user.role_id == 5 %}
                                if((data.requested   ==  0 || data.requested == 100) && (data.sender_id != {{user.id}})){
                                    output += '<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-sm delete_record kt-font-light btn-icon\" rel=\"'+data.id+'\" data-skin=\"dark\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{\"Delete Shipment\"|__}}\"><i class=\"la la-remove\"></i></a>';
                                }
                            {% endif %}
                        '</div>';

                        return output;
                    },
                }
            ]
        }

        var path = location.pathname;
        var directories = path.split(\"/\");
        var lastDirecotry = directories[(directories.length - 2)]+'/'+directories[(directories.length - 1)];
        

        if(lastDirecotry == 'shipments/view') {
            history.go(-1);
        }

        datatable = \$('.kt-datatable-'+type).KTDatatable({
            translate: {
                records: {
                    processing: '{{\"Please wait\"|__}}...',
                    noRecords: '{{\"No records found\"|__}}'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: '{{\"First\"|__}}',
                                prev: '{{\"Previous\"|__}}',
                                next: '{{\"Next\"|__}}',
                                last: '{{\"Last\"|__}}',
                                more: '{{\"More pages\"|__}}',
                                input: '{{\"Page number\"|__}}',
                                select: '{{\"Select page size\"|__}}'
                            },

                            info: \"{{\"Displaying\"|__}} {{ '{{' }}start{{ '}}' }} - {{ '{{' }}end{{ '}}' }} {{\"of\"|__}} {{total}} {{\"records\"|__}}\"
                        }
                    }
                }
            },

            // layout definition
            layout: {
                scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: \$('#generalSearch'),
                delay: 400,
            },
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: '{{url(\"api/shipments\")}}/'+type,
                    },
                },
                pageSize: 10, // display 20 records per page
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },
            // columns definition
            columns: columns
        });


        return datatable;
    };

    // search
    var search = function () {
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).on('change', function () {
                datatable.search(\$(this).val().toLowerCase(), \$(this).attr('name'));
            });
        });
        \$('#reset').on('click', function () {
            datatable.destroy();
            \$('#generalSearch').val('');
            \$('#filter_form select,#filter_form input').each(function(){
                \$(this).val('');
            });
            \$('#filter_form select').each(function(){
                \$(this).selectpicker(\"refresh\");
            });
            init();
        });
    };

    // selection
    var selection = function () {
        // init form controls
        //\$('#kt_form_status, #kt_form_type').selectpicker();

        // event handler on check and uncheck on records
        datatable.on('kt-datatable--on-check kt-datatable--on-uncheck kt-datatable--on-layout-updated', function (e) {
            console.log(e);
            var checkedNodes = datatable.rows('.kt-datatable__row--active').nodes(); // get selected records
            var count = checkedNodes.length; // selected records count

            \$('#kt_subheader_group_selected_rows').html(count);

            if (count > 0) {
                \$('#kt_subheader_search').addClass('kt-hidden');
                \$('#kt_subheader_group_actions').removeClass('kt-hidden');
            } else {
                \$('#kt_subheader_search').removeClass('kt-hidden');
                \$('#kt_subheader_group_actions').addClass('kt-hidden');
            }
        });
    }

    // selected records status update
    var selectedStatusUpdate = function () {
        \$('#kt_subheader_group_actions_status_change').on('click', \"[data-toggle='status-change']\", function () {
            var status = \$(this).find(\".kt-nav__link-text\").html();

            // fetch selected IDs
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status to\"|__}} \" + status + \" ?\",
                    type: \"info-\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        swal.fire({
                            title: '{{\"Deleted\"|__}}!',
                            text: '{{\"Your selected records statuses have been updated\"|__}}!',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        })
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records statuses have not been updated\"|__}}!',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: \"{{\"OK\"|__}}\",
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });
    }
    // selected records status update
    var selectedFilter = function () {
    }

    // selected records delete
    var selectedDelete = function () {
        \$('#kt_subheader_group_actions_delete_all').on('click', function () {
            // fetch selected IDs
            var selected = [];
            var type    = \$('.delete_record').attr('data-type');
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });

            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure to delete'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes, delete!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onDelete', {
                            data: {id: selected,type: type},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Deleted!\"|__}}',
                                    text: '{{\"Your selected records have been deleted! :(\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"You selected records have not been deleted! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        \$('body').on('click','.delete_record',function(){
            var id      = \$(this).attr('rel');
            var type    = \$(this).attr('data-type');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delete this item ?'|__}}\",
                type: \"danger\",

                confirmButtonText: \"{{'Yes, delete!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onDelete', {
                        data: {id: id, type: type},
                        success: function(data) {

                            swal.fire({
                                title: '{{\"Deleted!\"|__}}',
                                text: '{{\"Your selected record has been deleted! :(\"|__}}',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonText: '{{\"OK\"|__}}',
                                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                            });
                            datatable.reload();
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected record has not been deleted! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        });


        \$('body').on('click', '#sendAll', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to send all'|__}} \" + ids.length + \" {{'selected records to the company?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$.request('onSend', {
                            data: {id: selected},
                            success: function(data) {
                                swal.fire({
                                    title: '{{\"Sent Successfully!\"|__}}',
                                    text: '{{\"Your selected records have been sent to the company!\"|__}}',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonText: '{{\"OK\"|__}}',
                                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                });
                                datatable.reload();
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your shipments not sent, and they still just on your account! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        \$('body').on('click', '#createManifest', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    text: \"{{'Are you sure you want to create new manifest with'|__}} \" + ids.length + \" {{'selected records ?'|__}}\",
                    type: \"error\",

                    confirmButtonText: \"{{'Yes!'|__}}\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                    showCancelButton: true,
                    cancelButtonText: '{{\"No, cancel\"|__}}',
                    cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#manifest_id').val(selected);
                        \$('#manifest_modal').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });

        // \$('body').on('click', '#updateStatus', function (e) {
        //     \$('#change_status').modal('toggle');
        // });
        \$('body').on('click', '#updateStatus', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to update\"|__}} \" + ids.length + \" {{\"selected records status \"|__}} ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, update\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_statuses_id').val(selected);
                        \$('#change_status').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });




        // \$('body').on('click', '#assignEmployee', function (e) {
        //     \$('#assign_employee').modal('toggle');
        // });
        

        \$('body').on('click', '.shipmentApproved', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to approve shipment ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                     \$.request('onShipmentApproved', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                        window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.type}}\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not received! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
           

        });


        \$('body').on('click', '.shipmentReceived', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to received shipment ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                     \$.request('onShipmentReceived', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                        window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.type}}\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not received! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
           

        });

        

        \$('body').on('click', '.shipmentPaid', function (e) {
            e.preventDefault();
            //alert('done');
            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delivered&paid shipment ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onShipmentPaid', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                        KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                        window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.type}}\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not delivered&paid! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
            

        });

        \$('body').on('click', '.shipmentDeliveried', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to delivered shipment ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onShipmentDeliveried', {
                      data: {id: id},
                      success: function(response, status, xhr, \$form) {
                         KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                        window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.type}}\";
                           //\$('#delivery_cost').val(response.delivery_cost);
                           //\$('#return_courier_fee').val(response.return_courier_fee);
                      }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not delivered! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
            

        });



        \$('body').on('click', '.assign_employee', function (e) {
            e.preventDefault();

            var id = \$(this).attr('id');
            \$('#shipment_employee_id').val(id);
            //alert(\$(this).attr('id'));
        });



        \$('body').on('click', '#assignEmployee', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                // learn more: //sweetalert2.github.io/
                swal.fire({
                    buttonsStyling: false,

                    html: \"{{\"Are you sure to assign\"|__}} \" + ids.length + \" {{\"selected records to employee \"|__}} ?\",
                    type: \"info\",

                    confirmButtonText: \"{{\"Yes, assign\"|__}}!\",
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",

                    showCancelButton: true,
                    cancelButtonText: \"{{\"No, cancel\"|__}}\",
                    cancelButtonClass: \"btn btn-sm btn-bold btn-default\"
                }).then(function (result) {
                    if (result.value) {
                        \$('#shipments_employee_id').val(selected);
                        \$('#assign_employee').modal('toggle');
                    } else if (result.dismiss === 'cancel') {
                        swal.fire({
                            title: '{{\"Cancelled\"|__}}',
                            text: '{{\"Your manifest not created! :)\"|__}}',
                            type: 'error',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
            }
        });


        //print shipments label
        \$('body').on('click', '#printShipments', function (e) {
            e.preventDefault();

            // fetch selected IDs
            var selected = [];
            var ids = datatable.rows('.kt-datatable__row--active').nodes().find('.kt-checkbox--single > [type=\"checkbox\"]').map(function (i, chk) {
                selected[\$(chk).val()] = \$(chk).val();
                return \$(chk).val();
            });
            if (ids.length > 0) {
                \$('#shipments_label_id').val(selected);
                \$('#shipments_length').html(ids.length);
                \$('#print_lable').modal('toggle');
            }
        });



        \$('body').on('click', '#PrintEmployeeOrders', function (e) {
            \$('#chooseEmployee').modal('toggle');
        });
        \$('#chooseEmployee').on('click', '.print', function (e) {
            e.preventDefault();
            var parent = \$('#chooseEmployee');
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
                \$('#chooseEmployee form').submit();
                \$('#chooseEmployee').modal('toggle');
            }
        });

    }

    var updateTotal = function () {
        datatable.on('kt-datatable--on-layout-updated', function () {
            \$('#kt_subheader_total').html(datatable.getTotalRows() + ' {{\"Total\"|__}}');
        });
    };

    var reload = function () {
        datatable.reload();
    };

    var filter = function (status) {
        datatable.search(status, 'type');
    };

    var destroy = function () {
        datatable.destroy();
        \$('#generalSearch').val('');
        \$('#filter_form select,#filter_form input').each(function(){
            \$(this).val('');
        });
        \$('#filter_form select').each(function(){
            \$(this).selectpicker(\"refresh\");
        });
    };

    return {
        // public functions
        init: function (type) {
            init(type);
            search();
            selection();
            selectedStatusUpdate();
            selectedFilter();
            selectedDelete();
            updateTotal();
        },

        reload: function(){
            reload();
        },

        destroy: function(){
            destroy();
        },

        filter: function(status){
            filter(status);
        }
    };
}();

KTUtil.ready(function () {
    \$('.kt_subheader_filter_form').on('submit', function (e) {
        e.preventDefault();
        if(\$(this).find(\"button\").hasClass('active')){
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html('');
            KTAppUserListDatatable.filter(0);
        }else{
            \$('.kt_subheader_filter_form button').removeClass('active');
            \$(\"#filter_selected\").html(':&nbsp;'+\$(this).find(\"button\").text());
            \$(this).find(\"button\").addClass('active');
            var status = \$(this).find(\"input.filter\").val();
            KTAppUserListDatatable.filter(status);
        }
    });

    {% if this.param.type is empty and user.role_id == 5 %}
        KTAppUserListDatatable.init('saved');
    {% elseif this.param.type is empty %}
        KTAppUserListDatatable.init('requests');
    {% else %}
        KTAppUserListDatatable.init('{{this.param.type}}');

        if('{{this.param.type}}' == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
            \$('#createManifest').addClass('kt-hidden');
            \$('#kt_subheader_group_actions_filter_change').addClass('kt-hidden');
        }else if('{{this.param.type}}' == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
            \$('#sendAll').addClass('kt-hidden');
            \$('#createManifest').removeClass('kt-hidden');
        }
    {% endif %}

    \$('body').on('click', '#car', function(){
        if(\$(this).is(\":checked\")){
            \$('.car_container').removeClass('kt-hidden');
            \$('.employee_container').addClass('kt-hidden');
        }else{
            \$('.employee_container').removeClass('kt-hidden');
            \$('.car_container').addClass('kt-hidden');
        }
    });
    \$('body').on('click', 'a.nav-link',function(){
        \$('.kt_subheader_filter_form button').removeClass('active');
        \$(\"#filter_selected\").html('');
        window.history.pushState(null, null, '{{url(currentLang~\"/dashboard/shipments\")}}/'+\$(this).attr('href').replace('#',''));
        if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Saved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'requests'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Requests\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'approved'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Approved Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'assigned'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Assigned Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'withdriver'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Shipments Delivered To Driver\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'postponed'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Postponed Shipments\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'stock'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"In Stock\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'custom'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"In Custom\"|__}}');    
        }else if(\$(this).attr('href').replace('#','') == 'delivered'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Delivered\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'supplied'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Supplied\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"Manifest\"|__}}');
        }else if(\$(this).attr('href').replace('#','') == 'all'){
            \$('#kt_subheader h3.kt-subheader__title').html('{{\"All Shipments\"|__}}');
        }

        var url = '{{url(\"dashboard/shipments\")}}/'+\$(this).attr('href').replace('#','');
        \$('.kt-menu__item.kt-menu__item--open.kt-menu__item--here.kt-menu__item--submenu .kt-menu__submenu .kt-menu__link').each(function(){
            var item = \$(this);
            var parent = item.parent().parent();
            if(item.attr('href') == url){
                parent.find('.kt-menu__item.kt-menu__item--open').removeClass('kt-menu__item--open');
                parent.find('.kt-menu__item.kt-menu__item--here').removeClass('kt-menu__item--here');
                item.parent('.kt-menu__item').addClass('kt-menu__item--open').addClass('kt-menu__item--here');
            }
        });

        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: '{{\"Processing, please wait\"|__}}...'
        });
        KTAppUserListDatatable.destroy();
        KTAppUserListDatatable.init(\$(this).attr('href').replace('#',''));
        KTApp.unblockPage();

        if(\$(this).attr('href').replace('#','') == 'manifest'){
            \$('#addNew').addClass('kt-hidden');
            \$('#importNew').addClass('kt-hidden');
                \$('#sendAll').addClass('kt-hidden');
        }else if(\$(this).attr('href').replace('#','') == 'saved'){
            \$('#sendAll').removeClass('kt-hidden');
        }else{
            \$('#sendAll').addClass('kt-hidden');
            \$('#addNew').removeClass('kt-hidden');
            \$('#importNew').removeClass('kt-hidden');
        }
    });


    \$('#manifest_modal').on('click', '.btn-primary', function(e){
        var parent = \$('#manifest_modal');
        var validation = 1;
        if(validation){
            \$('#manifest_modal').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
            location.reload();
        }
    });
});
</script>
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/shipments.htm", "");
    }
}
