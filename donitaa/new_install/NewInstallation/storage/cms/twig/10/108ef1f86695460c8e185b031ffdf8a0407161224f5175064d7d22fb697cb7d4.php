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

/* C:\xampp\htdocs\Beta/themes/spotlayer/pages/contact.htm */
class __TwigTemplate_a2c4edd50eb3b723aa52bcba8289a6cbb07c4502da9151c0d44b3abd0344f113 extends \Twig\Template
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
        echo "<!-- Google maps slideshow element + Bottom mask style 5 -->
\t\t<div class=\"kl-slideshow static-content__slideshow scontent__maps\">
\t\t\t<!-- Map with custom height -->
\t\t\t<div class=\"th-google_map\" style=\"height: 750px;\">
\t\t\t</div>
\t\t\t<!-- end map -->

\t\t\t<!-- Google map content panel -->
\t\t\t<div class=\"kl-contentmaps__panel\">
\t\t\t\t<a href=\"#\" class=\"js-toggle-class kl-contentmaps__panel-tgg hidden-xs\" data-target=\".kl-contentmaps__panel\" data-target-class=\"is-closed\"></a>
\t\t\t\t<!-- Image & Image pop-up -->
\t\t\t\t<a href=\"images/home-office-569359_640.jpg\" data-lightbox=\"image\" class=\"kl-contentmaps__panel-img\" style=\"background-image: url(./front/images/home-office-569359_640.jpg);\"></a>

\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"kl-contentmaps__panel-info\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h5 class=\"kl-contentmaps__panel-title\">
\t\t\t\t\t\t";
        // line 18
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18)]);
        echo "
\t\t\t\t\t</h5>

\t\t\t\t\t<!-- Description -->
\t\t\t\t\t<div class=\"kl-contentmaps__panel-info-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 24
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 24), "description", [], "any", false, false, false, 24)]);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--/ Content -->
\t\t\t</div>
\t\t\t<!-- Google map content panel -->

\t\t\t<!-- Bottom mask style 5 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask5\">
\t\t\t\t<svg width=\"2700px\" height=\"64px\" class=\"svgmask\" viewBox=\"0 0 2700 64\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<filter x=\"-50%\" y=\"-50%\" width=\"200%\" height=\"200%\" filterUnits=\"objectBoundingBox\" id=\"filter-mask5\">
\t\t\t\t\t\t\t<feOffset dx=\"0\" dy=\"2\" in=\"SourceAlpha\" result=\"shadowOffsetInner1\"></feOffset>
\t\t\t\t\t\t\t<feGaussianBlur stdDeviation=\"1.5\" in=\"shadowOffsetInner1\" result=\"shadowBlurInner1\"></feGaussianBlur>
\t\t\t\t\t\t\t<feComposite in=\"shadowBlurInner1\" in2=\"SourceAlpha\" operator=\"arithmetic\" k2=\"-1\" k3=\"1\" result=\"shadowInnerInner1\"></feComposite>
\t\t\t\t\t\t\t<feColorMatrix values=\"0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.45 0\" in=\"shadowInnerInner1\" type=\"matrix\" result=\"shadowMatrixInner1\"></feColorMatrix>
\t\t\t\t\t\t\t<feMerge>
\t\t\t\t\t\t\t\t<feMergeNode in=\"SourceGraphic\"></feMergeNode>
\t\t\t\t\t\t\t\t<feMergeNode in=\"shadowMatrixInner1\"></feMergeNode>
\t\t\t\t\t\t\t</feMerge>
\t\t\t\t\t\t</filter>
\t\t\t\t\t</defs>
\t\t\t\t\t<path d=\"M1892,0 L2119,44.993 L2701,45 L2701.133,63.993 L-0.16,63.993 L1.73847048e-12,45 L909,44.993 L1892,0 Z\" class=\"bmask-bgfill\" fill=\"#fbfbfb\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t\t<path d=\"M2216,44.993 L2093,55 L1882,6 L995,62 L966,42 L1892,0 L2118,44.993 L2216,44.993 L2216,44.993 Z\" fill=\"#cd2122\" class=\"bmask-customfill\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 5 -->
\t\t</div>
\t\t<!--/ Google maps slideshow element + Bottom mask style 5 -->


