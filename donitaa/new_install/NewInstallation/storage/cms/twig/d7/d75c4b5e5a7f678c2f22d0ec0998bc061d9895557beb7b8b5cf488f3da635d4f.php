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

/* C:\xampp\htdocs\Beta/themes/spotlayer/partials/settingsmenu.htm */
class __TwigTemplate_f3d5b14f6ef2a17062ccfe8c88ebcd5b5fe64f1561a607b6ff47968422f3b1d2 extends \Twig\Template
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
        echo "<div class=\"kt-grid__item kt-app__toggle kt-app__aside kt-padding-r-20\" id=\"kt_user_profile_aside\">
\t<!--begin:: Widgets/Applications/User/Profile1-->
\t<div class=\"kt-portlet kt-portlet--height-fluid-\">
\t\t<div class=\"kt-inbox__nav\">
\t\t\t<ul class=\"kt-nav kt-nav--active-bg\" id=\"kt_nav\" role=\"tablist\">
\t\t\t\t<li class=\"kt-nav__item ";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 6), "page", [], "any", false, false, false, 6) == "general") || (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 6), "page", [], "any", false, false, false, 6)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "child_of_page", [], "any", false, false, false, 6))))) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 7
        echo url("dashboard/settings/general");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["System Configuration"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 17), "page", [], "any", false, false, false, 17) == "company")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 18
        echo url("dashboard/settings/company");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M7.70696074,11.6465196 L4.15660341,9.75299572 C3.96167938,9.64903623 3.88793804,9.40674327 3.99189753,9.21181925 C4.08361072,9.03985702 4.28590727,8.95902234 4.47087102,9.0204286 L9.57205231,10.7139738 L7.70696074,11.6465196 Z M12.7322989,14.3267 L16.3686753,12.9703901 L18.6316817,13.7216874 L18.6299527,13.7225513 C20.0084876,14.1925077 21,15.4985341 21,17.0361406 C21,18.9691372 19.4329966,20.5361406 17.5,20.5361406 C15.5670034,20.5361406 14,18.9691372 14,17.0361406 C14,16.3880326 14.176158,15.7810686 14.4832056,15.2605169 L12.7322989,14.3267 Z M17.5,15.5361406 C16.6715729,15.5361406 16,16.2077134 16,17.0361406 C16,17.8645677 16.6715729,18.5361406 17.5,18.5361406 C18.3284271,18.5361406 19,17.8645677 19,17.0361406 C19,16.2077134 18.3284271,15.5361406 17.5,15.5361406 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t        <path d=\"M17.5,9 C18.3284271,9 19,8.32842712 19,7.5 C19,6.67157288 18.3284271,6 17.5,6 C16.6715729,6 16,6.67157288 16,7.5 C16,8.32842712 16.6715729,9 17.5,9 Z M14.4832056,9.27562366 C14.176158,8.75507197 14,8.14810794 14,7.5 C14,5.56700338 15.5670034,4 17.5,4 C19.4329966,4 21,5.56700338 21,7.5 C21,9.03760648 20.0084876,10.3436328 18.6299527,10.8135893 L18.6316817,10.8144531 L4.47087102,15.515712 C4.28590727,15.5771182 4.08361072,15.4962835 3.99189753,15.3243213 C3.88793804,15.1293973 3.96167938,14.8871043 4.15660341,14.7831448 L14.4832056,9.27562366 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Setup Company"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 29), "page", [], "any", false, false, false, 29) == "website")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 30
        echo url("dashboard/settings/website");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<rect id=\"Bound\" opacity=\"0.200000003\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
\t\t\t\t\t\t\t\t<path d=\"M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
\t\t\t\t\t\t\t\t<path d=\"M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Setup Website"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 41), "page", [], "any", false, false, false, 41) == "fees") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "child_of_page", [], "any", false, false, false, 41) == "fees"))) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 42
        echo url("dashboard/settings/fees");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle\" fill=\"#000000\" opacity=\"0.3\" x=\"11.5\" y=\"2\" width=\"2\" height=\"4\" rx=\"1\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-Copy-3\" fill=\"#000000\" opacity=\"0.3\" x=\"11.5\" y=\"16\" width=\"2\" height=\"5\" rx=\"1\"/>
