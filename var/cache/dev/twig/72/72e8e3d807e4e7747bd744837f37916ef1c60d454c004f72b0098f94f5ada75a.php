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

/* base.html.twig */
class __TwigTemplate_c1b3a8c979516d297ae30ecc48b2dad5d16a2dea5e11ec13b53c6b34c51030ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    </head>
    <body>
      ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guitarrón";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrapC2.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand mr-4\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Guitarrón</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item ml-3\">
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "RegistrarPost")) {
                // line 27
                echo "                  <a class=\"nav-link a active\" aria-current=\"page\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RegistrarPost");
                echo "\">Crear Post</a>
                  ";
            } else {
                // line 29
                echo "                  <a class=\"nav-link a\" aria-current=\"page\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RegistrarPost");
                echo "\">Crear Post</a>
                  ";
            }
            // line 31
            echo "                </li>
                <li class=\"nav-item\">
                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33) == "misPosts")) {
                // line 34
                echo "                  <a class=\"nav-link a ml-3 mr-5 active\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misPosts");
                echo "\">Mis Posts</a>
                  ";
            } else {
                // line 36
                echo "                  <a class=\"nav-link a ml-3 mr-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misPosts");
                echo "\">Mis Posts</a>
                  ";
            }
            // line 38
            echo "                </li>

                ";
            // line 41
            echo "
                  
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><button class=\"boton-nav a\">Logout</button></a>
                  ";
        } else {
            // line 45
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><button class=\"boton-nav a mr-3\">Login</button></a>
                    <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registro");
            echo "\"><button class=\"boton-nav a mr-3\">Registrate</button></a>
                  ";
        }
        // line 48
        echo "
                ";
        // line 50
        echo "                
                ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                  <div class=\"btn-group\" role=\"group\">
                        <button type=\"button\" class=\"btn-primary ml-3\" onclick=\"window.location.href='";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_posts_crud_index");
            echo "'\">📰</button>
                        <button type=\"button\" class=\"btn-primary\" onclick=\"window.location.href='";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_crud_index");
            echo "'\">🙍‍♂️</button>
                  </div>
                ";
        }
        // line 57
        echo "            </div>
          </div>
        </nav> 
          <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 61,  233 => 60,  228 => 57,  222 => 54,  218 => 53,  215 => 52,  213 => 51,  210 => 50,  207 => 48,  202 => 46,  197 => 45,  192 => 43,  188 => 41,  184 => 38,  178 => 36,  172 => 34,  170 => 33,  166 => 31,  160 => 29,  154 => 27,  151 => 26,  149 => 25,  139 => 18,  135 => 16,  125 => 15,  113 => 10,  108 => 9,  98 => 8,  79 => 5,  67 => 64,  65 => 15,  60 => 12,  57 => 8,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Guitarrón{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrapC2.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/stylesheet.css') }}\">
        {% endblock %}

    </head>
    <body>
      {% block body %}
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <div class=\"container-fluid\">
            <a class=\"navbar-brand mr-4\" href=\"{{ path('app_dashboard') }}\">Guitarrón</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item ml-3\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                {% if app.request.get('_route') == \"RegistrarPost\" %}
                  <a class=\"nav-link a active\" aria-current=\"page\" href=\"{{ path('RegistrarPost') }}\">Crear Post</a>
                  {% else %}
                  <a class=\"nav-link a\" aria-current=\"page\" href=\"{{ path('RegistrarPost') }}\">Crear Post</a>
                  {% endif %}
                </li>
                <li class=\"nav-item\">
                {% if app.request.get('_route') == \"misPosts\" %}
                  <a class=\"nav-link a ml-3 mr-5 active\" href=\"{{ path('misPosts') }}\">Mis Posts</a>
                  {% else %}
                  <a class=\"nav-link a ml-3 mr-3\" href=\"{{ path('misPosts') }}\">Mis Posts</a>
                  {% endif %}
                </li>

                {# Comprobamos que el usuario este registrado #}

                  
                    <a href=\"{{ path('app_logout') }}\"><button class=\"boton-nav a\">Logout</button></a>
                  {% else %}
                    <a href=\"{{ path('app_login') }}\"><button class=\"boton-nav a mr-3\">Login</button></a>
                    <a href=\"{{ path('app_registro') }}\"><button class=\"boton-nav a mr-3\">Registrate</button></a>
                  {% endif %}

                {# Comprobamos que el usuario sea admin #}
                
                {% if is_granted('ROLE_ADMIN') %}
                  <div class=\"btn-group\" role=\"group\">
                        <button type=\"button\" class=\"btn-primary ml-3\" onclick=\"window.location.href='{{ path('app_posts_crud_index') }}'\">📰</button>
                        <button type=\"button\" class=\"btn-primary\" onclick=\"window.location.href='{{ path('app_user_crud_index') }}'\">🙍‍♂️</button>
                  </div>
                {% endif %}
            </div>
          </div>
        </nav> 
          <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
          <script src=\"{{ asset('bootstrap/js/bootstrap.js') }}\"></script>
        
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony/templates/base.html.twig");
    }
}