\t\t<!-- Contact form element & details section with custom paddings -->
\t\t<section class=\"hg_section pt-80 pb-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-9 col-lg-9 mb-sm-30\">
\t\t\t\t\t\t<!-- Contact form element -->
\t\t\t\t\t\t<div class=\"contactForm\">
\t\t\t\t\t\t\t<form action=\"mailto:";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 63), "primary_email", [], "any", false, false, false, 63), "html", null, true);
        echo "\" method=\"post\" class=\"contact_form row\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<!-- Response wrapper -->
\t\t\t\t\t\t\t\t<div class=\"cf_response\"></div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"cf_name\" class=\"form-control\" placeholder=\"";
        // line 68
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter your first name"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["FIRSTNAME"]);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"cf_lastname\" class=\"form-control\" placeholder=\"";
        // line 75
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter your last name"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["LASTNAME"]);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"cf_email\" class=\"form-control h5-email\" placeholder=\"";
        // line 82
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Please enter your email address"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
        // line 84
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["EMAIL"]);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" id=\"cf_subject\" class=\"form-control\" placeholder=\"";
        // line 89
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Enter the subject message"]);
        echo "\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["SUBJECT"]);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"cf_message\" class=\"form-control\" cols=\"30\" rows=\"10\" placeholder=\"";
        // line 96
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Your message"]);
        echo "\" tabindex=\"4\" required></textarea>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["MESSAGE"]);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-fullcolor\" type=\"submit\" name=\"contact\">
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["Send"]);
        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact form element -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-9 col-lg-9 mb-sm-30 -->

\t\t\t\t\t<div class=\"col-sm-12 col-md-3 col-lg-3\">
\t\t\t\t\t\t<!-- Contact details -->
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<h3 class=\"text_box-title text_box-title--style2\">
\t\t\t\t\t\t\t\t";
        // line 120
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["CONTACT INFO"]);
        echo "
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<!-- Sub-title -->
\t\t\t\t\t\t\t<h4>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 124), "address", [], "any", false, false, false, 124), "html", null, true);
        echo "</h4>

\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 128), "company_phone", [], "any", false, false, false, 128), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 129), "contact_phone", [], "any", false, false, false, 129), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 133), "primary_email", [], "any", false, false, false, 133), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 133), "primary_email", [], "any", false, false, false, 133), "html", null, true);
        echo "</a><br>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo url("/");
        echo "\">";
        echo twig_escape_filter($this->env, twig_replace_filter(url("/"), ["http://" => ""]), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact details -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-3 col-lg-3 -->
\t\t\t\t</div>
\t\t\t\t<!--/ .row -->
\t\t\t</div>
\t\t\t<!--/ .container -->
\t\t</section>
\t\t<!--/ Contact form element & details section with custom paddings -->
\t\t
";
        // line 147
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        echo "<!-- JS FILES // Loaded on this page -->
<!-- Required js scripts files for Google Maps element (create and use your API Key bellow) https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "google", [], "any", false, false, false, 149), "map", [], "any", false, false, false, 149), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"./front/js/plugins/jquery.gmap.min.js\"></script>