\t\t\t\t\t\t        <path d=\"M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Taxes and fees"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 54), "page", [], "any", false, false, false, 54) == "invoice")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 55
        echo url("dashboard/settings/invoice");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <polygon id=\"Path\" fill=\"#000000\" opacity=\"0.3\" points=\"9 5 9 20 7 20 7 5\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Tracking and Invoice"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "settings_breadcrumb", [], "any", false, false, false, 66) == "definitions")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 67), "settings_breadcrumb", [], "any", false, false, false, 67) != "definitions")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_1\" data-toggle=\"collapse\" href=\"#kt_nav_sub_1\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <path d=\"M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 75
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Definitions"]);
        echo "</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 78), "settings_breadcrumb", [], "any", false, false, false, 78) == "definitions")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_1\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_1\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 79
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 79), "page", [], "any", false, false, false, 79) == "branches") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 79), "child_of_page", [], "any", false, false, false, 79) == "branches"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 80
        echo url("dashboard/settings/branches");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 82
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Branches"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 85
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 85), "page", [], "any", false, false, false, 85) == "treasury") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 85), "child_of_page", [], "any", false, false, false, 85) == "treasury"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 86
        echo url("dashboard/settings/treasury");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 88
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Treasury"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 91
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 91), "page", [], "any", false, false, false, 91) == "deliverytimes") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 91), "child_of_page", [], "any", false, false, false, 91) == "deliverytimes"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 92
        echo url("dashboard/settings/deliverytimes");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Times"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 97
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 97), "page", [], "any", false, false, false, 97) == "couriers") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 97), "child_of_page", [], "any", false, false, false, 97) == "couriers"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 98
        echo url("dashboard/settings/couriers");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Courier Company"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 103
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 103), "page", [], "any", false, false, false, 103) == "shipping") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 103), "child_of_page", [], "any", false, false, false, 103) == "shipping"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 104
        echo url("dashboard/settings/shipping");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 106
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Mode"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--<li class=\"kt-nav__item ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 109), "page", [], "any", false, false, false, 109) == "payments")) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 110
        echo url("dashboard/settings/payments");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 112
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Methods"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 115
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 115), "page", [], "any", false, false, false, 115) == "packaging") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 115), "child_of_page", [], "any", false, false, false, 115) == "packaging"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 116
        echo url("dashboard/settings/packaging");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 118
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Packaging Type"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 121
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 121), "page", [], "any", false, false, false, 121) == "statuses") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 121), "child_of_page", [], "any", false, false, false, 121) == "statuses"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 122
        echo url("dashboard/settings/statuses");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 124
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Statuses"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<!-- \t<li class=\"kt-nav__item ";
        // line 127
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 127), "page", [], "any", false, false, false, 127) == "Stockstatuses") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 127), "child_of_page", [], "any", false, false, false, 127) == "Stockstatuses"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 128
        echo url("dashboard/settings/Stockstatuses");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 130
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["InStock Statuses"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 133
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 133), "page", [], "any", false, false, false, 133) == "Customstatuses") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 133), "child_of_page", [], "any", false, false, false, 133) == "Customstatuses"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 134
        echo url("dashboard/settings/Customstatuses");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["InCustom Statuses"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 139
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 139), "page", [], "any", false, false, false, 139) == "categories") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 139), "child_of_page", [], "any", false, false, false, 139) == "categories"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 140
        echo url("dashboard/settings/categories");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 142
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Item Categories"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 145
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 145), "page", [], "any", false, false, false, 145) == "cars") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 145), "child_of_page", [], "any", false, false, false, 145) == "cars"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 146
        echo url("dashboard/settings/cars");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 148
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cars"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item ";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 155), "settings_breadcrumb", [], "any", false, false, false, 155) == "container")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 156), "settings_breadcrumb", [], "any", false, false, false, 156) != "container")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_6\" data-toggle=\"collapse\" href=\"#kt_nav_sub_6\" aria-expanded=\" true\">
\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Container"]);
        echo "</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 163
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 163), "settings_breadcrumb", [], "any", false, false, false, 163) == "container")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_6\" role=\"tabpane6\" aria-labelledby=\"m_nav_link_6\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 164
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 164), "child_of_page", [], "any", false, false, false, 164) == "location") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 164), "page", [], "any", false, false, false, 164) == "location"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 165
        echo url("dashboard/settings/location");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Location Type"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 170
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 170), "child_of_page", [], "any", false, false, false, 170) == "statuscontainer") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 170), "page", [], "any", false, false, false, 170) == "statuscontainer"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 171
        echo url("dashboard/settings/statuscontainer");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 173
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Status"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 176
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 176), "child_of_page", [], "any", false, false, false, 176) == "reasonarrival") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 176), "page", [], "any", false, false, false, 176) == "reasonarrival"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 177
        echo url("dashboard/settings/reasonarrival");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 179
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Reason of Arrival"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 182
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 182), "child_of_page", [], "any", false, false, false, 182) == "size") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 182), "page", [], "any", false, false, false, 182) == "size"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 183
        echo url("dashboard/settings/size");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 185
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Size"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 189
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 189), "page", [], "any", false, false, false, 189) == "labels") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 189), "child_of_page", [], "any", false, false, false, 189) == "labels"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 190
        echo url("dashboard/settings/labels");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 192
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Labels"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 195
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 195), "page", [], "any", false, false, false, 195) == "handler") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 195), "child_of_page", [], "any", false, false, false, 195) == "handler"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 196
        echo url("dashboard/settings/handler");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 198
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Ground Handler"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 201
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 201), "page", [], "any", false, false, false, 201) == "break") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 201), "child_of_page", [], "any", false, false, false, 201) == "break"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 202
        echo url("dashboard/settings/break");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 204
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Breakdown"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 207
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 207), "child_of_page", [], "any", false, false, false, 207) == "destination") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 207), "page", [], "any", false, false, false, 207) == "destination"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t\t<a  href=\"";
        // line 208
        echo url("dashboard/settings/destination");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 210
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Destination"]);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- <li class=\"kt-nav__item ";
        // line 213
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 213), "child_of_page", [], "any", false, false, false, 213) == "lines") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 213), "page", [], "any", false, false, false, 213) == "lines"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 214
        echo url("dashboard/settings/lines");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 216
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Lines"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 219
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 219), "child_of_page", [], "any", false, false, false, 219) == "incoterms") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 219), "page", [], "any", false, false, false, 219) == "incoterms"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 220
        echo url("dashboard/settings/incoterms");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 222
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Incoterms"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item ";
        // line 230
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 230), "settings_breadcrumb", [], "any", false, false, false, 230) == "shipments")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 231), "settings_breadcrumb", [], "any", false, false, false, 231) != "shipments")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_7\" data-toggle=\"collapse\" href=\"#kt_nav_sub_7\" aria-expanded=\" true\">
\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 233
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments"]);
        echo "</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 238
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 238), "settings_breadcrumb", [], "any", false, false, false, 238) == "shipments")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_7\" role=\"tabpane7\" aria-labelledby=\"m_nav_link_7\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 239
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 239), "child_of_page", [], "any", false, false, false, 239) == "ShipmentsSettings") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 239), "page", [], "any", false, false, false, 239) == "ShipmentsSettings"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 240
        echo url("dashboard/settings/ShipmentsSettings");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 242
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipments Settings"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 249
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 249), "settings_breadcrumb", [], "any", false, false, false, 249) == "shipments")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_7\" role=\"tabpane7\" aria-labelledby=\"m_nav_link_7\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 250
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 250), "child_of_page", [], "any", false, false, false, 250) == "CustomersSettings") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 250), "page", [], "any", false, false, false, 250) == "CustomersSettings"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 251
        echo url("dashboard/settings/CustomersSettings");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 253
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Customers Settings"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item ";
        // line 261
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 261), "child_of_page", [], "any", false, false, false, 261), [0 => "places", 1 => "countries", 2 => "states", 3 => "cities", 4 => "areas"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 261), "settings_breadcrumb", [], "any", false, false, false, 261) == "places"))) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 262
        if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 262), "child_of_page", [], "any", false, false, false, 262), [0 => "places", 1 => "countries", 2 => "states", 3 => "cities", 4 => "areas"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 262), "settings_breadcrumb", [], "any", false, false, false, 262) == "places"))) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_2\" data-toggle=\"collapse\" href=\"#kt_nav_sub_2\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <circle id=\"Oval\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"9\"/>
