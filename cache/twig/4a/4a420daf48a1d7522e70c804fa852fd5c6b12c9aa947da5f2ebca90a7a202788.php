<?php

/* partials/header.html.twig */
class __TwigTemplate_417b41bfa2c157ae500cc857d6a83c43288e54b1857ef95d9ebfaade254b7681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<header id=\"header\" class=\"alt\">
    <h1><a href=\"index.html\">Slate <span>by Pixelarity</span></a></h1>
    <nav id=\"nav\">
        <ul>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 7
            echo "                    ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 8
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 9
                echo "                    <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 11
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </ul>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 11,  36 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <header id="header" class="alt">*/
/*     <h1><a href="index.html">Slate <span>by Pixelarity</span></a></h1>*/
/*     <nav id="nav">*/
/*         <ul>*/
/*             {% for page in pages.children %}*/
/*                     {% if page.visible %}*/
/*                     {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*                     <li class="{{ current_page }}"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*         </ul>*/
/*     </nav>*/
/* </header>*/
