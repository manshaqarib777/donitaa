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

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/dashboard/order-update.htm */
class __TwigTemplate_554a3c4daa810ca03862709a4ca08d17b5c6ac11db846cdfc217193bd4fab9b9 extends \Twig\Template
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
        echo "<!-- begin:: Section -->
<div class=\"kt-sc-faq-3 kt-sc-feedback\">
    <div class=\"kt-sc__title\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update Shipment"]);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 4), "prefix_order", [], "any", false, false, false, 4), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "tracking", [], "any", false, false, false, 4), "numbers_order", [], "any", false, false, false, 4), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "number", [], "any", false, false, false, 4), "html", null, true);
        echo "</b>
    </div>
    <div class=\"kt-sc__subtitle\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Complete the form to update this shipment!"]);
        echo "
    </div>
    <div class=\"kt-sc__bg\">
        <svg id=\"e0b35d3b-637f-4cd2-a9fd-b6e76c92ec56\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"912.92081\" height=\"680.22808\" viewBox=\"0 0 912.92081 680.22808\"><title>delivery_address</title><rect x=\"102.00233\" y=\"641.27035\" width=\"556.10756\" height=\"2.36139\" fill=\"#3f3d56\"/><path d=\"M540.45658,426.2614s-11.802,53.109,11.802,43.66742,9.44161-46.02782,9.44161-46.02782Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#ffb9b9\"/><path d=\"M761.15409,443.96441s28.32482,34.22581,10.62181,41.307-27.14462-31.86542-24.78422-35.406S761.15409,443.96441,761.15409,443.96441Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#ffb9b9\"/><circle cx=\"550.34306\" cy=\"56.7313\" r=\"35.40602\" fill=\"#ffb9b9\"/><polygon points=\"523.789 70.304 519.068 106.89 558.014 121.052 566.276 79.745 523.789 70.304\" fill=\"#ffb9b9\"/><path d=\"M689.16185,216.18569s-20.00721-9.87712-24.166-17.92077l-8.8796,8.47916s-63.73084-5.901-73.17244,25.96442-1.1802,147.52507-1.1802,147.52507-12.98221,51.92883-9.44161,53.109,47.208,22.42381,108.57846,10.62181c0,0,27.14461-4.72081,31.86542-1.18021s-2.3604-56.64962-2.3604-56.64962,47.208-106.21806,38.94662-119.20027-44.84763-40.12682-44.84763-40.12682l2.3604-12.9822S690.34205,220.90649,689.16185,216.18569Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M592.3854,224.44709s-21.24361,10.62181-24.78421,27.14462S531.015,405.01779,534.55557,413.27919,536.916,432.1624,536.916,432.1624l30.68521-3.5406s-5.901-8.26141-2.3604-11.802,7.0812-15.34261,4.7208-20.06341-4.7208,3.5406,8.26141-11.802S620.71022,229.1679,592.3854,224.44709Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M742.27088,264.57391s10.03171.5901,12.39211,17.11291,6.4911,118.61016,6.4911,118.61016,15.34261,33.04562,9.44161,37.76642-2.36041,11.802-2.36041,11.802l-21.24361,5.901-46.02782-71.99224Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M575.8626,428.6218s-7.08121,1.1802-7.08121,27.14461-12.9822,106.21806-4.7208,119.20026,9.4416,129.82207,9.4416,129.82207,22.42382,9.4416,41.307-21.24361l2.3604-16.52281,4.7208-80.25364,18.88321-100.317L666.738,597.39048s-3.5406,133.36267,9.44161,133.36267,37.76642-10.6218,37.76642-10.6218,5.901-11.802,3.5406-17.703-4.7208-4.7208-2.3604-9.44161,5.901-127.46166,5.901-127.46166-4.7208-126.28147-10.6218-129.82207S575.8626,428.6218,575.8626,428.6218Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M575.8626,700.06794l-18.88321,20.06341s-34.22582,31.86541-4.72081,33.04561,46.02783-18.88321,46.02783-21.24361,1.1802-10.6218,9.4416-10.6218,28.32482-20.06341,23.604-28.32482-18.88321-11.802-18.88321-11.802Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M677.35985,726.03235s-14.16241,28.32482-5.901,34.22582,10.6218,8.2614,10.6218,8.2614,7.0812-1.1802,5.901,9.44161,42.48723,16.52281,44.84763,8.2614,1.1802-24.78421-3.54061-29.505-18.8832-37.76642-18.8832-37.76642S695.06286,701.24814,677.35985,726.03235Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M729.61563,138.18723l6.66977-.94746s-9.28508-17.08977-27.25616-20.19295l6.30833-4.25771s-10.96188-7.83392-25.12862,2.2356c-7.44718,5.2933-16.09389,11.54151-22.4543,19.406l-6.50628-1.59008,1.25421,6.64282-10.96544,3.65643L661.55472,144.45a34.39538,34.39538,0,0,0-2.6885,9.85288,13.20963,13.20963,0,0,0,2.6474,9.54283h0s11.346-13.75438,11.94045-16.18661l-1.486,6.08055s7.41277-3.98771,8.30439-7.636l2.27357,5.06625,3.29154-6.2837L704.6381,156.569l-1.97636-6.28234,12.25716,4.92866-3.33623-7.90348s12.428,11.41415,11.3458,18.23779c-1.08239,6.8235,1.57189,14.18856,1.57189,14.18856S743.40339,151.22239,729.61563,138.18723Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><rect x=\"723.92081\" y=\"429.45048\" width=\"189\" height=\"2.26159\" fill=\"#3f3d56\"/><rect x=\"160.89644\" y=\"603.7084\" width=\"45.55804\" height=\"45.55804\" fill=\"#cfcce0\"/><path d=\"M343.99959,753.15792H296.04376V705.20209h47.95583Zm-45.558-2.39779H341.6018V707.59988H298.44155Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><rect x=\"375.34822\" y=\"320.09176\" width=\"30.9126\" height=\"29.84223\" transform=\"translate(-238.07349 53.63808) rotate(-21.14419)\" fill=\"#f2f2f2\"/><path d=\"M405.39252,341.159l-30.34888,11.73755-11.33113-29.298L394.06139,311.861Zm-29.398,9.68577,27.314-10.5638-10.198-26.36821-27.314,10.5638Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><rect x=\"895.02761\" y=\"630.14139\" width=\"30.9126\" height=\"29.84223\" transform=\"translate(1080.94399 -535.56656) rotate(71.02706)\" fill=\"#f2f2f2\"/><path d=\"M903.78947,659.40718,893.21015,628.6354l29.70628-10.213,10.57932,30.77178Zm-8.565-29.74384,9.52139,27.6946,26.73565-9.1917-9.52139-27.69461Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M286.8802,509.50788c16.90362.3626,30.35024,12.61229,30.35024,12.61229s-13.95955,11.6618-30.86317,11.29919S256.017,520.80707,256.017,520.80707,269.97659,509.14527,286.8802,509.50788Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/><path d=\"M201.89746,451.80706c15.27169,7.2553,32.78343,2.33538,32.78343,2.33538s-7.24856-16.68308-22.52025-23.93838-32.78342-2.33537-32.78342-2.33537S186.62577,444.55177,201.89746,451.80706Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/><path d=\"M203.44987,444.59715c16.83734-1.53875,31.575,9.12272,31.575,9.12272s-12.561,13.15627-29.39836,14.695-31.575-9.12272-31.575-9.12272S186.61253,446.1359,203.44987,444.59715Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M265.17029,447.51226c-1.61385,16.8303,8.98175,31.61542,8.98175,31.61542s13.21218-12.5022,14.826-29.3325-8.98175-31.61543-8.98175-31.61543S266.78414,430.682,265.17029,447.51226Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M344.46582,550.732c-8.83127,14.41779-5.79289,32.352-5.79289,32.352s17.3567-5.44166,26.188-19.85944,5.79289-32.352,5.79289-32.352S353.29709,536.31423,344.46582,550.732Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M318.84517,707.49034l1.287-.8699a40.32083,40.32083,0,0,1-7.11618-22.36062c.036-11.69395,5.77986-22.51,11.33484-32.97005,1.03106-1.94153,2.05871-3.877,3.0473-5.81095a126.84805,126.84805,0,0,0,9.86618-24.7682c8.61631-32.01976.1331-69.797-22.69206-101.05455-18.10707-24.79626-45.09932-46.47925-82.51821-66.2882l-.72655,1.37273c37.20577,19.69594,64.0251,41.2299,81.99035,65.83163,22.55061,30.881,30.94168,68.16527,22.44633,99.73491a125.3412,125.3412,0,0,1-9.74862,24.46484c-.98556,1.92675-2.00941,3.85463-3.03668,5.78934-5.64334,10.62686-11.47894,21.61548-11.5161,33.69395A41.88823,41.88823,0,0,0,318.84517,707.49034Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><circle cx=\"14.75596\" cy=\"330.76716\" r=\"14.75565\" fill=\"#3f3d56\"/><polygon points=\"818.044 417.926 628.109 349.709 662.018 255.296 780.281 226.293 851.954 323.514 818.044 417.926\" fill=\"#2f2e41\"/><path d=\"M938.57461,509.09041,796.6355,454.984c36.8477-49.35662,53.32538-84.17278,53.33749-138.959L991.9121,370.1314C958.93688,416.97245,945.147,452.18482,938.57461,509.09041Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#f2f2f2\"/><rect x=\"872.979\" y=\"363.39985\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(46.39006 -410.89587) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"867.76392\" y=\"377.08073\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(50.92105 -408.141) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"862.54884\" y=\"390.7616\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(55.45204 -405.38614) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"857.33377\" y=\"404.44248\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(59.98302 -402.63127) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"852.11869\" y=\"418.12336\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(64.51401 -399.8764) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"846.90362\" y=\"431.80424\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(69.045 -397.12153) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"841.68854\" y=\"445.48512\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(73.57599 -394.36666) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"836.47346\" y=\"459.16599\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(78.10697 -391.61179) rotate(20.86657)\" fill=\"#3f3d56\"/><polygon points=\"813.656 430.144 623.721 361.927 662.018 255.296 742.226 330.502 851.954 323.514 813.656 430.144\" fill=\"#3f3d56\"/><polygon points=\"717.148 396.545 622.442 362.53 645.518 298.277 647.401 298.953 625.001 361.323 717.824 394.662 717.148 396.545\" fill=\"#2568ef\"/><rect x=\"796.39003\" y=\"432.76595\" width=\"29.50502\" height=\"11.80201\" transform=\"matrix(0.94114, 0.33802, -0.33802, 0.94114, 52.48444, -358.24895)\" fill=\"#2568ef\"/><polygon points=\"369.521 642.111 220.865 642.032 222.032 558.576 295.91 591.781 370.688 560.655 369.521 642.111\" fill=\"#3f3d56\"/><rect x=\"376.17876\" y=\"713.97725\" width=\"21.73552\" height=\"8.69421\" transform=\"translate(-133.45769 -115.22766) rotate(0.80117)\" fill=\"#2568ef\"/><polygon points=\"371.185 560.541 296.045 598.848 221.641 560.541 221.641 558.331 371.185 558.331 371.185 560.541\" fill=\"#2568ef\"/><ellipse cx=\"923.32742\" cy=\"345.64469\" rx=\"9.02966\" ry=\"25\" transform=\"translate(127.93044 975.41116) rotate(-69.13343)\" fill=\"#2568ef\"/><path d=\"M967.10457,212.43884a38,38,0,0,0-47.56929,25.00326c-6.23144,20.04035,10.751,93.40458,10.751,93.40458s55.59009-50.7982,61.82152-70.83855A38,38,0,0,0,967.10457,212.43884ZM950.477,265.91335a18,18,0,1,1,22.53282-11.84365A18,18,0,0,1,950.477,265.91335Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/></svg>
    </div>
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"kt-portlet kt-margin-t-30\">
    <!--begin::Form-->
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSave", ["success" => "created successfully!", "flash" => true, "class" => "kt_form"]]);
        echo "
        <div class=\"kt-portlet__body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t<div class=\"col-xl-6\">
                    <div class=\"form-group\">
                        <label>";
        // line 24
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Office"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 28
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "office_id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, $context["office"], "id", [], "any", false, false, false, 28))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["office"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </select>
                    </div>
                    ";
        // line 32
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "requested", [], "any", false, false, false, 32), [0 => 0, 1 => 1])) {
            // line 33
            echo "                        <div class=\"form-group\">
                            <label>";
            // line 34
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Package Type"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["packaging"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 38
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "packaging_id", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 38))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </select>
    \t\t\t\t\t</div>
                        <div class=\"form-group\">
                            <label>";
            // line 43
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Shipping Date"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "ship_date", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 45)), "html", null, true);
            echo "\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
    \t\t\t\t\t</div>
                        <div class=\"form-group\">
                            <div class=\"kt-section\">
            \t\t\t\t\t<h3 class=\"kt-section__title kt-margin-b-20\">
            \t\t\t\t\t\t";
            // line 56
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
            // line 66
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
            echo ":</label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                    <option data-hidden=\"true\"></option>
                                                                    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 72
                echo "                                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 72), "html", null, true);
                echo "</option>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-8\">
                                                        <div class=\"kt-form__group--inline\">
                                                            <div class=\"kt-form__label\">
                                                                <label class=\"kt-label m-label--single\">";
            // line 81
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
            // line 93
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
            // line 103
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
            echo ":</label>
                                                            </div>
                                                            <div class=\"kt-form__control\">
                                                                <div class=\"input-group\">
                                            \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
            // line 107
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
            echo "</span></div>
                                    \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\">
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
            // line 118
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
            // line 149
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delete"]);
            echo "
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "items", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 155
                echo "                                                <div data-repeater-item class=\"align-items-center\">
                                                    <input type=\"hidden\" name=\"id\" value=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 156), "html", null, true);
                echo "\" />
                                                    <div class=\"form-group row\">
                                                        <div class=\"col-md-4\">
                                                            <div class=\"kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label>";
                // line 161
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Category"]);
                echo ":</label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <select class=\"form-control selectpicker\" data-live-search=\"true\" name=\"category_id\" required>
                                                                        <option data-hidden=\"true\"></option>
                                                                        ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 167
                    echo "                                                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 167), "html", null, true);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "category_id", [], "any", false, false, false, 167) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 167))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 167), "html", null, true);
                    echo "</option>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-8\">
                                                            <div class=\"kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"kt-label m-label--single\">";
                // line 176
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Description"]);
                echo ":</label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 179), "html", null, true);
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
                // line 188
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Quantity"]);
                echo ":</label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"quantity\" value=\"";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 191), "html", null, true);
                echo "\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"kt-form__group--inline\">
                                                                <div class=\"kt-form__label\">
                                                                    <label class=\"kt-label m-label--single\">";
                // line 198
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Weight"]);
                echo ":</label>
                                                                </div>
                                                                <div class=\"kt-form__control\">
                                                                    <div class=\"input-group\">
                                                \t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">";
                // line 202
                echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Kg"]);
                echo "</span></div>
                                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\" value=\"";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "weight", [], "any", false, false, false, 203), "html", null, true);
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
                // line 213
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
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "length", [], "any", false, false, false, 219), "html", null, true);
                echo "\" style=\"max-width: 100px;\">
                                                                            </span>
                                                                        </div>
                                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
                                                                            <span class=\"input-group-text\">
                                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"width\" value=\"";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "width", [], "any", false, false, false, 225), "html", null, true);
                echo "\" style=\"max-width: 100px;\">
                                                                            </span>
                                                                        </div>
                                        \t\t\t\t\t\t\t\t<div class=\"input-group-prepend\"><span class=\"input-group-text\">x</span></div>
                                        \t\t\t\t\t\t\t\t<div class=\"input-group-append\">
                                                                            <span class=\"input-group-text\">
                                                                                <input type=\"text\" class=\"form-control form-control-sm bootstrap-touchspin-vertical-btn\" name=\"height\" value=\"";
                // line 231
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 231), "html", null, true);
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
                // line 244
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
            // line 250
            echo "                                        </div>
                                     </div>
                                     <div class=\"form-group form-group-last row\">
                                         <label class=\"col-xl-3 col-lg-3 col-form-label\">
                                             <a href=\"javascript:;\" data-repeater-create=\"\" class=\"btn btn-bold btn-sm btn-label-brand\">
                                                 <i class=\"la la-plus\"></i> ";
            // line 255
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Add Item"]);
            echo "
                                             </a>
                                         </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 263
        echo "                    <div class=\"form-group\">
                        <label>";
        // line 264
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Delivery Status"]);
        echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                            <option data-hidden=\"true\"></option>
                            ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 268
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 268), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status_id", [], "any", false, false, false, 268) == twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 268))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 268), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "                        </select>
\t\t\t\t\t</div>
                    ";
        // line 272
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 272) == 1)) {
            // line 273
            echo "    \t\t\t\t\t<div class=\"form-group\">
                            <label>";
            // line 274
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Sender Location"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control address\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 275), "street", [], "any", false, false, false, 275), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 275), "area", [], "any", false, false, false, 275), "name", [], "any", false, false, false, 275), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 275), "thecity", [], "any", false, false, false, 275), "name", [], "any", false, false, false, 275), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 275), "thestate", [], "any", false, false, false, 275), "name", [], "any", false, false, false, 275), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 275), "country", [], "any", false, false, false, 275), "name", [], "any", false, false, false, 275), "html", null, true);
            echo "\" rel=\"sender\">
                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"lat\" value=\"";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 276), "lat", [], "any", false, false, false, 276), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"lng\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 277), "lng", [], "any", false, false, false, 277), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"url\" value=\"";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 278), "url", [], "any", false, false, false, 278), "html", null, true);
            echo "\" />
                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                            <span class=\"form-text text-muted\">";
            // line 280
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct sender location in google map for easy access next time"]);
            echo "</span>
                        </div>
                    ";
        } else {
            // line 283
            echo "    \t\t\t\t\t<div class=\"form-group\">
                            <label>";
            // line 284
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Receiver Location"]);
            echo "&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control address\" value=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 285), "street", [], "any", false, false, false, 285), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 285), "area", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 285), "thecity", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 285), "thestate", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 285), "country", [], "any", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
            echo "\" rel=\"receiver\">
                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"lat\" value=\"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 286), "lat", [], "any", false, false, false, 286), "html", null, true);
            echo "\"/>
                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"lng\" value=\"";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 287), "lng", [], "any", false, false, false, 287), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"url\" value=\"";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 288), "url", [], "any", false, false, false, 288), "html", null, true);
            echo "\" />
                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                            <span class=\"form-text text-muted\">";
            // line 290
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Correct receiver location in google map for easy access next time"]);
            echo "</span>
                        </div>
                    ";
        }
        // line 293
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">";
        // line 294
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Notes"]);
        echo "</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"note\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t</div>
