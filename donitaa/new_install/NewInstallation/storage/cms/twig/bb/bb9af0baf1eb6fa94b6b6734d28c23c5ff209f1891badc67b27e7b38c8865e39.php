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

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/dashboard/shipment.htm */
class __TwigTemplate_c4569238c6a413ba614dab1558756b8fc8a14ecc956f6105928f89bb8091baa2 extends \Twig\Template
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
        echo "<div class=\"kt-portlet \">
    <div class=\"kt-portlet__body\">
        <div class=\"kt-widget kt-widget--user-profile-3\">
            <div class=\"kt-widget__top\">
                <div class=\"kt-widget__content\">
                    <div class=\"kt-widget__head\">
                        <a href=\"javascript:;\" class=\"kt-widget__username\">
                            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 8), "prefix_order", [], "any", false, false, false, 8), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 8), "numbers_order", [], "any", false, false, false, 8), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 8), "html", null, true);
        echo "
                        </a>
                        <div class=\"kt-widget__action\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t";
        // line 12
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Actions"]);
        echo "
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <!--begin::Nav-->
                                <ul class=\"kt-nav\">
                                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "payment", [], "any", false, false, false, 17), "enable_paypal", [], "any", false, false, false, 17)) {
            // line 18
            echo "                                    <!-- <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#paypal_modal\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                            <span class=\"kt-nav__link-text\">";
            // line 21
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pay"]);
            echo "</span>
                                        </a>
                                    </li> -->
                                    ";
        }
        // line 25
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 25) != 6) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 25) != 10))) {
            // line 26
            echo "                                        ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 26) == 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 26) == 1)) || (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "requested", [], "any", false, false, false, 26) == 100))) {
                // line 27
                echo "                                            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 27) == 1) && (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 27) == 5))) {
                    // line 28
                    echo "                                            ";
                } else {
                    // line 29
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "u"], "method", false, false, false, 29)) {
                        // line 30
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 31
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 31)]);
                        echo "\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-edit-1\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 33
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Edit"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 37
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "order", 1 => "d"], "method", false, false, false, 37)) {
                        // line 38
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"delete\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 41
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 45
                    echo "                                            ";
                }
                // line 46
                echo "                                        ";
            }
            // line 47
            echo "

                                        ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 49) != 5)) {
                // line 50
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 50) == 0)) {
                    // line 51
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" id=\"accept\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 54
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Accept"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#refuse\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-signs-2\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 60
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 63
($context["order"] ?? null), "requested", [], "any", false, false, false, 63) != 2)) {
                    // line 64
                    echo "                                                ";
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 64))) {
                        // line 65
                        echo "                                                    ";
                        if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 65) == 1) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 65) == 9)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 65) == 7))) {
                            // line 66
                            echo "                                                        ";
                            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 66)) {
                                // line 67
                                echo "                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 70
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Assigned Employee"]);
                                echo "</span>
                                                                </a>
                                                            </li>
                                                        ";
                            } else {
                                // line 74
                                echo "                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 77
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                                echo "</span>
                                                                </a>
                                                            </li>
                                                        ";
                            }
                            // line 81
                            echo "                                                    ";
                        }
                        // line 82
                        echo "                                                ";
                    }
                    // line 83
                    echo "                                                ";
                    if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 83) == 1) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 83) == 4)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 83) == 7)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 83) == 10))) {
                        // line 84
                        echo "                                                    ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 84))) {
                            // line 85
                            echo "                                                        ";
                            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "manifest", 1 => "c"], "method", false, false, false, 85)) {
                                // line 86
                                echo "                                                            ";
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 86))) {
                                    // line 87
                                    echo "                                                                <li class=\"kt-nav__item\">
                                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                        <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                        <span class=\"kt-nav__link-text\">";
                                    // line 90
                                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Manifest"]);
                                    echo "</span>
                                                                    </a>
                                                                </li>
                                                            ";
                                } else {
                                    // line 94
                                    echo "                                                                ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 94), "status", [], "any", false, false, false, 94) == 1)) {
                                        // line 95
                                        echo "                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                            <span class=\"kt-nav__link-text\">";
                                        // line 98
                                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Manifest"]);
                                        echo "</span>
                                                                        </a>
                                                                    </li>
                                                                ";
                                    }
                                    // line 102
                                    echo "                                                            ";
                                }
                                // line 103
                                echo "                                                        ";
                            }
                            // line 104
                            echo "                                                    ";
                        }
                        // line 105
                        echo "                                                    ";
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 105)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 105)))) {
                            // line 106
                            echo "                                                        <li class=\"kt-nav__item\">
                                                            <!-- ";
                            // line 107
                            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 107) == 1)) {
                                echo " -->
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 110
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
                                echo "</span>
                                                                </a>
                                                           <!--  ";
                            } else {
                                // line 113
                                echo "                                                                <a href=\"javascript:;\" id=\"delivered_driver\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">";
                                // line 115
                                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered to driver"]);
                                echo "</span>
                                                                </a>
                                                            ";
                            }
                            // line 117
                            echo " -->
                                                        </li>
                                                    ";
                        }
                        // line 120
                        echo "                                                   <!--  ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 120) != 10)) {
                            // line 121
                            echo "                                                        <li class=\"kt-nav__item\">
                                                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#transfer_office\" class=\"kt-nav__link\">
                                                                <i class=\"kt-nav__link-icon flaticon-logout\"></i>
                                                                <span class=\"kt-nav__link-text\">";
                            // line 124
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer To Branch"]);
                            echo "</span>
                                                            </a>
                                                        </li>
                                                    ";
                        }
                        // line 127
                        echo " -->
                                                ";
                    }
                    // line 129
                    echo "                                                ";
                    if (((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 7) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 6)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 8)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 129) != 14))) {
                        // line 130
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"stock\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 133
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save in stock"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 137
                    echo "                                                <!-- ";
                    if ((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 137) != 7) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 137) != 9)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 137) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 137) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 137) != 12))) {
                        // line 138
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#postpone\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 141
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 144
                    echo " -->
                                                <!-- ";
                    // line 145
                    if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 145) == 3) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 145) == 9))) {
                        // line 146
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#discards\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 149
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer as discards"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 152
                    echo " -->
                                                ";
                    // line 153
                    if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 153) == 5) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 153) == 7)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 153) == 9))) {
                        // line 154
                        echo "                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 155
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-deliver", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "status" => 6]);
                        echo "\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 157
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 161
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-deliver", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "status" => 8]);
                        echo "\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 163
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered with COD"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 167
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-deliver", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 167), "id", [], "any", false, false, false, 167), "status" => 10]);
                        echo "\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 169
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered with Paid"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"";
                        // line 173
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-deliver", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173), "status" => 11]);
                        echo "\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">";
                        // line 175
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered with Paid&COD"]);
                        echo "</span>
                                                        </a>
                                                    </li>
                                                ";
                    }
                    // line 179
                    echo "                                            ";
                }
                // line 180
                echo "                                        ";
            }
            // line 181
            echo "                                    ";
        }
        // line 182
        echo "

                                    ";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 184) != 5)) {
            // line 185
            echo "                                        <!-- ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 185) == 8) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 185) == 11)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 185) == 9))) {
                // line 186
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 190
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Assigned Employee"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                } else {
                    // line 194
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 197
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                }
                // line 201
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 204
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received"]);
                echo "</span>
                                                </a>
                                            </li>
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 210
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned"]);
                echo "</span>
                                                </a>
                                            </li> 
                                        ";
            }
            // line 213
            echo " -->
                                        ";
            // line 214
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 214) == 8) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 214) == 11))) {
                // line 215
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 219
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Assigned Employee for COD"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                } else {
                    // line 223
                    echo "                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">";
                    // line 226
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee for COD"]);
                    echo "</span>
                                                    </a>
                                                </li>
                                            ";
                }
                // line 230
                echo "                                            
                                            <!-- <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 234
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver returned discards"]);
                echo "</span>
                                                </a>
                                            </li> -->
                                        ";
            }
            // line 238
            echo "                                        ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 238) == 8) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 238) == 11)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 238) == 12))) {
                // line 239
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#receivedCOD\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 242
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received for COD"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 245
            echo "    
                                        ";
            // line 246
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 246) == 12) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 246) == 13))) {
                // line 247
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_cod\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 250
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Returned the COD"]);
                echo "</span>
                                                </a>
                                            </li>
                                            <!-- <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 256
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver returned discards"]);
                echo "</span>
                                                </a>
                                            </li> -->
                                        ";
            }
            // line 260
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 260) == 2) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 260) != 0))) {
                // line 261
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"";
                // line 262
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-print", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 262), "type" => "shipment"]);
                echo "\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 264
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Shipment"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 268
            echo "                                        ";
            if ((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 268) != 0) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 268) != 10)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 268) != 11)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 268) != 6)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 268) != 8))) {
                // line 269
                echo "                                            <li class=\"kt-nav__item\">
                                                <a href=\"";
                // line 270
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/order-print", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 270), "type" => "label"]);
                echo "\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">";
                // line 272
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Print Label"]);
                echo "</span>
                                                </a>
                                            </li>
                                        ";
            }
            // line 276
            echo "                                    ";
        }
        // line 277
        echo "                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-widget__subhead\">
                        ";
        // line 284
        echo call_user_func_array($this->env->getFunction('barcodeHTML')->getCallable(), [["data" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "barcode", [], "any", false, false, false, 284), "type" => "CODABAR"]]);
        echo "
                    </div>

                    <div class=\"kt-widget__info\">

                        <div class=\"kt-widget__stats d-flex align-items-center flex-fill\">
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    ";
        // line 292
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "
                                </span>
                                <div class=\"kt-widget__label notes_scroll\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 295), "count", [], "any", false, false, false, 295), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    ";
        // line 300
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Receive Date"]);
        echo "
                                </span>
                                <div class=\"kt-widget__label\">
                                    ";
        // line 303
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 304
            echo "                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 304), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 304)), "html", null, true);
            echo "</span>
                                    ";
        } else {
            // line 306
            echo "                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 306), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 306)), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 308
        echo "                                </div>
                            </div>
                            ";
        // line 310
        if ((($context["addShipmentForm"] ?? null) != "add_form_simple")) {
            // line 311
            echo "                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    ";
            // line 313
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received Date"]);
            echo "
                                </span>
                                <div class=\"kt-widget__label\">
                                    <span class=\"btn btn-label-";
            // line 316
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo " btn-sm btn-bold btn-upper\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "releasedNote_received", [], "any", false, false, false, 316), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 316)), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            ";
        } elseif ((        // line 319
($context["addShipmentForm"] ?? null) != "add_form_simple")) {
            // line 320
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receive_date", [], "any", false, false, false, 320)) {
                // line 321
                echo "                                    <div class=\"kt-widget__item\">
                                        <span class=\"kt-widget__date\">
                                            ";
                // line 323
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received Date"]);
                echo "
                                        </span>
                                        <div class=\"kt-widget__label\">
                                            <span class=\"btn btn-label-";
                // line 326
                echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
                echo " btn-sm btn-bold btn-upper\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receive_date", [], "any", false, false, false, 326), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 326)), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                ";
            } else {
                // line 330
                echo "                                    <div class=\"kt-widget__item\">
                                        <span class=\"kt-widget__date\">
                                            ";
                // line 332
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Expected Delievery Date"]);
                echo "
                                        </span>
                                        <div class=\"kt-widget__label\">
                                            ";
                // line 335
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 335)) {
                    // line 336
                    echo "                                                <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivery_date", [], "any", false, false, false, 336), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 336)), "html", null, true);
                    echo "</span>";
                    if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "postponed", [], "any", false, false, false, 336) == 1) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 336), [0 => 1, 1 => 3, 2 => 5, 3 => 6, 4 => 7, 5 => 10, 6 => 11]))) {
                        echo " | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["POSTPONED"]);
                        echo "</span>";
                    }
                    // line 337
                    echo "                                            ";
                } else {
                    // line 338
                    echo "                                                <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">
                                                ";
                    // line 339
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 339)) {
                        // line 340
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 340), (("+" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 340), "count", [], "any", false, false, false, 340)) . " hours")), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 340)), "html", null, true);
                        echo "
                                                ";
                    } else {
                        // line 342
                        echo "                                                    ";
                        echo null;
                        echo "
                                                ";
                    }
                    // line 344
                    echo "                                                </span>
                                            ";
                }
                // line 346
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 349
            echo "                            ";
        }
        // line 350
        echo "
                            <div class=\"kt-widget__item flex-fill\">
                                <span class=\"kt-widget__subtitel\">";
        // line 352
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Progress"]);
        echo "</span>
                                <div class=\"kt-widget__progress d-flex  align-items-center\">
                                    <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                        <div class=\"progress-bar kt-bg-";
        // line 355
        echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
        echo "\" role=\"progressbar\" style=\"width: ";
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <span class=\"kt-widget__stat\">
                                        ";
        // line 358
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:: Portlet-->


<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 379
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Details"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 388
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipment Type"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
        // line 390
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 390) == 1)) {
            // line 391
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receive"]);
            echo "
                                    ";
        } else {
            // line 393
            echo "                                        ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
            echo "
                                    ";
        }
        // line 395
        echo "                                </span>
                            </div>
                            ";
        // line 397
        if ((($context["addShipmentForm"] ?? null) == "add_form_advance")) {
            // line 398
            echo "                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 399
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packaging", [], "any", false, false, false, 400), "name", [], "any", false, false, false, 400), "html", null, true);
            echo "</span>
                            </div>
                            ";
        }
        // line 403
        echo "                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 406
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">
                                    <span class=\"btn btn-label-";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 408), "color", [], "any", false, false, false, 408), "html", null, true);
        echo " btn-sm btn-bold btn-upper\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 408), "name", [], "any", false, false, false, 408), "html", null, true);
        echo "</span>
                                    ";
        // line 409
        if ((($context["progress_status"] ?? null) == "danger")) {
            echo " | <span class=\"btn btn-label-";
            echo twig_escape_filter($this->env, ($context["progress_status"] ?? null), "html", null, true);
            echo " btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delayed"]);
            echo "</span>";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 409) == 10) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 409) == 11))) {
            echo " | <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["RETURNING DISCARDS"]);
            echo "</span>";
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "postponed", [], "any", false, false, false, 409) == 1)) {
            echo " | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["POSTPONED"]);
            echo "</span>";
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 409) == 12) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "status", [], "any", false, false, false, 409), "equal", [], "any", false, false, false, 409) != 12))) {
            echo " | <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Supplied"]);
            echo "</span>";
        }
        // line 410
        echo "                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
        // line 413
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Channel"]);
        echo "</span>
                                <span class=\"kt-widget12__value\">";
        // line 414
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "channel", [], "any", false, false, false, 414)]);
        echo "</span>
                            </div>
                        </div>
                        ";
        // line 417
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 418
            echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 420
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Label"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 421
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "label", [], "any", false, false, false, 421), "name", [], "any", false, false, false, 421), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 424
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Ground Handler"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 425
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "handler", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 430
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Breakdown"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 431
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "breakdown", [], "any", false, false, false, 431), "name", [], "any", false, false, false, 431), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 434
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tranfer to Jost"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 435
            echo ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transfer_jost", [], "any", false, false, false, 435)) ? ("Yes") : ("No"));
            echo "</span>
                            </div>
                        </div>
                        ";
        } elseif ((        // line 438
($context["addShipmentForm"] ?? null) == "add_form_advance")) {
            // line 439
            echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 441
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Type"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 442
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 442) == 1)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpaid"]);
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 442) == 2)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Prepaid"]);
            }
            echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 445
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Currency"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 446
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 446), "name", [], "any", false, false, false, 446), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 451
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 452
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "office", [], "any", false, false, false, 452), "name", [], "any", false, false, false, 452), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 455
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Time"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">";
            // line 456
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliverytime", [], "any", false, false, false, 456), "name", [], "any", false, false, false, 456), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        ";
        }
        // line 460
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 460) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 460))) {
            // line 461
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 462
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest_id", [], "any", false, false, false, 462)) {
                // line 463
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 464
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Manifest"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">#";
                // line 465
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 465), "id", [], "any", false, false, false, 465), "html", null, true);
                echo "</span>
                                        ";
                // line 466
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 466), "driver", [], "any", false, false, false, 466)) {
                    // line 467
                    echo "                                            <span class=\"kt-widget12__value kt-font-sm\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "manifest", [], "any", false, false, false, 467), "driver", [], "any", false, false, false, 467), "name", [], "any", false, false, false, 467), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 469
                echo "                                    </div>
                                ";
            }
            // line 471
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 471)) {
                // line 472
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 473
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assigned To"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 474
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 474), "name", [], "any", false, false, false, 474), "html", null, true);
                echo "</span>
                                        ";
                // line 475
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 475), "mobile", [], "any", false, false, false, 475)) {
                    // line 476
                    echo "                                            <span class=\"kt-widget12__value kt-font-sm\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "responsiable", [], "any", false, false, false, 476), "mobile", [], "any", false, false, false, 476), "html", null, true);
                    echo "</span>
                                        ";
                }
                // line 478
                echo "                                    </div>
                                ";
            }
            // line 480
            echo "                            </div>
                        ";
        }
        // line 482
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 482) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 482))) {
            // line 483
            echo "                            <div class=\"kt-widget12__item\">
                                ";
            // line 484
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_id", [], "any", false, false, false, 484)) {
                // line 485
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 486
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 487
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier", [], "any", false, false, false, 487), "name", [], "any", false, false, false, 487), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 490
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode_id", [], "any", false, false, false, 490)) {
                // line 491
                echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 492
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 493
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "mode", [], "any", false, false, false, 493), "name", [], "any", false, false, false, 493), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 496
            echo "                            </div>
                        ";
        }
        // line 498
        echo "
                        ";
        // line 499
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 499), [0 => 4, 1 => 5, 2 => 6, 3 => 10, 4 => 11, 5 => 12])) {
            // line 500
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_by", [], "any", false, false, false, 500) != twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_responsiable", [], "any", false, false, false, 500))) {
                // line 501
                echo "                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                // line 503
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered Responsiabality"]);
                echo "</span>
                                        <span class=\"kt-widget12__value\">";
                // line 504
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_responsiabality", [], "any", false, false, false, 504), "name", [], "any", false, false, false, 504), "html", null, true);
                echo "</span>
                                    </div>
                                </div>
                            ";
            }
            // line 508
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 510
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivered By"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 511
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "delivered_employee", [], "any", false, false, false, 511), "name", [], "any", false, false, false, 511), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 514
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Received By"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 515
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "received_by", [], "any", false, false, false, 515), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 520
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver ID Copy"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"";
            // line 522
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id_copy", [], "any", false, false, false, 522), "path", [], "any", false, false, false, 522), "html", null, true);
            echo "\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 528
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Signature"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"";
            // line 530
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "esign", [], "any", false, false, false, 530), "html", null, true);
            echo "\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                        ";
        }
        // line 535
        echo "        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
        // line 547
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment&Items Details"]);
        echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        ";
        // line 554
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 554))) {
            // line 555
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"table-responsive\">
                                        ";
            // line 558
            if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
                // line 559
                echo "                                        <table class=\"table table-dark\">
                                            <thead>
                                                <tr>
                                                    <th>";
                // line 562
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["AirwayBill"]);
                echo "</th>
                                                    <th>";
                // line 563
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Info"]);
                echo "</th>
                                                    <th>";
                // line 564
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo "</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                // line 568
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 568));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 569
                    echo "                                                    <tr>
                                                        <th scope=\"row\">";
                    // line 570
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "airWayBill", [], "any", false, false, false, 570), "html", null, true);
                    echo "</th>
                                                        <td>
                                                            ";
                    // line 572
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 572)) {
                        // line 573
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 573), "html", null, true);
                        echo "<br />
                                                            ";
                    }
                    // line 575
                    echo "                                                            <b>";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Number of boxes"]);
                    echo ":</b> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "num_boxes", [], "any", false, false, false, 575), "html", null, true);
                    echo "<br />
                                                            <b>";
                    // line 576
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Number of boxes"]);
                    echo ":</b> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "num_pallets", [], "any", false, false, false, 576), "html", null, true);
                    echo "<br />
                                                        </td>
                                                        <td>";
                    // line 578
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 578), "html", null, true);
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                    echo "</td>
                                                    </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 581
                echo "                                            </tbody>
                                        </table>
                                        ";
            } else {
                // line 584
                echo "                                        <table class=\"table table-dark\">
                    \t\t\t\t\t  \t<thead>
                    \t\t\t\t\t    \t<tr>
                    \t\t\t\t\t      \t\t<th>";
                // line 587
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
                echo "</th>
                    \t\t\t\t\t      \t\t<th>";
                // line 588
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Info"]);
                echo "</th>
                    \t\t\t\t\t      \t\t<th>";
                // line 589
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo "</th>
                    \t\t\t\t\t    \t</tr>
                    \t\t\t\t\t  \t</thead>
                    \t\t\t\t\t  \t<tbody>
                                                ";
                // line 593
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 593));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 594
                    echo "                        \t\t\t\t\t    \t<tr>
                        \t\t\t\t\t\t      \t<th scope=\"row\">";
                    // line 595
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 595), "name", [], "any", false, false, false, 595), "html", null, true);
                    echo "</th>
                        \t\t\t\t\t\t      \t<td>
                                                            ";
                    // line 597
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 597)) {
                        // line 598
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 598), "html", null, true);
                        echo "<br />
                                                            ";
                    }
                    // line 600
                    echo "                                                            <b>";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                    echo ":</b> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 600), "html", null, true);
                    echo "<br />
                                                            ";
                    // line 601
                    if ((($context["addShipmentForm"] ?? null) != "add_form_simple")) {
                        // line 602
                        echo "                                                            <b>";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Dimensions"]);
                        echo ":</b> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", [], "any", false, false, false, 602), "html", null, true);
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                        echo " x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 602), "html", null, true);
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                        echo " x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 602), "html", null, true);
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["cm"]);
                        echo "
                                                            ";
                    }
                    // line 604
                    echo "                                                        </td>
                        \t\t\t\t\t\t      \t<td>";
                    // line 605
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 605), "html", null, true);
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                    echo "</td>
                        \t\t\t\t\t    \t</tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 608
                echo "                    \t\t\t\t\t  \t</tbody>
                    \t\t\t\t\t</table>
                                        ";
            }
            // line 611
            echo "                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 615
        echo "                        
                        ";
        // line 616
        if ((($context["addShipmentForm"] ?? null) == "add_form_normal")) {
            // line 617
            echo "                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "custom_clearance", [], "any", false, false, false, 617) != 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "fiscal_representaion", [], "any", false, false, false, 617) != 0))) {
                // line 618
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 619
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "custom_clearance", [], "any", false, false, false, 619) != 0)) {
                    // line 620
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 621
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Custom Clearance"]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 622
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "custom_clearance", [], "any", false, false, false, 622)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 625
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "fiscal_representation", [], "any", false, false, false, 625) != 0)) {
                    // line 626
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 627
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Fisacl Representaion"]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 628
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "fiscal_representation", [], "any", false, false, false, 628)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 631
                echo "                            </div>
                        ";
            }
            // line 633
            echo "                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_term", [], "any", false, false, false, 633) != 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price_kg", [], "any", false, false, false, 633) != 0))) {
                // line 634
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 635
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_term", [], "any", false, false, false, 635) != 0)) {
                    // line 636
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 637
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Invoice Payment Term"]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 638
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_term", [], "any", false, false, false, 638)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 641
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price_kg", [], "any", false, false, false, 641) != 0)) {
                    // line 642
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 643
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Handling Price per Kg "]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 644
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price_kg", [], "any", false, false, false, 644)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 647
                echo "                            </div>
                        ";
            }
            // line 649
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "storage_fee", [], "any", false, false, false, 649) == 1)) {
                // line 650
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 651
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "cost_24", [], "any", false, false, false, 651) != 0)) {
                    // line 652
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 653
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Storage Costs after 24 Hours"]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 654
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "cost_24", [], "any", false, false, false, 654)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 657
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "cost_48", [], "any", false, false, false, 657) != 0)) {
                    // line 658
                    echo "                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                    // line 659
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Storage Costs after 48 Hours "]);
                    echo "</span>
                                    <span class=\"kt-widget12__value\">";
                    // line 660
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "cost_48", [], "any", false, false, false, 660)]);
                    echo "</span>
                                </div>
                                ";
                }
                // line 663
                echo "                            </div>
                        ";
            }
            // line 665
            echo "                       
                        <div class=\"kt-widget12__item\">
                            ";
            // line 667
            $context["sub_total"] = (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price_kg", [], "any", false, false, false, 667) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "details", [], "any", false, false, false, 667), "weight", [], "any", false, false, false, 667));
            // line 668
            echo "                            ";
            $context["store_fee"] = (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_term", [], "any", false, false, false, 668) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "cost_24", [], "any", false, false, false, 668));
            // line 669
            echo "                            ";
            $context["total"] = (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "custom_clearance", [], "any", false, false, false, 669) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "fiscal_representation", [], "any", false, false, false, 669)) + ($context["sub_total"] ?? null)) + ($context["store_fee"] ?? null));
            // line 670
            echo "                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 671
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sub Total"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">
                                        ";
            // line 673
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["sub_total"] ?? null)]);
            echo "
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 677
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">
                                        ";
            // line 679
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total"] ?? null)]);
            echo "
                                </span>
                            </div>
                        </div>
                        ";
        } else {
            // line 684
            echo "                        <!--                    start pay by paypal           -->
                            ";
            // line 685
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 685) == "paypal")) {
                // line 686
                echo "                                ";
                if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 686) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 686)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 686) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 686) != 2)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 686) == 2))) {
                    // line 687
                    echo "                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            ";
                    // line 689
                    if ((($context["paymentStatus"] ?? null) == 0)) {
                        // line 690
                        echo "                                                <div class=\"kt-widget12__desc\">
                                                    ";
                        // line 691
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("paypal"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 692
                        echo "                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 694
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount you will pay online is what is requested from you only"]);
                        echo "</span>
                                                </span>
                                            ";
                    } else {
                        // line 697
                        echo "                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 698
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Shipment Cost has paid "]);
                        echo "</span>
                                                </span>
                                            ";
                    }
                    // line 700
                    echo "    
                                        </div>
                                    </div>
                                    
                                ";
                } elseif (((((twig_get_attribute($this->env, $this->source,                 // line 704
($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 704) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 704)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 704) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 704) != 2)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 704) == 1))) {
                    // line 705
                    echo "                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            ";
                    // line 707
                    if ((($context["paymentStatus"] ?? null) == 0)) {
                        // line 708
                        echo "                                                <div class=\"kt-widget12__desc\">
                                                    ";
                        // line 709
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("paypal"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 710
                        echo "                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 712
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount you will pay online is what is requested from you only"]);
                        echo "</span>
                                                </span>
                                            ";
                    } else {
                        // line 715
                        echo "                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 716
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Shipment Cost has paid "]);
                        echo "</span>
                                                </span>
                                            ";
                    }
                    // line 718
                    echo "    
                                        </div>
                                    </div>
                                ";
                } elseif (((((((twig_get_attribute($this->env, $this->source,                 // line 721
($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 721) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 721)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 721) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 721) != 2)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 721) == 2)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 721) == 1)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 721) == 1))) {
                    // line 722
                    echo "                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            ";
                    // line 724
                    if ((($context["paymentReturnStatus"] ?? null) == 0)) {
                        // line 725
                        echo "                                                <div class=\"kt-widget12__desc\">
                                                    ";
                        // line 726
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("paypal"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 727
                        echo "                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 729
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount you will pay online is what is requested from you only"]);
                        echo "</span>
                                                </span>
                                            ";
                    } else {
                        // line 732
                        echo "                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 733
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Returned Package Cost has paid "]);
                        echo "</span>
                                                </span>
                                            ";
                    }
                    // line 735
                    echo "    
                                        </div>
                                    </div>
                                ";
                } elseif (((((((twig_get_attribute($this->env, $this->source,                 // line 738
($context["order"] ?? null), "sender_id", [], "any", false, false, false, 738) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 738)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 738) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 738) != 2)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_type", [], "any", false, false, false, 738) == 1)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 738) == 1)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 738) == 2))) {
                    echo "    
                                   <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            ";
                    // line 741
                    if ((($context["paymentReturnStatus"] ?? null) == 0)) {
                        // line 742
                        echo "                                                <div class=\"kt-widget12__desc\">
                                                    ";
                        // line 743
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("paypal"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 744
                        echo "                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 746
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount you will pay online is what is requested from you only"]);
                        echo "</span>
                                                </span>
                                            ";
                    } else {
                        // line 749
                        echo "                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        // line 750
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The Returned Package Cost has paid "]);
                        echo "</span>
                                                </span>
                                            ";
                    }
                    // line 752
                    echo "    
                                        </div>
                                    </div> 
                                ";
                }
                // line 756
                echo "                                <!--                    end pay by paypal           -->
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 757
($context["order"] ?? null), "payment_method", [], "any", false, false, false, 757) == "paystack")) {
                // line 758
                echo "

                            ";
            }
            // line 761
            echo "


                            ";
            // line 764
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 764), "where", [0 => "item_id", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 764), "id", [], "any", false, false, false, 764)], "method", false, false, false, 764), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 764)], "method", false, false, false, 764), "first", [], "any", false, false, false, 764), "status", [], "any", false, false, false, 764) == 3) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 764) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 764)))) {
                // line 765
                echo "
                            ";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 766
($context["order"] ?? null), "payments", [], "any", false, false, false, 766), "where", [0 => "item_id", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 766), "id", [], "any", false, false, false, 766)], "method", false, false, false, 766), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 766)], "method", false, false, false, 766), "first", [], "any", false, false, false, 766), "status", [], "any", false, false, false, 766) == 3) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 766) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 766)))) {
                // line 767
                echo "
                            ";
            } else {
                // line 769
                echo "
                                ";
                // line 770
                if (((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 770) == "paystack") && twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 770)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 770) != 0)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 770) != 2))) {
                    // line 771
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "enable_paystack", [], "any", false, false, false, 771) == 2)) {
                        echo " <!-- should remove 2 to enable paystack block -->
                                        ";
                        // line 772
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 772), [0 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 772), 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 772)])) {
                            // line 773
                            echo "                                            <div class=\"kt-widget12__item\">
                                                <div class=\"kt-widget12__info\">
                                                    <form class=\"kt-widget12__desc\">
                                                        <script src=\"https://js.paystack.co/v1/inline.js\"></script>
                                                        <button type=\"button\" class=\"btn btn-wide btn-success btn-bold btn-upper btn-elevate btn-elevate-air\" onclick=\"payWithPaystack()\"> <i class=\"fa fa-dollar-sign\"></i> ";
                            // line 777
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PAY ONLINE"]);
                            echo " </button>
                                                    </form>
                                                    <span class=\"kt-widget12__value\">
                                                        <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                            // line 780
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack only uses GHS currency so that is why we change the money for it"]);
                            echo "\" data-original-title=\"";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paystack only uses GHS currency so that is why we change the money for it"]);
                            echo "\" data-skin=\"dark\">";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount will be changed for Ghanaian cedi for using the paystack payment gateway, the changed price will equal the same as you should pay"]);
                            echo "</span>
                                                        <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                            // line 781
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                            echo "\" data-original-title=\"";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment"]);
                            echo "\" data-skin=\"dark\">";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The amount you will pay online is what is requested from you only"]);
                            echo "</span>
                                                    </span>
                                                </div>
                                            </div>
                                        ";
                        } else {
                            // line 786
                            echo "                                            <div class=\"alert alert-info\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"flaticon-info\"></i></div>
                                                <div class=\"alert-text\">
                                                    ";
                            // line 789
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender and receiver can see the online payment option if they have to pay something they can pay it online"]);
                            echo ".
                                                </div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 798
                        echo "                                    ";
                    }
                    // line 799
                    echo "                                ";
                }
                // line 800
                echo "
                            ";
            }
            // line 802
            echo "                            ";
            if ((((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 802) != 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 802) != 0)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 802) != 0)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 802) != 0)) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 802) != 0))) {
                // line 803
                echo "                                <div class=\"kt-widget12__item\">
                                    ";
                // line 804
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 804) != 0)) {
                    // line 805
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 806
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tax"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 807
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax", [], "any", false, false, false, 807), "html", null, true);
                    echo "%</span>
                                    </div>
                                    ";
                }
                // line 810
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 810) != 0)) {
                    // line 811
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 812
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SGST"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 813
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_sgst", [], "any", false, false, false, 813), "html", null, true);
                    echo "%</span>
                                    </div>
                                    ";
                }
                // line 816
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 816) != 0)) {
                    // line 817
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 818
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CGST"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 819
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tax_cgst", [], "any", false, false, false, 819), "html", null, true);
                    echo "%</span>
                                    </div>
                                    ";
                }
                // line 822
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 822) != 0)) {
                    // line 823
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 824
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Insurance"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 825
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "insurance", [], "any", false, false, false, 825), "html", null, true);
                    echo "%</span>
                                    </div>
                                    ";
                }
                // line 828
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 828) != 0)) {
                    // line 829
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 830
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customs Value"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 831
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customs_value", [], "any", false, false, false, 831), "html", null, true);
                    echo "</span>
                                    </div>
                                    ";
                }
                // line 834
                echo "                                </div>
                            ";
            }
            // line 836
            echo "                            ";
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "role_id", [], "any", false, false, false, 836), [0 => 1, 1 => 2, 2 => 3, 3 => 6]) || twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_superuser", [], "any", false, false, false, 836))) {
                // line 837
                echo "                                <div class=\"kt-widget12__item\">
                                    ";
                // line 838
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 838) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 838)))) {
                    // line 839
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 840
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pickup Cost"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 842
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 842)]);
                    echo "
                                                ";
                    // line 843
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 843), "where", [0 => "payment_type", 1 => "courier_fee"], "method", false, false, false, 843), "first", [], "any", false, false, false, 843), "status", [], "any", false, false, false, 843) == 3)) {
                        // line 844
                        echo "                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                        echo "</span>
                                                ";
                    }
                    // line 846
                    echo "                                            </span>
                                        </div>
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 849
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Cost"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 851
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 851), "delivery_cost", [], "any", false, false, false, 851)]);
                    echo " <!--";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 851), [0 => 100, 1 => 0, 2 => 1])) {
                        echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                        echo "</span>";
                    }
                    echo "-->
                                            </span>
                                        </div>
                                    ";
                } else {
                    // line 855
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 856
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Cost"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 858
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 858)]);
                    echo " <!--";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 858), [0 => 100, 1 => 0, 2 => 1])) {
                        echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                        echo "</span>";
                    }
                    echo "-->
                                            </span>
                                        </div>
                                    ";
                }
                // line 862
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 862) == 1)) {
                    // line 863
                    echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 864
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Package"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                    // line 866
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 866)]);
                    echo "
                                                ";
                    // line 867
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 867), "where", [0 => "payment_type", 1 => "package_fee"], "method", false, false, false, 867), "first", [], "any", false, false, false, 867), "status", [], "any", false, false, false, 867) == 2)) {
                        // line 868
                        echo "                                                    <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Canceled"]);
                        echo "</span>
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 869
($context["order"] ?? null), "requested", [], "any", false, false, false, 869) == 12)) {
                        // line 870
                        echo "                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                        echo "</span>
                                                ";
                    }
                    // line 872
                    echo "                                            </span>
                                        </div>
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                    // line 875
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Courier Cost"]);
                    echo "</span>
                                            <span class=\"kt-widget12__value\">";
                    // line 876
                    echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 876)]);
                    echo "</span> <!--";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 876), [0 => 100, 1 => 0, 2 => 1])) {
                        echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-original-title=\"";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                        echo "\" data-skin=\"dark\">";
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                        echo "</span>";
                    }
                    echo "-->
                                        </div>
                                    ";
                } else {
                    // line 879
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 879), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 879), "first", [], "any", false, false, false, 879)) {
                        // line 880
                        echo "                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">";
                        // line 881
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Courier Cost"]);
                        echo "</span>
                                                <span class=\"kt-widget12__value\">
                                                    ";
                        // line 883
                        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 883)]);
                        echo "
                                                    ";
                        // line 884
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 884), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 884), "first", [], "any", false, false, false, 884), "status", [], "any", false, false, false, 884) == 2)) {
                            // line 885
                            echo "                                                        <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Canceled"]);
                            echo "</span>
                                                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 886
