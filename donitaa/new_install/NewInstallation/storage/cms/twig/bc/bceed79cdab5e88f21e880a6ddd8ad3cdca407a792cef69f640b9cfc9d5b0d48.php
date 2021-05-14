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

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/home.htm */
class __TwigTemplate_5a2e0001600e5447b284d067fe50ec422cb18e702da11a668e367f83c970b3dd extends \Twig\Template
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
        echo "<!-- Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->
<div class=\"kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme\">
\t<!-- Loader -->
\t<div class=\"kl-loader\">
\t\t<svg version=\"1.1\" id=\"loader-1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"40px\" height=\"40px\" viewbox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\"><path opacity=\"0.2\" fill=\"#000\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\"></path><path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z\" transform=\"rotate(98.3774 20 20)\"><animatetransform attributetype=\"xml\" attributename=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatcount=\"indefinite\"></animatetransform></path></svg>
\t</div>
\t<!-- Loader -->

\t<div class=\"bgback\">
\t</div>

\t<!-- Animated Sparkles -->
\t<div class=\"th-sparkles\">
\t</div>
\t<!--/ Animated Sparkles -->

\t<!-- iOS Slider wrapper with animateme scroll efect -->
\t<div class=\"iosSlider kl-slideshow-inner animateme\" data-trans=\"6000\" data-autoplay=\"0\" data-infinite=\"true\" data-when=\"span\" data-from=\"0\" data-to=\"0.75\" data-translatey=\"300\" data-easing=\"linear\">
\t\t<!-- Slides -->
\t\t<div class=\"kl-iosslider hideControls\">
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "website", [], "any", false, false, false, 21), "sliders", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["key"] => $context["slider"]) {
            // line 22
            echo "\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"item iosslider__item\">
\t\t\t\t<!-- Image -->
\t\t\t\t<!-- <div class=\"slide-item-bg\" style=\"background-image:url(./front/images/_niches/cargo/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sliders_pics", [], "any", false, false, false, 25)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "file_name", [], "any", false, false, false, 25), "html", null, true);
            echo ");\"> -->
\t\t\t\t\t<div class=\"slide-item-bg\" style=\"background-image:url(";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sliders_pics", [], "any", false, false, false, 26)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null), "path", [], "any", false, false, false, 26), "html", null, true);
            echo ");\">
\t\t\t\t</div><!-- cargo2.jpg --> 
\t\t\t\t<!--/ Image -->

\t\t\t\t<!-- Gradient overlay -->
\t\t\t\t<div class=\"kl-slide-overlay\" style=\"background:rgba(32,55,152,0.4); background: -moz-linear-gradient(left, rgba(32,55,152,0.4) 0%, rgba(17,93,131,0.25) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(32,55,152,0.4)), color-stop(100%,rgba(17,93,131,0.25))); background: -webkit-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -o-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -ms-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: linear-gradient(to right, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); \">
\t\t\t\t</div>
\t\t\t\t<!--/ Gradient overlay -->

\t\t\t\t<!-- Captions container -->
\t\t\t\t<div class=\"container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle\">
\t\t\t\t\t<!-- Captions animateme wrapper -->
\t\t\t\t\t<div class=\"animateme\" data-when=\"span\" data-from=\"0\" data-to=\"0.75\" data-opacity=\"0.1\" data-easing=\"linear\">
\t\t\t\t\t\t<!-- Main Big Title -->
\t\t\t\t\t\t<h2 class=\"main_title has_titlebig\">
\t\t\t\t\t\t\t<!-- <span><strong>";
            // line 41
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FAST"]);
            echo "</strong>, ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SAFE & ACCURATE"]);
            echo "</span> -->
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "titleslider", [], "any", false, false, false, 43), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<!--/ Main Big Title -->

\t\t\t\t\t\t<!-- Big Title -->
\t\t\t\t\t\t<h3 class=\"title_big\">
\t\t\t\t\t\t\t<!-- ";
            // line 50
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["ANYWHERE"]);
            echo "<strong> ";
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["IN THIS WORLD"]);
            echo "</strong> -->
\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "subtitle", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<!--/ Big Title -->

\t\t\t\t\t\t<!-- Link more button -->
\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 56), "html", null, true);
            echo "\" target=\"_self\" class=\"more\">  <!-- ";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
            echo " -->
