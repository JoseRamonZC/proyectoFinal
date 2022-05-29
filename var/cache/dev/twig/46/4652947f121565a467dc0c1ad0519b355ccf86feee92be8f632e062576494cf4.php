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

/* posts/verPost.html.twig */
class __TwigTemplate_a0a377a4460c6bbd53868bdbe54ab95fd68c835b6691773aa40928d42e3dfccd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/verPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/verPost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/verPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ver Post";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container bg-white rounded my-3 p-4\">
        <div class=\"d-flex bd-highlight\">
            <div class=\"p-2 flex-grow-1 bd-highlight\">
                <h3>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "titulo", [], "any", false, false, false, 11), "html", null, true);
        echo "</h3>
                <div>
                    <i class=\"far fa-clock\"></i> <strong>Fecha de publicación: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "fechapublicacion", [], "any", false, false, false, 13)), "html", null, true);
        echo "</strong>
                </div>
            </div>
            <div class=\"p-2 bd-highlight\">
                <div class=\"align-self-center\">
                    <img class=\"rounded\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/fotos/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "foto", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" width=\"150px\">
                </div>
            </div>
        </div>
        <hr>
        <div class=\"text-justify my-3\">
           ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "contenido", [], "any", false, false, false, 24), "html", null, true);
        echo "
    <hr>
        </div>
         <div class=\"container p-3\">
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form');
        echo "
        <h3>Comentarios</h3>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) || array_key_exists("comentarios", $context) ? $context["comentarios"] : (function () { throw new RuntimeError('Variable "comentarios" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 31
            echo "            <div class=\"rounded bg-white my-2 p-3 border\">
                <h5>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "nombre", [], "any", false, false, false, 32), "html", null, true);
            echo " Dijo:</h5>
                <div class=\"w-100\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comentario"], "comentario", [], "any", false, false, false, 33), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 39
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["comentarios"]) || array_key_exists("comentarios", $context) ? $context["comentarios"] : (function () { throw new RuntimeError('Variable "comentarios" does not exist.', 39, $this->source); })()));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "posts/verPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  153 => 36,  144 => 33,  140 => 32,  137 => 31,  133 => 30,  128 => 28,  121 => 24,  112 => 18,  104 => 13,  99 => 11,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Ver Post{% endblock %}

{% block body %}

    {{ parent() }}
    <div class=\"container bg-white rounded my-3 p-4\">
        <div class=\"d-flex bd-highlight\">
            <div class=\"p-2 flex-grow-1 bd-highlight\">
                <h3>{{post.titulo}}</h3>
                <div>
                    <i class=\"far fa-clock\"></i> <strong>Fecha de publicación: {{post.fechapublicacion | date}}</strong>
                </div>
            </div>
            <div class=\"p-2 bd-highlight\">
                <div class=\"align-self-center\">
                    <img class=\"rounded\" src=\"{{ asset('uploads/fotos/'~post.foto) }}\" width=\"150px\">
                </div>
            </div>
        </div>
        <hr>
        <div class=\"text-justify my-3\">
           {{post.contenido}}
    <hr>
        </div>
         <div class=\"container p-3\">
        {{ form(form) }}
        <h3>Comentarios</h3>
        {% for comentario in comentarios %}
            <div class=\"rounded bg-white my-2 p-3 border\">
                <h5>{{ comentario.nombre }} Dijo:</h5>
                <div class=\"w-100\">{{ comentario.comentario }}</div>
            </div>
        {% endfor %}
    </div>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            {{ knp_pagination_render(comentarios) }}
        </div>
    </div>
</div>
{% endblock %}
", "posts/verPost.html.twig", "/var/www/html/symfony/templates/posts/verPost.html.twig");
    }
}