\t\t\t\t\t\t        <path d=\"M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 270
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Places"]);
        echo "</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 273
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 273), "child_of_page", [], "any", false, false, false, 273), [0 => "places", 1 => "countries", 2 => "states", 3 => "cities", 4 => "areas"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 273), "settings_breadcrumb", [], "any", false, false, false, 273) == "places"))) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_2\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_2\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 274
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 274), "child_of_page", [], "any", false, false, false, 274) == "countries") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 274), "page", [], "any", false, false, false, 274) == "countries"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 275
        echo url("dashboard/settings/countries");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 277
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Countries"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 280
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 280), "child_of_page", [], "any", false, false, false, 280) == "states") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 280), "page", [], "any", false, false, false, 280) == "states"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 281
        echo url("dashboard/settings/states");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 283
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["States"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 286
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 286), "child_of_page", [], "any", false, false, false, 286) == "cities") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 286), "page", [], "any", false, false, false, 286) == "cities"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 287
        echo url("dashboard/settings/cities");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 289
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cities"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 292
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 292), "child_of_page", [], "any", false, false, false, 292) == "areas") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 292), "page", [], "any", false, false, false, 292) == "areas"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 293
        echo url("dashboard/settings/areas");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 295
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Areas"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 300
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 300), "settings_breadcrumb", [], "any", false, false, false, 300) == "components")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 301
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 301), "settings_breadcrumb", [], "any", false, false, false, 301) != "components")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_3\" data-toggle=\"collapse\" href=\"#kt_nav_sub_3\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-Copy-2\" fill=\"#FFFFFF\" x=\"13\" y=\"8\" width=\"3\" height=\"3\" rx=\"1\"/>
\t\t\t\t\t\t        <path d=\"M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z\" id=\"Rectangle-2\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 310
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Components"]);
        echo "</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 313
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 313), "settings_breadcrumb", [], "any", false, false, false, 313) == "components")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_3\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_3\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 314
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 314), "child_of_page", [], "any", false, false, false, 314) == "sms") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 314), "page", [], "any", false, false, false, 314) == "sms"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 315
        echo url("dashboard/settings/sms");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 317
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SMS Setup"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 320
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 320), "child_of_page", [], "any", false, false, false, 320) == "mail") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 320), "page", [], "any", false, false, false, 320) == "mail"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 321
        echo url("dashboard/settings/mail");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 323
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Mail Configuration"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--<li class=\"kt-nav__item ";
        // line 326
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 326), "child_of_page", [], "any", false, false, false, 326) == "call") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 326), "page", [], "any", false, false, false, 326) == "call"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 327
        echo url("dashboard/settings/call");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 329
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Call Verify"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 332
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 332), "child_of_page", [], "any", false, false, false, 332) == "chat") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 332), "page", [], "any", false, false, false, 332) == "chat"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 333
        echo url("dashboard/settings/chat");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 335
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Live Chat"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 338
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 338), "child_of_page", [], "any", false, false, false, 338) == "notifications") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 338), "page", [], "any", false, false, false, 338) == "notifications"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 339
        echo url("dashboard/settings/notifications");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 341
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notifications"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 344
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 344), "child_of_page", [], "any", false, false, false, 344) == "google") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 344), "page", [], "any", false, false, false, 344) == "google"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 345
        echo url("dashboard/settings/google");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 347
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Google APIs"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 350
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 350), "child_of_page", [], "any", false, false, false, 350) == "payment") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 350), "page", [], "any", false, false, false, 350) == "payment"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 351
        echo url("dashboard/settings/payment");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 353
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Payment Gateways"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!--<li class=\"kt-nav__item  kt-nav__item--submenu ";
        // line 358
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 358), "settings_breadcrumb", [], "any", false, false, false, 358) == "templates")) {
            echo "kt-nav__item--open";
        }
        echo "\" aria-haspopup=\"true\"  data-ktmenu-submenu-toggle=\"hover\">