<!-- Requried js trigger file for Google Maps element -->
<script type=\"text/javascript\">
;(function(\$){
\t\"use strict\";

\t\$(document).ready(function() {

\t\t/*
\t\tFind the Latitude and Longitude of your address:
\t\t\t- http://itouchmap.com/latlong.html
\t\t\t- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
\t\t\t- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

\t\tFind settings explained:
\t\t\t- https://github.com/marioestrada/jQuery-gMap

\t\t*/

\t\t// Map Markers
\t\tvar mapMarkers = [{
\t\t\taddress: \"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 172), "address", [], "any", false, false, false, 172), "html", null, true);
        echo "\",
\t\t\tlatitude: ";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 173), "lat", [], "any", false, false, false, 173), "html", null, true);
        echo ",
\t\t\tlongitude: ";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 174), "lng", [], "any", false, false, false, 174), "html", null, true);
        echo ",
\t\t\ticon: {
\t\t\t\timage: \"./front/images/map-marker.png\",
\t\t\t\ticonsize: [32, 39], // w, h
\t\t\t\ticonanchor: [13,39] // x, y
\t\t\t},
\t\t\thtml: '<div style=\"width: 300px; padding: 15px;\"><h3 style=\"margin-bottom: 15px;\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('__')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 180), "title", [], "any", false, false, false, 180)]);
        echo "</span></h3><p class=\"nobottommargin\"><span style=\"line-height:1.4;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 180), "address", [], "any", false, false, false, 180), "html", null, true);
        echo "</span></p></div>',
\t\t}];

\t\t// Map Color Scheme - more styles here http://snazzymaps.com/
\t\tvar mapStyles = [
\t\t    {
\t\t        \"featureType\": \"landscape\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 60
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.local\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"transit\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"visibility\": \"simplified\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"administrative.province\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"water\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 30
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#ef8c25\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.stroke\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"poi.park\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#b6c54c\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"saturation\": -40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {}
\t\t];

\t\t// Map Initial Location
\t\tvar initLatitude = ";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 280), "lat", [], "any", false, false, false, 280), "html", null, true);
        echo ";
\t\tvar initLongitude = ";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "company", [], "any", false, false, false, 281), "lng", [], "any", false, false, false, 281), "html", null, true);
        echo ";

\t\t// Map Extended Settings
\t\tvar map = jQuery(\".th-google_map\").gMap({
\t\t\tcontrols: {
\t\t\t\tpanControl: true,
\t\t\t\tzoomControl: true,
\t\t\t\tzoomControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\tmapTypeControl: true,
\t\t\t\tscaleControl: true,
\t\t\t\tstreetViewControl: true,
\t\t\t\tstreetViewControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\toverviewMapControl: true
\t\t\t},
\t\t\tscrollwheel: false,
\t\t\tmarkers: mapMarkers,
\t\t\tlatitude: initLatitude,
\t\t\tlongitude: initLongitude,
\t\t\tzoom: 13,
\t\t\tstyle: mapStyles,
\t\t\tdraggable: Modernizr.touch ? false : true
\t\t});
\t});// end of document ready

})(jQuery);
</script>
";
        // line 147
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 147,  406 => 281,  402 => 280,  297 => 180,  288 => 174,  284 => 173,  280 => 172,  254 => 149,  249 => 147,  231 => 134,  225 => 133,  218 => 129,  214 => 128,  207 => 124,  200 => 120,  182 => 105,  172 => 98,  167 => 96,  159 => 91,  154 => 89,  146 => 84,  141 => 82,  133 => 77,  128 => 75,  120 => 70,  115 => 68,  107 => 63,  65 => 24,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Google maps slideshow element + Bottom mask style 5 -->
\t\t<div class=\"kl-slideshow static-content__slideshow scontent__maps\">
\t\t\t<!-- Map with custom height -->
\t\t\t<div class=\"th-google_map\" style=\"height: 750px;\">
\t\t\t</div>
\t\t\t<!-- end map -->

\t\t\t<!-- Google map content panel -->
\t\t\t<div class=\"kl-contentmaps__panel\">
\t\t\t\t<a href=\"#\" class=\"js-toggle-class kl-contentmaps__panel-tgg hidden-xs\" data-target=\".kl-contentmaps__panel\" data-target-class=\"is-closed\"></a>
\t\t\t\t<!-- Image & Image pop-up -->
\t\t\t\t<a href=\"images/home-office-569359_640.jpg\" data-lightbox=\"image\" class=\"kl-contentmaps__panel-img\" style=\"background-image: url(./front/images/home-office-569359_640.jpg);\"></a>

\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"kl-contentmaps__panel-info\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h5 class=\"kl-contentmaps__panel-title\">
\t\t\t\t\t\t{{ settings.company.title|__ }}
\t\t\t\t\t</h5>

\t\t\t\t\t<!-- Description -->
\t\t\t\t\t<div class=\"kl-contentmaps__panel-info-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ settings.company.description|__ }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--/ Content -->
\t\t\t</div>
\t\t\t<!-- Google map content panel -->

