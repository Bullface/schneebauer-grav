<?php

/* partials/base.html.twig */
class __TwigTemplate_3333ce5a284f1dad118f7ef3ab414bed81411c6bcb9a2701c20481beb6564351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "    </head>

      <body>

        ";
        // line 43
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        <!-- Contact -->
            <section id=\"contact\" class=\"wrapper split\">
                <div class=\"inner\">
                    <section>
                        <h2>Send us a message</h2>
                        <form method=\"post\" action=\"#\">
                            <div class=\"row uniform\">
                                <div class=\"6u 12u\$(large) 6u(medium) 12u\$(xsmall)\">
                                    <label for=\"name\">Name</label>
                                    <input type=\"text\" name=\"name\" id=\"name\" />
                                </div>
                                <div class=\"6u\$ 12u\$(large) 6u\$(medium) 12u\$(xsmall)\">
                                    <label for=\"email\">Email</label>
                                    <input type=\"email\" name=\"email\" id=\"email\" />
                                </div>
                                <div class=\"12u\$\">
                                    <label for=\"message\">Message</label>
                                    <textarea name=\"message\" id=\"message\" rows=\"5\"></textarea>
                                </div>
                                <div class=\"12u\$\">
                                    <ul class=\"actions\">
                                        <li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
                                        <li><input type=\"reset\" value=\"Reset\" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section>
                        <h2>Other ways to reach us</h2>
                        <ul class=\"bulleted-icons\">
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-envelope\"></span></span>
                                <h3>Email</h3>
                                <p><a href=\"#\">information@untitled.tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-twitter\"></span></span>
                                <h3>Twitter</h3>
                                <p><a href=\"#\">twitter.com/untitled-tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-phone\"></span></span>
                                <h3>Phone</h3>
                                <p>(800) 555-0000</p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-facebook\"></span></span>
                                <h3>Facebook</h3>
                                <p><a href=\"#\">facebook.com/untitled-tld</a></p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-home\"></span></span>
                                <h3>Mailing Address</h3>
                                <p>1234 Fictional Avenue<br />
                                Nashville, TN 00000<br />
                                United States
                                </p>
                            </li>
                            <li>
                                <span class=\"icon-wrapper\"><span class=\"icon fa-linkedin\"></span></span>
                                <h3>LinkedIn</h3>
                                <p><a href=\"#\">linkedin.com/untitled-tld</a></p>
                            </li>
                        </ul>
                    </section>
                </div>
            </section>

        <!-- Footer -->
            <footer id=\"footer\">
                <div class=\"inner\">
                    <p class=\"copyright\">&copy; Untitled Corp. All rights reserved. Lorem ipsum dolor sit amet feugiat tempus aliquam.</p>
                    <ul class=\"menu\">
                        <li><a href=\"#\">Terms<span> of Use</span></a></li>
                        <li><a href=\"#\">Privacy<span> Policy</span></a></li>
                        <li><a href=\"#\">Legal<span> Information</span></a></li>
                    </ul>
                </div>
            </footer>
            ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "
    </body>
    ";
        // line 138
        $this->displayBlock('bottom', $context, $blocks);
        // line 141
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
       

        ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/main.css", 1 => 101), "method");
        // line 22
        echo "             ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            echo " 
                ";
            // line 23
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/ie8.css", 1 => 102), "method");
            // line 24
            echo "            ";
        }
        // line 25
        echo "            ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            echo " 
                ";
            // line 26
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/ie9.css", 1 => 103), "method");
            // line 27
            echo "            ";
        }
        // line 28
        echo "            <noscript>";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/noscript.css", 1 => 104), "method");
        echo "</noscript>
            ";
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/app.css", 1 => 100), "method");
        // line 31
        echo "
            ";
        // line 32
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 120), "method");
        // line 127
        echo "
            ";
        // line 128
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.dropotron.min.js", 1 => 110), "method");
        // line 129
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/jquery.scrollex.min.js", 1 => 105), "method");
        // line 130
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/skel.min.js", 1 => 104), "method");
        // line 131
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/util.js", 1 => 103), "method");
        // line 132
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/main.js", 1 => 100), "method");
        // line 133
        echo "
            ";
        // line 134
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 138
    public function block_bottom($context, array $blocks = array())
    {
        // line 139
        echo "     
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 139,  272 => 138,  266 => 134,  263 => 133,  260 => 132,  257 => 131,  254 => 130,  251 => 129,  249 => 128,  246 => 127,  243 => 126,  240 => 125,  235 => 44,  229 => 32,  226 => 31,  223 => 30,  218 => 28,  215 => 27,  213 => 26,  208 => 25,  205 => 24,  203 => 23,  198 => 22,  195 => 21,  192 => 20,  185 => 34,  183 => 20,  174 => 18,  168 => 16,  162 => 14,  159 => 13,  153 => 11,  147 => 9,  145 => 8,  140 => 5,  137 => 4,  133 => 141,  131 => 138,  127 => 136,  125 => 125,  43 => 45,  40 => 44,  37 => 43,  31 => 38,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.add('theme://css/main.css',101) %}*/
/*              {% if browser.getBrowser == 'msie' and browser.getVersion == 8%} */
/*                 {% do assets.add('theme://css/ie8.css',102) %}*/
/*             {% endif %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion == 9%} */
/*                 {% do assets.add('theme://css/ie9.css',103) %}*/
/*             {% endif %}*/
/*             <noscript>{% do assets.add('theme://css/noscript.css',104) %}</noscript>*/
/*             {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/app.css',100) %}*/
/* */
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*        */
/* */
/*         {% endblock head %}*/
/*     </head>*/
/* */
/*       <body>*/
/* */
/*         {# include the header + navigation #}*/
/*         {% include 'partials/header.html.twig' %}*/
/*         {% block content %}{% endblock %}*/
/*         <!-- Contact -->*/
/*             <section id="contact" class="wrapper split">*/
/*                 <div class="inner">*/
/*                     <section>*/
/*                         <h2>Send us a message</h2>*/
/*                         <form method="post" action="#">*/
/*                             <div class="row uniform">*/
/*                                 <div class="6u 12u$(large) 6u(medium) 12u$(xsmall)">*/
/*                                     <label for="name">Name</label>*/
/*                                     <input type="text" name="name" id="name" />*/
/*                                 </div>*/
/*                                 <div class="6u$ 12u$(large) 6u$(medium) 12u$(xsmall)">*/
/*                                     <label for="email">Email</label>*/
/*                                     <input type="email" name="email" id="email" />*/
/*                                 </div>*/
/*                                 <div class="12u$">*/
/*                                     <label for="message">Message</label>*/
/*                                     <textarea name="message" id="message" rows="5"></textarea>*/
/*                                 </div>*/
/*                                 <div class="12u$">*/
/*                                     <ul class="actions">*/
/*                                         <li><input type="submit" value="Send Message" class="special" /></li>*/
/*                                         <li><input type="reset" value="Reset" /></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </section>*/
/*                     <section>*/
/*                         <h2>Other ways to reach us</h2>*/
/*                         <ul class="bulleted-icons">*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-envelope"></span></span>*/
/*                                 <h3>Email</h3>*/
/*                                 <p><a href="#">information@untitled.tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-twitter"></span></span>*/
/*                                 <h3>Twitter</h3>*/
/*                                 <p><a href="#">twitter.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-phone"></span></span>*/
/*                                 <h3>Phone</h3>*/
/*                                 <p>(800) 555-0000</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-facebook"></span></span>*/
/*                                 <h3>Facebook</h3>*/
/*                                 <p><a href="#">facebook.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-home"></span></span>*/
/*                                 <h3>Mailing Address</h3>*/
/*                                 <p>1234 Fictional Avenue<br />*/
/*                                 Nashville, TN 00000<br />*/
/*                                 United States*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <span class="icon-wrapper"><span class="icon fa-linkedin"></span></span>*/
/*                                 <h3>LinkedIn</h3>*/
/*                                 <p><a href="#">linkedin.com/untitled-tld</a></p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </section>*/
/*                 </div>*/
/*             </section>*/
/* */
/*         <!-- Footer -->*/
/*             <footer id="footer">*/
/*                 <div class="inner">*/
/*                     <p class="copyright">&copy; Untitled Corp. All rights reserved. Lorem ipsum dolor sit amet feugiat tempus aliquam.</p>*/
/*                     <ul class="menu">*/
/*                         <li><a href="#">Terms<span> of Use</span></a></li>*/
/*                         <li><a href="#">Privacy<span> Policy</span></a></li>*/
/*                         <li><a href="#">Legal<span> Information</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </footer>*/
/*             {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 120) %}*/
/* */
/*             {% do assets.add('theme://js/jquery.dropotron.min.js', 110) %}*/
/*             {% do assets.add('theme://js/jquery.scrollex.min.js',105) %}*/
/*             {% do assets.add('theme://js/skel.min.js',104) %}*/
/*             {% do assets.add('theme://js/util.js',103) %}*/
/*             {% do assets.add('theme://js/main.js',100) %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/*     {% block bottom %}*/
/*      */
/*     {% endblock %}*/
/* </html>*/