\t\t\t\t\t\t\t";
            // line 57
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SEE MORE"]);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--/ Link more button -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ Captions animateme wrapper -->
\t\t\t\t</div>
\t\t\t\t<!--/ Captions container -->
\t\t\t</div>
\t\t\t<!--/ Slide 1 -->
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</div>
\t\t<!--/ Slides -->

\t\t<!-- Navigation Controls - Prev -->
\t\t<div class=\"kl-iosslider-prev\">
\t\t\t<!-- Arrow -->
\t\t\t<span class=\"thin-arrows ta__prev\"></span>
\t\t\t<!--/ Arrow -->

\t\t\t<!-- Label - prev -->
\t\t\t<div class=\"btn-label\">
\t\t\t\t";
        // line 78
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["PREV"]);
        echo "
\t\t\t</div>
\t\t\t<!--/ Label - prev -->
\t\t</div>
\t\t<!--/ Navigation Controls - Prev -->

\t\t<!-- Navigation Controls - Next -->
\t\t<div class=\"kl-iosslider-next\">
\t\t\t<!-- Arrow -->
\t\t\t<span class=\"thin-arrows ta__next\"></span>
\t\t\t<!--/ Arrow -->

\t\t\t<!-- Label - next -->
\t\t\t<div class=\"btn-label\">
\t\t\t\t";
        // line 92
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["NEXT"]);
        echo "
\t\t\t</div>
\t\t\t<!--/ Label - next -->
\t\t</div>
\t\t<!--/ Navigation Controls - Prev -->
\t</div>
\t<!--/ iOS Slider wrapper with animateme scroll efect -->

\t<!-- Bullets -->
\t<div class=\"kl-ios-selectors-block bullets2\">
\t\t<div class=\"selectors\">
\t\t\t<!-- Item #1 -->
\t\t\t<div class=\"item iosslider__bull-item first\">
\t\t\t</div>
\t\t\t<!--/ Item #1 -->

\t\t\t<!-- Item #2 -->
\t\t\t<div class=\"item iosslider__bull-item\">
\t\t\t</div>
\t\t\t<!--/ Item #2 -->
\t\t</div>
\t\t<!--/ .selectors -->
\t</div>
\t<!--/ Bullets -->

\t<div class=\"scrollbarContainer\">
\t</div>

\t<!-- Bottom mask style 2 -->
\t<div class=\"kl-bottommask kl-bottommask--shadow_ud\">
\t</div>
\t<!--/ Bottom mask style 2 -->
</div>
<!--/ Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->

<!-- Title element - section with custom paddings -->
<section class=\"hg_section pt-0 pb-25\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t<!-- Title element wit custom paddings -->
\t\t\t\t<div class=\"kl-title-block text-center tbk-symbol--line pt-80\">
\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t<h6 class=\"gray\">
\t\t\t\t\t\t";
        // line 136
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["WELCOME TO"]);
        echo "
\t\t\t\t\t</h6>

\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold text-center black\">
\t\t\t\t\t\t";
        // line 141
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 141), "title", [], "any", false, false, false, 141)]);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t\t<!--/ Title -->
\t\t\t\t</div>
\t\t\t\t<!--/ Title element wit custom paddings -->
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--/ Title element - section with custom paddings -->

<!-- Icon Boxes element Left Floated Style - section white with custom paddings -->
<section class=\"hg_section bg-white pt-100 pb-80\">
\t<div class=\"container_fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t<div class=\"row gutter-md\">
\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "website", [], "any", false, false, false, 158), "services", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["key"] => $context["service"]) {
            // line 159
            echo "\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-3\">
\t\t\t\t\t\t<!-- Icon box float left -->
\t\t\t\t\t\t<div class=\"kl-iconbox kl-iconbox--fleft text-left\">
\t\t\t\t\t\t\t<div class=\"kl-iconbox__inner\">
\t\t\t\t\t\t\t\t<!-- Icon with custom sizes -->
\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "services_pics", [], "any", false, false, false, 165)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["key"]] ?? null) : null), "path", [], "any", false, false, false, 165), "html", null, true);
            echo "\" class=\"kl-iconbox__icon\"  alt=\"\" title=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Icon -->