($context["order"] ?? null), "payments", [], "any", false, false, false, 886), "where", [0 => "payment_type", 1 => "return_package_fee"], "method", false, false, false, 886), "first", [], "any", false, false, false, 886), "status", [], "any", false, false, false, 886) == 3)) {
                            // line 887
                            echo "                                                        <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                            echo "</span>
                                                    ";
                        }
                        // line 889
                        echo "                                                </span>
                                            </div>
                                        ";
                    }
                    // line 892
                    echo "                                    ";
                }
                // line 893
                echo "                                </div>
                            ";
            }
            // line 895
            echo "                            ";
            if ((($context["addShipmentForm"] ?? null) != "add_form_simple")) {
                // line 896
                echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    ";
                // line 898
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 898) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 898))) {
                    // line 899
                    echo "                                        <span class=\"kt-widget12__desc\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From You"]);
                    echo "</span>
                                    ";
                } else {
                    // line 901
                    echo "                                        <span class=\"kt-widget12__desc\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From The Receiver"]);
                    echo "</span>
                                    ";
                }
                // line 903
                echo "                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 904
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["receiver_fee_unpaid"] ?? null)]);
                echo "<!--";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 904), [0 => 100, 1 => 0, 2 => 1])) {
                    echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-original-title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-skin=\"dark\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                    echo "</span>";
                }
                echo "-->
                                        ";
                // line 905
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 905), "where", [0 => "item_id", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 905), "id", [], "any", false, false, false, 905)], "method", false, false, false, 905), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 905)], "method", false, false, false, 905), "first", [], "any", false, false, false, 905), "status", [], "any", false, false, false, 905) == 3)) {
                    // line 906
                    echo "                                            <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                    echo "</span>
                                        ";
                }
                // line 908
                echo "                                    </span>
                                    <!--
                                        ";
                // line 910
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 910) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 910)))) {
                    // line 911
                    echo "                                            <span class=\"muted-text kt-font-danger\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The correct fees will be applied after selecting the receiver address"]);
                    echo "</span>
                                        ";
                }
                // line 912
                echo "</span>
                                    -->
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    ";
                // line 918
                if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 918) == twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 918))) {
                    // line 919
                    echo "                                        <span class=\"kt-widget12__desc\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From You"]);
                    echo "</span>
                                    ";
                } else {
                    // line 921
                    echo "                                        <span class=\"kt-widget12__desc\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total Requested From The Sender"]);
                    echo "</span>
                                    ";
                }
                // line 923
                echo "                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 924
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["sender_fee_unpaid"] ?? null)]);
                echo "<!--";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 924), [0 => 100, 1 => 0, 2 => 1])) {
                    echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-original-title=\"";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                    echo "\" data-skin=\"dark\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                    echo "</span>";
                }
                echo "-->
                                        ";
                // line 925
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 925), "where", [0 => "item_id", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 925), "id", [], "any", false, false, false, 925)], "method", false, false, false, 925), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_id", [], "any", false, false, false, 925)], "method", false, false, false, 925), "first", [], "any", false, false, false, 925), "status", [], "any", false, false, false, 925) == 3)) {
                    // line 926
                    echo "                                            <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Paid"]);
                    echo "</span>
                                        ";
                }
                // line 928
                echo "                                    </span>
                                    <!--
                                        ";
                // line 930
                if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 930) == 1) && (null === twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 930)))) {
                    // line 931
                    echo "                                            <span class=\"muted-text kt-font-danger\">";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The correct fees will be applied after selecting the receiver address"]);
                    echo "</span>
                                        ";
                }
                // line 933
                echo "                                    -->
                                </div>
                            </div>
                            ";
            }
            // line 937
            echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 939
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total received"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">";
            // line 940
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_received"] ?? null)]);
            echo "</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
            // line 943
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Total remaining"]);
            echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
            // line 945
            if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 945) == 1) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 945) == 2)) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 945), [0 => 4, 1 => 5, 2 => 6, 3 => 8, 4 => 9, 5 => 10, 6 => 11, 7 => 12]))) {
                // line 946
                echo "                                            ";
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_remaining"] ?? null)]);
                echo " <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The requested amount of the sender was deducted from the return"]);
                echo "</span>
                                        ";
            } else {
                // line 948
                echo "                                            ";
                echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [($context["total_remaining"] ?? null)]);
                echo "
                                        ";
            }
            // line 949
            echo " <!--";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 949), [0 => 100, 1 => 0, 2 => 1])) {
                echo "<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                echo "\" data-original-title=\"";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The actual cost will be calculated when we receive the package"]);
                echo "\" data-skin=\"dark\">";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Not confirmed yet"]);
                echo "</span>";
            }
            echo "-->
                                    </span>
                                </div>
                                 
                            </div>
                        ";
        }
        // line 955
        echo "                    </div>
                </div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
</div>
<div class=\"row\">
    ";
        // line 963
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 963), "customerPublic", [], "any", false, false, false, 963) == 1)) {
            // line 964
            echo "    <div class=\"col-xl-";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 964) == 1) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 964) == null))) {
                echo "12";
            } else {
                echo "6";
            }
            echo "\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t";
            // line 970
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Details"]);
            echo "
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 979
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
            // line 981
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_name", [], "any", false, false, false, 981)) {
                // line 982
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_name", [], "any", false, false, false, 982)), "html", null, true);
                echo "
                                    ";
            } else {
                // line 984
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 984), "name", [], "any", false, false, false, 984)), "html", null, true);
                echo "
                                    ";
            }
            // line 986
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 986), "userverify_dateverified", [], "any", false, false, false, 986)) {
                // line 987
                echo "                                        <i class=\"flaticon2-correct kt-font-info\"></i>
                                    ";
            }
            // line 989
            echo "                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 992
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
            echo "</span>
                                ";
            // line 993
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_mobile", [], "any", false, false, false, 993)) {
                // line 994
                echo "                                <span class=\"kt-widget12__value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_mobile", [], "any", false, false, false, 994), "html", null, true);
                echo "</span>
                                ";
            } else {
                // line 996
                echo "                                <span class=\"kt-widget12__value\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 996), "mobile", [], "any", false, false, false, 996), "html", null, true);
                echo "</span>
                                ";
            }
            // line 998
            echo "                            </div>
                        </div>
                        ";
            // line 1000
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1000), "email", [], "any", false, false, false, 1000) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1000), "gender", [], "any", false, false, false, 1000))) {
                // line 1001
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 1002
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1002), "email", [], "any", false, false, false, 1002)) {
                    // line 1003
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1004
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 1005
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1005), "email", [], "any", false, false, false, 1005), "html", null, true);
                    echo "</span>
                                    </div>
                                ";
                }
                // line 1008
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1008), "gender", [], "any", false, false, false, 1008)) {
                    // line 1009
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1010
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">";
                    // line 1011
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1011), "gender", [], "any", false, false, false, 1011), "html", null, true);
                    echo "</span>
                                    </div>
                                ";
                }
                // line 1014
                echo "                            </div>
                        ";
            }
            // line 1016
            echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 1018
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Address"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
            // line 1020
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_addr", [], "any", false, false, false, 1020)) {
                // line 1021
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_addr", [], "any", false, false, false, 1021)), "html", null, true);
                echo "
                                    ";
            } else {
                // line 1023
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1023), "name", [], "any", false, false, false, 1023)), "html", null, true);
                echo "
                                    ";
            }
            // line 1025
            echo "                                </span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">";
            // line 1030
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
            echo "</span>
                                <span class=\"kt-widget12__value\">
                                    ";
            // line 1032
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_addr", [], "any", false, false, false, 1032)) {
                // line 1033
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_addr", [], "any", false, false, false, 1033)), "html", null, true);
                echo "
                                    ";
            } else {
                // line 1035
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1035), "street", [], "any", false, false, false, 1035), "html", null, true);
                echo "
                                    ";
            }
            // line 1037
            echo "                                </span>
                            </div>
                        </div>
                        ";
            // line 1040
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1040), "area", [], "any", false, false, false, 1040) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1040), "thecity", [], "any", false, false, false, 1040))) {
                // line 1041
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 1042
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1042), "area", [], "any", false, false, false, 1042)) {
                    // line 1043
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1044
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                    // line 1046
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_area_id", [], "any", false, false, false, 1046)) {
                        // line 1047
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_area_id", [], "any", false, false, false, 1047)), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 1049
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1049), "area", [], "any", false, false, false, 1049), "name", [], "any", false, false, false, 1049), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 1051
                    echo "                                        </span>
                                    </div>
                                ";
                }
                // line 1054
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1054), "thecity", [], "any", false, false, false, 1054)) {
                    // line 1055
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1056
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                    // line 1058
                    if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_city_id", [], "any", false, false, false, 1058)) {
                        // line 1059
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_city_id", [], "any", false, false, false, 1059)), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 1061
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1061), "thecity", [], "any", false, false, false, 1061), "name", [], "any", false, false, false, 1061), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 1063
                    echo "                                        </span>
                                    </div>
                                ";
                }
                // line 1066
                echo "                            </div>
                        ";
            }
            // line 1068
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1068), "thestate", [], "any", false, false, false, 1068) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1068), "thecountry", [], "any", false, false, false, 1068))) {
                // line 1069
                echo "                            <div class=\"kt-widget12__item\">
                                ";
                // line 1070
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1070), "thestate", [], "any", false, false, false, 1070)) {
                    // line 1071
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1072
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                    // line 1074
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1074), "thestate", [], "any", false, false, false, 1074), "name", [], "any", false, false, false, 1074), "html", null, true);
                    echo "
                                        </span>
                                    </div>
                                ";
                }
                // line 1078
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1078), "thecountry", [], "any", false, false, false, 1078)) {
                    // line 1079
                    echo "                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">";
                    // line 1080
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                    echo "</span>
                                        <span class=\"kt-widget12__value\">
                                            ";
                    // line 1082
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1082), "thecountry", [], "any", false, false, false, 1082), "name", [], "any", false, false, false, 1082), "html", null, true);
                    echo "
                                        </span>
                                    </div>
                                ";
                }
                // line 1086
                echo "                            </div>
                        ";
            }
            // line 1088
            echo "                        ";
            if ((($context["addShipmentForm"] ?? null) == "add_form_advance")) {
                // line 1089
                echo "                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                        \t\t<div class=\"kt-widget15\">
                        \t\t\t<div class=\"kt-widget15__map\">
                        \t\t\t\t<div id=\"kt_map_sender\" style=\"height:320px;\"></div>
                        \t\t\t</div>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 1099
            echo "        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    ";
        }
        // line 1106
        echo "    ";
        if ((($context["addShipmentForm"] ?? null) != "add_form_normal")) {
            // line 1107
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 1107) == 2) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 1107) != null))) {
                // line 1108
                echo "        <div class=\"col-xl-6\">
            <!--begin:: Widgets/Order Statistics-->
            <div class=\"kt-portlet kt-portlet--height-fluid\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t";
                // line 1114
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Details"]);
                echo "
            \t\t\t</h3>
            \t\t</div>
            \t</div>
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
            \t\t<div class=\"kt-widget12\">
            \t\t\t<div class=\"kt-widget12__content\">
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 1123
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Name"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 1125
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 1125)) {
                    // line 1126
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_name", [], "any", false, false, false, 1126)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 1128
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1128), "name", [], "any", false, false, false, 1128)), "html", null, true);
                    echo "
                                        ";
                }
                // line 1130
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1130), "userverify_dateverified", [], "any", false, false, false, 1130)) {
                    // line 1131
                    echo "                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        ";
                }
                // line 1133
                echo "                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 1136
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
                echo "</span>
                                    ";
                // line 1137
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_mobile", [], "any", false, false, false, 1137)) {
                    // line 1138
                    echo "                                    <span class=\"kt-widget12__value\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_mobile", [], "any", false, false, false, 1138)), "html", null, true);
                    echo "</span>
                                    ";
                } else {
                    // line 1140
                    echo "                                    <span class=\"kt-widget12__value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1140), "mobile", [], "any", false, false, false, 1140), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 1142
                echo "                                </div>
                            </div>
                            ";
                // line 1144
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1144), "email", [], "any", false, false, false, 1144) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1144), "gender", [], "any", false, false, false, 1144))) {
                    // line 1145
                    echo "                                <div class=\"kt-widget12__item\">
                                    ";
                    // line 1146
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1146), "email", [], "any", false, false, false, 1146)) {
                        // line 1147
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1148
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">";
                        // line 1149
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1149), "email", [], "any", false, false, false, 1149), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 1152
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1152), "gender", [], "any", false, false, false, 1152)) {
                        // line 1153
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1154
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">";
                        // line 1155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 1155), "gender", [], "any", false, false, false, 1155), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 1158
                    echo "                                </div>
                            ";
                }
                // line 1160
                echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 1162
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 1164
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_addr", [], "any", false, false, false, 1164)) {
                    // line 1165
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_addr", [], "any", false, false, false, 1165)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 1167
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1167), "name", [], "any", false, false, false, 1167)), "html", null, true);
                    echo "
                                        ";
                }
                // line 1169
                echo "                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">";
                // line 1174
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Street"]);
                echo "</span>
                                    <span class=\"kt-widget12__value\">
                                        ";
                // line 1176
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_addr", [], "any", false, false, false, 1176)) {
                    // line 1177
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_addr", [], "any", false, false, false, 1177)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 1179
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1179), "street", [], "any", false, false, false, 1179), "html", null, true);
                    echo "
                                        ";
                }
                // line 1181
                echo "                                    </span>
                                </div>
                            </div>
                            ";
                // line 1184
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1184), "area", [], "any", false, false, false, 1184) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1184), "thecity", [], "any", false, false, false, 1184))) {
                    // line 1185
                    echo "                                <div class=\"kt-widget12__item\">
                                    ";
                    // line 1186
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1186), "area", [], "any", false, false, false, 1186)) {
                        // line 1187
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1188
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                        // line 1190
                        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_area_id", [], "any", false, false, false, 1190)) {
                            // line 1191
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_area_id", [], "any", false, false, false, 1191)), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 1193
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1193), "area", [], "any", false, false, false, 1193), "name", [], "any", false, false, false, 1193), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 1195
                        echo "                                            </span>
                                        </div>
                                    ";
                    }
                    // line 1198
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1198), "thecity", [], "any", false, false, false, 1198)) {
                        // line 1199
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1200
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                        // line 1202
                        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_city_id", [], "any", false, false, false, 1202)) {
                            // line 1203
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_city_id", [], "any", false, false, false, 1203)), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 1205
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1205), "thecity", [], "any", false, false, false, 1205), "name", [], "any", false, false, false, 1205), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 1207
                        echo "                                            </span>
                                        </div>
                                    ";
                    }
                    // line 1210
                    echo "                                </div>
                            ";
                }
                // line 1212
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1212), "thestate", [], "any", false, false, false, 1212) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1212), "thecountry", [], "any", false, false, false, 1212))) {
                    // line 1213
                    echo "                                <div class=\"kt-widget12__item\">
                                    ";
                    // line 1214
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1214), "thestate", [], "any", false, false, false, 1214)) {
                        // line 1215
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1216
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                        // line 1218
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1218), "thestate", [], "any", false, false, false, 1218), "name", [], "any", false, false, false, 1218), "html", null, true);
                        echo "
                                            </span>
                                        </div>
                                    ";
                    }
                    // line 1222
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1222), "thecountry", [], "any", false, false, false, 1222)) {
                        // line 1223
                        echo "                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">";
                        // line 1224
                        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
                        echo "</span>
                                            <span class=\"kt-widget12__value\">
                                                ";
                        // line 1226
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 1226), "thecountry", [], "any", false, false, false, 1226), "name", [], "any", false, false, false, 1226), "html", null, true);
                        echo "
                                            </span>
                                        </div>
                                    ";
                    }
                    // line 1230
                    echo "                                </div>
                            ";
                }
                // line 1232
                echo "                            ";
                if ((($context["addShipmentForm"] ?? null) != "add_form_simple")) {
                    // line 1233
                    echo "                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"kt-widget15\">
                            \t\t\t<div class=\"kt-widget15__map\">
                            \t\t\t\t<div id=\"kt_map_receiver\" style=\"height:320px;\"></div>
                            \t\t\t</div>
                                    </div>
                                </div>
                            </div>
                            ";
                }
                // line 1243
                echo "            \t\t\t</div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Order Statistics-->
        </div>
    ";
            }
            // line 1250
            echo "    ";
        }
        // line 1251
        echo "</div>