\t\t</div>

        <div class=\"kt-portlet__foot\">
            <div class=\"kt-form__actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t\t<div class=\"col-xl-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save\">";
        // line 307
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Update"]);
        echo "</button>
                        <span class=\"kt-margin-left-10\">";
        // line 308
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["or"]);
        echo " <a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard/shipment", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308)]);
        echo "\" class=\"kt-link\">";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancel"]);
        echo "</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t</div>
            </div>
        </div>
    ";
        // line 314
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
    <!--end::Form-->
</div>
<!-- end:: Section -->

";
        // line 319
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 320
        echo "    ";
        if ((($context["currentLang"] ?? null) == "ar")) {
            // line 321
            echo "        <link href=\"./admin/css/demo1/pages/support-center/faq-3.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // line 324
            echo "        <link href=\"./admin/css/demo1/pages/support-center/faq-3.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        // line 327
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
        // line 319
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 352
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 353
        echo "<script src=\"./admin/vendors/custom/uppy/uppy.bundle.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 354
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js");
        echo "\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key=";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 355), "map", [], "any", false, false, false, 355), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function() {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });


    \$('body').on('click', '#save', function(e, clickedIndex, newValue, oldValue){
        e.preventDefault();
          swal.fire({
              buttonsStyling: false,

              html: \"<strong>";
        // line 373
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Are you sure?"]);
        echo "</strong><br />";
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["This action cannot be undo, and will be recorded by your username and time for administration review"]);
        echo "\",
              type: \"warning\",

              confirmButtonText: \"";
        // line 376
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Yes, confirm!"]);
        echo "\",
              confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

              showCancelButton: true,
              cancelButtonText: '";
        // line 380
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["No"]);
        echo "',
              cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
          }).then(function (result) {
              if (result.value) {
                  \$('.kt_form').submit();
              } else {
                  swal.fire({
                      title: '";
        // line 387
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Cancelled"]);
        echo "',
                      text: '";
        // line 388
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Nothing updated! :)"]);
        echo "',
                      type: 'error',
                      buttonsStyling: false,
                      confirmButtonText: '";
        // line 391
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["OK"]);
        echo "',
                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                  });
              }
          });
    });


    \$('#kt_repeater_1').repeater({
        initEmpty: false,
        show: function () {
            \$(this).slideDown();
            \$('.selectpicker').selectpicker({
                noneSelectedText: '";
        // line 404
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
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');


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
            ";
        // line 431
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "type", [], "any", false, false, false, 431) == 1)) {
            // line 432
            echo "                location: [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 432), "lat", [], "any", false, false, false, 432), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "sender_address", [], "any", false, false, false, 432), "lng", [], "any", false, false, false, 432), "html", null, true);
            echo "],
            ";
        } else {
            // line 434
            echo "                location: [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 434), "lat", [], "any", false, false, false, 434), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "receiver_address", [], "any", false, false, false, 434), "lng", [], "any", false, false, false, 434), "html", null, true);
            echo "],
            ";
        }
        // line 436
        echo "            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

});
</script>
";
        // line 352
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/order-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 352,  818 => 436,  810 => 434,  802 => 432,  800 => 431,  770 => 404,  754 => 391,  748 => 388,  744 => 387,  734 => 380,  727 => 376,  719 => 373,  698 => 355,  694 => 354,  691 => 353,  689 => 352,  687 => 319,  661 => 327,  656 => 324,  651 => 321,  648 => 320,  646 => 319,  638 => 314,  625 => 308,  621 => 307,  605 => 294,  602 => 293,  596 => 290,  591 => 288,  587 => 287,  583 => 286,  571 => 285,  567 => 284,  564 => 283,  558 => 280,  553 => 278,  549 => 277,  545 => 276,  533 => 275,  529 => 274,  526 => 273,  524 => 272,  520 => 270,  505 => 268,  501 => 267,  495 => 264,  492 => 263,  481 => 255,  474 => 250,  462 => 244,  446 => 231,  437 => 225,  428 => 219,  411 => 213,  398 => 203,  394 => 202,  387 => 198,  377 => 191,  371 => 188,  359 => 179,  353 => 176,  344 => 169,  329 => 167,  325 => 166,  317 => 161,  309 => 156,  306 => 155,  302 => 154,  294 => 149,  252 => 118,  238 => 107,  231 => 103,  218 => 93,  203 => 81,  194 => 74,  183 => 72,  179 => 71,  171 => 66,  158 => 56,  144 => 45,  139 => 43,  134 => 40,  119 => 38,  115 => 37,  109 => 34,  106 => 33,  104 => 32,  100 => 30,  85 => 28,  81 => 27,  75 => 24,  66 => 18,  52 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- begin:: Section -->
<div class=\"kt-sc-faq-3 kt-sc-feedback\">
    <div class=\"kt-sc__title\">
        {{'Update Shipment'|__}}: <b>{{settings.tracking.prefix_order}}{{settings.tracking.numbers_order}}{{order.number}}</b>
    </div>
    <div class=\"kt-sc__subtitle\">
        {{'Complete the form to update this shipment!'|__}}
    </div>
    <div class=\"kt-sc__bg\">
        <svg id=\"e0b35d3b-637f-4cd2-a9fd-b6e76c92ec56\" data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"912.92081\" height=\"680.22808\" viewBox=\"0 0 912.92081 680.22808\"><title>delivery_address</title><rect x=\"102.00233\" y=\"641.27035\" width=\"556.10756\" height=\"2.36139\" fill=\"#3f3d56\"/><path d=\"M540.45658,426.2614s-11.802,53.109,11.802,43.66742,9.44161-46.02782,9.44161-46.02782Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#ffb9b9\"/><path d=\"M761.15409,443.96441s28.32482,34.22581,10.62181,41.307-27.14462-31.86542-24.78422-35.406S761.15409,443.96441,761.15409,443.96441Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#ffb9b9\"/><circle cx=\"550.34306\" cy=\"56.7313\" r=\"35.40602\" fill=\"#ffb9b9\"/><polygon points=\"523.789 70.304 519.068 106.89 558.014 121.052 566.276 79.745 523.789 70.304\" fill=\"#ffb9b9\"/><path d=\"M689.16185,216.18569s-20.00721-9.87712-24.166-17.92077l-8.8796,8.47916s-63.73084-5.901-73.17244,25.96442-1.1802,147.52507-1.1802,147.52507-12.98221,51.92883-9.44161,53.109,47.208,22.42381,108.57846,10.62181c0,0,27.14461-4.72081,31.86542-1.18021s-2.3604-56.64962-2.3604-56.64962,47.208-106.21806,38.94662-119.20027-44.84763-40.12682-44.84763-40.12682l2.3604-12.9822S690.34205,220.90649,689.16185,216.18569Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M592.3854,224.44709s-21.24361,10.62181-24.78421,27.14462S531.015,405.01779,534.55557,413.27919,536.916,432.1624,536.916,432.1624l30.68521-3.5406s-5.901-8.26141-2.3604-11.802,7.0812-15.34261,4.7208-20.06341-4.7208,3.5406,8.26141-11.802S620.71022,229.1679,592.3854,224.44709Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M742.27088,264.57391s10.03171.5901,12.39211,17.11291,6.4911,118.61016,6.4911,118.61016,15.34261,33.04562,9.44161,37.76642-2.36041,11.802-2.36041,11.802l-21.24361,5.901-46.02782-71.99224Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#cfcce0\"/><path d=\"M575.8626,428.6218s-7.08121,1.1802-7.08121,27.14461-12.9822,106.21806-4.7208,119.20026,9.4416,129.82207,9.4416,129.82207,22.42382,9.4416,41.307-21.24361l2.3604-16.52281,4.7208-80.25364,18.88321-100.317L666.738,597.39048s-3.5406,133.36267,9.44161,133.36267,37.76642-10.6218,37.76642-10.6218,5.901-11.802,3.5406-17.703-4.7208-4.7208-2.3604-9.44161,5.901-127.46166,5.901-127.46166-4.7208-126.28147-10.6218-129.82207S575.8626,428.6218,575.8626,428.6218Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M575.8626,700.06794l-18.88321,20.06341s-34.22582,31.86541-4.72081,33.04561,46.02783-18.88321,46.02783-21.24361,1.1802-10.6218,9.4416-10.6218,28.32482-20.06341,23.604-28.32482-18.88321-11.802-18.88321-11.802Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M677.35985,726.03235s-14.16241,28.32482-5.901,34.22582,10.6218,8.2614,10.6218,8.2614,7.0812-1.1802,5.901,9.44161,42.48723,16.52281,44.84763,8.2614,1.1802-24.78421-3.54061-29.505-18.8832-37.76642-18.8832-37.76642S695.06286,701.24814,677.35985,726.03235Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><path d=\"M729.61563,138.18723l6.66977-.94746s-9.28508-17.08977-27.25616-20.19295l6.30833-4.25771s-10.96188-7.83392-25.12862,2.2356c-7.44718,5.2933-16.09389,11.54151-22.4543,19.406l-6.50628-1.59008,1.25421,6.64282-10.96544,3.65643L661.55472,144.45a34.39538,34.39538,0,0,0-2.6885,9.85288,13.20963,13.20963,0,0,0,2.6474,9.54283h0s11.346-13.75438,11.94045-16.18661l-1.486,6.08055s7.41277-3.98771,8.30439-7.636l2.27357,5.06625,3.29154-6.2837L704.6381,156.569l-1.97636-6.28234,12.25716,4.92866-3.33623-7.90348s12.428,11.41415,11.3458,18.23779c-1.08239,6.8235,1.57189,14.18856,1.57189,14.18856S743.40339,151.22239,729.61563,138.18723Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2f2e41\"/><rect x=\"723.92081\" y=\"429.45048\" width=\"189\" height=\"2.26159\" fill=\"#3f3d56\"/><rect x=\"160.89644\" y=\"603.7084\" width=\"45.55804\" height=\"45.55804\" fill=\"#cfcce0\"/><path d=\"M343.99959,753.15792H296.04376V705.20209h47.95583Zm-45.558-2.39779H341.6018V707.59988H298.44155Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><rect x=\"375.34822\" y=\"320.09176\" width=\"30.9126\" height=\"29.84223\" transform=\"translate(-238.07349 53.63808) rotate(-21.14419)\" fill=\"#f2f2f2\"/><path d=\"M405.39252,341.159l-30.34888,11.73755-11.33113-29.298L394.06139,311.861Zm-29.398,9.68577,27.314-10.5638-10.198-26.36821-27.314,10.5638Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><rect x=\"895.02761\" y=\"630.14139\" width=\"30.9126\" height=\"29.84223\" transform=\"translate(1080.94399 -535.56656) rotate(71.02706)\" fill=\"#f2f2f2\"/><path d=\"M903.78947,659.40718,893.21015,628.6354l29.70628-10.213,10.57932,30.77178Zm-8.565-29.74384,9.52139,27.6946,26.73565-9.1917-9.52139-27.69461Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M286.8802,509.50788c16.90362.3626,30.35024,12.61229,30.35024,12.61229s-13.95955,11.6618-30.86317,11.29919S256.017,520.80707,256.017,520.80707,269.97659,509.14527,286.8802,509.50788Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/><path d=\"M201.89746,451.80706c15.27169,7.2553,32.78343,2.33538,32.78343,2.33538s-7.24856-16.68308-22.52025-23.93838-32.78342-2.33537-32.78342-2.33537S186.62577,444.55177,201.89746,451.80706Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/><path d=\"M203.44987,444.59715c16.83734-1.53875,31.575,9.12272,31.575,9.12272s-12.561,13.15627-29.39836,14.695-31.575-9.12272-31.575-9.12272S186.61253,446.1359,203.44987,444.59715Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M265.17029,447.51226c-1.61385,16.8303,8.98175,31.61542,8.98175,31.61542s13.21218-12.5022,14.826-29.3325-8.98175-31.61543-8.98175-31.61543S266.78414,430.682,265.17029,447.51226Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M344.46582,550.732c-8.83127,14.41779-5.79289,32.352-5.79289,32.352s17.3567-5.44166,26.188-19.85944,5.79289-32.352,5.79289-32.352S353.29709,536.31423,344.46582,550.732Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><path d=\"M318.84517,707.49034l1.287-.8699a40.32083,40.32083,0,0,1-7.11618-22.36062c.036-11.69395,5.77986-22.51,11.33484-32.97005,1.03106-1.94153,2.05871-3.877,3.0473-5.81095a126.84805,126.84805,0,0,0,9.86618-24.7682c8.61631-32.01976.1331-69.797-22.69206-101.05455-18.10707-24.79626-45.09932-46.47925-82.51821-66.2882l-.72655,1.37273c37.20577,19.69594,64.0251,41.2299,81.99035,65.83163,22.55061,30.881,30.94168,68.16527,22.44633,99.73491a125.3412,125.3412,0,0,1-9.74862,24.46484c-.98556,1.92675-2.00941,3.85463-3.03668,5.78934-5.64334,10.62686-11.47894,21.61548-11.5161,33.69395A41.88823,41.88823,0,0,0,318.84517,707.49034Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#3f3d56\"/><circle cx=\"14.75596\" cy=\"330.76716\" r=\"14.75565\" fill=\"#3f3d56\"/><polygon points=\"818.044 417.926 628.109 349.709 662.018 255.296 780.281 226.293 851.954 323.514 818.044 417.926\" fill=\"#2f2e41\"/><path d=\"M938.57461,509.09041,796.6355,454.984c36.8477-49.35662,53.32538-84.17278,53.33749-138.959L991.9121,370.1314C958.93688,416.97245,945.147,452.18482,938.57461,509.09041Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#f2f2f2\"/><rect x=\"872.979\" y=\"363.39985\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(46.39006 -410.89587) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"867.76392\" y=\"377.08073\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(50.92105 -408.141) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"862.54884\" y=\"390.7616\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(55.45204 -405.38614) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"857.33377\" y=\"404.44248\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(59.98302 -402.63127) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"852.11869\" y=\"418.12336\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(64.51401 -399.8764) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"846.90362\" y=\"431.80424\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(69.045 -397.12153) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"841.68854\" y=\"445.48512\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(73.57599 -394.36666) rotate(20.86657)\" fill=\"#3f3d56\"/><rect x=\"836.47346\" y=\"459.16599\" width=\"78.69621\" height=\"3.66029\" transform=\"translate(78.10697 -391.61179) rotate(20.86657)\" fill=\"#3f3d56\"/><polygon points=\"813.656 430.144 623.721 361.927 662.018 255.296 742.226 330.502 851.954 323.514 813.656 430.144\" fill=\"#3f3d56\"/><polygon points=\"717.148 396.545 622.442 362.53 645.518 298.277 647.401 298.953 625.001 361.323 717.824 394.662 717.148 396.545\" fill=\"#2568ef\"/><rect x=\"796.39003\" y=\"432.76595\" width=\"29.50502\" height=\"11.80201\" transform=\"matrix(0.94114, 0.33802, -0.33802, 0.94114, 52.48444, -358.24895)\" fill=\"#2568ef\"/><polygon points=\"369.521 642.111 220.865 642.032 222.032 558.576 295.91 591.781 370.688 560.655 369.521 642.111\" fill=\"#3f3d56\"/><rect x=\"376.17876\" y=\"713.97725\" width=\"21.73552\" height=\"8.69421\" transform=\"translate(-133.45769 -115.22766) rotate(0.80117)\" fill=\"#2568ef\"/><polygon points=\"371.185 560.541 296.045 598.848 221.641 560.541 221.641 558.331 371.185 558.331 371.185 560.541\" fill=\"#2568ef\"/><ellipse cx=\"923.32742\" cy=\"345.64469\" rx=\"9.02966\" ry=\"25\" transform=\"translate(127.93044 975.41116) rotate(-69.13343)\" fill=\"#2568ef\"/><path d=\"M967.10457,212.43884a38,38,0,0,0-47.56929,25.00326c-6.23144,20.04035,10.751,93.40458,10.751,93.40458s55.59009-50.7982,61.82152-70.83855A38,38,0,0,0,967.10457,212.43884ZM950.477,265.91335a18,18,0,1,1,22.53282-11.84365A18,18,0,0,1,950.477,265.91335Z\" transform=\"translate(-143.53959 -109.88596)\" fill=\"#2568ef\"/></svg>
    </div>