\t\t\t<!-- Bottom mask style 5 -->
\t\t\t<div class=\"kl-bottommask kl-bottommask--mask5\">
\t\t\t\t<svg width=\"2700px\" height=\"64px\" class=\"svgmask\" viewBox=\"0 0 2700 64\" version=\"1.1\" xmlns=\"https://www.w3.org/2000/svg\" xmlns:xlink=\"https://www.w3.org/1999/xlink\">
\t\t\t\t\t<defs>
\t\t\t\t\t\t<filter x=\"-50%\" y=\"-50%\" width=\"200%\" height=\"200%\" filterUnits=\"objectBoundingBox\" id=\"filter-mask5\">
\t\t\t\t\t\t\t<feOffset dx=\"0\" dy=\"2\" in=\"SourceAlpha\" result=\"shadowOffsetInner1\"></feOffset>
\t\t\t\t\t\t\t<feGaussianBlur stdDeviation=\"1.5\" in=\"shadowOffsetInner1\" result=\"shadowBlurInner1\"></feGaussianBlur>
\t\t\t\t\t\t\t<feComposite in=\"shadowBlurInner1\" in2=\"SourceAlpha\" operator=\"arithmetic\" k2=\"-1\" k3=\"1\" result=\"shadowInnerInner1\"></feComposite>
\t\t\t\t\t\t\t<feColorMatrix values=\"0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.45 0\" in=\"shadowInnerInner1\" type=\"matrix\" result=\"shadowMatrixInner1\"></feColorMatrix>
\t\t\t\t\t\t\t<feMerge>
\t\t\t\t\t\t\t\t<feMergeNode in=\"SourceGraphic\"></feMergeNode>
\t\t\t\t\t\t\t\t<feMergeNode in=\"shadowMatrixInner1\"></feMergeNode>
\t\t\t\t\t\t\t</feMerge>
\t\t\t\t\t\t</filter>
\t\t\t\t\t</defs>
\t\t\t\t\t<path d=\"M1892,0 L2119,44.993 L2701,45 L2701.133,63.993 L-0.16,63.993 L1.73847048e-12,45 L909,44.993 L1892,0 Z\" class=\"bmask-bgfill\" fill=\"#fbfbfb\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t\t<path d=\"M2216,44.993 L2093,55 L1882,6 L995,62 L966,42 L1892,0 L2118,44.993 L2216,44.993 L2216,44.993 Z\" fill=\"#cd2122\" class=\"bmask-customfill\" filter=\"url(#filter-mask5)\"></path>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<!--/ Bottom mask style 5 -->
\t\t</div>
\t\t<!--/ Google maps slideshow element + Bottom mask style 5 -->