\t\t\t\t\t\t\t\t<!-- /.kl-iconbox__icon-wrapper -->
\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__content-wrapper\">
\t\t\t\t\t\t\t\t\t<!-- Title with csutom size, weight and color -->
\t\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__el-wrapper kl-iconbox__title-wrapper\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"kl-iconbox__title fs-s fw-extrabold gray2\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 174
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 174)]);
            echo "
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t\t<div class=\" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper\">
\t\t\t\t\t\t\t\t\t\t<p class=\"kl-iconbox__desc fs-14 gray\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 182
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 182)]);
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Description -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.kl-iconbox__content-wrapper -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ kl-iconbox__inner -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Icon box float left -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-3 -->
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
\t\t\t\t\t<!-- <img src=\"./front/images/_niches/cargo/sailing-boat.svg\" class=\"kl-iconbox__icon\" alt=\"\" title=\"\" />
\t\t\t\t\t<img src=\"./front/images/_niches/cargo/transportation.svg\" class=\"kl-iconbox__icon\"  alt=\"\" title=\"\" />
\t\t\t\t\t<img src=\"./front/images/_niches/cargo/airplane.svg\" class=\"kl-iconbox__icon\" alt=\"\" title=\"\" /> -->

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--/ row gutter-md -->
\t\t\t</div>
\t\t\t<!--/ col-sm-offset-1 col-md-10 col-sm-10 -->
\t\t</div>
\t\t<!--/ row -->
\t</div>
\t<!--/ container-fluid -->
</section>
<!--/ Icon Boxes element Left Floated Style - section white with custom paddings -->

<!-- Title with Call to Action Button section with custom paddings -->
<section class=\"hg_section bg-white pt-60 pb-60\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-9 mb-sm-30\">
\t\t\t\t<!-- Title with alternative font and custom weight and default color -->
\t\t\t\t<h3 class=\"tbk__title kl-font-alt fw-semibold tcolor\">
\t\t\t\t\t";
        // line 219
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["WORK WITH US"]);
        echo "
\t\t\t\t</h3>
\t\t\t\t<!--/ Title with alternative font and custom weight and default color -->

\t\t\t\t<!-- Sub-Title -->
\t\t\t\t<h4 class=\"tbk__subtitle fw-thin\">
\t\t\t\t\t";
        // line 225
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["We'll do everything we can to make you a satisfied customer!"]);
        echo "
\t\t\t\t</h4>
\t\t\t\t<!--/ Sub-Title -->
\t\t\t</div>
\t\t\t<!--/ col-md-9 col-sm-9 -->

\t\t\t<div class=\"col-sm-12 col-md-3 align-self-center\">
\t\t\t\t<!-- Button lined style -->
\t\t\t\t<a href=\"";
        // line 233
        echo url("contact");
        echo "\" class=\"btn btn-lined lined-custom btn-md btn-block\" >
\t\t\t\t\t<span>";
        // line 234
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Contact us"]);
        echo "</span>
\t\t\t\t</a>
\t\t\t\t<!--/ Button lined style -->
\t\t\t</div>
\t\t\t<!--/ col-md-12 col-sm-3 -->
\t\t</div>
\t\t<!--/ row -->
\t</div>
\t<!--/ container -->
</section>
<!--/ Title with Call to Action Button section with custom paddings -->


 ";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 248
        echo "     <style>

     </style>
 ";
        // line 247
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 252
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 253
        echo " <script type=\"text/javascript\">
     \"use strict\";

     // Class Initialization
     jQuery(document).ready(function() {

     });
 </script>
 ";
        // line 252
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 252,  380 => 253,  377 => 252,  375 => 247,  370 => 248,  368 => 247,  352 => 234,  348 => 233,  337 => 225,  328 => 219,  302 => 195,  283 => 182,  272 => 174,  260 => 165,  252 => 159,  248 => 158,  228 => 141,  220 => 136,  173 => 92,  156 => 78,  143 => 67,  127 => 57,  121 => 56,  113 => 51,  107 => 50,  97 => 43,  90 => 41,  72 => 26,  68 => 25,  63 => 22,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->
<div class=\"kl-slideshow iosslider-slideshow uh_light_gray maskcontainer--shadow_ud iosslider--custom-height scrollme\">
\t<!-- Loader -->
\t<div class=\"kl-loader\">
\t\t<svg version=\"1.1\" id=\"loader-1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"40px\" height=\"40px\" viewbox=\"0 0 40 40\" enable-background=\"new 0 0 40 40\" xml:space=\"preserve\"><path opacity=\"0.2\" fill=\"#000\" d=\"M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946 s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634 c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z\"></path><path fill=\"#000\" d=\"M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0 C22.32,8.481,24.301,9.057,26.013,10.047z\" transform=\"rotate(98.3774 20 20)\"><animatetransform attributetype=\"xml\" attributename=\"transform\" type=\"rotate\" from=\"0 20 20\" to=\"360 20 20\" dur=\"0.5s\" repeatcount=\"indefinite\"></animatetransform></path></svg>
\t</div>
\t<!-- Loader -->