\t\t\t\t\t<a  href=\"javascript:;\" class=\"kt-nav__link kt-menu__toggle\">
\t\t\t\t\t\t<i class=\"kt-nav__link-bullet kt-nav__link-bullet--dot\"><span></span></i>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 361
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Templates"]);
        echo "</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-menu__subnav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 367
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 367), "child_of_page", [], "any", false, false, false, 367) == "email-templates") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 367), "page", [], "any", false, false, false, 367) == "email-templates"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 368
        echo url("dashboard/settings/email-templates");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 370
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Email Templates"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 373
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 373), "child_of_page", [], "any", false, false, false, 373) == "sms-templates") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 373), "page", [], "any", false, false, false, 373) == "sms-templates"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 374
        echo url("dashboard/settings/sms-templates");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 376
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SMS Templates"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item  kt-nav__item--submenu ";
        // line 382
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 382), "settings_breadcrumb", [], "any", false, false, false, 382) == "website")) {
            echo "kt-nav__item--open";
        }
        echo "\" aria-haspopup=\"true\"  data-ktmenu-submenu-toggle=\"hover\">
\t\t\t\t\t<a  href=\"javascript:;\" class=\"kt-nav__link kt-menu__toggle\">
\t\t\t\t\t\t<i class=\"kt-nav__link-bullet kt-nav__link-bullet--dot\"><span></span></i>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 385
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Management"]);
        echo "</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-menu__subnav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 391
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 391), "child_of_page", [], "any", false, false, false, 391) == "website-plugins") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 391), "page", [], "any", false, false, false, 391) == "website-plugins"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 392
        echo url("dashboard/settings/website-plugins");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 394
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Plugins"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 397
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "ppage", [], "any", false, false, false, 397), "settings_breadcrumbe", [], "any", false, false, false, 397) == "website-builder")) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"";
        // line 398
        echo url("dashboard/settings/website-builder");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 400
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Website Builder"]);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>-->
\t\t\t\t<li class=\"kt-nav__item ";
        // line 406
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 406), "settings_breadcrumb", [], "any", false, false, false, 406) == "employees")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 407
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 407), "settings_breadcrumb", [], "any", false, false, false, 407) != "employees")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_4\" data-toggle=\"collapse\" href=\"#kt_nav_sub_4\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t        <path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t        <path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 415
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
        echo "</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 418
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 418), "settings_breadcrumb", [], "any", false, false, false, 418) == "employees")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_4\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_4\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 419
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 419), "child_of_page", [], "any", false, false, false, 419) == "employees") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 419), "page", [], "any", false, false, false, 419) == "employees"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 420
        echo url("dashboard/settings/employees");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 422
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Employees"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 425
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 425), "child_of_page", [], "any", false, false, false, 425) == "departments") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 425), "page", [], "any", false, false, false, 425) == "departments"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 426
        echo url("dashboard/settings/departments");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 428
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Departments"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 433
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 433), "settings_breadcrumb", [], "any", false, false, false, 433) == "languages")) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a class=\"kt-nav__link ";
        // line 434
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 434), "settings_breadcrumb", [], "any", false, false, false, 434) != "languages")) {
            echo "collapsed";
        }
        echo "\" role=\"tab\" id=\"kt_nav_link_5\" data-toggle=\"collapse\" href=\"#kt_nav_sub_5\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t        <circle id=\"Oval\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"10\" r=\"6\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 442
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Localizations"]);
        echo "</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse ";
        // line 445
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 445), "settings_breadcrumb", [], "any", false, false, false, 445) == "languages")) {
            echo "show";
        }
        echo "\" id=\"kt_nav_sub_5\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_5\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 446
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 446), "child_of_page", [], "any", false, false, false, 446) == "languages") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 446), "page", [], "any", false, false, false, 446) == "languages"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<a  href=\"";
        // line 447
        echo url("dashboard/settings/languages");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 449
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Languages"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 452
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 452), "child_of_page", [], "any", false, false, false, 452) == "translate") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 452), "page", [], "any", false, false, false, 452) == "translate"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<a  href=\"";
        // line 453
        echo url("dashboard/settings/translate");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 455
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Translate"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item ";
        // line 458
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 458), "child_of_page", [], "any", false, false, false, 458) == "currencies") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 458), "page", [], "any", false, false, false, 458) == "currencies"))) {
            echo "kt-nav__item--active";
        }
        echo "\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"";
        // line 459
        echo url("dashboard/settings/currencies");
        echo "\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 461
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Currencies"]);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item ";
        // line 466
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 466), "child_of_page", [], "any", false, false, false, 466) == "backup") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 466), "page", [], "any", false, false, false, 466) == "backup"))) {
            echo "kt-nav__item--active";
        }
        echo "\">