<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Last Updates-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">";
        // line 1258
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Latest Updates"]);
        echo "</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                    ";
        // line 1263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activities", [], "any", false, false, false, 1263));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 1264
            echo "                        <!--begin::widget 12-->
                        <div class=\"kt-widget4\">
                            <div class=\"kt-widget4__item\">
                                <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                <div class=\"kt-widget4__info\">
        \t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"kt-widget4__username\">
                                        ";
            // line 1270
            if (twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 1270)) {
                // line 1271
                echo "                                            ";
                $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 1271));
                // line 1272
                echo "                                            ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "other", [], "any", false, false, false, 1272), "html", null, true);
                echo "
                                        ";
            } else {
                // line 1274
                echo "                                            ";
                $context["text"] = ("activity_" . twig_get_attribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 1274));
                // line 1275
                echo "            \t\t\t\t\t\t\t\t";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [($context["text"] ?? null)]);
                echo "
                                        ";
            }
            // line 1277
            echo "        \t\t\t\t\t\t\t</a>
        \t\t\t\t\t\t\t<p class=\"kt-widget4__text\">
        \t\t\t\t\t\t\t\t";
            // line 1279
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 1279), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 1279)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 1279), "h:i"), "html", null, true);
            echo " ";
            if (call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 1279), "a")])) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "created_at", [], "any", false, false, false, 1279), "a")]);
            }
            // line 1280
            echo "        \t\t\t\t\t\t\t</p>
        \t\t\t\t\t\t</div>
                                <span class=\"kt-widget4__number kt-font-info\">";
            // line 1282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 1282), "name", [], "any", false, false, false, 1282), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 1287
            echo "                        <div class=\"kt-notification\">
                            <div class=\"kt-notification__item\">
                                <div class=\"kt-notification__item-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                            <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class=\"kt-notification__item-details\">
                                    <div class=\"kt-notification__item-title\">
                                        ";
            // line 1300
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No activities found"]);
            echo ".
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1306
        echo "                </div>
            </div>
        </div>
        <!--end:: Widgets/Last Updates-->
    </div>
    <div class=\"col-xl-6\" id=\"notes_continer\">

        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">";
        // line 1316
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                ";
        // line 1320
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onNote", ["success" => "flashRequest(data.type,data.message);\$('#note_message').val('');", "class" => "kt_form notes"]]);
        echo "
                    <div class=\"form-group form-group-last kt-hide\">
                        <div class=\"alert alert-danger kt_form_msg_notes\" role=\"alert\">
                            <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                            <div class=\"alert-text\">
                                ";
        // line 1325
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
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"note_message\" rows=\"3\" name=\"note\" placeholder=\"";
        // line 1335
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Write your notes"]);
        echo "\" required></textarea>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-label-brand btn-bold\">";
        // line 1339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add note"]);
        echo "</button>
                            <button type=\"reset\" class=\"btn btn-clean btn-bold\">";
        // line 1340
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                        </div>
                    </div>
                ";
        // line 1343
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "

                <div class=\"kt-separator kt-separator--space-lg kt-separator--border-dashed\"></div>
                <div id=\"notes\">
                    ";
        // line 1347
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["order"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("notes"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 1348
        echo "                </div>
            </div>
        </div>
    </div>
    <!--
        <div class=\"col-xl-6 kt-todo\">
            <div class=\"kt-grid__item kt-grid__item--fluid  kt-portlet kt-portlet--height-fluid kt-todo__list\" id=\"kt_todo_list\">
                <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
                    <div class=\"kt-todo__head\">
                        <div class=\"kt-todo__toolbar\">
                            <div class=\"kt-todo__info\">
                                <span class=\"kt-todo__name\">
                                    ";
        // line 1360
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Order Tasks"]);
        echo "
                                </span>
                            </div>
                            <div class=\"kt-todo__details\">
                                <a href=\"javascript:;\" class=\"btn btn-label-success btn-upper btn-sm btn-bold\">";
        // line 1364
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["New Task"]);
        echo "</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-todo__body\">
                        ";
        // line 1370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 1371
            echo "                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-id=\"1\" data-type=\"task\">
                                    <div class=\"kt-todo__info\">
                                        <div class=\"kt-todo__actions\">
                                            <label class=\"kt-checkbox kt-checkbox--single kt-checkbox--tick kt-checkbox--brand\">
                                                <input type=\"checkbox\">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">";
            // line 1383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 1383), "html", null, true);
            echo "</span>
                                        </div>
                                        <div class=\"kt-todo__labels\">
                                            <span class=\"kt-todo__label kt-badge kt-badge--unified-brand kt-badge--bold kt-badge--inline\">";
            // line 1386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "comment", [], "any", false, false, false, 1386), "html", null, true);
            echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__datetime\" data-toggle=\"view\">
                                        8:30 PM
                                    </div>
                                    <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            // line 1392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 1392), "name", [], "any", false, false, false, 1392), "html", null, true);
            echo "\">
                                        ";
            // line 1393
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 1393), "avatar", [], "any", false, false, false, 1393)) {
                // line 1394
                echo "                                             <span class=\"kt-media kt-media--sm kt-media--danger kt-hidden\" style=\"background-image: url('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 1394), "avatar", [], "any", false, false, false, 1394), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 1394), "html", null, true);
                echo "')\">
                                                 <span></span>
                                             </span>
                                        ";
            } else {
                // line 1398
                echo "                                            <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 1398), "name", [], "any", false, false, false, 1398), "html", null, true);
                echo "\">
                                                <span class=\"kt-media kt-media--sm kt-media--brand\">
                                                    <span>";
                // line 1400
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 1400), "name", [], "any", false, false, false, 1400)), 0, 2), "html", null, true);
                echo "</span>
                                                </span>
                                            </div>
                                       ";
            }
            // line 1404
            echo "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 1408
            echo "                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-type=\"task\">
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">";
            // line 1412
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No tasks found"]);
            echo ".</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1418
        echo "                    </div>
                    ";
        // line 1419
        if (($context["tasks"] ?? null)) {
            // line 1420
            echo "                        <div class=\"kt-todo__foot\">
                            <div class=\"kt-todo__toolbar\">
                                <div class=\"kt-todo__controls\">
                                     ";
            // line 1423
            echo twig_get_attribute($this->env, $this->source, ($context["tasks"] ?? null), "render", [], "any", false, false, false, 1423);
            echo "
                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Previose page\">
                                         <i class=\"flaticon2-left-arrow\"></i>
                                     </button>

                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Next page\">
                                         <i class=\"flaticon2-right-arrow\"></i>
                                     </button>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 1435
        echo "                </div>
            </div>
        </div>
    -->
</div>


<div class=\"modal fade\" id=\"paypal_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1446
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pay by PayPal"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1450
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onCheckpaypal", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1454
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Price"]);
        echo "</label>
                            <input class=\"form-control\" name=\"price\" value=\"10.00\" />
                           
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1462
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Pay"]);
        echo "</button>
                </div>
            ";
        // line 1464
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                ";
        // line 1474
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "assigned_id", [], "any", false, false, false, 1474)) {
            // line 1475
            echo "                <h5 class=\"modal-title\" >";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change Assign Employee"]);
            echo "</h5>
                ";
        } else {
            // line 1477
            echo "                <h5 class=\"modal-title\" >";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Employee"]);
            echo "</h5>
                ";
        }
        // line 1479
        echo "                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1482
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onAssign", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    ";
        // line 1484
        if (($context["no_employees"] ?? null)) {
            // line 1485
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                            <div class=\"alert-text\">
                                ";
            // line 1488
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No employees cover that shipment area, so here are all the employees to choose from"]);
            echo ".
                            </div>
                            <div class=\"alert-close\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                </button>
                            </div>
                        </div>
                    ";
        }
        // line 1497
        echo "                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To who?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"assigned_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1502
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 1503
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 1503), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "name", [], "any", false, false, false, 1503), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1505
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1510
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1511
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 1513
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"assign_manifest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1521
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign Manifest"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1525
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onManifest", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1529
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To which manifest?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"manifest_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1532
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manifestes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manifest"]) {
            // line 1533
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manifest"], "id", [], "any", false, false, false, 1533), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manifest"], "id", [], "any", false, false, false, 1533), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["manifest"], "driver", [], "any", false, false, false, 1533), "name", [], "any", false, false, false, 1533), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manifest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1535
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1540
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1541
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Assign"]);
        echo "</button>
                </div>
            ";
        // line 1543
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"transfer_office\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1551
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer to office"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1555
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onTransfer", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1559
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To which office?"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"office_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                ";
        // line 1562
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 1563
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 1563), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 1563), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1565
        echo "                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1570
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1571
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer"]);
        echo "</button>
                </div>
            ";
        // line 1573
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"postpone\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1581
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            ";
        // line 1585
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onPostpone", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1589
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["To Date"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
        // line 1591
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+1 day"), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 1591)), "html", null, true);
        echo "\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1602
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1608
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1609
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postpone"]);
        echo "</button>
            </div>
            ";
        // line 1611
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"refuse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1619
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1624
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRefuse", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1628
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1634
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1635
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Refuse"]);
        echo "</button>
            </div>
            ";
        // line 1637
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"discards\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1645
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Transfer as discards"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1650
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDiscards", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>";
        // line 1654
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control \" id=\"discard_reason\" name=\"message\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\">";
        // line 1657
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver request"]);
        echo "</option>
                            <option value=\"2\">";
        // line 1658
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver evade"]);
        echo "</option>
                            <option value=\"3\">";
        // line 1659
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender request"]);
        echo "</option>
                        </select>
                    </div>
                </div>
                <div class=\"discard_reason_receiver kt-hidden\">
                    <div class=\"row\">
                        <div class=\"form-group form-group-last kt-hide\">
                            <div class=\"alert alert-danger kt_form_msg\" role=\"alert\">
                                <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                                <div class=\"alert-text\">
                                    ";
        // line 1669
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
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1679
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" ";
        // line 1683
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1683) == 1)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" ";
        // line 1687
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 1687) == 2)) {
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
                    <div class=\"form-group row\">
                        ";
        // line 1695
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payments", [], "any", false, false, false, 1695), "where", [0 => "for_id", 1 => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_id", [], "any", false, false, false, 1695)], "method", false, false, false, 1695));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 1696
            echo "                            <label class=\"col-lg-9 col-form-label kt-align-left\" for=\"payment_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1696), "html", null, true);
            echo "\">
                                ";
            // line 1697
            if (twig_get_attribute($this->env, $this->source, $context["payment"], "payment_type", [], "any", false, false, false, 1697)) {
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["payment"], "payment_type", [], "any", false, false, false, 1697)]);
                echo ": ";
            }
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Is it paid ?"]);
            echo "
                            </label>
                            <div class=\"col-lg-3\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" name=\"payments[]\" id=\"payment_";
            // line 1702
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1702), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 1702), "html", null, true);
            echo "\">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1708
        echo "                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 1712
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 1713
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Discard"]);
        echo "</button>
            </div>
            ";
        // line 1715
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<!-- receive COD -->
<div class=\"modal fade\" id=\"receivedCOD\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 1724
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 1729
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDeliverCOD", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1734
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"";
        // line 1737
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1737), "id", [], "any", false, false, false, 1737), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 1737), "name", [], "any", false, false, false, 1737), "html", null, true);
        echo "</option>   
                                ";
        // line 1738
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 1738)) {
            // line 1739
            echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                ";
        }
        // line 1741
        echo "
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 1745
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
        // line 1746
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
        echo "\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"";
        // line 1748
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1748), "id", [], "any", false, false, false, 1748), "html", null, true);
        echo "\" selected>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 1748), "name", [], "any", false, false, false, 1748), "html", null, true);
        echo "</option> 
                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 1756
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 1763
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group ";
        // line 1766
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1766), "enable_gender", [], "any", false, false, false, 1766) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                            <label>";
        // line 1767
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        ";
        // line 1770
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1770), "enable_gender", [], "any", false, false, false, 1770) == 1)) {
            // line 1771
            echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
            // line 1772
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
            echo "</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
            // line 1775
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1775), "gender", [], "any", false, false, false, 1775) == "male")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
            echo "
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
            // line 1779
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1779), "gender", [], "any", false, false, false, 1779) == "female")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
            echo "
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        ";
        }
        // line 1785
        echo "                                    </div>
                                    <div class=\"location-receiver\">

                                        <div class=\"row\">
                                            ";
        // line 1789
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1789), "enable_mapAddress", [], "any", false, false, false, 1789) == 1)) {
            // line 1790
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1791
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
            // line 1792
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1792), "street_address_map", [], "any", false, false, false, 1792), "html", null, true);
            echo "\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            ";
        }
        // line 1798
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1798), "enable_postalCode", [], "any", false, false, false, 1798) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 1799
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1802
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1803
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1803), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1803), "name", [], "any", false, false, false, 1803), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1803), "name", [], "any", false, false, false, 1803), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1805
        echo "                                                </select>
                                            </div>
                                            ";
        // line 1807
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1807), "enable_postalCode", [], "any", false, false, false, 1807) == 1)) {
            // line 1808
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 1809
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
            // line 1810
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1810), "postal_code", [], "any", false, false, false, 1810), "html", null, true);
            echo "\" >
                                            </div>
                                            ";
        }
        // line 1813
        echo "                                        </div>
                                        <div class=\"row\">
                                            ";
        // line 1815
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1815), "enable_state", [], "any", false, false, false, 1815) == 1)) {
            // line 1816
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 1817
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
            // line 1818
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 1820
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1821
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1821), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1821), "name", [], "any", false, false, false, 1821), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1821), "state", [], "any", false, false, false, 1821) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1821))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1821), "name", [], "any", false, false, false, 1821), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1823
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 1826
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1826), "enable_state", [], "any", false, false, false, 1826) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 1827
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
        // line 1828
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1830
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 1831
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1831), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1831), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1833
        echo "                                                </select>
                                            </div>
                                            ";
        // line 1835
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1835), "enable_county", [], "any", false, false, false, 1835) == 1)) {
            // line 1836
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1837
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
            // line 1838
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 1840
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1841
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1841), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1841), "county", [], "any", false, false, false, 1841) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1841))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 1841), "html", null, true);
                echo "</option>
                                                
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1844
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 1847
        echo "                                        </div>
                                        ";
        // line 1848
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1848), "enable_mapAddress", [], "any", false, false, false, 1848) == 1)) {
            // line 1849
            echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1851
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                <span class=\"form-text text-muted\">";
            // line 1853
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                            </div>
                                        </div>
                                        ";
        }
        // line 1857
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1857), "enable_createAccount", [], "any", false, false, false, 1857) == 1)) {
            // line 1858
            echo "                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
            // line 1862
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1862), "connect", [], "any", false, false, false, 1862) == 1)) {
                echo "checked";
            }
            echo "> ";
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
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 1872
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 1883
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 1894
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
        // line 1904
        echo "                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 1909
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 1910
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 1921
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            ";
        // line 1928
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1928), "enable_mapAddress", [], "any", false, false, false, 1928) == 1)) {
            // line 1929
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1930
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" value=\"";
            // line 1931
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1931), "street_address_map", [], "any", false, false, false, 1931), "html", null, true);
            echo "\"  required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            ";
        }
        // line 1937
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1937), "enable_postalCode", [], "any", false, false, false, 1937) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 1938
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1941
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1942
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 1942), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1942), "name", [], "any", false, false, false, 1942), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 1942), "name", [], "any", false, false, false, 1942), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1944
        echo "                                                </select>
                                            </div>
                                            ";
        // line 1946
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1946), "enable_postalCode", [], "any", false, false, false, 1946) == 1)) {
            // line 1947
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 1948
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" value=\"";
            // line 1949
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1949), "postal_code", [], "any", false, false, false, 1949), "html", null, true);
            echo "\">
                                            </div>
                                            ";
        }
        // line 1952
        echo "                                        </div>
                                        <div class=\"row\">
                                            ";
        // line 1954
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1954), "enable_state", [], "any", false, false, false, 1954) == 1)) {
            // line 1955
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 1956
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 1957
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 1959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 1960
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1960), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1960), "name", [], "any", false, false, false, 1960), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1960), "state", [], "any", false, false, false, 1960) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 1960))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 1960), "name", [], "any", false, false, false, 1960), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1962
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 1965
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1965), "enable_state", [], "any", false, false, false, 1965) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 1966
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
        // line 1967
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 1969
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 1970
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 1970), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 1970), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1972
        echo "                                                </select>
                                            </div>
                                            ";
        // line 1974
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1974), "enable_county", [], "any", false, false, false, 1974) == 1)) {
            // line 1975
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1976
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                                <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 1977
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 1979
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 1980
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1980), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 1980), "name", [], "any", false, false, false, 1980), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1980), "county", [], "any", false, false, false, 1980) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 1980))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 1980), "name", [], "any", false, false, false, 1980), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1982
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 1985
        echo "                                        </div>
                                        ";
        // line 1986
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 1986), "enable_mapAddress", [], "any", false, false, false, 1986) == 1)) {
            // line 1987
            echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 1989
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                <span class=\"form-text text-muted\">";
            // line 1991
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                            </div>
                                        </div>
                                        ";
        }
        // line 1995
        echo "                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 2000
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 2001
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        
                        <div class=\"form-group col-lg-12  package_fee\">
                            <label>";
        // line 2010
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 2012
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2012) == 1)) {
            // line 2013
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2015
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2015), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2019
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 2019), "html", null, true);
        echo "\" required />
                                ";
        // line 2020
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2020) == 0)) {
            // line 2021
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2023
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2023), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2027
        echo "                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 2033
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-info\">";
        // line 2034
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver"]);
        echo "</button>
                </div>
            ";
        // line 2036
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>


<!-- end receive COD -->
<div class=\"modal fade\" id=\"received\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >";
        // line 2047
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver information"]);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            ";
        // line 2052
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDeliver", ["success" => "created successfully!", "flash" => true, "class" => "kt_form", "novalidate" => true]]);
        echo "
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 2057
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 2060
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 2060) == 12)) {
            // line 2061
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 2061)) {
                // line 2062
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 2062), "id", [], "any", false, false, false, 2062), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 2062), "name", [], "any", false, false, false, 2062), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 2064
            echo "                                ";
        } else {
            // line 2065
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 2065)) {
                // line 2066
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 2066), "id", [], "any", false, false, false, 2066), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 2066), "name", [], "any", false, false, false, 2066), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 2068
            echo "                                ";
        }
        echo "    
                                ";
        // line 2069
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasUserPermission", [0 => "client", 1 => "c"], "method", false, false, false, 2069)) {
            // line 2070
            echo "                                    <option value=\"new\" data-icon=\"flaticon2-add\">";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add New"]);
            echo "</option>
                                ";
        }
        // line 2072
        echo "
                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>";
        // line 2076
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Address"]);
        echo "/";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Address"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"";
        // line 2077
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select receiver first"]);
        echo "\" required>
                                <option data-hidden=\"true\"></option>
                                ";
        // line 2079
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 2079) == 12)) {
            // line 2080
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender", [], "any", false, false, false, 2080)) {
                // line 2081
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2081), "id", [], "any", false, false, false, 2081), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 2081), "name", [], "any", false, false, false, 2081), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 2083
            echo "                                ";
        } else {
            // line 2084
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver", [], "any", false, false, false, 2084)) {
                // line 2085
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2085), "id", [], "any", false, false, false, 2085), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 2085), "name", [], "any", false, false, false, 2085), "html", null, true);
                echo "</option>
                                    ";
            }
            // line 2087
            echo "                                ";
        }
        echo "    
                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 2095
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>";
        // line 2102
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Client Name"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group ";
        // line 2105
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2105), "enable_gender", [], "any", false, false, false, 2105) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                            <label>";
        // line 2106
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mobile"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        ";
        // line 2109
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2109), "enable_gender", [], "any", false, false, false, 2109) == 1)) {
            // line 2110
            echo "                                        <div class=\"form-group col-lg-6\">
                                            <label>";
            // line 2111
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Gender"]);
            echo "</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" ";
            // line 2114
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2114), "gender", [], "any", false, false, false, 2114) == "male")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Male"]);
            echo "
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" ";
            // line 2118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2118), "gender", [], "any", false, false, false, 2118) == "female")) {
                echo "checked";
            }
            echo "> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Female"]);
            echo "
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        ";
        }
        // line 2124
        echo "                                    </div>
                                    <div class=\"location-receiver\">

                                        <div class=\"row\">
                                            ";
        // line 2128
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2128), "enable_mapAddress", [], "any", false, false, false, 2128) == 1)) {
            // line 2129
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2130
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" value=\"";
            // line 2131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2131), "street_address_map", [], "any", false, false, false, 2131), "html", null, true);
            echo "\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            ";
        }
        // line 2137
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2137), "enable_postalCode", [], "any", false, false, false, 2137) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 2138
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 2141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 2142
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 2142), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 2142), "name", [], "any", false, false, false, 2142), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 2142), "name", [], "any", false, false, false, 2142), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2144
        echo "                                                </select>
                                            </div>
                                            ";
        // line 2146
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2146), "enable_postalCode", [], "any", false, false, false, 2146) == 1)) {
            // line 2147
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 2148
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"";
            // line 2149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2149), "postal_code", [], "any", false, false, false, 2149), "html", null, true);
            echo "\" >
                                            </div>
                                            ";
        }
        // line 2152
        echo "                                        </div>
                                        <div class=\"row\">
                                            ";
        // line 2154
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2154), "enable_state", [], "any", false, false, false, 2154) == 1)) {
            // line 2155
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 2156
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"";
            // line 2157
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 2159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 2160
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 2160), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 2160), "name", [], "any", false, false, false, 2160), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2160), "state", [], "any", false, false, false, 2160) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 2160))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 2160), "name", [], "any", false, false, false, 2160), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2162
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 2165
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2165), "enable_state", [], "any", false, false, false, 2165) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 2166
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"";
        // line 2167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 2169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 2170
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 2170), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 2170), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2172
        echo "                                                </select>
                                            </div>
                                            ";
        // line 2174
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2174), "enable_county", [], "any", false, false, false, 2174) == 1)) {
            // line 2175
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2176
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"";
            // line 2177
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 2179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 2180
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 2180), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2180), "county", [], "any", false, false, false, 2180) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 2180))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "name", [], "any", false, false, false, 2180), "html", null, true);
                echo "</option>
                                                
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2183
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 2186
        echo "                                        </div>
                                        ";
        // line 2187
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2187), "enable_mapAddress", [], "any", false, false, false, 2187) == 1)) {
            // line 2188
            echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2190
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                <span class=\"form-text text-muted\">";
            // line 2192
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                            </div>
                                        </div>
                                        ";
        }
        // line 2196
        echo "                                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2196), "enable_createAccount", [], "any", false, false, false, 2196) == 1)) {
            // line 2197
            echo "                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" ";
            // line 2201
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2201), "connect", [], "any", false, false, false, 2201) == 1)) {
                echo "checked";
            }
            echo "> ";
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
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 2211
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control email\" name=\"receiver[email]\" required/>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 2222
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Username"]);
            echo ":&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                    </div>
                                                    <div class=\"kt-form__control\">
                                                        <input type=\"text\" class=\"form-control username\" name=\"receiver[username]\" required>
                                                    </div>
                                                </div>
                                                <div class=\"d-md-none kt-margin-b-10\"></div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group kt-form__group--inline\">
                                                    <div class=\"kt-form__label\">
                                                        <label class=\"col-form-label\">";
            // line 2233
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
        // line 2243
        echo "                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 2248
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 2249
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            ";
        // line 2260
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add a new client address"]);
        echo "
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            ";
        // line 2267
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2267), "enable_mapAddress", [], "any", false, false, false, 2267) == 1)) {
            // line 2268
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2269
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Address"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" value=\"";
            // line 2270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2270), "street_address_map", [], "any", false, false, false, 2270), "html", null, true);
            echo "\"  required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            ";
        }
        // line 2276
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2276), "enable_postalCode", [], "any", false, false, false, 2276) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 2277
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Country"]);
        echo "</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 2280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 2281
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 2281), "html", null, true);
            echo "\" ";
            if ((($context["currentLang"] ?? null) != "en")) {
                echo "data-subtext=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 2281), "name", [], "any", false, false, false, 2281), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "lang", [0 => "en"], "method", false, false, false, 2281), "name", [], "any", false, false, false, 2281), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2283
        echo "                                                </select>
                                            </div>
                                            ";
        // line 2285
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2285), "enable_postalCode", [], "any", false, false, false, 2285) == 1)) {
            // line 2286
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 2287
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Postal Code"]);
            echo "</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" value=\"";
            // line 2288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2288), "postal_code", [], "any", false, false, false, 2288), "html", null, true);
            echo "\">
                                            </div>
                                            ";
        }
        // line 2291
        echo "                                        </div>
                                        <div class=\"row\">
                                            ";
        // line 2293
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2293), "enable_state", [], "any", false, false, false, 2293) == 1)) {
            // line 2294
            echo "                                            <div class=\"form-group col-lg-6\">
                                                <label>";
            // line 2295
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["State / Region"]);
            echo "</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"";
            // line 2296
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select country first"]);
            echo "\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 2298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 2299
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 2299), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 2299), "name", [], "any", false, false, false, 2299), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2299), "state", [], "any", false, false, false, 2299) == twig_get_attribute($this->env, $this->source, $context["state"], "id", [], "any", false, false, false, 2299))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["state"], "lang", [0 => "en"], "method", false, false, false, 2299), "name", [], "any", false, false, false, 2299), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2301
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 2304
        echo "                                            <div class=\"form-group ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2304), "enable_state", [], "any", false, false, false, 2304) == 1)) {
            echo "col-lg-6";
        } else {
            echo "col-lg-12";
        }
        echo "\">
                                                <label>";
        // line 2305
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["City"]);
        echo "</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"";
        // line 2306
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select state first"]);
        echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
        // line 2308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 2309
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "id", [], "any", false, false, false, 2309), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", [], "any", false, false, false, 2309), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2311
        echo "                                                </select>
                                            </div>
                                            ";
        // line 2313
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2313), "enable_county", [], "any", false, false, false, 2313) == 1)) {
            // line 2314
            echo "                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2315
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["County"]);
            echo "</label>
                                                <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"";
            // line 2316
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please select city first"]);
            echo "\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    ";
            // line 2318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["areas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["county"]) {
                // line 2319
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 2319), "html", null, true);
                echo "\" ";
                if ((($context["currentLang"] ?? null) != "en")) {
                    echo "data-subtext=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => ($context["currentLang"] ?? null)], "method", false, false, false, 2319), "name", [], "any", false, false, false, 2319), "html", null, true);
                    echo "\"";
                }
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2319), "county", [], "any", false, false, false, 2319) == twig_get_attribute($this->env, $this->source, $context["county"], "id", [], "any", false, false, false, 2319))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["county"], "lang", [0 => "en"], "method", false, false, false, 2319), "name", [], "any", false, false, false, 2319), "html", null, true);
                echo "</option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['county'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2321
            echo "                                                </select>
                                            </div>
                                            ";
        }
        // line 2324
        echo "                                        </div>
                                        ";
        // line 2325
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "customers", [], "any", false, false, false, 2325), "enable_mapAddress", [], "any", false, false, false, 2325) == 1)) {
            // line 2326
            echo "                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>";
            // line 2328
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google Map"]);
            echo "</label>
                                                <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                <span class=\"form-text text-muted\">";
            // line 2330
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Change the pin to select the right location"]);
            echo "</span>
                                            </div>
                                        </div>
                                        ";
        }
        // line 2334
        echo "                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">";
        // line 2339
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Save"]);
        echo "</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">";
        // line 2340
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        <div class=\"form-group col-lg-12 ";
        // line 2347
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2347) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 2348
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 2350
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2350) == 1)) {
            // line 2351
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2353), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2357
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"courier_fee\" name=\"courier_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "courier_fee", [], "any", false, false, false, 2357), "html", null, true);
        echo "\" required />
                                ";
        // line 2358
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2358) == 0)) {
            // line 2359
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2361), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2365
        echo "                            </div>
                        </div>
                        ";
        // line 2367
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "shipments", [], "any", false, false, false, 2367), "enable_return_package", [], "any", false, false, false, 2367) == 1)) {
            // line 2368
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "requested", [], "any", false, false, false, 2368) != 12)) {
                // line 2369
                echo "                            <div class=\"form-group col-lg-12\">
                                <label>";
                // line 2370
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package cost"]);
                echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" ";
                // line 2373
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2373) == 1)) {
                    echo "checked";
                }
                echo " required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes"]);
                echo "
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" ";
                // line 2377
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2377) == 2)) {
                    echo "checked";
                }
                echo "  required> ";
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
                echo "
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            ";
            }
            // line 2383
            echo "                        ";
        }
        // line 2384
        echo "                        <div class=\"form-group col-lg-12 ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2384) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 2385
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 2387
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2387) == 1)) {
            // line 2388
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2390), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2394
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 2394), "html", null, true);
        echo "\" required />
                                ";
        // line 2395
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2395) == 0)) {
            // line 2396
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2398), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2402
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 ";
        // line 2404
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2404) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 2405
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return Shipment Cost"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                ";
        // line 2407
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2407) == 1)) {
            // line 2408
            echo "                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2410
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2410), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2414
        echo "                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "package_fee", [], "any", false, false, false, 2414)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_courier_fee", [], "any", false, false, false, 2414), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fees", [], "any", false, false, false, 2414), "delivery_cost_back_receiver", [], "any", false, false, false, 2414), "html", null, true);
        }
        echo "\" required />
                                ";
        // line 2415
        if ((twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "place_symbol_before", [], "any", false, false, false, 2415) == 0)) {
            // line 2416
            echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            ";
            // line 2418
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_symbol", [], "any", false, false, false, 2418), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                ";
        }
        // line 2422
        echo "                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 ";
        // line 2424
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_defray", [], "any", false, false, false, 2424) != 1)) {
            echo "kt-hidden";
        }
        echo " package_fee\">
                            <label>";
        // line 2425
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Return package fees responsiable"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" ";
        // line 2428
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 2428) != 2)) {
            echo "checked";
        }
        echo " required> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver"]);
        echo "
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required ";
        // line 2432
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "return_package_fee", [], "any", false, false, false, 2432) == 2)) {
            echo "checked";
        }
        echo "> ";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender"]);
        echo "
                                    <span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 2441
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Close"]);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-info save\">";
        // line 2442
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Confirm"]);
        echo "</button>
                    <button type=\"submit\" class=\"btn btn-primary kt-hidden\">";
        // line 2443
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deliver"]);
        echo "</button>
                </div>
            ";
        // line 2445
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
        </div>
    </div>