\t<div class=\"bgback\">
\t</div>

\t<!-- Animated Sparkles -->
\t<div class=\"th-sparkles\">
\t</div>
\t<!--/ Animated Sparkles -->

\t<!-- iOS Slider wrapper with animateme scroll efect -->
\t<div class=\"iosSlider kl-slideshow-inner animateme\" data-trans=\"6000\" data-autoplay=\"0\" data-infinite=\"true\" data-when=\"span\" data-from=\"0\" data-to=\"0.75\" data-translatey=\"300\" data-easing=\"linear\">
\t\t<!-- Slides -->
\t\t<div class=\"kl-iosslider hideControls\">
\t\t\t{% for key,slider in settings.website.sliders %}
\t\t\t<!-- Slide 1 -->
\t\t\t<div class=\"item iosslider__item\">
\t\t\t\t<!-- Image -->
\t\t\t\t<!-- <div class=\"slide-item-bg\" style=\"background-image:url(./front/images/_niches/cargo/{{settings.sliders_pics[key].file_name}});\"> -->
\t\t\t\t\t<div class=\"slide-item-bg\" style=\"background-image:url({{settings.sliders_pics[key].path}});\">
\t\t\t\t</div><!-- cargo2.jpg --> 
\t\t\t\t<!--/ Image -->

\t\t\t\t<!-- Gradient overlay -->
\t\t\t\t<div class=\"kl-slide-overlay\" style=\"background:rgba(32,55,152,0.4); background: -moz-linear-gradient(left, rgba(32,55,152,0.4) 0%, rgba(17,93,131,0.25) 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(32,55,152,0.4)), color-stop(100%,rgba(17,93,131,0.25))); background: -webkit-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -o-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: -ms-linear-gradient(left, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); background: linear-gradient(to right, rgba(32,55,152,0.4) 0%,rgba(17,93,131,0.25) 100%); \">
\t\t\t\t</div>
\t\t\t\t<!--/ Gradient overlay -->

\t\t\t\t<!-- Captions container -->
\t\t\t\t<div class=\"container kl-iosslide-caption kl-ioscaption--style4 s4ext fromleft klios-alignleft kl-caption-posv-middle\">
\t\t\t\t\t<!-- Captions animateme wrapper -->
\t\t\t\t\t<div class=\"animateme\" data-when=\"span\" data-from=\"0\" data-to=\"0.75\" data-opacity=\"0.1\" data-easing=\"linear\">
\t\t\t\t\t\t<!-- Main Big Title -->
\t\t\t\t\t\t<h2 class=\"main_title has_titlebig\">
\t\t\t\t\t\t\t<!-- <span><strong>{{'FAST'|__}}</strong>, {{'SAFE & ACCURATE'|__}}</span> -->
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t{{slider.titleslider}}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<!--/ Main Big Title -->

\t\t\t\t\t\t<!-- Big Title -->
\t\t\t\t\t\t<h3 class=\"title_big\">
\t\t\t\t\t\t\t<!-- {{'ANYWHERE'|__}}<strong> {{'IN THIS WORLD'|__}}</strong> -->
\t\t\t\t\t\t\t{{slider.subtitle}}
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<!--/ Big Title -->

