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

/* C:\xampp\htdocs\Beta/themes/spotlayer/partials/notes.htm */
class __TwigTemplate_b6f6e6703796a2f6d2c2ec11241f2c5df9f2c7d2d3c0fdb37b88a002a87e1e1f extends \Twig\Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "notes", [], "any", false, false, false, 1))) {
            // line 2
            echo "
\t<div class=\"kt-notes kt-scroll kt-scroll--pull\" data-scroll=\"true\" style=\"height: 400px;\">
\t\t<div class=\"kt-notes__items\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "notes", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 6
                echo "\t\t\t\t<div class=\"kt-notes__item kt-notes__item--clean\">
\t\t\t\t\t<div class=\"kt-notes__media\">
\t\t\t\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "user", [], "any", false, false, false, 8), "avatar", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "user", [], "any", false, false, false, 9), "avatar", [], "any", false, false, false, 9), "thumb", [0 => 100, 1 => 100, 2 => "crop"], "method", false, false, false, 9), "html", null, true);
                    echo "\" alt=\"image\">
\t\t\t\t\t\t";
                } else {
                    // line 11
                    echo "\t\t\t\t\t\t\t<h3 class=\"kt-notes__user kt-font-boldest\">
\t\t\t\t\t\t\t\t";
                    // line 12
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12)), 0, 2), "html", null, true);
                    echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"kt-notes__content\">
\t\t\t\t\t\t<div class=\"kt-notes__section\">
\t\t\t\t\t\t\t<div class=\"kt-notes__info\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-notes__title\">
\t\t\t\t\t\t\t\t\t";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["You"]);
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "user", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"kt-notes__desc\">
\t\t\t\t\t\t\t\t\t ";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "created_at", [], "any", false, false, false, 28), "h:ia"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "created_at", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dateformat", [], "any", false, false, false, 28)), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["note"], "created_at", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<span class=\"kt-badge kt-badge--info kt-badge--inline\">";
                    echo call_user_func_array($this->env->getFilter('time_diff')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["note"], "created_at", [], "any", false, false, false, 31)]);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"kt-notes__body\">
\t\t\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "content", [], "any", false, false, false, 36), "html", null, true);
                echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</div>
\t</div>
";
        } else {
            // line 44
            echo "\t<div class=\"alert alert-solid-warning alert-bold fade show kt-margin-b-20\" role=\"alert\">
\t\t<div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
\t\t<div class=\"alert-text\">";
            // line 46
            echo call_user_func_array($this->env->getFilter('__')->getCallable(), ["There's no notes yet"]);
            echo ".</div>
\t\t<div class=\"alert-close\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
\t\t\t</button>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Beta/themes/spotlayer/partials/notes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  131 => 44,  126 => 41,  115 => 36,  110 => 33,  104 => 31,  102 => 30,  95 => 28,  91 => 26,  85 => 24,  79 => 22,  77 => 21,  69 => 15,  63 => 12,  60 => 11,  54 => 9,  52 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.notes is not empty %}

\t<div class=\"kt-notes kt-scroll kt-scroll--pull\" data-scroll=\"true\" style=\"height: 400px;\">
\t\t<div class=\"kt-notes__items\">
\t\t\t{% for note in item.notes %}
\t\t\t\t<div class=\"kt-notes__item kt-notes__item--clean\">
\t\t\t\t\t<div class=\"kt-notes__media\">
\t\t\t\t\t\t{% if note.user.avatar %}
\t\t\t\t\t\t\t<img src=\"{{note.user.avatar.thumb(100, 100,'crop')}}\" alt=\"image\">
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h3 class=\"kt-notes__user kt-font-boldest\">
\t\t\t\t\t\t\t\t{{note.user.name|capitalize|slice(0,2)}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"kt-notes__content\">
\t\t\t\t\t\t<div class=\"kt-notes__section\">
\t\t\t\t\t\t\t<div class=\"kt-notes__info\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"kt-notes__title\">
\t\t\t\t\t\t\t\t\t{% if note.user.id == user.id %}
\t\t\t\t\t\t\t\t\t\t{{'You'|__}}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{note.user.name}}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"kt-notes__desc\">
\t\t\t\t\t\t\t\t\t {{note.created_at|date('h:ia')}} {{note.created_at|date(settings.dateformat)}}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t{% if note.created_at %}
\t\t\t\t\t\t\t\t<span class=\"kt-badge kt-badge--info kt-badge--inline\">{{note.created_at|time_diff}}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"kt-notes__body\">
\t\t\t\t\t\t\t{{note.content}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% else %}
\t<div class=\"alert alert-solid-warning alert-bold fade show kt-margin-b-20\" role=\"alert\">
\t\t<div class=\"alert-icon\"><i class=\"fa fa-exclamation-triangle\"></i></div>
\t\t<div class=\"alert-text\">{{\"There's no notes yet\"|__}}.</div>
\t\t<div class=\"alert-close\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\"><i class=\"la la-close\"></i></span>
\t\t\t</button>
\t\t</div>
\t</div>
{% endif %}", "C:\\xampp\\htdocs\\Beta/themes/spotlayer/partials/notes.htm", "");
    }
}