</div>
<!--
";
        // line 2450
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 2451
        echo "    <style>
        .kt-todo .kt-todo__content {
          width: 100%; }

        .kt-todo .kt-todo__aside {
          padding: 20px;
          width: 275px; }
          @media (min-width: 1025px) {
            .kt-todo .kt-todo__aside {
              margin-right: 25px; } }
          .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item {
            margin-bottom: 0.5rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem;
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
              padding: 0.6rem 20px;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link i {
                color: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon {
                text-align: center;
                margin: 0 0.7rem 0 -0.23rem; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon.kt-nav__link-icon--size {
                  font-size: 0.9rem;
                  color: #93a2dd; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon svg {
                  width: 20px;
                  height: 20px; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon g [fill] {
                  fill: #93a2dd; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-text {
                font-weight: 500;
                color: #595d6e; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child {
              margin-bottom: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child .kt-nav__link .kt-nav__link-icon {
                font-size: 0.9rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link {
              background-color: #f7f8fa;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link i {
                color: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link .kt-nav__link-text {
                color: #5d78ff; }

        .kt-todo .kt-todo__header {
          padding: 13px 25px;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          width: 100%; }
          .kt-todo .kt-todo__header .kt-todo__title {
            margin: 0;
            font-size: 1.4rem;
            padding-right: 2rem;
            font-weight: 600;
            color: #595d6e; }
          .kt-todo .kt-todo__header .kt-todo__nav {
            padding: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-top: 0.2rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .btn {
              margin-right: 1rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link {
              padding: 0.5rem 1.2rem;
              font-weight: 500;
              color: #74788d;
              border-radius: 4px; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:not(:first-child):not(:last-child) {
                margin: 0 0.2rem; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:hover, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--selected, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--active {
                background-color: #f7f8fa;
                color: #5d78ff;
                border-radius: 4px; }
          .kt-todo .kt-todo__header .kt-todo__users {
            line-height: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
            .kt-todo .kt-todo__header .kt-todo__users .kt-media {
              position: relative;
              z-index: 0; }
              .kt-todo .kt-todo__header .kt-todo__users .kt-media:not(:first-child):not(:last-child) {
                margin-left: -0.1rem; }
          @media (max-width: 1024px) {
            .kt-todo .kt-todo__header {
              padding: 10px 15px; } }

        .kt-todo .kt-todo__icon {
          border: 0;
          background: none;
          outline: none !important;
          -webkit-box-shadow: none;
          box-shadow: none;
          outline: none !important;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          height: 35px;
          width: 35px;
          background-color: #f7f8fa;
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          cursor: pointer;
          margin: 0;
          border-radius: 0;
          border-radius: 4px; }
          .kt-todo .kt-todo__icon i {
            font-size: 1.1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--sm {
            height: 26px;
            width: 26px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--sm i {
              font-size: 0.8rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--md {
            height: 30px;
            width: 30px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--md i {
              font-size: 1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--light {
            background-color: transparent; }
          .kt-todo .kt-todo__icon i {
            color: #8e96b8; }
          .kt-todo .kt-todo__icon g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease;
            fill: #8e96b8; }
          .kt-todo .kt-todo__icon:hover g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--active, .kt-todo .kt-todo__icon:hover {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            background-color: #ebedf2; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active.kt-todo__icon--light, .kt-todo .kt-todo__icon:hover.kt-todo__icon--light {
              background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active i, .kt-todo .kt-todo__icon:hover i {
              color: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active g [fill], .kt-todo .kt-todo__icon:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active:hover g [fill], .kt-todo .kt-todo__icon:hover:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--back {
            background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back i {
              color: #8e96b8;
              font-size: 1.5rem; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #8e96b8; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back svg {
              height: 32px;
              width: 32px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover {
              background-color: transparent; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover i {
                color: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }

        .kt-todo .kt-todo__list {
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important;
          padding: 0; }
          .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin-right: 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-checkbox {
                  margin: 0;
                  padding-left: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-todo__icon {
                  margin-left: 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__panel {
                display: none;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .btn {
                padding: 0.6rem 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions.kt-todo__actions--expanded .kt-todo__panel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon {
                margin-right: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon.kt-todo__icon--back {
                  margin-right: 2.5rem; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin: 0.4rem 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                color: #74788d;
                font-size: 1rem;
                font-weight: 500;
                margin-right: 1rem;
                cursor: pointer;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                padding: 0.5rem 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  color: #5d78ff; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__sep {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              height: 1rem;
              width: 1rem; }
          .kt-todo .kt-todo__list .kt-todo__body {
            padding: 20px 0 0 0; }
            .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
              padding: 0;
              margin-bottom: 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding: 12px 25px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                cursor: pointer; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      padding: 8px 0; } }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      min-width: 210px; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin: 0.3rem 10px 0 0;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                        min-width: 70px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-checkbox {
                      margin: 0;
                      padding: 0;
                      margin-right: 10px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon {
                      height: 22px;
                      width: 22px; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                        font-size: 1rem;
                        color: #ebedf2; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon:hover i {
                        color: rgba(255, 184, 34, 0.5) !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon.kt-todo__icon--on i {
                        color: #ffb822 !important; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-right: 30px;
                    width: 175px; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        min-width: 175px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                      margin-right: 10px;
                      min-width: 30px !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media span {
                        min-width: 30px !important; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                      font-size: 1rem;
                      color: #595d6e;
                      font-weight: 500; }
                    @media (max-width: 1400px) {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        display: block;
                        width: 70px;
                        margin-right: 10px; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                          display: block; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                          margin-bottom: 5px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  margin-top: 5px; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                      width: 0;
                      height: 0; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__subject {
                    font-size: 1rem;
                    color: #595d6e;
                    font-weight: 500; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__summary {
                    font-size: 1rem;
                    color: #a2a5b9;
                    font-weight: 400;
                    text-overflow: ellipsis; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin-top: 5px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels .kt-todo__label {
                      margin-right: 5px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                  font-size: 1rem;
                  color: #a2a5b9;
                  font-weight: 400;
                  margin-right: 1rem;
                  margin-top: 5px;
                  width: 85px;
                  text-align: right; }
                  @media (max-width: 1400px) {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                      width: 70px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  background-color: #f7f8fa; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover .kt-todo__info .kt-todo__actions .kt-todo__icon i, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                    font-size: 1rem;
                    color: #e2e5ec; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__sender .kt-todo__author {
                  color: #48465b;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__details .kt-todo__message .kt-todo__subject {
                  color: #595d6e;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__datetime {
                  color: #48465b;
                  font-weight: 600; }
          .kt-todo .kt-todo__list .kt-todo__foot {
            margin-top: 10px;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar {
              float: right; }
              .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-left: 1rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages {
                  margin-left: 0.5rem; }
                  .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                    color: #74788d;
                    font-size: 1rem;
                    font-weight: 500;
                    margin-right: 1rem;
                    cursor: pointer;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    padding: 0.5rem 0; }
                    .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease;
                      color: #5d78ff; }

        .kt-todo .kt-todo__view {
          padding: 0;
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important; }
          .kt-todo  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            padding-bottom: 25px; }
            @media (max-width: 1024px) {
              .kt-todo  {
                padding-bottom: 15px; } }
            .kt-todo  .kt-todo__head {
              width: 100%; }
              .kt-todo  .kt-todo__head .kt-todo__toolbar {
                cursor: pointer;
                padding-top: 0.9rem;
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                  display: none; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-media {
                    margin-right: 0.7rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name {
                    color: #48465b;
                    font-weight: 600;
                    font-size: 1.1rem;
                    padding-right: 0.5rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  padding: 0.5rem 0; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__icon {
                    margin: 0.4rem 0.5rem 0.4rem 0;
                    font-size: 0.7rem;
                    color: #5d78ff; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__desc {
                    color: #74788d;
                    font-weight: 400;
                    font-size: 1rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn {
                    padding: 8px 1rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn:last-child {
                      margin-left: 0.5rem; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__datetime {
                    color: #a2a5b9;
                    font-weight: 500;
                    font-size: 1rem;
                    margin-right: 1.5rem; }
            .kt-todo  .kt-todo__body {
              padding-bottom: 25px;
              -webkit-box-flex: 1;
              -ms-flex-positive: 1;
              flex-grow: 1; }
              .kt-todo  .kt-todo__body .kt-todo__title {
                padding-top: 1rem; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__text {
                  color: #48465b;
                  font-size: 1.5rem;
                  font-weight: 600;
                  margin-top: 1rem;
                  display: block; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  padding: 0.8rem 0 2rem 0; }
                  .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__dot {
                      padding-right: 0.5rem;
                      font-size: 1.2rem; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__text {
                      color: #a2a5b9;
                      font-weight: 500;
                      font-size: 1rem;
                      margin: 0; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label:last-child {
                      padding-left: 1.5rem; }
                .kt-todo  .kt-todo__body .kt-todo__title:hover {
                  color: #5d78ff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__desc {
                padding-bottom: 10px;
                display: block;
                color: #a2a5b9;
                font-weight: 500; }
              .kt-todo  .kt-todo__body .kt-todo__files {
                padding-top: 10px; }
                .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file {
                  display: block;
                  padding-top: 0.7rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file i {
                    padding-right: 0.5rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a {
                    color: #74788d;
                    font-weight: 500; }
                    .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__comments {
                padding-bottom: 20px; }
                .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment {
                  padding-top: 3rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment:last-child {
                    padding-top: 2rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-media {
                      margin-right: 1rem; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username {
                      -webkit-box-flex: 1;
                      -ms-flex-positive: 1;
                      flex-grow: 1;
                      color: #595d6e;
                      font-weight: 500; }
                      .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username:hover {
                        color: #5d78ff;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__date {
                      color: #a2a5b9;
                      font-weight: 500; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__text {
                    padding-left: 3.3rem;
                    display: block;
                    color: #a2a5b9;
                    font-weight: 500; }
            .kt-todo  .kt-todo__foot .kt-todo__form {
              margin-top: 20px;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -ms-flex-direction: column;
              flex-direction: column;
              border: 1px solid #ebedf2;
              border-radius: 4px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 20px 15px 20px 25px;
                border-bottom: 1px solid #ebedf2; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__title {
                  margin-right: 10px;
                  font-size: 1.2rem;
                  font-weight: 500;
                  color: #595d6e; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions .kt-todo__icon {
                    margin-left: 5px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body {
                padding: 0 0 10px 0; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow {
                  border: 0;
                  padding: 0;
                  border-radius: 0; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    padding: 15px 25px;
                    font-family: Poppins, Helvetica, sans-serif; }
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor.ql-blank:before {
                      left: 25px;
                      color: #a2a5b9;
                      font-weight: 400;
                      font-style: normal; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  height: 50px;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  border-radius: 0;
                  border: 0;
                  border-top: 0;
                  border-bottom: 1px solid #ebedf2;
                  padding-left: 18px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label, .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label:before {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    font-family: Poppins, Helvetica, sans-serif; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                  display: inline-block;
                  padding: 0 25px; }
                  @media (max-width: 1024px) {
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                      width: 100%; } }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                padding: 20px 15px 20px 25px; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(1) {
                    padding-left: 20px;
                    padding-right: 20px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(2) {
                    padding-left: 6px;
                    padding-right: 9px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .kt-todo__panel {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-left: 1rem; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__secondary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  margin: 0; }

        .kt-todo .kt-portlet__head {
          min-height: 80px !important;
          padding: 10px 25px; }

        @media (max-width: 1024px) {
          .kt-todo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0; }
            .kt-todo .kt-todo__aside {
              background: #fff;
              margin: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
                padding-left: 1.2rem; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
                padding: 0.75rem 10px; }
            .kt-todo .kt-todo__list {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex; }
              .kt-todo .kt-todo__list.kt-todo__list--hidden {
                display: none; }
              .kt-todo .kt-todo__list .kt-portlet__head {
                min-height: 60px !important;
                padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__head {
                padding: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
                overflow: auto;
                margin-bottom: 15px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                  min-width: 500px;
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__foot {
                padding: 0 15px; }
            .kt-todo .kt-todo__view {
              display: none; }
              .kt-todo .kt-todo__view .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__view.kt-todo__view--shown {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
            .kt-todo .kt-portlet__head {
              min-height: 60px !important;
              padding: 10px 15px; } }

        @media (max-width: 768px) {
          .kt-todo .kt-todo__head .kt-todo__nav .btn {
            margin-right: 0.2rem; } }

        .kt-todo__aside-close {
          display: none; }

        @media (max-width: 1024px) {
          .kt-todo__aside {
            z-index: 1001;
            position: fixed;
            -webkit-overflow-scrolling: touch;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            -webkit-transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            width: 300px !important;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            left: -320px; }
            .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 0; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
          .kt-todo__aside--right .kt-todo__aside {
            right: -320px;
            left: auto; }
            .kt-todo__aside--right .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              right: 0;
              left: auto; }
          .kt-todo__aside-close {
            width: 25px;
            height: 25px;
            top: 1px;
            z-index: 1002;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            position: fixed;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 3px;
            cursor: pointer;
            outline: none !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            left: -25px; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside-close {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
            .kt-todo__aside-close > i {
              line-height: 0;
              font-size: 1.4rem; }
            .kt-todo__aside-close:hover {
              text-decoration: none; }
            .kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: -25px; }
            .kt-todo__aside--on .kt-todo__aside-close {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 274px; }
            .kt-todo__aside--on.kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: 274px; }
          .kt-todo__aside-overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: hidden;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.1);
            -webkit-animation: kt-animate-fade-in .3s linear 1;
            animation: kt-animate-fade-in .3s linear 1; }
          .kt-todo__aside-overlay {
            background: rgba(0, 0, 0, 0.05); }
          .kt-todo__aside-close {
            background-color: #f7f8fa; }
            .kt-todo__aside-close > i {
              color: #74788d; }
            .kt-todo__aside-close:hover {
              background-color: transparent; }
              .kt-todo__aside-close:hover > i {
                color: #5d78ff; } }

        @media (max-width: 350px) {
          .kt-todo__aside {
            width: 90% !important; } }
    </style>
";
        // line 2450
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 3383
        echo "-->
";
        // line 3384
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 3385
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
        .pac-container {
            z-index: 9999;
        }
        @media (max-width: 576px) {
            .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__stats .kt-widget__item {
                width: 100%;
                margin: auto 0 !important;
            }
        }
        .notes_scroll,.notes_scroll .btn {
            cursor: pointer;
        }
    </style>
";
        // line 3384
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 3416
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 3417
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 3418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 3418), "map", [], "any", false, false, false, 3418), "html", null, true);
        echo "\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\"use strict\";
";
        // line 3422
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 3422) == "paystack")) {
            // line 3423
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "payment", [], "any", false, false, false, 3423), "enable_paystack", [], "any", false, false, false, 3423) == 1)) {
                // line 3424
                echo "        function payWithPaystack(){
            ";
                // line 3425
                if (($context["paystack_amount"] ?? null)) {
                    // line 3426
                    echo "                var handler = PaystackPop.setup({
                    key: '";
                    // line 3427
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "payment", [], "any", false, false, false, 3427), "paystack_key", [], "any", false, false, false, 3427), "html", null, true);
                    echo "',
                    email: '";
                    // line 3428
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 3428), "html", null, true);
                    echo "',
                    amount: ";
                    // line 3429
                    echo twig_escape_filter($this->env, (($context["paystack_amount"] ?? null) * 100), "html", null, true);
                    echo ",
                    //amount: \"";
                    // line 3430
                    echo twig_escape_filter($this->env, ($context["sender_fees"] ?? null), "html", null, true);
                    echo "\",
                    //currency: \"";
                    // line 3431
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "currency_code", [], "any", false, false, false, 3431), "html", null, true);
                    echo "\",
                    currency: \"GHS\",
                    ref: '";
                    // line 3433
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 3433), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 3433), "html", null, true);
                    echo "', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    metadata: {
                        custom_fields: [
                            {
                                display_name: \"Tracking Number\",
                                variable_name: \"number\",
                                value: \"";
                    // line 3439
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 3439), "html", null, true);
                    echo "\"
                            }
                        ]
                    },
                    callback: function(response){

                         \$.request('onCheckpaystack', {
                              data: {reference: response.reference},
                              success: function(response, status, xhr, \$form) {

                                  swal.fire({
                                      title: '";
                    // line 3450
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Thank you!"]);
                    echo "',
                                      text: '";
                    // line 3451
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your payment is successfully paid! You will be redirect rightnow, please wait"]);
                    echo "',
                                      type: 'success',
                                      buttonsStyling: false,
                                      confirmButtonText: '";
                    // line 3454
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                    echo "',
                                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                  });
                                  //window.location.reload();
                              }
                         });
                    },
                    onClose: function(){
                        swal.fire({
                            title: '";
                    // line 3463
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Closed!"]);
                    echo "',
                            text: '";
                    // line 3464
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You did not pay the requested payment! :("]);
                    echo "',
                            type: 'warning',
                            buttonsStyling: false,
                            confirmButtonText: '";
                    // line 3467
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
                    echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
                handler.openIframe();
            ";
                }
                // line 3474
                echo "        }
    ";
            }
        }
        // line 3477
        echo "var KTDashboard = function () {

    // Order Statistics.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var orderStatistics = function() {
        var container = KTUtil.getByID('kt_chart_order_statistics');

        if (!container) {
            return;
        }

        var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
            datasets : [
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
                    backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [20, 30, 20, 40, 30, 60, 30]
\t\t\t\t},
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
\t\t\t\t\tbackgroundColor : color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [15, 40, 15, 30, 40, 30, 50]
\t\t\t\t}
            ]
        };

        var ctx = container.getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: KTApp.getBaseColor('shape', 2),
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: KTApp.getBaseColor('shape', 2),
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            max: 70,
                            stepSize: 10,
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });
    };
    var latestTrendsMap = function() {
        if (\$('#kt_map_sender').length == 0) {
            return;
        }
        ";
        // line 3618
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3618), "lat", [], "any", false, false, false, 3618)) {
            // line 3619
            echo "        try {
            var map = new GMaps({
                div: '#kt_map_sender',
                lat: ";
            // line 3622
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3622), "lat", [], "any", false, false, false, 3622), "html", null, true);
            echo ",
                lng: ";
            // line 3623
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3623), "lng", [], "any", false, false, false, 3623), "html", null, true);
            echo "
            });
            map.addMarker({
                lat: ";
            // line 3626
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3626), "lat", [], "any", false, false, false, 3626), "html", null, true);
            echo ",
                lng: ";
            // line 3627
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3627), "lng", [], "any", false, false, false, 3627), "html", null, true);
            echo ",
                title: '";
            // line 3628
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3628), "name", [], "any", false, false, false, 3628), "html", null, true);
            echo "',
                infoWindow: {
                    content: '<p>";
            // line 3630
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Go to"]);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3630), "url", [], "any", false, false, false, 3630), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 3630), "name", [], "any", false, false, false, 3630), "html", null, true);
            echo "</a></p>'
                }
            });
        } catch (e) {
            console.log(e);
        }

        ";
        }
        // line 3638
        echo "        if (\$('#kt_map_receiver').length == 0) {
            return;
        }
        ";
        // line 3641
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3641), "lat", [], "any", false, false, false, 3641)) {
            // line 3642
            echo "            try {
                var map = new GMaps({
                    div: '#kt_map_receiver',
                    lat: ";
            // line 3645
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3645), "lat", [], "any", false, false, false, 3645), "html", null, true);
            echo ",
                    lng: ";
            // line 3646
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3646), "lng", [], "any", false, false, false, 3646), "html", null, true);
            echo "
                });
                map.addMarker({
                    lat: ";
            // line 3649
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3649), "lat", [], "any", false, false, false, 3649), "html", null, true);
            echo ",
                    lng: ";
            // line 3650
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3650), "lng", [], "any", false, false, false, 3650), "html", null, true);
            echo ",
                    title: '";
            // line 3651
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3651), "name", [], "any", false, false, false, 3651), "html", null, true);
            echo "',
                    infoWindow: {
                        content: '<p>";
            // line 3653
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Go to"]);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3653), "url", [], "any", false, false, false, 3653), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 3653), "name", [], "any", false, false, false, 3653), "html", null, true);
            echo "</a></p>'
                    }
                });
            } catch (e) {
                console.log(e);
            }
        ";
        }
        // line 3660
        echo "    }
    return {
        // public functions
        init: function () {
            orderStatistics();
            latestTrendsMap();
        },
    };
}();