</div>
<!-- end:: Section -->

<!-- begin:: Section -->
<div class=\"kt-portlet kt-margin-t-30\">
    <!--begin::Form-->
    {{ form_ajax('onSave', { success: 'created successfully!', flash: true, class: 'kt_form' }) }}
        <div class=\"kt-portlet__body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t<div class=\"col-xl-6\">
                    <div class=\"form-group\">
                        <label>{{'Office'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" name=\"office_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for office in offices %}
                                <option value=\"{{office.id}}\" {% if order.office_id == office.id %}selected{% endif %}>{{office.name}}</option>
                            {% endfor %}
                        </select>
                    </div>
                    {% if item.requested in [0,1] %}
                        <div class=\"form-group\">
                            <label>{{'Package Type'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <select class=\"form-control\" name=\"packaging_id\" id=\"packaging_id\" data-live-search=\"true\" required>
                                <option data-hidden=\"true\"></option>
                                {% for package in packaging %}
                                    <option value=\"{{package.id}}\" {% if order.packaging_id == package.id %}selected{% endif %}>{{package.name}}</option>
                                {% endfor %}
                            </select>
    \t\t\t\t\t</div>
                        <div class=\"form-group\">
                            <label>{{'Shipping Date'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <div class=\"input-group date\">
                                <input type=\"text\" class=\"form-control date\" readonly=\"\" name=\"ship_date\" value=\"{{order.ship_date|date(settings.dateformat)}}\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\">
                                        <i class=\"la la-calendar\"></i>
                                    </span>
                                </div>
                            </div>
    \t\t\t\t\t</div>
                        <div class=\"form-group\">
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
                                    \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\">
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
                                        \t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bootstrap-touchspin-vertical-btn\" name=\"weight\" value=\"{{item.weight}}\">
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
                        </div>
                    {% endif %}
                    <div class=\"form-group\">
                        <label>{{'Delivery Status'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                        <select class=\"form-control\" data-live-search=\"true\" name=\"status_id\" required>
                            <option data-hidden=\"true\"></option>
                            {% for status in statuses %}
                                <option value=\"{{status.id}}\" {% if order.status_id == status.id %}selected{% endif %}>{{status.name}}</option>
                            {% endfor %}
                        </select>
\t\t\t\t\t</div>
                    {% if order.type == 1 %}
    \t\t\t\t\t<div class=\"form-group\">
                            <label>{{'Sender Location'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control address\" value=\"{{order.sender_address.street}}, {{order.sender_address.area.name}} {{order.sender_address.thecity.name}} {{order.sender_address.thestate.name}} {{order.sender_address.country.name}}\" rel=\"sender\">
                            <input type=\"hidden\" class=\"form-control lat\" data-sender=\"lat\" name=\"lat\" value=\"{{order.sender_address.lat}}\"/>
                            <input type=\"hidden\" class=\"form-control lng\" data-sender=\"lng\" name=\"lng\" value=\"{{order.sender_address.lng}}\" />
                            <input type=\"hidden\" class=\"form-control url\" data-sender=\"url\" name=\"url\" value=\"{{order.sender_address.url}}\" />
                            <div class=\"col-sm-12 map_canvas map_sender\"></div>
                            <span class=\"form-text text-muted\">{{'Correct sender location in google map for easy access next time'|__}}</span>
                        </div>
                    {% else %}
    \t\t\t\t\t<div class=\"form-group\">
                            <label>{{'Receiver Location'|__}}&nbsp;<span class=\"kt-badge kt-badge--danger kt-badge--dot\"></span></label>
                            <input type=\"text\" class=\"form-control address\" value=\"{{order.receiver_address.street}}, {{order.receiver_address.area.name}} {{order.receiver_address.thecity.name}} {{order.receiver_address.thestate.name}} {{order.receiver_address.country.name}}\" rel=\"receiver\">
                            <input type=\"hidden\" class=\"form-control lat\" data-receiver=\"lat\" name=\"lat\" value=\"{{order.receiver_address.lat}}\"/>
                            <input type=\"hidden\" class=\"form-control lng\" data-receiver=\"lng\" name=\"lng\" value=\"{{order.receiver_address.lng}}\" />
                            <input type=\"hidden\" class=\"form-control url\" data-receiver=\"url\" name=\"url\" value=\"{{order.receiver_address.url}}\" />
                            <div class=\"col-sm-12 map_canvas map_receiver\"></div>
                            <span class=\"form-text text-muted\">{{'Correct receiver location in google map for easy access next time'|__}}</span>
                        </div>
                    {% endif %}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"exampleTextarea\">{{'Notes'|__}}</label>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"note\" rows=\"3\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t</div>
\t\t</div>

        <div class=\"kt-portlet__foot\">
            <div class=\"kt-form__actions\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t\t<div class=\"col-xl-6\">
                        <button type=\"button\" class=\"btn btn-primary\" id=\"save\">{{'Update'|__}}</button>
                        <span class=\"kt-margin-left-10\">{{'or'|__}} <a href=\"{{'dashboard/shipment'|page({'id':this.param.id})}}\" class=\"kt-link\">{{'Cancel'|__}}</a></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xl-3\"></div>
\t\t\t\t</div>
            </div>
        </div>
    {{ form_close() }}
    <!--end::Form-->
</div>
<!-- end:: Section -->

{% put styles %}
    {% if currentLang == 'ar'%}
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.rtl.css\" rel=\"stylesheet\" type=\"text/css\" />
    {% else %}
        <link href=\"./admin/css/demo1/pages/support-center/faq-3.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"./admin/css/demo1/pages/support-center/feedback.css\" rel=\"stylesheet\" type=\"text/css\" />
    {% endif %}
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
<script src=\"./admin/vendors/custom/uppy/uppy.bundle.js\" type=\"text/javascript\"></script>
<script src=\"{{ 'assets/admin/vendors/custom/geocomplete/jquery.geocomplete.js'|theme }}\" type=\"text/javascript\"></script>
<script src=\"//maps.googleapis.com/maps/api/js?libraries=places&key={{settings.google.map}}\"></script>
<script type=\"text/javascript\">
KTUtil.ready(function() {
    \$( \".kt_form\" ).validate({
        ignore: \":hidden\",
        invalidHandler: function(event, validator) {
            var alert = \$('.kt_form_msg');
            alert.removeClass('kt--hide').show();
            KTUtil.scrollTop();
        }
    });


    \$('body').on('click', '#save', function(e, clickedIndex, newValue, oldValue){
        e.preventDefault();
          swal.fire({
              buttonsStyling: false,

              html: \"<strong>{{'Are you sure?'|__}}</strong><br />{{'This action cannot be undo, and will be recorded by your username and time for administration review'|__}}\",
              type: \"warning\",

              confirmButtonText: \"{{'Yes, confirm!'|__}}\",
              confirmButtonClass: \"btn btn-sm btn-bold btn-success\",

              showCancelButton: true,
              cancelButtonText: '{{\"No\"|__}}',
              cancelButtonClass: \"btn btn-sm btn-bold btn-danger\"
          }).then(function (result) {
              if (result.value) {
                  \$('.kt_form').submit();
              } else {
                  swal.fire({
                      title: '{{\"Cancelled\"|__}}',
                      text: '{{\"Nothing updated! :)\"|__}}',
                      type: 'error',
                      buttonsStyling: false,
                      confirmButtonText: '{{\"OK\"|__}}',
                      confirmButtonClass: \"btn btn-sm btn-bold btn-brand\",
                  });
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
        },
        hide: function (deleteElement) {
            \$(this).slideUp(deleteElement);
        }
    });
    \$('#kt_repeater_1 .new .delete_btn').trigger('click');


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
            {% if order.type == 1 %}
                location: [{{order.sender_address.lat}},{{order.sender_address.lng}}],
            {% else %}
                location: [{{order.receiver_address.lat}},{{order.receiver_address.lng}}],
            {% endif %}
            details: \".location-\"+\$(this).attr('rel'),
            detailsAttribute: 'data-'+\$(this).attr('rel'),
            autoselect: true,
        });
        address.bind(\"geocode:dragged\", function(event, latLng){
            \$(\"input[data-\"+address.attr('rel')+\"=lat]\").val(latLng.lat());
            \$(\"input[data-\"+address.attr('rel')+\"=lng]\").val(latLng.lng());
        });

    });

});
</script>
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/dashboard/order-update.htm", "");
    }
}