\t\t\t\t\t\t<!-- Link more button -->
\t\t\t\t\t\t<a href=\"{{slider.link}}\" target=\"_self\" class=\"more\">  <!-- {{'about'|page}} -->
\t\t\t\t\t\t\t{{'SEE MORE'|__}}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--/ Link more button -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ Captions animateme wrapper -->
\t\t\t\t</div>
\t\t\t\t<!--/ Captions container -->
\t\t\t</div>
\t\t\t<!--/ Slide 1 -->
\t\t\t{% endfor %}
\t\t</div>
\t\t<!--/ Slides -->

\t\t<!-- Navigation Controls - Prev -->
\t\t<div class=\"kl-iosslider-prev\">
\t\t\t<!-- Arrow -->
\t\t\t<span class=\"thin-arrows ta__prev\"></span>
\t\t\t<!--/ Arrow -->

\t\t\t<!-- Label - prev -->
\t\t\t<div class=\"btn-label\">
\t\t\t\t{{'PREV'|__}}
\t\t\t</div>
\t\t\t<!--/ Label - prev -->
\t\t</div>
\t\t<!--/ Navigation Controls - Prev -->

\t\t<!-- Navigation Controls - Next -->
\t\t<div class=\"kl-iosslider-next\">
\t\t\t<!-- Arrow -->
\t\t\t<span class=\"thin-arrows ta__next\"></span>
\t\t\t<!--/ Arrow -->

\t\t\t<!-- Label - next -->
\t\t\t<div class=\"btn-label\">
\t\t\t\t{{'NEXT'|__}}
\t\t\t</div>
\t\t\t<!--/ Label - next -->
\t\t</div>
\t\t<!--/ Navigation Controls - Prev -->
\t</div>
\t<!--/ iOS Slider wrapper with animateme scroll efect -->

\t<!-- Bullets -->
\t<div class=\"kl-ios-selectors-block bullets2\">
\t\t<div class=\"selectors\">
\t\t\t<!-- Item #1 -->
\t\t\t<div class=\"item iosslider__bull-item first\">
\t\t\t</div>
\t\t\t<!--/ Item #1 -->

\t\t\t<!-- Item #2 -->
\t\t\t<div class=\"item iosslider__bull-item\">
\t\t\t</div>
\t\t\t<!--/ Item #2 -->
\t\t</div>
\t\t<!--/ .selectors -->
\t</div>
\t<!--/ Bullets -->

\t<div class=\"scrollbarContainer\">
\t</div>

\t<!-- Bottom mask style 2 -->
\t<div class=\"kl-bottommask kl-bottommask--shadow_ud\">
\t</div>
\t<!--/ Bottom mask style 2 -->
</div>
<!--/ Slideshow - iOS Slider element with animateme scroll efect, custom height and bottom mask style 2 -->

<!-- Title element - section with custom paddings -->
<section class=\"hg_section pt-0 pb-25\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t<!-- Title element wit custom paddings -->
\t\t\t\t<div class=\"kl-title-block text-center tbk-symbol--line pt-80\">
\t\t\t\t\t<!-- Sub-title with custom color -->
\t\t\t\t\t<h6 class=\"gray\">
\t\t\t\t\t\t{{'WELCOME TO'|__}}
\t\t\t\t\t</h6>

\t\t\t\t\t<!-- Title with custom size, weight and color -->
\t\t\t\t\t<h3 class=\"tbk__title fs-xl fw-extrabold text-center black\">
\t\t\t\t\t\t{{ settings.company.title|__ }}
\t\t\t\t\t</h3>
\t\t\t\t\t<!--/ Title -->
\t\t\t\t</div>
\t\t\t\t<!--/ Title element wit custom paddings -->
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--/ Title element - section with custom paddings -->

<!-- Icon Boxes element Left Floated Style - section white with custom paddings -->
<section class=\"hg_section bg-white pt-100 pb-80\">
\t<div class=\"container_fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-10 offset-lg-1\">
\t\t\t\t<div class=\"row gutter-md\">
\t\t\t\t\t{% for key,service in settings.website.services %}
\t\t\t\t\t<div class=\"col-sm-12 col-md-6 col-lg-3\">
\t\t\t\t\t\t<!-- Icon box float left -->
\t\t\t\t\t\t<div class=\"kl-iconbox kl-iconbox--fleft text-left\">
\t\t\t\t\t\t\t<div class=\"kl-iconbox__inner\">
\t\t\t\t\t\t\t\t<!-- Icon with custom sizes -->
\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__icon-wrapper w-30 w-md-30 w-sm-20 w-xs-20\">
\t\t\t\t\t\t\t\t\t<img src=\"{{settings.services_pics[key].path}}\" class=\"kl-iconbox__icon\"  alt=\"\" title=\"\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--/ Icon -->