KTUtil.ready(function () {
    KTDashboard.init();

    \$('.notes_scroll').on('click', function(e){
        \$([document.documentElement, document.body]).animate({
            scrollTop: \$(\"#notes_continer\").offset().top-60
        }, 2000);
    });
    \$('#assign_employee').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#assign_employee').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3695
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#assign_manifest').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_manifest');
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
            \$('#assign_manifest').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3716
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#transfer_office').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#transfer_office').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3737
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#refuse').on('click', '.btn-primary', function(e){
        var parent = \$('#refuse');
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
            \$('#refuse').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3758
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#discards').on('click', '.btn-primary', function(e){
        var parent = \$('#discards');
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
            \$('#discards').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3779
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#return_discards').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 3789
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDiscards', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 3794
        echo url("dashboard/shipments");
        echo "/delivered\";
            }
        });
    });
    \$('#delivered_driver').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 3804
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDeliver', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 3809
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 3809), "id", [], "any", false, false, false, 3809), "html", null, true);
        echo "/view\";
            }
        });
    });
    \$('#deliveried').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 3819
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });
        \$.request('onDelivery', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 3824
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 3824), "id", [], "any", false, false, false, 3824), "html", null, true);
        echo "/view\";
            }
        });
    });
    \$('#stock').on('click', function(e){
        e.preventDefault();
        swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 3833
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to put shipment in stock ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 3836
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 3841
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onStock', {
                        success: function(data) {
                            //KTApp.unblockPage();
                            KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 3852
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                            window.location.href = \"";
        // line 3854
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 3854), "id", [], "any", false, false, false, 3854), "html", null, true);
        echo "/view\";
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 3861
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 3862
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not been put in stock! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 3865
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        // e.preventDefault();
        // KTApp.blockPage({
        //     overlayColor: '#000000',
        //     type: 'v2',
        //     state: 'success',
        //     message: '";
        // line 3875
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        // });
        // \$.request('onStock', {
        //     success: function(data) {
        //         KTApp.unblockPage();
        //         window.location.href = \"";
        // line 3880
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 3880), "id", [], "any", false, false, false, 3880), "html", null, true);
        echo "/view\";
        //     }
        // });
    });
    \$('#received').on('click', '.btn-primary', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){
            \$('#received').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3904
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });


    \$('#received').find('input,select').each(function(){
        \$(this).on('change', function(){
            \$('#received .btn-info').removeClass('kt-hidden');
            \$('#received .btn-primary').addClass('kt-hidden');
        });
    });

    \$('#received .btn-info').removeClass('kt-hidden');
    \$('#received .btn-primary').addClass('kt-hidden');


    \$('#received').on('click', '.save', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){

            var receiver_address_id = \$('#received #receiver_address_id').val();
            var package_fee = \$('#received #package_fee').val();
            var return_courier_fee = \$('#received #return_courier_fee').val();
            var return_defray = \$('#received .return_defray:checked').val();
            var return_package_fee = \$('#received .return_package_fee:checked').val();

             \$.request('onConfirmfees', {
                  data: {return_courier_fee: return_courier_fee, package_fee: package_fee, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {

                      swal.fire({
                          buttonsStyling: false,

                          html: \"<strong>";
        // line 3950
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total cost of courier fees is"]);
        echo ":</strong> \"+response.delivery_cost+\"<br /><strong>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total requested from sender is"]);
        echo ":</strong> \"+response.sender_fees+\"<br /><strong>";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["The total requested from receiver is"]);
        echo ":</strong> \"+response.receiver_fees,
                          type: \"warning\",

                          confirmButtonText: \"";
        // line 3953
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, confirm!"]);
        echo "\",
                          confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

                          showCancelButton: true,
                          cancelButtonText: '";
        // line 3957
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, change something"]);
        echo "',
                          cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
                      }).then(function (result) {
                          if (result.value) {
                              \$('#received .btn-info').addClass('kt-hidden');
                              \$('#received .btn-primary').removeClass('kt-hidden');
                          }
                      });
                  }
             });
        }
    });
    \$('#postpone').on('click', '.btn-primary', function(e){
        var parent = \$('#postpone');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            var css_class = \$(this).attr('class');
            css_class = css_class.replace('form-control ','');
            if(css_class != 'date'){
                if(\$(this).valid() == false){
                    validation = 0;
                }
            }
        });
        if(validation){
            \$('#postpone').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '";
        // line 3990
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
            });
        }
    });
    \$('#accept').on('click', function(e){
        e.preventDefault();
        swal.fire({
                buttonsStyling: false,

                text: \"";
        // line 3999
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to Approved shipment ?"]);
        echo "\",
                type: \"info\",

                confirmButtonText: \"";
        // line 4002
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, Confirm!"]);
        echo "\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '";
        // line 4007
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onAccept', {
                        success: function(data) {
                            //KTApp.unblockPage();
                            KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '";
        // line 4018
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                            });
                            window.location.href = \"";
        // line 4020
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4020), "id", [], "any", false, false, false, 4020), "html", null, true);
        echo "/view\";
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '";
        // line 4027
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                        text: '";
        // line 4028
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected shipment has not been approved! :)"]);
        echo "',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '";
        // line 4031
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        
        // KTApp.blockPage({
        //     overlayColor: '#000000',
        //     type: 'v2',
        //     state: 'success',
        //     message: '";
        // line 4041
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        // });

        
    });

    \$('#return_cod').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '";
        // line 4053
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
        });

        \$.request('onReturnCOD', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"";
        // line 4059
        echo url("dashboard/shipments");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 4059), "id", [], "any", false, false, false, 4059), "html", null, true);
        echo "/view\";
            }
        });
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


    \$('body').on('change', '#discard_reason', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        \$('.discard_reason_receiver').addClass('kt-hidden');
        if(selected != '' && selected != 2){
            \$('.discard_reason_receiver').removeClass('kt-hidden');
        }
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
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 4146
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclient', {
                 data: {name: parent.find('.name').val(), mobile: parent.find('.mobile').val(), email: parent.find('.email').val(), gender: parent.find('.gender:checked').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val(), connect: parent.find('.connect:checked').val(), username: parent.find('.username').val(), password: parent.find('.password').val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 4152
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 4156
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
                      var type = \$('.type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 4227
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Processing, please wait"]);
        echo "...'
            });
            \$.request('onNewclientaddress', {
                 data: {client_id: \$('#receiver_id').val(), street_addr: parent.find('.street_addr').val(), lat: parent.find('.lat').val(), lng: parent.find('.lng').val(), url: parent.find('.url').val(), area_id: parent.find('.area_id').find(\"option:selected\").val(), city_id: parent.find('.city_id').find(\"option:selected\").val(), postal_code: parent.find('.postal_code').val(), state_id: parent.find('.state_id').find(\"option:selected\").val(), country_id: parent.find('.country_id').find(\"option:selected\").val()},
                 error: function(response, status, xhr, \$form) {
                     swal.fire({
                         title: '";
        // line 4233
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Error!"]);
        echo "',
                         text: response.responseText,
                         type: 'error',
                         buttonsStyling: false,
                         confirmButtonText: '";
        // line 4237
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
                       var type = \$('.type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '";
        // line 4291
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });
    \$('body').on('changed.bs.select', '.state_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        var parent = \$(e.currentTarget).parent().parent().parent().parent();
        if(selected != ''){
            \$.request('onListcities', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.city_id').selectpicker({title: '";
        // line 4304
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
        // line 4317
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Select"]);
        echo "'}).selectpicker('refresh');
                      parent.find('select.area_id').html(response.html).selectpicker('refresh');
                 }
            });
       }
    });

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {
                       \$('#delivery_cost').val(response.delivery_cost);
                       \$('#return_courier_fee').val(response.return_courier_fee);
                  }
             });
        }
    });


    \$(\".clients\").select2({
        ";
        // line 4344
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 4345
            echo "            dir: \"rtl\",
        ";
        }
        // line 4347
        echo "        language: {
            errorLoading: function () {
                return \"";
        // line 4349
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There is an error while searching"]);
        echo "...\";
            },
            inputTooLong: function (args) {
                return \"";
        // line 4352
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter less characters"]);
        echo "...\";
            },
            inputTooShort: function (args) {
                return \"";
        // line 4355
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You must enter more characters"]);
        echo "...\";
            },
            loadingMore: function () {
                return \"";
        // line 4358
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Loading More"]);
        echo "...\";
            },
            maximumSelected: function (args) {
                return \"";
        // line 4361
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Maximum element has been selected"]);
        echo "...\";
            },
            noResults: function () {
                return \"";
        // line 4364
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No result found"]);
        echo "...\";
            },
            searching: function () {
                return \"";
        // line 4367
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Searching"]);
        echo "...\";
            }
        },
        placeholder: \"";
        // line 4370
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
    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');


             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('.type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
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
        // line 4453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 4453), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "thousand_separator", [], "any", false, false, false, 4453), "html", null, true);
        echo "999";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "decimal_point", [], "any", false, false, false, 4453), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range("1", twig_get_attribute($this->env, $this->source, ($context["primary_currency"] ?? null), "initbiz_money_fraction_digits", [], "any", false, false, false, 4453)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "9";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "', {
        numericInput: true
    });

    \$('#delete').on('click', function(e){
        e.preventDefault();

        swal.fire({
            buttonsStyling: false,

            text: \"";
        // line 4463
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure to delete"]);
        echo "\",
            type: \"error\",

            confirmButtonText: \"";
        // line 4466
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, delete!"]);
        echo "\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '";
        // line 4470
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No, cancel"]);
        echo "',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                KTApp.blockPage({
                    overlayColor: '#000000',
                    type: 'v2',
                    state: 'success',
                    message: '";
        // line 4478
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please wait"]);
        echo "...'
                });
                \$.request('onDelete', {
                    success: function(data) {
                        KTApp.unblockPage();
                        swal.fire({
                            title: '";
        // line 4484
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Deleted!"]);
        echo "',
                            text: '";
        // line 4485
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your selected records have been deleted! :("]);
        echo "',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '";
        // line 4488
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                        window.location.href = \"";
        // line 4491
        echo url("dashboard/shipments");
        echo "\";
                    }
                });
                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {
                swal.fire({
                    title: '";
        // line 4498
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                    text: '";
        // line 4499
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You selected records have not been deleted! :)"]);
        echo "',
                    type: 'error',
                    buttonsStyling: false,
                    confirmButtonText: '";
        // line 4502
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                    confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                });
            }
        });
    });
    if(\$('.kt-widget__action ul.kt-nav li').length == 0){
        \$('.kt-widget__action').hide();
    }
});
</script>
";
        // line 3416
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/shipment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  7953 => 3416,  7939 => 4502,  7933 => 4499,  7929 => 4498,  7919 => 4491,  7913 => 4488,  7907 => 4485,  7903 => 4484,  7894 => 4478,  7883 => 4470,  7876 => 4466,  7870 => 4463,  7845 => 4453,  7759 => 4370,  7753 => 4367,  7747 => 4364,  7741 => 4361,  7735 => 4358,  7729 => 4355,  7723 => 4352,  7717 => 4349,  7713 => 4347,  7709 => 4345,  7707 => 4344,  7677 => 4317,  7661 => 4304,  7645 => 4291,  7588 => 4237,  7581 => 4233,  7572 => 4227,  7498 => 4156,  7491 => 4152,  7482 => 4146,  7390 => 4059,  7381 => 4053,  7366 => 4041,  7353 => 4031,  7347 => 4028,  7343 => 4027,  7331 => 4020,  7326 => 4018,  7312 => 4007,  7304 => 4002,  7298 => 3999,  7286 => 3990,  7250 => 3957,  7243 => 3953,  7233 => 3950,  7184 => 3904,  7155 => 3880,  7147 => 3875,  7134 => 3865,  7128 => 3862,  7124 => 3861,  7112 => 3854,  7107 => 3852,  7093 => 3841,  7085 => 3836,  7079 => 3833,  7065 => 3824,  7057 => 3819,  7042 => 3809,  7034 => 3804,  7021 => 3794,  7013 => 3789,  7000 => 3779,  6976 => 3758,  6952 => 3737,  6928 => 3716,  6904 => 3695,  6867 => 3660,  6853 => 3653,  6848 => 3651,  6844 => 3650,  6840 => 3649,  6834 => 3646,  6830 => 3645,  6825 => 3642,  6823 => 3641,  6818 => 3638,  6803 => 3630,  6798 => 3628,  6794 => 3627,  6790 => 3626,  6784 => 3623,  6780 => 3622,  6775 => 3619,  6773 => 3618,  6630 => 3477,  6625 => 3474,  6615 => 3467,  6609 => 3464,  6605 => 3463,  6593 => 3454,  6587 => 3451,  6583 => 3450,  6569 => 3439,  6556 => 3433,  6551 => 3431,  6547 => 3430,  6543 => 3429,  6539 => 3428,  6535 => 3427,  6532 => 3426,  6530 => 3425,  6527 => 3424,  6524 => 3423,  6522 => 3422,  6515 => 3418,  6510 => 3417,  6508 => 3416,  6506 => 3384,  6474 => 3385,  6472 => 3384,  6469 => 3383,  6467 => 2450,  5534 => 2451,  5532 => 2450,  5524 => 2445,  5519 => 2443,  5515 => 2442,  5511 => 2441,  5495 => 2432,  5484 => 2428,  5478 => 2425,  5472 => 2424,  5468 => 2422,  5461 => 2418,  5457 => 2416,  5455 => 2415,  5446 => 2414,  5439 => 2410,  5435 => 2408,  5433 => 2407,  5428 => 2405,  5422 => 2404,  5418 => 2402,  5411 => 2398,  5407 => 2396,  5405 => 2395,  5400 => 2394,  5393 => 2390,  5389 => 2388,  5387 => 2387,  5382 => 2385,  5375 => 2384,  5372 => 2383,  5359 => 2377,  5348 => 2373,  5342 => 2370,  5339 => 2369,  5336 => 2368,  5334 => 2367,  5330 => 2365,  5323 => 2361,  5319 => 2359,  5317 => 2358,  5312 => 2357,  5305 => 2353,  5301 => 2351,  5299 => 2350,  5294 => 2348,  5288 => 2347,  5278 => 2340,  5274 => 2339,  5267 => 2334,  5260 => 2330,  5255 => 2328,  5251 => 2326,  5249 => 2325,  5246 => 2324,  5241 => 2321,  5220 => 2319,  5216 => 2318,  5211 => 2316,  5207 => 2315,  5204 => 2314,  5202 => 2313,  5198 => 2311,  5187 => 2309,  5183 => 2308,  5178 => 2306,  5174 => 2305,  5165 => 2304,  5160 => 2301,  5139 => 2299,  5135 => 2298,  5130 => 2296,  5126 => 2295,  5123 => 2294,  5121 => 2293,  5117 => 2291,  5111 => 2288,  5107 => 2287,  5104 => 2286,  5102 => 2285,  5098 => 2283,  5081 => 2281,  5077 => 2280,  5071 => 2277,  5062 => 2276,  5053 => 2270,  5049 => 2269,  5046 => 2268,  5044 => 2267,  5034 => 2260,  5020 => 2249,  5016 => 2248,  5009 => 2243,  4996 => 2233,  4982 => 2222,  4968 => 2211,  4949 => 2201,  4943 => 2197,  4940 => 2196,  4933 => 2192,  4928 => 2190,  4924 => 2188,  4922 => 2187,  4919 => 2186,  4914 => 2183,  4898 => 2180,  4894 => 2179,  4889 => 2177,  4885 => 2176,  4882 => 2175,  4880 => 2174,  4876 => 2172,  4865 => 2170,  4861 => 2169,  4856 => 2167,  4852 => 2166,  4843 => 2165,  4838 => 2162,  4817 => 2160,  4813 => 2159,  4808 => 2157,  4804 => 2156,  4801 => 2155,  4799 => 2154,  4795 => 2152,  4789 => 2149,  4785 => 2148,  4782 => 2147,  4780 => 2146,  4776 => 2144,  4759 => 2142,  4755 => 2141,  4749 => 2138,  4740 => 2137,  4731 => 2131,  4727 => 2130,  4724 => 2129,  4722 => 2128,  4716 => 2124,  4703 => 2118,  4692 => 2114,  4686 => 2111,  4683 => 2110,  4681 => 2109,  4675 => 2106,  4667 => 2105,  4661 => 2102,  4651 => 2095,  4639 => 2087,  4631 => 2085,  4628 => 2084,  4625 => 2083,  4617 => 2081,  4614 => 2080,  4612 => 2079,  4607 => 2077,  4601 => 2076,  4595 => 2072,  4589 => 2070,  4587 => 2069,  4582 => 2068,  4574 => 2066,  4571 => 2065,  4568 => 2064,  4560 => 2062,  4557 => 2061,  4555 => 2060,  4547 => 2057,  4539 => 2052,  4531 => 2047,  4517 => 2036,  4512 => 2034,  4508 => 2033,  4500 => 2027,  4493 => 2023,  4489 => 2021,  4487 => 2020,  4482 => 2019,  4475 => 2015,  4471 => 2013,  4469 => 2012,  4464 => 2010,  4452 => 2001,  4448 => 2000,  4441 => 1995,  4434 => 1991,  4429 => 1989,  4425 => 1987,  4423 => 1986,  4420 => 1985,  4415 => 1982,  4394 => 1980,  4390 => 1979,  4385 => 1977,  4381 => 1976,  4378 => 1975,  4376 => 1974,  4372 => 1972,  4361 => 1970,  4357 => 1969,  4352 => 1967,  4348 => 1966,  4339 => 1965,  4334 => 1962,  4313 => 1960,  4309 => 1959,  4304 => 1957,  4300 => 1956,  4297 => 1955,  4295 => 1954,  4291 => 1952,  4285 => 1949,  4281 => 1948,  4278 => 1947,  4276 => 1946,  4272 => 1944,  4255 => 1942,  4251 => 1941,  4245 => 1938,  4236 => 1937,  4227 => 1931,  4223 => 1930,  4220 => 1929,  4218 => 1928,  4208 => 1921,  4194 => 1910,  4190 => 1909,  4183 => 1904,  4170 => 1894,  4156 => 1883,  4142 => 1872,  4123 => 1862,  4117 => 1858,  4114 => 1857,  4107 => 1853,  4102 => 1851,  4098 => 1849,  4096 => 1848,  4093 => 1847,  4088 => 1844,  4072 => 1841,  4068 => 1840,  4063 => 1838,  4059 => 1837,  4056 => 1836,  4054 => 1835,  4050 => 1833,  4039 => 1831,  4035 => 1830,  4030 => 1828,  4026 => 1827,  4017 => 1826,  4012 => 1823,  3991 => 1821,  3987 => 1820,  3982 => 1818,  3978 => 1817,  3975 => 1816,  3973 => 1815,  3969 => 1813,  3963 => 1810,  3959 => 1809,  3956 => 1808,  3954 => 1807,  3950 => 1805,  3933 => 1803,  3929 => 1802,  3923 => 1799,  3914 => 1798,  3905 => 1792,  3901 => 1791,  3898 => 1790,  3896 => 1789,  3890 => 1785,  3877 => 1779,  3866 => 1775,  3860 => 1772,  3857 => 1771,  3855 => 1770,  3849 => 1767,  3841 => 1766,  3835 => 1763,  3825 => 1756,  3812 => 1748,  3807 => 1746,  3801 => 1745,  3795 => 1741,  3789 => 1739,  3787 => 1738,  3781 => 1737,  3773 => 1734,  3765 => 1729,  3757 => 1724,  3745 => 1715,  3740 => 1713,  3736 => 1712,  3730 => 1708,  3716 => 1702,  3704 => 1697,  3699 => 1696,  3695 => 1695,  3680 => 1687,  3669 => 1683,  3662 => 1679,  3649 => 1669,  3636 => 1659,  3632 => 1658,  3628 => 1657,  3622 => 1654,  3615 => 1650,  3607 => 1645,  3596 => 1637,  3591 => 1635,  3587 => 1634,  3578 => 1628,  3571 => 1624,  3563 => 1619,  3552 => 1611,  3547 => 1609,  3543 => 1608,  3534 => 1602,  3520 => 1591,  3515 => 1589,  3508 => 1585,  3501 => 1581,  3490 => 1573,  3485 => 1571,  3481 => 1570,  3474 => 1565,  3463 => 1563,  3459 => 1562,  3453 => 1559,  3446 => 1555,  3439 => 1551,  3428 => 1543,  3423 => 1541,  3419 => 1540,  3412 => 1535,  3399 => 1533,  3395 => 1532,  3389 => 1529,  3382 => 1525,  3375 => 1521,  3364 => 1513,  3359 => 1511,  3355 => 1510,  3348 => 1505,  3337 => 1503,  3333 => 1502,  3327 => 1499,  3323 => 1497,  3311 => 1488,  3306 => 1485,  3304 => 1484,  3299 => 1482,  3294 => 1479,  3288 => 1477,  3282 => 1475,  3280 => 1474,  3267 => 1464,  3262 => 1462,  3258 => 1461,  3248 => 1454,  3241 => 1450,  3234 => 1446,  3221 => 1435,  3206 => 1423,  3201 => 1420,  3199 => 1419,  3196 => 1418,  3184 => 1412,  3178 => 1408,  3170 => 1404,  3163 => 1400,  3157 => 1398,  3149 => 1394,  3147 => 1393,  3143 => 1392,  3134 => 1386,  3128 => 1383,  3114 => 1371,  3109 => 1370,  3100 => 1364,  3093 => 1360,  3079 => 1348,  3074 => 1347,  3067 => 1343,  3061 => 1340,  3057 => 1339,  3050 => 1335,  3037 => 1325,  3029 => 1320,  3022 => 1316,  3010 => 1306,  2998 => 1300,  2983 => 1287,  2973 => 1282,  2969 => 1280,  2961 => 1279,  2957 => 1277,  2951 => 1275,  2948 => 1274,  2940 => 1272,  2937 => 1271,  2935 => 1270,  2927 => 1264,  2922 => 1263,  2914 => 1258,  2905 => 1251,  2902 => 1250,  2893 => 1243,  2881 => 1233,  2878 => 1232,  2874 => 1230,  2867 => 1226,  2862 => 1224,  2859 => 1223,  2856 => 1222,  2849 => 1218,  2844 => 1216,  2841 => 1215,  2839 => 1214,  2836 => 1213,  2833 => 1212,  2829 => 1210,  2824 => 1207,  2818 => 1205,  2812 => 1203,  2810 => 1202,  2805 => 1200,  2802 => 1199,  2799 => 1198,  2794 => 1195,  2788 => 1193,  2782 => 1191,  2780 => 1190,  2775 => 1188,  2772 => 1187,  2770 => 1186,  2767 => 1185,  2765 => 1184,  2760 => 1181,  2754 => 1179,  2748 => 1177,  2746 => 1176,  2741 => 1174,  2734 => 1169,  2728 => 1167,  2722 => 1165,  2720 => 1164,  2715 => 1162,  2711 => 1160,  2707 => 1158,  2701 => 1155,  2697 => 1154,  2694 => 1153,  2691 => 1152,  2685 => 1149,  2681 => 1148,  2678 => 1147,  2676 => 1146,  2673 => 1145,  2671 => 1144,  2667 => 1142,  2661 => 1140,  2655 => 1138,  2653 => 1137,  2649 => 1136,  2644 => 1133,  2640 => 1131,  2637 => 1130,  2631 => 1128,  2625 => 1126,  2623 => 1125,  2618 => 1123,  2606 => 1114,  2598 => 1108,  2595 => 1107,  2592 => 1106,  2583 => 1099,  2571 => 1089,  2568 => 1088,  2564 => 1086,  2557 => 1082,  2552 => 1080,  2549 => 1079,  2546 => 1078,  2539 => 1074,  2534 => 1072,  2531 => 1071,  2529 => 1070,  2526 => 1069,  2523 => 1068,  2519 => 1066,  2514 => 1063,  2508 => 1061,  2502 => 1059,  2500 => 1058,  2495 => 1056,  2492 => 1055,  2489 => 1054,  2484 => 1051,  2478 => 1049,  2472 => 1047,  2470 => 1046,  2465 => 1044,  2462 => 1043,  2460 => 1042,  2457 => 1041,  2455 => 1040,  2450 => 1037,  2444 => 1035,  2438 => 1033,  2436 => 1032,  2431 => 1030,  2424 => 1025,  2418 => 1023,  2412 => 1021,  2410 => 1020,  2405 => 1018,  2401 => 1016,  2397 => 1014,  2391 => 1011,  2387 => 1010,  2384 => 1009,  2381 => 1008,  2375 => 1005,  2371 => 1004,  2368 => 1003,  2366 => 1002,  2363 => 1001,  2361 => 1000,  2357 => 998,  2351 => 996,  2345 => 994,  2343 => 993,  2339 => 992,  2334 => 989,  2330 => 987,  2327 => 986,  2321 => 984,  2315 => 982,  2313 => 981,  2308 => 979,  2296 => 970,  2282 => 964,  2280 => 963,  2270 => 955,  2252 => 949,  2246 => 948,  2238 => 946,  2236 => 945,  2231 => 943,  2225 => 940,  2221 => 939,  2217 => 937,  2211 => 933,  2205 => 931,  2203 => 930,  2199 => 928,  2193 => 926,  2191 => 925,  2177 => 924,  2174 => 923,  2168 => 921,  2162 => 919,  2160 => 918,  2152 => 912,  2146 => 911,  2144 => 910,  2140 => 908,  2134 => 906,  2132 => 905,  2118 => 904,  2115 => 903,  2109 => 901,  2103 => 899,  2101 => 898,  2097 => 896,  2094 => 895,  2090 => 893,  2087 => 892,  2082 => 889,  2076 => 887,  2074 => 886,  2069 => 885,  2067 => 884,  2063 => 883,  2058 => 881,  2055 => 880,  2052 => 879,  2036 => 876,  2032 => 875,  2027 => 872,  2021 => 870,  2019 => 869,  2014 => 868,  2012 => 867,  2008 => 866,  2003 => 864,  2000 => 863,  1997 => 862,  1980 => 858,  1975 => 856,  1972 => 855,  1955 => 851,  1950 => 849,  1945 => 846,  1939 => 844,  1937 => 843,  1933 => 842,  1928 => 840,  1925 => 839,  1923 => 838,  1920 => 837,  1917 => 836,  1913 => 834,  1907 => 831,  1903 => 830,  1900 => 829,  1897 => 828,  1891 => 825,  1887 => 824,  1884 => 823,  1881 => 822,  1875 => 819,  1871 => 818,  1868 => 817,  1865 => 816,  1859 => 813,  1855 => 812,  1852 => 811,  1849 => 810,  1843 => 807,  1839 => 806,  1836 => 805,  1834 => 804,  1831 => 803,  1828 => 802,  1824 => 800,  1821 => 799,  1818 => 798,  1806 => 789,  1801 => 786,  1789 => 781,  1781 => 780,  1775 => 777,  1769 => 773,  1767 => 772,  1762 => 771,  1760 => 770,  1757 => 769,  1753 => 767,  1751 => 766,  1748 => 765,  1746 => 764,  1741 => 761,  1736 => 758,  1734 => 757,  1731 => 756,  1725 => 752,  1715 => 750,  1712 => 749,  1702 => 746,  1698 => 744,  1694 => 743,  1691 => 742,  1689 => 741,  1683 => 738,  1678 => 735,  1668 => 733,  1665 => 732,  1655 => 729,  1651 => 727,  1647 => 726,  1644 => 725,  1642 => 724,  1638 => 722,  1636 => 721,  1631 => 718,  1621 => 716,  1618 => 715,  1608 => 712,  1604 => 710,  1600 => 709,  1597 => 708,  1595 => 707,  1591 => 705,  1589 => 704,  1583 => 700,  1573 => 698,  1570 => 697,  1560 => 694,  1556 => 692,  1552 => 691,  1549 => 690,  1547 => 689,  1543 => 687,  1540 => 686,  1538 => 685,  1535 => 684,  1527 => 679,  1522 => 677,  1515 => 673,  1510 => 671,  1507 => 670,  1504 => 669,  1501 => 668,  1499 => 667,  1495 => 665,  1491 => 663,  1485 => 660,  1481 => 659,  1478 => 658,  1475 => 657,  1469 => 654,  1465 => 653,  1462 => 652,  1460 => 651,  1457 => 650,  1454 => 649,  1450 => 647,  1444 => 644,  1440 => 643,  1437 => 642,  1434 => 641,  1428 => 638,  1424 => 637,  1421 => 636,  1419 => 635,  1416 => 634,  1413 => 633,  1409 => 631,  1403 => 628,  1399 => 627,  1396 => 626,  1393 => 625,  1387 => 622,  1383 => 621,  1380 => 620,  1378 => 619,  1375 => 618,  1372 => 617,  1370 => 616,  1367 => 615,  1361 => 611,  1356 => 608,  1345 => 605,  1342 => 604,  1324 => 602,  1322 => 601,  1315 => 600,  1309 => 598,  1307 => 597,  1302 => 595,  1299 => 594,  1295 => 593,  1288 => 589,  1284 => 588,  1280 => 587,  1275 => 584,  1270 => 581,  1259 => 578,  1252 => 576,  1245 => 575,  1239 => 573,  1237 => 572,  1232 => 570,  1229 => 569,  1225 => 568,  1218 => 564,  1214 => 563,  1210 => 562,  1205 => 559,  1203 => 558,  1198 => 555,  1196 => 554,  1186 => 547,  1172 => 535,  1164 => 530,  1159 => 528,  1150 => 522,  1145 => 520,  1137 => 515,  1133 => 514,  1127 => 511,  1123 => 510,  1119 => 508,  1112 => 504,  1108 => 503,  1104 => 501,  1101 => 500,  1099 => 499,  1096 => 498,  1092 => 496,  1086 => 493,  1082 => 492,  1079 => 491,  1076 => 490,  1070 => 487,  1066 => 486,  1063 => 485,  1061 => 484,  1058 => 483,  1055 => 482,  1051 => 480,  1047 => 478,  1041 => 476,  1039 => 475,  1035 => 474,  1031 => 473,  1028 => 472,  1025 => 471,  1021 => 469,  1015 => 467,  1013 => 466,  1009 => 465,  1005 => 464,  1002 => 463,  1000 => 462,  997 => 461,  994 => 460,  987 => 456,  983 => 455,  977 => 452,  973 => 451,  965 => 446,  961 => 445,  951 => 442,  947 => 441,  943 => 439,  941 => 438,  935 => 435,  931 => 434,  925 => 431,  921 => 430,  913 => 425,  909 => 424,  903 => 421,  899 => 420,  895 => 418,  893 => 417,  887 => 414,  883 => 413,  878 => 410,  855 => 409,  849 => 408,  844 => 406,  839 => 403,  833 => 400,  829 => 399,  826 => 398,  824 => 397,  820 => 395,  814 => 393,  808 => 391,  806 => 390,  801 => 388,  789 => 379,  765 => 358,  757 => 355,  751 => 352,  747 => 350,  744 => 349,  739 => 346,  735 => 344,  729 => 342,  723 => 340,  721 => 339,  718 => 338,  715 => 337,  706 => 336,  704 => 335,  698 => 332,  694 => 330,  685 => 326,  679 => 323,  675 => 321,  672 => 320,  670 => 319,  662 => 316,  656 => 313,  652 => 311,  650 => 310,  646 => 308,  640 => 306,  634 => 304,  632 => 303,  626 => 300,  618 => 295,  612 => 292,  601 => 284,  592 => 277,  589 => 276,  582 => 272,  577 => 270,  574 => 269,  571 => 268,  564 => 264,  559 => 262,  556 => 261,  553 => 260,  546 => 256,  537 => 250,  532 => 247,  530 => 246,  527 => 245,  520 => 242,  515 => 239,  512 => 238,  505 => 234,  499 => 230,  492 => 226,  487 => 223,  480 => 219,  475 => 216,  472 => 215,  470 => 214,  467 => 213,  460 => 210,  451 => 204,  446 => 201,  439 => 197,  434 => 194,  427 => 190,  422 => 187,  419 => 186,  416 => 185,  414 => 184,  410 => 182,  407 => 181,  404 => 180,  401 => 179,  394 => 175,  389 => 173,  382 => 169,  377 => 167,  370 => 163,  365 => 161,  358 => 157,  353 => 155,  350 => 154,  348 => 153,  345 => 152,  338 => 149,  333 => 146,  331 => 145,  328 => 144,  321 => 141,  316 => 138,  313 => 137,  306 => 133,  301 => 130,  298 => 129,  294 => 127,  287 => 124,  282 => 121,  279 => 120,  274 => 117,  268 => 115,  264 => 113,  258 => 110,  252 => 107,  249 => 106,  246 => 105,  243 => 104,  240 => 103,  237 => 102,  230 => 98,  225 => 95,  222 => 94,  215 => 90,  210 => 87,  207 => 86,  204 => 85,  201 => 84,  198 => 83,  195 => 82,  192 => 81,  185 => 77,  180 => 74,  173 => 70,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  157 => 63,  151 => 60,  142 => 54,  137 => 51,  134 => 50,  132 => 49,  128 => 47,  125 => 46,  122 => 45,  115 => 41,  110 => 38,  107 => 37,  100 => 33,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  77 => 25,  70 => 21,  65 => 18,  63 => 17,  55 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-portlet \">
    <div class=\"kt-portlet__body\">
        <div class=\"kt-widget kt-widget--user-profile-3\">
            <div class=\"kt-widget__top\">
                <div class=\"kt-widget__content\">
                    <div class=\"kt-widget__head\">
                        <a href=\"javascript:;\" class=\"kt-widget__username\">
                            {{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}{{order.number}}
                        </a>
                        <div class=\"kt-widget__action\">
                \t\t\t<a href=\"javascript:;\" class=\"btn btn-label-brand btn-bold btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                \t\t\t\t{{'Order Actions'|__}}
                \t\t\t</a>
                \t\t\t<div class=\"dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md\">
                                <!--begin::Nav-->
                                <ul class=\"kt-nav\">
                                    {% if settings.payment.enable_paypal %}
                                    <!-- <li class=\"kt-nav__item\">
                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#paypal_modal\" class=\"kt-nav__link\">
                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                            <span class=\"kt-nav__link-text\">{{'Pay'|__}}</span>
                                        </a>
                                    </li> -->
                                    {% endif %}
                                    {% if order.requested != 6 and order.requested != 10 %}
                                        {% if order.requested == 0 or order.requested == 1 or data.requested == 100 %}
                                            {% if order.requested == 1 and user.role_id == 5 %}
                                            {% else %}
                                                {% if user.hasUserPermission('order', 'u') %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-edit'|page({ id: order.id })}}\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-edit-1\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Edit'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                {% if user.hasUserPermission('order', 'd') %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"delete\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-cancel\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delete'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}


                                        {% if user.role_id != 5 %}
                                            {% if order.requested == 0 %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" id=\"accept\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Accept'|__}}</span>
                                                    </a>
                                                </li>
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#refuse\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-signs-2\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Refuse'|__}}</span>
                                                    </a>
                                                </li>
                                            {% elseif order.requested != 2 %}
                                                {% if order.manifest_id is empty %}
                                                    {% if order.requested == 1 or order.requested == 9 or order.requested == 7  %}
                                                        {% if order.assigned_id %}
                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Change Assigned Employee'|__}}</span>
                                                                </a>
                                                            </li>
                                                        {% else %}
                                                            <li class=\"kt-nav__item\">
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Assign Employee'|__}}</span>
                                                                </a>
                                                            </li>
                                                        {% endif %}
                                                    {% endif %}
                                                {% endif %}
                                                {% if order.requested == 1 or order.requested == 4 or order.requested == 7 or order.requested == 10 %}
                                                    {% if order.assigned_id is empty %}
                                                        {% if user.hasUserPermission('manifest', 'c') %}
                                                            {% if order.manifest_id is empty %}
                                                                <li class=\"kt-nav__item\">
                                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                        <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                        <span class=\"kt-nav__link-text\">{{'Assign Manifest'|__}}</span>
                                                                    </a>
                                                                </li>
                                                            {% else %}
                                                                {% if order.manifest.status == 1 %}
                                                                    <li class=\"kt-nav__item\">
                                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_manifest\" class=\"kt-nav__link\">
                                                                            <i class=\"kt-nav__link-icon flaticon-truck\"></i>
                                                                            <span class=\"kt-nav__link-text\">{{'Change Manifest'|__}}</span>
                                                                        </a>
                                                                    </li>
                                                                {% endif %}
                                                            {% endif %}
                                                        {% endif %}
                                                    {% endif %}
                                                    {% if order.assigned_id is not empty or order.manifest_id is not empty %}
                                                        <li class=\"kt-nav__item\">
                                                            <!-- {% if order.type == 1 %} -->
                                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Received'|__}}</span>
                                                                </a>
                                                           <!--  {% else %}
                                                                <a href=\"javascript:;\" id=\"delivered_driver\" class=\"kt-nav__link\">
                                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                                    <span class=\"kt-nav__link-text\">{{'Delivered to driver'|__}}</span>
                                                                </a>
                                                            {% endif %} -->
                                                        </li>
                                                    {% endif %}
                                                   <!--  {% if order.requested != 10 %}
                                                        <li class=\"kt-nav__item\">
                                                            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#transfer_office\" class=\"kt-nav__link\">
                                                                <i class=\"kt-nav__link-icon flaticon-logout\"></i>
                                                                <span class=\"kt-nav__link-text\">{{'Transfer To Branch'|__}}</span>
                                                            </a>
                                                        </li>
                                                    {% endif %} -->
                                                {% endif %}
                                                {% if order.requested != 7 and order.requested != 10 and order.requested != 11  and order.requested != 6  and order.requested != 8 and order.requested != 14 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" id=\"stock\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Save in stock'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                                <!-- {% if order.requested != 7 and order.requested != 9 and order.requested != 10 and order.requested != 11 and order.requested != 12 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#postpone\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Postpone'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %} -->
                                                <!-- {% if order.requested == 3 or order.requested == 9 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#discards\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Transfer as discards'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %} -->
                                                {% if order.requested == 5  or order.requested == 7 or order.requested == 9 %}
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-deliver'|page({id:this.param.id,status:6})}}\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delivered'|__}}</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-deliver'|page({id:this.param.id,status:8})}}\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delivered with COD'|__}}</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-deliver'|page({id:this.param.id,status:10})}}\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delivered with Paid'|__}}</span>
                                                        </a>
                                                    </li>
                                                    <li class=\"kt-nav__item\">
                                                        <a href=\"{{'dashboard/order-deliver'|page({id:this.param.id,status:11})}}\" id=\"deliveried_bak\" class=\"kt-nav__link\">
                                                            <i class=\"kt-nav__link-icon flaticon-user-ok\"></i>
                                                            <span class=\"kt-nav__link-text\">{{'Delivered with Paid&COD'|__}}</span>
                                                        </a>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}


                                    {% if user.role_id != 5 %}
                                        <!-- {% if order.requested == 8 or order.requested == 11 or order.requested == 9   %}
                                            {% if order.assigned_id %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Change Assigned Employee'|__}}</span>
                                                    </a>
                                                </li>
                                            {% else %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Assign Employee'|__}}</span>
                                                    </a>
                                                </li>
                                            {% endif %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#received\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Received'|__}}</span>
                                                </a>
                                            </li>
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon-refresh\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Assigned'|__}}</span>
                                                </a>
                                            </li> 
                                        {% endif %} -->
                                        {% if order.requested == 8 or order.requested == 11 %}
                                            {% if order.assigned_id %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Change Assigned Employee for COD'|__}}</span>
                                                    </a>
                                                </li>
                                            {% else %}
                                                <li class=\"kt-nav__item\">
                                                    <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#assign_employee\" class=\"kt-nav__link\">
                                                        <i class=\"kt-nav__link-icon flaticon-users\"></i>
                                                        <span class=\"kt-nav__link-text\">{{'Assign Employee for COD'|__}}</span>
                                                    </a>
                                                </li>
                                            {% endif %}
                                            
                                            <!-- <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Deliver returned discards'|__}}</span>
                                                </a>
                                            </li> -->
                                        {% endif %}
                                        {% if order.requested == 8 or order.requested == 11 or order.requested == 12 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#receivedCOD\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Received for COD'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}    
                                        {% if order.requested == 12 or order.requested == 13 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_cod\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Returned the COD'|__}}</span>
                                                </a>
                                            </li>
                                            <!-- <li class=\"kt-nav__item\">
                                                <a href=\"javascript:;\" id=\"return_discards\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-check-mark\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Deliver returned discards'|__}}</span>
                                                </a>
                                            </li> -->
                                        {% endif %}
                                        {% if order.type == 2 and order.requested != 0 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"{{'dashboard/order-print'|page({ id: order.id, type: 'shipment' })}}\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Print Shipment'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                        {% if order.requested != 0 and order.requested != 10  and order.requested != 11 and order.requested != 6 and order.requested != 8 %}
                                            <li class=\"kt-nav__item\">
                                                <a href=\"{{'dashboard/order-print'|page({ id: order.id, type: 'label' })}}\" target=\"_blank\" class=\"kt-nav__link\">
                                                    <i class=\"kt-nav__link-icon flaticon2-print\"></i>
                                                    <span class=\"kt-nav__link-text\">{{'Print Label'|__}}</span>
                                                </a>
                                            </li>
                                        {% endif %}
                                    {% endif %}
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-widget__subhead\">
                        {{ barcodeHTML({data: order.barcode, type: 'CODABAR'}) }}
                    </div>

                    <div class=\"kt-widget__info\">

                        <div class=\"kt-widget__stats d-flex align-items-center flex-fill\">
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    {{'Notes'|__}}
                                </span>
                                <div class=\"kt-widget__label notes_scroll\">
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.notes.count}}</span>
                                </div>
                            </div>
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    {{'Package Receive Date'|__}}
                                </span>
                                <div class=\"kt-widget__label\">
                                    {% if addShipmentForm == \"add_form_normal\" %}
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.created_at|date(settings.dateformat)}}</span>
                                    {% else %}
                                    <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.ship_date|date(settings.dateformat)}}</span>
                                    {% endif %}
                                </div>
                            </div>
                            {% if addShipmentForm != \"add_form_simple\" %}
                            <div class=\"kt-widget__item\">
                                <span class=\"kt-widget__date\">
                                    {{'Received Date'|__}}
                                </span>
                                <div class=\"kt-widget__label\">
                                    <span class=\"btn btn-label-{{progress_status}} btn-sm btn-bold btn-upper\">{{order.releasedNote_received|date(settings.dateformat)}}</span>
                                </div>
                            </div>
                            {% elseif addShipmentForm != \"add_form_simple\" %}
                                {% if order.receive_date %}
                                    <div class=\"kt-widget__item\">
                                        <span class=\"kt-widget__date\">
                                            {{'Received Date'|__}}
                                        </span>
                                        <div class=\"kt-widget__label\">
                                            <span class=\"btn btn-label-{{progress_status}} btn-sm btn-bold btn-upper\">{{order.receive_date|date(settings.dateformat)}}</span>
                                        </div>
                                    </div>
                                {% else %}
                                    <div class=\"kt-widget__item\">
                                        <span class=\"kt-widget__date\">
                                            {{'Package Expected Delievery Date'|__}}
                                        </span>
                                        <div class=\"kt-widget__label\">
                                            {% if order.delivery_date %}
                                                <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">{{order.delivery_date|date(settings.dateformat)}}</span>{% if order.postponed == 1 and order.requested in [1,3,5,6,7,10,11] %} | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">{{'POSTPONED'|__}}</span>{% endif %}
                                            {% else %}
                                                <span class=\"btn btn-label-brand btn-sm btn-bold btn-upper\">
                                                {%if order.deliverytime %}
                                                    {{order.ship_date|date_modify(\"+\"~order.deliverytime.count~\" hours\")|date(settings.dateformat)}}
                                                {% else %}
                                                    {{ null }}
                                                {% endif %}
                                                </span>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endif %}

                            <div class=\"kt-widget__item flex-fill\">
                                <span class=\"kt-widget__subtitel\">{{'Progress'|__}}</span>
                                <div class=\"kt-widget__progress d-flex  align-items-center\">
                                    <div class=\"progress\" style=\"height: 5px;width: 100%;\">
                                        <div class=\"progress-bar kt-bg-{{progress_status}}\" role=\"progressbar\" style=\"width: {{progress}}%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <span class=\"kt-widget__stat\">
                                        {{progress}}%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:: Portlet-->


<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Order Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Shipment Type'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.type == 1 %}
                                        {{'Receive'|__}}
                                    {% else %}
                                        {{'Send'|__}}
                                    {% endif %}
                                </span>
                            </div>
                            {% if addShipmentForm == \"add_form_advance\" %}
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Package Type'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.packaging.name}}</span>
                            </div>
                            {% endif %}
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Status'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    <span class=\"btn btn-label-{{order.status.color}} btn-sm btn-bold btn-upper\">{{order.status.name}}</span>
                                    {% if progress_status == 'danger' %} | <span class=\"btn btn-label-{{progress_status}} btn-sm btn-bold btn-upper\">{{'Delayed'|__}}</span>{% endif %}{% if order.requested == 10 or order.requested == 11 %} | <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\">{{'RETURNING DISCARDS'|__}}</span>{% endif %}{% if order.postponed == 1 %} | <span class=\"btn btn-label-info btn-sm btn-bold btn-upper\">{{'POSTPONED'|__}}</span>{% endif %}{% if order.requested == 12 and row.status.equal != 12 %} | <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Supplied'|__}}</span>{% endif %}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Channel'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.channel|__}}</span>
                            </div>
                        </div>
                        {% if addShipmentForm == \"add_form_normal\" %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Label'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.label.name}}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Ground Handler'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.handler.name}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Breakdown'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.breakdown.name}}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Tranfer to Jost'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.transfer_jost? 'Yes' : 'No'}}</span>
                            </div>
                        </div>
                        {% elseif addShipmentForm == \"add_form_advance\" %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Payment Type'|__}}</span>
                                <span class=\"kt-widget12__value\">{% if order.payment_type == 1 %}{{'Postpaid'|__}}{% elseif order.payment_type == 2 %}{{'Prepaid'|__}}{% endif %}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Currency'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.currency.name}}</span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Office'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.office.name}}</span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Delivery Time'|__}}</span>
                                <span class=\"kt-widget12__value\">{{order.deliverytime.name}}</span>
                            </div>
                        </div>
                        {% endif %}
                        {% if order.assigned_id or order.manifest_id %}
                            <div class=\"kt-widget12__item\">
                                {% if order.manifest_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Manifest'|__}}</span>
                                        <span class=\"kt-widget12__value\">#{{order.currency.id}}</span>
                                        {% if order.manifest.driver %}
                                            <span class=\"kt-widget12__value kt-font-sm\">{{order.manifest.driver.name}}</span>
                                        {% endif %}
                                    </div>
                                {% endif %}
                                {% if order.assigned_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Assigned To'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.responsiable.name}}</span>
                                        {% if order.responsiable.mobile %}
                                            <span class=\"kt-widget12__value kt-font-sm\">{{order.responsiable.mobile}}</span>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.courier_id or order.mode_id %}
                            <div class=\"kt-widget12__item\">
                                {% if order.courier_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Courier Company'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.courier.name}}</span>
                                    </div>
                                {% endif %}
                                {% if order.mode_id %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Shipping Mode'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.mode.name}}</span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}

                        {% if order.requested in [4,5,6,10,11,12] %}
                            {% if order.delivered_by != order.delivered_responsiable %}
                                <div class=\"kt-widget12__item\">
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Delivered Responsiabality'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.delivered_responsiabality.name}}</span>
                                    </div>
                                </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Delivered By'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.delivered_employee.name}}</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Received By'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.received_by}}</span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver ID Copy'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"{{order.id_copy.path}}\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver Signature'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        <img src=\"{{order.esign}}\" style=\"max-height:350px;\" alt=\"\" />
                                    </span>
                                </div>
                            </div>
                        {% endif %}
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Payment&Items Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        {% if order.items is not empty %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"table-responsive\">
                                        {% if addShipmentForm == \"add_form_normal\" %}
                                        <table class=\"table table-dark\">
                                            <thead>
                                                <tr>
                                                    <th>{{\"AirwayBill\"|__}}</th>
                                                    <th>{{\"Info\"|__}}</th>
                                                    <th>{{\"Weight\"|__}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for item in order.items %}
                                                    <tr>
                                                        <th scope=\"row\">{{order.airWayBill}}</th>
                                                        <td>
                                                            {% if item.description %}
                                                                {{item.description}}<br />
                                                            {% endif %}
                                                            <b>{{'Number of boxes'|__}}:</b> {{item.num_boxes}}<br />
                                                            <b>{{'Number of boxes'|__}}:</b> {{item.num_pallets}}<br />
                                                        </td>
                                                        <td>{{item.weight}} {{'Kg'|__}}</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                        {% else %}
                                        <table class=\"table table-dark\">
                    \t\t\t\t\t  \t<thead>
                    \t\t\t\t\t    \t<tr>
                    \t\t\t\t\t      \t\t<th>{{\"Category\"|__}}</th>
                    \t\t\t\t\t      \t\t<th>{{\"Info\"|__}}</th>
                    \t\t\t\t\t      \t\t<th>{{\"Weight\"|__}}</th>
                    \t\t\t\t\t    \t</tr>
                    \t\t\t\t\t  \t</thead>
                    \t\t\t\t\t  \t<tbody>
                                                {% for item in order.items %}
                        \t\t\t\t\t    \t<tr>
                        \t\t\t\t\t\t      \t<th scope=\"row\">{{item.category.name}}</th>
                        \t\t\t\t\t\t      \t<td>
                                                            {% if item.description %}
                                                                {{item.description}}<br />
                                                            {% endif %}
                                                            <b>{{'Quantity'|__}}:</b> {{item.quantity}}<br />
                                                            {% if addShipmentForm != \"add_form_simple\" %}
                                                            <b>{{'Dimensions'|__}}:</b> {{item.length}} {{'cm'|__}} x {{item.width}} {{'cm'|__}} x {{item.height}} {{'cm'|__}}
                                                            {% endif %}
                                                        </td>
                        \t\t\t\t\t\t      \t<td>{{item.weight}} {{'Kg'|__}}</td>
                        \t\t\t\t\t    \t</tr>
                                                {% endfor %}
                    \t\t\t\t\t  \t</tbody>
                    \t\t\t\t\t</table>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                        
                        {% if addShipmentForm == \"add_form_normal\" %}
                        {% if order.custom_clearance != 0 or order.fiscal_representaion != 0 %}
                            <div class=\"kt-widget12__item\">
                                {% if order.custom_clearance != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Custom Clearance'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.custom_clearance|currency}}</span>
                                </div>
                                {% endif %}
                                {% if order.fiscal_representation != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Fisacl Representaion'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.fiscal_representation|currency}}</span>
                                </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.payment_term != 0 or order.price_kg != 0 %}
                            <div class=\"kt-widget12__item\">
                                {% if order.payment_term != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Invoice Payment Term'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.payment_term|currency}}</span>
                                </div>
                                {% endif %}
                                {% if order.price_kg != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Handling Price per Kg '|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.price_kg|currency}}</span>
                                </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.storage_fee == 1 %}
                            <div class=\"kt-widget12__item\">
                                {% if order.cost_24 != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Storage Costs after 24 Hours'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.cost_24|currency}}</span>
                                </div>
                                {% endif %}
                                {% if order.cost_48 != 0 %}
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Storage Costs after 48 Hours '|__}}</span>
                                    <span class=\"kt-widget12__value\">{{order.cost_48|currency}}</span>
                                </div>
                                {% endif %}
                            </div>
                        {% endif %}
                       
                        <div class=\"kt-widget12__item\">
                            {% set sub_total = order.price_kg * order.details.weight %}
                            {% set store_fee = order.payment_term * order.cost_24%}
                            {% set total = order.custom_clearance+order.fiscal_representation + sub_total + store_fee %}
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Sub Total'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                        {{sub_total|currency}}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Total'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                        {{total|currency}}
                                </span>
                            </div>
                        </div>
                        {% else %}
                        <!--                    start pay by paypal           -->
                            {% if order.payment_method == 'paypal' %}
                                {% if order.sender_id == user.id and order.requested != 0 and order.requested != 2 and order.payment_type == 2 %}
                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            {% if paymentStatus == 0 %}
                                                <div class=\"kt-widget12__desc\">
                                                    {% component 'paypal' %}
                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The amount you will pay online is what is requested from you only\"|__}}</span>
                                                </span>
                                            {% else %}
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The Shipment Cost has paid \"|__}}</span>
                                                </span>
                                            {% endif %}    
                                        </div>
                                    </div>
                                    
                                {% elseif order.receiver_id == user.id and order.requested != 0 and order.requested != 2 and order.payment_type == 1 %}
                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            {% if paymentStatus == 0 %}
                                                <div class=\"kt-widget12__desc\">
                                                    {% component 'paypal' %}
                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The amount you will pay online is what is requested from you only\"|__}}</span>
                                                </span>
                                            {% else %}
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The Shipment Cost has paid \"|__}}</span>
                                                </span>
                                            {% endif %}    
                                        </div>
                                    </div>
                                {% elseif order.receiver_id == user.id and order.requested != 0 and order.requested != 2 and order.payment_type == 2 and order.return_defray == 1 and order.return_package_fee == 1 %}
                                    <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            {% if paymentReturnStatus == 0 %}
                                                <div class=\"kt-widget12__desc\">
                                                    {% component 'paypal' %}
                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The amount you will pay online is what is requested from you only\"|__}}</span>
                                                </span>
                                            {% else %}
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The Returned Package Cost has paid \"|__}}</span>
                                                </span>
                                            {% endif %}    
                                        </div>
                                    </div>
                                {% elseif order.sender_id == user.id and order.requested != 0 and order.requested != 2 and order.payment_type == 1 and order.return_defray == 1 and order.return_package_fee == 2 %}    
                                   <div class=\"kt-widget12__item\">
                                        <div class=\"kt-widget12__info\" style=\"text-align:center \">
                                            {% if paymentReturnStatus == 0 %}
                                                <div class=\"kt-widget12__desc\">
                                                    {% component 'paypal' %}
                                                </div>
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The amount you will pay online is what is requested from you only\"|__}}</span>
                                                </span>
                                            {% else %}
                                                <span class=\"kt-widget12__value\">
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The Returned Package Cost has paid \"|__}}</span>
                                                </span>
                                            {% endif %}    
                                        </div>
                                    </div> 
                                {% endif %}
                                <!--                    end pay by paypal           -->
                            {% elseif order.payment_method == 'paystack'%}


                            {% endif %}



                            {% if order.payments.where('item_id', this.param.id).where('for_id', order.receiver_id).first.status == 3 and order.receiver_id == user.id %}

                            {% elseif order.payments.where('item_id', this.param.id).where('for_id', order.sender_id).first.status == 3 and order.sender_id == user.id %}

                            {% else %}

                                {% if order.payment_method == 'paystack' and order.receiver_id and order.requested != 0 and order.requested != 2 %}
                                    {% if payment.enable_paystack == 2 %} <!-- should remove 2 to enable paystack block -->
                                        {% if user.id in [order.sender_id,order.receiver_id]%}
                                            <div class=\"kt-widget12__item\">
                                                <div class=\"kt-widget12__info\">
                                                    <form class=\"kt-widget12__desc\">
                                                        <script src=\"https://js.paystack.co/v1/inline.js\"></script>
                                                        <button type=\"button\" class=\"btn btn-wide btn-success btn-bold btn-upper btn-elevate btn-elevate-air\" onclick=\"payWithPaystack()\"> <i class=\"fa fa-dollar-sign\"></i> {{'PAY ONLINE'|__}} </button>
                                                    </form>
                                                    <span class=\"kt-widget12__value\">
                                                        <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'Paystack only uses GHS currency so that is why we change the money for it'|__}}\" data-original-title=\"{{'Paystack only uses GHS currency so that is why we change the money for it'|__}}\" data-skin=\"dark\">{{\"The amount will be changed for Ghanaian cedi for using the paystack payment gateway, the changed price will equal the same as you should pay\"|__}}</span>
                                                        <span class=\"btn btn-label-warning btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-original-title=\"{{'If you are sender or receiver you will have to pay the amount if its prepaid or postpaid just if you are the resposnsiable of this payment'|__}}\" data-skin=\"dark\">{{\"The amount you will pay online is what is requested from you only\"|__}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        {% else %}
                                            <div class=\"alert alert-info\" role=\"alert\">
                                                <div class=\"alert-icon\"><i class=\"flaticon-info\"></i></div>
                                                <div class=\"alert-text\">
                                                    {{'Sender and receiver can see the online payment option if they have to pay something they can pay it online'|__}}.
                                                </div>
                                                <div class=\"alert-close\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}

                            {% endif %}
                            {% if order.tax != 0 or order.tax_sgst !=0 or order.tax_cgst != 0 or order.insurance != 0 or order.customs_value != 0 %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.tax != 0 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Tax'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.tax}}%</span>
                                    </div>
                                    {% endif %}
                                    {% if order.tax_sgst != 0 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'SGST'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.tax_sgst}}%</span>
                                    </div>
                                    {% endif %}
                                    {% if order.tax_cgst != 0 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'CGST'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.tax_cgst}}%</span>
                                    </div>
                                    {% endif %}
                                    {% if order.insurance != 0 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Insurance'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.insurance}}%</span>
                                    </div>
                                    {% endif %}
                                    {% if order.customs_value != 0 %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Customs Value'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.customs_value}}</span>
                                    </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if user.role_id in [1,2,3,6] or user.is_superuser %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.type == 1 and order.receiver_id is null %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Pickup Cost'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.courier_fee|currency}}
                                                {% if order.payments.where('payment_type', 'courier_fee').first.status == 3 %}
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                                {% endif %}
                                            </span>
                                        </div>
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Shipping Cost'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{settings.fees.delivery_cost|currency}} <!--{% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                            </span>
                                        </div>
                                    {% else %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Shipping Cost'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.courier_fee|currency}} <!--{% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                            </span>
                                        </div>
                                    {% endif %}
                                    {% if order.return_defray == 1 %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Return Package'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.package_fee|currency}}
                                                {% if order.payments.where('payment_type', 'package_fee').first.status == 2 %}
                                                    <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{'Canceled'|__}}</span>
                                                {% elseif order.requested == 12 %}
                                                    <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                                {% endif %}
                                            </span>
                                        </div>
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Return Courier Cost'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{order.return_courier_fee|currency}}</span> <!--{% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                        </div>
                                    {% else %}
                                        {% if order.payments.where('payment_type', 'return_package_fee').first %}
                                            <div class=\"kt-widget12__info\">
                                                <span class=\"kt-widget12__desc\">{{'Return Courier Cost'|__}}</span>
                                                <span class=\"kt-widget12__value\">
                                                    {{order.return_courier_fee|currency}}
                                                    {% if order.payments.where('payment_type', 'return_package_fee').first.status == 2 %}
                                                        <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{'Canceled'|__}}</span>
                                                    {% elseif order.payments.where('payment_type', 'return_package_fee').first.status == 3 %}
                                                        <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                                    {% endif %}
                                                </span>
                                            </div>
                                        {% endif %}
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if addShipmentForm != \"add_form_simple\" %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    {% if user.id == order.receiver_id %}
                                        <span class=\"kt-widget12__desc\">{{'Total Requested From You'|__}}</span>
                                    {% else %}
                                        <span class=\"kt-widget12__desc\">{{'Total Requested From The Receiver'|__}}</span>
                                    {% endif %}
                                    <span class=\"kt-widget12__value\">
                                        {{receiver_fee_unpaid|currency}}<!--{% if order.requested in [100,0,1] %} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                        {% if order.payments.where('item_id', this.param.id).where('for_id', order.receiver_id).first.status == 3 %}
                                            <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                        {% endif %}
                                    </span>
                                    <!--
                                        {% if order.type == 1 and order.receiver_id is null %}
                                            <span class=\"muted-text kt-font-danger\">{{'The correct fees will be applied after selecting the receiver address'|__}}</span>
                                        {% endif %}</span>
                                    -->
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    {% if user.id == order.sender_id %}
                                        <span class=\"kt-widget12__desc\">{{'Total Requested From You'|__}}</span>
                                    {% else %}
                                        <span class=\"kt-widget12__desc\">{{'Total Requested From The Sender'|__}}</span>
                                    {% endif %}
                                    <span class=\"kt-widget12__value\">
                                        {{sender_fee_unpaid|currency}}<!--{% if order.requested in [100,0,1] %} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                        {% if order.payments.where('item_id', this.param.id).where('for_id', order.sender_id).first.status == 3 %}
                                            <span class=\"btn btn-label-success btn-sm btn-bold btn-upper\">{{'Paid'|__}}</span>
                                        {% endif %}
                                    </span>
                                    <!--
                                        {% if order.type == 1 and order.receiver_id is null %}
                                            <span class=\"muted-text kt-font-danger\">{{'The correct fees will be applied after selecting the receiver address'|__}}</span>
                                        {% endif %}
                                    -->
                                </div>
                            </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Total received'|__}}</span>
                                    <span class=\"kt-widget12__value\">{{total_received|currency}}</span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Total remaining'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {% if order.return_defray == 1 and order.return_package_fee == 2 and order.requested in [4,5,6,8,9,10,11,12]%}
                                            {{total_remaining|currency}} <span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\">{{\"The requested amount of the sender was deducted from the return\"|__}}</span>
                                        {% else %}
                                            {{total_remaining|currency}}
                                        {% endif %} <!--{% if order.requested in [100,0,1] %}<span class=\"btn btn-label-danger btn-sm btn-bold btn-upper\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-original-title=\"{{'The actual cost will be calculated when we receive the package'|__}}\" data-skin=\"dark\">{{\"Not confirmed yet\"|__}}</span>{% endif %}-->
                                    </span>
                                </div>
                                 
                            </div>
                        {% endif %}
                    </div>
                </div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
</div>
<div class=\"row\">
    {% if settings.customers.customerPublic == 1%}
    <div class=\"col-xl-{% if order.type == 1 and order.receiver_id == null %}12{% else %}6{% endif %}\">
        <!--begin:: Widgets/Order Statistics-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
        \t<div class=\"kt-portlet__head\">
        \t\t<div class=\"kt-portlet__head-label\">
        \t\t\t<h3 class=\"kt-portlet__head-title\">
        \t\t\t\t{{'Sender Details'|__}}
        \t\t\t</h3>
        \t\t</div>
        \t</div>
        \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
        \t\t<div class=\"kt-widget12\">
        \t\t\t<div class=\"kt-widget12__content\">
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.sender_name %}
                                        {{order.sender_name|capitalize}}
                                    {% else%}
                                        {{order.sender.name|capitalize}}
                                    {% endif %}
                                    {% if order.sender.userverify_dateverified %}
                                        <i class=\"flaticon2-correct kt-font-info\"></i>
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Mobile'|__}}</span>
                                {% if order.sender_mobile %}
                                <span class=\"kt-widget12__value\">{{order.sender_mobile}}</span>
                                {% else%}
                                <span class=\"kt-widget12__value\">{{order.sender.mobile}}</span>
                                {% endif %}
                            </div>
                        </div>
                        {% if order.sender.email or order.sender.gender %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender.email %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Email'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{ order.sender.email }}</span>
                                    </div>
                                {% endif %}
                                {% if order.sender.gender %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Gender'|__}}</span>
                                        <span class=\"kt-widget12__value\">{{order.sender.gender}}</span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Sender Address'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.sender_addr %}
                                        {{order.sender_addr|capitalize}}
                                    {% else%}
                                        {{order.sender_address.name|capitalize}}
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                                <span class=\"kt-widget12__desc\">{{'Street'|__}}</span>
                                <span class=\"kt-widget12__value\">
                                    {% if order.sender_addr %}
                                        {{order.sender_addr|capitalize}}
                                    {% else%}
                                        {{order.sender_address.street}}
                                    {% endif%}
                                </span>
                            </div>
                        </div>
                        {% if order.sender_address.area or order.sender_address.thecity %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender_address.area %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'County'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {% if order.sender_area_id %}
                                                {{order.sender_area_id|capitalize}}
                                            {% else%}
                                                {{order.sender_address.area.name}}
                                            {% endif %}
                                        </span>
                                    </div>
                                {% endif %}
                                {% if order.sender_address.thecity %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'City'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {% if order.sender_city_id %}
                                                {{order.sender_city_id|capitalize}}
                                            {% else%}
                                                {{order.sender_address.thecity.name}}
                                            {% endif %}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if order.sender_address.thestate or order.sender_address.thecountry %}
                            <div class=\"kt-widget12__item\">
                                {% if order.sender_address.thestate %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'State'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.thestate.name}}
                                        </span>
                                    </div>
                                {% endif %}
                                {% if order.sender_address.thecountry %}
                                    <div class=\"kt-widget12__info\">
                                        <span class=\"kt-widget12__desc\">{{'Country'|__}}</span>
                                        <span class=\"kt-widget12__value\">
                                            {{order.sender_address.thecountry.name}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        {% endif %}
                        {% if addShipmentForm == \"add_form_advance\" %}
                        <div class=\"kt-widget12__item\">
                            <div class=\"kt-widget12__info\">
                        \t\t<div class=\"kt-widget15\">
                        \t\t\t<div class=\"kt-widget15__map\">
                        \t\t\t\t<div id=\"kt_map_sender\" style=\"height:320px;\"></div>
                        \t\t\t</div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--end:: Widgets/Order Statistics-->
    </div>
    {% endif %}
    {% if addShipmentForm != \"add_form_normal\" %}
    {% if order.type == 2 or order.receiver_id != null %}
        <div class=\"col-xl-6\">
            <!--begin:: Widgets/Order Statistics-->
            <div class=\"kt-portlet kt-portlet--height-fluid\">
            \t<div class=\"kt-portlet__head\">
            \t\t<div class=\"kt-portlet__head-label\">
            \t\t\t<h3 class=\"kt-portlet__head-title\">
            \t\t\t\t{{'Receiver Details'|__}}
            \t\t\t</h3>
            \t\t</div>
            \t</div>
            \t<div class=\"kt-portlet__body kt-portlet__body--fluid\">
            \t\t<div class=\"kt-widget12\">
            \t\t\t<div class=\"kt-widget12__content\">
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Name'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {% if order.receiver_name %}
                                            {{order.receiver_name|capitalize}}
                                        {% else%}
                                            {{order.receiver.name|capitalize}}
                                        {% endif %}
                                        {% if order.receiver.userverify_dateverified %}
                                            <i class=\"flaticon2-correct kt-font-info\"></i>
                                        {% endif %}
                                    </span>
                                </div>
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Mobile'|__}}</span>
                                    {% if order.receiver_mobile %}
                                    <span class=\"kt-widget12__value\">{{order.receiver_mobile|capitalize}}</span>
                                    {% else%}
                                    <span class=\"kt-widget12__value\">{{order.receiver.mobile}}</span>
                                    {% endif %}
                                </div>
                            </div>
                            {% if order.receiver.email or order.receiver.gender %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver.email %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Email'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{ order.receiver.email }}</span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver.gender %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Gender'|__}}</span>
                                            <span class=\"kt-widget12__value\">{{order.receiver.gender}}</span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Receiver Address'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {% if order.receiver_addr %}
                                            {{order.receiver_addr|capitalize}}
                                        {% else%}
                                            {{order.receiver_address.name|capitalize}}
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                                    <span class=\"kt-widget12__desc\">{{'Street'|__}}</span>
                                    <span class=\"kt-widget12__value\">
                                        {% if order.receiver_addr %}
                                            {{order.receiver_addr|capitalize}}
                                        {% else%}
                                            {{order.receiver_address.street}}
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                            {% if order.receiver_address.area or order.receiver_address.thecity %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver_address.area %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'County'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {% if order.receiver_area_id %}
                                                    {{order.receiver_area_id|capitalize}}
                                                {% else%}
                                                    {{order.receiver_address.area.name}}
                                                {% endif %}
                                            </span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver_address.thecity %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'City'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {% if order.receiver_city_id %}
                                                    {{order.receiver_city_id|capitalize}}
                                                {% else%}
                                                    {{order.receiver_address.thecity.name}}
                                                {% endif %}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if order.receiver_address.thestate or order.receiver_address.thecountry %}
                                <div class=\"kt-widget12__item\">
                                    {% if order.receiver_address.thestate %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'State'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.thestate.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                    {% if order.receiver_address.thecountry %}
                                        <div class=\"kt-widget12__info\">
                                            <span class=\"kt-widget12__desc\">{{'Country'|__}}</span>
                                            <span class=\"kt-widget12__value\">
                                                {{order.receiver_address.thecountry.name}}
                                            </span>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endif %}
                            {% if addShipmentForm != \"add_form_simple\" %}
                            <div class=\"kt-widget12__item\">
                                <div class=\"kt-widget12__info\">
                            \t\t<div class=\"kt-widget15\">
                            \t\t\t<div class=\"kt-widget15__map\">
                            \t\t\t\t<div id=\"kt_map_receiver\" style=\"height:320px;\"></div>
                            \t\t\t</div>
                                    </div>
                                </div>
                            </div>
                            {% endif %}
            \t\t\t</div>
            \t\t</div>
            \t</div>
            </div>
            <!--end:: Widgets/Order Statistics-->
        </div>
    {% endif %}
    {% endif %}
</div>
<div class=\"row\">
    <div class=\"col-xl-6\">
        <!--begin:: Widgets/Last Updates-->
        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">{{'Latest Updates'|__}}</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                <div class=\"kt-scroll\" data-scroll=\"true\" style=\"height: 300px\">
                    {% for activity in order.activities %}
                        <!--begin::widget 12-->
                        <div class=\"kt-widget4\">
                            <div class=\"kt-widget4__item\">
                                <span class=\"kt-widget4__icon\"><i class=\"flaticon-pie-chart-1 kt-font-info\"></i></span>
                                <div class=\"kt-widget4__info\">
        \t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"kt-widget4__username\">
                                        {% if activity.other %}
                                            {% set text = 'activity_'~activity.description %}
                                            {{text|__}}: {{activity.other}}
                                        {% else %}
                                            {% set text = 'activity_'~activity.description %}
            \t\t\t\t\t\t\t\t{{text|__}}
                                        {% endif %}
        \t\t\t\t\t\t\t</a>
        \t\t\t\t\t\t\t<p class=\"kt-widget4__text\">
        \t\t\t\t\t\t\t\t{{activity.created_at|date(settings.dateformat)}} {{activity.created_at|date('h:i')}} {% if activity.created_at|date('a')|__ %}{{activity.created_at|date('a')|__}}{% endif %}
        \t\t\t\t\t\t\t</p>
        \t\t\t\t\t\t</div>
                                <span class=\"kt-widget4__number kt-font-info\">{{activity.user.name}}</span>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    {% else %}
                        <div class=\"kt-notification\">
                            <div class=\"kt-notification__item\">
                                <div class=\"kt-notification__item-icon\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-svg-icon--brand\">
                                        <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                            <rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
                                            <path d=\"M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z\" fill=\"#000000\"/>
                                            <rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) \" x=\"16.3255682\" y=\"2.94551858\" width=\"3\" height=\"18\" rx=\"1\"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class=\"kt-notification__item-details\">
                                    <div class=\"kt-notification__item-title\">
                                        {{'No activities found'|__}}.
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <!--end:: Widgets/Last Updates-->
    </div>
    <div class=\"col-xl-6\" id=\"notes_continer\">

        <div class=\"kt-portlet kt-portlet--height-fluid\">
            <div class=\"kt-portlet__head\">
                <div class=\"kt-portlet__head-label\">
                    <h3 class=\"kt-portlet__head-title\">{{'Notes'|__}}</h3>
                </div>
            </div>
            <div class=\"kt-portlet__body\">
                {{ form_ajax('onNote', {success:\"flashRequest(data.type,data.message);\$('#note_message').val('');\", class:'kt_form notes' }) }}
                    <div class=\"form-group form-group-last kt-hide\">
                        <div class=\"alert alert-danger kt_form_msg_notes\" role=\"alert\">
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
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" id=\"note_message\" rows=\"3\" name=\"note\" placeholder=\"{{'Write your notes'|__}}\" required></textarea>
                    </div>
                    <div class=\"row\">
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-label-brand btn-bold\">{{'Add note'|__}}</button>
                            <button type=\"reset\" class=\"btn btn-clean btn-bold\">{{'Cancel'|__}}</button>
                        </div>
                    </div>
                {{ form_close() }}

                <div class=\"kt-separator kt-separator--space-lg kt-separator--border-dashed\"></div>
                <div id=\"notes\">
                    {% partial 'notes' item=order %}
                </div>
            </div>
        </div>
    </div>
    <!--
        <div class=\"col-xl-6 kt-todo\">
            <div class=\"kt-grid__item kt-grid__item--fluid  kt-portlet kt-portlet--height-fluid kt-todo__list\" id=\"kt_todo_list\">
                <div class=\"kt-portlet__body kt-portlet__body--fit-x\">
                    <div class=\"kt-todo__head\">
                        <div class=\"kt-todo__toolbar\">
                            <div class=\"kt-todo__info\">
                                <span class=\"kt-todo__name\">
                                    {{'Order Tasks'|__}}
                                </span>
                            </div>
                            <div class=\"kt-todo__details\">
                                <a href=\"javascript:;\" class=\"btn btn-label-success btn-upper btn-sm btn-bold\">{{'New Task'|__}}</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"kt-todo__body\">
                        {% for task in tasks %}
                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-id=\"1\" data-type=\"task\">
                                    <div class=\"kt-todo__info\">
                                        <div class=\"kt-todo__actions\">
                                            <label class=\"kt-checkbox kt-checkbox--single kt-checkbox--tick kt-checkbox--brand\">
                                                <input type=\"checkbox\">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">{{task.title}}</span>
                                        </div>
                                        <div class=\"kt-todo__labels\">
                                            <span class=\"kt-todo__label kt-badge kt-badge--unified-brand kt-badge--bold kt-badge--inline\">{{task.comment}}</span>
                                        </div>
                                    </div>
                                    <div class=\"kt-todo__datetime\" data-toggle=\"view\">
                                        8:30 PM
                                    </div>
                                    <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{task.user.name}}\">
                                        {% if task.user.avatar %}
                                             <span class=\"kt-media kt-media--sm kt-media--danger kt-hidden\" style=\"background-image: url('{{task.user.avatar.thumb(100, 100,'crop')}}')\">
                                                 <span></span>
                                             </span>
                                        {% else %}
                                            <div class=\"kt-todo__sender\" data-toggle=\"kt-tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{task.user.name}}\">
                                                <span class=\"kt-media kt-media--sm kt-media--brand\">
                                                    <span>{{task.user.name|capitalize|slice(0,2)}}</span>
                                                </span>
                                            </div>
                                       {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"kt-todo__items\" data-type=\"task\">
                                <div class=\"kt-todo__item kt-todo__item--unread\" data-type=\"task\">
                                    <div class=\"kt-todo__details\" data-toggle=\"view\">
                                        <div class=\"kt-todo__message\">
                                            <span class=\"kt-todo__subject\">{{'No tasks found'|__}}.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    {% if tasks %}
                        <div class=\"kt-todo__foot\">
                            <div class=\"kt-todo__toolbar\">
                                <div class=\"kt-todo__controls\">
                                     {{ tasks.render|raw }}
                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Previose page\">
                                         <i class=\"flaticon2-left-arrow\"></i>
                                     </button>

                                     <button class=\"kt-todo__icon\" data-toggle=\"kt-tooltip\" title=\"Next page\">
                                         <i class=\"flaticon2-right-arrow\"></i>
                                     </button>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    -->
</div>


<div class=\"modal fade\" id=\"paypal_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Pay by PayPal'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onCheckpaypal', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Price'|__}}</label>
                            <input class=\"form-control\" name=\"price\" value=\"10.00\" />
                           
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Pay'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>


<div class=\"modal fade\" id=\"assign_employee\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                {% if order.assigned_id %}
                <h5 class=\"modal-title\" >{{'Change Assign Employee'|__}}</h5>
                {% else %}
                <h5 class=\"modal-title\" >{{'Assign Employee'|__}}</h5>
                {% endif %}
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onAssign', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    {% if no_employees %}
                        <div class=\"alert alert-warning\" role=\"alert\">
                            <div class=\"alert-icon\"><i class=\"flaticon-warning\"></i></div>
                            <div class=\"alert-text\">
                                {{'No employees cover that shipment area, so here are all the employees to choose from'|__}}.
                            </div>
                            <div class=\"alert-close\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
                                </button>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To who?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"assigned_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for employee in employees %}
                                    <option value=\"{{employee.id}}\">{{employee.name}}</option>
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
<div class=\"modal fade\" id=\"assign_manifest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Assign Manifest'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onManifest', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To which manifest?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"manifest_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for manifest in manifestes %}
                                    <option value=\"{{manifest.id}}\">#{{manifest.id}} {{manifest.driver.name}}</option>
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
<div class=\"modal fade\" id=\"transfer_office\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Transfer to office'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onTransfer', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"form-group col-lg-12\">
                            <label>{{'To which office?'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control \" name=\"office_id\" data-live-search=\"true\">
                                <option data-hidden=\"true\"></option>
                                {% for office in offices %}
                                    <option value=\"{{office.id}}\">{{office.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary\">{{'Transfer'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"postpone\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Postpone'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>
            {{ form_ajax('onPostpone', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'To Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <div class=\"input-group date\">
                            <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{now|date_modify(\"+1 day\")|date(settings.dateformat)}}\" required>
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">
                                    <i class=\"la la-calendar\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Postpone'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"refuse\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Refuse'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onRefuse', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}</label>
                        <textarea class=\"form-control\" name=\"message\"></textarea>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Refuse'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"discards\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Transfer as discards'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onDiscards', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"form-group col-lg-12\">
                        <label>{{'Reason'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control \" id=\"discard_reason\" name=\"message\" data-live-search=\"true\" required>
                            <option data-hidden=\"true\"></option>
                            <option value=\"1\">{{'Receiver request'|__}}</option>
                            <option value=\"2\">{{'Receiver evade'|__}}</option>
                            <option value=\"3\">{{'Sender request'|__}}</option>
                        </select>
                    </div>
                </div>
                <div class=\"discard_reason_receiver kt-hidden\">
                    <div class=\"row\">
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
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"col-lg-9 col-xl-6\">
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" {% if order.return_package_fee == 1 %}checked{% endif %} required> {{'Receiver'|__}}
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" {% if order.return_package_fee == 2 %}checked{% endif %} required> {{'Sender'|__}}
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        {% for payment in order.payments.where('for_id', order.receiver_id) %}
                            <label class=\"col-lg-9 col-form-label kt-align-left\" for=\"payment_{{payment.id}}\">
                                {% if payment.payment_type %}{{payment.payment_type|__}}: {% endif %}{{'Is it paid ?'|__}}
                            </label>
                            <div class=\"col-lg-3\">
                                <div class=\"kt-checkbox-single\">
                                    <label class=\"kt-checkbox\">
                                        <input type=\"checkbox\" name=\"payments[]\" id=\"payment_{{payment.id}}\" value=\"{{payment.id}}\">
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                <button type=\"submit\" class=\"btn btn-primary\">{{'Discard'|__}}</button>
            </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<!-- receive COD -->
<div class=\"modal fade\" id=\"receivedCOD\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Client information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onDeliverCOD', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"{{order.sender.id}}\" selected>{{order.sender.name}}</option>   
                                {% if user.hasUserPermission('client', 'c') %}
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                {% endif %}

                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                                <option data-hidden=\"true\"></option>
                                <option value=\"{{order.sender_address.id}}\" selected>{{order.sender_address.name}}</option> 
                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                            <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        {% if settings.customers.enable_gender == 1 %}
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Gender'|__}}</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" {% if settings.customers.gender == 'male' %}checked{%endif%}> {{'Male'|__}}
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" {% if settings.customers.gender == 'female' %}checked{%endif%}> {{'Female'|__}}
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"location-receiver\">

                                        <div class=\"row\">
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" value=\"{{settings.customers.street_address_map}}\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {% if settings.customers.enable_postalCode == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_postalCode == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"{{settings.customers.postal_code}}\" >
                                            </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"row\">
                                            {% if settings.customers.enable_state == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {%if  settings.customers.enable_state == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_county == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for county in areas %}
                                                        <option value=\"{{county.id}}\" {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.name}}</option>
                                                
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                        </div>
                                        {% if settings.customers.enable_mapAddress == 1 %}
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Google Map'|__}}</label>
                                                <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                            </div>
                                        </div>
                                        {% endif %}
                                        {% if settings.customers.enable_createAccount == 1 %}
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" {%if settings.customers.connect ==1 %}checked{% endif %}> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client address'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" value=\"{{settings.customers.street_address_map}}\"  required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {%if settings.customers.enable_postalCode == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_postalCode == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" value=\"{{settings.customers.postal_code}}\">
                                            </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"row\">
                                            {% if settings.customers.enable_state == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {% if settings.customers.enable_state == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_county == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'County'|__}}</label>
                                                <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for county in areas %}
                                                        <option value=\"{{county.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{county.lang(currentLang).name}}\"{% endif %} {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                        </div>
                                        {% if settings.customers.enable_mapAddress == 1 %}
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Google Map'|__}}</label>
                                                <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                            </div>
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        
                        <div class=\"form-group col-lg-12  package_fee\">
                            <label>{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"{{order.package_fee}}\" required />
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
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-info\">{{'Deliver'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>


<!-- end receive COD -->
<div class=\"modal fade\" id=\"received\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" >{{'Receiver information'|__}}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                </button>
            </div>

            {{ form_ajax('onDeliver', { success: 'created successfully!', flash: true, class: 'kt_form', novalidate: true }) }}
                <div class=\"modal-body\">
                    <div class=\"row\">

                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver'|__}}/{{'Client'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control clients col-lg-12\" name=\"receiver_id\" id=\"receiver_id\" required>
                                <option data-hidden=\"true\"></option>
                                {% if order.requested ==12 %}
                                    {% if order.sender %}
                                        <option value=\"{{order.sender.id}}\" selected>{{order.sender.name}}</option>
                                    {% endif %}
                                {% else %}
                                    {% if order.receiver %}
                                        <option value=\"{{order.receiver.id}}\" selected>{{order.receiver.name}}</option>
                                    {% endif %}
                                {% endif %}    
                                {% if user.hasUserPermission('client', 'c') %}
                                    <option value=\"new\" data-icon=\"flaticon2-add\">{{'Add New'|__}}</option>
                                {% endif %}

                            </select>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label>{{'Receiver Address'|__}}/{{'Client Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control receiver_address_id\" name=\"receiver_address_id\" id=\"receiver_address_id\" data-live-search=\"true\" title=\"{{'Please select receiver first'|__}}\" required>
                                <option data-hidden=\"true\"></option>
                                {% if order.requested ==12 %}
                                    {% if order.sender %}
                                        <option value=\"{{order.sender_address.id}}\" selected>{{order.sender_address.name}}</option>
                                    {% endif %}
                                {% else %}
                                    {% if order.receiver %}
                                        <option value=\"{{order.receiver_address.id}}\" selected>{{order.receiver_address.name}}</option>
                                    {% endif %}
                                {% endif %}    
                            </select>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiver\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-lg-12\">
                                            <label>{{'Client Name'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control name\" name=\"receiver[name]\" required />
                                        </div>
                                        <div class=\"form-group {%if settings.customers.enable_gender == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                            <label>{{'Mobile'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                            <input type=\"text\" class=\"form-control mobile\" name=\"receiver[mobile]\" required />
                                        </div>
                                        {% if settings.customers.enable_gender == 1 %}
                                        <div class=\"form-group col-lg-6\">
                                            <label>{{'Gender'|__}}</label>
                                            <div class=\"kt-radio-inline\">
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"male\" {% if settings.customers.gender == 'male' %}checked{%endif%}> {{'Male'|__}}
                                                    <span></span>
                                                </label>
                                                <label class=\"kt-radio\">
                                                    <input type=\"radio\" name=\"receiver[gender]\" class=\"gender\" value=\"female\" {% if settings.customers.gender == 'female' %}checked{%endif%}> {{'Female'|__}}
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"location-receiver\">

                                        <div class=\"row\">
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiver=\"route\" name=\"receiver[street_address]\"  rel=\"receiver\" value=\"{{settings.customers.street_address_map}}\" required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"receiver[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"receiver[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"receiver[url]\" />
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {% if settings.customers.enable_postalCode == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiver=\"country\" data-live-search=\"true\" name=\"receiver[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_postalCode == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-receiver=\"postal_code\" name=\"receiver[postal_code]\"  value=\"{{settings.customers.postal_code}}\" >
                                            </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"row\">
                                            {% if settings.customers.enable_state == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiver=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiver[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {%if  settings.customers.enable_state == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiver=\"locality\" name=\"receiver[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_county == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'County'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <select class=\"form-control area_id\" data-receiver=\"sublocality\" name=\"receiver[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\" required>
                                                    <option data-hidden=\"true\"></option>
                                                    {% for county in areas %}
                                                        <option value=\"{{county.id}}\" {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.name}}</option>
                                                
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                        </div>
                                        {% if settings.customers.enable_mapAddress == 1 %}
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Google Map'|__}}</label>
                                                <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                                                <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                            </div>
                                        </div>
                                        {% endif %}
                                        {% if settings.customers.enable_createAccount == 1 %}
                                        <div class=\"form-group row\">
                                            <div class=\"col-lg-12\">
                                                <div class=\"kt-checkbox-single\">
                                                    <label class=\"kt-checkbox\">
                                                        <input type=\"checkbox\" name=\"connect\" class=\"connect\" value=\"receiver\" {%if settings.customers.connect ==1 %}checked{% endif %}> {{'Connect client'|__}}: {{'create an account for the client'|__}}
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row align-items-center kt-hidden\" id=\"connect_receiver\">
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                            <div class=\"col-md-12\">
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
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 kt-hidden\" id=\"addnewreceiveraddress\">
                            <div class=\"kt-portlet kt-portlet--bordered kt-portlet--head--noborder kt-margin-b-0\">
                                <div class=\"kt-portlet__head\">
                                    <div class=\"kt-portlet__head-label\">
                                        <h3 class=\"kt-portlet__head-title\">
                                            {{'Add a new client address'|__}}
                                        </h3>
                                    </div>
                                </div>
                                <div class=\"kt-portlet__body\">
                                    <div class=\"location-receiveraddress\">
                                        <div class=\"row\">
                                            {% if settings.customers.enable_mapAddress == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Address'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                                <input type=\"text\" class=\"form-control address street_addr\" data-receiveraddress=\"route\" name=\"receiveraddress[street_address]\"  rel=\"receiveraddress\" value=\"{{settings.customers.street_address_map}}\"  required/>
                                                <input type=\"hidden\" class=\"form-control lat\" data-receiveraddress=\"lat\" name=\"receiveraddress[lat]\" />
                                                <input type=\"hidden\" class=\"form-control lng\" data-receiveraddress=\"lng\" name=\"receiveraddress[lng]\" />
                                                <input type=\"hidden\" class=\"form-control url\" data-receiveraddress=\"url\" name=\"receiveraddress[url]\" />
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {%if settings.customers.enable_postalCode == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'Country'|__}}</label>
                                                <select class=\"form-control country_id\" data-receiveraddress=\"country\" data-live-search=\"true\" name=\"receiveraddress[country]\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for country in countries %}
                                                        <option value=\"{{country.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{country.lang(currentLang).name}}\"{% endif %}>{{country.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_postalCode == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'Postal Code'|__}}</label>
                                                <input class=\"form-control postal_code\" type=\"text\" data-sendreceiveraddresser=\"postal_code\" name=\"receiveraddress[postal_code]\" value=\"{{settings.customers.postal_code}}\">
                                            </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"row\">
                                            {% if settings.customers.enable_state == 1 %}
                                            <div class=\"form-group col-lg-6\">
                                                <label>{{'State / Region'|__}}</label>
                                                <select class=\"form-control state_id\" data-receiveraddress=\"administrative_area_level_1\" title=\"{{'Please select country first'|__}}\" name=\"receiveraddress[state]\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for state in states %}
                                                        <option value=\"{{state.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{state.lang(currentLang).name}}\"{% endif %} {% if settings.customers.state == state.id  %} selected {% endif %}>{{state.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                            <div class=\"form-group {% if settings.customers.enable_state == 1 %}col-lg-6{%else%}col-lg-12{%endif%}\">
                                                <label>{{'City'|__}}</label>
                                                <select class=\"form-control city_id\" data-receiveraddress=\"locality\" name=\"receiveraddress[city]\" title=\"{{'Please select state first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for city in cities %}
                                                        <option value=\"{{city.id}}\">{{city.name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% if settings.customers.enable_county == 1 %}
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'County'|__}}</label>
                                                <select class=\"form-control area_id\" data-receiveraddress=\"sublocality\" name=\"receiveraddress[county]\" title=\"{{'Please select city first'|__}}\" data-live-search=\"true\">
                                                    <option data-hidden=\"true\"></option>
                                                    {% for county in areas %}
                                                        <option value=\"{{county.id}}\" {% if currentLang != 'en' %}data-subtext=\"{{county.lang(currentLang).name}}\"{% endif %} {% if settings.customers.county == county.id  %} selected {% endif %}>{{county.lang('en').name}}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            {% endif %}
                                        </div>
                                        {% if settings.customers.enable_mapAddress == 1 %}
                                        <div class=\"row\">
                                            <div class=\"form-group col-lg-12\">
                                                <label>{{'Google Map'|__}}</label>
                                                <div class=\"col-sm-12 map_canvas map_receiveraddress\"></div>
                                                <span class=\"form-text text-muted\">{{'Change the pin to select the right location'|__}}</span>
                                            </div>
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"kt-portlet__foot\">
                                    <div class=\"row align-items-center\">
                                        <div class=\"col-lg-12\">
                                            <button type=\"button\" class=\"btn btn-success save\">{{'Save'|__}}</button>
                                            <button type=\"button\" class=\"btn btn-secondary cancel\">{{'Cancel'|__}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit\"></div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Courier Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"courier_fee\" name=\"courier_fee\" value=\"{{order.courier_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        {%if settings.shipments.enable_return_package == 1 %}
                            {% if order.requested != 12 %}
                            <div class=\"form-group col-lg-12\">
                                <label>{{'Return package cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                                <div class=\"kt-radio-inline\">
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"1\" {% if order.return_defray == 1 %}checked{% endif %} required> {{'Yes'|__}}
                                        <span></span>
                                    </label>
                                    <label class=\"kt-radio\">
                                        <input type=\"radio\" name=\"return_defray\" class=\"return_defray\" value=\"2\" {% if order.return_defray == 2 %}checked{% endif %}  required> {{'No'|__}}
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            {% endif %}
                        {% endif %}
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Package Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' id=\"package_fee\" name=\"package_fee\" value=\"{{order.package_fee}}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Return Shipment Cost'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group\">
                                {% if primary_currency.place_symbol_before == 1 %}
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                                    <input type=\"text\" class=\"form-control decimal\" data-type='currency' name=\"return_courier_fee\" id=\"return_courier_fee\" value=\"{% if order.package_fee %}{{order.return_courier_fee}}{% else %}{{settings.fees.delivery_cost_back_receiver}}{% endif %}\" required />
                                {% if primary_currency.place_symbol_before == 0 %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\">
                                            {{primary_currency.currency_symbol}}
                                        </span>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12 {% if order.return_defray != 1 %}kt-hidden{% endif %} package_fee\">
                            <label>{{'Return package fees responsiable'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"kt-radio-inline\">
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"1\" {% if order.return_package_fee != 2 %}checked{% endif %} required> {{'Receiver'|__}}
                                    <span></span>
                                </label>
                                <label class=\"kt-radio\">
                                    <input type=\"radio\" name=\"return_package_fee\" class=\"return_package_fee\" value=\"2\" required {% if order.return_package_fee == 2 %}checked{% endif %}> {{'Sender'|__}}
                                    <span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{{'Close'|__}}</button>
                    <button type=\"button\" class=\"btn btn-info save\">{{'Confirm'|__}}</button>
                    <button type=\"submit\" class=\"btn btn-primary kt-hidden\">{{'Deliver'|__}}</button>
                </div>
            {{ form_close() }}
        </div>
    </div>
</div>
<!--
{% put styles %}
    <style>
        .kt-todo .kt-todo__content {
          width: 100%; }

        .kt-todo .kt-todo__aside {
          padding: 20px;
          width: 275px; }
          @media (min-width: 1025px) {
            .kt-todo .kt-todo__aside {
              margin-right: 25px; } }
          .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item {
            margin-bottom: 0.5rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem;
              padding-left: 1.9rem;
              font-weight: 600;
              color: #48465b;
              font-size: 1.1rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
              padding: 0.6rem 20px;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link i {
                color: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #8e96b8; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon {
                text-align: center;
                margin: 0 0.7rem 0 -0.23rem; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon.kt-nav__link-icon--size {
                  font-size: 0.9rem;
                  color: #93a2dd; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon svg {
                  width: 20px;
                  height: 20px; }
                .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-icon g [fill] {
                  fill: #93a2dd; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link .kt-nav__link-text {
                font-weight: 500;
                color: #595d6e; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child {
              margin-bottom: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item:last-child .kt-nav__link .kt-nav__link-icon {
                font-size: 0.9rem; }
            .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link {
              background-color: #f7f8fa;
              border-radius: 4px; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link i, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link i {
                color: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link:hover g [fill], .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.hover .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--selected .kt-nav__link .kt-nav__link-text, .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item.kt-nav__item--active .kt-nav__link .kt-nav__link-text {
                color: #5d78ff; }

        .kt-todo .kt-todo__header {
          padding: 13px 25px;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-wrap: wrap;
          flex-wrap: wrap;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          width: 100%; }
          .kt-todo .kt-todo__header .kt-todo__title {
            margin: 0;
            font-size: 1.4rem;
            padding-right: 2rem;
            font-weight: 600;
            color: #595d6e; }
          .kt-todo .kt-todo__header .kt-todo__nav {
            padding: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            margin-top: 0.2rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .btn {
              margin-right: 1rem; }
            .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link {
              padding: 0.5rem 1.2rem;
              font-weight: 500;
              color: #74788d;
              border-radius: 4px; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:not(:first-child):not(:last-child) {
                margin: 0 0.2rem; }
              .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link:hover, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--selected, .kt-todo .kt-todo__header .kt-todo__nav .kt-todo__link.kt-todo__link--active {
                background-color: #f7f8fa;
                color: #5d78ff;
                border-radius: 4px; }
          .kt-todo .kt-todo__header .kt-todo__users {
            line-height: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
            .kt-todo .kt-todo__header .kt-todo__users .kt-media {
              position: relative;
              z-index: 0; }
              .kt-todo .kt-todo__header .kt-todo__users .kt-media:not(:first-child):not(:last-child) {
                margin-left: -0.1rem; }
          @media (max-width: 1024px) {
            .kt-todo .kt-todo__header {
              padding: 10px 15px; } }

        .kt-todo .kt-todo__icon {
          border: 0;
          background: none;
          outline: none !important;
          -webkit-box-shadow: none;
          box-shadow: none;
          outline: none !important;
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          height: 35px;
          width: 35px;
          background-color: #f7f8fa;
          -webkit-transition: all 0.3s ease;
          transition: all 0.3s ease;
          cursor: pointer;
          margin: 0;
          border-radius: 0;
          border-radius: 4px; }
          .kt-todo .kt-todo__icon i {
            font-size: 1.1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--sm {
            height: 26px;
            width: 26px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--sm i {
              font-size: 0.8rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--md {
            height: 30px;
            width: 30px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--md i {
              font-size: 1rem; }
          .kt-todo .kt-todo__icon.kt-todo__icon--light {
            background-color: transparent; }
          .kt-todo .kt-todo__icon i {
            color: #8e96b8; }
          .kt-todo .kt-todo__icon g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease;
            fill: #8e96b8; }
          .kt-todo .kt-todo__icon:hover g [fill] {
            -webkit-transition: fill 0.3s ease;
            transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--active, .kt-todo .kt-todo__icon:hover {
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            background-color: #ebedf2; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active.kt-todo__icon--light, .kt-todo .kt-todo__icon:hover.kt-todo__icon--light {
              background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active i, .kt-todo .kt-todo__icon:hover i {
              color: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active g [fill], .kt-todo .kt-todo__icon:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #5d78ff; }
            .kt-todo .kt-todo__icon.kt-todo__icon--active:hover g [fill], .kt-todo .kt-todo__icon:hover:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
          .kt-todo .kt-todo__icon.kt-todo__icon--back {
            background-color: transparent; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back i {
              color: #8e96b8;
              font-size: 1.5rem; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease;
              fill: #8e96b8; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
              -webkit-transition: fill 0.3s ease;
              transition: fill 0.3s ease; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back svg {
              height: 32px;
              width: 32px; }
            .kt-todo .kt-todo__icon.kt-todo__icon--back:hover {
              background-color: transparent; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover i {
                color: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease;
                fill: #5d78ff; }
              .kt-todo .kt-todo__icon.kt-todo__icon--back:hover:hover g [fill] {
                -webkit-transition: fill 0.3s ease;
                transition: fill 0.3s ease; }

        .kt-todo .kt-todo__list {
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important;
          padding: 0; }
          .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin-right: 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-checkbox {
                  margin: 0;
                  padding-left: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__check .kt-todo__icon {
                  margin-left: 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__panel {
                display: none;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .btn {
                padding: 0.6rem 1rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions.kt-todo__actions--expanded .kt-todo__panel {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon {
                margin-right: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__icon.kt-todo__icon--back {
                  margin-right: 2.5rem; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              margin: 0.4rem 0; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                margin-left: 0.5rem; }
              .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                color: #74788d;
                font-size: 1rem;
                font-weight: 500;
                margin-right: 1rem;
                cursor: pointer;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                padding: 0.5rem 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  color: #5d78ff; }
            .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar .kt-todo__sep {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              height: 1rem;
              width: 1rem; }
          .kt-todo .kt-todo__list .kt-todo__body {
            padding: 20px 0 0 0; }
            .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
              padding: 0;
              margin-bottom: 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                padding: 12px 25px;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                cursor: pointer; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      padding: 8px 0; } }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info {
                      min-width: 210px; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin: 0.3rem 10px 0 0;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions {
                        min-width: 70px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-checkbox {
                      margin: 0;
                      padding: 0;
                      margin-right: 10px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon {
                      height: 22px;
                      width: 22px; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                        font-size: 1rem;
                        color: #ebedf2; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon:hover i {
                        color: rgba(255, 184, 34, 0.5) !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__actions .kt-todo__icon.kt-todo__icon--on i {
                        color: #ffb822 !important; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-right: 30px;
                    width: 175px; }
                    @media screen\\0 {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        min-width: 175px; } }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                      margin-right: 10px;
                      min-width: 30px !important; }
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media span {
                        min-width: 30px !important; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                      font-size: 1rem;
                      color: #595d6e;
                      font-weight: 500; }
                    @media (max-width: 1400px) {
                      .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender {
                        display: block;
                        width: 70px;
                        margin-right: 10px; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-todo__author {
                          display: block; }
                        .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__info .kt-todo__sender .kt-media {
                          margin-bottom: 5px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  margin-top: 5px; }
                  @media screen\\0 {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details {
                      width: 0;
                      height: 0; } }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__subject {
                    font-size: 1rem;
                    color: #595d6e;
                    font-weight: 500; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__message .kt-todo__summary {
                    font-size: 1rem;
                    color: #a2a5b9;
                    font-weight: 400;
                    text-overflow: ellipsis; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    margin-top: 5px; }
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__details .kt-todo__labels .kt-todo__label {
                      margin-right: 5px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                  font-size: 1rem;
                  color: #a2a5b9;
                  font-weight: 400;
                  margin-right: 1rem;
                  margin-top: 5px;
                  width: 85px;
                  text-align: right; }
                  @media (max-width: 1400px) {
                    .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item .kt-todo__datetime {
                      width: 70px; } }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected {
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease;
                  background-color: #f7f8fa; }
                  .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item:hover .kt-todo__info .kt-todo__actions .kt-todo__icon i, .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--selected .kt-todo__info .kt-todo__actions .kt-todo__icon i {
                    font-size: 1rem;
                    color: #e2e5ec; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__sender .kt-todo__author {
                  color: #48465b;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__details .kt-todo__message .kt-todo__subject {
                  color: #595d6e;
                  font-weight: 600; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item.kt-todo__item--unread .kt-todo__datetime {
                  color: #48465b;
                  font-weight: 600; }
          .kt-todo .kt-todo__list .kt-todo__foot {
            margin-top: 10px;
            padding: 0 25px; }
            .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar {
              float: right; }
              .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-left: 1rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__icon {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__sort {
                  margin-left: 0.5rem; }
                .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages {
                  margin-left: 0.5rem; }
                  .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage {
                    color: #74788d;
                    font-size: 1rem;
                    font-weight: 500;
                    margin-right: 1rem;
                    cursor: pointer;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    padding: 0.5rem 0; }
                    .kt-todo .kt-todo__list .kt-todo__foot .kt-todo__toolbar .kt-todo__controls .kt-todo__pages .kt-todo__perpage:hover {
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease;
                      color: #5d78ff; }

        .kt-todo .kt-todo__view {
          padding: 0;
          display: -webkit-box !important;
          display: -ms-flexbox !important;
          display: flex !important; }
          .kt-todo  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%;
            padding-bottom: 25px; }
            @media (max-width: 1024px) {
              .kt-todo  {
                padding-bottom: 15px; } }
            .kt-todo  .kt-todo__head {
              width: 100%; }
              .kt-todo  .kt-todo__head .kt-todo__toolbar {
                cursor: pointer;
                padding-top: 0.9rem;
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                  display: none; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-media {
                    margin-right: 0.7rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name {
                    color: #48465b;
                    font-weight: 600;
                    font-size: 1.1rem;
                    padding-right: 0.5rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__info .kt-todo__name:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
                  padding: 0.5rem 0; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__icon {
                    margin: 0.4rem 0.5rem 0.4rem 0;
                    font-size: 0.7rem;
                    color: #5d78ff; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .kt-todo__desc {
                    color: #74788d;
                    font-weight: 400;
                    font-size: 1rem; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn {
                    padding: 8px 1rem; }
                    .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__details .btn:last-child {
                      margin-left: 0.5rem; }
                .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__head .kt-todo__toolbar .kt-todo__actions .kt-todo__datetime {
                    color: #a2a5b9;
                    font-weight: 500;
                    font-size: 1rem;
                    margin-right: 1.5rem; }
            .kt-todo  .kt-todo__body {
              padding-bottom: 25px;
              -webkit-box-flex: 1;
              -ms-flex-positive: 1;
              flex-grow: 1; }
              .kt-todo  .kt-todo__body .kt-todo__title {
                padding-top: 1rem; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__text {
                  color: #48465b;
                  font-size: 1.5rem;
                  font-weight: 600;
                  margin-top: 1rem;
                  display: block; }
                .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  padding: 0.8rem 0 2rem 0; }
                  .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__dot {
                      padding-right: 0.5rem;
                      font-size: 1.2rem; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label .kt-todo__text {
                      color: #a2a5b9;
                      font-weight: 500;
                      font-size: 1rem;
                      margin: 0; }
                    .kt-todo  .kt-todo__body .kt-todo__title .kt-todo__labels .kt-todo__label:last-child {
                      padding-left: 1.5rem; }
                .kt-todo  .kt-todo__body .kt-todo__title:hover {
                  color: #5d78ff;
                  -webkit-transition: all 0.3s ease;
                  transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__desc {
                padding-bottom: 10px;
                display: block;
                color: #a2a5b9;
                font-weight: 500; }
              .kt-todo  .kt-todo__body .kt-todo__files {
                padding-top: 10px; }
                .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file {
                  display: block;
                  padding-top: 0.7rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file i {
                    padding-right: 0.5rem; }
                  .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a {
                    color: #74788d;
                    font-weight: 500; }
                    .kt-todo  .kt-todo__body .kt-todo__files .kt-todo__file a:hover {
                      color: #5d78ff;
                      -webkit-transition: all 0.3s ease;
                      transition: all 0.3s ease; }
              .kt-todo  .kt-todo__body .kt-todo__comments {
                padding-bottom: 20px; }
                .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment {
                  padding-top: 3rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment:last-child {
                    padding-top: 2rem; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-media {
                      margin-right: 1rem; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username {
                      -webkit-box-flex: 1;
                      -ms-flex-positive: 1;
                      flex-grow: 1;
                      color: #595d6e;
                      font-weight: 500; }
                      .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__username:hover {
                        color: #5d78ff;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease; }
                    .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__box .kt-todo__date {
                      color: #a2a5b9;
                      font-weight: 500; }
                  .kt-todo  .kt-todo__body .kt-todo__comments .kt-todo__comment .kt-todo__text {
                    padding-left: 3.3rem;
                    display: block;
                    color: #a2a5b9;
                    font-weight: 500; }
            .kt-todo  .kt-todo__foot .kt-todo__form {
              margin-top: 20px;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -ms-flex-direction: column;
              flex-direction: column;
              border: 1px solid #ebedf2;
              border-radius: 4px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 20px 15px 20px 25px;
                border-bottom: 1px solid #ebedf2; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__title {
                  margin-right: 10px;
                  font-size: 1.2rem;
                  font-weight: 500;
                  color: #595d6e; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__head .kt-todo__actions .kt-todo__icon {
                    margin-left: 5px; }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body {
                padding: 0 0 10px 0; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow {
                  border: 0;
                  padding: 0;
                  border-radius: 0; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    padding: 15px 25px;
                    font-family: Poppins, Helvetica, sans-serif; }
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-container.ql-snow .ql-editor.ql-blank:before {
                      left: 25px;
                      color: #a2a5b9;
                      font-weight: 400;
                      font-style: normal; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  height: 50px;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  border-radius: 0;
                  border: 0;
                  border-top: 0;
                  border-bottom: 1px solid #ebedf2;
                  padding-left: 18px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label, .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .ql-toolbar.ql-snow .ql-picker-label:before {
                    font-weight: 400;
                    font-size: 1rem;
                    color: #74788d;
                    font-family: Poppins, Helvetica, sans-serif; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                  display: inline-block;
                  padding: 0 25px; }
                  @media (max-width: 1024px) {
                    .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__body .kt-todo__attachments {
                      width: 100%; } }
              .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                width: 100%;
                padding: 20px 15px 20px 25px; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-flex: 1;
                  -ms-flex-positive: 1;
                  flex-grow: 1;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(1) {
                    padding-left: 20px;
                    padding-right: 20px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .btn-group .btn:nth-child(2) {
                    padding-left: 6px;
                    padding-right: 9px; }
                  .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__primary .kt-todo__panel {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    margin-left: 1rem; }
                .kt-todo  .kt-todo__foot .kt-todo__form .kt-todo__foot .kt-todo__secondary {
                  display: -webkit-box;
                  display: -ms-flexbox;
                  display: flex;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  margin: 0; }

        .kt-todo .kt-portlet__head {
          min-height: 80px !important;
          padding: 10px 25px; }

        @media (max-width: 1024px) {
          .kt-todo {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0; }
            .kt-todo .kt-todo__aside {
              background: #fff;
              margin: 0; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link-title {
                padding-left: 1.2rem; }
              .kt-todo .kt-todo__aside .kt-todo__nav .kt-nav .kt-nav__item .kt-nav__link {
                padding: 0.75rem 10px; }
            .kt-todo .kt-todo__list {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex; }
              .kt-todo .kt-todo__list.kt-todo__list--hidden {
                display: none; }
              .kt-todo .kt-todo__list .kt-portlet__head {
                min-height: 60px !important;
                padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__head {
                padding: 0; }
                .kt-todo .kt-todo__list .kt-todo__head .kt-todo__toolbar {
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items {
                overflow: auto;
                margin-bottom: 15px; }
                .kt-todo .kt-todo__list .kt-todo__body .kt-todo__items .kt-todo__item {
                  min-width: 500px;
                  padding: 10px 15px; }
              .kt-todo .kt-todo__list .kt-todo__foot {
                padding: 0 15px; }
            .kt-todo .kt-todo__view {
              display: none; }
              .kt-todo .kt-todo__view .kt-todo__head .kt-todo__toolbar .kt-todo__icon.kt-todo__icon--back {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
              .kt-todo .kt-todo__view.kt-todo__view--shown {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
            .kt-todo .kt-portlet__head {
              min-height: 60px !important;
              padding: 10px 15px; } }

        @media (max-width: 768px) {
          .kt-todo .kt-todo__head .kt-todo__nav .btn {
            margin-right: 0.2rem; } }

        .kt-todo__aside-close {
          display: none; }

        @media (max-width: 1024px) {
          .kt-todo__aside {
            z-index: 1001;
            position: fixed;
            -webkit-overflow-scrolling: touch;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            -webkit-transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            width: 300px !important;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            left: -320px; }
            .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 0; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
          .kt-todo__aside--right .kt-todo__aside {
            right: -320px;
            left: auto; }
            .kt-todo__aside--right .kt-todo__aside.kt-todo__aside--on {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              right: 0;
              left: auto; }
          .kt-todo__aside-close {
            width: 25px;
            height: 25px;
            top: 1px;
            z-index: 1002;
            -webkit-transition: left 0.3s ease, right 0.3s ease;
            transition: left 0.3s ease, right 0.3s ease;
            position: fixed;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 3px;
            cursor: pointer;
            outline: none !important;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            left: -25px; } }
          @media screen\\0  and (max-width: 1024px) {
            .kt-todo__aside-close {
              -webkit-transition: none !important;
              transition: none !important; } }

        @media (max-width: 1024px) {
            .kt-todo__aside-close > i {
              line-height: 0;
              font-size: 1.4rem; }
            .kt-todo__aside-close:hover {
              text-decoration: none; }
            .kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: -25px; }
            .kt-todo__aside--on .kt-todo__aside-close {
              -webkit-transition: left 0.3s ease, right 0.3s ease;
              transition: left 0.3s ease, right 0.3s ease;
              left: 274px; }
            .kt-todo__aside--on.kt-todo__aside--right .kt-todo__aside-close {
              left: auto;
              right: 274px; }
          .kt-todo__aside-overlay {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: hidden;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.1);
            -webkit-animation: kt-animate-fade-in .3s linear 1;
            animation: kt-animate-fade-in .3s linear 1; }
          .kt-todo__aside-overlay {
            background: rgba(0, 0, 0, 0.05); }
          .kt-todo__aside-close {
            background-color: #f7f8fa; }
            .kt-todo__aside-close > i {
              color: #74788d; }
            .kt-todo__aside-close:hover {
              background-color: transparent; }
              .kt-todo__aside-close:hover > i {
                color: #5d78ff; } }

        @media (max-width: 350px) {
          .kt-todo__aside {
            width: 90% !important; } }
    </style>
{% endput %}
-->
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
        .pac-container {
            z-index: 9999;
        }
        @media (max-width: 576px) {
            .kt-widget.kt-widget--user-profile-3 .kt-widget__top .kt-widget__content .kt-widget__info .kt-widget__stats .kt-widget__item {
                width: 100%;
                margin: auto 0 !important;
            }
        }
        .notes_scroll,.notes_scroll .btn {
            cursor: pointer;
        }
    </style>
{% endput %}
{% put scripts %}
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map}}\"></script>
<script src=\"./admin/vendors/custom/gmaps/gmaps.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\"use strict\";
{% if order.payment_method == 'paystack' %}
    {% if settings.payment.enable_paystack == 1 %}
        function payWithPaystack(){
            {% if paystack_amount %}
                var handler = PaystackPop.setup({
                    key: '{{settings.payment.paystack_key}}',
                    email: '{{user.email}}',
                    amount: {{paystack_amount*100}},
                    //amount: \"{{sender_fees}}\",
                    //currency: \"{{primary_currency.currency_code}}\",
                    currency: \"GHS\",
                    ref: '{{ 'now'|date('U') }}_{{order.number}}_{{order.id}}', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    metadata: {
                        custom_fields: [
                            {
                                display_name: \"Tracking Number\",
                                variable_name: \"number\",
                                value: \"{{order.number}}\"
                            }
                        ]
                    },
                    callback: function(response){

                         \$.request('onCheckpaystack', {
                              data: {reference: response.reference},
                              success: function(response, status, xhr, \$form) {

                                  swal.fire({
                                      title: '{{\"Thank you!\"|__}}',
                                      text: '{{\"Your payment is successfully paid! You will be redirect rightnow, please wait\"|__}}',
                                      type: 'success',
                                      buttonsStyling: false,
                                      confirmButtonText: '{{\"OK\"|__}}',
                                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                                  });
                                  //window.location.reload();
                              }
                         });
                    },
                    onClose: function(){
                        swal.fire({
                            title: '{{\"Closed!\"|__}}',
                            text: '{{\"You did not pay the requested payment! :(\"|__}}',
                            type: 'warning',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                    }
                });
                handler.openIframe();
            {% endif %}
        }
    {% endif %}
{% endif %}
var KTDashboard = function () {

    // Order Statistics.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var orderStatistics = function() {
        var container = KTUtil.getByID('kt_chart_order_statistics');

        if (!container) {
            return;
        }

        var MONTHS = ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['1 Jan', '2 Jan', '3 Jan', '4 Jan', '5 Jan', '6 Jan', '7 Jan'],
            datasets : [
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
                    backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [20, 30, 20, 40, 30, 60, 30]
\t\t\t\t},
\t\t\t\t{
                    fill: true,
                    //borderWidth: 0,
\t\t\t\t\tbackgroundColor : color(KTApp.getStateColor('brand')).alpha(0.2).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),

                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

\t\t\t\t\tdata: [15, 40, 15, 30, 40, 30, 50]
\t\t\t\t}
            ]
        };

        var ctx = container.getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: KTApp.getBaseColor('shape', 2),
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: KTApp.getBaseColor('shape', 2),
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            max: 70,
                            stepSize: 10,
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });
    };
    var latestTrendsMap = function() {
        if (\$('#kt_map_sender').length == 0) {
            return;
        }
        {% if order.sender_address.lat %}
        try {
            var map = new GMaps({
                div: '#kt_map_sender',
                lat: {{order.sender_address.lat}},
                lng: {{order.sender_address.lng}}
            });
            map.addMarker({
                lat: {{order.sender_address.lat}},
                lng: {{order.sender_address.lng}},
                title: '{{order.sender_address.name}}',
                infoWindow: {
                    content: '<p>{{\"Go to\"|__}} <a href=\"{{order.sender_address.url}}\" target=\"_blank\">{{order.sender_address.name}}</a></p>'
                }
            });
        } catch (e) {
            console.log(e);
        }

        {% endif %}
        if (\$('#kt_map_receiver').length == 0) {
            return;
        }
        {% if order.receiver_address.lat %}
            try {
                var map = new GMaps({
                    div: '#kt_map_receiver',
                    lat: {{order.receiver_address.lat}},
                    lng: {{order.receiver_address.lng}}
                });
                map.addMarker({
                    lat: {{order.receiver_address.lat}},
                    lng: {{order.receiver_address.lng}},
                    title: '{{order.receiver_address.name}}',
                    infoWindow: {
                        content: '<p>{{\"Go to\"|__}} <a href=\"{{order.receiver_address.url}}\" target=\"_blank\">{{order.receiver_address.name}}</a></p>'
                    }
                });
            } catch (e) {
                console.log(e);
            }
        {% endif %}
    }
    return {
        // public functions
        init: function () {
            orderStatistics();
            latestTrendsMap();
        },
    };
}();

KTUtil.ready(function () {
    KTDashboard.init();

    \$('.notes_scroll').on('click', function(e){
        \$([document.documentElement, document.body]).animate({
            scrollTop: \$(\"#notes_continer\").offset().top-60
        }, 2000);
    });
    \$('#assign_employee').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#assign_employee').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#assign_manifest').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_manifest');
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
            \$('#assign_manifest').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#transfer_office').on('click', '.btn-primary', function(e){
        var parent = \$('#assign_employee');
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
            \$('#transfer_office').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#refuse').on('click', '.btn-primary', function(e){
        var parent = \$('#refuse');
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
            \$('#refuse').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#discards').on('click', '.btn-primary', function(e){
        var parent = \$('#discards');
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
            \$('#discards').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#return_discards').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDiscards', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/delivered\";
            }
        });
    });
    \$('#delivered_driver').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDeliver', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
    });
    \$('#deliveried').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });
        \$.request('onDelivery', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
    });
    \$('#stock').on('click', function(e){
        e.preventDefault();
        swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to put shipment in stock ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onStock', {
                        success: function(data) {
                            //KTApp.unblockPage();
                            KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                            window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not been put in stock! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        // e.preventDefault();
        // KTApp.blockPage({
        //     overlayColor: '#000000',
        //     type: 'v2',
        //     state: 'success',
        //     message: '{{\"Please wait\"|__}}...'
        // });
        // \$.request('onStock', {
        //     success: function(data) {
        //         KTApp.unblockPage();
        //         window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
        //     }
        // });
    });
    \$('#received').on('click', '.btn-primary', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){
            \$('#received').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });


    \$('#received').find('input,select').each(function(){
        \$(this).on('change', function(){
            \$('#received .btn-info').removeClass('kt-hidden');
            \$('#received .btn-primary').addClass('kt-hidden');
        });
    });

    \$('#received .btn-info').removeClass('kt-hidden');
    \$('#received .btn-primary').addClass('kt-hidden');


    \$('#received').on('click', '.save', function(e){
        var parent = \$('#received');
        var validation = 1;
        \$.validator.setDefaults({
            ignore: \":hidden\",
       });
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            if(\$(this).valid() == false){
                validation = 0;
            }
        });
        if(validation){

            var receiver_address_id = \$('#received #receiver_address_id').val();
            var package_fee = \$('#received #package_fee').val();
            var return_courier_fee = \$('#received #return_courier_fee').val();
            var return_defray = \$('#received .return_defray:checked').val();
            var return_package_fee = \$('#received .return_package_fee:checked').val();

             \$.request('onConfirmfees', {
                  data: {return_courier_fee: return_courier_fee, package_fee: package_fee, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
                  success: function(response, status, xhr, \$form) {

                      swal.fire({
                          buttonsStyling: false,

                          html: \"<strong>{{'The total cost of courier fees is'|__}}:</strong> \"+response.delivery_cost+\"<br /><strong>{{'The total requested from sender is'|__}}:</strong> \"+response.sender_fees+\"<br /><strong>{{'The total requested from receiver is'|__}}:</strong> \"+response.receiver_fees,
                          type: \"warning\",

                          confirmButtonText: \"{{'Yes, confirm!'|__}}\",
                          confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

                          showCancelButton: true,
                          cancelButtonText: '{{\"No, change something\"|__}}',
                          cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
                      }).then(function (result) {
                          if (result.value) {
                              \$('#received .btn-info').addClass('kt-hidden');
                              \$('#received .btn-primary').removeClass('kt-hidden');
                          }
                      });
                  }
             });
        }
    });
    \$('#postpone').on('click', '.btn-primary', function(e){
        var parent = \$('#postpone');
        var validation = 1;
        parent.find('input,select').each(function(){
            if(\$(this).is(':hidden')){
                return;
            }
            var css_class = \$(this).attr('class');
            css_class = css_class.replace('form-control ','');
            if(css_class != 'date'){
                if(\$(this).valid() == false){
                    validation = 0;
                }
            }
        });
        if(validation){
            \$('#postpone').modal('toggle');
            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: '{{\"Please wait\"|__}}...'
            });
        }
    });
    \$('#accept').on('click', function(e){
        e.preventDefault();
        swal.fire({
                buttonsStyling: false,

                text: \"{{'Are you sure to Approved shipment ?'|__}}\",
                type: \"info\",

                confirmButtonText: \"{{'Yes, Confirm!'|__}}\",
                confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                //confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

                showCancelButton: true,
                cancelButtonText: '{{\"No, cancel\"|__}}',
                cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
            }).then(function (result) {
                if (result.value) {
                    \$.request('onAccept', {
                        success: function(data) {
                            //KTApp.unblockPage();
                            KTApp.blockPage({
                                overlayColor: '#000000',
                                type: 'v2',
                                state: 'success',
                                message: '{{\"Please wait\"|__}}...'
                            });
                            window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    swal.fire({
                        title: '{{\"Cancelled\"|__}}',
                        text: '{{\"You selected shipment has not been approved! :)\"|__}}',
                        type: 'error',
                        buttonsStyling: false,
                        confirmButtonText: '{{\"OK\"|__}}',
                        confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                    });
                }
            });
        
        // KTApp.blockPage({
        //     overlayColor: '#000000',
        //     type: 'v2',
        //     state: 'success',
        //     message: '{{\"Please wait\"|__}}...'
        // });

        
    });

    \$('#return_cod').on('click', function(e){
        e.preventDefault();
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'success',
            message: '{{\"Please wait\"|__}}...'
        });

        \$.request('onReturnCOD', {
            success: function(data) {
                KTApp.unblockPage();
                window.location.href = \"{{url('dashboard/shipments')}}/{{this.param.id}}/view\";
            }
        });
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


    \$('body').on('change', '#discard_reason', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
        \$('.discard_reason_receiver').addClass('kt-hidden');
        if(selected != '' && selected != 2){
            \$('.discard_reason_receiver').removeClass('kt-hidden');
        }
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
                     var type = \$('.type:checked').val();
                     var sender_address_id = \$('#sender_address_id').val();
                     var packaging_id = \$('#packaging_id').val();
                     var return_defray = \$('.return_defray:checked').val();
                     var return_package_fee = \$('.return_package_fee:checked').val();
                     if(selected != '' && selected != 'new'){
                         \$.request('onChangefees', {
                              data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
                      var type = \$('.type:checked').val();
                      var sender_address_id = \$('#sender_address_id').val();
                      var packaging_id = \$('#packaging_id').val();
                      var return_defray = \$('.return_defray:checked').val();
                      var return_package_fee = \$('.return_package_fee:checked').val();
                      if(selected != '' && selected != 'new'){
                          \$.request('onChangefees', {
                               data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
                       var type = \$('.type:checked').val();
                       var sender_address_id = \$('#sender_address_id').val();
                       var packaging_id = \$('#packaging_id').val();
                       var return_defray = \$('.return_defray:checked').val();
                       var return_package_fee = \$('.return_package_fee:checked').val();
                       if(selected != '' && selected != 'new'){
                           \$.request('onChangefees', {
                                data: {sender_address_id: sender_address_id, packaging_id: packaging_id, type: type, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
            \$.request('onListstates', {
                 data: {id: selected},
                 success: function(response, status, xhr, \$form) {
                      parent.find('select.state_id').selectpicker({title: '{{'Select'|__}}'}).selectpicker('refresh');
                      parent.find('select.state_id').html(response.html).selectpicker('refresh');
                 }
            });
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

    \$('body').on('change', '#receiver_address_id', function(e, clickedIndex, newValue, oldValue){
        var selected = \$(e.currentTarget).val();
         var type = \$('.type:checked').val();
         var sender_address_id = \$('#sender_address_id').val();
         var packaging_id = \$('#packaging_id').val();
         var return_defray = \$('.return_defray:checked').val();
         var return_package_fee = \$('.return_package_fee:checked').val();
         if(selected != '' && selected != 'new'){
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: selected, return_defray: return_defray, return_package_fee: return_package_fee},
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
    \$('body').on('click', '.return_defray', function(){
        if(\$(this).val() == 1){
            \$('.package_fee').removeClass('kt-hidden');


             var sender_address_id = \$('#sender_address_id').val();
             var receiver_address_id = \$('#receiver_address_id').val();
             var packaging_id = \$('#packaging_id').val();
             var type = \$('.type:checked').val();
             var return_defray = \$('.return_defray:checked').val();
             var return_package_fee = \$('.return_package_fee:checked').val();
             \$.request('onChangefees', {
                  data: {sender_address_id: sender_address_id, type: type, packaging_id:packaging_id, receiver_address_id: receiver_address_id, return_defray: return_defray, return_package_fee: return_package_fee},
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

    \$('#delete').on('click', function(e){
        e.preventDefault();

        swal.fire({
            buttonsStyling: false,

            text: \"{{'Are you sure to delete'|__}}\",
            type: \"error\",

            confirmButtonText: \"{{'Yes, delete!'|__}}\",
            confirmButtonClass: \"btn btn-sm btn-bold btn-danger\",

            showCancelButton: true,
            cancelButtonText: '{{\"No, cancel\"|__}}',
            cancelButtonClass: \"btn btn-sm btn-bold btn-brand\"
        }).then(function (result) {
            if (result.value) {
                KTApp.blockPage({
                    overlayColor: '#000000',
                    type: 'v2',
                    state: 'success',
                    message: '{{\"Please wait\"|__}}...'
                });
                \$.request('onDelete', {
                    success: function(data) {
                        KTApp.unblockPage();
                        swal.fire({
                            title: '{{\"Deleted!\"|__}}',
                            text: '{{\"Your selected records have been deleted! :(\"|__}}',
                            type: 'success',
                            buttonsStyling: false,
                            confirmButtonText: '{{\"OK\"|__}}',
                            confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                        });
                        window.location.href = \"{{url('dashboard/shipments')}}\";
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
    });
    if(\$('.kt-widget__action ul.kt-nav li').length == 0){
        \$('.kt-widget__action').hide();
    }
});
</script>
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/shipment.htm", "");
    }
}