\t\t\t\t\t<a  href=\"";
        // line 467
        echo url("dashboard/settings/backup");
        echo "\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t        <path d=\"M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z\" id=\"Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-16\" fill=\"#000000\" opacity=\"0.3\" x=\"12\" y=\"4\" width=\"3\" height=\"5\" rx=\"0.5\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">";
        // line 475
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Data Backup"]);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

";
        // line 483
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 484
        echo "\t";
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 485
            echo "\t    <link href=\"./admin/css/demo1/pages/inbox/inbox.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
\t";
        } else {
            // line 487
            echo "\t\t<link href=\"./admin/css/demo1/pages/inbox/inbox.css\" rel=\"stylesheet\" type=\"text/css\" />
\t";
        }
        // line 483
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/partials/settingsmenu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1231 => 483,  1227 => 487,  1223 => 485,  1220 => 484,  1218 => 483,  1207 => 475,  1196 => 467,  1190 => 466,  1182 => 461,  1177 => 459,  1171 => 458,  1165 => 455,  1160 => 453,  1154 => 452,  1148 => 449,  1143 => 447,  1137 => 446,  1131 => 445,  1125 => 442,  1112 => 434,  1106 => 433,  1098 => 428,  1093 => 426,  1087 => 425,  1081 => 422,  1076 => 420,  1070 => 419,  1064 => 418,  1058 => 415,  1045 => 407,  1039 => 406,  1030 => 400,  1025 => 398,  1019 => 397,  1013 => 394,  1008 => 392,  1002 => 391,  993 => 385,  985 => 382,  976 => 376,  971 => 374,  965 => 373,  959 => 370,  954 => 368,  948 => 367,  939 => 361,  931 => 358,  923 => 353,  918 => 351,  912 => 350,  906 => 347,  901 => 345,  895 => 344,  889 => 341,  884 => 339,  878 => 338,  872 => 335,  867 => 333,  861 => 332,  855 => 329,  850 => 327,  844 => 326,  838 => 323,  833 => 321,  827 => 320,  821 => 317,  816 => 315,  810 => 314,  804 => 313,  798 => 310,  784 => 301,  778 => 300,  770 => 295,  765 => 293,  759 => 292,  753 => 289,  748 => 287,  742 => 286,  736 => 283,  731 => 281,  725 => 280,  719 => 277,  714 => 275,  708 => 274,  702 => 273,  696 => 270,  683 => 262,  677 => 261,  666 => 253,  661 => 251,  655 => 250,  649 => 249,  639 => 242,  634 => 240,  628 => 239,  622 => 238,  614 => 233,  607 => 231,  601 => 230,  590 => 222,  585 => 220,  579 => 219,  573 => 216,  568 => 214,  562 => 213,  556 => 210,  551 => 208,  545 => 207,  539 => 204,  534 => 202,  528 => 201,  522 => 198,  517 => 196,  511 => 195,  505 => 192,  500 => 190,  494 => 189,  487 => 185,  482 => 183,  476 => 182,  470 => 179,  465 => 177,  459 => 176,  453 => 173,  448 => 171,  442 => 170,  436 => 167,  431 => 165,  425 => 164,  419 => 163,  411 => 158,  404 => 156,  398 => 155,  388 => 148,  383 => 146,  377 => 145,  371 => 142,  366 => 140,  360 => 139,  354 => 136,  349 => 134,  343 => 133,  337 => 130,  332 => 128,  326 => 127,  320 => 124,  315 => 122,  309 => 121,  303 => 118,  298 => 116,  292 => 115,  286 => 112,  281 => 110,  275 => 109,  269 => 106,  264 => 104,  258 => 103,  252 => 100,  247 => 98,  241 => 97,  235 => 94,  230 => 92,  224 => 91,  218 => 88,  213 => 86,  207 => 85,  201 => 82,  196 => 80,  190 => 79,  184 => 78,  178 => 75,  165 => 67,  159 => 66,  153 => 63,  142 => 55,  136 => 54,  130 => 51,  118 => 42,  112 => 41,  106 => 38,  95 => 30,  89 => 29,  83 => 26,  72 => 18,  66 => 17,  60 => 14,  50 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kt-grid__item kt-app__toggle kt-app__aside kt-padding-r-20\" id=\"kt_user_profile_aside\">
\t<!--begin:: Widgets/Applications/User/Profile1-->
\t<div class=\"kt-portlet kt-portlet--height-fluid-\">
\t\t<div class=\"kt-inbox__nav\">
\t\t\t<ul class=\"kt-nav kt-nav--active-bg\" id=\"kt_nav\" role=\"tablist\">
\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'general' or (this.param.page is empty and this.page.child_of_page is empty) %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/general')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'System Configuration'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'company' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/company')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M7.70696074,11.6465196 L4.15660341,9.75299572 C3.96167938,9.64903623 3.88793804,9.40674327 3.99189753,9.21181925 C4.08361072,9.03985702 4.28590727,8.95902234 4.47087102,9.0204286 L9.57205231,10.7139738 L7.70696074,11.6465196 Z M12.7322989,14.3267 L16.3686753,12.9703901 L18.6316817,13.7216874 L18.6299527,13.7225513 C20.0084876,14.1925077 21,15.4985341 21,17.0361406 C21,18.9691372 19.4329966,20.5361406 17.5,20.5361406 C15.5670034,20.5361406 14,18.9691372 14,17.0361406 C14,16.3880326 14.176158,15.7810686 14.4832056,15.2605169 L12.7322989,14.3267 Z M17.5,15.5361406 C16.6715729,15.5361406 16,16.2077134 16,17.0361406 C16,17.8645677 16.6715729,18.5361406 17.5,18.5361406 C18.3284271,18.5361406 19,17.8645677 19,17.0361406 C19,16.2077134 18.3284271,15.5361406 17.5,15.5361406 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t        <path d=\"M17.5,9 C18.3284271,9 19,8.32842712 19,7.5 C19,6.67157288 18.3284271,6 17.5,6 C16.6715729,6 16,6.67157288 16,7.5 C16,8.32842712 16.6715729,9 17.5,9 Z M14.4832056,9.27562366 C14.176158,8.75507197 14,8.14810794 14,7.5 C14,5.56700338 15.5670034,4 17.5,4 C19.4329966,4 21,5.56700338 21,7.5 C21,9.03760648 20.0084876,10.3436328 18.6299527,10.8135893 L18.6316817,10.8144531 L4.47087102,15.515712 C4.28590727,15.5771182 4.08361072,15.4962835 3.99189753,15.3243213 C3.88793804,15.1293973 3.96167938,14.8871043 4.15660341,14.7831448 L14.4832056,9.27562366 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Setup Company'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'website' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/website')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t<rect id=\"Bound\" opacity=\"0.200000003\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect>
\t\t\t\t\t\t\t\t<path d=\"M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"></path>
\t\t\t\t\t\t\t\t<path d=\"M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z\" id=\"Combined-Shape\" fill=\"#000000\"></path>
\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Setup Website'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'fees' or this.page.child_of_page == 'fees' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/fees')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle\" fill=\"#000000\" opacity=\"0.3\" x=\"11.5\" y=\"2\" width=\"2\" height=\"4\" rx=\"1\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-Copy-3\" fill=\"#000000\" opacity=\"0.3\" x=\"11.5\" y=\"16\" width=\"2\" height=\"5\" rx=\"1\"/>
\t\t\t\t\t\t        <path d=\"M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Taxes and fees'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'invoice' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/invoice')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13,5 L15,5 L15,20 L13,20 L13,5 Z M5,5 L5,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,6 C2,5.44771525 2.44771525,5 3,5 L5,5 Z M16,5 L18,5 L18,20 L16,20 L16,5 Z M20,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,19 C22,19.5522847 21.5522847,20 21,20 L20,20 L20,5 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <polygon id=\"Path\" fill=\"#000000\" opacity=\"0.3\" points=\"9 5 9 20 7 20 7 5\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Tracking and Invoice'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'definitions' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'definitions' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_1\" data-toggle=\"collapse\" href=\"#kt_nav_sub_1\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <path d=\"M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Definitions'|__}}</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'definitions' %}show{% endif %}\" id=\"kt_nav_sub_1\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_1\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'branches' or this.page.child_of_page == 'branches' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/branches')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Branches'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'treasury' or this.page.child_of_page == 'treasury' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/treasury')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Treasury'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'deliverytimes'  or this.page.child_of_page == 'deliverytimes' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/deliverytimes')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Delivery Times'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'couriers'  or this.page.child_of_page == 'couriers' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/couriers')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Courier Company'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'shipping'  or this.page.child_of_page == 'shipping' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/shipping')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Shipping Mode'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--<li class=\"kt-nav__item {% if this.param.page == 'payments' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/payments')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Payment Methods'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'packaging' or this.page.child_of_page == 'packaging' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/packaging')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Packaging Type'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'statuses' or this.page.child_of_page == 'statuses' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/statuses')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Statuses'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<!-- \t<li class=\"kt-nav__item {% if this.param.page == 'Stockstatuses' or this.page.child_of_page == 'Stockstatuses' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/Stockstatuses')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'InStock Statuses'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'Customstatuses' or this.page.child_of_page == 'Customstatuses' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/Customstatuses')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'InCustom Statuses'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'categories' or this.page.child_of_page == 'categories' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/categories')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Item Categories'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'cars' or this.page.child_of_page == 'cars' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/cars')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Cars'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'container' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'container' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_6\" data-toggle=\"collapse\" href=\"#kt_nav_sub_6\" aria-expanded=\" true\">
\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Container'|__}}</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'container' %}show{% endif %}\" id=\"kt_nav_sub_6\" role=\"tabpane6\" aria-labelledby=\"m_nav_link_6\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'location' or  this.param.page == 'location' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/location')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Location Type'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'statuscontainer' or  this.param.page == 'statuscontainer' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/statuscontainer')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Status'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'reasonarrival' or  this.param.page == 'reasonarrival' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/reasonarrival')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Reason of Arrival'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'size' or  this.param.page == 'size' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/size')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Size'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'labels'  or this.page.child_of_page == 'labels' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/labels')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Labels'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'handler'  or this.page.child_of_page == 'handler' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/handler')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Ground Handler'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.param.page == 'break'  or this.page.child_of_page == 'break' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/break')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Breakdown'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'destination' or  this.param.page == 'destination' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/destination')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Destination'|__}}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- <li class=\"kt-nav__item {% if this.page.child_of_page == 'lines' or  this.param.page == 'lines' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/lines')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Lines'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'incoterms' or  this.param.page == 'incoterms' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/incoterms')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Incoterms'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li> -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'shipments' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'shipments' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_7\" data-toggle=\"collapse\" href=\"#kt_nav_sub_7\" aria-expanded=\" true\">
\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Shipments'|__}}</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'shipments' %}show{% endif %}\" id=\"kt_nav_sub_7\" role=\"tabpane7\" aria-labelledby=\"m_nav_link_7\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'ShipmentsSettings' or  this.param.page == 'ShipmentsSettings' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/ShipmentsSettings')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Shipments Settings'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'shipments' %}show{% endif %}\" id=\"kt_nav_sub_7\" role=\"tabpane7\" aria-labelledby=\"m_nav_link_7\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'CustomersSettings' or  this.param.page == 'CustomersSettings' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/CustomersSettings')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Customers Settings'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>