\t\t\t\t\t\t\t\t<!-- /.kl-iconbox__icon-wrapper -->
\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__content-wrapper\">
\t\t\t\t\t\t\t\t\t<!-- Title with csutom size, weight and color -->
\t\t\t\t\t\t\t\t\t<div class=\"kl-iconbox__el-wrapper kl-iconbox__title-wrapper\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"kl-iconbox__title fs-s fw-extrabold gray2\">
\t\t\t\t\t\t\t\t\t\t\t{{service.title|__}}
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Title -->

\t\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t\t<div class=\" kl-iconbox__el-wrapper kl-iconbox__desc-wrapper\">
\t\t\t\t\t\t\t\t\t\t<p class=\"kl-iconbox__desc fs-14 gray\">
\t\t\t\t\t\t\t\t\t\t\t{{service.description|__}}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Description -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /.kl-iconbox__content-wrapper -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--/ kl-iconbox__inner -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Icon box float left -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-6 col-lg-3 -->
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<!-- <img src=\"./front/images/_niches/cargo/sailing-boat.svg\" class=\"kl-iconbox__icon\" alt=\"\" title=\"\" />
\t\t\t\t\t<img src=\"./front/images/_niches/cargo/transportation.svg\" class=\"kl-iconbox__icon\"  alt=\"\" title=\"\" />
\t\t\t\t\t<img src=\"./front/images/_niches/cargo/airplane.svg\" class=\"kl-iconbox__icon\" alt=\"\" title=\"\" /> -->

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--/ row gutter-md -->
\t\t\t</div>
\t\t\t<!--/ col-sm-offset-1 col-md-10 col-sm-10 -->
\t\t</div>
\t\t<!--/ row -->
\t</div>
\t<!--/ container-fluid -->
</section>
<!--/ Icon Boxes element Left Floated Style - section white with custom paddings -->

<!-- Title with Call to Action Button section with custom paddings -->
<section class=\"hg_section bg-white pt-60 pb-60\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 col-md-9 mb-sm-30\">
\t\t\t\t<!-- Title with alternative font and custom weight and default color -->
\t\t\t\t<h3 class=\"tbk__title kl-font-alt fw-semibold tcolor\">
\t\t\t\t\t{{'WORK WITH US'|__}}
\t\t\t\t</h3>
\t\t\t\t<!--/ Title with alternative font and custom weight and default color -->

\t\t\t\t<!-- Sub-Title -->
\t\t\t\t<h4 class=\"tbk__subtitle fw-thin\">
\t\t\t\t\t{{\"We'll do everything we can to make you a satisfied customer!\"|__}}
\t\t\t\t</h4>
\t\t\t\t<!--/ Sub-Title -->
\t\t\t</div>
\t\t\t<!--/ col-md-9 col-sm-9 -->

\t\t\t<div class=\"col-sm-12 col-md-3 align-self-center\">
\t\t\t\t<!-- Button lined style -->
\t\t\t\t<a href=\"{{url('contact')}}\" class=\"btn btn-lined lined-custom btn-md btn-block\" >
\t\t\t\t\t<span>{{'Contact us'|__}}</span>
\t\t\t\t</a>
\t\t\t\t<!--/ Button lined style -->
\t\t\t</div>
\t\t\t<!--/ col-md-12 col-sm-3 -->
\t\t</div>
\t\t<!--/ row -->
\t</div>
\t<!--/ container -->
</section>
<!--/ Title with Call to Action Button section with custom paddings -->


 {% put styles %}
     <style>

     </style>
 {% endput %}
 {% put scripts %}
 <script type=\"text/javascript\">
     \"use strict\";

     // Class Initialization
     jQuery(document).ready(function() {

     });
 </script>
 {% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/home.htm", "");
    }
}