\t\t<!-- Contact form element & details section with custom paddings -->
\t\t<section class=\"hg_section pt-80 pb-80\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-9 col-lg-9 mb-sm-30\">
\t\t\t\t\t\t<!-- Contact form element -->
\t\t\t\t\t\t<div class=\"contactForm\">
\t\t\t\t\t\t\t<form action=\"mailto:{{ settings.company.primary_email }}\" method=\"post\" class=\"contact_form row\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<!-- Response wrapper -->
\t\t\t\t\t\t\t\t<div class=\"cf_response\"></div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"cf_name\" class=\"form-control\" placeholder=\"{{\"Please enter your first name\"|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t{{\"FIRSTNAME\"|__}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"cf_lastname\" class=\"form-control\" placeholder=\"{{\"Please enter your last name\"|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t{{\"LASTNAME\"|__}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"cf_email\" class=\"form-control h5-email\" placeholder=\"{{\"Please enter your email address\"|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t{{\"EMAIL\"|__}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" id=\"cf_subject\" class=\"form-control\" placeholder=\"{{\"Enter the subject message\"|__}}\" value=\"\" tabindex=\"1\" maxlength=\"35\" required>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t{{\"SUBJECT\"|__}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12 kl-fancy-form\">
\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"cf_message\" class=\"form-control\" cols=\"30\" rows=\"10\" placeholder=\"{{\"Your message\"|__}}\" tabindex=\"4\" required></textarea>
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">
\t\t\t\t\t\t\t\t\t\t{{\"MESSAGE\"|__}}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<!-- Contact form send button -->
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-fullcolor\" type=\"submit\" name=\"contact\">
\t\t\t\t\t\t\t\t\t\t{{\"Send\"|__}}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact form element -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-9 col-lg-9 mb-sm-30 -->

\t\t\t\t\t<div class=\"col-sm-12 col-md-3 col-lg-3\">
\t\t\t\t\t\t<!-- Contact details -->
\t\t\t\t\t\t<div class=\"text_box\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<h3 class=\"text_box-title text_box-title--style2\">
\t\t\t\t\t\t\t\t{{\"CONTACT INFO\"|__}}
\t\t\t\t\t\t\t</h3>

\t\t\t\t\t\t\t<!-- Sub-title -->
\t\t\t\t\t\t\t<h4>{{ settings.company.address }}</h4>

\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{ settings.company.company_phone }}<br>
\t\t\t\t\t\t\t\t{{ settings.company.contact_phone }}
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"mailto:{{ settings.company.primary_email }}\">{{ settings.company.primary_email }}</a><br>
\t\t\t\t\t\t\t\t<a href=\"{{url('/')}}\">{{url('/')|replace({'http://':''})}}</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--/ Contact details -->
\t\t\t\t\t</div>
\t\t\t\t\t<!--/ col-sm-12 col-md-3 col-lg-3 -->
\t\t\t\t</div>
\t\t\t\t<!--/ .row -->
\t\t\t</div>
\t\t\t<!--/ .container -->
\t\t</section>
\t\t<!--/ Contact form element & details section with custom paddings -->
\t\t
{% put scripts %}<!-- JS FILES // Loaded on this page -->
<!-- Required js scripts files for Google Maps element (create and use your API Key bellow) https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key={{settings.google.map}}\"></script>
<script type=\"text/javascript\" src=\"./front/js/plugins/jquery.gmap.min.js\"></script>

<!-- Requried js trigger file for Google Maps element -->
<script type=\"text/javascript\">
;(function(\$){
\t\"use strict\";

\t\$(document).ready(function() {

\t\t/*
\t\tFind the Latitude and Longitude of your address:
\t\t\t- http://itouchmap.com/latlong.html
\t\t\t- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
\t\t\t- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

\t\tFind settings explained:
\t\t\t- https://github.com/marioestrada/jQuery-gMap

\t\t*/

\t\t// Map Markers
\t\tvar mapMarkers = [{
\t\t\taddress: \"{{ settings.company.address }}\",
\t\t\tlatitude: {{ settings.company.lat }},
\t\t\tlongitude: {{ settings.company.lng }},
\t\t\ticon: {
\t\t\t\timage: \"./front/images/map-marker.png\",
\t\t\t\ticonsize: [32, 39], // w, h
\t\t\t\ticonanchor: [13,39] // x, y
\t\t\t},
\t\t\thtml: '<div style=\"width: 300px; padding: 15px;\"><h3 style=\"margin-bottom: 15px;\">{{ settings.company.title|__ }}</span></h3><p class=\"nobottommargin\"><span style=\"line-height:1.4;\">{{ settings.company.address }}</span></p></div>',
\t\t}];

\t\t// Map Color Scheme - more styles here http://snazzymaps.com/
\t\tvar mapStyles = [
\t\t    {
\t\t        \"featureType\": \"landscape\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 60
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.local\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"transit\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"saturation\": -100
\t\t            },
\t\t            {
\t\t                \"visibility\": \"simplified\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"administrative.province\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"water\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"on\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 30
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#ef8c25\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"road.highway\",
\t\t        \"elementType\": \"geometry.stroke\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"visibility\": \"off\"
\t\t            }
\t\t        ]
\t\t    },
\t\t    {
\t\t        \"featureType\": \"poi.park\",
\t\t        \"elementType\": \"geometry.fill\",
\t\t        \"stylers\": [
\t\t            {
\t\t                \"color\": \"#b6c54c\"
\t\t            },
\t\t            {
\t\t                \"lightness\": 40
\t\t            },
\t\t            {
\t\t                \"saturation\": -40
\t\t            }
\t\t        ]
\t\t    },
\t\t    {}
\t\t];

\t\t// Map Initial Location
\t\tvar initLatitude = {{ settings.company.lat }};
\t\tvar initLongitude = {{ settings.company.lng }};

\t\t// Map Extended Settings
\t\tvar map = jQuery(\".th-google_map\").gMap({
\t\t\tcontrols: {
\t\t\t\tpanControl: true,
\t\t\t\tzoomControl: true,
\t\t\t\tzoomControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\tmapTypeControl: true,
\t\t\t\tscaleControl: true,
\t\t\t\tstreetViewControl: true,
\t\t\t\tstreetViewControlOptions: {
\t\t\t\t\tposition: google.maps.ControlPosition.RIGHT_CENTER
\t\t\t\t},
\t\t\t\toverviewMapControl: true
\t\t\t},
\t\t\tscrollwheel: false,
\t\t\tmarkers: mapMarkers,
\t\t\tlatitude: initLatitude,
\t\t\tlongitude: initLongitude,
\t\t\tzoom: 13,
\t\t\tstyle: mapStyles,
\t\t\tdraggable: Modernizr.touch ? false : true
\t\t});
\t});// end of document ready

})(jQuery);
</script>
{% endput %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/pages/contact.htm", "");
    }
}