\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page in ['places','countries','states','cities', 'areas'] or this.page.settings_breadcrumb == 'places' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.child_of_page not in ['places','countries','states','cities', 'areas'] or this.page.settings_breadcrumb == 'places' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_2\" data-toggle=\"collapse\" href=\"#kt_nav_sub_2\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <circle id=\"Oval\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"12\" r=\"9\"/>
\t\t\t\t\t\t        <path d=\"M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z\" id=\"Combined-Shape\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Places'|__}}</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.child_of_page in ['places','countries','states','cities', 'areas'] or this.page.settings_breadcrumb == 'places' %}show{% endif %}\" id=\"kt_nav_sub_2\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_2\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'countries' or  this.param.page == 'countries' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/countries')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Countries'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'states' or  this.param.page == 'states' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/states')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'States'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'cities' or  this.param.page == 'cities' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/cities')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Cities'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'areas' or  this.param.page == 'areas' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/areas')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Areas'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'components' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'components' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_3\" data-toggle=\"collapse\" href=\"#kt_nav_sub_3\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z\" id=\"Combined-Shape\" fill=\"#000000\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-Copy-2\" fill=\"#FFFFFF\" x=\"13\" y=\"8\" width=\"3\" height=\"3\" rx=\"1\"/>
\t\t\t\t\t\t        <path d=\"M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z\" id=\"Rectangle-2\" fill=\"#000000\" opacity=\"0.3\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Components'|__}}</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'components' %}show{% endif %}\" id=\"kt_nav_sub_3\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_3\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'sms' or  this.param.page == 'sms' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/sms')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'SMS Setup'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'mail' or  this.param.page == 'mail' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/mail')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Mail Configuration'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--<li class=\"kt-nav__item {% if this.page.child_of_page == 'call' or  this.param.page == 'call' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/call')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Call Verify'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'chat' or  this.param.page == 'chat' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/chat')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Live Chat'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'notifications' or  this.param.page == 'notifications' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/notifications')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Notifications'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'google' or  this.param.page == 'google' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/google')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Google APIs'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'payment' or  this.param.page == 'payment' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/payment')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Payment Gateways'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<!--<li class=\"kt-nav__item  kt-nav__item--submenu {% if this.page.settings_breadcrumb == 'templates' %}kt-nav__item--open{% endif %}\" aria-haspopup=\"true\"  data-ktmenu-submenu-toggle=\"hover\">
\t\t\t\t\t<a  href=\"javascript:;\" class=\"kt-nav__link kt-menu__toggle\">
\t\t\t\t\t\t<i class=\"kt-nav__link-bullet kt-nav__link-bullet--dot\"><span></span></i>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Templates'|__}}</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-menu__subnav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'email-templates' or  this.param.page == 'email-templates' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/email-templates')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Email Templates'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'sms-templates' or  this.param.page == 'sms-templates' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/sms-templates')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'SMS Templates'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item  kt-nav__item--submenu {% if this.page.settings_breadcrumb == 'website' %}kt-nav__item--open{% endif %}\" aria-haspopup=\"true\"  data-ktmenu-submenu-toggle=\"hover\">
\t\t\t\t\t<a  href=\"javascript:;\" class=\"kt-nav__link kt-menu__toggle\">
\t\t\t\t\t\t<i class=\"kt-nav__link-bullet kt-nav__link-bullet--dot\"><span></span></i>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Website Management'|__}}</span>
\t\t\t\t\t\t<i class=\"kt-menu__ver-arrow la la-angle-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"kt-menu__submenu \">
\t\t\t\t\t\t<span class=\"kt-menu__arrow\"></span>
\t\t\t\t\t\t<ul class=\"kt-menu__subnav\">
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'website-plugins' or  this.param.page == 'website-plugins' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/website-plugins')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Website Plugins'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.ppage.settings_breadcrumbe == 'website-builder' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/website-builder')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Website Builder'|__}}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>-->
\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'employees' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'employees' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_4\" data-toggle=\"collapse\" href=\"#kt_nav_sub_4\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t        <path d=\"M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/>
\t\t\t\t\t\t        <path d=\"M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Employees'|__}}</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'employees' %}show{% endif %}\" id=\"kt_nav_sub_4\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_4\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'employees' or  this.param.page == 'employees' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/employees')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Employees'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'departments' or  this.param.page == 'departments' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/departments')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Departments'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.page.settings_breadcrumb == 'languages' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a class=\"kt-nav__link {% if this.page.settings_breadcrumb != 'languages' %}collapsed{% endif %}\" role=\"tab\" id=\"kt_nav_link_5\" data-toggle=\"collapse\" href=\"#kt_nav_sub_5\" aria-expanded=\" true\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <rect id=\"bound\" x=\"0\" y=\"0\" width=\"24\" height=\"24\"/>
\t\t\t\t\t\t        <path d=\"M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z\" id=\"Combined-Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t        <circle id=\"Oval\" fill=\"#000000\" opacity=\"0.3\" cx=\"12\" cy=\"10\" r=\"6\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Localizations'|__}}</span>
\t\t\t\t\t\t<span class=\"kt-nav__link-arrow\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"kt-nav__sub collapse {% if this.page.settings_breadcrumb == 'languages' %}show{% endif %}\" id=\"kt_nav_sub_5\" role=\"tabpanel\" aria-labelledby=\"m_nav_link_5\" data-parent=\"#kt_nav\">
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'languages' or  this.param.page == 'languages' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/languages')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Languages'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'translate' or  this.param.page == 'translate' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\">
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/translate')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Translate'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'currencies' or  this.param.page == 'currencies' %}kt-nav__item--active{% endif %}\" aria-haspopup=\"true\" >
\t\t\t\t\t\t\t<a  href=\"{{url('dashboard/settings/currencies')}}\" class=\"kt-nav__link \">
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-bullet kt-nav__link-bullet--line\"><span></span></span>
\t\t\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Currencies'|__}}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"kt-nav__item {% if this.page.child_of_page == 'backup' or  this.param.page == 'backup' %}kt-nav__item--active{% endif %}\">
\t\t\t\t\t<a  href=\"{{url('dashboard/settings/backup')}}\" class=\"kt-nav__link\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" version=\"1.1\" class=\"kt-svg-icon kt-nav__link-icon\">
\t\t\t\t\t\t    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t        <polygon id=\"Shape\" points=\"0 0 24 0 24 24 0 24\"/>
\t\t\t\t\t\t        <path d=\"M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z\" id=\"Shape\" fill=\"#000000\" fill-rule=\"nonzero\"/>
\t\t\t\t\t\t        <rect id=\"Rectangle-16\" fill=\"#000000\" opacity=\"0.3\" x=\"12\" y=\"4\" width=\"3\" height=\"5\" rx=\"0.5\"/>
\t\t\t\t\t\t    </g>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"kt-nav__link-text\">{{'Data Backup'|__}}</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

{% put styles %}
\t{% if currentLang == 'ar'%}
\t    <link href=\"./admin/css/demo1/pages/inbox/inbox.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
\t{% else %}
\t\t<link href=\"./admin/css/demo1/pages/inbox/inbox.css\" rel=\"stylesheet\" type=\"text/css\" />
\t{% endif %}
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/partials/settingsmenu.htm", "");
    }
}
